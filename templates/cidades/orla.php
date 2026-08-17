<?php

declare(strict_types=1);

/** @var array $c */
$img = url_site(url_imagem($c['imagem'], 'jpg'));
?>
<main id="conteudo" class="lp-orla">
    <div class="lp-orla__top">
        <?php require dirname(__DIR__) . '/../includes/breadcrumb.php'; ?>
        <p class="kicker"><?= e($c['kicker']) ?></p>
        <h1><?= e($c['h1']) ?></h1>
        <p class="lp-orla__quote"><?= e($c['epigrafe']) ?></p>
    </div>
    <figure class="lp-orla__bleed">
        <img src="<?= e($img) ?>" alt="<?= e($c['seo']['og_image_alt']) ?>" width="1600" height="900" fetchpriority="high" decoding="async">
    </figure>
    <article class="lp-orla__art">
        <section>
            <h2><?= e($c['abertura']['h2']) ?></h2>
            <?php foreach ($c['abertura']['texto'] as $p): ?><p><?= e($p) ?></p><?php endforeach; ?>
        </section>
        <?php foreach ($c['faixas'] as $faixa): ?>
            <section class="lp-orla__band">
                <h2><?= e($faixa['h2']) ?></h2>
                <p><?= e($faixa['texto']) ?></p>
            </section>
        <?php endforeach; ?>
        <section class="lp-orla__air">
            <h2><?= e($c['aeroportos']['h2']) ?></h2>
            <div class="lp-orla__split">
                <?php foreach ($c['aeroportos']['itens'] as $item): ?>
                    <div>
                        <h3><?= e($item['h3']) ?></h3>
                        <p><?= e($item['texto']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <section>
            <h2><?= e($c['protocolo']['h2']) ?></h2>
            <ul class="lp-orla__list">
                <?php foreach ($c['protocolo']['lista'] as $item): ?><li><?= e($item) ?></li><?php endforeach; ?>
            </ul>
        </section>
        <section>
            <h2><?= e($c['faq_h2']) ?></h2>
            <?php $perguntas = $c['faq']; require dirname(__DIR__) . '/../includes/faq.php'; ?>
        </section>
        <?php require __DIR__ . '/_cta.php'; ?>
        <?php require __DIR__ . '/_relacionados.php'; ?>
    </article>
</main>
