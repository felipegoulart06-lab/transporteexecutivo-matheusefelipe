<?php

declare(strict_types=1);

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$host = strtolower(explode(':', (string) ($_SERVER['HTTP_HOST'] ?? ''))[0]);

if ($host === 'transporteexecutivo.com') {
    header('Location: https://www.transporteexecutivo.com' . ($_SERVER['REQUEST_URI'] ?? '/'), true, 301);
    return true;
}

if ($uri === '/index.php') {
    header('Location: /', true, 301);
    return true;
}
if ($uri === '/sitemap.php') {
    header('Location: /sitemap.xml', true, 301);
    return true;
}
if ($uri === '/robots.php') {
    header('Location: /robots.txt', true, 301);
    return true;
}
if (preg_match('#^/transporte-executivo(?:/([a-z0-9-]+))?/index\.php$#', $uri, $match)) {
    $destino = '/transporte-executivo/' . (!empty($match[1]) ? $match[1] . '/' : '');
    header('Location: ' . $destino, true, 301);
    return true;
}
if (str_ends_with($uri, '.php') && $uri !== '/api/localidades.php') {
    http_response_code(404);
    require __DIR__ . '/404.php';
    return true;
}

if (!str_ends_with($uri, '/')
    && preg_match('#^/transporte-executivo(?:/[a-z0-9-]+){0,2}$#', $uri)
) {
    $query = (string) ($_SERVER['QUERY_STRING'] ?? '');
    header('Location: ' . $uri . '/' . ($query !== '' ? '?' . $query : ''), true, 301);
    return true;
}

if (preg_match('#^/(?:data|includes|templates|tools|docs)(?:/|$)#', $uri)) {
    http_response_code(404);
    require __DIR__ . '/404.php';
    return true;
}

if ($uri === '/sitemap.xml' || $uri === '/sitemap.php') {
    require __DIR__ . '/sitemap.php';
    return true;
}

if ($uri === '/robots.txt') {
    require __DIR__ . '/robots.php';
    return true;
}

if ($uri === '/favicon.ico' || $uri === '/apple-touch-icon.png' || $uri === '/apple-touch-icon-precomposed.png') {
    $icone = __DIR__ . '/assets/images/' . ($uri === '/favicon.ico' ? 'favicon-32.png' : 'apple-touch-icon.png');
    header('Content-Type: image/png');
    header('Cache-Control: public, max-age=604800');
    readfile($icone);
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
