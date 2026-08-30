<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'Santos',
    'geo' => ['lat' => -23.9608, 'lng' => -46.3336],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Santos',
    'seo' => [
        'title' => 'Traslado em Santos: Gonzaga, Concais e a serra',
        'description' => 'Carro com motorista em Santos para o Gonzaga, a Ponta da Praia, o Centro Histórico e o porto. Imigrantes, Anchieta, hotel na orla e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Gonzaga, na Ponta da Praia e no cais',
        'og_description' => 'Santos não tem saguão de passageiros. Combinamos o hotel da orla, o Concais e a margem da serra rumo a CGH ou GRU.',
        'og_image_alt' => 'Carro executivo em avenida da orla de Santos',
    ],
    'kicker' => 'Baixada Santista · SP',
    'h1' => 'Do Gonzaga ao cais sem perder a janela da Ponta da Praia',
    'epigrafe' => 'Santos alinha hotel na orla, pauta no porto e o Centro Histórico no mesmo dia. O motorista segura a Ana Costa, a Imigrantes e a Anchieta; o passageiro segura o horário — não a vaga na Beira-Mar nem o recuo improvisado no Armazém 25.',
    'abertura' => [
        'h2' => 'A orla e o cais não se trocam no mesmo recuo',
        'texto' => [
            'Gonzaga, Boqueirão e o José Menino concentram o pernoite. A Ponta da Praia pede outro recuo: é a ponta do canal e da travessia, não o terminal de cruzeiros. O Concais opera na Avenida Cândido Gaffrée, Armazém 25, no cais. Quem desce a serra entra pela Anchieta (SP-150) ou pela Imigrantes (SP-160).',
            'O serviço é de traslado e de espera: o carro já está no roteiro com o nome do hotel e, se houver navio ou carga, o ponto do porto. Não é corrida de orla no fim de semana, a menos que a visita entre na pauta.',
        ],
    ],
    'faixas' => [
        ['h2' => 'Gonzaga, Boqueirão e o relógio da Ana Costa', 'texto' => 'A orla enche no verão e no feriado. Informe o hotel e o recuo; “na praia” não distingue Gonzaga de Ponta da Praia nem o acesso do canal 6.'],
        ['h2' => 'Ponta da Praia, travessia e o vazamento para o Guarujá', 'texto' => 'Quando a pauta cruza o estuário rumo ao Guarujá, a travessia ou a Cônego Domênico Rangoni entra no roteiro. Não é o mesmo pedido do Gonzaga; o intervalo sai com margem de fila na ponta.'],
        ['h2' => 'Centro Histórico, Valongo e o porto', 'texto' => 'Pauta institucional no calçamento e o recuo do cais. O Concais pede o horário do navio e o ponto combinado; carga em terminal arrendado pede portaria. Cubatão vaza como polo, não como desvio na orla.'],
    ],
    'aeroportos' => [
        'h2' => 'Santos não tem saguão comercial de passageiros — o relógio é o da serra',
        'itens' => [
            ['h3' => 'Congonhas — CGH', 'texto' => 'O terminal fica em outro município. Santos–CGH entra como viagem pela Imigrantes ou pela Anchieta. Combinamos o voo; não é corrida urbana da orla.'],
            ['h3' => 'Guarulhos — GRU', 'texto' => 'O GRU fica em Guarulhos. O trecho Santos–GRU é viagem de serra e rodovia. Informe o terminal; a margem sai do hotel no Gonzaga ou do Concais, não do saguão.'],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque santista',
        'lista' => [
            'Hotel com nome — Gonzaga ou Ponta da Praia não bastam para o recuo.',
            'Se a pauta é porto, diga se é Concais (Armazém 25) ou outro terminal; o cais não admite pin genérico.',
            'Guarujá ou Cubatão entram como recorte próprio. CGH e GRU entram como destino de serra, não como aeroporto santista.',
        ],
    ],
    'faq_h2' => 'Dúvidas de quem embarca na orla e no cais',
    'faq' => [
        ['pergunta' => 'Santos tem aeroporto de passageiros?', 'resposta' => 'Não há saguão comercial de passageiros no município. O voo da pauta sai em geral por Congonhas (CGH) ou GRU; o trecho desce ou sobe a serra com margem da Imigrantes ou da Anchieta.'],
        ['pergunta' => 'O Concais fica na Ponta da Praia?', 'resposta' => 'Não. O terminal de cruzeiros (Concais) opera no Armazém 25, na Avenida Cândido Gaffrée. A Ponta da Praia é outro recuo, o da travessia e da ponta da orla.'],
        ['pergunta' => 'Vocês cruzam para o Guarujá no mesmo dia?', 'resposta' => 'Sim. Informe se o trecho é travessia ou rodovia. A fila na Ponta da Praia pesa mais que o quilômetro no mapa.'],
        ['pergunta' => 'Dá para ir ao porto e voltar ao hotel no Gonzaga?', 'resposta' => 'Sim. Combinamos o terminal e o ponto de espera. O cais não admite recuo improvisado.'],
    ],
    'cta' => [
        'titulo' => 'Marque o hotel da orla junto com o recuo do porto',
        'texto' => 'Informe o embarque no Gonzaga, na Ponta da Praia ou no Concais, o destino (cais, serra, CGH ou GRU) e o horário. O orçamento de Santos sai sob consulta.',
        'botao' => 'Pedir motorista em Santos',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Interior e litoral paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Congonhas como destino de serra, não saguão santista'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Quando a pauta não é a Baixada'],
    ],
];
