<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/bootstrap.php';
require_once dirname(__DIR__) . '/includes/ibge.php';

header('Content-Type: application/json; charset=UTF-8');
header('Cache-Control: public, max-age=3600');

$recurso = (string) ($_GET['recurso'] ?? '');

if ($recurso === 'estados') {
    echo json_encode(['ok' => true, 'dados' => ibge_estados()], JSON_UNESCAPED_UNICODE);
    exit;
}

if ($recurso === 'landings') {
    $catalogo = catalogo();
    $grupos = [];
    foreach (indice_cidades() as $item) {
        $slug = (string) ($item['estado'] ?? '');
        if ($slug === '' || !isset($catalogo[$slug])) {
            continue;
        }
        if (!isset($grupos[$slug])) {
            $grupos[$slug] = [
                'slug' => $slug,
                'uf' => (string) $catalogo[$slug]['uf'],
                'nome' => (string) $catalogo[$slug]['nome'],
                'cidades' => [],
            ];
        }
        $grupos[$slug]['cidades'][] = [
            'slug' => (string) $item['cidade'],
            'nome' => (string) $item['nome'],
        ];
    }
    $saida = array_values($grupos);
    usort($saida, static fn (array $a, array $b): int => $a['nome'] <=> $b['nome']);
    foreach ($saida as &$grupo) {
        usort($grupo['cidades'], static fn (array $a, array $b): int => $a['nome'] <=> $b['nome']);
    }
    unset($grupo);
    echo json_encode(['ok' => true, 'dados' => $saida], JSON_UNESCAPED_UNICODE);
    exit;
}

if ($recurso === 'cidades') {
    $uf = strtoupper((string) ($_GET['uf'] ?? ''));
    if (!in_array($uf, ibge_ufs_validas(), true)) {
        http_response_code(400);
        echo json_encode(['ok' => false, 'erro' => 'UF inválida']);
        exit;
    }
    echo json_encode(['ok' => true, 'dados' => ibge_cidades_principais($uf)], JSON_UNESCAPED_UNICODE);
    exit;
}

http_response_code(400);
echo json_encode(['ok' => false, 'erro' => 'Recurso inválido']);
