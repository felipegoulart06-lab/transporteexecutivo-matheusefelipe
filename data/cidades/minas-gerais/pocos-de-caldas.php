<?php

declare(strict_types=1);

return [
    'layout' => 'mare',
    'cidade_nome' => 'Poços de Caldas',
    'geo' => [
        'lat' => -21.7879,
        'lng' => -46.5614,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Poços de Caldas',
    'seo' => [
        'title' => 'Motorista executivo em Poços de Caldas: Centro e POO',
        'description' => 'Carro com motorista em Poços de Caldas para Centro, São Benedito e POO. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Embarque em Poços de Caldas: hotel, Centro e POO',
        'og_description' => 'O motorista combina Centro com Embaixador Walther Moreira Salles (POO), no próprio município. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Poços de Caldas',
    ],
    'kicker' => 'Sul de Minas · MG',
    'h1' => 'Poços de Caldas — Centro de manhã, POO quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Poços de Caldas',
    'faq' => [
        [
            'pergunta' => 'Em Poços de Caldas, o POO fica no próprio município?',
            'resposta' => 'Sim. Em Poços de Caldas, Embaixador Walther Moreira Salles (POO) fica no município. Informe o acesso via MG-179.',
        ],
        [
            'pergunta' => 'Em Poços de Caldas, vocês buscam em Centro?',
            'resposta' => 'Sim, em Poços de Caldas. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Poços de Caldas vocês fazem Campinas?',
            'resposta' => 'Sim, saindo de Poços de Caldas. Campinas não é o recorte de Centro; o horário pela MG-179 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Poços de Caldas, POO e VCP são o mesmo recorte?',
            'resposta' => 'Não, em Poços de Caldas. POO fica em Poços de Caldas; VCP fica em Campinas. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Poços de Caldas e o POO',
        'texto' => 'Diga o ponto em Centro ou São Benedito, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Poços de Caldas',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'minas-gerais',
            'ancora' => 'Poços de Caldas e o recorte de Sul de Minas',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'ribeirao-preto',
            'ancora' => 'Motorista em ribeirao preto',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'campinas',
            'ancora' => 'Motorista em campinas',
        ],
    ],
    'editorial' => [
        'h2' => 'Poços de Caldas pede ordem de endereço, não slogan',
        'texto' => [
            'Poços de Caldas concentra Centro (hotel e termas) e Embaixador Walther Moreira Salles (POO) no mesmo município. O motorista precisa do ponto de embarque e do POO no mesmo recado — “me busca em Poços de Caldas” não define o recuo.',
            'São Benedito pede bairro. Country Club pede clube e hotel. Quando Campinas entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela MG-179.',
        ],
    ],
    'coluna_a' => [
        'h2' => 'Eixos de Poços de Caldas',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para hotel e termas. Informe nome do hotel. Centro não compartilha o recuo de São Benedito.',
            ],
            [
                'h3' => 'São Benedito',
                'texto' => 'Origem frequente para bairro. Informe nome do hotel. São Benedito não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Country Club',
                'texto' => 'Origem frequente para clube e hotel. Informe nome do hotel. Country Club não compartilha o recuo de Centro.',
            ],
        ],
    ],
    'coluna_b' => [
        'h2' => 'POO e a vazão',
        'texto' => 'Embaixador Walther Moreira Salles (POO) fica em Poços de Caldas. Acesso: MG-179. Combinamos o voo; a espera no desembarque integra o trecho. Campinas entra como viagem.',
    ],
];
