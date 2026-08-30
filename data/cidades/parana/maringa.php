<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Maringá',
    'geo' => [
        'lat' => -23.4205,
        'lng' => -51.9333,
    ],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Maringá',
    'seo' => [
        'title' => 'Traslado executivo em Maringá: Zona 7 e BR-376',
        'description' => 'Motorista executivo em Maringá: Zona 7, Centro e Silvio Name Junior (MGF), no próprio município. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Traslado em Maringá: Zona 7 e MGF',
        'og_description' => 'O motorista combina Zona 7 com Silvio Name Junior (MGF), no próprio município. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Maringá',
    ],
    'kicker' => 'Noroeste paranaense · PR',
    'h1' => 'Em Maringá, de Zona 7 a Silvio Name Junior (MGF), no próprio município',
    'faq_h2' => 'Dúvidas de quem embarca em Maringá',
    'faq' => [
        [
            'pergunta' => 'Em Maringá, o MGF fica no próprio município?',
            'resposta' => 'Sim. Em Maringá, Silvio Name Junior (MGF) fica no município. Informe o acesso via PR-317.',
        ],
        [
            'pergunta' => 'Em Maringá, vocês buscam em Zona 7?',
            'resposta' => 'Sim, em Maringá. Envie nome do hotel em Zona 7. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Maringá vocês fazem Londrina?',
            'resposta' => 'Sim, saindo de Maringá. Londrina não é o recorte de Zona 7; o horário pela PR-317 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Maringá o carro fica entre Zona 7 e Centro?',
            'resposta' => 'Sim, em Maringá. A hora à disposição cobre hotel e torre em Zona 7 e sede em Centro.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Maringá e o MGF',
        'texto' => 'Diga o ponto em Zona 7 ou Centro, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Maringá',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'parana',
            'ancora' => 'Maringá e o recorte de Noroeste paranaense',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'parana',
            'cidade' => 'londrina',
            'ancora' => 'Motorista em londrina',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'parana',
            'cidade' => 'curitiba',
            'ancora' => 'Motorista em curitiba',
        ],
    ],
    'lead' => 'Maringá concentra Zona 7 (hotel e torre) e Silvio Name Junior (MGF) no mesmo município. O motorista precisa do ponto de embarque e do MGF no mesmo recado — “me busca em Maringá” não define o recuo.',
    'contexto' => [
        'h2' => 'Maringá se mede em BR-376, não em pin de aplicativo',
        'texto' => [
            'Maringá concentra Zona 7 (hotel e torre) e Silvio Name Junior (MGF) no mesmo município. O motorista precisa do ponto de embarque e do MGF no mesmo recado — “me busca em Maringá” não define o recuo.',
            'Centro pede sede. Jardim Alvorada pede bairro. Quando Londrina entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela PR-317.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos de embarque em Maringá',
        'itens' => [
            [
                'h3' => 'Zona 7',
                'texto' => 'Origem frequente para hotel e torre. Informe nome do hotel. Zona 7 não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede. Informe nome do hotel. Centro não compartilha o recuo de Zona 7.',
            ],
            [
                'h3' => 'Jardim Alvorada',
                'texto' => 'Origem frequente para bairro. Informe nome do hotel. Jardim Alvorada não compartilha o recuo de Zona 7.',
            ],
            [
                'h3' => 'Universitário',
                'texto' => 'Origem frequente para UEM. Informe nome do hotel. Universitário não compartilha o recuo de Zona 7.',
            ],
        ],
    ],
    'aeroportos' => [
        'h2' => 'O terminal que a agenda de Maringá realmente usa',
        'itens' => [
            [
                'h3' => 'Silvio Name Junior — MGF',
                'texto' => 'Silvio Name Junior (MGF) fica em Maringá. Acesso: PR-317. Combinamos o voo; a espera no desembarque integra o trecho.',
            ],
            [
                'h3' => 'BR-376 e a vazão para Londrina',
                'texto' => 'Londrina e Cianorte aparecem no mesmo pedido de Maringá. Isso é viagem, não segunda corrida em Zona 7.',
            ],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que o pedido em Maringá mais combina',
        'itens' => [
            [
                'titulo' => 'Zona 7 → MGF',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: PR-317.',
            ],
            [
                'titulo' => 'MGF → Centro',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome do hotel.',
            ],
            [
                'titulo' => 'Zona 7 → Londrina',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Centro; o horário sai sob consulta.',
            ],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na pauta em Maringá',
        'passos' => [
            [
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do hotel. Autocomplete não resolve dois acessos em Zona 7.',
            ],
            [
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o MGF ou Londrina entra no dia.',
            ],
            [
                'titulo' => 'Confirmação',
                'texto' => 'Em Maringá, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
