<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'São Gonçalo',
    'geo' => [
        'lat' => -22.8268,
        'lng' => -43.0634,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em São Gonçalo',
    'seo' => [
        'title' => 'Motorista executivo em São Gonçalo: Centro e SDU',
        'description' => 'Motorista executivo em São Gonçalo: Centro, Alcântara e Santos Dumont (SDU), em Rio de Janeiro. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Embarque em São Gonçalo: hotel, Centro e SDU',
        'og_description' => 'O motorista combina Centro com Santos Dumont (SDU), em Rio de Janeiro. Informe nome da empresa ou do hotel.',
        'og_image_alt' => 'Carro executivo em via de São Gonçalo',
    ],
    'kicker' => 'Região Metropolitana do Rio · RJ',
    'h1' => 'São Gonçalo: entre Centro, Alcântara e o terminal certo',
    'faq_h2' => 'Dúvidas de quem embarca em São Gonçalo',
    'faq' => [
        [
            'pergunta' => 'Quem está em São Gonçalo embarca no SDU dentro da cidade?',
            'resposta' => 'Não. De São Gonçalo o SDU (Santos Dumont) fica em Rio de Janeiro. O trecho sai de Centro pela RJ-104.',
        ],
        [
            'pergunta' => 'Em São Gonçalo, vocês buscam em Centro?',
            'resposta' => 'Sim, em São Gonçalo. Envie nome da empresa ou do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De São Gonçalo vocês fazem Niterói?',
            'resposta' => 'Sim, saindo de São Gonçalo. Niterói não é o recorte de Centro; o horário pela Niterói–Manilha sai sob consulta.',
        ],
        [
            'pergunta' => 'Em São Gonçalo, SDU e GIG são o mesmo recorte?',
            'resposta' => 'Não, em São Gonçalo. Os dois ficam em Rio de Janeiro, mas o acesso muda: SDU pela Niterói / ponte e GIG pela RJ-104. Diga o IATA.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em São Gonçalo e o SDU',
        'texto' => 'Diga o ponto em Centro ou Alcântara, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em São Gonçalo',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'rio-de-janeiro',
            'ancora' => 'São Gonçalo e o recorte de Região Metropolitana do Rio',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-de-janeiro',
            'cidade' => 'niteroi',
            'ancora' => 'Motorista em niteroi',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-de-janeiro',
            'cidade' => 'rio-de-janeiro',
            'ancora' => 'Motorista em rio de janeiro',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'São Gonçalo se cruza por RJ-104, não em linha reta',
            'texto' => 'São Gonçalo usa Santos Dumont (SDU), em Rio de Janeiro. Quem embarca em Centro não está no município da pista. A RJ-104 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
        ],
        [
            'h2' => 'Três eixos, três recuos',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede. Informe nome da empresa ou do hotel. Centro não compartilha o recuo de Alcântara.',
                ],
                [
                    'h3' => 'Alcântara',
                    'texto' => 'Origem frequente para eixo comercial. Informe nome da empresa ou do hotel. Alcântara não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Boaçu',
                    'texto' => 'Origem frequente para bairro. Informe nome da empresa ou do hotel. Boaçu não compartilha o recuo de Centro.',
                ],
            ],
        ],
        [
            'h2' => 'Santos Dumont — SDU',
            'texto' => 'Santos Dumont (SDU) fica em Rio de Janeiro, não em São Gonçalo. O trecho sai pela Niterói / ponte. Diga o IATA e o número do voo.',
        ],
    ],
];
