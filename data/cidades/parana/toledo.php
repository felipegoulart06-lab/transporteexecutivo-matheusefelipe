<?php

declare(strict_types=1);

return [
    'layout' => 'gaucha',
    'cidade_nome' => 'Toledo',
    'geo' => [
        'lat' => -24.7136,
        'lng' => -53.7431,
    ],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Toledo',
    'seo' => [
        'title' => 'Carro com motorista em Toledo: Jardim Coopagro e TOW',
        'description' => 'Carro com motorista em Toledo para Centro, Jardim Coopagro e TOW. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Agenda em Toledo com motorista — Jardim Coopagro e Luiz dal Canalle Filho',
        'og_description' => 'O motorista combina Centro com Luiz dal Canalle Filho (TOW), no próprio município. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Toledo',
    ],
    'kicker' => 'Oeste paranaense · PR',
    'h1' => 'Toledo: entre Centro, Jardim Coopagro e o terminal certo',
    'faq_h2' => 'Dúvidas de quem embarca em Toledo',
    'faq' => [
        [
            'pergunta' => 'Em Toledo, o TOW fica no próprio município?',
            'resposta' => 'Sim. Em Toledo, Luiz dal Canalle Filho (TOW) fica no município. Informe o acesso via PR-182.',
        ],
        [
            'pergunta' => 'Em Toledo, vocês buscam em Centro?',
            'resposta' => 'Sim, em Toledo. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Toledo vocês fazem Cascavel?',
            'resposta' => 'Sim, saindo de Toledo. Cascavel não é o recorte de Centro; o horário pela BR-163 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Toledo, TOW e CAC são o mesmo recorte?',
            'resposta' => 'Não, em Toledo. TOW fica em Toledo; CAC fica em Cascavel. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Toledo e o TOW',
        'texto' => 'Diga o ponto em Centro ou Jardim Coopagro, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Toledo',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'parana',
            'ancora' => 'Toledo e o recorte de Oeste paranaense',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'parana',
            'cidade' => 'cascavel',
            'ancora' => 'Motorista em cascavel',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'parana',
            'cidade' => 'foz-do-iguacu',
            'ancora' => 'Motorista em foz do iguacu',
        ],
    ],
    'coluna' => [
        'h2' => 'Toledo no mapa e na PR-182',
        'texto' => [
            'Toledo concentra Centro (sede e hotel) e Luiz dal Canalle Filho (TOW) no mesmo município. O motorista precisa do ponto de embarque e do TOW no mesmo recado — “me busca em Toledo” não define o recuo.',
            'Jardim Coopagro pede bairro. Vila Becker pede residencial. Quando Cascavel entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela BR-163.',
        ],
    ],
    'lateral' => [
        'h2' => 'Pontos que o pedido em Toledo mais cita',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel. Centro não compartilha o recuo de Jardim Coopagro.',
            ],
            [
                'h3' => 'Jardim Coopagro',
                'texto' => 'Origem frequente para bairro. Informe nome do hotel. Jardim Coopagro não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Vila Becker',
                'texto' => 'Origem frequente para residencial. Informe nome do hotel. Vila Becker não compartilha o recuo de Centro.',
            ],
        ],
    ],
    'faixa' => [
        'h2' => 'Rotas urbanas e o salto para Cascavel',
        'texto' => 'Centro → Cascavel: Transfer intermunicipal. Não é o mesmo recorte de Jardim Coopagro; o horário sai sob consulta.',
    ],
];
