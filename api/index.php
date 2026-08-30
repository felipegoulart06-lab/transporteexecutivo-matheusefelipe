<?php

declare(strict_types=1);

$raiz = dirname(__DIR__);
chdir($raiz);

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$uri = rawurldecode($uri);
$host = strtolower(explode(':', (string) ($_SERVER['HTTP_HOST'] ?? ''))[0]);

if ($host === 'transporteexecutivo.com') {
    header('Location: https://www.transporteexecutivo.com' . ($_SERVER['REQUEST_URI'] ?? '/'), true, 301);
    return;
}

if ($uri === '/api/index.php') {
    http_response_code(404);
    require $raiz . '/404.php';
    return;
}
if ($uri === '/index.php') {
    header('Location: /', true, 301);
    return;
}
if ($uri === '/sitemap.php') {
    header('Location: /sitemap.xml', true, 301);
    return;
}
if ($uri === '/robots.php') {
    header('Location: /robots.txt', true, 301);
    return;
}
$query = (string) ($_SERVER['QUERY_STRING'] ?? '');
$querySuffix = $query !== '' ? '?' . $query : '';
if ($uri === '/transporte-executivo/index.php') {
    header('Location: /transporte-executivo/' . $querySuffix, true, 301);
    return;
}
if (preg_match('#^/transporte-executivo/([a-z0-9-]+)/index\.php$#', $uri, $m)) {
    header('Location: /transporte-executivo/' . $m[1] . '/' . $querySuffix, true, 301);
    return;
}

if (!str_ends_with($uri, '/')
    && preg_match('#^/transporte-executivo(?:/[a-z0-9-]+){0,2}$#', $uri)
) {
    header('Location: ' . $uri . '/' . $querySuffix, true, 301);
    return;
}

if ($uri === '/' || $uri === '/index.php') {
    require $raiz . '/index.php';
    return;
}

if ($uri === '/sitemap.xml') {
    require $raiz . '/sitemap.php';
    return;
}

if ($uri === '/robots.txt') {
    require $raiz . '/robots.php';
    return;
}

if ($uri === '/favicon.ico' || $uri === '/apple-touch-icon.png' || $uri === '/apple-touch-icon-precomposed.png') {
    $icone = $raiz . '/assets/images/' . ($uri === '/favicon.ico' ? 'favicon-32.png' : 'apple-touch-icon.png');
    header('Content-Type: image/png');
    header('Cache-Control: public, max-age=604800');
    readfile($icone);
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
