<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Juiz de Fora',
    'geo' => [
        'lat' => -21.7622,
        'lng' => -43.3434,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Juiz de Fora',
    'seo' => [
        'title' => 'Motorista executivo em Juiz de Fora: Centro e JDF',
        'description' => 'Carro com motorista em Juiz de Fora para Centro, São Mateus e JDF. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Traslado em Juiz de Fora: Centro e JDF',
        'og_description' => 'O motorista combina Centro com Francisco Álvares de Assis (JDF), no próprio município. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Juiz de Fora',
    ],
    'kicker' => 'Zona da Mata · MG',
    'h1' => 'Juiz de Fora: entre Centro, São Mateus e o terminal certo',
    'faq_h2' => 'Dúvidas de quem embarca em Juiz de Fora',
    'faq' => [
        [
            'pergunta' => 'Em Juiz de Fora, o JDF fica no próprio município?',
            'resposta' => 'Sim. Em Juiz de Fora, Francisco Álvares de Assis (JDF) fica no município. Informe o acesso via BR-267.',
        ],
        [
            'pergunta' => 'Em Juiz de Fora, vocês buscam em Centro?',
            'resposta' => 'Sim, em Juiz de Fora. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Juiz de Fora vocês fazem Petrópolis?',
            'resposta' => 'Sim, saindo de Juiz de Fora. Petrópolis não é o recorte de Centro; o horário pela BR-267 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Juiz de Fora, JDF e GIG são o mesmo recorte?',
            'resposta' => 'Não, em Juiz de Fora. JDF fica em Juiz de Fora; GIG fica em Rio de Janeiro. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Juiz de Fora e o JDF',
        'texto' => 'Diga o ponto em Centro ou São Mateus, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Juiz de Fora',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'minas-gerais',
            'ancora' => 'Juiz de Fora e o recorte de Zona da Mata',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'minas-gerais',
            'cidade' => 'belo-horizonte',
            'ancora' => 'Motorista em belo horizonte',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-de-janeiro',
            'cidade' => 'petropolis',
            'ancora' => 'Motorista em petropolis',
        ],
    ],
    'olho' => 'Centro e Francisco Álvares de Assis (JDF), no próprio município não cabem no mesmo aceite tardio.',
    'capitulos' => [
        [
            'h2' => 'Centro e o recuo da pauta',
            'texto' => 'Juiz de Fora concentra Centro (sede e hotel) e Francisco Álvares de Assis (JDF) no mesmo município. O motorista precisa do ponto de embarque e do JDF no mesmo recado — “me busca em Juiz de Fora” não define o recuo.',
        ],
        [
            'h2' => 'São Mateus, Cascatinha e a ordem do dia',
            'itens' => [
                [
                    'h3' => 'São Mateus',
                    'texto' => 'Origem frequente para bairro executivo. Informe nome do hotel. São Mateus não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Cascatinha',
                    'texto' => 'Origem frequente para acesso à BR-040. Informe nome do hotel. Cascatinha não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Universitário',
                    'texto' => 'Origem frequente para UFJF. Informe nome do hotel. Universitário não compartilha o recuo de Centro.',
                ],
            ],
        ],
        [
            'h2' => 'Francisco Álvares de Assis — JDF',
            'texto' => 'Francisco Álvares de Assis (JDF) fica em Juiz de Fora. Acesso: BR-267. Combinamos o voo; a espera no desembarque integra o trecho.',
        ],
    ],
    'passos' => [
        'h2' => 'Como solicitar em Juiz de Fora',
        'itens' => [
            [
                'num' => '01',
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do hotel. Autocomplete não resolve dois acessos em Centro.',
            ],
            [
                'num' => '02',
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o JDF ou Petrópolis entra no dia.',
            ],
            [
                'num' => '03',
                'titulo' => 'Confirmação',
                'texto' => 'Em Juiz de Fora, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
