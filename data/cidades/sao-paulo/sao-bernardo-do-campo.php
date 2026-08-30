<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'São Bernardo do Campo',
    'geo' => [
        'lat' => -23.6914,
        'lng' => -46.5646,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em São Bernardo do Campo',
    'seo' => [
        'title' => 'Motorista executivo em São Bernardo do Campo: Centro e CGH',
        'description' => 'Carro com motorista em São Bernardo do Campo para Centro, Rudge Ramos e CGH. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Embarque em São Bernardo do Campo: hotel, Centro e CGH',
        'og_description' => 'O motorista combina Centro com Congonhas (CGH), em São Paulo. Informe nome da empresa ou do hotel.',
        'og_image_alt' => 'Carro executivo em via de São Bernardo do Campo',
    ],
    'kicker' => 'ABC paulista · SP',
    'h1' => 'São Bernardo do Campo: entre Centro, Rudge Ramos e o terminal certo',
    'faq_h2' => 'Dúvidas de quem embarca em São Bernardo do Campo',
    'faq' => [
        [
            'pergunta' => 'Quem está em São Bernardo do Campo embarca no CGH dentro da cidade?',
            'resposta' => 'Não. De São Bernardo do Campo o CGH (Congonhas) fica em São Paulo. O trecho sai de Centro pela Anchieta.',
        ],
        [
            'pergunta' => 'Em São Bernardo do Campo, vocês buscam em Centro?',
            'resposta' => 'Sim, em São Bernardo do Campo. Envie nome da empresa ou do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De São Bernardo do Campo vocês fazem Santo André?',
            'resposta' => 'Sim, saindo de São Bernardo do Campo. Santo André não é o recorte de Centro; o horário pela Imigrantes sai sob consulta.',
        ],
        [
            'pergunta' => 'Em São Bernardo do Campo, CGH e GRU são o mesmo recorte?',
            'resposta' => 'Não, em São Bernardo do Campo. CGH fica em São Paulo; GRU fica em Guarulhos. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em São Bernardo do Campo e o CGH',
        'texto' => 'Diga o ponto em Centro ou Rudge Ramos, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em São Bernardo do Campo',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'sao-paulo',
            'ancora' => 'São Bernardo do Campo e o recorte de ABC paulista',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'sao-paulo',
            'ancora' => 'Motorista em sao paulo',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'santos',
            'ancora' => 'Motorista em santos',
        ],
    ],
    'preambulo' => 'São Bernardo do Campo usa Congonhas (CGH), em São Paulo. Quem embarca em Centro não está no município da pista. A Anchieta é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'artigos' => [
        [
            'h2' => 'Centro pede protocolo, não pin',
            'texto' => 'Origem frequente para sede e hotel. Informe nome da empresa ou do hotel. Centro não compartilha o recuo de Rudge Ramos.',
        ],
        [
            'h2' => 'Rudge Ramos e Assunção',
            'texto' => 'Rudge Ramos pede eixo universitário. Assunção pede bairro. Quando Santo André entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela Imigrantes.',
        ],
        [
            'h2' => 'Congonhas (CGH)',
            'texto' => 'Congonhas (CGH) fica em São Paulo, não em São Bernardo do Campo. O trecho sai pela Anchieta. Diga o IATA e o número do voo.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens da ordem do dia em São Bernardo do Campo',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome da empresa ou do hotel. Centro não compartilha o recuo de Rudge Ramos.',
            ],
            [
                'h3' => 'Rudge Ramos',
                'texto' => 'Origem frequente para eixo universitário. Informe nome da empresa ou do hotel. Rudge Ramos não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Assunção',
                'texto' => 'Origem frequente para bairro. Informe nome da empresa ou do hotel. Assunção não compartilha o recuo de Centro.',
            ],
        ],
    ],
];
