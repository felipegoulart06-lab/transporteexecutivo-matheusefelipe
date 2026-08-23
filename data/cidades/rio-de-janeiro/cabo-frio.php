<?php

declare(strict_types=1);

return [
    'layout' => 'dunas',
    'cidade_nome' => 'Cabo Frio',
    'geo' => ['lat' => -22.8894, 'lng' => -42.0286],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Cabo Frio',
    'seo' => [
        'title' => 'Motorista executivo em Cabo Frio: Passagem, Centro e CFB',
        'description' => 'Carro com motorista em Cabo Frio para a Passagem, Centro, Praia do Forte, Búzios e o aeroporto CFB. Lagos, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo na Passagem, no Centro e no aeroporto CFB',
        'og_description' => 'Motorista na Região dos Lagos: hotel, Centro e o terminal de Cabo Frio.',
        'og_image_alt' => 'Carro executivo em avenida da orla de Cabo Frio',
    ],
    'kicker' => 'Região dos Lagos · RJ',
    'h1' => 'Do CFB à Passagem sem perder a janela de Búzios',
    'trilha' => [
        'h2' => 'Cabo Frio se lê em canal e em duna — não no atalho do app no feriado',
        'texto' => 'Hotel na Passagem ou no Centro, reunião na Praia do Forte e voo no Aeroporto Internacional de Cabo Frio (CFB) cabem no mesmo expediente se o motorista já saiu com a ordem da Teixeira e Souza e da RJ-106, não com o aceite do minuto. No verão o relógio muda; a margem sai do hotel, não do mapa.',
    ],
    'chips' => [
        'h2' => 'Onde o embarque cabo-friense mais se repete',
        'itens' => ['Passagem', 'Centro', 'Praia do Forte', 'Braga', 'Peró', 'Búzios', 'Aeroporto de Cabo Frio'],
    ],
    'historias' => [
        [
            'h2' => 'A orla como hotel, não como passeio de temporada',
            'texto' => 'Passagem, Braga e o Centro concentram pernoite: Atlântico, similares e as pousadas entram no roteiro pelo nome e pelo recuo, não por “na Praia do Forte”. O carro espera no acesso de serviço quando a canal está tomada.',
        ],
        [
            'h2' => 'Centro, Forte São Mateus e a pauta de dia',
            'texto' => 'Sede, o forte e o desnível até a duna. Visita combinada; o calçamento pede ponto de espera, não GPS na ponta do forte.',
        ],
        [
            'h2' => 'Rotas que misturam Lagos, Búzios e Arraial',
            'texto' => 'CFB → hotel na Passagem → Centro → Búzios só se a península entrar no roteiro. Arraial do Cabo, São Pedro da Aldeia e o Peró saem como recorte da região, com horário de RJ-106 — não como segunda corrida no canal.',
        ],
        [
            'h2' => 'Cabo Frio — CFB',
            'texto' => 'O terminal internacional fica no recorte do município. Combinamos o voo. A espera no desembarque integra o trecho CFB; até a Passagem o intervalo é urbano, até Búzios não.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no CFB',
    'faq' => [
        ['pergunta' => 'O aeroporto de Cabo Frio fica longe da Passagem?', 'resposta' => 'É trecho urbano. Marcamos margem: a Teixeira e Souza e o horário de feriado alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no CFB se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem Búzios no mesmo dia?', 'resposta' => 'Sim, quando a península entra no roteiro. Não é o mesmo recorte do Centro; o horário da RJ-106 sai sob consulta.'],
        ['pergunta' => 'Dá para incluir Arraial do Cabo depois do hotel?', 'resposta' => 'Sim, como recorte dos Lagos. Combinamos o ponto de espera; o acesso à Praia do Farol pede margem própria.'],
    ],
    'cta' => [
        'titulo' => 'Una a Passagem ao horário do CFB',
        'texto' => 'O orçamento de Cabo Frio sai sob consulta. Canal, Búzios e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir traslado em Cabo Frio',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-de-janeiro', 'ancora' => 'O recorte fluminense além da capital'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Santos Dumont, Galeão e a Zona Sul'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'macae', 'ancora' => 'Centro, Imbetiba e o aeroporto MEA'],
    ],
];
