<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Guarulhos',
    'geo' => [
        'lat' => -23.4538,
        'lng' => -46.5333,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Guarulhos',
    'seo' => [
        'title' => 'Motorista executivo em Guarulhos: Centro e GRU',
        'description' => 'Motorista executivo em Guarulhos: Centro, Macedo e Guarulhos (GRU), no próprio município. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Agenda em Guarulhos com motorista — Macedo e Guarulhos',
        'og_description' => 'O motorista combina Centro com Guarulhos (GRU), no próprio município. Informe terminal, voo e ponto de encontro.',
        'og_image_alt' => 'Carro executivo em via de Guarulhos',
    ],
    'kicker' => 'Região Metropolitana de São Paulo · SP',
    'h1' => 'Em Guarulhos, de Centro a Guarulhos (GRU), no próprio município',
    'faq_h2' => 'Dúvidas de quem embarca em Guarulhos',
    'faq' => [
        [
            'pergunta' => 'Em Guarulhos, o GRU fica no próprio município?',
            'resposta' => 'Sim. Em Guarulhos, Guarulhos (GRU) fica no município. Informe o acesso via Dutra / Ayrton Senna.',
        ],
        [
            'pergunta' => 'Em Guarulhos, vocês buscam em Centro?',
            'resposta' => 'Sim, em Guarulhos. Envie terminal, voo e ponto de encontro em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Guarulhos vocês fazem São Paulo?',
            'resposta' => 'Sim, saindo de Guarulhos. São Paulo não é o recorte de Centro; o horário pela Ayrton Senna sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Guarulhos o carro fica entre Centro e Macedo?',
            'resposta' => 'Sim, em Guarulhos. A hora à disposição cobre sede e hotel em Centro e bairro em Macedo.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Guarulhos e o GRU',
        'texto' => 'Diga o ponto em Centro ou Macedo, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Guarulhos',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'sao-paulo',
            'ancora' => 'Guarulhos e o recorte de Região Metropolitana de São Paulo',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'sao-paulo',
            'ancora' => 'Motorista em sao paulo',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'campinas',
            'ancora' => 'Motorista em campinas',
        ],
    ],
    'preambulo' => 'Guarulhos concentra Centro (sede e hotel) e Guarulhos (GRU) no mesmo município. O motorista precisa do ponto de embarque e do GRU no mesmo recado — “me busca em Guarulhos” não define o recuo.',
    'artigos' => [
        [
            'h2' => 'Centro pede protocolo, não pin',
            'texto' => 'Origem frequente para sede e hotel. Informe terminal, voo e ponto de encontro. Centro não compartilha o recuo de Macedo.',
        ],
        [
            'h2' => 'Macedo e Vila Galvão',
            'texto' => 'Macedo pede bairro. Vila Galvão pede residencial. Quando São Paulo entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela Ayrton Senna.',
        ],
        [
            'h2' => 'Guarulhos (GRU)',
            'texto' => 'Guarulhos (GRU) fica em Guarulhos. Acesso: Dutra / Ayrton Senna. Combinamos o voo; a espera no desembarque integra o trecho.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens da ordem do dia em Guarulhos',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe terminal, voo e ponto de encontro. Centro não compartilha o recuo de Macedo.',
            ],
            [
                'h3' => 'Macedo',
                'texto' => 'Origem frequente para bairro. Informe terminal, voo e ponto de encontro. Macedo não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Vila Galvão',
                'texto' => 'Origem frequente para residencial. Informe terminal, voo e ponto de encontro. Vila Galvão não compartilha o recuo de Centro.',
            ],
        ],
    ],
];
