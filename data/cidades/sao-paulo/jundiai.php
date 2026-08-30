<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Jundiaí',
    'geo' => [
        'lat' => -23.1857,
        'lng' => -46.8978,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Jundiaí',
    'seo' => [
        'title' => 'Carro com motorista em Jundiaí: Ponte de Campinas e VCP',
        'description' => 'Carro com motorista em Jundiaí para Centro, Ponte de Campinas e VCP. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Embarque em Jundiaí: hotel, Centro e VCP',
        'og_description' => 'O motorista combina Centro com Viracopos (VCP), em Campinas. Informe nome do condomínio.',
        'og_image_alt' => 'Carro executivo em via de Jundiaí',
    ],
    'kicker' => 'Interior paulista · SP',
    'h1' => 'Jundiaí: entre Centro, Ponte de Campinas e o terminal certo',
    'faq_h2' => 'Dúvidas de quem embarca em Jundiaí',
    'faq' => [
        [
            'pergunta' => 'Quem está em Jundiaí embarca no VCP dentro da cidade?',
            'resposta' => 'Não. De Jundiaí o VCP (Viracopos) fica em Campinas. O trecho sai de Centro pela Anhanguera.',
        ],
        [
            'pergunta' => 'Em Jundiaí, vocês buscam em Centro?',
            'resposta' => 'Sim, em Jundiaí. Envie nome do condomínio em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Jundiaí vocês fazem Campinas?',
            'resposta' => 'Sim, saindo de Jundiaí. Campinas não é o recorte de Centro; o horário pela Bandeirantes sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Jundiaí, VCP e CGH são o mesmo recorte?',
            'resposta' => 'Não, em Jundiaí. VCP fica em Campinas; CGH fica em São Paulo. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Jundiaí e o VCP',
        'texto' => 'Diga o ponto em Centro ou Ponte de Campinas, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Jundiaí',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'sao-paulo',
            'ancora' => 'Jundiaí e o recorte de Interior paulista',
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
    'intro' => 'Jundiaí usa Viracopos (VCP), em Campinas. Quem embarca em Centro não está no município da pista. A Anhanguera é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Jundiaí não é pegar um carro',
            'texto' => 'Jundiaí usa Viracopos (VCP), em Campinas. Quem embarca em Centro não está no município da pista. A Anhanguera é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
        ],
        [
            'h2' => 'Quadrantes que mais geram embarque',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede e hotel. Informe nome do condomínio. Centro não compartilha o recuo de Ponte de Campinas.',
                ],
                [
                    'h3' => 'Ponte de Campinas',
                    'texto' => 'Origem frequente para eixo Anhanguera. Informe nome do condomínio. Ponte de Campinas não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Vila Arens',
                    'texto' => 'Origem frequente para bairro. Informe nome do condomínio. Vila Arens não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Eloy Chaves',
                    'texto' => 'Origem frequente para industrial. Informe nome do condomínio. Eloy Chaves não compartilha o recuo de Centro.',
                ],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Três combinações que a pauta de Jundiaí repete',
        'itens' => [
            [
                'titulo' => 'Centro → VCP',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: Anhanguera.',
            ],
            [
                'titulo' => 'VCP → Ponte de Campinas',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome do condomínio.',
            ],
            [
                'titulo' => 'Centro → Campinas',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Ponte de Campinas; o horário sai sob consulta.',
            ],
        ],
    ],
];
