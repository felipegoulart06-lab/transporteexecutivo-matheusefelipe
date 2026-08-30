<?php

declare(strict_types=1);

/** @var array $seo */
$seo = $seo ?? [];
$titulo = $seo['title'] ?? (string) config('nome');
$descricao = $seo['description'] ?? (string) config('descricao_padrao');
$canonical = array_key_exists('canonical', $seo) ? $seo['canonical'] : url_site();
$robots = $seo['robots'] ?? (string) config('robots_default');
$ogTitulo = $seo['og_title'] ?? $titulo;
$ogDescricao = $seo['og_description'] ?? $descricao;
$ogImagem = $seo['og_image'] ?? url_site((string) config('imagem_og_padrao'));
$ogImagemAlt = $seo['og_image_alt'] ?? $ogTitulo;
$ogTipo = $seo['og_type'] ?? 'website';
$ogImagemLargura = (int) ($seo['og_image_width'] ?? 1536);
$ogImagemAltura = (int) ($seo['og_image_height'] ?? 1024);
?>
<title><?= e($titulo) ?></title>
<meta name="description" content="<?= e($descricao) ?>">
<meta name="robots" content="<?= e($robots) ?>">
<?php if (is_string($canonical) && $canonical !== ''): ?>
<link rel="canonical" href="<?= e($canonical) ?>">
<?php endif; ?>
<meta property="og:type" content="<?= e($ogTipo) ?>">
<meta property="og:locale" content="<?= e((string) config('locale')) ?>">
<meta property="og:site_name" content="<?= e((string) config('nome')) ?>">
<meta property="og:title" content="<?= e($ogTitulo) ?>">
<meta property="og:description" content="<?= e($ogDescricao) ?>">
<?php if (is_string($canonical) && $canonical !== ''): ?>
<meta property="og:url" content="<?= e($canonical) ?>">
<?php endif; ?>
<meta property="og:image" content="<?= e($ogImagem) ?>">
<meta property="og:image:alt" content="<?= e($ogImagemAlt) ?>">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="<?= $ogImagemLargura ?>">
<meta property="og:image:height" content="<?= $ogImagemAltura ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= e($ogTitulo) ?>">
<meta name="twitter:description" content="<?= e($ogDescricao) ?>">
<meta name="twitter:image" content="<?= e($ogImagem) ?>">
<meta name="twitter:image:alt" content="<?= e($ogImagemAlt) ?>">
