<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Serra',
    'geo' => [
        'lat' => -20.1286,
        'lng' => -40.3074,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Serra',
    'seo' => [
        'title' => 'Motorista executivo em Serra: Laranjeiras e VIX',
        'description' => 'Carro com motorista em Serra para Laranjeiras, Centro da Serra e VIX. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Embarque em Serra: hotel, Laranjeiras e VIX',
        'og_description' => 'O motorista combina Laranjeiras com Eurico de Aguiar Salles (VIX), em Vitória. Informe nome da empresa ou do hotel.',
        'og_image_alt' => 'Carro executivo em via de Serra',
    ],
    'kicker' => 'Grande Vitória · ES',
    'h1' => 'Serra — Laranjeiras de manhã, VIX quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Serra',
    'faq' => [
        [
            'pergunta' => 'Quem está em Serra embarca no VIX dentro da cidade?',
            'resposta' => 'Não. De Serra o VIX (Eurico de Aguiar Salles) fica em Vitória. O trecho sai de Laranjeiras pela BR-101.',
        ],
        [
            'pergunta' => 'Em Serra, vocês buscam em Laranjeiras?',
            'resposta' => 'Sim, em Serra. Envie nome da empresa ou do hotel em Laranjeiras. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Serra vocês fazem Vitória?',
            'resposta' => 'Sim, saindo de Serra. Vitória não é o recorte de Laranjeiras; o horário pela Rodovia do Sol sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Serra o carro fica entre Laranjeiras e Centro da Serra?',
            'resposta' => 'Sim, em Serra. A hora à disposição cobre shopping e hotel em Laranjeiras e sede em Centro da Serra.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Serra e o VIX',
        'texto' => 'Diga o ponto em Laranjeiras ou Centro da Serra, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Serra',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'espirito-santo',
            'ancora' => 'Serra e o recorte de Grande Vitória',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'espirito-santo',
            'cidade' => 'vitoria',
            'ancora' => 'Motorista em vitoria',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'espirito-santo',
            'cidade' => 'vila-velha',
            'ancora' => 'Motorista em vila velha',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'Serra se cruza por BR-101, não em linha reta',
            'texto' => 'Serra usa Eurico de Aguiar Salles (VIX), em Vitória. Quem embarca em Laranjeiras não está no município da pista. A BR-101 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
        ],
        [
            'h2' => 'Três eixos, três recuos',
            'itens' => [
                [
                    'h3' => 'Laranjeiras',
                    'texto' => 'Origem frequente para shopping e hotel. Informe nome da empresa ou do hotel. Laranjeiras não compartilha o recuo de Centro da Serra.',
                ],
                [
                    'h3' => 'Centro da Serra',
                    'texto' => 'Origem frequente para sede. Informe nome da empresa ou do hotel. Centro da Serra não compartilha o recuo de Laranjeiras.',
                ],
                [
                    'h3' => 'Jacaraípe',
                    'texto' => 'Origem frequente para orla. Informe nome da empresa ou do hotel. Jacaraípe não compartilha o recuo de Laranjeiras.',
                ],
            ],
        ],
        [
            'h2' => 'Eurico de Aguiar Salles — VIX',
            'texto' => 'Eurico de Aguiar Salles (VIX) fica em Vitória, não em Serra. O trecho sai pela BR-101. Diga o IATA e o número do voo.',
        ],
    ],
];
