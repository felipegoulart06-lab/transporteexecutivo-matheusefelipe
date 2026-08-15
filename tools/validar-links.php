<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/bootstrap.php';
require_once __DIR__ . '/relatorio.php';

function validar_links(): array
{
    $r = relatorio_novo();
    $raiz = dirname(__DIR__);

    foreach (['assets/css/app.css', 'assets/js/app.js', 'assets/js/orcamento.js', 'assets/images/hero-transporte.jpg'] as $rel) {
        if (!is_file($raiz . '/' . $rel)) {
            relatorio_erro($r, 'asset', $rel . ' ausente');
        }
    }

    foreach (catalogo() as $slug => $meta) {
        $img = $raiz . '/assets/images/' . $meta['imagem'];
        if (!is_file($img)) {
            relatorio_erro($r, $slug, 'imagem ' . $meta['imagem'] . ' ausente');
        } else {
            $kb = (int) round(filesize($img) / 1024);
            if ($kb > 400) {
                relatorio_aviso($r, $slug, "imagem pesada ({$kb} KB)");
            }
            if (!is_file($raiz . '/assets/images/' . pathinfo($meta['imagem'], PATHINFO_FILENAME) . '.webp')) {
                relatorio_info($r, $slug, 'WebP indisponível neste ambiente; JPG otimizado em uso');
            }
        }
        foreach ($meta['relacionados'] as $rel) {
            if (!isset(catalogo()[$rel])) {
                relatorio_erro($r, $slug, 'relacionado inválido: ' . $rel);
            }
            if (!is_file($raiz . '/transporte-executivo/' . $rel . '/index.php')) {
                relatorio_erro($r, $slug, 'URL relacionada sem wrapper: ' . $rel);
            }
        }
    }

    $base = rtrim((string) config('url'), '/');
    $urls = [url_site(), url_site('transporte-executivo/'), url_site('sitemap.php')];
    foreach (array_keys(catalogo()) as $slug) {
        $urls[] = url_estado($slug);
    }

    $httpOk = false;
    foreach ($urls as $url) {
        $codigo = http_local($url);
        if ($codigo === null) {
            relatorio_aviso($r, 'http', 'servidor local indisponível para checagem HTTP');
            break;
        }
        $httpOk = true;
        if ($codigo !== 200) {
            relatorio_erro($r, 'http', $url . ' retornou ' . $codigo);
        }
    }
    if ($httpOk) {
        relatorio_info($r, 'http', count($urls) . ' URLs respondendo');
        $quebrada = http_local($base . '/pagina-inexistente-nero-teste');
        if ($quebrada !== 404 && $quebrada !== null) {
            relatorio_aviso($r, 'http', 'URL inexistente retornou ' . $quebrada . ' (esperado 404)');
        }
    }

    return $r;
}

function http_local(string $url): ?int
{
    $ctx = stream_context_create(['http' => ['timeout' => 2, 'ignore_errors' => true]]);
    $ok = @file_get_contents($url, false, $ctx);
    if ($ok === false && empty($http_response_header)) {
        return null;
    }
    if (!empty($http_response_header[0]) && preg_match('/\s(\d{3})\s/', $http_response_header[0], $m)) {
        return (int) $m[1];
    }
    return $ok !== false ? 200 : null;
}

if (realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === realpath(__FILE__)) {
    exit(relatorio_imprimir('LINKS', validar_links()) > 0 ? 1 : 0);
}
