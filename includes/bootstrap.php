<?php

declare(strict_types=1);

require_once __DIR__ . '/functions.php';

$producao = (bool) config('producao');
ini_set('display_errors', $producao ? '0' : '1');
ini_set('log_errors', '1');
error_reporting(E_ALL);

if (!headers_sent()) {
    $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || strtolower((string) ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '')) === 'https';
    header_remove('X-Powered-By');
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('Referrer-Policy: strict-origin-when-cross-origin');
    header('Permissions-Policy: camera=(), microphone=(), geolocation=()');
    header("Content-Security-Policy: default-src 'self'; img-src 'self' data:; style-src 'self'; font-src 'self'; script-src 'self'; connect-src 'self'; object-src 'none'; base-uri 'self'; form-action 'self'; frame-ancestors 'self'");
    if ($producao && $https) {
        header('Strict-Transport-Security: max-age=63072000; includeSubDomains');
    }
}
