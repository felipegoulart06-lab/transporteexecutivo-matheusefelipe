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
    if ($ts > 0 && (time() - $ts) < 2) {
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
    }
    if ($pessoas < 1 || $pessoas > 16) {
        $erros[] = 'Informe a quantidade de passageiros (1 a 16).';
    }
    if (!isset($tipos[$tipo])) {
        $erros[] = 'Escolha o tipo de serviço.';
    }
    if (comprimento_visivel($nome) < 5 || !preg_match('/\s/u', $nome)) {
        $erros[] = 'Informe o nome completo.';
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

    $pasta = dirname(__DIR__) . '/data';
    if (!is_dir($pasta)) {
        mkdir($pasta, 0755, true);
    }
    $arquivo = $pasta . '/solicitacoes.json';
    $lista = is_file($arquivo) ? (json_decode((string) file_get_contents($arquivo), true) ?: []) : [];
    $lista[] = $resumo;
    file_put_contents($arquivo, json_encode($lista, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

    $enviado = true;
    $_SESSION['csrf'] = bin2hex(random_bytes(16));

    return compact('erros', 'enviado', 'resumo');
}
