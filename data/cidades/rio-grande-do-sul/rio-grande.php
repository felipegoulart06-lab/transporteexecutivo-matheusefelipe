<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Rio Grande',
    'geo' => [
        'lat' => -32.035,
        'lng' => -52.0986,
    ],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Rio Grande',
    'seo' => [
        'title' => 'Motorista executivo em Rio Grande: Centro e RIG',
        'description' => 'Motorista executivo em Rio Grande: Centro, Cassino e Rio Grande (RIG), no próprio município. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Agenda em Rio Grande com motorista — Cassino e Rio Grande',
        'og_description' => 'O motorista combina Centro com Rio Grande (RIG), no próprio município. Informe nome na lista do cais.',
        'og_image_alt' => 'Carro executivo em via de Rio Grande',
    ],
    'kicker' => 'Litoral sul gaúcho · RS',
    'h1' => 'Rio Grande — Centro de manhã, RIG quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Rio Grande',
    'faq' => [
        [
            'pergunta' => 'Em Rio Grande, o RIG fica no próprio município?',
            'resposta' => 'Sim. Em Rio Grande, Rio Grande (RIG) fica no município. Informe o acesso via BR-392.',
        ],
        [
            'pergunta' => 'Em Rio Grande, vocês buscam em Centro?',
            'resposta' => 'Sim, em Rio Grande. Envie nome na lista do cais em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Rio Grande vocês fazem Pelotas?',
            'resposta' => 'Sim, saindo de Rio Grande. Pelotas não é o recorte de Centro; o horário pela Avenida Rheingantz sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Rio Grande, RIG e PET são o mesmo recorte?',
            'resposta' => 'Não, em Rio Grande. RIG fica em Rio Grande; PET fica em Pelotas. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Rio Grande e o RIG',
        'texto' => 'Diga o ponto em Centro ou Cassino, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Rio Grande',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'rio-grande-do-sul',
            'ancora' => 'Rio Grande e o recorte de Litoral sul gaúcho',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-grande-do-sul',
            'cidade' => 'pelotas',
            'ancora' => 'Motorista em pelotas',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-grande-do-sul',
            'cidade' => 'porto-alegre',
            'ancora' => 'Motorista em porto alegre',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'Rio Grande se cruza por BR-392, não em linha reta',
            'texto' => 'Rio Grande concentra Centro (sede e hotel) e Rio Grande (RIG) no mesmo município. O motorista precisa do ponto de embarque e do RIG no mesmo recado — “me busca em Rio Grande” não define o recuo.',
        ],
        [
            'h2' => 'Três eixos, três recuos',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede e hotel. Informe nome na lista do cais. Centro não compartilha o recuo de Cassino.',
                ],
                [
                    'h3' => 'Cassino',
                    'texto' => 'Origem frequente para orla. Informe nome na lista do cais. Cassino não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Superporto',
                    'texto' => 'Origem frequente para cais e terminal. Informe nome na lista do cais. Superporto não compartilha o recuo de Centro.',
                ],
            ],
        ],
        [
            'h2' => 'Rio Grande — RIG',
            'texto' => 'Rio Grande (RIG) fica em Rio Grande. Acesso: BR-392. Combinamos o voo; a espera no desembarque integra o trecho.',
        ],
    ],
];
