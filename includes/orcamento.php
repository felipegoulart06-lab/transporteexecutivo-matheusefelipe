<?php

declare(strict_types=1);

function tipos_viagem(): array
{
    return [
        'ida' => 'Somente ida',
        'ida_volta' => 'Ida e volta',
        'por_hora' => 'Por hora — a disposição',
    ];
}

function processar_orcamento(array $cidadesPorUf): array
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
            || ((string) ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
        session_start([
            'cookie_httponly' => true,
            'cookie_secure' => $https,
            'cookie_samesite' => 'Lax',
            'use_strict_mode' => true,
        ]);
    }
    if (empty($_SESSION['csrf'])) {
        $_SESSION['csrf'] = bin2hex(random_bytes(16));
    }

    $erros = [];
    $enviado = false;
    $resumo = null;
    $tipos = tipos_viagem();

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return compact('erros', 'enviado', 'resumo');
    }

    if (campo('fax') !== '') {
        return ['erros' => [], 'enviado' => true, 'resumo' => ['nome' => '']];
    }

    $ts = (int) campo('form_ts');
    $idadeFormulario = time() - $ts;
    if ($ts <= 0 || $idadeFormulario < 2 || $idadeFormulario > 7200) {
        $erros[] = 'Aguarde um instante e envie novamente.';
    }

    if (!hash_equals($_SESSION['csrf'] ?? '', campo('csrf'))) {
        $erros[] = 'Sessão expirada. Atualize a página e tente novamente.';
    }

    $estadoUf = strtoupper(campo('estado'));
    $cidade = campo('cidade');
    $cidadeDestino = campo('cidade_destino');
    $endereco = campo('endereco');
    $pessoas = (int) campo('pessoas');
    $tipo = campo('tipo');
    $nome = campo('nome');
    $email = campo('email');
    $whatsapp = preg_replace('/\D+/', '', campo('whatsapp')) ?? '';
    $data = campo('data');
    $horario = campo('horario');
    $mensagem = campo('mensagem');

    if (!isset($cidadesPorUf[$estadoUf])) {
        $erros[] = 'Selecione uma unidade da federação válida.';
    } else {
        if (!in_array($cidade, $cidadesPorUf[$estadoUf], true)) {
            $erros[] = 'Selecione a cidade de origem na lista.';
        }
        if (!in_array($cidadeDestino, $cidadesPorUf[$estadoUf], true)) {
            $erros[] = 'Selecione a cidade de destino na lista.';
        }
    }

    if (comprimento_visivel($endereco) < 8) {
        $erros[] = 'Informe o endereço completo do embarque.';
    } elseif (comprimento_visivel($endereco) > 200) {
        $erros[] = 'O endereço deve ter no máximo 200 caracteres.';
    }
    if ($pessoas < 1 || $pessoas > 16) {
        $erros[] = 'Informe a quantidade de passageiros (1 a 16).';
    }
    if (!isset($tipos[$tipo])) {
        $erros[] = 'Escolha o tipo de serviço.';
    }
    if (comprimento_visivel($nome) < 5 || !preg_match('/\s/u', $nome)) {
        $erros[] = 'Informe o nome completo.';
    } elseif (comprimento_visivel($nome) > 120) {
        $erros[] = 'O nome deve ter no máximo 120 caracteres.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = 'Informe um e-mail válido.';
    }
    if (strlen($whatsapp) < 10 || strlen($whatsapp) > 11) {
        $erros[] = 'Informe um WhatsApp válido com DDD.';
    }
    if ($data === '' || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $data)) {
        $erros[] = 'Informe a data do embarque.';
    } elseif ($data < date('Y-m-d')) {
        $erros[] = 'A data do embarque não pode ser no passado.';
    }
    if ($horario === '' || !preg_match('/^\d{2}:\d{2}$/', $horario)) {
        $erros[] = 'Informe o horário do embarque.';
    }
    if (comprimento_visivel($mensagem) > 1000) {
        $erros[] = 'A mensagem deve ter no máximo 1000 caracteres.';
    }

    if ($erros) {
        return compact('erros', 'enviado', 'resumo');
    }

    $resumo = [
        'estado' => catalogo()[slug_por_uf($estadoUf) ?? '']['nome'] ?? $estadoUf,
        'uf' => $estadoUf,
        'cidade' => $cidade,
        'cidade_destino' => $cidadeDestino,
        'endereco' => $endereco,
        'pessoas' => $pessoas,
        'tipo' => $tipos[$tipo],
        'nome' => $nome,
        'email' => $email,
        'whatsapp' => $whatsapp,
        'data' => $data,
        'horario' => $horario,
        'mensagem' => $mensagem,
        'quando' => date('d/m/Y H:i'),
    ];

    $ip = (string) ($_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? 'desconhecido');
    $ip = trim(explode(',', $ip)[0]);
    $dadosPersistencia = $resumo;
    $dadosPersistencia['_submission_hash'] = hash_hmac(
        'sha256',
        $ip . '|' . date('Y-m-d'),
        session_id()
    );

    if (!registrar_solicitacao($dadosPersistencia)) {
        error_log('Falha ao persistir solicitação de orçamento do site.');
        $erros[] = 'Não foi possível registrar o pedido agora. Tente novamente em alguns minutos.';
        return compact('erros', 'enviado', 'resumo');
    }

    $enviado = true;
    $_SESSION['csrf'] = bin2hex(random_bytes(16));

    return compact('erros', 'enviado', 'resumo');
}

function registrar_solicitacao(array $dados): bool
{
    if (!(bool) config('producao')) {
        return registrar_solicitacao_local($dados);
    }

    $base = rtrim((string) config('supabase_url'), '/');
    $key = (string) config('supabase_publishable_key');
    if ($base === '' || $key === '') {
        return false;
    }

    $payload = json_encode(['p_dados' => $dados], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    if ($payload === false) {
        return false;
    }

    $context = stream_context_create([
        'http' => [
            'method' => 'POST',
            'timeout' => 10,
            'ignore_errors' => true,
            'header' => implode("\r\n", [
                'Content-Type: application/json',
                'Accept: application/json',
                'apikey: ' . $key,
                'Authorization: Bearer ' . $key,
                'Content-Length: ' . strlen($payload),
            ]),
            'content' => $payload,
        ],
        'ssl' => [
            'verify_peer' => true,
            'verify_peer_name' => true,
        ],
    ]);

    $body = @file_get_contents($base . '/rest/v1/rpc/enviar_solicitacao_transporte', false, $context);
    $headers = $http_response_header ?? [];
    $status = 0;
    if (isset($headers[0]) && preg_match('/\s(\d{3})(?:\s|$)/', $headers[0], $match)) {
        $status = (int) $match[1];
    }
    if ($status < 200 || $status >= 300 || !is_string($body)) {
        error_log('Supabase recusou solicitação do site com HTTP ' . $status);
        return false;
    }

    $id = json_decode($body, true);
    return is_string($id) && (bool) preg_match(
        '/^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i',
        $id
    );
}

function registrar_solicitacao_local(array $dados): bool
{
    $pasta = rtrim(sys_get_temp_dir(), '/\\') . '/transporte-executivo';
    if (!is_dir($pasta) && !mkdir($pasta, 0700, true) && !is_dir($pasta)) {
        return false;
    }

    $handle = @fopen($pasta . '/solicitacoes.json', 'c+');
    if (!$handle || !flock($handle, LOCK_EX)) {
        if (is_resource($handle)) {
            fclose($handle);
        }
        return false;
    }

    $raw = stream_get_contents($handle);
    $lista = is_string($raw) && $raw !== '' ? json_decode($raw, true) : [];
    $lista = is_array($lista) ? $lista : [];
    $lista[] = $dados;
    $json = json_encode($lista, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    if ($json === false) {
        flock($handle, LOCK_UN);
        fclose($handle);
        return false;
    }

    rewind($handle);
    ftruncate($handle, 0);
    $ok = fwrite($handle, $json) !== false;
    fflush($handle);
    flock($handle, LOCK_UN);
    fclose($handle);

    return $ok;
}
