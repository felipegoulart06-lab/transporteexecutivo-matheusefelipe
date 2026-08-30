<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Belo Horizonte',
    'geo' => [
        'lat' => -19.9167,
        'lng' => -43.9345,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Belo Horizonte',
    'seo' => [
        'title' => 'Motorista executivo em Belo Horizonte: Savassi e CNF',
        'description' => 'Carro com motorista em Belo Horizonte para Savassi, Lourdes e CNF. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Traslado em Belo Horizonte: Savassi e CNF',
        'og_description' => 'O motorista combina Savassi com Confins (CNF), em Confins. Informe nome do prédio e da rua.',
        'og_image_alt' => 'Carro executivo em via de Belo Horizonte',
    ],
    'kicker' => 'Capital mineira · MG',
    'h1' => 'Belo Horizonte: entre Savassi, Lourdes e o terminal certo',
    'faq_h2' => 'Dúvidas de quem embarca em Belo Horizonte',
    'faq' => [
        [
            'pergunta' => 'Quem está em Belo Horizonte embarca no CNF dentro da cidade?',
            'resposta' => 'Não. De Belo Horizonte o CNF (Confins) fica em Confins. O trecho sai de Savassi pela MG-010.',
        ],
        [
            'pergunta' => 'Em Belo Horizonte, vocês buscam em Savassi?',
            'resposta' => 'Sim, em Belo Horizonte. Envie nome do prédio e da rua em Savassi. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Belo Horizonte vocês fazem Contagem?',
            'resposta' => 'Sim, saindo de Belo Horizonte. Contagem não é o recorte de Savassi; o horário pela Anel Rodoviário sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Belo Horizonte, CNF e PLU são o mesmo recorte?',
            'resposta' => 'Não, em Belo Horizonte. CNF fica em Confins; PLU fica em Belo Horizonte. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Belo Horizonte e o CNF',
        'texto' => 'Diga o ponto em Savassi ou Lourdes, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Belo Horizonte',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'minas-gerais',
            'ancora' => 'Belo Horizonte e o recorte de Capital mineira',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'sao-paulo',
            'ancora' => 'Motorista em sao paulo',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-de-janeiro',
            'cidade' => 'rio-de-janeiro',
            'ancora' => 'Motorista em rio de janeiro',
        ],
    ],
    'olho' => 'Savassi e Confins (CNF), em Confins não cabem no mesmo aceite tardio.',
    'capitulos' => [
        [
            'h2' => 'Savassi e o recuo da pauta',
            'texto' => 'Belo Horizonte usa Confins (CNF), em Confins. Quem embarca em Savassi não está no município da pista. A MG-010 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
        ],
        [
            'h2' => 'Lourdes, Centro e a ordem do dia',
            'itens' => [
                [
                    'h3' => 'Lourdes',
                    'texto' => 'Origem frequente para pauta jurídica. Informe nome do prédio e da rua. Lourdes não compartilha o recuo de Savassi.',
                ],
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede institucional. Informe nome do prédio e da rua. Centro não compartilha o recuo de Savassi.',
                ],
                [
                    'h3' => 'Pampulha',
                    'texto' => 'Origem frequente para campus e orla da lagoa. Informe nome do prédio e da rua. Pampulha não compartilha o recuo de Savassi.',
                ],
            ],
        ],
        [
            'h2' => 'Confins — CNF',
            'texto' => 'Confins (CNF) fica em Confins, não em Belo Horizonte. O trecho sai pela MG-010. Diga o IATA e o número do voo.',
        ],
    ],
    'passos' => [
        'h2' => 'Como solicitar em Belo Horizonte',
        'itens' => [
            [
                'num' => '01',
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do prédio e da rua. Autocomplete não resolve dois acessos em Savassi.',
            ],
            [
                'num' => '02',
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o CNF ou Contagem entra no dia.',
            ],
            [
                'num' => '03',
                'titulo' => 'Confirmação',
                'texto' => 'Em Belo Horizonte, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
