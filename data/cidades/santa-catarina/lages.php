<?php

declare(strict_types=1);

return [
    'layout' => 'gaucha',
    'cidade_nome' => 'Lages',
    'geo' => [
        'lat' => -27.815,
        'lng' => -50.3259,
    ],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Lages',
    'seo' => [
        'title' => 'Carro executivo em Lages: Centro, BR-282 e LAJ',
        'description' => 'Motorista executivo em Lages: Centro, Coral e Lages (LAJ), no próprio município. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Agenda em Lages com motorista — Coral e Lages',
        'og_description' => 'O motorista combina Centro com Lages (LAJ), no próprio município. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Lages',
    ],
    'kicker' => 'Planalto serrano · SC',
    'h1' => 'Lages: entre Centro, Coral e o terminal certo',
    'faq_h2' => 'Dúvidas de quem embarca em Lages',
    'faq' => [
        [
            'pergunta' => 'Em Lages, o LAJ fica no próprio município?',
            'resposta' => 'Sim. Em Lages, Lages (LAJ) fica no município. Informe o acesso via SC-114.',
        ],
        [
            'pergunta' => 'Em Lages, vocês buscam em Centro?',
            'resposta' => 'Sim, em Lages. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Lages vocês fazem Correia Pinto?',
            'resposta' => 'Sim, saindo de Lages. Correia Pinto não é o recorte de Centro; o horário pela BR-116 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Lages, LAJ e FLN são o mesmo recorte?',
            'resposta' => 'Não, em Lages. LAJ fica em Lages; FLN fica em Florianópolis. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Lages e o LAJ',
        'texto' => 'Diga o ponto em Centro ou Coral, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Lages',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'santa-catarina',
            'ancora' => 'Lages e o recorte de Planalto serrano',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'santa-catarina',
            'cidade' => 'florianopolis',
            'ancora' => 'Motorista em florianopolis',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'santa-catarina',
            'cidade' => 'chapeco',
            'ancora' => 'Motorista em chapeco',
        ],
    ],
    'coluna' => [
        'h2' => 'Lages no mapa e na BR-282',
        'texto' => [
            'Lages concentra Centro (sede e hotel) e Lages (LAJ) no mesmo município. O motorista precisa do ponto de embarque e do LAJ no mesmo recado — “me busca em Lages” não define o recuo.',
            'Coral pede bairro. Universitário pede campus. Quando Correia Pinto entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela BR-116.',
        ],
    ],
    'lateral' => [
        'h2' => 'Pontos que o pedido em Lages mais cita',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel. Centro não compartilha o recuo de Coral.',
            ],
            [
                'h3' => 'Coral',
                'texto' => 'Origem frequente para bairro. Informe nome do hotel. Coral não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Universitário',
                'texto' => 'Origem frequente para campus. Informe nome do hotel. Universitário não compartilha o recuo de Centro.',
            ],
        ],
    ],
    'faixa' => [
        'h2' => 'Rotas urbanas e o salto para Correia Pinto',
        'texto' => 'Centro → Correia Pinto: Transfer intermunicipal. Não é o mesmo recorte de Coral; o horário sai sob consulta.',
    ],
];
