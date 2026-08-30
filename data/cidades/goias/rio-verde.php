<?php

declare(strict_types=1);

return [
    'layout' => 'gaucha',
    'cidade_nome' => 'Rio Verde',
    'geo' => [
        'lat' => -17.7923,
        'lng' => -50.9192,
    ],
    'imagem' => 'centro-oeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Rio Verde',
    'seo' => [
        'title' => 'Motorista executivo em Rio Verde: Centro e RVD',
        'description' => 'Carro com motorista em Rio Verde para Centro, Setor Morada do Sol e RVD. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Agenda em Rio Verde com motorista — Setor Morada do Sol e Gal. Leite de Castro',
        'og_description' => 'O motorista combina Centro com Gal. Leite de Castro (RVD), no próprio município. Informe nome na lista da portaria.',
        'og_image_alt' => 'Carro executivo em via de Rio Verde',
    ],
    'kicker' => 'Sudoeste goiano · GO',
    'h1' => 'Em Rio Verde, de Centro a Gal. Leite de Castro (RVD), no próprio município',
    'faq_h2' => 'Dúvidas de quem embarca em Rio Verde',
    'faq' => [
        [
            'pergunta' => 'Em Rio Verde, o RVD fica no próprio município?',
            'resposta' => 'Sim. Em Rio Verde, Gal. Leite de Castro (RVD) fica no município. Informe o acesso via BR-060.',
        ],
        [
            'pergunta' => 'Em Rio Verde, vocês buscam em Centro?',
            'resposta' => 'Sim, em Rio Verde. Envie nome na lista da portaria em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Rio Verde vocês fazem Jataí?',
            'resposta' => 'Sim, saindo de Rio Verde. Jataí não é o recorte de Centro; o horário pela GO-174 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Rio Verde, RVD e GYN são o mesmo recorte?',
            'resposta' => 'Não, em Rio Verde. RVD fica em Rio Verde; GYN fica em Goiânia. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Rio Verde e o RVD',
        'texto' => 'Diga o ponto em Centro ou Setor Morada do Sol, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Rio Verde',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'goias',
            'ancora' => 'Rio Verde e o recorte de Sudoeste goiano',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'goias',
            'cidade' => 'goiania',
            'ancora' => 'Motorista em goiania',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'goias',
            'cidade' => 'anapolis',
            'ancora' => 'Motorista em anapolis',
        ],
    ],
    'coluna' => [
        'h2' => 'Rio Verde no mapa e na BR-060',
        'texto' => [
            'Rio Verde concentra Centro (sede e hotel) e Gal. Leite de Castro (RVD) no mesmo município. O motorista precisa do ponto de embarque e do RVD no mesmo recado — “me busca em Rio Verde” não define o recuo.',
            'Setor Morada do Sol pede bairro. Campus pede IFGoiano. Quando Jataí entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela GO-174.',
        ],
    ],
    'lateral' => [
        'h2' => 'Pontos que o pedido em Rio Verde mais cita',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome na lista da portaria. Centro não compartilha o recuo de Setor Morada do Sol.',
            ],
            [
                'h3' => 'Setor Morada do Sol',
                'texto' => 'Origem frequente para bairro. Informe nome na lista da portaria. Setor Morada do Sol não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Campus',
                'texto' => 'Origem frequente para IFGoiano. Informe nome na lista da portaria. Campus não compartilha o recuo de Centro.',
            ],
        ],
    ],
    'faixa' => [
        'h2' => 'Rotas urbanas e o salto para Jataí',
        'texto' => 'Centro → Jataí: Transfer intermunicipal. Não é o mesmo recorte de Setor Morada do Sol; o horário sai sob consulta.',
    ],
];
