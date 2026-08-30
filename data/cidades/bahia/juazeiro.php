<?php

declare(strict_types=1);

return [
    'layout' => 'rio',
    'cidade_nome' => 'Juazeiro',
    'geo' => [
        'lat' => -9.4162,
        'lng' => -40.5033,
    ],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Juazeiro',
    'seo' => [
        'title' => 'Motorista executivo em Juazeiro: Centro e PNZ',
        'description' => 'Carro com motorista em Juazeiro para Centro, Santo Antônio e PNZ. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Embarque em Juazeiro: hotel, Centro e PNZ',
        'og_description' => 'O motorista combina Centro com Petrolina (PNZ), em Petrolina. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Juazeiro',
    ],
    'kicker' => 'Vale do São Francisco · BA',
    'h1' => 'Juazeiro: entre Centro, Santo Antônio e o terminal certo',
    'faq_h2' => 'Dúvidas de quem embarca em Juazeiro',
    'faq' => [
        [
            'pergunta' => 'Quem está em Juazeiro embarca no PNZ dentro da cidade?',
            'resposta' => 'Não. De Juazeiro o PNZ (Petrolina) fica em Petrolina. O trecho sai de Centro pela BR-407.',
        ],
        [
            'pergunta' => 'Em Juazeiro, vocês buscam em Centro?',
            'resposta' => 'Sim, em Juazeiro. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Juazeiro vocês fazem Petrolina?',
            'resposta' => 'Sim, saindo de Juazeiro. Petrolina não é o recorte de Centro; o horário pela BR-235 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Juazeiro o carro fica entre Centro e Santo Antônio?',
            'resposta' => 'Sim, em Juazeiro. A hora à disposição cobre sede e hotel em Centro e bairro em Santo Antônio.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Juazeiro e o PNZ',
        'texto' => 'Diga o ponto em Centro ou Santo Antônio, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Juazeiro',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'bahia',
            'ancora' => 'Juazeiro e o recorte de Vale do São Francisco',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'pernambuco',
            'cidade' => 'petrolina',
            'ancora' => 'Motorista em petrolina',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'bahia',
            'cidade' => 'salvador',
            'ancora' => 'Motorista em salvador',
        ],
    ],
    'corrente' => [
        [
            'h2' => 'Juazeiro e o primeiro recuo',
            'texto' => 'Juazeiro usa Petrolina (PNZ), em Petrolina. Quem embarca em Centro não está no município da pista. A BR-407 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
        ],
        [
            'h2' => 'Eixos que o pedido cita',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel. Centro não compartilha o recuo de Santo Antônio.',
                ],
                [
                    'h3' => 'Santo Antônio',
                    'texto' => 'Origem frequente para bairro. Informe nome do hotel. Santo Antônio não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Piranga',
                    'texto' => 'Origem frequente para orla do São Francisco. Informe nome do hotel. Piranga não compartilha o recuo de Centro.',
                ],
            ],
        ],
        [
            'h2' => 'Petrolina (PNZ)',
            'texto' => 'Petrolina (PNZ) fica em Petrolina, não em Juazeiro. O trecho sai pela ponte / BR-407. Diga o IATA e o número do voo.',
        ],
    ],
];
