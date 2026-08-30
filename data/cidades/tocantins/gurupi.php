<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Gurupi',
    'geo' => [
        'lat' => -11.7279,
        'lng' => -49.068,
    ],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Gurupi',
    'seo' => [
        'title' => 'Carro com motorista em Gurupi: Setor Norte e GRP',
        'description' => 'Motorista executivo em Gurupi: Centro, Setor Norte e Gurupi (GRP), no próprio município. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Traslado em Gurupi: Centro e GRP',
        'og_description' => 'O motorista combina Centro com Gurupi (GRP), no próprio município. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Gurupi',
    ],
    'kicker' => 'Sul tocantinense · TO',
    'h1' => 'Gurupi: entre Centro, Setor Norte e o terminal certo',
    'faq_h2' => 'Dúvidas de quem embarca em Gurupi',
    'faq' => [
        [
            'pergunta' => 'Em Gurupi, o GRP fica no próprio município?',
            'resposta' => 'Sim. Em Gurupi, Gurupi (GRP) fica no município. Informe o acesso via TO-040.',
        ],
        [
            'pergunta' => 'Em Gurupi, vocês buscam em Centro?',
            'resposta' => 'Sim, em Gurupi. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Gurupi vocês fazem Palmas?',
            'resposta' => 'Sim, saindo de Gurupi. Palmas não é o recorte de Centro; o horário pela TO-040 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Gurupi, GRP e PMW são o mesmo recorte?',
            'resposta' => 'Não, em Gurupi. GRP fica em Gurupi; PMW fica em Palmas. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Gurupi e o GRP',
        'texto' => 'Diga o ponto em Centro ou Setor Norte, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Gurupi',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'tocantins',
            'ancora' => 'Gurupi e o recorte de Sul tocantinense',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'tocantins',
            'cidade' => 'palmas',
            'ancora' => 'Motorista em palmas',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'tocantins',
            'cidade' => 'araguaina',
            'ancora' => 'Motorista em araguaina',
        ],
    ],
    'olho' => 'Centro e Gurupi (GRP), no próprio município não cabem no mesmo aceite tardio.',
    'capitulos' => [
        [
            'h2' => 'Centro e o recuo da pauta',
            'texto' => 'Gurupi concentra Centro (sede e hotel) e Gurupi (GRP) no mesmo município. O motorista precisa do ponto de embarque e do GRP no mesmo recado — “me busca em Gurupi” não define o recuo.',
        ],
        [
            'h2' => 'Setor Norte, Setor Sul e a ordem do dia',
            'itens' => [
                [
                    'h3' => 'Setor Norte',
                    'texto' => 'Origem frequente para quadra. Informe nome do hotel. Setor Norte não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Setor Sul',
                    'texto' => 'Origem frequente para quadra. Informe nome do hotel. Setor Sul não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Setor Central',
                    'texto' => 'Origem frequente para eixo. Informe nome do hotel. Setor Central não compartilha o recuo de Centro.',
                ],
            ],
        ],
        [
            'h2' => 'Gurupi — GRP',
            'texto' => 'Gurupi (GRP) fica em Gurupi. Acesso: TO-040. Combinamos o voo; a espera no desembarque integra o trecho.',
        ],
    ],
    'passos' => [
        'h2' => 'Como solicitar em Gurupi',
        'itens' => [
            [
                'num' => '01',
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do hotel. Autocomplete não resolve dois acessos em Centro.',
            ],
            [
                'num' => '02',
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o GRP ou Palmas entra no dia.',
            ],
            [
                'num' => '03',
                'titulo' => 'Confirmação',
                'texto' => 'Em Gurupi, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
