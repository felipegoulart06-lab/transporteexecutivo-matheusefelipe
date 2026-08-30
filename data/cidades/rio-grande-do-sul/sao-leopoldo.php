<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'São Leopoldo',
    'geo' => [
        'lat' => -29.7604,
        'lng' => -51.1472,
    ],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em São Leopoldo',
    'seo' => [
        'title' => 'Motorista executivo em São Leopoldo: Centro e POA',
        'description' => 'Motorista executivo em São Leopoldo: Centro, São João e Salgado Filho (POA), em Porto Alegre. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Embarque em São Leopoldo: hotel, Centro e POA',
        'og_description' => 'O motorista combina Centro com Salgado Filho (POA), em Porto Alegre. Informe nome do campus ou do hotel.',
        'og_image_alt' => 'Carro executivo em via de São Leopoldo',
    ],
    'kicker' => 'Vale dos Sinos · RS',
    'h1' => 'Em São Leopoldo: do embarque em Centro ao POA',
    'faq_h2' => 'Dúvidas de quem embarca em São Leopoldo',
    'faq' => [
        [
            'pergunta' => 'Quem está em São Leopoldo embarca no POA dentro da cidade?',
            'resposta' => 'Não. De São Leopoldo o POA (Salgado Filho) fica em Porto Alegre. O trecho sai de Centro pela BR-116.',
        ],
        [
            'pergunta' => 'Em São Leopoldo, vocês buscam em Centro?',
            'resposta' => 'Sim, em São Leopoldo. Envie nome do campus ou do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De São Leopoldo vocês fazem Novo Hamburgo?',
            'resposta' => 'Sim, saindo de São Leopoldo. Novo Hamburgo não é o recorte de Centro; o horário pela Avenida Unisinos sai sob consulta.',
        ],
        [
            'pergunta' => 'Em São Leopoldo o carro fica entre Centro e São João?',
            'resposta' => 'Sim, em São Leopoldo. A hora à disposição cobre sede e Unisinos em Centro e bairro em São João.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em São Leopoldo e o POA',
        'texto' => 'Diga o ponto em Centro ou São João, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em São Leopoldo',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'rio-grande-do-sul',
            'ancora' => 'São Leopoldo e o recorte de Vale dos Sinos',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-grande-do-sul',
            'cidade' => 'novo-hamburgo',
            'ancora' => 'Motorista em novo hamburgo',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-grande-do-sul',
            'cidade' => 'porto-alegre',
            'ancora' => 'Motorista em porto alegre',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'São Leopoldo se cruza por BR-116, não em linha reta',
            'texto' => 'São Leopoldo usa Salgado Filho (POA), em Porto Alegre. Quem embarca em Centro não está no município da pista. A BR-116 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
        ],
        [
            'h2' => 'Três eixos, três recuos',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede e Unisinos. Informe nome do campus ou do hotel. Centro não compartilha o recuo de São João.',
                ],
                [
                    'h3' => 'São João',
                    'texto' => 'Origem frequente para bairro. Informe nome do campus ou do hotel. São João não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Scharlau',
                    'texto' => 'Origem frequente para residencial. Informe nome do campus ou do hotel. Scharlau não compartilha o recuo de Centro.',
                ],
            ],
        ],
        [
            'h2' => 'Salgado Filho — POA',
            'texto' => 'Salgado Filho (POA) fica em Porto Alegre, não em São Leopoldo. O trecho sai pela BR-116. Diga o IATA e o número do voo.',
        ],
    ],
];
