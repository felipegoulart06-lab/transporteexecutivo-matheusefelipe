<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/bootstrap.php';
require_once dirname(__DIR__) . '/includes/ibge.php';

$estadoSlug = $estadoSlug ?? (string) ($_GET['estado'] ?? '');
$cidadeSlug = $cidadeSlug ?? (string) ($_GET['cidade'] ?? '');
$tipoSlug = $tipoSlug ?? (string) ($_GET['tipo'] ?? '');
$tipos = tipos_servico();

if (!preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $estadoSlug)
    || !preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $cidadeSlug)
    || !isset($tipos[$tipoSlug])
) {
    http_response_code(404);
    require dirname(__DIR__) . '/404.php';
    exit;
}

if ($tipoSlug === 'pessoas' && cidade_publicada($estadoSlug, $cidadeSlug)) {
    header('Location: ' . url_cidade_landing($estadoSlug, $cidadeSlug), true, 301);
    exit;
}

$estadoNome = null;
$uf = null;
foreach (ibge_estados() as $est) {
    if ($est['slug'] === $estadoSlug) {
        $estadoNome = $est['nome'];
        $uf = $est['uf'];
        break;
    }
}

$cidadeNome = null;
if ($uf) {
    foreach (ibge_cidades($uf) as $cid) {
        if ($cid['slug'] === $cidadeSlug) {
            $cidadeNome = $cid['nome'];
            break;
        }
    }
}

if ($estadoNome === null || $cidadeNome === null) {
    http_response_code(404);
    require dirname(__DIR__) . '/404.php';
    exit;
}

$paginaAtual = 'cidade';
$canonical = url_cidade($estadoSlug, $cidadeSlug, $tipoSlug);
$seo = [
    'title' => $cidadeNome . ' — ' . $tipos[$tipoSlug],
    'description' => $tipos[$tipoSlug] . ' em ' . $cidadeNome . ' (' . $estadoNome . '). Página local em preparação.',
    'canonical' => $canonical,
    'robots' => 'noindex, follow',
    'og_title' => $cidadeNome . ' — ' . $tipos[$tipoSlug],
    'og_description' => 'Landing page de ' . $cidadeNome . ' em preparação.',
    'og_image' => url_site('assets/images/hero-transporte.jpg'),
    'og_image_alt' => 'Transporte executivo',
];
$schemas = [];
$ocultarChrome = false;

require dirname(__DIR__) . '/includes/header.php';
?>
<main id="conteudo" class="cidade-stub">
    <div>
        <p class="kicker"><?= e($estadoNome) ?> · <?= e($uf) ?></p>
        <h1><?= e($cidadeNome) ?></h1>
        <p><?= e($tipos[$tipoSlug]) ?>. Esta landing page ainda não foi publicada — o endereço já está reservado.</p>
        <a class="btn" href="<?= e(url_site()) ?>">Voltar ao início</a>
    </div>
</main>
<?php require dirname(__DIR__) . '/includes/footer.php'; ?>
