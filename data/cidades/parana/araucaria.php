<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Araucária',
    'geo' => [
        'lat' => -25.5859,
        'lng' => -49.4048,
    ],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Araucária',
    'seo' => [
        'title' => 'Motorista executivo em Araucária: Centro e CWB',
        'description' => 'Motorista executivo em Araucária: Centro, Estação e Afonso Pena (CWB), em São José dos Pinhais. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Traslado em Araucária: Centro e CWB',
        'og_description' => 'O motorista combina Centro com Afonso Pena (CWB), em São José dos Pinhais. Informe nome na lista da refinaria.',
        'og_image_alt' => 'Carro executivo em via de Araucária',
    ],
    'kicker' => 'Região Metropolitana de Curitiba · PR',
    'h1' => 'Araucária — Centro de manhã, CWB quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Araucária',
    'faq' => [
        [
            'pergunta' => 'Quem está em Araucária embarca no CWB dentro da cidade?',
            'resposta' => 'Não. De Araucária o CWB (Afonso Pena) fica em São José dos Pinhais. O trecho sai de Centro pela BR-476.',
        ],
        [
            'pergunta' => 'Em Araucária, vocês buscam em Centro?',
            'resposta' => 'Sim, em Araucária. Envie nome na lista da refinaria em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Araucária vocês fazem Curitiba?',
            'resposta' => 'Sim, saindo de Araucária. Curitiba não é o recorte de Centro; o horário pela Contorno Sul sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Araucária o carro fica entre Centro e Estação?',
            'resposta' => 'Sim, em Araucária. A hora à disposição cobre sede em Centro e bairro em Estação.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Araucária e o CWB',
        'texto' => 'Diga o ponto em Centro ou Estação, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Araucária',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'parana',
            'ancora' => 'Araucária e o recorte de Região Metropolitana de Curitiba',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'parana',
            'cidade' => 'curitiba',
            'ancora' => 'Motorista em curitiba',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'parana',
            'cidade' => 'sao-jose-dos-pinhais',
            'ancora' => 'Motorista em sao jose dos pinhais',
        ],
    ],
    'preambulo' => 'Araucária usa Afonso Pena (CWB), em São José dos Pinhais. Quem embarca em Centro não está no município da pista. A BR-476 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'artigos' => [
        [
            'h2' => 'Centro pede protocolo, não pin',
            'texto' => 'Origem frequente para sede. Informe nome na lista da refinaria. Centro não compartilha o recuo de Estação.',
        ],
        [
            'h2' => 'Estação e CIC vizinho',
            'texto' => 'Estação pede bairro. CIC vizinho pede eixo Curitiba. Quando Curitiba entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela Contorno Sul.',
        ],
        [
            'h2' => 'Afonso Pena (CWB)',
            'texto' => 'Afonso Pena (CWB) fica em São José dos Pinhais, não em Araucária. O trecho sai pela BR-476 / Contorno. Diga o IATA e o número do voo.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens da ordem do dia em Araucária',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede. Informe nome na lista da refinaria. Centro não compartilha o recuo de Estação.',
            ],
            [
                'h3' => 'Estação',
                'texto' => 'Origem frequente para bairro. Informe nome na lista da refinaria. Estação não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'CIC vizinho',
                'texto' => 'Origem frequente para eixo Curitiba. Informe nome na lista da refinaria. CIC vizinho não compartilha o recuo de Centro.',
            ],
        ],
    ],
];
