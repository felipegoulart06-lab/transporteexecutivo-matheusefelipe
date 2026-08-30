<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Uberaba',
    'geo' => [
        'lat' => -19.7472,
        'lng' => -47.9381,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Uberaba',
    'seo' => [
        'title' => 'Carro com motorista em Uberaba: Estados Unidos e UBA',
        'description' => 'Carro com motorista em Uberaba para Centro, Estados Unidos e UBA. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Agenda em Uberaba com motorista — Estados Unidos e Mário de Almeida Franco',
        'og_description' => 'O motorista combina Centro com Mário de Almeida Franco (UBA), no próprio município. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Uberaba',
    ],
    'kicker' => 'Triângulo Mineiro · MG',
    'h1' => 'Em Uberaba: do embarque em Centro ao UBA',
    'faq_h2' => 'Dúvidas de quem embarca em Uberaba',
    'faq' => [
        [
            'pergunta' => 'Em Uberaba, o UBA fica no próprio município?',
            'resposta' => 'Sim. Em Uberaba, Mário de Almeida Franco (UBA) fica no município. Informe o acesso via BR-050.',
        ],
        [
            'pergunta' => 'Em Uberaba, vocês buscam em Centro?',
            'resposta' => 'Sim, em Uberaba. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Uberaba vocês fazem Uberlândia?',
            'resposta' => 'Sim, saindo de Uberaba. Uberlândia não é o recorte de Centro; o horário pela BR-262 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Uberaba o carro fica entre Centro e Estados Unidos?',
            'resposta' => 'Sim, em Uberaba. A hora à disposição cobre sede e hotel em Centro e bairro em Estados Unidos.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Uberaba e o UBA',
        'texto' => 'Diga o ponto em Centro ou Estados Unidos, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Uberaba',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'minas-gerais',
            'ancora' => 'Uberaba e o recorte de Triângulo Mineiro',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'minas-gerais',
            'cidade' => 'uberlandia',
            'ancora' => 'Motorista em uberlandia',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'goias',
            'cidade' => 'goiania',
            'ancora' => 'Motorista em goiania',
        ],
    ],
    'lead' => 'Uberaba concentra Centro (sede e hotel) e Mário de Almeida Franco (UBA) no mesmo município. O motorista precisa do ponto de embarque e do UBA no mesmo recado — “me busca em Uberaba” não define o recuo.',
    'contexto' => [
        'h2' => 'Uberaba se mede em BR-050, não em pin de aplicativo',
        'texto' => [
            'Uberaba concentra Centro (sede e hotel) e Mário de Almeida Franco (UBA) no mesmo município. O motorista precisa do ponto de embarque e do UBA no mesmo recado — “me busca em Uberaba” não define o recuo.',
            'Estados Unidos pede bairro. Universitário pede UNIUBE. Quando Uberlândia entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela BR-262.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos de embarque em Uberaba',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel. Centro não compartilha o recuo de Estados Unidos.',
            ],
            [
                'h3' => 'Estados Unidos',
                'texto' => 'Origem frequente para bairro. Informe nome do hotel. Estados Unidos não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Universitário',
                'texto' => 'Origem frequente para UNIUBE. Informe nome do hotel. Universitário não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Parque das Américas',
                'texto' => 'Origem frequente para residencial. Informe nome do hotel. Parque das Américas não compartilha o recuo de Centro.',
            ],
        ],
    ],
    'aeroportos' => [
        'h2' => 'O terminal que a agenda de Uberaba realmente usa',
        'itens' => [
            [
                'h3' => 'Mário de Almeida Franco — UBA',
                'texto' => 'Mário de Almeida Franco (UBA) fica em Uberaba. Acesso: BR-050. Combinamos o voo; a espera no desembarque integra o trecho.',
            ],
            [
                'h3' => 'BR-050 e a vazão para Uberlândia',
                'texto' => 'Uberlândia e Ribeirão Preto aparecem no mesmo pedido de Uberaba. Isso é viagem, não segunda corrida em Centro.',
            ],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que o pedido em Uberaba mais combina',
        'itens' => [
            [
                'titulo' => 'Centro → UBA',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: BR-050.',
            ],
            [
                'titulo' => 'UBA → Estados Unidos',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome do hotel.',
            ],
            [
                'titulo' => 'Centro → Uberlândia',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Estados Unidos; o horário sai sob consulta.',
            ],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na pauta em Uberaba',
        'passos' => [
            [
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do hotel. Autocomplete não resolve dois acessos em Centro.',
            ],
            [
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o UBA ou Uberlândia entra no dia.',
            ],
            [
                'titulo' => 'Confirmação',
                'texto' => 'Em Uberaba, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
