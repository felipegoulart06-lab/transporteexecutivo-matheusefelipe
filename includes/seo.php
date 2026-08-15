<?php

declare(strict_types=1);

/** @var array $seo */
$seo = $seo ?? [];
$titulo = $seo['title'] ?? (string) config('nome');
$descricao = $seo['description'] ?? (string) config('descricao_padrao');
$canonical = $seo['canonical'] ?? url_site();
$robots = $seo['robots'] ?? (string) config('robots_default');
$ogTitulo = $seo['og_title'] ?? $titulo;
$ogDescricao = $seo['og_description'] ?? $descricao;
$ogImagem = $seo['og_image'] ?? url_site((string) config('imagem_og_padrao'));
$ogImagemAlt = $seo['og_image_alt'] ?? $ogTitulo;
$ogTipo = $seo['og_type'] ?? 'website';
?>
<title><?= e($titulo) ?></title>
<meta name="description" content="<?= e($descricao) ?>">
<meta name="robots" content="<?= e($robots) ?>">
<link rel="canonical" href="<?= e($canonical) ?>">
<meta property="og:type" content="<?= e($ogTipo) ?>">
<meta property="og:locale" content="<?= e((string) config('locale')) ?>">
<meta property="og:site_name" content="<?= e((string) config('nome')) ?>">
<meta property="og:title" content="<?= e($ogTitulo) ?>">
<meta property="og:description" content="<?= e($ogDescricao) ?>">
<meta property="og:url" content="<?= e($canonical) ?>">
<meta property="og:image" content="<?= e($ogImagem) ?>">
<meta property="og:image:alt" content="<?= e($ogImagemAlt) ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= e($ogTitulo) ?>">
<meta name="twitter:description" content="<?= e($ogDescricao) ?>">
<meta name="twitter:image" content="<?= e($ogImagem) ?>">
<meta name="twitter:image:alt" content="<?= e($ogImagemAlt) ?>">
