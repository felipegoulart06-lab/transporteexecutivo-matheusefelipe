<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Montes Claros',
    'geo' => [
        'lat' => -16.7282,
        'lng' => -43.8582,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Montes Claros',
    'seo' => [
        'title' => 'Motorista executivo em Montes Claros: Centro e MOC',
        'description' => 'Carro com motorista em Montes Claros para Centro, Ibituruna e MOC. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Embarque em Montes Claros: hotel, Centro e MOC',
        'og_description' => 'O motorista combina Centro com Mário Ribeiro (MOC), no próprio município. Informe nome do hotel ou do campus.',
        'og_image_alt' => 'Carro executivo em via de Montes Claros',
    ],
    'kicker' => 'Norte de Minas · MG',
    'h1' => 'Em Montes Claros: do embarque em Centro ao MOC',
    'faq_h2' => 'Dúvidas de quem embarca em Montes Claros',
    'faq' => [
        [
            'pergunta' => 'Em Montes Claros, o MOC fica no próprio município?',
            'resposta' => 'Sim. Em Montes Claros, Mário Ribeiro (MOC) fica no município. Informe o acesso via BR-135.',
        ],
        [
            'pergunta' => 'Em Montes Claros, vocês buscam em Centro?',
            'resposta' => 'Sim, em Montes Claros. Envie nome do hotel ou do campus em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Montes Claros vocês fazem Janaúba?',
            'resposta' => 'Sim, saindo de Montes Claros. Janaúba não é o recorte de Centro; o horário pela BR-251 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Montes Claros o carro fica entre Centro e Ibituruna?',
            'resposta' => 'Sim, em Montes Claros. A hora à disposição cobre sede e hotel em Centro e Unimontes em Ibituruna.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Montes Claros e o MOC',
        'texto' => 'Diga o ponto em Centro ou Ibituruna, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Montes Claros',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'minas-gerais',
            'ancora' => 'Montes Claros e o recorte de Norte de Minas',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'minas-gerais',
            'cidade' => 'belo-horizonte',
            'ancora' => 'Motorista em belo horizonte',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'bahia',
            'cidade' => 'vitoria-da-conquista',
            'ancora' => 'Motorista em vitoria da conquista',
        ],
    ],
    'olho' => 'Centro e Mário Ribeiro (MOC), no próprio município não cabem no mesmo aceite tardio.',
    'capitulos' => [
        [
            'h2' => 'Centro e o recuo da pauta',
            'texto' => 'Montes Claros concentra Centro (sede e hotel) e Mário Ribeiro (MOC) no mesmo município. O motorista precisa do ponto de embarque e do MOC no mesmo recado — “me busca em Montes Claros” não define o recuo.',
        ],
        [
            'h2' => 'Ibituruna, Todos os Santos e a ordem do dia',
            'itens' => [
                [
                    'h3' => 'Ibituruna',
                    'texto' => 'Origem frequente para Unimontes. Informe nome do hotel ou do campus. Ibituruna não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Todos os Santos',
                    'texto' => 'Origem frequente para bairro. Informe nome do hotel ou do campus. Todos os Santos não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Major Prates',
                    'texto' => 'Origem frequente para acesso. Informe nome do hotel ou do campus. Major Prates não compartilha o recuo de Centro.',
                ],
            ],
        ],
        [
            'h2' => 'Mário Ribeiro — MOC',
            'texto' => 'Mário Ribeiro (MOC) fica em Montes Claros. Acesso: BR-135. Combinamos o voo; a espera no desembarque integra o trecho.',
        ],
    ],
    'passos' => [
        'h2' => 'Como solicitar em Montes Claros',
        'itens' => [
            [
                'num' => '01',
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do hotel ou do campus. Autocomplete não resolve dois acessos em Centro.',
            ],
            [
                'num' => '02',
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o MOC ou Janaúba entra no dia.',
            ],
            [
                'num' => '03',
                'titulo' => 'Confirmação',
                'texto' => 'Em Montes Claros, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
