<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'Santos',
    'geo' => [
        'lat' => -23.9608,
        'lng' => -46.3336,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Santos',
    'seo' => [
        'title' => 'Carro com motorista em Santos: Ponta da Praia e CGH',
        'description' => 'Carro com motorista em Santos para Gonzaga, Ponta da Praia e CGH. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Traslado em Santos: Gonzaga e CGH',
        'og_description' => 'O motorista combina Gonzaga com Congonhas (CGH), em São Paulo. Informe nome do hotel ou do cais.',
        'og_image_alt' => 'Carro executivo em via de Santos',
    ],
    'kicker' => 'Baixada Santista · SP',
    'h1' => 'Santos — Gonzaga de manhã, CGH quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Santos',
    'faq' => [
        [
            'pergunta' => 'Quem está em Santos embarca no CGH dentro da cidade?',
            'resposta' => 'Não. De Santos o CGH (Congonhas) fica em São Paulo. O trecho sai de Gonzaga pela Imigrantes.',
        ],
        [
            'pergunta' => 'Em Santos, vocês buscam em Gonzaga?',
            'resposta' => 'Sim, em Santos. Envie nome do hotel ou do cais em Gonzaga. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Santos vocês fazem Guarujá?',
            'resposta' => 'Sim, saindo de Santos. Guarujá não é o recorte de Gonzaga; o horário pela Anchieta sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Santos, CGH e GRU são o mesmo recorte?',
            'resposta' => 'Não, em Santos. CGH fica em São Paulo; GRU fica em Guarulhos. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Santos e o CGH',
        'texto' => 'Diga o ponto em Gonzaga ou Ponta da Praia, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Santos',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'sao-paulo',
            'ancora' => 'Santos e o recorte de Baixada Santista',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'sao-paulo',
            'ancora' => 'Motorista em sao paulo',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-de-janeiro',
            'cidade' => 'rio-de-janeiro',
            'ancora' => 'Motorista em rio de janeiro',
        ],
    ],
    'epigrafe' => 'Gonzaga não é o mesmo recuo de Ponta da Praia. O motorista segura o acesso; o passageiro segura o horário.',
    'abertura' => [
        'h2' => 'Santos: origem na orla, destino no terminal certo',
        'texto' => [
            'Santos usa Congonhas (CGH), em São Paulo. Quem embarca em Gonzaga não está no município da pista. A Imigrantes é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
            'Ponta da Praia pede porto e canal. Centro pede pauta institucional. Quando Guarujá entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela Anchieta.',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'Gonzaga: o relógio do embarque',
            'texto' => 'Gonzaga concentra hotel na orla. Informe nome do hotel ou do cais.',
        ],
        [
            'h2' => 'Ponta da Praia e Centro',
            'texto' => 'Ponta da Praia pede porto e canal. Centro pede pauta institucional. A ordem muda o intervalo mais que o mapa.',
        ],
        [
            'h2' => 'Congonhas (CGH), em São Paulo',
            'texto' => 'Congonhas (CGH) fica em São Paulo, não em Santos. O trecho sai pela Imigrantes. Diga o IATA e o número do voo.',
        ],
    ],
    'aeroportos' => [
        'h2' => 'Terminal e vazão a partir de Santos',
        'itens' => [
            [
                'h3' => 'Congonhas — CGH',
                'texto' => 'Congonhas (CGH) fica em São Paulo, não em Santos. O trecho sai pela Imigrantes. Diga o IATA e o número do voo.',
            ],
            [
                'h3' => 'Guarulhos — GRU',
                'texto' => 'Guarulhos (GRU) fica em Guarulhos, não em Santos. O trecho sai pela Anchieta / Dutra. Diga o IATA e o número do voo.',
            ],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque em Santos',
        'lista' => [
            'Hotel, prédio ou empresa com nome — “em Gonzaga” não basta.',
            'Qual terminal: CGH em São Paulo ou GRU em Guarulhos.',
            'Se Guarujá entra depois, a ordem muda o recorte.',
        ],
    ],
];
