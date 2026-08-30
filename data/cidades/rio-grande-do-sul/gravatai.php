<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Gravataí',
    'geo' => [
        'lat' => -29.944,
        'lng' => -50.9919,
    ],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Gravataí',
    'seo' => [
        'title' => 'Motorista executivo em Gravataí: Centro e POA',
        'description' => 'Motorista executivo em Gravataí: Centro, Neópolis e Salgado Filho (POA), em Porto Alegre. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Traslado em Gravataí: Centro e POA',
        'og_description' => 'O motorista combina Centro com Salgado Filho (POA), em Porto Alegre. Informe nome da empresa ou do hotel.',
        'og_image_alt' => 'Carro executivo em via de Gravataí',
    ],
    'kicker' => 'Região Metropolitana de Porto Alegre · RS',
    'h1' => 'Em Gravataí, de Centro a Salgado Filho (POA), em Porto Alegre',
    'faq_h2' => 'Dúvidas de quem embarca em Gravataí',
    'faq' => [
        [
            'pergunta' => 'Quem está em Gravataí embarca no POA dentro da cidade?',
            'resposta' => 'Não. De Gravataí o POA (Salgado Filho) fica em Porto Alegre. O trecho sai de Centro pela RS-118.',
        ],
        [
            'pergunta' => 'Em Gravataí, vocês buscam em Centro?',
            'resposta' => 'Sim, em Gravataí. Envie nome da empresa ou do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Gravataí vocês fazem Cachoeirinha?',
            'resposta' => 'Sim, saindo de Gravataí. Cachoeirinha não é o recorte de Centro; o horário pela BR-290 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Gravataí o carro fica entre Centro e Neópolis?',
            'resposta' => 'Sim, em Gravataí. A hora à disposição cobre sede em Centro e bairro em Neópolis.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Gravataí e o POA',
        'texto' => 'Diga o ponto em Centro ou Neópolis, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Gravataí',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'rio-grande-do-sul',
            'ancora' => 'Gravataí e o recorte de Região Metropolitana de Porto Alegre',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-grande-do-sul',
            'cidade' => 'porto-alegre',
            'ancora' => 'Motorista em porto alegre',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-grande-do-sul',
            'cidade' => 'canoas',
            'ancora' => 'Motorista em canoas',
        ],
    ],
    'intro' => 'Gravataí usa Salgado Filho (POA), em Porto Alegre. Quem embarca em Centro não está no município da pista. A RS-118 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Gravataí não é pegar um carro',
            'texto' => 'Gravataí usa Salgado Filho (POA), em Porto Alegre. Quem embarca em Centro não está no município da pista. A RS-118 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
        ],
        [
            'h2' => 'Quadrantes que mais geram embarque',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede. Informe nome da empresa ou do hotel. Centro não compartilha o recuo de Neópolis.',
                ],
                [
                    'h3' => 'Neópolis',
                    'texto' => 'Origem frequente para bairro. Informe nome da empresa ou do hotel. Neópolis não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Barnabé',
                    'texto' => 'Origem frequente para industrial. Informe nome da empresa ou do hotel. Barnabé não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Passo das Pedras',
                    'texto' => 'Origem frequente para residencial. Informe nome da empresa ou do hotel. Passo das Pedras não compartilha o recuo de Centro.',
                ],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Três combinações que a pauta de Gravataí repete',
        'itens' => [
            [
                'titulo' => 'Centro → POA',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: RS-118.',
            ],
            [
                'titulo' => 'POA → Neópolis',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome da empresa ou do hotel.',
            ],
            [
                'titulo' => 'Centro → Cachoeirinha',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Neópolis; o horário sai sob consulta.',
            ],
        ],
    ],
];
