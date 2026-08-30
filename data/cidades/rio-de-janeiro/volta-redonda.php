<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Volta Redonda',
    'geo' => [
        'lat' => -22.5202,
        'lng' => -44.0996,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Volta Redonda',
    'seo' => [
        'title' => 'Motorista executivo em Volta Redonda: Aterrado e GIG',
        'description' => 'Carro com motorista em Volta Redonda para Aterrado, Centro e GIG. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Traslado em Volta Redonda: Aterrado e GIG',
        'og_description' => 'O motorista combina Aterrado com Galeão (GIG), em Rio de Janeiro. Informe nome da empresa ou do hotel.',
        'og_image_alt' => 'Carro executivo em via de Volta Redonda',
    ],
    'kicker' => 'Sul fluminense · RJ',
    'h1' => 'Em Volta Redonda: do embarque em Aterrado ao GIG',
    'faq_h2' => 'Dúvidas de quem embarca em Volta Redonda',
    'faq' => [
        [
            'pergunta' => 'Quem está em Volta Redonda embarca no GIG dentro da cidade?',
            'resposta' => 'Não. De Volta Redonda o GIG (Galeão) fica em Rio de Janeiro. O trecho sai de Aterrado pela BR-116.',
        ],
        [
            'pergunta' => 'Em Volta Redonda, vocês buscam em Aterrado?',
            'resposta' => 'Sim, em Volta Redonda. Envie nome da empresa ou do hotel em Aterrado. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Volta Redonda vocês fazem Barra Mansa?',
            'resposta' => 'Sim, saindo de Volta Redonda. Barra Mansa não é o recorte de Aterrado; o horário pela BR-393 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Volta Redonda, GIG e QRZ são o mesmo recorte?',
            'resposta' => 'Não, em Volta Redonda. GIG fica em Rio de Janeiro; QRZ fica em Resende. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Volta Redonda e o GIG',
        'texto' => 'Diga o ponto em Aterrado ou Centro, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Volta Redonda',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'rio-de-janeiro',
            'ancora' => 'Volta Redonda e o recorte de Sul fluminense',
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
            'cidade' => 'angra-dos-reis',
            'ancora' => 'Motorista em angra dos reis',
        ],
    ],
    'olho' => 'Aterrado e Galeão (GIG), em Rio de Janeiro não cabem no mesmo aceite tardio.',
    'capitulos' => [
        [
            'h2' => 'Aterrado e o recuo da pauta',
            'texto' => 'Volta Redonda usa Galeão (GIG), em Rio de Janeiro. Quem embarca em Aterrado não está no município da pista. A BR-116 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
        ],
        [
            'h2' => 'Centro, Vila Santa Cecília e a ordem do dia',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede. Informe nome da empresa ou do hotel. Centro não compartilha o recuo de Aterrado.',
                ],
                [
                    'h3' => 'Vila Santa Cecília',
                    'texto' => 'Origem frequente para CSN e bairro. Informe nome da empresa ou do hotel. Vila Santa Cecília não compartilha o recuo de Aterrado.',
                ],
                [
                    'h3' => 'Aero Clube',
                    'texto' => 'Origem frequente para acesso. Informe nome da empresa ou do hotel. Aero Clube não compartilha o recuo de Aterrado.',
                ],
            ],
        ],
        [
            'h2' => 'Galeão — GIG',
            'texto' => 'Galeão (GIG) fica em Rio de Janeiro, não em Volta Redonda. O trecho sai pela BR-116. Diga o IATA e o número do voo.',
        ],
    ],
    'passos' => [
        'h2' => 'Como solicitar em Volta Redonda',
        'itens' => [
            [
                'num' => '01',
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome da empresa ou do hotel. Autocomplete não resolve dois acessos em Aterrado.',
            ],
            [
                'num' => '02',
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o GIG ou Barra Mansa entra no dia.',
            ],
            [
                'num' => '03',
                'titulo' => 'Confirmação',
                'texto' => 'Em Volta Redonda, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
