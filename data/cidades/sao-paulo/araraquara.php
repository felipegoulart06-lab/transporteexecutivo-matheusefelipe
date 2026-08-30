<?php

declare(strict_types=1);

return [
    'layout' => 'gaucha',
    'cidade_nome' => 'Araraquara',
    'geo' => ['lat' => -21.7845, 'lng' => -48.1786],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Araraquara',
    'seo' => [
        'title' => 'Motorista em Araraquara: Fonte, Centro e o AQA',
        'description' => 'Motorista em Araraquara para o Centro, a Fonte Luminosa e o campus da UNESP. O AQA liga a VCP; RAO vaza quando a malha local não fecha. Orçamento sob consulta.',
        'og_title' => 'Fonte Luminosa, UNESP e o Bartolomeu de Gusmão',
        'og_description' => 'Traslado em Araraquara: hotel no Centro, pauta na Fonte Luminosa e o voo no AQA rumo a Viracopos.',
        'og_image_alt' => 'Sedan executivo na Avenida São Paulo, em Araraquara',
    ],
    'kicker' => 'Centro paulista · SP',
    'h1' => 'Da Fonte Luminosa ao AQA sem trocar de motorista no meio do dia',
    'coluna' => [
        'h2' => 'Araraquara articula Centro, Fonte e saguão — o app articula só o pin',
        'texto' => [
            'O Centro pede logradouro. A Fonte Luminosa junta a praça na Vila Harmonia e o estádio na Vila Ferroviária — dois recuos que o GPS resume num só nome. A UNESP se espalha: Faculdade de Ciências e Letras na Rodovia Araraquara–Jaú, outras unidades na Rua Humaitá. O Aeroporto Estadual Bartolomeu de Gusmão (AQA) fica na Avenida Alberto Santos Dumont, 2880, no município.',
            'A malha do AQA liga em geral a Viracopos (VCP). Quando a conexão não fecha no campo local, o pedido vaza para o Leite Lopes (RAO), em Ribeirão Preto, ou segue de carro até Campinas. São Carlos pela Washington Luís (SP-310) entra como viagem. Hotel no Centro entra só como embarque; a portaria do campus pede bloco e documento.',
        ],
    ],
    'lateral' => [
        'h2' => 'Pontos que o pedido araraquarense mais cita',
        'itens' => [
            [
                'h3' => 'Centro e o recuo da sede',
                'texto' => 'Hotel de embarque e o calçadão. Informe o nome da portaria; o pin “Araraquara” não define a rua.',
            ],
            [
                'h3' => 'Fonte Luminosa e a UNESP',
                'texto' => 'Praça na Vila Harmonia, estádio na Vila Ferroviária, campus na Araraquara–Jaú ou na Humaitá. A lista da portaria entra junto com o horário da banca ou do evento.',
            ],
            [
                'h3' => 'Bartolomeu de Gusmão — AQA',
                'texto' => 'Terminal da cidade, com malha típica rumo a VCP. Combinamos o voo; o motorista permanece no expediente se o retorno já estiver no roteiro. RAO entra quando a pauta pede o saguão de Ribeirão.',
            ],
        ],
    ],
    'faixa' => [
        'h2' => 'Quando a pauta cruza a Washington Luís rumo a São Carlos ou ao RAO',
        'texto' => 'Centro → campus → AQA fecha com um motorista só se a ordem já estiver no recado. São Carlos pela SP-310 e Ribeirão Preto rumo ao RAO entram como viagem, não como segunda corrida urbana. A espera no desembarque do AQA integra o trecho quando o pouso está no itinerário — o passageiro não troca de carro no meio do dia por falta de combinado.',
    ],
    'faq_h2' => 'Fonte Luminosa, campus e AQA — o que costuma faltar',
    'faq' => [
        ['pergunta' => 'O AQA tem voo comercial — e para onde?', 'resposta' => 'O Bartolomeu de Gusmão opera malha regional rumo a Viracopos (VCP). Confirme o voo no pedido. Se a conexão não fecha no AQA, o saguão que vaza é o RAO, em Ribeirão Preto, ou o próprio VCP de carro.'],
        ['pergunta' => 'A Fonte Luminosa é um único endereço?', 'resposta' => 'Não. A praça fica na Vila Harmonia; o estádio, na Vila Ferroviária. Informe qual dos dois. O Centro é outro recuo.'],
        ['pergunta' => 'A UNESP libera o recuo sem bloco na lista?', 'resposta' => 'Quase nunca. Envie a unidade — Rodovia Araraquara–Jaú ou Humaitá —, o visitante e o documento. Sem isso, a portaria do campus não abre.'],
        ['pergunta' => 'São Carlos ou Ribeirão entram no expediente sem trocar de motorista?', 'resposta' => 'Entram, quando o trecho já está no itinerário. A Washington Luís e a malha rumo ao RAO pedem margem; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Fonte Luminosa, campus e AQA com o mesmo motorista',
        'texto' => 'Diga se o embarque é o Centro, a Fonte Luminosa ou a UNESP, e se o voo é no AQA, no VCP ou no RAO. Horário sob consulta.',
        'botao' => 'Pedir motorista em Araraquara',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-carlos', 'ancora' => 'USP, UFSCar e o QSC sem malha regular'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'ribeirao-preto', 'ancora' => 'Centro, Jardim Irajá e o aeroporto RAO'],
    ],
];
