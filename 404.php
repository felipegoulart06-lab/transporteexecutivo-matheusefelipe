<?php

declare(strict_types=1);

http_response_code(404);
require_once __DIR__ . '/includes/bootstrap.php';

$paginaAtual = '404';
$seo = [
    'title' => 'Página não encontrada | Transporte Executivo',
    'description' => 'A página pedida não existe. Volte à home ou escolha um estado para transporte executivo.',
    'canonical' => null,
    'robots' => 'noindex, follow',
    'og_title' => 'Página não encontrada | Transporte Executivo',
    'og_description' => 'Conteúdo não encontrado no site de transporte executivo.',
];
$schemas = [];

require __DIR__ . '/includes/header.php';
?>
<main id="conteudo" class="erro-404">
    <div>
        <p class="kicker">Erro 404</p>
        <h1>Esta rota não existe</h1>
        <p>Volte ao início ou escolha o estado do embarque.</p>
        <p><a class="btn" href="<?= e(url_site()) ?>">Ir para o orçamento</a></p>
    </div>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
