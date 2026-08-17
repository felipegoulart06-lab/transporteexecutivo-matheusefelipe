<?php

declare(strict_types=1);

/** @var array $c */
$img = url_site(url_imagem($c['imagem'], 'jpg'));
?>
<main id="conteudo" class="lp-rio">
    <header class="lp-rio__topo">
        <?php require dirname(__DIR__) . '/../includes/breadcrumb.php'; ?>
        <p class="kicker"><?= e($c['kicker']) ?></p>
        <h1><?= e($c['h1']) ?></h1>
        <img src="<?= e($img) ?>" alt="<?= e($c['seo']['og_image_alt']) ?>" width="1600" height="900" fetchpriority="high" decoding="async">
    </header>
    <?php foreach ($c['corrente'] as $i => $bloco): ?>
        <section class="lp-rio__painel" data-n="<?= $i + 1 ?>">
            <h2><?= e($bloco['h2']) ?></h2>
            <?php if (!empty($bloco['texto'])): ?><p><?= e($bloco['texto']) ?></p><?php endif; ?>
            <?php foreach ($bloco['itens'] ?? [] as $item): ?>
                <h3><?= e($item['h3']) ?></h3>
                <p><?= e($item['texto']) ?></p>
            <?php endforeach; ?>
        </section>
    <?php endforeach; ?>
    <section class="lp-rio__fim">
        <h2><?= e($c['faq_h2']) ?></h2>
        <?php $perguntas = $c['faq']; require dirname(__DIR__) . '/../includes/faq.php'; ?>
        <?php require __DIR__ . '/_cta.php'; ?>
        <?php require __DIR__ . '/_relacionados.php'; ?>
    </section>
</main>
