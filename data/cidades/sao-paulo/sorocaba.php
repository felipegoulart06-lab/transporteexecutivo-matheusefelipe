<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Sorocaba',
    'geo' => [
        'lat' => -23.5015,
        'lng' => -47.4526,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Sorocaba',
    'seo' => [
        'title' => 'Motorista executivo em Sorocaba: Campolim e SOD',
        'description' => 'Motorista executivo em Sorocaba: Campolim, Centro e Bertram Luiz Leupolz (SOD), no próprio município. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Traslado em Sorocaba: Campolim e SOD',
        'og_description' => 'O motorista combina Campolim com Bertram Luiz Leupolz (SOD), no próprio município. Informe nome do condomínio.',
        'og_image_alt' => 'Carro executivo em via de Sorocaba',
    ],
    'kicker' => 'Interior paulista · SP',
    'h1' => 'Sorocaba — Campolim de manhã, SOD quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Sorocaba',
    'faq' => [
        [
            'pergunta' => 'Em Sorocaba, o SOD fica no próprio município?',
            'resposta' => 'Sim. Em Sorocaba, Bertram Luiz Leupolz (SOD) fica no município. Informe o acesso via Avenida Oswaldo Pires de Campos.',
        ],
        [
            'pergunta' => 'Em Sorocaba, vocês buscam em Campolim?',
            'resposta' => 'Sim, em Sorocaba. Envie nome do condomínio em Campolim. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Sorocaba vocês fazem Votorantim?',
            'resposta' => 'Sim, saindo de Sorocaba. Votorantim não é o recorte de Campolim; o horário pela Raposo Tavares sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Sorocaba, SOD e VCP são o mesmo recorte?',
            'resposta' => 'Não, em Sorocaba. SOD fica em Sorocaba; VCP fica em Campinas. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Sorocaba e o SOD',
        'texto' => 'Diga o ponto em Campolim ou Centro, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Sorocaba',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'sao-paulo',
            'ancora' => 'Sorocaba e o recorte de Interior paulista',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'campinas',
            'ancora' => 'Motorista em campinas',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'sao-paulo',
            'ancora' => 'Motorista em sao paulo',
        ],
    ],
    'intro' => 'Sorocaba concentra Campolim (hotel e torre) e Bertram Luiz Leupolz (SOD) no mesmo município. O motorista precisa do ponto de embarque e do SOD no mesmo recado — “me busca em Sorocaba” não define o recuo.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Sorocaba não é pegar um carro',
            'texto' => 'Sorocaba concentra Campolim (hotel e torre) e Bertram Luiz Leupolz (SOD) no mesmo município. O motorista precisa do ponto de embarque e do SOD no mesmo recado — “me busca em Sorocaba” não define o recuo.',
        ],
        [
            'h2' => 'Quadrantes que mais geram embarque',
            'itens' => [
                [
                    'h3' => 'Campolim',
                    'texto' => 'Origem frequente para hotel e torre. Informe nome do condomínio. Campolim não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede. Informe nome do condomínio. Centro não compartilha o recuo de Campolim.',
                ],
                [
                    'h3' => 'Éden',
                    'texto' => 'Origem frequente para industrial. Informe nome do condomínio. Éden não compartilha o recuo de Campolim.',
                ],
                [
                    'h3' => 'Além Ponte',
                    'texto' => 'Origem frequente para bairro. Informe nome do condomínio. Além Ponte não compartilha o recuo de Campolim.',
                ],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Três combinações que a pauta de Sorocaba repete',
        'itens' => [
            [
                'titulo' => 'Campolim → SOD',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: Avenida Oswaldo Pires de Campos.',
            ],
            [
                'titulo' => 'SOD → Centro',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome do condomínio.',
            ],
            [
                'titulo' => 'Campolim → Votorantim',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Centro; o horário sai sob consulta.',
            ],
        ],
    ],
];
