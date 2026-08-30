<?php

declare(strict_types=1);

/** @var array $c */
?>
<main id="conteudo" class="lp-protocolo">
    <div class="lp-protocolo__rule" aria-hidden="true"></div>
    <header class="lp-protocolo__head">
        <?php require dirname(__DIR__) . '/../includes/breadcrumb.php'; ?>
        <p class="kicker"><?= e($c['kicker']) ?></p>
        <h1><?= e($c['h1']) ?></h1>
        <p class="lp-protocolo__pre"><?= e($c['preambulo']) ?></p>
    </header>
    <figure class="lp-protocolo__fig">
        <?= imagem_responsiva($c['imagem'], $c['seo']['og_image_alt'], '(max-width: 820px) calc(100vw - 40px), 820px') ?>
    </figure>
    <article class="lp-protocolo__art">
        <?php foreach ($c['artigos'] as $art): ?>
            <section>
                <h2><?= e($art['h2']) ?></h2>
                <p><?= e($art['texto']) ?></p>
            </section>
        <?php endforeach; ?>
        <section class="lp-protocolo__pauta">
            <h2><?= e($c['pauta']['h2']) ?></h2>
            <ol>
                <?php foreach ($c['pauta']['itens'] as $item): ?>
                    <li>
                        <h3><?= e($item['h3']) ?></h3>
                        <p><?= e($item['texto']) ?></p>
                    </li>
                <?php endforeach; ?>
            </ol>
        </section>
        <section>
            <h2><?= e($c['faq_h2']) ?></h2>
            <?php $perguntas = $c['faq']; require dirname(__DIR__) . '/../includes/faq.php'; ?>
        </section>
        <?php require __DIR__ . '/_cta.php'; ?>
        <?php require __DIR__ . '/_relacionados.php'; ?>
    </article>
</main>
