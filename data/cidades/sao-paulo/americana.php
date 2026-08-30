<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Americana',
    'geo' => [
        'lat' => -22.7392,
        'lng' => -47.3314,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Americana',
    'seo' => [
        'title' => 'Motorista executivo em Americana: Centro e VCP',
        'description' => 'Motorista executivo em Americana: Centro, Praia Azul e Viracopos (VCP), em Campinas. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Traslado em Americana: Centro e VCP',
        'og_description' => 'O motorista combina Centro com Viracopos (VCP), em Campinas. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Americana',
    ],
    'kicker' => 'Região Metropolitana de Campinas · SP',
    'h1' => 'Em Americana, de Centro a Viracopos (VCP), em Campinas',
    'faq_h2' => 'Dúvidas de quem embarca em Americana',
    'faq' => [
        [
            'pergunta' => 'Quem está em Americana embarca no VCP dentro da cidade?',
            'resposta' => 'Não. De Americana o VCP (Viracopos) fica em Campinas. O trecho sai de Centro pela Anhanguera.',
        ],
        [
            'pergunta' => 'Em Americana, vocês buscam em Centro?',
            'resposta' => 'Sim, em Americana. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Americana vocês fazem Santa Bárbara d\'Oeste?',
            'resposta' => 'Sim, saindo de Americana. Santa Bárbara d\'Oeste não é o recorte de Centro; o horário pela SP-304 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Americana o carro fica entre Centro e Praia Azul?',
            'resposta' => 'Sim, em Americana. A hora à disposição cobre sede e hotel em Centro e orla da represa em Praia Azul.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Americana e o VCP',
        'texto' => 'Diga o ponto em Centro ou Praia Azul, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Americana',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'sao-paulo',
            'ancora' => 'Americana e o recorte de Região Metropolitana de Campinas',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'campinas',
            'ancora' => 'Motorista em campinas',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'limeira',
            'ancora' => 'Motorista em limeira',
        ],
    ],
    'lead' => 'Americana usa Viracopos (VCP), em Campinas. Quem embarca em Centro não está no município da pista. A Anhanguera é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'contexto' => [
        'h2' => 'Americana se mede em Anhanguera, não em pin de aplicativo',
        'texto' => [
            'Americana usa Viracopos (VCP), em Campinas. Quem embarca em Centro não está no município da pista. A Anhanguera é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
            'Praia Azul pede orla da represa. Carioba pede industrial. Quando Santa Bárbara d\'Oeste entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela SP-304.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos de embarque em Americana',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel. Centro não compartilha o recuo de Praia Azul.',
            ],
            [
                'h3' => 'Praia Azul',
                'texto' => 'Origem frequente para orla da represa. Informe nome do hotel. Praia Azul não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Carioba',
                'texto' => 'Origem frequente para industrial. Informe nome do hotel. Carioba não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Vila Medon',
                'texto' => 'Origem frequente para bairro. Informe nome do hotel. Vila Medon não compartilha o recuo de Centro.',
            ],
        ],
    ],
    'aeroportos' => [
        'h2' => 'O terminal que a agenda de Americana realmente usa',
        'itens' => [
            [
                'h3' => 'Viracopos — VCP',
                'texto' => 'Viracopos (VCP) fica em Campinas, não em Americana. O trecho sai pela Anhanguera. Diga o IATA e o número do voo.',
            ],
            [
                'h3' => 'Anhanguera e a vazão para Santa Bárbara d\'Oeste',
                'texto' => 'Santa Bárbara d\'Oeste e Campinas aparecem no mesmo pedido de Americana. Isso é viagem, não segunda corrida em Centro.',
            ],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que o pedido em Americana mais combina',
        'itens' => [
            [
                'titulo' => 'Centro → VCP',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: Anhanguera.',
            ],
            [
                'titulo' => 'VCP → Praia Azul',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome do hotel.',
            ],
            [
                'titulo' => 'Centro → Santa Bárbara d\'Oeste',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Praia Azul; o horário sai sob consulta.',
            ],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na pauta em Americana',
        'passos' => [
            [
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do hotel. Autocomplete não resolve dois acessos em Centro.',
            ],
            [
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o VCP ou Santa Bárbara d\'Oeste entra no dia.',
            ],
            [
                'titulo' => 'Confirmação',
                'texto' => 'Em Americana, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
