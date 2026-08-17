<?php

declare(strict_types=1);

/** @var array $c */
$img = url_site(url_imagem($c['imagem'], 'jpg'));
?>
<main id="conteudo" class="lp-serra">
    <header class="lp-serra__head">
        <?php require dirname(__DIR__) . '/../includes/breadcrumb.php'; ?>
        <p class="kicker"><?= e($c['kicker']) ?></p>
        <h1><?= e($c['h1']) ?></h1>
        <p class="lp-serra__olho"><?= e($c['olho']) ?></p>
    </header>
    <figure class="lp-serra__fig">
        <img src="<?= e($img) ?>" alt="<?= e($c['seo']['og_image_alt']) ?>" width="1600" height="900" fetchpriority="high" decoding="async">
    </figure>
    <article class="lp-serra__prose">
        <?php foreach ($c['capitulos'] as $cap): ?>
            <section>
                <h2><?= e($cap['h2']) ?></h2>
                <?php if (!empty($cap['texto'])): ?><p><?= e($cap['texto']) ?></p><?php endif; ?>
                <?php foreach ($cap['itens'] ?? [] as $item): ?>
                    <h3><?= e($item['h3']) ?></h3>
                    <p><?= e($item['texto']) ?></p>
                <?php endforeach; ?>
            </section>
        <?php endforeach; ?>
        <section class="lp-serra__nums">
            <h2><?= e($c['passos']['h2']) ?></h2>
            <ol>
                <?php foreach ($c['passos']['itens'] as $item): ?>
                    <li>
                        <span><?= e($item['num']) ?></span>
                        <div>
                            <strong><?= e($item['titulo']) ?></strong>
                            <p><?= e($item['texto']) ?></p>
                        </div>
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
