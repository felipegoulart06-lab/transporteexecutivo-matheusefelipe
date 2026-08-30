<?php

declare(strict_types=1);

$paginaAtual = $paginaAtual ?? 'home';
$ocultarChrome = !empty($ocultarChrome);
$ctaOrcamento = ($paginaAtual === 'estado' && !empty($slug))
    ? '#orcamento'
    : (($paginaAtual === 'cidade' && !empty($slug))
        ? url_estado($slug) . '#orcamento'
        : url_orcamento($ufAtual ?? null));
$classeBody = $classeBody ?? '';
if (!isset($urlVoltar)) {
    $urlVoltar = ($paginaAtual === 'cidade' && !empty($slug))
        ? url_estado($slug)
        : (($paginaAtual === 'estado')
            ? url_site('transporte-executivo/')
            : url_site());
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require __DIR__ . '/seo.php'; ?>
    <link rel="preload" href="<?= e(url_site('assets/fonts/poppins-300-latin.woff2')) ?>" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= e(url_site('assets/fonts/poppins-400-latin.woff2')) ?>" as="font" type="font/woff2" crossorigin>
    <?php if (!empty($preloadImagem)):
        $preloadExt = arquivo_imagem_existe((string) $preloadImagem, 'avif')
            ? 'avif'
            : (arquivo_imagem_existe((string) $preloadImagem, 'webp') ? 'webp' : 'jpg');
        $preloadMime = $preloadExt === 'jpg' ? 'image/jpeg' : 'image/' . $preloadExt;
        $preloadHref = url_site(url_imagem((string) $preloadImagem, $preloadExt));
        $preloadSmall = 'assets/images/' . pathinfo((string) $preloadImagem, PATHINFO_FILENAME) . '-800.' . $preloadExt;
        $preloadSrcset = is_file(dirname(__DIR__) . '/' . $preloadSmall)
            ? url_site($preloadSmall) . ' 800w, ' . $preloadHref . ' 1536w'
            : '';
    ?>
    <link rel="preload" as="image" href="<?= e($preloadHref) ?>" type="<?= e($preloadMime) ?>"<?= $preloadSrcset !== '' ? ' imagesrcset="' . e($preloadSrcset) . '" imagesizes="' . e((string) ($preloadImagemSizes ?? '100vw')) . '"' : '' ?> fetchpriority="high">
    <?php endif; ?>
    <link rel="stylesheet" href="<?= e(url_site('assets/css/app.min.css')) ?>">
    <link rel="icon" href="<?= e(url_site('assets/images/favicon.svg')) ?>" type="image/svg+xml">
    <link rel="icon" href="<?= e(url_site('assets/images/favicon-32.png')) ?>" type="image/png" sizes="32x32">
    <link rel="apple-touch-icon" href="<?= e(url_site('assets/images/apple-touch-icon.png')) ?>">
    <?php require __DIR__ . '/schema.php'; ?>
</head>
<body class="page-<?= e($paginaAtual) ?><?= $classeBody !== '' ? ' ' . e($classeBody) : '' ?>">
    <a class="skip" href="#conteudo">Ir para o conteúdo</a>
    <?php if (!$ocultarChrome): ?>
    <header class="site-header">
        <div class="site-header__inner">
            <a class="site-back js-voltar" href="<?= e($urlVoltar) ?>">Voltar</a>
            <a class="logo" href="<?= e(url_site()) ?>">Transporte<span>Executivo</span></a>
            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="menu-principal">Menu</button>
            <nav id="menu-principal" class="menu" aria-label="Principal">
                <a href="<?= e(url_site()) ?>">Início</a>
                <a href="<?= e(url_site('transporte-executivo/')) ?>">Onde atendemos</a>
                <a href="<?= e($ctaOrcamento) ?>" class="menu-cta">Solicitar orçamento</a>
            </nav>
        </div>
    </header>
    <?php endif; ?>
