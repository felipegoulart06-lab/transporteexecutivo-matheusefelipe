<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Ponta Grossa',
    'geo' => [
        'lat' => -25.0916,
        'lng' => -50.1668,
    ],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Ponta Grossa',
    'seo' => [
        'title' => 'Motorista executivo em Ponta Grossa: Centro e PGZ',
        'description' => 'Carro com motorista em Ponta Grossa para Centro, Oficinas e PGZ. Informe o ponto de embarque e o horário. Orçamento sob consulta.  Horário combinado.',
        'og_title' => 'Agenda em Ponta Grossa com motorista — Oficinas e Comandante Antonio Amilton Beraldo',
        'og_description' => 'O motorista combina Centro com Comandante Antonio Amilton Beraldo (PGZ), no próprio município. Informe nome da empresa ou do hotel.',
        'og_image_alt' => 'Carro executivo em via de Ponta Grossa',
    ],
    'kicker' => 'Campos Gerais · PR',
    'h1' => 'Em Ponta Grossa, de Centro a Comandante Antonio Amilton Beraldo (PGZ), no próprio município',
    'faq_h2' => 'Dúvidas de quem embarca em Ponta Grossa',
    'faq' => [
        [
            'pergunta' => 'Em Ponta Grossa, o PGZ fica no próprio município?',
            'resposta' => 'Sim. Em Ponta Grossa, Comandante Antonio Amilton Beraldo (PGZ) fica no município. Informe o acesso via BR-376.',
        ],
        [
            'pergunta' => 'Em Ponta Grossa, vocês buscam em Centro?',
            'resposta' => 'Sim, em Ponta Grossa. Envie nome da empresa ou do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Ponta Grossa vocês fazem Curitiba?',
            'resposta' => 'Sim, saindo de Ponta Grossa. Curitiba não é o recorte de Centro; o horário pela BR-373 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Ponta Grossa, PGZ e CWB são o mesmo recorte?',
            'resposta' => 'Não, em Ponta Grossa. PGZ fica em Ponta Grossa; CWB fica em São José dos Pinhais. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Ponta Grossa e o PGZ',
        'texto' => 'Diga o ponto em Centro ou Oficinas, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Ponta Grossa',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'parana',
            'ancora' => 'Ponta Grossa e o recorte de Campos Gerais',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'parana',
            'cidade' => 'curitiba',
            'ancora' => 'Motorista em curitiba',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'parana',
            'cidade' => 'sao-jose-dos-pinhais',
            'ancora' => 'Motorista em sao jose dos pinhais',
        ],
    ],
    'intro' => 'Ponta Grossa concentra Centro (sede e hotel) e Comandante Antonio Amilton Beraldo (PGZ) no mesmo município. O motorista precisa do ponto de embarque e do PGZ no mesmo recado — “me busca em Ponta Grossa” não define o recuo.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Ponta Grossa não é pegar um carro',
            'texto' => 'Ponta Grossa concentra Centro (sede e hotel) e Comandante Antonio Amilton Beraldo (PGZ) no mesmo município. O motorista precisa do ponto de embarque e do PGZ no mesmo recado — “me busca em Ponta Grossa” não define o recuo.',
        ],
        [
            'h2' => 'Quadrantes que mais geram embarque',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede e hotel. Informe nome da empresa ou do hotel. Centro não compartilha o recuo de Oficinas.',
                ],
                [
                    'h3' => 'Oficinas',
                    'texto' => 'Origem frequente para bairro. Informe nome da empresa ou do hotel. Oficinas não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Uvaranas',
                    'texto' => 'Origem frequente para UEPG e industrial. Informe nome da empresa ou do hotel. Uvaranas não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Nova Rússia',
                    'texto' => 'Origem frequente para residencial. Informe nome da empresa ou do hotel. Nova Rússia não compartilha o recuo de Centro.',
                ],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Três combinações que a pauta de Ponta Grossa repete',
        'itens' => [
            [
                'titulo' => 'Centro → PGZ',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: BR-376.',
            ],
            [
                'titulo' => 'PGZ → Oficinas',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome da empresa ou do hotel.',
            ],
            [
                'titulo' => 'Centro → Curitiba',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Oficinas; o horário sai sob consulta.',
            ],
        ],
    ],
];
