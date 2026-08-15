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

if ($recurso === 'cidades') {
    $uf = strtoupper((string) ($_GET['uf'] ?? ''));
    if (!in_array($uf, ibge_ufs_validas(), true)) {
        http_response_code(400);
        echo json_encode(['ok' => false, 'erro' => 'UF inválida']);
        exit;
    }
    echo json_encode(['ok' => true, 'dados' => ibge_cidades($uf)], JSON_UNESCAPED_UNICODE);
    exit;
}

http_response_code(400);
echo json_encode(['ok' => false, 'erro' => 'Recurso inválido']);
