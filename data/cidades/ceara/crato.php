<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Crato',
    'geo' => [
        'lat' => -7.2312,
        'lng' => -39.4097,
    ],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Crato',
    'seo' => [
        'title' => 'Carro com motorista em Crato: Pinto Madeira e JDO',
        'description' => 'Motorista executivo em Crato: Centro, Pinto Madeira e Orlando Bezerra (JDO), em Juazeiro do Norte. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Embarque em Crato: hotel, Centro e JDO',
        'og_description' => 'O motorista combina Centro com Orlando Bezerra (JDO), em Juazeiro do Norte. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Crato',
    ],
    'kicker' => 'Cariri cearense · CE',
    'h1' => 'Crato — Centro de manhã, JDO quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Crato',
    'faq' => [
        [
            'pergunta' => 'Quem está em Crato embarca no JDO dentro da cidade?',
            'resposta' => 'Não. De Crato o JDO (Orlando Bezerra) fica em Juazeiro do Norte. O trecho sai de Centro pela CE-060.',
        ],
        [
            'pergunta' => 'Em Crato, vocês buscam em Centro?',
            'resposta' => 'Sim, em Crato. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Crato vocês fazem Juazeiro do Norte?',
            'resposta' => 'Sim, saindo de Crato. Juazeiro do Norte não é o recorte de Centro; o horário pela BR-122 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Crato o carro fica entre Centro e Pinto Madeira?',
            'resposta' => 'Sim, em Crato. A hora à disposição cobre sede e hotel em Centro e bairro em Pinto Madeira.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Crato e o JDO',
        'texto' => 'Diga o ponto em Centro ou Pinto Madeira, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Crato',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'ceara',
            'ancora' => 'Crato e o recorte de Cariri cearense',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'ceara',
            'cidade' => 'juazeiro-do-norte',
            'ancora' => 'Motorista em juazeiro do norte',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'ceara',
            'cidade' => 'fortaleza',
            'ancora' => 'Motorista em fortaleza',
        ],
    ],
    'olho' => 'Centro e Orlando Bezerra (JDO), em Juazeiro do Norte não cabem no mesmo aceite tardio.',
    'capitulos' => [
        [
            'h2' => 'Centro e o recuo da pauta',
            'texto' => 'Crato usa Orlando Bezerra (JDO), em Juazeiro do Norte. Quem embarca em Centro não está no município da pista. A CE-060 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
        ],
        [
            'h2' => 'Pinto Madeira, Sossego e a ordem do dia',
            'itens' => [
                [
                    'h3' => 'Pinto Madeira',
                    'texto' => 'Origem frequente para bairro. Informe nome do hotel. Pinto Madeira não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Sossego',
                    'texto' => 'Origem frequente para residencial. Informe nome do hotel. Sossego não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Universitário',
                    'texto' => 'Origem frequente para URCA. Informe nome do hotel. Universitário não compartilha o recuo de Centro.',
                ],
            ],
        ],
        [
            'h2' => 'Orlando Bezerra — JDO',
            'texto' => 'Orlando Bezerra (JDO) fica em Juazeiro do Norte, não em Crato. O trecho sai pela CE-060. Diga o IATA e o número do voo.',
        ],
    ],
    'passos' => [
        'h2' => 'Como solicitar em Crato',
        'itens' => [
            [
                'num' => '01',
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do hotel. Autocomplete não resolve dois acessos em Centro.',
            ],
            [
                'num' => '02',
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o JDO ou Juazeiro do Norte entra no dia.',
            ],
            [
                'num' => '03',
                'titulo' => 'Confirmação',
                'texto' => 'Em Crato, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
