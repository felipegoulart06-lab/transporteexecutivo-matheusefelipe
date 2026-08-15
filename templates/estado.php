<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/bootstrap.php';
require_once dirname(__DIR__) . '/includes/orcamento.php';

$slug = $slug ?? '';
$estado = carregar_estado($slug);
$ufAtual = $estado['uf'];
$paginaAtual = 'estado';
$imagemArquivo = $estado['imagem'];
$imagemRel = url_imagem($imagemArquivo, 'jpg');
$imagemWebp = url_imagem($imagemArquivo, 'webp');
$temWebp = arquivo_imagem_existe($imagemArquivo, 'webp');
$imagemAbs = url_site($imagemRel);
$canonical = url_estado($slug);

$estados = require dirname(__DIR__) . '/includes/estados-cidades.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST' && campo('estado') === '') {
    $_POST['estado'] = $ufAtual;
}
$orcamento = processar_orcamento(array_map(static fn (array $i): array => $i['cidades'], $estados));
$erros = $orcamento['erros'];
$enviado = $orcamento['enviado'];
$resumo = $orcamento['resumo'];
$acaoFormulario = url_estado($slug) . '#orcamento';
$ufTravada = $ufAtual;

$seo = [
    'title' => $estado['seo']['title'],
    'description' => $estado['seo']['description'],
    'canonical' => $canonical,
    'robots' => 'index, follow',
    'og_title' => $estado['seo']['og_title'],
    'og_description' => $estado['seo']['og_description'],
    'og_image' => $imagemAbs,
    'og_image_alt' => $estado['seo']['og_image_alt'],
];

$migalhas = [
    ['nome' => 'Início', 'url' => url_site()],
    ['nome' => 'Transporte Executivo', 'url' => url_site('transporte-executivo/')],
    ['nome' => $estado['nome'], 'url' => null],
];

$schemas = schemas_estado($estado, $canonical);

require dirname(__DIR__) . '/includes/header.php';
$kicker = $estado['uf'] === 'DF'
    ? $estado['regiao'] . ' · Distrito Federal'
    : $estado['regiao'] . ' · ' . $estado['uf'];
?>
<main id="conteudo">
    <div class="page-hero">
        <picture class="page-hero__media">
            <?php if ($temWebp): ?>
                <source type="image/webp" srcset="<?= e(url_site($imagemWebp)) ?>">
            <?php endif; ?>
            <img src="<?= e(url_site($imagemRel)) ?>" alt="<?= e($estado['seo']['og_image_alt']) ?>" width="1600" height="900" fetchpriority="high" decoding="async">
        </picture>
        <div class="page-hero__inner">
            <?php require dirname(__DIR__) . '/includes/breadcrumb.php'; ?>
            <p class="kicker"><?= e($kicker) ?></p>
            <h1><?= e($estado['h1']) ?></h1>
            <div class="intro">
                <?php foreach ($estado['intro'] as $paragrafo): ?>
                    <p><?= e($paragrafo) ?></p>
                <?php endforeach; ?>
            </div>
            <a class="btn" href="#orcamento">Solicitar orçamento</a>
        </div>
    </div>

    <article class="prose">
        <section>
            <h2><?= e($estado['secao_estado']['h2']) ?></h2>
            <?php foreach ($estado['secao_estado']['texto'] as $paragrafo): ?>
                <p><?= e($paragrafo) ?></p>
            <?php endforeach; ?>
            <figure>
                <picture>
                    <?php if ($temWebp): ?>
                        <source type="image/webp" srcset="<?= e(url_site($imagemWebp)) ?>">
                    <?php endif; ?>
                    <img src="<?= e(url_site($imagemRel)) ?>" alt="<?= e($estado['secao_estado']['imagem_alt']) ?>" width="1600" height="900" loading="lazy" decoding="async">
                </picture>
                <figcaption><?= e($estado['secao_estado']['legenda']) ?></figcaption>
            </figure>
        </section>

        <section>
            <h2><?= e($estado['servicos']['h2']) ?></h2>
            <p><?= e($estado['servicos']['intro']) ?></p>
            <?php $servicos = $estado['servicos']['itens']; require dirname(__DIR__) . '/includes/service-card.php'; ?>
        </section>

        <section>
            <h2><?= e($estado['cidades']['h2']) ?></h2>
            <?php foreach ($estado['cidades']['itens'] as $cidade): ?>
                <h3><?= e($cidade['h3']) ?></h3>
                <p><?= e($cidade['texto']) ?></p>
            <?php endforeach; ?>
        </section>

        <section>
            <h2><?= e($estado['aeroportos']['h2']) ?></h2>
            <?php foreach ($estado['aeroportos']['itens'] as $aero): ?>
                <h3><?= e($aero['h3']) ?></h3>
                <p><?= e($aero['texto']) ?></p>
            <?php endforeach; ?>
        </section>

        <section>
            <h2><?= e($estado['por_que']['h2']) ?></h2>
            <ul class="beneficios">
                <?php foreach ($estado['por_que']['beneficios'] as $item): ?>
                    <li>
                        <strong><?= e($item['titulo']) ?></strong>
                        <span><?= e($item['texto']) ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section>
            <h2><?= e($estado['como_funciona']['h2']) ?></h2>
            <ol class="passos">
                <?php foreach ($estado['como_funciona']['passos'] as $i => $passo): ?>
                    <li>
                        <em>0<?= $i + 1 ?></em>
                        <strong><?= e($passo['titulo']) ?></strong>
                        <span><?= e($passo['texto']) ?></span>
                    </li>
                <?php endforeach; ?>
            </ol>
        </section>

        <section>
            <h2><?= e($estado['regioes']['h2']) ?></h2>
            <p><?= e($estado['regioes']['texto']) ?></p>
            <ul class="chips">
                <?php foreach ($estado['regioes']['lista'] as $regiao): ?>
                    <li><?= e($regiao) ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <?php foreach ($estado['secoes_especiais'] ?? [] as $especial): ?>
            <section>
                <h2><?= e($especial['h2']) ?></h2>
                <?php foreach ($especial['texto'] ?? [] as $paragrafo): ?>
                    <p><?= e($paragrafo) ?></p>
                <?php endforeach; ?>
            </section>
        <?php endforeach; ?>

        <?php if (!empty($estado['faq'])): ?>
            <section>
                <h2><?= e($estado['faq_h2']) ?></h2>
                <?php $perguntas = $estado['faq']; require dirname(__DIR__) . '/includes/faq.php'; ?>
            </section>
        <?php endif; ?>

        <aside class="cta-final">
            <h2><?= e($estado['cta']['titulo']) ?></h2>
            <p><?= e($estado['cta']['texto']) ?></p>
        </aside>

        <?php require dirname(__DIR__) . '/includes/formulario.php'; ?>

        <nav class="relacionados" aria-label="Outras unidades da federação">
            <h2>Rotas próximas</h2>
            <ul>
                <?php foreach ($estado['relacionados'] as $i => $relSlug): ?>
                    <?php $rel = catalogo()[$relSlug] ?? null; if (!$rel) { continue; } ?>
                    <li>
                        <a href="<?= e(url_estado($relSlug)) ?>">
                            <?= e($estado['ancoras_relacionadas'][$i] ?? ('Transporte executivo — ' . $rel['nome'])) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </article>
</main>
<script src="<?= e(url_site('assets/js/orcamento.js')) ?>" defer></script>
<?php require dirname(__DIR__) . '/includes/footer.php'; ?>
