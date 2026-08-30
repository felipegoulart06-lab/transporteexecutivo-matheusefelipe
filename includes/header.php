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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= e(url_site('assets/css/app.css')) ?>">
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
