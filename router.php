<?php

declare(strict_types=1);

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

if ($uri === '/sitemap.xml' || $uri === '/sitemap.php') {
    require __DIR__ . '/sitemap.php';
    return true;
}

if ($uri === '/robots.txt') {
    require __DIR__ . '/robots.php';
    return true;
}

if (preg_match('#^/transporte-executivo/([a-z0-9-]+)/([a-z0-9-]+)/(pessoas|objetos-de-valor)/?$#', $uri, $m)) {
    $estadoSlug = $m[1];
    $cidadeSlug = $m[2];
    $tipoSlug = $m[3];
    require __DIR__ . '/templates/cidade.php';
    return true;
}

if (preg_match('#^/transporte-executivo/([a-z0-9-]+)/([a-z0-9-]+)/?$#', $uri, $m)) {
    $estadoSlug = $m[1];
    $cidadeSlug = $m[2];
    require __DIR__ . '/templates/cidade-landing.php';
    return true;
}

$caminho = __DIR__ . $uri;
if ($uri !== '/' && is_file($caminho)) {
    return false;
}

$dir = rtrim($caminho, '/\\');
if (is_dir($dir) && is_file($dir . '/index.php')) {
    return false;
}

http_response_code(404);
require __DIR__ . '/404.php';
return true;
