<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Camaçari',
    'geo' => [
        'lat' => -12.6975,
        'lng' => -38.3238,
    ],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Camaçari',
    'seo' => [
        'title' => 'Motorista executivo em Camaçari: Centro e SSA',
        'description' => 'Carro com motorista em Camaçari para Centro, Polo Industrial e SSA. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Embarque em Camaçari: hotel, Centro e SSA',
        'og_description' => 'O motorista combina Centro com Luís Eduardo Magalhães (SSA), em Salvador. Informe nome na lista da planta.',
        'og_image_alt' => 'Carro executivo em via de Camaçari',
    ],
    'kicker' => 'Região Metropolitana de Salvador · BA',
    'h1' => 'Em Camaçari: do embarque em Centro ao SSA',
    'faq_h2' => 'Dúvidas de quem embarca em Camaçari',
    'faq' => [
        [
            'pergunta' => 'Quem está em Camaçari embarca no SSA dentro da cidade?',
            'resposta' => 'Não. De Camaçari o SSA (Luís Eduardo Magalhães) fica em Salvador. O trecho sai de Centro pela BA-099.',
        ],
        [
            'pergunta' => 'Em Camaçari, vocês buscam em Centro?',
            'resposta' => 'Sim, em Camaçari. Envie nome na lista da planta em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Camaçari vocês fazem Salvador?',
            'resposta' => 'Sim, saindo de Camaçari. Salvador não é o recorte de Centro; o horário pela BR-324 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Camaçari o carro fica entre Centro e Polo Industrial?',
            'resposta' => 'Sim, em Camaçari. A hora à disposição cobre sede em Centro e portaria do polo em Polo Industrial.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Camaçari e o SSA',
        'texto' => 'Diga o ponto em Centro ou Polo Industrial, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Camaçari',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'bahia',
            'ancora' => 'Camaçari e o recorte de Região Metropolitana de Salvador',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'bahia',
            'cidade' => 'salvador',
            'ancora' => 'Motorista em salvador',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'bahia',
            'cidade' => 'feira-de-santana',
            'ancora' => 'Motorista em feira de santana',
        ],
    ],
    'intro' => 'Camaçari usa Luís Eduardo Magalhães (SSA), em Salvador. Quem embarca em Centro não está no município da pista. A BA-099 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Camaçari não é pegar um carro',
            'texto' => 'Camaçari usa Luís Eduardo Magalhães (SSA), em Salvador. Quem embarca em Centro não está no município da pista. A BA-099 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
        ],
        [
            'h2' => 'Quadrantes que mais geram embarque',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede. Informe nome na lista da planta. Centro não compartilha o recuo de Polo Industrial.',
                ],
                [
                    'h3' => 'Polo Industrial',
                    'texto' => 'Origem frequente para portaria do polo. Informe nome na lista da planta. Polo Industrial não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Abrantes',
                    'texto' => 'Origem frequente para orla e condo. Informe nome na lista da planta. Abrantes não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Gleba A',
                    'texto' => 'Origem frequente para residencial. Informe nome na lista da planta. Gleba A não compartilha o recuo de Centro.',
                ],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Três combinações que a pauta de Camaçari repete',
        'itens' => [
            [
                'titulo' => 'Centro → SSA',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: BA-099 / Paralela.',
            ],
            [
                'titulo' => 'SSA → Polo Industrial',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome na lista da planta.',
            ],
            [
                'titulo' => 'Centro → Salvador',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Polo Industrial; o horário sai sob consulta.',
            ],
        ],
    ],
];
