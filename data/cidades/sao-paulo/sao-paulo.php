<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'São Paulo',
    'geo' => [
        'lat' => -23.5505,
        'lng' => -46.6333,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em São Paulo',
    'seo' => [
        'title' => 'Motorista executivo em São Paulo: Faria Lima e CGH',
        'description' => 'Carro com motorista em São Paulo para Faria Lima e Itaim, Berrini e Vila Olímpia e CGH. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Traslado em São Paulo: Faria Lima e Itaim e CGH',
        'og_description' => 'O motorista combina Faria Lima e Itaim com Congonhas (CGH), no próprio município. Informe nome do prédio e da garagem.',
        'og_image_alt' => 'Carro executivo em via de São Paulo',
    ],
    'kicker' => 'Capital paulista · SP',
    'h1' => 'Em São Paulo: do embarque em Faria Lima e Itaim ao CGH',
    'faq_h2' => 'Dúvidas de quem embarca em São Paulo',
    'faq' => [
        [
            'pergunta' => 'Em São Paulo, o CGH fica no próprio município?',
            'resposta' => 'Sim. Em São Paulo, Congonhas (CGH) fica no município. Informe o acesso via Washington Luís.',
        ],
        [
            'pergunta' => 'Em São Paulo, vocês buscam em Faria Lima e Itaim?',
            'resposta' => 'Sim, em São Paulo. Envie nome do prédio e da garagem em Faria Lima e Itaim. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De São Paulo vocês fazem Guarulhos?',
            'resposta' => 'Sim, saindo de São Paulo. Guarulhos não é o recorte de Faria Lima e Itaim; o horário pela Marginal Tietê sai sob consulta.',
        ],
        [
            'pergunta' => 'Em São Paulo, CGH e GRU são o mesmo recorte?',
            'resposta' => 'Não, em São Paulo. CGH fica em São Paulo; GRU fica em Guarulhos. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em São Paulo e o CGH',
        'texto' => 'Diga o ponto em Faria Lima e Itaim ou Berrini e Vila Olímpia, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em São Paulo',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'sao-paulo',
            'ancora' => 'São Paulo e o recorte de Capital paulista',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-de-janeiro',
            'cidade' => 'rio-de-janeiro',
            'ancora' => 'Motorista em rio de janeiro',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'minas-gerais',
            'cidade' => 'belo-horizonte',
            'ancora' => 'Motorista em belo horizonte',
        ],
    ],
    'lead' => 'São Paulo concentra Faria Lima e Itaim (torres e fundos) e Congonhas (CGH) no mesmo município. O motorista precisa do ponto de embarque e do CGH no mesmo recado — “me busca em São Paulo” não define o recuo.',
    'contexto' => [
        'h2' => 'São Paulo se mede em Marginal Pinheiros, não em pin de aplicativo',
        'texto' => [
            'São Paulo concentra Faria Lima e Itaim (torres e fundos) e Congonhas (CGH) no mesmo município. O motorista precisa do ponto de embarque e do CGH no mesmo recado — “me busca em São Paulo” não define o recuo.',
            'Berrini e Vila Olímpia pede board e catraca. Paulista e Jardins pede hotel e consultório. Quando Guarulhos entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela Marginal Tietê.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos de embarque em São Paulo',
        'itens' => [
            [
                'h3' => 'Faria Lima e Itaim',
                'texto' => 'Origem frequente para torres e fundos. Informe nome do prédio e da garagem. Faria Lima e Itaim não compartilha o recuo de Berrini e Vila Olímpia.',
            ],
            [
                'h3' => 'Berrini e Vila Olímpia',
                'texto' => 'Origem frequente para board e catraca. Informe nome do prédio e da garagem. Berrini e Vila Olímpia não compartilha o recuo de Faria Lima e Itaim.',
            ],
            [
                'h3' => 'Paulista e Jardins',
                'texto' => 'Origem frequente para hotel e consultório. Informe nome do prédio e da garagem. Paulista e Jardins não compartilha o recuo de Faria Lima e Itaim.',
            ],
            [
                'h3' => 'Pinheiros',
                'texto' => 'Origem frequente para estúdio e retorno. Informe nome do prédio e da garagem. Pinheiros não compartilha o recuo de Faria Lima e Itaim.',
            ],
        ],
    ],
    'aeroportos' => [
        'h2' => 'O terminal que a agenda de São Paulo realmente usa',
        'itens' => [
            [
                'h3' => 'Congonhas — CGH',
                'texto' => 'Congonhas (CGH) fica em São Paulo. Acesso: Washington Luís. Combinamos o voo; a espera no desembarque integra o trecho.',
            ],
            [
                'h3' => 'Guarulhos — GRU',
                'texto' => 'Guarulhos (GRU) fica em Guarulhos, não em São Paulo. O trecho sai pela Dutra. Diga o IATA e o número do voo.',
            ],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que o pedido em São Paulo mais combina',
        'itens' => [
            [
                'titulo' => 'Faria Lima e Itaim → CGH',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: Washington Luís.',
            ],
            [
                'titulo' => 'CGH → Berrini e Vila Olímpia',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome do prédio e da garagem.',
            ],
            [
                'titulo' => 'Faria Lima e Itaim → Guarulhos',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Berrini e Vila Olímpia; o horário sai sob consulta.',
            ],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na pauta em São Paulo',
        'passos' => [
            [
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do prédio e da garagem. Autocomplete não resolve dois acessos em Faria Lima e Itaim.',
            ],
            [
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o CGH ou Guarulhos entra no dia.',
            ],
            [
                'titulo' => 'Confirmação',
                'texto' => 'Em São Paulo, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
