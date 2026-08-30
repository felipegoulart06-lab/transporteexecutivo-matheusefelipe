<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Barueri',
    'geo' => [
        'lat' => -23.5106,
        'lng' => -46.8761,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Barueri',
    'seo' => [
        'title' => 'Motorista executivo em Barueri: Alphaville e GRU',
        'description' => 'Motorista executivo em Barueri: Alphaville, Tamboré e Guarulhos (GRU), em Guarulhos. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Traslado em Barueri: Alphaville e GRU',
        'og_description' => 'O motorista combina Alphaville com Guarulhos (GRU), em Guarulhos. Informe nome da torre e da portaria.',
        'og_image_alt' => 'Carro executivo em via de Barueri',
    ],
    'kicker' => 'Região Metropolitana de São Paulo · SP',
    'h1' => 'Barueri — Alphaville de manhã, GRU quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Barueri',
    'faq' => [
        [
            'pergunta' => 'Quem está em Barueri embarca no GRU dentro da cidade?',
            'resposta' => 'Não. De Barueri o GRU (Guarulhos) fica em Guarulhos. O trecho sai de Alphaville pela Castelo Branco.',
        ],
        [
            'pergunta' => 'Em Barueri, vocês buscam em Alphaville?',
            'resposta' => 'Sim, em Barueri. Envie nome da torre e da portaria em Alphaville. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Barueri vocês fazem Santana de Parnaíba?',
            'resposta' => 'Sim, saindo de Barueri. Santana de Parnaíba não é o recorte de Alphaville; o horário pela Anhanguera sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Barueri, GRU e CGH são o mesmo recorte?',
            'resposta' => 'Não, em Barueri. GRU fica em Guarulhos; CGH fica em São Paulo. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Barueri e o GRU',
        'texto' => 'Diga o ponto em Alphaville ou Tamboré, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Barueri',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'sao-paulo',
            'ancora' => 'Barueri e o recorte de Região Metropolitana de São Paulo',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'osasco',
            'ancora' => 'Motorista em osasco',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'sao-paulo',
            'ancora' => 'Motorista em sao paulo',
        ],
    ],
    'lead' => 'Barueri usa Guarulhos (GRU), em Guarulhos. Quem embarca em Alphaville não está no município da pista. A Castelo Branco é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'contexto' => [
        'h2' => 'Barueri se mede em Castelo Branco, não em pin de aplicativo',
        'texto' => [
            'Barueri usa Guarulhos (GRU), em Guarulhos. Quem embarca em Alphaville não está no município da pista. A Castelo Branco é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
            'Tamboré pede empresarial. Centro pede sede municipal. Quando Santana de Parnaíba entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela Anhanguera.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos de embarque em Barueri',
        'itens' => [
            [
                'h3' => 'Alphaville',
                'texto' => 'Origem frequente para torres e hotel. Informe nome da torre e da portaria. Alphaville não compartilha o recuo de Tamboré.',
            ],
            [
                'h3' => 'Tamboré',
                'texto' => 'Origem frequente para empresarial. Informe nome da torre e da portaria. Tamboré não compartilha o recuo de Alphaville.',
            ],
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede municipal. Informe nome da torre e da portaria. Centro não compartilha o recuo de Alphaville.',
            ],
            [
                'h3' => 'Jardim Califórnia',
                'texto' => 'Origem frequente para bairro. Informe nome da torre e da portaria. Jardim Califórnia não compartilha o recuo de Alphaville.',
            ],
        ],
    ],
    'aeroportos' => [
        'h2' => 'O terminal que a agenda de Barueri realmente usa',
        'itens' => [
            [
                'h3' => 'Guarulhos — GRU',
                'texto' => 'Guarulhos (GRU) fica em Guarulhos, não em Barueri. O trecho sai pela Castelo / Dutra. Diga o IATA e o número do voo.',
            ],
            [
                'h3' => 'Congonhas — CGH',
                'texto' => 'Congonhas (CGH) fica em São Paulo, não em Barueri. O trecho sai pela Castelo Branco. Diga o IATA e o número do voo.',
            ],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que o pedido em Barueri mais combina',
        'itens' => [
            [
                'titulo' => 'Alphaville → GRU',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: Castelo / Dutra.',
            ],
            [
                'titulo' => 'GRU → Tamboré',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome da torre e da portaria.',
            ],
            [
                'titulo' => 'Alphaville → Santana de Parnaíba',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Tamboré; o horário sai sob consulta.',
            ],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na pauta em Barueri',
        'passos' => [
            [
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome da torre e da portaria. Autocomplete não resolve dois acessos em Alphaville.',
            ],
            [
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o GRU ou Santana de Parnaíba entra no dia.',
            ],
            [
                'titulo' => 'Confirmação',
                'texto' => 'Em Barueri, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
