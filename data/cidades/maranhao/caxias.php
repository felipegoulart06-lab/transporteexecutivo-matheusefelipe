<?php

declare(strict_types=1);

return [
    'layout' => 'gaucha',
    'cidade_nome' => 'Caxias',
    'geo' => [
        'lat' => -4.8586,
        'lng' => -43.356,
    ],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Caxias',
    'seo' => [
        'title' => 'Carro com motorista em Caxias: Tamarineiro e QXC',
        'description' => 'Motorista executivo em Caxias: Centro, Tamarineiro e Caxias (QXC), no próprio município. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Embarque em Caxias: hotel, Centro e QXC',
        'og_description' => 'O motorista combina Centro com Caxias (QXC), no próprio município. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Caxias',
    ],
    'kicker' => 'Leste maranhense · MA',
    'h1' => 'Em Caxias: do embarque em Centro ao QXC',
    'faq_h2' => 'Dúvidas de quem embarca em Caxias',
    'faq' => [
        [
            'pergunta' => 'Em Caxias, o QXC fica no próprio município?',
            'resposta' => 'Sim. Em Caxias, Caxias (QXC) fica no município. Informe o acesso via BR-316.',
        ],
        [
            'pergunta' => 'Em Caxias, vocês buscam em Centro?',
            'resposta' => 'Sim, em Caxias. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Caxias vocês fazem Teresina?',
            'resposta' => 'Sim, saindo de Caxias. Teresina não é o recorte de Centro; o horário pela MA-034 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Caxias, QXC e THE são o mesmo recorte?',
            'resposta' => 'Não, em Caxias. QXC fica em Caxias; THE fica em Teresina. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Caxias e o QXC',
        'texto' => 'Diga o ponto em Centro ou Tamarineiro, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Caxias',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'maranhao',
            'ancora' => 'Caxias e o recorte de Leste maranhense',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'maranhao',
            'cidade' => 'sao-luis',
            'ancora' => 'Motorista em sao luis',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'piaui',
            'cidade' => 'teresina',
            'ancora' => 'Motorista em teresina',
        ],
    ],
    'coluna' => [
        'h2' => 'Caxias no mapa e na BR-316',
        'texto' => [
            'Caxias concentra Centro (sede e hotel) e Caxias (QXC) no mesmo município. O motorista precisa do ponto de embarque e do QXC no mesmo recado — “me busca em Caxias” não define o recuo.',
            'Tamarineiro pede bairro. Ponte pede acesso. Quando Teresina entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela MA-034.',
        ],
    ],
    'lateral' => [
        'h2' => 'Pontos que o pedido em Caxias mais cita',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel. Centro não compartilha o recuo de Tamarineiro.',
            ],
            [
                'h3' => 'Tamarineiro',
                'texto' => 'Origem frequente para bairro. Informe nome do hotel. Tamarineiro não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Ponte',
                'texto' => 'Origem frequente para acesso. Informe nome do hotel. Ponte não compartilha o recuo de Centro.',
            ],
        ],
    ],
    'faixa' => [
        'h2' => 'Rotas urbanas e o salto para Teresina',
        'texto' => 'Centro → Teresina: Transfer intermunicipal. Não é o mesmo recorte de Tamarineiro; o horário sai sob consulta.',
    ],
];
