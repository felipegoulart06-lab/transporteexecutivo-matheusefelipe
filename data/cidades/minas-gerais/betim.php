<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Betim',
    'geo' => [
        'lat' => -19.9679,
        'lng' => -44.1982,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Betim',
    'seo' => [
        'title' => 'Motorista executivo em Betim: Alterosas e CNF',
        'description' => 'Motorista executivo em Betim: Alterosas, Centro e Confins (CNF), em Confins. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Embarque em Betim: hotel, Alterosas e CNF',
        'og_description' => 'O motorista combina Alterosas com Confins (CNF), em Confins. Informe nome na lista da Fiat ou da REGAP.',
        'og_image_alt' => 'Carro executivo em via de Betim',
    ],
    'kicker' => 'Região Metropolitana de BH · MG',
    'h1' => 'Betim: entre Alterosas, Centro e o terminal certo',
    'faq_h2' => 'Dúvidas de quem embarca em Betim',
    'faq' => [
        [
            'pergunta' => 'Quem está em Betim embarca no CNF dentro da cidade?',
            'resposta' => 'Não. De Betim o CNF (Confins) fica em Confins. O trecho sai de Alterosas pela BR-381.',
        ],
        [
            'pergunta' => 'Em Betim, vocês buscam em Alterosas?',
            'resposta' => 'Sim, em Betim. Envie nome na lista da Fiat ou da REGAP em Alterosas. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Betim vocês fazem Contagem?',
            'resposta' => 'Sim, saindo de Betim. Contagem não é o recorte de Alterosas; o horário pela BR-262 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Betim o carro fica entre Alterosas e Centro?',
            'resposta' => 'Sim, em Betim. A hora à disposição cobre hotel e bairro em Alterosas e sede em Centro.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Betim e o CNF',
        'texto' => 'Diga o ponto em Alterosas ou Centro, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Betim',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'minas-gerais',
            'ancora' => 'Betim e o recorte de Região Metropolitana de BH',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'minas-gerais',
            'cidade' => 'contagem',
            'ancora' => 'Motorista em contagem',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'minas-gerais',
            'cidade' => 'belo-horizonte',
            'ancora' => 'Motorista em belo horizonte',
        ],
    ],
    'preambulo' => 'Betim usa Confins (CNF), em Confins. Quem embarca em Alterosas não está no município da pista. A BR-381 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'artigos' => [
        [
            'h2' => 'Alterosas pede protocolo, não pin',
            'texto' => 'Origem frequente para hotel e bairro. Informe nome na lista da Fiat ou da REGAP. Alterosas não compartilha o recuo de Centro.',
        ],
        [
            'h2' => 'Centro e Petrovale',
            'texto' => 'Centro pede sede. Petrovale pede REGAP. Quando Contagem entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela BR-262.',
        ],
        [
            'h2' => 'Confins (CNF)',
            'texto' => 'Confins (CNF) fica em Confins, não em Betim. O trecho sai pela BR-381 / Anel. Diga o IATA e o número do voo.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens da ordem do dia em Betim',
        'itens' => [
            [
                'h3' => 'Alterosas',
                'texto' => 'Origem frequente para hotel e bairro. Informe nome na lista da Fiat ou da REGAP. Alterosas não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede. Informe nome na lista da Fiat ou da REGAP. Centro não compartilha o recuo de Alterosas.',
            ],
            [
                'h3' => 'Petrovale',
                'texto' => 'Origem frequente para REGAP. Informe nome na lista da Fiat ou da REGAP. Petrovale não compartilha o recuo de Alterosas.',
            ],
        ],
    ],
];
