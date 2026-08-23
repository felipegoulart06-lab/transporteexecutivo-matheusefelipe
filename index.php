<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/bootstrap.php';

$paginaAtual = 'gate';
$ocultarChrome = true;
$heroJpg = url_site('assets/images/hero-transporte.jpg');

$seo = [
    'title' => 'NERO — Transporte executivo',
    'description' => 'Escolha o serviço — motorista, objetos de valor ou atendimento virtual — e informe estado e cidade para seguir.',
    'canonical' => url_site(),
    'og_title' => 'NERO — Transporte executivo',
    'og_description' => 'Escolha o tipo de atendimento e, em seguida, estado e cidade.',
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
<main id="conteudo" class="gate is-intro" data-api="<?= e(url_site('api/localidades.php')) ?>">
    <div class="gate-intro" id="gate-intro">
        <p class="gate-intro__marca">NERO<span>Executivo</span></p>
        <span class="gate-intro__rule" aria-hidden="true"></span>
        <p class="gate-intro__hello">Bem-vindo</p>
        <p class="gate-intro__lead">Transporte executivo privado, sob consulta.</p>
        <button type="button" class="gate-intro__go" id="btn-entrar">Entrar</button>
    </div>
    <aside class="gate-hint gate-hint--esq" id="hint-pessoas">
        <p class="gate-hint__kicker">Como funciona</p>
        <p class="gate-hint__title">Motorista executivo</p>
        <ul>
            <li>Traslado para hotel, reunião e aeroporto, com o mesmo motorista.</li>
            <li>Espera combinada no roteiro — sem corrida instantânea.</li>
            <li>Depois você informa estado e cidade para abrir a página local.</li>
        </ul>
    </aside>
    <aside class="gate-hint gate-hint--dir" id="hint-objetos">
        <p class="gate-hint__kicker">Como funciona</p>
        <p class="gate-hint__title">Objetos de valor</p>
        <ul>
            <li>Serviço à parte do carro com motorista: coleta e entrega assistidas.</li>
            <li>Documentos, amostras e itens que pedem recuo discreto.</li>
            <li>Após estado e cidade, você segue para a central de delivery.</li>
        </ul>
    </aside>
    <aside class="gate-hint gate-hint--virtual" id="hint-virtual">
        <p class="gate-hint__kicker">Como funciona</p>
        <p class="gate-hint__title">Atendimento virtual</p>
        <ul>
            <li>Consulta à distância, sem embarque presencial neste passo.</li>
            <li>Informe estado e cidade para localizar o recorte da pauta.</li>
            <li>Você segue ao formulário e conclui o pedido com a equipe.</li>
        </ul>
    </aside>
    <div class="gate-frame">
        <ol class="gate-progress" aria-label="Etapas">
            <li class="is-on" data-step="tipo"><span>01</span> Serviço</li>
            <li data-step="estado"><span>02</span> Estado</li>
            <li data-step="cidade"><span>03</span> Cidade</li>
        </ol>

        <div class="gate-track">
            <div class="gate-slider" id="gate-slider">
                <div class="gate-pane" id="pane-servico">
                    <section class="gate-step gate-step--servico is-on" id="step-tipo" aria-labelledby="q-tipo">
                        <h1 id="q-tipo" tabindex="-1">O que você precisa?</h1>
                        <div class="gate-choices">
                            <button type="button" class="gate-choice" data-tipo="pessoas" aria-describedby="hint-pessoas">
                                <strong>Preciso de um motorista</strong>
                                <span>Deslocamento executivo</span>
                                <em class="gate-choice__nota">Hotel, reunião e aeroporto na mesma cidade, com orçamento sob consulta.</em>
                            </button>
                            <button type="button" class="gate-choice" data-tipo="objetos-de-valor" data-href="https://delivery.transporteexecutivo.com/" aria-describedby="hint-objetos">
                                <strong>Transporte de objetos de valor</strong>
                                <span>Carga discreta e assistida</span>
                                <em class="gate-choice__nota">Coleta e entrega na central de delivery, em serviço separado do motorista.</em>
                            </button>
                            <button type="button" class="gate-choice" data-tipo="virtual" aria-describedby="hint-virtual">
                                <strong>Solicitar atendimento virtual</strong>
                                <span>Consulta à distância</span>
                                <em class="gate-choice__nota">Fale com a equipe sem embarque presencial. Estado e cidade entram só para localizar o recorte.</em>
                            </button>
                        </div>
                    </section>
                </div>

                <div class="gate-pane" id="pane-local" aria-hidden="true" inert>
                    <section class="gate-step is-on" id="step-estado" aria-labelledby="q-estado">
                        <h2 id="q-estado">Qual é o seu estado?</h2>
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
                    <button type="button" class="gate-back" id="btn-voltar">Voltar</button>
                </div>
            </div>
        </div>

        <p class="gate-status" id="gate-status" role="status"></p>
        <p class="gate-copy">Todos os direitos reservados</p>
    </div>
</main>
<script src="<?= e(url_site('assets/js/gate.js')) ?>" defer></script>
<?php require __DIR__ . '/includes/footer.php'; ?>
