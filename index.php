<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/bootstrap.php';

$paginaAtual = 'gate';
$ocultarChrome = true;
$heroJpg = url_site('assets/images/hero-transporte.jpg');
$deliveryUrl = 'https://delivery.transporteexecutivo.com/';

$seo = [
    'title' => 'Transporte executivo',
    'description' => 'Motorista executivo, transporte de objetos de valor ou atendimento virtual. Serviço privado, sob consulta — sem corrida instantânea.',
    'canonical' => url_site(),
    'og_title' => 'Transporte executivo',
    'og_description' => 'Escolha motorista, delivery de objetos de valor ou fale com a atendente virtual.',
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
<main id="conteudo" class="gate is-intro" data-api="<?= e(url_site('api/localidades.php')) ?>" data-delivery="<?= e($deliveryUrl) ?>">
    <div class="gate-intro" id="gate-intro">
        <div class="gate-intro__card">
            <p class="gate-intro__marca">Transporte<span>Executivo</span></p>
            <p class="gate-intro__kicker">Transporte privado · Sob consulta</p>
            <p class="gate-intro__hello">Bem-vindo</p>
            <p class="gate-intro__lead">O transporte executivo privado organiza três frentes — e só estas. Não é aplicativo de rua. Cada pedido sai com data, recuo e orçamento combinados.</p>
            <ol class="gate-intro__servicos">
                <li>
                    <span>01</span>
                    <strong>Motorista executivo</strong>
                    <em>Traslado para hotel, reunião e aeroporto, com o mesmo motorista. Estado e cidade entram só neste caminho.</em>
                </li>
                <li>
                    <span>02</span>
                    <strong>Objetos de valor</strong>
                    <em>Coleta e entrega assistidas na central de delivery, em nova aba. Serviço separado do carro com motorista.</em>
                </li>
                <li>
                    <span>03</span>
                    <strong>Atendimento virtual</strong>
                    <em>Conversa com a atendente para decidir entre motorista ou delivery. Sem estado e cidade neste passo.</em>
                </li>
            </ol>
            <button type="button" class="gate-intro__go" id="btn-entrar">Entrar</button>
            <p class="gate-intro__foot">Sob consulta · Sem corrida instantânea · Todos os direitos reservados</p>
        </div>
    </div>
    <aside class="gate-hint gate-hint--esq" id="hint-pessoas">
        <p class="gate-hint__kicker">Como funciona</p>
        <p class="gate-hint__title">Motorista executivo</p>
        <ul>
            <li>Traslado para hotel, reunião e aeroporto, com o mesmo motorista.</li>
            <li>Espera combinada no roteiro — sem corrida instantânea.</li>
            <li>Em seguida você informa estado e cidade para abrir a página local.</li>
        </ul>
    </aside>
    <aside class="gate-hint gate-hint--dir" id="hint-objetos">
        <p class="gate-hint__kicker">Como funciona</p>
        <p class="gate-hint__title">Objetos de valor</p>
        <ul>
            <li>Serviço à parte do carro com motorista: coleta e entrega assistidas.</li>
            <li>Documentos, amostras e itens que pedem recuo discreto.</li>
            <li>Abre a central de delivery em uma nova aba, sem pedir estado ou cidade aqui.</li>
        </ul>
    </aside>
    <aside class="gate-hint gate-hint--virtual" id="hint-virtual">
        <p class="gate-hint__kicker">Como funciona</p>
        <p class="gate-hint__title">Atendimento virtual</p>
        <ul>
            <li>Conversa com a atendente virtual, neste site.</li>
            <li>Ela trata só das três opções: motorista, objetos de valor ou este canal.</li>
            <li>O destino é agendar o motorista ou seguir para a central de delivery.</li>
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
                                <em class="gate-choice__nota">Hotel, reunião e aeroporto na mesma cidade, com orçamento sob consulta. Depois você escolhe estado e cidade.</em>
                            </button>
                            <button type="button" class="gate-choice" data-tipo="objetos-de-valor" data-href="<?= e($deliveryUrl) ?>" aria-describedby="hint-objetos">
                                <strong>Transporte de objetos de valor</strong>
                                <span>Carga discreta e assistida</span>
                                <em class="gate-choice__nota">Abre a central de delivery em nova aba. Não pede estado nem cidade nesta página.</em>
                            </button>
                            <button type="button" class="gate-choice" data-tipo="virtual" aria-describedby="hint-virtual">
                                <strong>Solicitar atendimento virtual</strong>
                                <span>Consulta à distância</span>
                                <em class="gate-choice__nota">Fale com a atendente virtual. Ela só trata de motorista, objetos de valor ou este atendimento.</em>
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

    <div class="gate-chat" id="gate-chat" hidden>
        <div class="gate-chat__panel" role="dialog" aria-modal="true" aria-labelledby="chat-titulo">
            <header class="gate-chat__head">
                <span class="gate-chat__avatar" aria-hidden="true">T</span>
                <div class="gate-chat__who">
                    <p id="chat-titulo">Atendimento</p>
                    <p>Atendente virtual · Somente as três opções</p>
                </div>
                <button type="button" class="gate-chat__close" id="chat-fechar">Fechar</button>
            </header>
            <div class="gate-chat__thread" id="chat-thread" role="log" aria-live="polite" aria-relevant="additions"></div>
            <div class="gate-chat__quick" id="chat-quick">
                <button type="button" data-intencao="motorista">Preciso de um motorista</button>
                <button type="button" data-intencao="objetos">Objetos de valor</button>
            </div>
            <form class="gate-chat__form" id="chat-form">
                <label class="visually-hidden" for="chat-input">Mensagem para a atendente</label>
                <input type="text" id="chat-input" maxlength="280" placeholder="Escreva sua mensagem" autocomplete="off" enterkeyhint="send">
                <button type="submit" class="gate-chat__send">Enviar</button>
            </form>
            <p class="gate-chat__bound">Restrito a motorista executivo, objetos de valor e este atendimento.</p>
        </div>
    </div>
</main>
<script src="<?= e(url_site('assets/js/gate.js')) ?>" defer></script>
<script src="<?= e(url_site('assets/js/atendente.js')) ?>" defer></script>
<?php require __DIR__ . '/includes/footer.php'; ?>
