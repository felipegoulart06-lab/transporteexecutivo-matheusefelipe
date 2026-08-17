<?php

declare(strict_types=1);

/** @var array $c */
$img = url_site(url_imagem($c['imagem'], 'jpg'));
?>
<main id="conteudo" class="lp-gaucha">
    <div class="lp-gaucha__split">
        <div>
            <?php require dirname(__DIR__) . '/../includes/breadcrumb.php'; ?>
            <p class="kicker"><?= e($c['kicker']) ?></p>
            <h1><?= e($c['h1']) ?></h1>
            <section>
                <h2><?= e($c['coluna']['h2']) ?></h2>
                <?php foreach ($c['coluna']['texto'] as $p): ?><p><?= e($p) ?></p><?php endforeach; ?>
            </section>
        </div>
        <aside>
            <img src="<?= e($img) ?>" alt="<?= e($c['seo']['og_image_alt']) ?>" width="1600" height="900" fetchpriority="high" decoding="async">
            <h2><?= e($c['lateral']['h2']) ?></h2>
            <?php foreach ($c['lateral']['itens'] as $item): ?>
                <h3><?= e($item['h3']) ?></h3>
                <p><?= e($item['texto']) ?></p>
            <?php endforeach; ?>
        </aside>
    </div>
    <section class="lp-gaucha__faixa">
        <h2><?= e($c['faixa']['h2']) ?></h2>
        <p><?= e($c['faixa']['texto']) ?></p>
    </section>
    <div class="lp-gaucha__baixo">
        <h2><?= e($c['faq_h2']) ?></h2>
        <?php $perguntas = $c['faq']; require dirname(__DIR__) . '/../includes/faq.php'; ?>
        <?php require __DIR__ . '/_cta.php'; ?>
        <?php require __DIR__ . '/_relacionados.php'; ?>
    </div>
</main>
