<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Ananindeua',
    'geo' => [
        'lat' => -1.3656,
        'lng' => -48.3743,
    ],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Ananindeua',
    'seo' => [
        'title' => 'Motorista executivo em Ananindeua: Centro e BEL',
        'description' => 'Carro com motorista em Ananindeua para Centro, Cidade Nova e BEL. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Embarque em Ananindeua: hotel, Centro e BEL',
        'og_description' => 'O motorista combina Centro com Val de Cans (BEL), em Belém. Informe nome do condomínio.',
        'og_image_alt' => 'Carro executivo em via de Ananindeua',
    ],
    'kicker' => 'Região Metropolitana de Belém · PA',
    'h1' => 'Em Ananindeua, de Centro a Val de Cans (BEL), em Belém',
    'faq_h2' => 'Dúvidas de quem embarca em Ananindeua',
    'faq' => [
        [
            'pergunta' => 'Quem está em Ananindeua embarca no BEL dentro da cidade?',
            'resposta' => 'Não. De Ananindeua o BEL (Val de Cans) fica em Belém. O trecho sai de Centro pela BR-316.',
        ],
        [
            'pergunta' => 'Em Ananindeua, vocês buscam em Centro?',
            'resposta' => 'Sim, em Ananindeua. Envie nome do condomínio em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Ananindeua vocês fazem Belém?',
            'resposta' => 'Sim, saindo de Ananindeua. Belém não é o recorte de Centro; o horário pela Almirante Barroso sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Ananindeua o carro fica entre Centro e Cidade Nova?',
            'resposta' => 'Sim, em Ananindeua. A hora à disposição cobre sede em Centro e eixo comercial em Cidade Nova.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Ananindeua e o BEL',
        'texto' => 'Diga o ponto em Centro ou Cidade Nova, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Ananindeua',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'para',
            'ancora' => 'Ananindeua e o recorte de Região Metropolitana de Belém',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'para',
            'cidade' => 'belem',
            'ancora' => 'Motorista em belem',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'para',
            'cidade' => 'santarem',
            'ancora' => 'Motorista em santarem',
        ],
    ],
    'intro' => 'Ananindeua usa Val de Cans (BEL), em Belém. Quem embarca em Centro não está no município da pista. A BR-316 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Ananindeua não é pegar um carro',
            'texto' => 'Ananindeua usa Val de Cans (BEL), em Belém. Quem embarca em Centro não está no município da pista. A BR-316 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
        ],
        [
            'h2' => 'Quadrantes que mais geram embarque',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede. Informe nome do condomínio. Centro não compartilha o recuo de Cidade Nova.',
                ],
                [
                    'h3' => 'Cidade Nova',
                    'texto' => 'Origem frequente para eixo comercial. Informe nome do condomínio. Cidade Nova não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Coqueiro',
                    'texto' => 'Origem frequente para bairro. Informe nome do condomínio. Coqueiro não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Águas Lindas',
                    'texto' => 'Origem frequente para residencial. Informe nome do condomínio. Águas Lindas não compartilha o recuo de Centro.',
                ],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Três combinações que a pauta de Ananindeua repete',
        'itens' => [
            [
                'titulo' => 'Centro → BEL',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: BR-316.',
            ],
            [
                'titulo' => 'BEL → Cidade Nova',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome do condomínio.',
            ],
            [
                'titulo' => 'Centro → Belém',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Cidade Nova; o horário sai sob consulta.',
            ],
        ],
    ],
];
