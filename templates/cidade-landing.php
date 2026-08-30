<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/bootstrap.php';

$estadoSlug = $estadoSlug ?? (string) ($_GET['estado'] ?? '');
$cidadeSlug = $cidadeSlug ?? (string) ($_GET['cidade'] ?? '');

$c = carregar_cidade($estadoSlug, $cidadeSlug);
$slug = $estadoSlug;
$ufAtual = $c['uf'];
$paginaAtual = 'cidade';
$classeBody = 'lp lp-' . preg_replace('/[^a-z0-9-]/', '', (string) $c['layout']);
$canonical = url_cidade_landing($estadoSlug, $cidadeSlug);
$imagemRel = url_imagem($c['imagem'], 'jpg');
$imagemAbs = url_site($imagemRel);

$seo = [
    'title' => $c['seo']['title'],
    'description' => $c['seo']['description'],
    'canonical' => $canonical,
    'robots' => 'index, follow',
    'og_title' => $c['seo']['og_title'],
    'og_description' => $c['seo']['og_description'],
    'og_image' => $imagemAbs,
    'og_image_alt' => $c['seo']['og_image_alt'],
];

$migalhas = [
    ['nome' => 'Início', 'url' => url_site()],
    ['nome' => 'Transporte Executivo', 'url' => url_site('transporte-executivo/')],
    ['nome' => $c['nome'], 'url' => url_estado($estadoSlug)],
    ['nome' => $c['cidade_nome'], 'url' => null],
];

$schemas = schemas_cidade($c, $canonical);
$layout = (string) $c['layout'];
$preloadImagem = $c['imagem'];
$preloadImagemSizes = match ($layout) {
    'malha' => '(max-width: 900px) 100vw, 55vw',
    'rio' => '(max-width: 900px) calc(100vw - 40px), 900px',
    'mare' => '(max-width: 900px) 100vw, 300px',
    'orla', 'baia' => '100vw',
    'eixo' => '(max-width: 900px) 100vw, 45vw',
    'dunas' => '(max-width: 900px) 100vw, 50vw',
    'protocolo' => '(max-width: 820px) calc(100vw - 40px), 820px',
    'gaucha' => '(max-width: 900px) 100vw, 36vw',
    'serra' => '(max-width: 980px) calc(100vw - 40px), 980px',
    default => '100vw',
};
$arquivoLayout = dirname(__DIR__) . '/templates/cidades/' . $layout . '.php';
if (!is_file($arquivoLayout)) {
    http_response_code(404);
    require dirname(__DIR__) . '/404.php';
    exit;
}

if (!headers_sent() && in_array(($_SERVER['REQUEST_METHOD'] ?? 'GET'), ['GET', 'HEAD'], true)) {
    header('Cache-Control: public, max-age=300, s-maxage=86400, stale-while-revalidate=604800');
}

require dirname(__DIR__) . '/includes/header.php';
require $arquivoLayout;
require dirname(__DIR__) . '/includes/footer.php';
