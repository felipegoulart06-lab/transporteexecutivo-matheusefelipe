<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Osasco',
    'geo' => [
        'lat' => -23.532,
        'lng' => -46.7916,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Osasco',
    'seo' => [
        'title' => 'Carro com motorista em Osasco: Bela Vista e CGH',
        'description' => 'Motorista executivo em Osasco: Centro, Bela Vista e Congonhas (CGH), em São Paulo. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Traslado em Osasco: Centro e CGH',
        'og_description' => 'O motorista combina Centro com Congonhas (CGH), em São Paulo. Informe nome do prédio.',
        'og_image_alt' => 'Carro executivo em via de Osasco',
    ],
    'kicker' => 'Região Metropolitana de São Paulo · SP',
    'h1' => 'Em Osasco: do embarque em Centro ao CGH',
    'faq_h2' => 'Dúvidas de quem embarca em Osasco',
    'faq' => [
        [
            'pergunta' => 'Quem está em Osasco embarca no CGH dentro da cidade?',
            'resposta' => 'Não. De Osasco o CGH (Congonhas) fica em São Paulo. O trecho sai de Centro pela Castelo Branco.',
        ],
        [
            'pergunta' => 'Em Osasco, vocês buscam em Centro?',
            'resposta' => 'Sim, em Osasco. Envie nome do prédio em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Osasco vocês fazem São Paulo?',
            'resposta' => 'Sim, saindo de Osasco. São Paulo não é o recorte de Centro; o horário pela Anhanguera sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Osasco, CGH e GRU são o mesmo recorte?',
            'resposta' => 'Não, em Osasco. CGH fica em São Paulo; GRU fica em Guarulhos. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Osasco e o CGH',
        'texto' => 'Diga o ponto em Centro ou Bela Vista, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Osasco',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'sao-paulo',
            'ancora' => 'Osasco e o recorte de Região Metropolitana de São Paulo',
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
            'cidade' => 'guarulhos',
            'ancora' => 'Motorista em guarulhos',
        ],
    ],
    'lead' => 'Osasco usa Congonhas (CGH), em São Paulo. Quem embarca em Centro não está no município da pista. A Castelo Branco é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'contexto' => [
        'h2' => 'Osasco se mede em Castelo Branco, não em pin de aplicativo',
        'texto' => [
            'Osasco usa Congonhas (CGH), em São Paulo. Quem embarca em Centro não está no município da pista. A Castelo Branco é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
            'Bela Vista pede bairro. Presidente Altino pede industrial. Quando São Paulo entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela Anhanguera.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos de embarque em Osasco',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome do prédio. Centro não compartilha o recuo de Bela Vista.',
            ],
            [
                'h3' => 'Bela Vista',
                'texto' => 'Origem frequente para bairro. Informe nome do prédio. Bela Vista não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Presidente Altino',
                'texto' => 'Origem frequente para industrial. Informe nome do prédio. Presidente Altino não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Km 18',
                'texto' => 'Origem frequente para eixo Castelo. Informe nome do prédio. Km 18 não compartilha o recuo de Centro.',
            ],
        ],
    ],
    'aeroportos' => [
        'h2' => 'O terminal que a agenda de Osasco realmente usa',
        'itens' => [
            [
                'h3' => 'Congonhas — CGH',
                'texto' => 'Congonhas (CGH) fica em São Paulo, não em Osasco. O trecho sai pela Castelo Branco. Diga o IATA e o número do voo.',
            ],
            [
                'h3' => 'Guarulhos — GRU',
                'texto' => 'Guarulhos (GRU) fica em Guarulhos, não em Osasco. O trecho sai pela Marginal Tietê. Diga o IATA e o número do voo.',
            ],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que o pedido em Osasco mais combina',
        'itens' => [
            [
                'titulo' => 'Centro → CGH',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: Castelo Branco.',
            ],
            [
                'titulo' => 'CGH → Bela Vista',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome do prédio.',
            ],
            [
                'titulo' => 'Centro → São Paulo',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Bela Vista; o horário sai sob consulta.',
            ],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na pauta em Osasco',
        'passos' => [
            [
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do prédio. Autocomplete não resolve dois acessos em Centro.',
            ],
            [
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o CGH ou São Paulo entra no dia.',
            ],
            [
                'titulo' => 'Confirmação',
                'texto' => 'Em Osasco, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
