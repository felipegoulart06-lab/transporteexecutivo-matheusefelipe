<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Imperatriz',
    'geo' => [
        'lat' => -5.5186,
        'lng' => -47.4777,
    ],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Imperatriz',
    'seo' => [
        'title' => 'Motorista executivo em Imperatriz: Centro e IMP',
        'description' => 'Carro com motorista em Imperatriz para Centro, Nova Imperatriz e IMP. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Traslado em Imperatriz: Centro e IMP',
        'og_description' => 'O motorista combina Centro com Prefeito Renato Moreira (IMP), no próprio município. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Imperatriz',
    ],
    'kicker' => 'Sul maranhense · MA',
    'h1' => 'Em Imperatriz, de Centro a Prefeito Renato Moreira (IMP), no próprio município',
    'faq_h2' => 'Dúvidas de quem embarca em Imperatriz',
    'faq' => [
        [
            'pergunta' => 'Em Imperatriz, o IMP fica no próprio município?',
            'resposta' => 'Sim. Em Imperatriz, Prefeito Renato Moreira (IMP) fica no município. Informe o acesso via BR-010.',
        ],
        [
            'pergunta' => 'Em Imperatriz, vocês buscam em Centro?',
            'resposta' => 'Sim, em Imperatriz. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Imperatriz vocês fazem Açailândia?',
            'resposta' => 'Sim, saindo de Imperatriz. Açailândia não é o recorte de Centro; o horário pela BR-230 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Imperatriz o carro fica entre Centro e Nova Imperatriz?',
            'resposta' => 'Sim, em Imperatriz. A hora à disposição cobre sede e hotel em Centro e bairro em Nova Imperatriz.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Imperatriz e o IMP',
        'texto' => 'Diga o ponto em Centro ou Nova Imperatriz, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Imperatriz',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'maranhao',
            'ancora' => 'Imperatriz e o recorte de Sul maranhense',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'maranhao',
            'cidade' => 'sao-luis',
            'ancora' => 'Motorista em sao luis',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'tocantins',
            'cidade' => 'palmas',
            'ancora' => 'Motorista em palmas',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'Imperatriz se cruza por BR-010, não em linha reta',
            'texto' => 'Imperatriz concentra Centro (sede e hotel) e Prefeito Renato Moreira (IMP) no mesmo município. O motorista precisa do ponto de embarque e do IMP no mesmo recado — “me busca em Imperatriz” não define o recuo.',
        ],
        [
            'h2' => 'Três eixos, três recuos',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel. Centro não compartilha o recuo de Nova Imperatriz.',
                ],
                [
                    'h3' => 'Nova Imperatriz',
                    'texto' => 'Origem frequente para bairro. Informe nome do hotel. Nova Imperatriz não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Bacuri',
                    'texto' => 'Origem frequente para residencial. Informe nome do hotel. Bacuri não compartilha o recuo de Centro.',
                ],
            ],
        ],
        [
            'h2' => 'Prefeito Renato Moreira — IMP',
            'texto' => 'Prefeito Renato Moreira (IMP) fica em Imperatriz. Acesso: BR-010. Combinamos o voo; a espera no desembarque integra o trecho.',
        ],
    ],
];
