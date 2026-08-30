<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Três Lagoas',
    'geo' => [
        'lat' => -20.7514,
        'lng' => -51.6783,
    ],
    'imagem' => 'centro-oeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Três Lagoas',
    'seo' => [
        'title' => 'Motorista executivo em Três Lagoas: Centro e TJL',
        'description' => 'Carro com motorista em Três Lagoas para Centro, Interlagos e TJL. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Traslado em Três Lagoas: Centro e TJL',
        'og_description' => 'O motorista combina Centro com Plínio Alarcom (TJL), no próprio município. Informe nome na lista da planta.',
        'og_image_alt' => 'Carro executivo em via de Três Lagoas',
    ],
    'kicker' => 'Leste sul-mato-grossense · MS',
    'h1' => 'Em Três Lagoas: do embarque em Centro ao TJL',
    'faq_h2' => 'Dúvidas de quem embarca em Três Lagoas',
    'faq' => [
        [
            'pergunta' => 'Em Três Lagoas, o TJL fica no próprio município?',
            'resposta' => 'Sim. Em Três Lagoas, Plínio Alarcom (TJL) fica no município. Informe o acesso via MS-395.',
        ],
        [
            'pergunta' => 'Em Três Lagoas, vocês buscam em Centro?',
            'resposta' => 'Sim, em Três Lagoas. Envie nome na lista da planta em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Três Lagoas vocês fazem Araçatuba?',
            'resposta' => 'Sim, saindo de Três Lagoas. Araçatuba não é o recorte de Centro; o horário pela BR-158 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Três Lagoas, TJL e VCP são o mesmo recorte?',
            'resposta' => 'Não, em Três Lagoas. TJL fica em Três Lagoas; VCP fica em Campinas. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Três Lagoas e o TJL',
        'texto' => 'Diga o ponto em Centro ou Interlagos, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Três Lagoas',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'mato-grosso-do-sul',
            'ancora' => 'Três Lagoas e o recorte de Leste sul-mato-grossense',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'mato-grosso-do-sul',
            'cidade' => 'campo-grande',
            'ancora' => 'Motorista em campo grande',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'mato-grosso-do-sul',
            'cidade' => 'dourados',
            'ancora' => 'Motorista em dourados',
        ],
    ],
    'intro' => 'Três Lagoas concentra Centro (sede e hotel) e Plínio Alarcom (TJL) no mesmo município. O motorista precisa do ponto de embarque e do TJL no mesmo recado — “me busca em Três Lagoas” não define o recuo.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Três Lagoas não é pegar um carro',
            'texto' => 'Três Lagoas concentra Centro (sede e hotel) e Plínio Alarcom (TJL) no mesmo município. O motorista precisa do ponto de embarque e do TJL no mesmo recado — “me busca em Três Lagoas” não define o recuo.',
        ],
        [
            'h2' => 'Quadrantes que mais geram embarque',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede e hotel. Informe nome na lista da planta. Centro não compartilha o recuo de Interlagos.',
                ],
                [
                    'h3' => 'Interlagos',
                    'texto' => 'Origem frequente para bairro. Informe nome na lista da planta. Interlagos não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Distrito Industrial',
                    'texto' => 'Origem frequente para planta de papel e celulose. Informe nome na lista da planta. Distrito Industrial não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Santos Dumont',
                    'texto' => 'Origem frequente para residencial. Informe nome na lista da planta. Santos Dumont não compartilha o recuo de Centro.',
                ],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Três combinações que a pauta de Três Lagoas repete',
        'itens' => [
            [
                'titulo' => 'Centro → TJL',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: MS-395.',
            ],
            [
                'titulo' => 'TJL → Interlagos',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome na lista da planta.',
            ],
            [
                'titulo' => 'Centro → Araçatuba',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Interlagos; o horário sai sob consulta.',
            ],
        ],
    ],
];
