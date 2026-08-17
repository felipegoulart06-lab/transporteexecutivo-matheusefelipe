<?php

declare(strict_types=1);

/** @var array $c */
$img = url_site(url_imagem($c['imagem'], 'jpg'));
?>
<main id="conteudo" class="lp-dunas">
    <div class="lp-dunas__linha">
        <div>
            <?php require dirname(__DIR__) . '/../includes/breadcrumb.php'; ?>
            <p class="kicker"><?= e($c['kicker']) ?></p>
            <h1><?= e($c['h1']) ?></h1>
            <section>
                <h2><?= e($c['trilha']['h2']) ?></h2>
                <p><?= e($c['trilha']['texto']) ?></p>
            </section>
        </div>
        <img src="<?= e($img) ?>" alt="<?= e($c['seo']['og_image_alt']) ?>" width="1600" height="900" fetchpriority="high" decoding="async">
    </div>
    <section class="lp-dunas__chips">
        <h2><?= e($c['chips']['h2']) ?></h2>
        <ul class="chips">
            <?php foreach ($c['chips']['itens'] as $chip): ?><li><?= e($chip) ?></li><?php endforeach; ?>
        </ul>
    </section>
    <?php foreach ($c['historias'] as $hist): ?>
        <section class="lp-dunas__hist">
            <h2><?= e($hist['h2']) ?></h2>
            <p><?= e($hist['texto']) ?></p>
        </section>
    <?php endforeach; ?>
    <section>
        <h2><?= e($c['faq_h2']) ?></h2>
        <?php $perguntas = $c['faq']; require dirname(__DIR__) . '/../includes/faq.php'; ?>
        <?php require __DIR__ . '/_cta.php'; ?>
        <?php require __DIR__ . '/_relacionados.php'; ?>
    </section>
</main>
