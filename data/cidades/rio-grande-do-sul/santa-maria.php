<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Santa Maria',
    'geo' => [
        'lat' => -29.6868,
        'lng' => -53.8149,
    ],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Santa Maria',
    'seo' => [
        'title' => 'Motorista executivo em Santa Maria: Centro e RIA',
        'description' => 'Motorista executivo em Santa Maria: Centro, Camobi e Santa Maria (RIA), no próprio município. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Agenda em Santa Maria com motorista — Camobi e Santa Maria',
        'og_description' => 'O motorista combina Centro com Santa Maria (RIA), no próprio município. Informe nome do hotel ou do campus.',
        'og_image_alt' => 'Carro executivo em via de Santa Maria',
    ],
    'kicker' => 'Centro do RS · RS',
    'h1' => 'Santa Maria — Centro de manhã, RIA quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Santa Maria',
    'faq' => [
        [
            'pergunta' => 'Em Santa Maria, o RIA fica no próprio município?',
            'resposta' => 'Sim. Em Santa Maria, Santa Maria (RIA) fica no município. Informe o acesso via BR-287.',
        ],
        [
            'pergunta' => 'Em Santa Maria, vocês buscam em Centro?',
            'resposta' => 'Sim, em Santa Maria. Envie nome do hotel ou do campus em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Santa Maria vocês fazem Porto Alegre?',
            'resposta' => 'Sim, saindo de Santa Maria. Porto Alegre não é o recorte de Centro; o horário pela BR-158 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Santa Maria o carro fica entre Centro e Camobi?',
            'resposta' => 'Sim, em Santa Maria. A hora à disposição cobre sede e hotel em Centro e UFSM em Camobi.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Santa Maria e o RIA',
        'texto' => 'Diga o ponto em Centro ou Camobi, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Santa Maria',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'rio-grande-do-sul',
            'ancora' => 'Santa Maria e o recorte de Centro do RS',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-grande-do-sul',
            'cidade' => 'porto-alegre',
            'ancora' => 'Motorista em porto alegre',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-grande-do-sul',
            'cidade' => 'pelotas',
            'ancora' => 'Motorista em pelotas',
        ],
    ],
    'lead' => 'Santa Maria concentra Centro (sede e hotel) e Santa Maria (RIA) no mesmo município. O motorista precisa do ponto de embarque e do RIA no mesmo recado — “me busca em Santa Maria” não define o recuo.',
    'contexto' => [
        'h2' => 'Santa Maria se mede em BR-287, não em pin de aplicativo',
        'texto' => [
            'Santa Maria concentra Centro (sede e hotel) e Santa Maria (RIA) no mesmo município. O motorista precisa do ponto de embarque e do RIA no mesmo recado — “me busca em Santa Maria” não define o recuo.',
            'Camobi pede UFSM. Nossa Senhora de Lourdes pede bairro. Quando Porto Alegre entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela BR-158.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos de embarque em Santa Maria',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel ou do campus. Centro não compartilha o recuo de Camobi.',
            ],
            [
                'h3' => 'Camobi',
                'texto' => 'Origem frequente para UFSM. Informe nome do hotel ou do campus. Camobi não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Nossa Senhora de Lourdes',
                'texto' => 'Origem frequente para bairro. Informe nome do hotel ou do campus. Nossa Senhora de Lourdes não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Nonoai',
                'texto' => 'Origem frequente para residencial. Informe nome do hotel ou do campus. Nonoai não compartilha o recuo de Centro.',
            ],
        ],
    ],
    'aeroportos' => [
        'h2' => 'O terminal que a agenda de Santa Maria realmente usa',
        'itens' => [
            [
                'h3' => 'Santa Maria — RIA',
                'texto' => 'Santa Maria (RIA) fica em Santa Maria. Acesso: BR-287. Combinamos o voo; a espera no desembarque integra o trecho.',
            ],
            [
                'h3' => 'BR-287 e a vazão para Porto Alegre',
                'texto' => 'Porto Alegre e Cruz Alta aparecem no mesmo pedido de Santa Maria. Isso é viagem, não segunda corrida em Centro.',
            ],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que o pedido em Santa Maria mais combina',
        'itens' => [
            [
                'titulo' => 'Centro → RIA',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: BR-287.',
            ],
            [
                'titulo' => 'RIA → Camobi',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome do hotel ou do campus.',
            ],
            [
                'titulo' => 'Centro → Porto Alegre',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Camobi; o horário sai sob consulta.',
            ],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na pauta em Santa Maria',
        'passos' => [
            [
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do hotel ou do campus. Autocomplete não resolve dois acessos em Centro.',
            ],
            [
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o RIA ou Porto Alegre entra no dia.',
            ],
            [
                'titulo' => 'Confirmação',
                'texto' => 'Em Santa Maria, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
