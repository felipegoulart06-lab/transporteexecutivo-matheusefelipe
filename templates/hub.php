<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/bootstrap.php';

$paginaAtual = 'hub';
$canonical = url_site('transporte-executivo/');
$ogImagem = url_site('assets/images/hero-transporte.jpg');

$seo = [
    'title' => 'Transporte executivo por unidade da federação',
    'description' => 'Escolha a unidade da federação e veja aeroportos, cidades e o tipo de deslocamento executivo de cada região. Orçamento com origem, destino e data.',
    'canonical' => $canonical,
    'og_title' => 'Transporte executivo por unidade da federação',
    'og_description' => 'Páginas locais de transporte executivo: capitais, aeroportos e rotas corporativas em cada UF.',
    'og_image' => $ogImagem,
    'og_image_alt' => 'Carro executivo preto pronto para embarque',
];

$migalhas = [
    ['nome' => 'Início', 'url' => url_site()],
    ['nome' => 'Transporte Executivo', 'url' => null],
];

$schemas = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        'name' => 'Transporte executivo por unidade da federação',
        'url' => $canonical,
        'isPartOf' => ['@type' => 'WebSite', 'name' => config('nome'), 'url' => url_site()],
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Início', 'item' => url_site()],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Transporte Executivo', 'item' => $canonical],
        ],
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => config('nome'),
        'url' => url_site(),
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => config('nome'),
        'url' => url_site(),
    ],
];

require dirname(__DIR__) . '/includes/header.php';
$grupos = estados_por_regiao();
?>
<main id="conteudo" class="hub">
    <header class="hub-head">
        <?php require dirname(__DIR__) . '/includes/breadcrumb.php'; ?>
        <h1>Transporte executivo por unidade da federação</h1>
        <p>Cada página trata de aeroportos, cidades e rotinas reais daquele território — inclusive o Distrito Federal, que não é estado. Não é o mesmo texto com o nome trocado.</p>
    </header>
    <?php foreach ($grupos as $regiao => $lista): ?>
        <section class="hub-regiao">
            <h2><?= e($regiao) ?></h2>
            <ul>
                <?php foreach ($lista as $item): ?>
                    <li>
                        <a href="<?= e(url_estado($item['slug'])) ?>">
                            <strong><?= e($item['nome']) ?></strong>
                            <span><?= e($item['capital']) ?> · <?= e($item['uf']) ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    <?php endforeach; ?>
</main>
<?php require dirname(__DIR__) . '/includes/footer.php'; ?>
