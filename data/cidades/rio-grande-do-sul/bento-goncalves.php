<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Bento Gonçalves',
    'geo' => [
        'lat' => -29.1662,
        'lng' => -51.5105,
    ],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Bento Gonçalves',
    'seo' => [
        'title' => 'Motorista executivo em Bento Gonçalves: Centro e CXJ',
        'description' => 'Carro com motorista em Bento Gonçalves para Centro, Cidade Alta e CXJ. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Traslado em Bento Gonçalves: Centro e CXJ',
        'og_description' => 'O motorista combina Centro com Hugo Cantergiani (CXJ), em Caxias do Sul. Informe nome do hotel ou da vinícola.',
        'og_image_alt' => 'Carro executivo em via de Bento Gonçalves',
    ],
    'kicker' => 'Serra gaúcha · RS',
    'h1' => 'Bento Gonçalves — Centro de manhã, CXJ quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Bento Gonçalves',
    'faq' => [
        [
            'pergunta' => 'Quem está em Bento Gonçalves embarca no CXJ dentro da cidade?',
            'resposta' => 'Não. De Bento Gonçalves o CXJ (Hugo Cantergiani) fica em Caxias do Sul. O trecho sai de Centro pela RS-122.',
        ],
        [
            'pergunta' => 'Em Bento Gonçalves, vocês buscam em Centro?',
            'resposta' => 'Sim, em Bento Gonçalves. Envie nome do hotel ou da vinícola em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Bento Gonçalves vocês fazem Caxias do Sul?',
            'resposta' => 'Sim, saindo de Bento Gonçalves. Caxias do Sul não é o recorte de Centro; o horário pela RS-470 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Bento Gonçalves, CXJ e POA são o mesmo recorte?',
            'resposta' => 'Não, em Bento Gonçalves. CXJ fica em Caxias do Sul; POA fica em Porto Alegre. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Bento Gonçalves e o CXJ',
        'texto' => 'Diga o ponto em Centro ou Cidade Alta, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Bento Gonçalves',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'rio-grande-do-sul',
            'ancora' => 'Bento Gonçalves e o recorte de Serra gaúcha',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-grande-do-sul',
            'cidade' => 'caxias-do-sul',
            'ancora' => 'Motorista em caxias do sul',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-grande-do-sul',
            'cidade' => 'porto-alegre',
            'ancora' => 'Motorista em porto alegre',
        ],
    ],
    'olho' => 'Centro e Hugo Cantergiani (CXJ), em Caxias do Sul não cabem no mesmo aceite tardio.',
    'capitulos' => [
        [
            'h2' => 'Centro e o recuo da pauta',
            'texto' => 'Bento Gonçalves usa Hugo Cantergiani (CXJ), em Caxias do Sul. Quem embarca em Centro não está no município da pista. A RS-122 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
        ],
        [
            'h2' => 'Cidade Alta, Vale dos Vinhedos e a ordem do dia',
            'itens' => [
                [
                    'h3' => 'Cidade Alta',
                    'texto' => 'Origem frequente para bairro. Informe nome do hotel ou da vinícola. Cidade Alta não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Vale dos Vinhedos',
                    'texto' => 'Origem frequente para vinícola e hotel. Informe nome do hotel ou da vinícola. Vale dos Vinhedos não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Fenavinho',
                    'texto' => 'Origem frequente para evento. Informe nome do hotel ou da vinícola. Fenavinho não compartilha o recuo de Centro.',
                ],
            ],
        ],
        [
            'h2' => 'Hugo Cantergiani — CXJ',
            'texto' => 'Hugo Cantergiani (CXJ) fica em Caxias do Sul, não em Bento Gonçalves. O trecho sai pela RS-122. Diga o IATA e o número do voo.',
        ],
    ],
    'passos' => [
        'h2' => 'Como solicitar em Bento Gonçalves',
        'itens' => [
            [
                'num' => '01',
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do hotel ou da vinícola. Autocomplete não resolve dois acessos em Centro.',
            ],
            [
                'num' => '02',
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o CXJ ou Caxias do Sul entra no dia.',
            ],
            [
                'num' => '03',
                'titulo' => 'Confirmação',
                'texto' => 'Em Bento Gonçalves, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
