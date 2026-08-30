<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/bootstrap.php';

$estadoSlug = $estadoSlug ?? (string) ($_GET['estado'] ?? '');
$cidadeSlug = $cidadeSlug ?? (string) ($_GET['cidade'] ?? '');
$tipoSlug = $tipoSlug ?? (string) ($_GET['tipo'] ?? '');
$tipos = tipos_servico();

if (!preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $estadoSlug)
    || !preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $cidadeSlug)
    || !isset($tipos[$tipoSlug])
) {
    http_response_code(404);
    require dirname(__DIR__) . '/404.php';
    exit;
}

if ($tipoSlug === 'pessoas' && cidade_publicada($estadoSlug, $cidadeSlug)) {
    header('Location: ' . url_cidade_landing($estadoSlug, $cidadeSlug), true, 301);
    exit;
}

if ($tipoSlug === 'objetos-de-valor' && cidade_publicada($estadoSlug, $cidadeSlug)) {
    header('Location: https://delivery.transporteexecutivo.com/', true, 301);
    exit;
}

http_response_code(404);
require dirname(__DIR__) . '/404.php';
