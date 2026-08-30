<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'Angra dos Reis',
    'geo' => [
        'lat' => -23.0067,
        'lng' => -44.3181,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Angra dos Reis',
    'seo' => [
        'title' => 'Motorista executivo em Angra dos Reis: Centro e GIG',
        'description' => 'Motorista executivo em Angra dos Reis: Centro, Frade e Galeão (GIG), em Rio de Janeiro. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Agenda em Angra dos Reis com motorista — Frade e Galeão',
        'og_description' => 'O motorista combina Centro com Galeão (GIG), em Rio de Janeiro. Informe nome do hotel ou do cais.',
        'og_image_alt' => 'Carro executivo em via de Angra dos Reis',
    ],
    'kicker' => 'Costa Verde · RJ',
    'h1' => 'Em Angra dos Reis, de Centro a Galeão (GIG), em Rio de Janeiro',
    'faq_h2' => 'Dúvidas de quem embarca em Angra dos Reis',
    'faq' => [
        [
            'pergunta' => 'Quem está em Angra dos Reis embarca no GIG dentro da cidade?',
            'resposta' => 'Não. De Angra dos Reis o GIG (Galeão) fica em Rio de Janeiro. O trecho sai de Centro pela BR-101.',
        ],
        [
            'pergunta' => 'Em Angra dos Reis, vocês buscam em Centro?',
            'resposta' => 'Sim, em Angra dos Reis. Envie nome do hotel ou do cais em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Angra dos Reis vocês fazem Paraty?',
            'resposta' => 'Sim, saindo de Angra dos Reis. Paraty não é o recorte de Centro; o horário pela Avenida Júlio Maria sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Angra dos Reis o carro fica entre Centro e Frade?',
            'resposta' => 'Sim, em Angra dos Reis. A hora à disposição cobre hotel e cais em Centro e condomínio em Frade.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Angra dos Reis e o GIG',
        'texto' => 'Diga o ponto em Centro ou Frade, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Angra dos Reis',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'rio-de-janeiro',
            'ancora' => 'Angra dos Reis e o recorte de Costa Verde',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-de-janeiro',
            'cidade' => 'rio-de-janeiro',
            'ancora' => 'Motorista em rio de janeiro',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-de-janeiro',
            'cidade' => 'cabo-frio',
            'ancora' => 'Motorista em cabo frio',
        ],
    ],
    'epigrafe' => 'Centro não é o mesmo recuo de Frade. O motorista segura o acesso; o passageiro segura o horário.',
    'abertura' => [
        'h2' => 'Angra dos Reis: origem na orla, destino no terminal certo',
        'texto' => [
            'Angra dos Reis usa Galeão (GIG), em Rio de Janeiro. Quem embarca em Centro não está no município da pista. A BR-101 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
            'Frade pede condomínio. Monsuaba pede bairro. Quando Paraty entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela Avenida Júlio Maria.',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'Centro: o relógio do embarque',
            'texto' => 'Centro concentra hotel e cais. Informe nome do hotel ou do cais.',
        ],
        [
            'h2' => 'Frade e Monsuaba',
            'texto' => 'Frade pede condomínio. Monsuaba pede bairro. A ordem muda o intervalo mais que o mapa.',
        ],
        [
            'h2' => 'Galeão (GIG), em Rio de Janeiro',
            'texto' => 'Galeão (GIG) fica em Rio de Janeiro, não em Angra dos Reis. O trecho sai pela BR-101. Diga o IATA e o número do voo.',
        ],
    ],
    'aeroportos' => [
        'h2' => 'Terminal e vazão a partir de Angra dos Reis',
        'itens' => [
            [
                'h3' => 'Galeão — GIG',
                'texto' => 'Galeão (GIG) fica em Rio de Janeiro, não em Angra dos Reis. O trecho sai pela BR-101. Diga o IATA e o número do voo.',
            ],
            [
                'h3' => 'BR-101 e a vazão para Paraty',
                'texto' => 'Paraty e Rio de Janeiro aparecem no mesmo pedido de Angra dos Reis. Isso é viagem, não segunda corrida em Centro.',
            ],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque em Angra dos Reis',
        'lista' => [
            'Hotel, prédio ou empresa com nome — “em Centro” não basta.',
            'Qual terminal: GIG em Rio de Janeiro.',
            'Se Paraty entra depois, a ordem muda o recorte.',
        ],
    ],
];
