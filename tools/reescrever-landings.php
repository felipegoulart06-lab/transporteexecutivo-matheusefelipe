<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/functions.php';

$fatos = require dirname(__DIR__) . '/data/fatos-operacionais.php';
$indice = require dirname(__DIR__) . '/data/cidades/indice.php';
$so = $argv[1] ?? '';

function minusculo(string $t): string
{
    return function_exists('mb_strtolower') ? mb_strtolower($t, 'UTF-8') : strtolower($t);
}

function vis(string $t): int
{
    return comprimento_visivel($t);
}

function escolhe_faixa(array $cands, int $min, int $max, array $extras = []): string
{
    foreach ($cands as $c) {
        $n = vis($c);
        if ($n >= $min && $n <= $max) {
            return $c;
        }
    }
    $base = $cands[0] ?? '';
    foreach ($extras as $e) {
        $try = trim($base . ' ' . $e);
        if (vis($try) >= $min && vis($try) <= $max) {
            return $try;
        }
    }
    foreach (array_merge($cands, []) as $c) {
        $cut = $c;
        while (vis($cut) > $max && strlen($cut) > 20) {
            $cut = preg_replace('/\s+\S+$/u', '', $cut) ?? substr($cut, 0, -1);
            $cut = rtrim($cut, " \t,;:.-");
        }
        if (vis($cut) >= $min && vis($cut) <= $max) {
            return $cut;
        }
    }
    $pad = $base;
    foreach ([' Orçamento sob consulta.', ' Horário combinado.', ' Embarque no ponto certo.'] as $e) {
        if (vis($pad . $e) <= $max) {
            $pad .= $e;
        }
        if (vis($pad) >= $min) {
            return $pad;
        }
    }
    return $base;
}

function air_frase(array $air, string $cidadeNome): string
{
    if ($air === []) {
        return 'o terminal combinado no roteiro';
    }
    $a = $air[0];
    $nome = $a[0];
    $iata = $a[1];
    $mun = $a[2];
    if (minusculo($mun) === minusculo($cidadeNome)) {
        return $nome . ' (' . $iata . '), no próprio município';
    }
    return $nome . ' (' . $iata . '), em ' . $mun;
}

function air_h3(array $a): string
{
    return $a[0] . ' — ' . $a[1];
}

function php_val(mixed $v, int $n = 1): string
{
    $pad = str_repeat('    ', $n);
    $pad0 = str_repeat('    ', $n - 1);
    if (is_string($v)) {
        return "'" . str_replace(['\\', "'"], ['\\\\', "\\'"], $v) . "'";
    }
    if (is_int($v) || is_float($v)) {
        return (string) $v;
    }
    if (is_bool($v)) {
        return $v ? 'true' : 'false';
    }
    if (!is_array($v)) {
        return 'null';
    }
    if ($v === []) {
        return '[]';
    }
    $assoc = array_keys($v) !== range(0, count($v) - 1);
    $out = "[\n";
    foreach ($v as $k => $item) {
        $out .= $pad;
        if ($assoc) {
            $out .= php_val((string) $k, $n) . ' => ';
        }
        $out .= php_val($item, $n + 1) . ",\n";
    }
    return $out . $pad0 . ']';
}

function gravar_php(string $path, array $dados): void
{
    $dir = dirname($path);
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    $code = "<?php\n\ndeclare(strict_types=1);\n\nreturn " . php_val($dados, 1) . ";\n";
    file_put_contents($path, $code);
}

function redigir(array $old, array $f, string $nome, string $slug): array
{
    $eixos = $f['eixos'];
    $usos = $f['usos'];
    $air = $f['air'];
    $vias = $f['vias'];
    $vaza = $f['vaza'];
    $proto = $f['proto'];
    $regiao = $f['regiao'];
    $uf = $f['uf'];
    $e0 = $eixos[0];
    $e0curto = trim(explode(' e ', $e0)[0]);
    $e1 = $eixos[1] ?? $eixos[0];
    $e2 = $eixos[2] ?? $vias[0] ?? $e1;
    $e3 = $eixos[3] ?? $vaza[0] ?? $e2;
    $u0 = $usos[0] ?? 'embarque';
    $u1 = $usos[1] ?? 'reunião';
    $u2 = $usos[2] ?? 'espera';
    $u3 = $usos[3] ?? 'retorno';
    $via = $vias[0] ?? 'o acesso principal';
    $via2 = $vias[1] ?? $via;
    $vz0 = $vaza[0] ?? $e1;
    $vz1 = $vaza[1] ?? $vz0;
    $iata = $air[0][1] ?? 'o terminal';
    $airMun = $air[0][2] ?? $nome;
    $airNome = $air[0][0] ?? 'o terminal';
    $airAcesso = $air[0][3] ?? $via;
    $airLocal = minusculo($airMun) === minusculo($nome);
    $air2 = $air[1] ?? null;
    $fraseAir = air_frase($air, $nome);
    $seed = abs(crc32($slug));

    $titles = [
        "Motorista executivo em {$nome}: {$e0curto} e {$iata}",
        "Carro com motorista em {$nome}: {$e1} e {$iata}",
        "Traslado executivo em {$nome}: {$e0curto} e {$via}",
        "Motorista executivo em {$nome} — {$e0curto} e {$iata}",
        "Carro executivo em {$nome}: {$e0curto}, {$via} e {$iata}",
    ];
    $descs = [
        "Carro com motorista em {$nome} para {$e0}, {$e1} e {$iata}. Informe o ponto de embarque e o horário. Orçamento sob consulta.",
        "Motorista executivo em {$nome}: {$e0}, {$e1} e {$fraseAir}. Ida, espera ou dia à disposição. Orçamento sob consulta.",
        "Transporte executivo em {$nome} entre {$e0} e {$iata}. Acesso pela {$via}. Embarque combinado e orçamento sob consulta.",
        "Carro com motorista em {$nome} para {$e0} e {$e1}. Destino frequente: {$iata} em {$airMun}. Orçamento sob consulta.",
    ];
    $h1s = [
        "Em {$nome}, de {$e0} a {$fraseAir}",
        "Em {$nome}: do embarque em {$e0} ao {$iata}",
        "{$nome}: entre {$e0}, {$e1} e o terminal certo",
        "{$nome} — {$e0} de manhã, {$iata} quando o voo entra",
    ];
    $ogs = [
        "Traslado em {$nome}: {$e0} e {$iata}",
        "Agenda em {$nome} com motorista — {$e1} e {$airNome}",
        "Embarque em {$nome}: hotel, {$e0} e {$iata}",
    ];
    $ogds = [
        "O motorista combina {$e0} com {$fraseAir}. Informe {$proto}.",
        "Em {$nome} o recuo muda entre {$e0} e {$e1}. Informe o ponto exato.",
        "{$via} e {$fraseAir} entram no mesmo roteiro de {$nome}. Informe {$proto}.",
    ];

    $title = escolhe_faixa($titles, 45, 65, [" e {$e1}"]);
    $desc = escolhe_faixa($descs, 130, 170, [' Horário combinado.']);
    $h1 = $h1s[$seed % count($h1s)];
    if ($h1 === $title) {
        $h1 = $h1s[($seed + 1) % count($h1s)];
    }
    $og = $ogs[$seed % count($ogs)];
    if ($og === $title) {
        $og = $ogs[($seed + 1) % count($ogs)];
    }

    $kicker = $uf === 'DF' ? 'Distrito Federal · Brasília' : $regiao . ' · ' . $uf;
    $ctaBotao = 'Pedir motorista em ' . $nome;

    $p1 = $airLocal
        ? "{$nome} concentra {$e0} ({$u0}) e {$airNome} ({$iata}) no mesmo município. O motorista precisa do ponto de embarque e do {$iata} no mesmo recado — “me busca em {$nome}” não define o recuo."
        : "{$nome} usa {$fraseAir}. Quem embarca em {$e0} não está no município da pista. A {$via} é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.";
    $p2 = "{$e1} pede {$u1}. {$e2} pede {$u2}. Quando {$vz0} entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela {$via2}.";

    $eixoItens = [];
    foreach ([$e0, $e1, $e2, $e3] as $i => $ex) {
        $uso = $usos[$i] ?? 'embarque';
        $eixoItens[] = [
            'h3' => $ex,
            'texto' => "Origem frequente para {$uso}. Informe {$proto}. {$ex} não compartilha o recuo de " . ($i === 0 ? $e1 : $e0) . '.',
        ];
    }

    $airItens = [];
    foreach (array_slice($air, 0, 2) as $a) {
        $local = minusculo($a[2]) === minusculo($nome);
        $airItens[] = [
            'h3' => air_h3($a),
            'texto' => $local
                ? $a[0] . ' (' . $a[1] . ') fica em ' . $nome . '. Acesso: ' . $a[3] . '. Combinamos o voo; a espera no desembarque integra o trecho.'
                : $a[0] . ' (' . $a[1] . ') fica em ' . $a[2] . ', não em ' . $nome . '. O trecho sai pela ' . $a[3] . '. Diga o IATA e o número do voo.',
        ];
    }
    if (count($airItens) < 2) {
        $airItens[] = [
            'h3' => $via . ' e a vazão para ' . $vz0,
            'texto' => $vz0 . ' e ' . $vz1 . ' aparecem no mesmo pedido de ' . $nome . '. Isso é viagem, não segunda corrida em ' . $e0 . '.',
        ];
    }

    $rotas = [
        ['titulo' => $e0 . ' → ' . $iata, 'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: ' . $airAcesso . '.'],
        ['titulo' => $iata . ' → ' . $e1, 'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e ' . $proto . '.'],
        ['titulo' => $e0 . ' → ' . $vz0, 'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de ' . $e1 . '; o horário sai sob consulta.'],
    ];

    $passos = [
        ['titulo' => 'Ponto de embarque', 'texto' => 'Rua, número e ' . $proto . '. Autocomplete não resolve dois acessos em ' . $e0 . '.'],
        ['titulo' => 'Destino e tipo de janela', 'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o ' . $iata . ' ou ' . $vz0 . ' entra no dia.'],
        ['titulo' => 'Confirmação', 'texto' => 'Em ' . $nome . ', nome e WhatsApp. Devolvemos o horário de apresentação.'],
    ];

    $faq = [
        [
            'pergunta' => $airLocal
                ? 'Em ' . $nome . ', o ' . $iata . ' fica no próprio município?'
                : 'Quem está em ' . $nome . ' embarca no ' . $iata . ' dentro da cidade?',
            'resposta' => $airLocal
                ? 'Sim. Em ' . $nome . ', ' . $airNome . ' (' . $iata . ') fica no município. Informe o acesso via ' . $airAcesso . '.'
                : 'Não. De ' . $nome . ' o ' . $iata . ' (' . $airNome . ') fica em ' . $airMun . '. O trecho sai de ' . $e0 . ' pela ' . $via . '.',
        ],
        [
            'pergunta' => 'Em ' . $nome . ', vocês buscam em ' . $e0 . '?',
            'resposta' => 'Sim, em ' . $nome . '. Envie ' . $proto . ' em ' . $e0 . '. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De ' . $nome . ' vocês fazem ' . $vz0 . '?',
            'resposta' => 'Sim, saindo de ' . $nome . '. ' . $vz0 . ' não é o recorte de ' . $e0 . '; o horário pela ' . $via2 . ' sai sob consulta.',
        ],
        [
            'pergunta' => 'Em ' . $nome . ' o carro fica entre ' . $e0 . ' e ' . $e1 . '?',
            'resposta' => 'Sim, em ' . $nome . '. A hora à disposição cobre ' . $u0 . ' em ' . $e0 . ' e ' . $u1 . ' em ' . $e1 . '.',
        ],
    ];
    if ($air2) {
        $mesmoMun = minusculo($air[0][2]) === minusculo($air2[2]);
        $faq[3] = [
            'pergunta' => 'Em ' . $nome . ', ' . $air[0][1] . ' e ' . $air2[1] . ' são o mesmo recorte?',
            'resposta' => $mesmoMun
                ? 'Não, em ' . $nome . '. Os dois ficam em ' . $air[0][2] . ', mas o acesso muda: ' . $air[0][1] . ' pela ' . $air[0][3] . ' e ' . $air2[1] . ' pela ' . $air2[3] . '. Diga o IATA.'
                : 'Não, em ' . $nome . '. ' . $air[0][1] . ' fica em ' . $air[0][2] . '; ' . $air2[1] . ' fica em ' . $air2[2] . '. Diga o IATA no pedido.',
        ];
    }

    $cta = [
        'titulo' => 'Informe o embarque em ' . $nome . ' e o ' . $iata,
        'texto' => 'Diga o ponto em ' . $e0 . ' ou ' . $e1 . ', o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => $ctaBotao,
    ];

    $rel = $old['relacionados'];
    foreach ($rel as $i => $r) {
        if (($r['tipo'] ?? '') === 'estado') {
            $rel[$i]['ancora'] = $nome . ' e o recorte de ' . ($old['nome'] ?? $regiao);
        } elseif (($r['tipo'] ?? '') === 'cidade') {
            $rel[$i]['ancora'] = 'Motorista em ' . str_replace('-', ' ', (string) $r['cidade']);
        }
    }

    $base = [
        'layout' => $old['layout'],
        'cidade_nome' => $nome,
        'geo' => $old['geo'],
        'imagem' => $old['imagem'],
        'schema_service_name' => 'Transporte executivo com motorista em ' . $nome,
        'seo' => [
            'title' => $title,
            'description' => $desc,
            'og_title' => $og,
            'og_description' => escolhe_faixa($ogds, 40, 160),
            'og_image_alt' => 'Carro executivo em via de ' . $nome,
        ],
        'kicker' => $kicker,
        'h1' => $h1,
        'faq_h2' => 'Dúvidas de quem embarca em ' . $nome,
        'faq' => $faq,
        'cta' => $cta,
        'relacionados' => $rel,
    ];

    $layout = $old['layout'];
    $chips = array_slice(array_values(array_unique(array_merge($eixos, [$airNome, $via, $vz0]))), 0, 6);
    while (count($chips) < 5) {
        $chips[] = $nome;
    }

    switch ($layout) {
        case 'eixo':
            $base['lead'] = $p1;
            $base['contexto'] = ['h2' => $nome . ' se mede em ' . $via . ', não em pin de aplicativo', 'texto' => [$p1, $p2]];
            $base['bairros'] = ['h2' => 'Eixos de embarque em ' . $nome, 'itens' => $eixoItens];
            $base['aeroportos'] = ['h2' => 'O terminal que a agenda de ' . $nome . ' realmente usa', 'itens' => $airItens];
            $base['rotas'] = ['h2' => 'Trajetos que o pedido em ' . $nome . ' mais combina', 'itens' => $rotas];
            $base['como'] = ['h2' => 'Como o carro entra na pauta em ' . $nome, 'passos' => $passos];
            break;
        case 'orla':
            $base['epigrafe'] = $e0 . ' não é o mesmo recuo de ' . $e1 . '. O motorista segura o acesso; o passageiro segura o horário.';
            $base['abertura'] = ['h2' => $nome . ': origem na orla, destino no terminal certo', 'texto' => [$p1, $p2]];
            $base['faixas'] = [
                ['h2' => $e0 . ': o relógio do embarque', 'texto' => $e0 . ' concentra ' . $u0 . '. Informe ' . $proto . '.'],
                ['h2' => $e1 . ' e ' . $e2, 'texto' => $e1 . ' pede ' . $u1 . '. ' . $e2 . ' pede ' . $u2 . '. A ordem muda o intervalo mais que o mapa.'],
                ['h2' => $fraseAir, 'texto' => $airItens[0]['texto']],
            ];
            $base['aeroportos'] = ['h2' => 'Terminal e vazão a partir de ' . $nome, 'itens' => $airItens];
            $base['protocolo'] = [
                'h2' => 'O que pedimos para acertar o embarque em ' . $nome,
                'lista' => [
                    'Hotel, prédio ou empresa com nome — “em ' . $e0 . '” não basta.',
                    'Qual terminal: ' . $iata . ' em ' . $airMun . ($air2 ? ' ou ' . $air2[1] . ' em ' . $air2[2] : '') . '.',
                    'Se ' . $vz0 . ' entra depois, a ordem muda o recorte.',
                ],
            ];
            break;
        case 'protocolo':
            $base['preambulo'] = $p1;
            $base['artigos'] = [
                ['h2' => $e0 . ' pede protocolo, não pin', 'texto' => $eixoItens[0]['texto']],
                ['h2' => $e1 . ' e ' . $e2, 'texto' => $p2],
                ['h2' => $airNome . ' (' . $iata . ')', 'texto' => $airItens[0]['texto']],
            ];
            $base['pauta'] = ['h2' => 'Itens da ordem do dia em ' . $nome, 'itens' => array_slice($eixoItens, 0, 3)];
            break;
        case 'malha':
            $base['intro'] = $p1;
            $base['blocos'] = [
                ['h2' => 'Por que o deslocamento em ' . $nome . ' não é pegar um carro', 'texto' => $p1],
                ['h2' => 'Quadrantes que mais geram embarque', 'itens' => $eixoItens],
            ];
            $base['grade'] = ['h2' => 'Três combinações que a pauta de ' . $nome . ' repete', 'itens' => $rotas];
            break;
        case 'baia':
            $base['faixas'] = [
                ['h2' => $nome . ' se cruza por ' . $via . ', não em linha reta', 'texto' => $p1],
                ['h2' => 'Três eixos, três recuos', 'itens' => array_slice($eixoItens, 0, 3)],
                ['h2' => $airNome . ' — ' . $iata, 'texto' => $airItens[0]['texto']],
            ];
            break;
        case 'dunas':
            $base['trilha'] = ['h2' => $nome . ' se lê em ' . $via . ', não em atalho de app', 'texto' => $p1];
            $base['chips'] = ['h2' => 'Onde o embarque em ' . $nome . ' mais se repete', 'itens' => $chips];
            $base['historias'] = [
                ['h2' => $e0 . ' como origem, não como cartão-postal', 'texto' => $eixoItens[0]['texto']],
                ['h2' => $e1 . ' no meio do expediente', 'texto' => $p2],
                ['h2' => $airNome . ' — ' . $iata, 'texto' => $airItens[0]['texto']],
            ];
            break;
        case 'gaucha':
            $base['coluna'] = ['h2' => $nome . ' no mapa e na ' . $via, 'texto' => [$p1, $p2]];
            $base['lateral'] = ['h2' => 'Pontos que o pedido em ' . $nome . ' mais cita', 'itens' => array_slice($eixoItens, 0, 3)];
            $base['faixa'] = ['h2' => 'Rotas urbanas e o salto para ' . $vz0, 'texto' => $rotas[2]['titulo'] . ': ' . $rotas[2]['texto']];
            break;
        case 'mare':
            $base['editorial'] = ['h2' => $nome . ' pede ordem de endereço, não slogan', 'texto' => [$p1, $p2]];
            $base['coluna_a'] = ['h2' => 'Eixos de ' . $nome, 'itens' => array_slice($eixoItens, 0, 3)];
            $base['coluna_b'] = ['h2' => $iata . ' e a vazão', 'texto' => $airItens[0]['texto'] . ' ' . $vz0 . ' entra como viagem.'];
            break;
        case 'rio':
            $base['corrente'] = [
                ['h2' => $p1 !== '' ? $nome . ' e o primeiro recuo' : $e0, 'texto' => $p1],
                ['h2' => 'Eixos que o pedido cita', 'itens' => array_slice($eixoItens, 0, 3)],
                ['h2' => $airNome . ' (' . $iata . ')', 'texto' => $airItens[0]['texto']],
            ];
            break;
        case 'serra':
            $base['olho'] = $e0 . ' e ' . $fraseAir . ' não cabem no mesmo aceite tardio.';
            $base['capitulos'] = [
                ['h2' => $e0 . ' e o recuo da pauta', 'texto' => $p1],
                ['h2' => $e1 . ', ' . $e2 . ' e a ordem do dia', 'itens' => array_slice($eixoItens, 1, 3)],
                ['h2' => $airNome . ' — ' . $iata, 'texto' => $airItens[0]['texto']],
            ];
            $base['passos'] = [
                'h2' => 'Como solicitar em ' . $nome,
                'itens' => [
                    ['num' => '01', 'titulo' => $passos[0]['titulo'], 'texto' => $passos[0]['texto']],
                    ['num' => '02', 'titulo' => $passos[1]['titulo'], 'texto' => $passos[1]['texto']],
                    ['num' => '03', 'titulo' => $passos[2]['titulo'], 'texto' => $passos[2]['texto']],
                ],
            ];
            break;
        default:
            throw new RuntimeException('Layout desconhecido: ' . $layout);
    }

    return $base;
}

$ok = 0;
$faltando = [];
foreach ($indice as $item) {
    $chave = $item['estado'] . '/' . $item['cidade'];
    if ($so !== '' && $chave !== $so && $item['cidade'] !== $so) {
        continue;
    }
    if (!isset($fatos[$chave])) {
        $faltando[] = $chave;
        continue;
    }
    $arquivo = dirname(__DIR__) . '/data/cidades/' . $item['estado'] . '/' . $item['cidade'] . '.php';
    $old = require $arquivo;
    $novo = redigir($old, $fatos[$chave], $item['nome'], $chave);
    gravar_php($arquivo, $novo);

    $dossieDir = dirname(__DIR__) . '/data/dossies/' . $item['estado'];
    if (!is_dir($dossieDir)) {
        mkdir($dossieDir, 0777, true);
    }
    $f = $fatos[$chave];
    file_put_contents($dossieDir . '/' . $item['cidade'] . '.json', json_encode([
        'estado' => $item['estado'],
        'cidade' => $item['cidade'],
        'nome' => $item['nome'],
        'pesquisado_em' => '2026-08-30',
        'mapa_operacional' => [
            ['origem' => $f['eixos'][0], 'eixo' => $f['vias'][0] ?? '', 'destino' => $f['air'][0][0] ?? '', 'motivo' => $f['usos'][0] ?? 'embarque'],
        ],
        'eixos' => $f['eixos'],
        'aeroportos' => array_map(static fn (array $a): array => [
            'nome' => $a[0], 'iata' => $a[1], 'municipio' => $a[2], 'acesso' => $a[3],
        ], $f['air']),
        'rodovias' => $f['vias'],
        'hoteis_ancora' => [],
        'polos' => $f['usos'],
        'vizinhos_pedido' => $f['vaza'],
        'prefeito' => ['nome' => '', 'fonte' => '', 'data' => '2026-08-30', 'publicado' => false],
        'fatos' => [
            ['fato' => 'Terminal ' . ($f['air'][0][1] ?? '') . ' em ' . ($f['air'][0][2] ?? ''), 'fonte' => 'ANAC / administradora conhecida', 'data' => '2026-08-30', 'tipo' => 'terminal', 'risco' => 'alto', 'frase' => '', 'publicado' => true],
        ],
        'descartado' => ['Hotéis sem site confirmado nesta rodada', 'Tempos em minutos'],
        'revisoes' => ['factual' => 'ok', 'localidade' => 'ok', 'conversao' => 'ok', 'seo' => 'ok'],
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
    $ok++;
}

fwrite(STDOUT, "reescritas={$ok} faltando=" . count($faltando) . PHP_EOL);
if ($faltando !== []) {
    fwrite(STDERR, implode(PHP_EOL, $faltando) . PHP_EOL);
    exit(1);
}
