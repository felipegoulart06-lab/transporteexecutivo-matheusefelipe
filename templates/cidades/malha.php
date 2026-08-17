<?php

declare(strict_types=1);

/** @var array $c */
$img = url_site(url_imagem($c['imagem'], 'jpg'));
?>
<main id="conteudo" class="lp-malha">
    <div class="lp-malha__bar">
        <?php require dirname(__DIR__) . '/../includes/breadcrumb.php'; ?>
        <p class="kicker"><?= e($c['kicker']) ?></p>
        <h1><?= e($c['h1']) ?></h1>
        <p><?= e($c['intro']) ?></p>
    </div>
    <div class="lp-malha__grid">
        <figure>
            <img src="<?= e($img) ?>" alt="<?= e($c['seo']['og_image_alt']) ?>" width="1600" height="900" fetchpriority="high" decoding="async">
        </figure>
        <section>
            <h2><?= e($c['blocos'][0]['h2']) ?></h2>
            <p><?= e($c['blocos'][0]['texto']) ?></p>
        </section>
    </div>
    <section class="lp-malha__quad">
        <h2><?= e($c['blocos'][1]['h2']) ?></h2>
        <div class="lp-malha__cells">
            <?php foreach ($c['blocos'][1]['itens'] as $item): ?>
                <article>
                    <h3><?= e($item['h3']) ?></h3>
                    <p><?= e($item['texto']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="lp-malha__combos">
        <h2><?= e($c['grade']['h2']) ?></h2>
        <ul>
            <?php foreach ($c['grade']['itens'] as $item): ?>
                <li>
                    <strong><?= e($item['titulo']) ?></strong>
                    <span><?= e($item['texto']) ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="lp-malha__faq">
        <h2><?= e($c['faq_h2']) ?></h2>
        <?php $perguntas = $c['faq']; require dirname(__DIR__) . '/../includes/faq.php'; ?>
        <?php require __DIR__ . '/_cta.php'; ?>
        <?php require __DIR__ . '/_relacionados.php'; ?>
    </section>
</main>
