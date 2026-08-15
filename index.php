<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/bootstrap.php';

$paginaAtual = 'gate';
$ocultarChrome = true;
$heroJpg = url_site('assets/images/hero-transporte.jpg');

$seo = [
    'title' => 'NERO — Transporte executivo',
    'description' => 'Informe seu estado e sua cidade para seguir ao transporte executivo de pessoas ou de objetos de valor.',
    'canonical' => url_site(),
    'og_title' => 'NERO — Transporte executivo',
    'og_description' => 'Escolha estado, cidade e o tipo de transporte executivo.',
    'og_image' => $heroJpg,
    'og_image_alt' => 'Sedan executivo preto pronto para embarque',
];

$schemas = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => config('nome'),
        'url' => url_site(),
        'inLanguage' => 'pt-BR',
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => config('nome'),
        'url' => url_site(),
    ],
];

require __DIR__ . '/includes/header.php';
?>
<main id="conteudo" class="gate" data-api="<?= e(url_site('api/localidades.php')) ?>">
    <picture class="gate-bg">
        <img src="<?= e($heroJpg) ?>" alt="" width="1600" height="900" fetchpriority="high" decoding="async">
    </picture>

    <div class="gate-frame">
        <ol class="gate-progress" aria-label="Etapas">
            <li class="is-on" data-step="estado"><span>01</span> Estado</li>
            <li data-step="cidade"><span>02</span> Cidade</li>
            <li data-step="tipo"><span>03</span> Serviço</li>
        </ol>

        <div class="gate-track">
            <div class="gate-slider" id="gate-slider">
                <div class="gate-pane" id="pane-local">
                    <section class="gate-step is-on" id="step-estado" aria-labelledby="q-estado">
                        <h1 id="q-estado">Qual é o seu estado?</h1>
                        <div class="gate-combo" id="combo-estado">
                            <button type="button" class="gate-select" id="sel-estado" aria-haspopup="listbox" aria-expanded="false" aria-controls="lista-estado">
                                Selecione o estado
                            </button>
                            <ul class="gate-list" id="lista-estado" role="listbox" hidden></ul>
                        </div>
                    </section>

                    <section class="gate-step" id="step-cidade" hidden aria-labelledby="q-cidade">
                        <h2 id="q-cidade">Qual é a sua cidade?</h2>
                        <div class="gate-combo" id="combo-cidade">
                            <button type="button" class="gate-select" id="sel-cidade" aria-haspopup="listbox" aria-expanded="false" aria-controls="lista-cidade">
                                Selecione a cidade
                            </button>
                            <div class="gate-list-wrap" id="wrap-cidade" hidden>
                                <label class="gate-filter">
                                    <span class="visually-hidden">Filtrar cidade pelas iniciais</span>
                                    <input type="search" id="filtro-cidade" placeholder="Digite as iniciais" autocomplete="off">
                                </label>
                                <ul class="gate-list" id="lista-cidade" role="listbox"></ul>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="gate-pane" id="pane-servico" aria-hidden="true" inert>
                    <section class="gate-step gate-step--servico is-on" id="step-tipo" aria-labelledby="q-tipo">
                        <h1 id="q-tipo">O que você precisa?</h1>
                        <div class="gate-choices">
                            <button type="button" class="gate-choice" data-tipo="pessoas">
                                <strong>Preciso de um motorista</strong>
                                <span>Deslocamento executivo</span>
                            </button>
                            <button type="button" class="gate-choice" data-tipo="objetos-de-valor">
                                <strong>Transporte de objetos de valor</strong>
                                <span>Carga discreta e assistida</span>
                            </button>
                        </div>
                        <button type="button" class="gate-back" id="btn-voltar">Voltar</button>
                    </section>
                </div>
            </div>
        </div>

        <p class="gate-status" id="gate-status" role="status"></p>
        <p class="gate-copy">Todos os direitos reservados</p>
    </div>
</main>
<script src="<?= e(url_site('assets/js/gate.js')) ?>" defer></script>
<?php require __DIR__ . '/includes/footer.php'; ?>
