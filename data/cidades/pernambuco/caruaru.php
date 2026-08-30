<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Caruaru',
    'geo' => [
        'lat' => -8.28455,
        'lng' => -35.9699,
    ],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Caruaru',
    'seo' => [
        'title' => 'Carro com motorista em Caruaru: Indianópolis e CAU',
        'description' => 'Motorista executivo em Caruaru: Centro, Indianópolis e Oscar Laranjeira (CAU), no próprio município. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Embarque em Caruaru: hotel, Centro e CAU',
        'og_description' => 'O motorista combina Centro com Oscar Laranjeira (CAU), no próprio município. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Caruaru',
    ],
    'kicker' => 'Agreste pernambucano · PE',
    'h1' => 'Em Caruaru, de Centro a Oscar Laranjeira (CAU), no próprio município',
    'faq_h2' => 'Dúvidas de quem embarca em Caruaru',
    'faq' => [
        [
            'pergunta' => 'Em Caruaru, o CAU fica no próprio município?',
            'resposta' => 'Sim. Em Caruaru, Oscar Laranjeira (CAU) fica no município. Informe o acesso via BR-232.',
        ],
        [
            'pergunta' => 'Em Caruaru, vocês buscam em Centro?',
            'resposta' => 'Sim, em Caruaru. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Caruaru vocês fazem Recife?',
            'resposta' => 'Sim, saindo de Caruaru. Recife não é o recorte de Centro; o horário pela PE-095 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Caruaru, CAU e REC são o mesmo recorte?',
            'resposta' => 'Não, em Caruaru. CAU fica em Caruaru; REC fica em Recife. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Caruaru e o CAU',
        'texto' => 'Diga o ponto em Centro ou Indianópolis, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Caruaru',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'pernambuco',
            'ancora' => 'Caruaru e o recorte de Agreste pernambucano',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'pernambuco',
            'cidade' => 'recife',
            'ancora' => 'Motorista em recife',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'pernambuco',
            'cidade' => 'petrolina',
            'ancora' => 'Motorista em petrolina',
        ],
    ],
    'lead' => 'Caruaru concentra Centro (sede e hotel) e Oscar Laranjeira (CAU) no mesmo município. O motorista precisa do ponto de embarque e do CAU no mesmo recado — “me busca em Caruaru” não define o recuo.',
    'contexto' => [
        'h2' => 'Caruaru se mede em BR-232, não em pin de aplicativo',
        'texto' => [
            'Caruaru concentra Centro (sede e hotel) e Oscar Laranjeira (CAU) no mesmo município. O motorista precisa do ponto de embarque e do CAU no mesmo recado — “me busca em Caruaru” não define o recuo.',
            'Indianópolis pede bairro. Salgado pede residencial. Quando Recife entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela PE-095.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos de embarque em Caruaru',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel. Centro não compartilha o recuo de Indianópolis.',
            ],
            [
                'h3' => 'Indianópolis',
                'texto' => 'Origem frequente para bairro. Informe nome do hotel. Indianópolis não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Salgado',
                'texto' => 'Origem frequente para residencial. Informe nome do hotel. Salgado não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Universitário',
                'texto' => 'Origem frequente para campus. Informe nome do hotel. Universitário não compartilha o recuo de Centro.',
            ],
        ],
    ],
    'aeroportos' => [
        'h2' => 'O terminal que a agenda de Caruaru realmente usa',
        'itens' => [
            [
                'h3' => 'Oscar Laranjeira — CAU',
                'texto' => 'Oscar Laranjeira (CAU) fica em Caruaru. Acesso: BR-232. Combinamos o voo; a espera no desembarque integra o trecho.',
            ],
            [
                'h3' => 'Guararapes Gilberto Freyre — REC',
                'texto' => 'Guararapes Gilberto Freyre (REC) fica em Recife, não em Caruaru. O trecho sai pela BR-232. Diga o IATA e o número do voo.',
            ],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que o pedido em Caruaru mais combina',
        'itens' => [
            [
                'titulo' => 'Centro → CAU',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: BR-232.',
            ],
            [
                'titulo' => 'CAU → Indianópolis',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome do hotel.',
            ],
            [
                'titulo' => 'Centro → Recife',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Indianópolis; o horário sai sob consulta.',
            ],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na pauta em Caruaru',
        'passos' => [
            [
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do hotel. Autocomplete não resolve dois acessos em Centro.',
            ],
            [
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o CAU ou Recife entra no dia.',
            ],
            [
                'titulo' => 'Confirmação',
                'texto' => 'Em Caruaru, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
