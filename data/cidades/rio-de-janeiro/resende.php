<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Resende',
    'geo' => [
        'lat' => -22.4704,
        'lng' => -44.4506,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Resende',
    'seo' => [
        'title' => 'Carro com motorista em Resende: Campos Elíseos e QRZ',
        'description' => 'Carro com motorista em Resende para Centro, Campos Elíseos e QRZ. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Traslado em Resende: Centro e QRZ',
        'og_description' => 'O motorista combina Centro com Resende (QRZ), no próprio município. Informe nome do hotel ou da unidade.',
        'og_image_alt' => 'Carro executivo em via de Resende',
    ],
    'kicker' => 'Sul fluminense · RJ',
    'h1' => 'Resende — Centro de manhã, QRZ quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Resende',
    'faq' => [
        [
            'pergunta' => 'Em Resende, o QRZ fica no próprio município?',
            'resposta' => 'Sim. Em Resende, Resende (QRZ) fica no município. Informe o acesso via BR-116.',
        ],
        [
            'pergunta' => 'Em Resende, vocês buscam em Centro?',
            'resposta' => 'Sim, em Resende. Envie nome do hotel ou da unidade em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Resende vocês fazem Volta Redonda?',
            'resposta' => 'Sim, saindo de Resende. Volta Redonda não é o recorte de Centro; o horário pela BR-354 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Resende, QRZ e GIG são o mesmo recorte?',
            'resposta' => 'Não, em Resende. QRZ fica em Resende; GIG fica em Rio de Janeiro. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Resende e o QRZ',
        'texto' => 'Diga o ponto em Centro ou Campos Elíseos, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Resende',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'rio-de-janeiro',
            'ancora' => 'Resende e o recorte de Sul fluminense',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-de-janeiro',
            'cidade' => 'volta-redonda',
            'ancora' => 'Motorista em volta redonda',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-de-janeiro',
            'cidade' => 'rio-de-janeiro',
            'ancora' => 'Motorista em rio de janeiro',
        ],
    ],
    'intro' => 'Resende concentra Centro (sede e hotel) e Resende (QRZ) no mesmo município. O motorista precisa do ponto de embarque e do QRZ no mesmo recado — “me busca em Resende” não define o recuo.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Resende não é pegar um carro',
            'texto' => 'Resende concentra Centro (sede e hotel) e Resende (QRZ) no mesmo município. O motorista precisa do ponto de embarque e do QRZ no mesmo recado — “me busca em Resende” não define o recuo.',
        ],
        [
            'h2' => 'Quadrantes que mais geram embarque',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel ou da unidade. Centro não compartilha o recuo de Campos Elíseos.',
                ],
                [
                    'h3' => 'Campos Elíseos',
                    'texto' => 'Origem frequente para bairro. Informe nome do hotel ou da unidade. Campos Elíseos não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Jardim Jalisco',
                    'texto' => 'Origem frequente para residencial. Informe nome do hotel ou da unidade. Jardim Jalisco não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'AMAN',
                    'texto' => 'Origem frequente para academia militar. Informe nome do hotel ou da unidade. AMAN não compartilha o recuo de Centro.',
                ],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Três combinações que a pauta de Resende repete',
        'itens' => [
            [
                'titulo' => 'Centro → QRZ',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: BR-116.',
            ],
            [
                'titulo' => 'QRZ → Campos Elíseos',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome do hotel ou da unidade.',
            ],
            [
                'titulo' => 'Centro → Volta Redonda',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Campos Elíseos; o horário sai sob consulta.',
            ],
        ],
    ],
];
