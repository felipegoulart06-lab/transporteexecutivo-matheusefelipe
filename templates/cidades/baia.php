<?php

declare(strict_types=1);

/** @var array $c */
$img = url_site(url_imagem($c['imagem'], 'jpg'));
?>
<main id="conteudo" class="lp-baia">
    <header class="lp-baia__hero" style="--lp-img:url('<?= e($img) ?>')">
        <div>
            <?php require dirname(__DIR__) . '/../includes/breadcrumb.php'; ?>
            <p class="kicker"><?= e($c['kicker']) ?></p>
            <h1><?= e($c['h1']) ?></h1>
        </div>
    </header>
    <?php foreach ($c['faixas'] as $i => $faixa): ?>
        <section class="lp-baia__faixa <?= $i % 2 === 1 ? 'is-alt' : '' ?>">
            <h2><?= e($faixa['h2']) ?></h2>
            <?php if (!empty($faixa['texto'])): ?><p><?= e($faixa['texto']) ?></p><?php endif; ?>
            <?php foreach ($faixa['itens'] ?? [] as $item): ?>
                <h3><?= e($item['h3']) ?></h3>
                <p><?= e($item['texto']) ?></p>
            <?php endforeach; ?>
        </section>
    <?php endforeach; ?>
    <section class="lp-baia__base">
        <h2><?= e($c['faq_h2']) ?></h2>
        <?php $perguntas = $c['faq']; require dirname(__DIR__) . '/../includes/faq.php'; ?>
        <?php require __DIR__ . '/_cta.php'; ?>
        <?php require __DIR__ . '/_relacionados.php'; ?>
    </section>
</main>
