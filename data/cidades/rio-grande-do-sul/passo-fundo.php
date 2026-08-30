<?php

declare(strict_types=1);

return [
    'layout' => 'gaucha',
    'cidade_nome' => 'Passo Fundo',
    'geo' => [
        'lat' => -28.2576,
        'lng' => -52.4091,
    ],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Passo Fundo',
    'seo' => [
        'title' => 'Motorista executivo em Passo Fundo: Centro e PFB',
        'description' => 'Motorista executivo em Passo Fundo: Centro, Boqueirão e Lauro Kurtz (PFB), no próprio município. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Traslado em Passo Fundo: Centro e PFB',
        'og_description' => 'O motorista combina Centro com Lauro Kurtz (PFB), no próprio município. Informe nome do hospital ou do hotel.',
        'og_image_alt' => 'Carro executivo em via de Passo Fundo',
    ],
    'kicker' => 'Norte gaúcho · RS',
    'h1' => 'Passo Fundo — Centro de manhã, PFB quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Passo Fundo',
    'faq' => [
        [
            'pergunta' => 'Em Passo Fundo, o PFB fica no próprio município?',
            'resposta' => 'Sim. Em Passo Fundo, Lauro Kurtz (PFB) fica no município. Informe o acesso via BR-285.',
        ],
        [
            'pergunta' => 'Em Passo Fundo, vocês buscam em Centro?',
            'resposta' => 'Sim, em Passo Fundo. Envie nome do hospital ou do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Passo Fundo vocês fazem Erechim?',
            'resposta' => 'Sim, saindo de Passo Fundo. Erechim não é o recorte de Centro; o horário pela BR-153 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Passo Fundo o carro fica entre Centro e Boqueirão?',
            'resposta' => 'Sim, em Passo Fundo. A hora à disposição cobre polo médico e hotel em Centro e bairro em Boqueirão.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Passo Fundo e o PFB',
        'texto' => 'Diga o ponto em Centro ou Boqueirão, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Passo Fundo',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'rio-grande-do-sul',
            'ancora' => 'Passo Fundo e o recorte de Norte gaúcho',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-grande-do-sul',
            'cidade' => 'porto-alegre',
            'ancora' => 'Motorista em porto alegre',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-grande-do-sul',
            'cidade' => 'caxias-do-sul',
            'ancora' => 'Motorista em caxias do sul',
        ],
    ],
    'coluna' => [
        'h2' => 'Passo Fundo no mapa e na BR-285',
        'texto' => [
            'Passo Fundo concentra Centro (polo médico e hotel) e Lauro Kurtz (PFB) no mesmo município. O motorista precisa do ponto de embarque e do PFB no mesmo recado — “me busca em Passo Fundo” não define o recuo.',
            'Boqueirão pede bairro. Vila Rodrigues pede residencial. Quando Erechim entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela BR-153.',
        ],
    ],
    'lateral' => [
        'h2' => 'Pontos que o pedido em Passo Fundo mais cita',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para polo médico e hotel. Informe nome do hospital ou do hotel. Centro não compartilha o recuo de Boqueirão.',
            ],
            [
                'h3' => 'Boqueirão',
                'texto' => 'Origem frequente para bairro. Informe nome do hospital ou do hotel. Boqueirão não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Vila Rodrigues',
                'texto' => 'Origem frequente para residencial. Informe nome do hospital ou do hotel. Vila Rodrigues não compartilha o recuo de Centro.',
            ],
        ],
    ],
    'faixa' => [
        'h2' => 'Rotas urbanas e o salto para Erechim',
        'texto' => 'Centro → Erechim: Transfer intermunicipal. Não é o mesmo recorte de Boqueirão; o horário sai sob consulta.',
    ],
];
