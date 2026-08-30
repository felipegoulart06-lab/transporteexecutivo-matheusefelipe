<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Porto Velho',
    'geo' => [
        'lat' => -8.76116,
        'lng' => -63.9004,
    ],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Porto Velho',
    'seo' => [
        'title' => 'Motorista executivo em Porto Velho: Centro e PVH',
        'description' => 'Motorista executivo em Porto Velho: Centro, Olaria e Governador Jorge Teixeira (PVH), no próprio município. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Embarque em Porto Velho: hotel, Centro e PVH',
        'og_description' => 'O motorista combina Centro com Governador Jorge Teixeira (PVH), no próprio município. Informe nome do hotel ou da sede.',
        'og_image_alt' => 'Carro executivo em via de Porto Velho',
    ],
    'kicker' => 'Capital rondoniense · RO',
    'h1' => 'Em Porto Velho, de Centro a Governador Jorge Teixeira (PVH), no próprio município',
    'faq_h2' => 'Dúvidas de quem embarca em Porto Velho',
    'faq' => [
        [
            'pergunta' => 'Em Porto Velho, o PVH fica no próprio município?',
            'resposta' => 'Sim. Em Porto Velho, Governador Jorge Teixeira (PVH) fica no município. Informe o acesso via BR-364.',
        ],
        [
            'pergunta' => 'Em Porto Velho, vocês buscam em Centro?',
            'resposta' => 'Sim, em Porto Velho. Envie nome do hotel ou da sede em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Porto Velho vocês fazem Ji-Paraná?',
            'resposta' => 'Sim, saindo de Porto Velho. Ji-Paraná não é o recorte de Centro; o horário pela Avenida Jorge Teixeira sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Porto Velho o carro fica entre Centro e Olaria?',
            'resposta' => 'Sim, em Porto Velho. A hora à disposição cobre sede e hotel em Centro e bairro em Olaria.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Porto Velho e o PVH',
        'texto' => 'Diga o ponto em Centro ou Olaria, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Porto Velho',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'rondonia',
            'ancora' => 'Porto Velho e o recorte de Capital rondoniense',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'acre',
            'cidade' => 'rio-branco',
            'ancora' => 'Motorista em rio branco',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'amazonas',
            'cidade' => 'manaus',
            'ancora' => 'Motorista em manaus',
        ],
    ],
    'intro' => 'Porto Velho concentra Centro (sede e hotel) e Governador Jorge Teixeira (PVH) no mesmo município. O motorista precisa do ponto de embarque e do PVH no mesmo recado — “me busca em Porto Velho” não define o recuo.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Porto Velho não é pegar um carro',
            'texto' => 'Porto Velho concentra Centro (sede e hotel) e Governador Jorge Teixeira (PVH) no mesmo município. O motorista precisa do ponto de embarque e do PVH no mesmo recado — “me busca em Porto Velho” não define o recuo.',
        ],
        [
            'h2' => 'Quadrantes que mais geram embarque',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel ou da sede. Centro não compartilha o recuo de Olaria.',
                ],
                [
                    'h3' => 'Olaria',
                    'texto' => 'Origem frequente para bairro. Informe nome do hotel ou da sede. Olaria não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Areal',
                    'texto' => 'Origem frequente para acesso à BR-364. Informe nome do hotel ou da sede. Areal não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Caiari',
                    'texto' => 'Origem frequente para porto e cais. Informe nome do hotel ou da sede. Caiari não compartilha o recuo de Centro.',
                ],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Três combinações que a pauta de Porto Velho repete',
        'itens' => [
            [
                'titulo' => 'Centro → PVH',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: BR-364.',
            ],
            [
                'titulo' => 'PVH → Olaria',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome do hotel ou da sede.',
            ],
            [
                'titulo' => 'Centro → Ji-Paraná',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Olaria; o horário sai sob consulta.',
            ],
        ],
    ],
];
