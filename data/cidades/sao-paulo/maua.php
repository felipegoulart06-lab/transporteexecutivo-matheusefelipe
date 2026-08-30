<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Mauá',
    'geo' => [
        'lat' => -23.6677,
        'lng' => -46.4613,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Mauá',
    'seo' => [
        'title' => 'Carro com motorista em Mauá: Vila Bocaina e CGH',
        'description' => 'Motorista executivo em Mauá: Centro, Vila Bocaina e Congonhas (CGH), em São Paulo. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Agenda em Mauá com motorista — Vila Bocaina e Congonhas',
        'og_description' => 'O motorista combina Centro com Congonhas (CGH), em São Paulo. Informe nome da empresa.',
        'og_image_alt' => 'Carro executivo em via de Mauá',
    ],
    'kicker' => 'ABC paulista · SP',
    'h1' => 'Mauá — Centro de manhã, CGH quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Mauá',
    'faq' => [
        [
            'pergunta' => 'Quem está em Mauá embarca no CGH dentro da cidade?',
            'resposta' => 'Não. De Mauá o CGH (Congonhas) fica em São Paulo. O trecho sai de Centro pela Anchieta.',
        ],
        [
            'pergunta' => 'Em Mauá, vocês buscam em Centro?',
            'resposta' => 'Sim, em Mauá. Envie nome da empresa em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Mauá vocês fazem Santo André?',
            'resposta' => 'Sim, saindo de Mauá. Santo André não é o recorte de Centro; o horário pela Avenida Barão de Mauá sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Mauá, CGH e GRU são o mesmo recorte?',
            'resposta' => 'Não, em Mauá. CGH fica em São Paulo; GRU fica em Guarulhos. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Mauá e o CGH',
        'texto' => 'Diga o ponto em Centro ou Vila Bocaina, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Mauá',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'sao-paulo',
            'ancora' => 'Mauá e o recorte de ABC paulista',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'santo-andre',
            'ancora' => 'Motorista em santo andre',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'sao-paulo',
            'ancora' => 'Motorista em sao paulo',
        ],
    ],
    'preambulo' => 'Mauá usa Congonhas (CGH), em São Paulo. Quem embarca em Centro não está no município da pista. A Anchieta é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'artigos' => [
        [
            'h2' => 'Centro pede protocolo, não pin',
            'texto' => 'Origem frequente para sede. Informe nome da empresa. Centro não compartilha o recuo de Vila Bocaina.',
        ],
        [
            'h2' => 'Vila Bocaina e Sertãozinho',
            'texto' => 'Vila Bocaina pede bairro. Sertãozinho pede industrial. Quando Santo André entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela Avenida Barão de Mauá.',
        ],
        [
            'h2' => 'Congonhas (CGH)',
            'texto' => 'Congonhas (CGH) fica em São Paulo, não em Mauá. O trecho sai pela Anchieta. Diga o IATA e o número do voo.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens da ordem do dia em Mauá',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede. Informe nome da empresa. Centro não compartilha o recuo de Vila Bocaina.',
            ],
            [
                'h3' => 'Vila Bocaina',
                'texto' => 'Origem frequente para bairro. Informe nome da empresa. Vila Bocaina não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Sertãozinho',
                'texto' => 'Origem frequente para industrial. Informe nome da empresa. Sertãozinho não compartilha o recuo de Centro.',
            ],
        ],
    ],
];
