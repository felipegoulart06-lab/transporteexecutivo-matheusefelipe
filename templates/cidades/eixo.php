<?php

declare(strict_types=1);

/** @var array $c */
?>
<main id="conteudo" class="lp-eixo">
    <header class="lp-eixo__hero">
        <div class="lp-eixo__copy">
            <?php require dirname(__DIR__) . '/../includes/breadcrumb.php'; ?>
            <p class="kicker"><?= e($c['kicker']) ?></p>
            <h1><?= e($c['h1']) ?></h1>
            <p class="lp-lead"><?= e($c['lead']) ?></p>
            <a class="btn" href="#orcamento-cidade"><?= e($c['cta']['botao']) ?></a>
        </div>
        <figure class="lp-eixo__media">
            <?= imagem_responsiva($c['imagem'], $c['seo']['og_image_alt'], '(max-width: 900px) 100vw, 45vw') ?>
        </figure>
    </header>

    <div class="lp-eixo__body">
        <aside class="lp-eixo__toc" aria-label="Nesta página">
            <p>Nesta página</p>
            <ol>
                <li><a href="#contexto"><?= e($c['contexto']['h2']) ?></a></li>
                <li><a href="#bairros"><?= e($c['bairros']['h2']) ?></a></li>
                <li><a href="#aeroportos"><?= e($c['aeroportos']['h2']) ?></a></li>
                <li><a href="#faq"><?= e($c['faq_h2']) ?></a></li>
            </ol>
        </aside>
        <article>
            <section id="contexto">
                <h2><?= e($c['contexto']['h2']) ?></h2>
                <?php foreach ($c['contexto']['texto'] as $p): ?><p><?= e($p) ?></p><?php endforeach; ?>
            </section>
            <section id="bairros">
                <h2><?= e($c['bairros']['h2']) ?></h2>
                <div class="lp-cards">
                    <?php foreach ($c['bairros']['itens'] as $item): ?>
                        <article>
                            <h3><?= e($item['h3']) ?></h3>
                            <p><?= e($item['texto']) ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>
            <section id="aeroportos">
                <h2><?= e($c['aeroportos']['h2']) ?></h2>
                <?php foreach ($c['aeroportos']['itens'] as $item): ?>
                    <h3><?= e($item['h3']) ?></h3>
                    <p><?= e($item['texto']) ?></p>
                <?php endforeach; ?>
            </section>
            <section>
                <h2><?= e($c['rotas']['h2']) ?></h2>
                <ol class="lp-timeline">
                    <?php foreach ($c['rotas']['itens'] as $item): ?>
                        <li>
                            <strong><?= e($item['titulo']) ?></strong>
                            <span><?= e($item['texto']) ?></span>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </section>
            <section>
                <h2><?= e($c['como']['h2']) ?></h2>
                <ol class="passos">
                    <?php foreach ($c['como']['passos'] as $i => $passo): ?>
                        <li>
                            <em>0<?= $i + 1 ?></em>
                            <strong><?= e($passo['titulo']) ?></strong>
                            <span><?= e($passo['texto']) ?></span>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </section>
            <section id="faq">
                <h2><?= e($c['faq_h2']) ?></h2>
                <?php $perguntas = $c['faq']; require dirname(__DIR__) . '/../includes/faq.php'; ?>
            </section>
            <?php require __DIR__ . '/_cta.php'; ?>
            <?php require __DIR__ . '/_relacionados.php'; ?>
        </article>
    </div>
</main>
