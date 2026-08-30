<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'Praia Grande',
    'geo' => [
        'lat' => -24.0059,
        'lng' => -46.4028,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Praia Grande',
    'seo' => [
        'title' => 'Motorista executivo em Praia Grande: Boqueirão e CGH',
        'description' => 'Carro com motorista em Praia Grande para Boqueirão, Canto do Forte e CGH. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Traslado em Praia Grande: Boqueirão e CGH',
        'og_description' => 'O motorista combina Boqueirão com Congonhas (CGH), em São Paulo. Informe nome do hotel na orla.',
        'og_image_alt' => 'Carro executivo em via de Praia Grande',
    ],
    'kicker' => 'Baixada Santista · SP',
    'h1' => 'Em Praia Grande, de Boqueirão a Congonhas (CGH), em São Paulo',
    'faq_h2' => 'Dúvidas de quem embarca em Praia Grande',
    'faq' => [
        [
            'pergunta' => 'Quem está em Praia Grande embarca no CGH dentro da cidade?',
            'resposta' => 'Não. De Praia Grande o CGH (Congonhas) fica em São Paulo. O trecho sai de Boqueirão pela Imigrantes.',
        ],
        [
            'pergunta' => 'Em Praia Grande, vocês buscam em Boqueirão?',
            'resposta' => 'Sim, em Praia Grande. Envie nome do hotel na orla em Boqueirão. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Praia Grande vocês fazem Santos?',
            'resposta' => 'Sim, saindo de Praia Grande. Santos não é o recorte de Boqueirão; o horário pela SP-055 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Praia Grande, CGH e GRU são o mesmo recorte?',
            'resposta' => 'Não, em Praia Grande. CGH fica em São Paulo; GRU fica em Guarulhos. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Praia Grande e o CGH',
        'texto' => 'Diga o ponto em Boqueirão ou Canto do Forte, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Praia Grande',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'sao-paulo',
            'ancora' => 'Praia Grande e o recorte de Baixada Santista',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'santos',
            'ancora' => 'Motorista em santos',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'guaruja',
            'ancora' => 'Motorista em guaruja',
        ],
    ],
    'epigrafe' => 'Boqueirão não é o mesmo recuo de Canto do Forte. O motorista segura o acesso; o passageiro segura o horário.',
    'abertura' => [
        'h2' => 'Praia Grande: origem na orla, destino no terminal certo',
        'texto' => [
            'Praia Grande usa Congonhas (CGH), em São Paulo. Quem embarca em Boqueirão não está no município da pista. A Imigrantes é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
            'Canto do Forte pede orla. Aviação pede bairro. Quando Santos entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela SP-055.',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'Boqueirão: o relógio do embarque',
            'texto' => 'Boqueirão concentra hotel na orla. Informe nome do hotel na orla.',
        ],
        [
            'h2' => 'Canto do Forte e Aviação',
            'texto' => 'Canto do Forte pede orla. Aviação pede bairro. A ordem muda o intervalo mais que o mapa.',
        ],
        [
            'h2' => 'Congonhas (CGH), em São Paulo',
            'texto' => 'Congonhas (CGH) fica em São Paulo, não em Praia Grande. O trecho sai pela Imigrantes. Diga o IATA e o número do voo.',
        ],
    ],
    'aeroportos' => [
        'h2' => 'Terminal e vazão a partir de Praia Grande',
        'itens' => [
            [
                'h3' => 'Congonhas — CGH',
                'texto' => 'Congonhas (CGH) fica em São Paulo, não em Praia Grande. O trecho sai pela Imigrantes. Diga o IATA e o número do voo.',
            ],
            [
                'h3' => 'Guarulhos — GRU',
                'texto' => 'Guarulhos (GRU) fica em Guarulhos, não em Praia Grande. O trecho sai pela Anchieta. Diga o IATA e o número do voo.',
            ],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque em Praia Grande',
        'lista' => [
            'Hotel, prédio ou empresa com nome — “em Boqueirão” não basta.',
            'Qual terminal: CGH em São Paulo ou GRU em Guarulhos.',
            'Se Santos entra depois, a ordem muda o recorte.',
        ],
    ],
];
