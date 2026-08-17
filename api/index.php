<?php

declare(strict_types=1);

$raiz = dirname(__DIR__);
chdir($raiz);

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$uri = rawurldecode($uri);

if ($uri === '/api/index.php') {
    $uri = '/';
}

if ($uri === '/' || $uri === '/index.php') {
    require $raiz . '/index.php';
    return;
}

if ($uri === '/sitemap.xml' || $uri === '/sitemap.php') {
    require $raiz . '/sitemap.php';
    return;
}

if ($uri === '/robots.txt') {
    require $raiz . '/robots.php';
    return;
}

if ($uri === '/api/localidades.php') {
    require $raiz . '/api/localidades.php';
    return;
}

if (preg_match('#^/transporte-executivo/([a-z0-9-]+)/([a-z0-9-]+)/(pessoas|objetos-de-valor)/?$#', $uri, $m)) {
    $estadoSlug = $m[1];
    $cidadeSlug = $m[2];
    $tipoSlug = $m[3];
    require $raiz . '/templates/cidade.php';
    return;
}

if (preg_match('#^/transporte-executivo/([a-z0-9-]+)/([a-z0-9-]+)/?$#', $uri, $m)) {
    $estadoSlug = $m[1];
    $cidadeSlug = $m[2];
    require $raiz . '/templates/cidade-landing.php';
    return;
}

if (preg_match('#^/transporte-executivo(?:/[a-z0-9-]+)*/?$#', $uri)) {
    $dir = rtrim($raiz . $uri, '/\\');
    if (is_dir($dir) && is_file($dir . '/index.php')) {
        require $dir . '/index.php';
        return;
    }
}

http_response_code(404);
require $raiz . '/404.php';
