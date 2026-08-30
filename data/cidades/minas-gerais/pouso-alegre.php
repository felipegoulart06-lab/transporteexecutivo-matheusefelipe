<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Pouso Alegre',
    'geo' => [
        'lat' => -22.2298,
        'lng' => -45.9363,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Pouso Alegre',
    'seo' => [
        'title' => 'Motorista executivo em Pouso Alegre: Centro e VCP',
        'description' => 'Carro com motorista em Pouso Alegre para Centro, São Geraldo e VCP. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Embarque em Pouso Alegre: hotel, Centro e VCP',
        'og_description' => 'O motorista combina Centro com Viracopos (VCP), em Campinas. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Pouso Alegre',
    ],
    'kicker' => 'Sul de Minas · MG',
    'h1' => 'Pouso Alegre — Centro de manhã, VCP quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Pouso Alegre',
    'faq' => [
        [
            'pergunta' => 'Quem está em Pouso Alegre embarca no VCP dentro da cidade?',
            'resposta' => 'Não. De Pouso Alegre o VCP (Viracopos) fica em Campinas. O trecho sai de Centro pela BR-459.',
        ],
        [
            'pergunta' => 'Em Pouso Alegre, vocês buscam em Centro?',
            'resposta' => 'Sim, em Pouso Alegre. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Pouso Alegre vocês fazem Itajubá?',
            'resposta' => 'Sim, saindo de Pouso Alegre. Itajubá não é o recorte de Centro; o horário pela MG-290 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Pouso Alegre, VCP e CGH são o mesmo recorte?',
            'resposta' => 'Não, em Pouso Alegre. VCP fica em Campinas; CGH fica em São Paulo. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Pouso Alegre e o VCP',
        'texto' => 'Diga o ponto em Centro ou São Geraldo, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Pouso Alegre',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'minas-gerais',
            'ancora' => 'Pouso Alegre e o recorte de Sul de Minas',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'minas-gerais',
            'cidade' => 'pocos-de-caldas',
            'ancora' => 'Motorista em pocos de caldas',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'campinas',
            'ancora' => 'Motorista em campinas',
        ],
    ],
    'lead' => 'Pouso Alegre usa Viracopos (VCP), em Campinas. Quem embarca em Centro não está no município da pista. A BR-459 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'contexto' => [
        'h2' => 'Pouso Alegre se mede em BR-459, não em pin de aplicativo',
        'texto' => [
            'Pouso Alegre usa Viracopos (VCP), em Campinas. Quem embarca em Centro não está no município da pista. A BR-459 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
            'São Geraldo pede bairro. Fátima pede residencial. Quando Itajubá entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela MG-290.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos de embarque em Pouso Alegre',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel. Centro não compartilha o recuo de São Geraldo.',
            ],
            [
                'h3' => 'São Geraldo',
                'texto' => 'Origem frequente para bairro. Informe nome do hotel. São Geraldo não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Fátima',
                'texto' => 'Origem frequente para residencial. Informe nome do hotel. Fátima não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Universitário',
                'texto' => 'Origem frequente para campus. Informe nome do hotel. Universitário não compartilha o recuo de Centro.',
            ],
        ],
    ],
    'aeroportos' => [
        'h2' => 'O terminal que a agenda de Pouso Alegre realmente usa',
        'itens' => [
            [
                'h3' => 'Viracopos — VCP',
                'texto' => 'Viracopos (VCP) fica em Campinas, não em Pouso Alegre. O trecho sai pela BR-459. Diga o IATA e o número do voo.',
            ],
            [
                'h3' => 'Congonhas — CGH',
                'texto' => 'Congonhas (CGH) fica em São Paulo, não em Pouso Alegre. O trecho sai pela BR-459. Diga o IATA e o número do voo.',
            ],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que o pedido em Pouso Alegre mais combina',
        'itens' => [
            [
                'titulo' => 'Centro → VCP',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: BR-459.',
            ],
            [
                'titulo' => 'VCP → São Geraldo',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome do hotel.',
            ],
            [
                'titulo' => 'Centro → Itajubá',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de São Geraldo; o horário sai sob consulta.',
            ],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na pauta em Pouso Alegre',
        'passos' => [
            [
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do hotel. Autocomplete não resolve dois acessos em Centro.',
            ],
            [
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o VCP ou Itajubá entra no dia.',
            ],
            [
                'titulo' => 'Confirmação',
                'texto' => 'Em Pouso Alegre, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
