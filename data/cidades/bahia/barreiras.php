<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Barreiras',
    'geo' => [
        'lat' => -12.1527,
        'lng' => -44.9902,
    ],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Barreiras',
    'seo' => [
        'title' => 'Motorista executivo em Barreiras: Centro e BRA',
        'description' => 'Carro com motorista em Barreiras para Centro, Sandra Regina e BRA. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Embarque em Barreiras: hotel, Centro e BRA',
        'og_description' => 'O motorista combina Centro com Barreiras (BRA), no próprio município. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Barreiras',
    ],
    'kicker' => 'Oeste baiano · BA',
    'h1' => 'Em Barreiras, de Centro a Barreiras (BRA), no próprio município',
    'faq_h2' => 'Dúvidas de quem embarca em Barreiras',
    'faq' => [
        [
            'pergunta' => 'Em Barreiras, o BRA fica no próprio município?',
            'resposta' => 'Sim. Em Barreiras, Barreiras (BRA) fica no município. Informe o acesso via BR-242.',
        ],
        [
            'pergunta' => 'Em Barreiras, vocês buscam em Centro?',
            'resposta' => 'Sim, em Barreiras. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Barreiras vocês fazem Luís Eduardo Magalhães?',
            'resposta' => 'Sim, saindo de Barreiras. Luís Eduardo Magalhães não é o recorte de Centro; o horário pela BR-020 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Barreiras, BRA e BSB são o mesmo recorte?',
            'resposta' => 'Não, em Barreiras. BRA fica em Barreiras; BSB fica em Brasília. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Barreiras e o BRA',
        'texto' => 'Diga o ponto em Centro ou Sandra Regina, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Barreiras',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'bahia',
            'ancora' => 'Barreiras e o recorte de Oeste baiano',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'bahia',
            'cidade' => 'vitoria-da-conquista',
            'ancora' => 'Motorista em vitoria da conquista',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'bahia',
            'cidade' => 'salvador',
            'ancora' => 'Motorista em salvador',
        ],
    ],
    'lead' => 'Barreiras concentra Centro (sede e hotel) e Barreiras (BRA) no mesmo município. O motorista precisa do ponto de embarque e do BRA no mesmo recado — “me busca em Barreiras” não define o recuo.',
    'contexto' => [
        'h2' => 'Barreiras se mede em BR-242, não em pin de aplicativo',
        'texto' => [
            'Barreiras concentra Centro (sede e hotel) e Barreiras (BRA) no mesmo município. O motorista precisa do ponto de embarque e do BRA no mesmo recado — “me busca em Barreiras” não define o recuo.',
            'Sandra Regina pede bairro. Renato Gonçalves pede residencial. Quando Luís Eduardo Magalhães entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela BR-020.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos de embarque em Barreiras',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel. Centro não compartilha o recuo de Sandra Regina.',
            ],
            [
                'h3' => 'Sandra Regina',
                'texto' => 'Origem frequente para bairro. Informe nome do hotel. Sandra Regina não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Renato Gonçalves',
                'texto' => 'Origem frequente para residencial. Informe nome do hotel. Renato Gonçalves não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Distrito Industrial',
                'texto' => 'Origem frequente para agronegócio. Informe nome do hotel. Distrito Industrial não compartilha o recuo de Centro.',
            ],
        ],
    ],
    'aeroportos' => [
        'h2' => 'O terminal que a agenda de Barreiras realmente usa',
        'itens' => [
            [
                'h3' => 'Barreiras — BRA',
                'texto' => 'Barreiras (BRA) fica em Barreiras. Acesso: BR-242. Combinamos o voo; a espera no desembarque integra o trecho.',
            ],
            [
                'h3' => 'Juscelino Kubitschek — BSB',
                'texto' => 'Juscelino Kubitschek (BSB) fica em Brasília, não em Barreiras. O trecho sai pela BR-020. Diga o IATA e o número do voo.',
            ],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que o pedido em Barreiras mais combina',
        'itens' => [
            [
                'titulo' => 'Centro → BRA',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: BR-242.',
            ],
            [
                'titulo' => 'BRA → Sandra Regina',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome do hotel.',
            ],
            [
                'titulo' => 'Centro → Luís Eduardo Magalhães',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Sandra Regina; o horário sai sob consulta.',
            ],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na pauta em Barreiras',
        'passos' => [
            [
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do hotel. Autocomplete não resolve dois acessos em Centro.',
            ],
            [
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o BRA ou Luís Eduardo Magalhães entra no dia.',
            ],
            [
                'titulo' => 'Confirmação',
                'texto' => 'Em Barreiras, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
