<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'Guarujá',
    'geo' => [
        'lat' => -23.9931,
        'lng' => -46.2564,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Guarujá',
    'seo' => [
        'title' => 'Motorista executivo em Guarujá: Pitangueiras e CGH',
        'description' => 'Motorista executivo em Guarujá: Pitangueiras, Enseada e Congonhas (CGH), em São Paulo. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Embarque em Guarujá: hotel, Pitangueiras e CGH',
        'og_description' => 'O motorista combina Pitangueiras com Congonhas (CGH), em São Paulo. Informe nome do hotel na orla.',
        'og_image_alt' => 'Carro executivo em via de Guarujá',
    ],
    'kicker' => 'Baixada Santista · SP',
    'h1' => 'Em Guarujá: do embarque em Pitangueiras ao CGH',
    'faq_h2' => 'Dúvidas de quem embarca em Guarujá',
    'faq' => [
        [
            'pergunta' => 'Quem está em Guarujá embarca no CGH dentro da cidade?',
            'resposta' => 'Não. De Guarujá o CGH (Congonhas) fica em São Paulo. O trecho sai de Pitangueiras pela ponte Pedro de Moraes Alves.',
        ],
        [
            'pergunta' => 'Em Guarujá, vocês buscam em Pitangueiras?',
            'resposta' => 'Sim, em Guarujá. Envie nome do hotel na orla em Pitangueiras. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Guarujá vocês fazem Santos?',
            'resposta' => 'Sim, saindo de Guarujá. Santos não é o recorte de Pitangueiras; o horário pela SP-055 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Guarujá, CGH e GRU são o mesmo recorte?',
            'resposta' => 'Não, em Guarujá. CGH fica em São Paulo; GRU fica em Guarulhos. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Guarujá e o CGH',
        'texto' => 'Diga o ponto em Pitangueiras ou Enseada, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Guarujá',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'sao-paulo',
            'ancora' => 'Guarujá e o recorte de Baixada Santista',
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
            'cidade' => 'sao-paulo',
            'ancora' => 'Motorista em sao paulo',
        ],
    ],
    'epigrafe' => 'Pitangueiras não é o mesmo recuo de Enseada. O motorista segura o acesso; o passageiro segura o horário.',
    'abertura' => [
        'h2' => 'Guarujá: origem na orla, destino no terminal certo',
        'texto' => [
            'Guarujá usa Congonhas (CGH), em São Paulo. Quem embarca em Pitangueiras não está no município da pista. A ponte Pedro de Moraes Alves é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
            'Enseada pede orla. Astúrias pede bairro. Quando Santos entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela SP-055.',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'Pitangueiras: o relógio do embarque',
            'texto' => 'Pitangueiras concentra hotel na orla. Informe nome do hotel na orla.',
        ],
        [
            'h2' => 'Enseada e Astúrias',
            'texto' => 'Enseada pede orla. Astúrias pede bairro. A ordem muda o intervalo mais que o mapa.',
        ],
        [
            'h2' => 'Congonhas (CGH), em São Paulo',
            'texto' => 'Congonhas (CGH) fica em São Paulo, não em Guarujá. O trecho sai pela Imigrantes / ponte. Diga o IATA e o número do voo.',
        ],
    ],
    'aeroportos' => [
        'h2' => 'Terminal e vazão a partir de Guarujá',
        'itens' => [
            [
                'h3' => 'Congonhas — CGH',
                'texto' => 'Congonhas (CGH) fica em São Paulo, não em Guarujá. O trecho sai pela Imigrantes / ponte. Diga o IATA e o número do voo.',
            ],
            [
                'h3' => 'Guarulhos — GRU',
                'texto' => 'Guarulhos (GRU) fica em Guarulhos, não em Guarujá. O trecho sai pela Anchieta. Diga o IATA e o número do voo.',
            ],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque em Guarujá',
        'lista' => [
            'Hotel, prédio ou empresa com nome — “em Pitangueiras” não basta.',
            'Qual terminal: CGH em São Paulo ou GRU em Guarulhos.',
            'Se Santos entra depois, a ordem muda o recorte.',
        ],
    ],
];
