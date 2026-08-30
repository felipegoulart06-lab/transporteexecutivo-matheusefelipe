<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Guarapuava',
    'geo' => [
        'lat' => -25.3905,
        'lng' => -51.4627,
    ],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Guarapuava',
    'seo' => [
        'title' => 'Motorista executivo em Guarapuava: Centro e GPB',
        'description' => 'Motorista executivo em Guarapuava: Centro, Santana e Tancredo Thomas de Faria (GPB), no próprio município. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Embarque em Guarapuava: hotel, Centro e GPB',
        'og_description' => 'O motorista combina Centro com Tancredo Thomas de Faria (GPB), no próprio município. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Guarapuava',
    ],
    'kicker' => 'Centro-sul paranaense · PR',
    'h1' => 'Em Guarapuava: do embarque em Centro ao GPB',
    'faq_h2' => 'Dúvidas de quem embarca em Guarapuava',
    'faq' => [
        [
            'pergunta' => 'Em Guarapuava, o GPB fica no próprio município?',
            'resposta' => 'Sim. Em Guarapuava, Tancredo Thomas de Faria (GPB) fica no município. Informe o acesso via BR-277.',
        ],
        [
            'pergunta' => 'Em Guarapuava, vocês buscam em Centro?',
            'resposta' => 'Sim, em Guarapuava. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Guarapuava vocês fazem Ponta Grossa?',
            'resposta' => 'Sim, saindo de Guarapuava. Ponta Grossa não é o recorte de Centro; o horário pela BR-373 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Guarapuava, GPB e CWB são o mesmo recorte?',
            'resposta' => 'Não, em Guarapuava. GPB fica em Guarapuava; CWB fica em São José dos Pinhais. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Guarapuava e o GPB',
        'texto' => 'Diga o ponto em Centro ou Santana, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Guarapuava',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'parana',
            'ancora' => 'Guarapuava e o recorte de Centro-sul paranaense',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'parana',
            'cidade' => 'ponta-grossa',
            'ancora' => 'Motorista em ponta grossa',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'parana',
            'cidade' => 'curitiba',
            'ancora' => 'Motorista em curitiba',
        ],
    ],
    'olho' => 'Centro e Tancredo Thomas de Faria (GPB), no próprio município não cabem no mesmo aceite tardio.',
    'capitulos' => [
        [
            'h2' => 'Centro e o recuo da pauta',
            'texto' => 'Guarapuava concentra Centro (sede e hotel) e Tancredo Thomas de Faria (GPB) no mesmo município. O motorista precisa do ponto de embarque e do GPB no mesmo recado — “me busca em Guarapuava” não define o recuo.',
        ],
        [
            'h2' => 'Santana, Industrial e a ordem do dia',
            'itens' => [
                [
                    'h3' => 'Santana',
                    'texto' => 'Origem frequente para bairro. Informe nome do hotel. Santana não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Industrial',
                    'texto' => 'Origem frequente para planta. Informe nome do hotel. Industrial não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Universitário',
                    'texto' => 'Origem frequente para Unicentro. Informe nome do hotel. Universitário não compartilha o recuo de Centro.',
                ],
            ],
        ],
        [
            'h2' => 'Tancredo Thomas de Faria — GPB',
            'texto' => 'Tancredo Thomas de Faria (GPB) fica em Guarapuava. Acesso: BR-277. Combinamos o voo; a espera no desembarque integra o trecho.',
        ],
    ],
    'passos' => [
        'h2' => 'Como solicitar em Guarapuava',
        'itens' => [
            [
                'num' => '01',
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do hotel. Autocomplete não resolve dois acessos em Centro.',
            ],
            [
                'num' => '02',
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o GPB ou Ponta Grossa entra no dia.',
            ],
            [
                'num' => '03',
                'titulo' => 'Confirmação',
                'texto' => 'Em Guarapuava, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
