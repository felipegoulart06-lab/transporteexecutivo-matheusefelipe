<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Ipatinga',
    'geo' => [
        'lat' => -19.4703,
        'lng' => -42.5476,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Ipatinga',
    'seo' => [
        'title' => 'Motorista executivo em Ipatinga: Centro e IPN',
        'description' => 'Motorista executivo em Ipatinga: Centro, Cariru e Usiminas (IPN), em Santana do Paraíso. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Embarque em Ipatinga: hotel, Centro e IPN',
        'og_description' => 'O motorista combina Centro com Usiminas (IPN), em Santana do Paraíso. Informe nome na lista da portaria.',
        'og_image_alt' => 'Carro executivo em via de Ipatinga',
    ],
    'kicker' => 'Vale do Aço · MG',
    'h1' => 'Ipatinga — Centro de manhã, IPN quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Ipatinga',
    'faq' => [
        [
            'pergunta' => 'Quem está em Ipatinga embarca no IPN dentro da cidade?',
            'resposta' => 'Não. De Ipatinga o IPN (Usiminas) fica em Santana do Paraíso. O trecho sai de Centro pela BR-381.',
        ],
        [
            'pergunta' => 'Em Ipatinga, vocês buscam em Centro?',
            'resposta' => 'Sim, em Ipatinga. Envie nome na lista da portaria em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Ipatinga vocês fazem Coronel Fabriciano?',
            'resposta' => 'Sim, saindo de Ipatinga. Coronel Fabriciano não é o recorte de Centro; o horário pela Avenida Pedro Linhares Gomes sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Ipatinga, IPN e CNF são o mesmo recorte?',
            'resposta' => 'Não, em Ipatinga. IPN fica em Santana do Paraíso; CNF fica em Confins. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Ipatinga e o IPN',
        'texto' => 'Diga o ponto em Centro ou Cariru, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Ipatinga',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'minas-gerais',
            'ancora' => 'Ipatinga e o recorte de Vale do Aço',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'minas-gerais',
            'cidade' => 'belo-horizonte',
            'ancora' => 'Motorista em belo horizonte',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'minas-gerais',
            'cidade' => 'contagem',
            'ancora' => 'Motorista em contagem',
        ],
    ],
    'olho' => 'Centro e Usiminas (IPN), em Santana do Paraíso não cabem no mesmo aceite tardio.',
    'capitulos' => [
        [
            'h2' => 'Centro e o recuo da pauta',
            'texto' => 'Ipatinga usa Usiminas (IPN), em Santana do Paraíso. Quem embarca em Centro não está no município da pista. A BR-381 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
        ],
        [
            'h2' => 'Cariru, Cidade Nobre e a ordem do dia',
            'itens' => [
                [
                    'h3' => 'Cariru',
                    'texto' => 'Origem frequente para bairro. Informe nome na lista da portaria. Cariru não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Cidade Nobre',
                    'texto' => 'Origem frequente para residencial. Informe nome na lista da portaria. Cidade Nobre não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Horto',
                    'texto' => 'Origem frequente para planta e acesso. Informe nome na lista da portaria. Horto não compartilha o recuo de Centro.',
                ],
            ],
        ],
        [
            'h2' => 'Usiminas — IPN',
            'texto' => 'Usiminas (IPN) fica em Santana do Paraíso, não em Ipatinga. O trecho sai pela BR-381. Diga o IATA e o número do voo.',
        ],
    ],
    'passos' => [
        'h2' => 'Como solicitar em Ipatinga',
        'itens' => [
            [
                'num' => '01',
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome na lista da portaria. Autocomplete não resolve dois acessos em Centro.',
            ],
            [
                'num' => '02',
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o IPN ou Coronel Fabriciano entra no dia.',
            ],
            [
                'num' => '03',
                'titulo' => 'Confirmação',
                'texto' => 'Em Ipatinga, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
