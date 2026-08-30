<?php

declare(strict_types=1);

/** @var array $c */
?>
<main id="conteudo" class="lp-mare">
    <header class="lp-mare__head">
        <?php require dirname(__DIR__) . '/../includes/breadcrumb.php'; ?>
        <p class="kicker"><?= e($c['kicker']) ?></p>
        <h1><?= e($c['h1']) ?></h1>
    </header>
    <div class="lp-mare__sheet">
        <article>
            <section>
                <h2><?= e($c['editorial']['h2']) ?></h2>
                <?php foreach ($c['editorial']['texto'] as $p): ?><p><?= e($p) ?></p><?php endforeach; ?>
            </section>
            <section>
                <h2><?= e($c['coluna_a']['h2']) ?></h2>
                <?php foreach ($c['coluna_a']['itens'] as $item): ?>
                    <h3><?= e($item['h3']) ?></h3>
                    <p><?= e($item['texto']) ?></p>
                <?php endforeach; ?>
            </section>
            <section>
                <h2><?= e($c['faq_h2']) ?></h2>
                <?php $perguntas = $c['faq']; require dirname(__DIR__) . '/../includes/faq.php'; ?>
            </section>
        </article>
        <aside>
            <?= imagem_responsiva($c['imagem'], $c['seo']['og_image_alt'], '(max-width: 900px) 100vw, 300px') ?>
            <h2><?= e($c['coluna_b']['h2']) ?></h2>
            <p><?= e($c['coluna_b']['texto']) ?></p>
            <?php require __DIR__ . '/_cta.php'; ?>
        </aside>
    </div>
    <?php require __DIR__ . '/_relacionados.php'; ?>
</main>
