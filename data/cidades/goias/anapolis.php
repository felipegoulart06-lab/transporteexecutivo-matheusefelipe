<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Anápolis',
    'geo' => [
        'lat' => -16.3281,
        'lng' => -48.9534,
    ],
    'imagem' => 'centro-oeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Anápolis',
    'seo' => [
        'title' => 'Motorista executivo em Anápolis: Centro e GYN',
        'description' => 'Motorista executivo em Anápolis: Centro, Jundiaí e Santa Genoveva (GYN), em Goiânia. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Embarque em Anápolis: hotel, Centro e GYN',
        'og_description' => 'O motorista combina Centro com Santa Genoveva (GYN), em Goiânia. Informe nome na lista da portaria do DAIA.',
        'og_image_alt' => 'Carro executivo em via de Anápolis',
    ],
    'kicker' => 'Eixo Goiânia–Brasília · GO',
    'h1' => 'Em Anápolis: do embarque em Centro ao GYN',
    'faq_h2' => 'Dúvidas de quem embarca em Anápolis',
    'faq' => [
        [
            'pergunta' => 'Quem está em Anápolis embarca no GYN dentro da cidade?',
            'resposta' => 'Não. De Anápolis o GYN (Santa Genoveva) fica em Goiânia. O trecho sai de Centro pela BR-153.',
        ],
        [
            'pergunta' => 'Em Anápolis, vocês buscam em Centro?',
            'resposta' => 'Sim, em Anápolis. Envie nome na lista da portaria do DAIA em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Anápolis vocês fazem Goiânia?',
            'resposta' => 'Sim, saindo de Anápolis. Goiânia não é o recorte de Centro; o horário pela BR-060 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Anápolis, GYN e BSB são o mesmo recorte?',
            'resposta' => 'Não, em Anápolis. GYN fica em Goiânia; BSB fica em Brasília. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Anápolis e o GYN',
        'texto' => 'Diga o ponto em Centro ou Jundiaí, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Anápolis',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'goias',
            'ancora' => 'Anápolis e o recorte de Eixo Goiânia–Brasília',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'goias',
            'cidade' => 'goiania',
            'ancora' => 'Motorista em goiania',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'distrito-federal',
            'cidade' => 'brasilia',
            'ancora' => 'Motorista em brasilia',
        ],
    ],
    'intro' => 'Anápolis usa Santa Genoveva (GYN), em Goiânia. Quem embarca em Centro não está no município da pista. A BR-153 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Anápolis não é pegar um carro',
            'texto' => 'Anápolis usa Santa Genoveva (GYN), em Goiânia. Quem embarca em Centro não está no município da pista. A BR-153 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
        ],
        [
            'h2' => 'Quadrantes que mais geram embarque',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede e hotel. Informe nome na lista da portaria do DAIA. Centro não compartilha o recuo de Jundiaí.',
                ],
                [
                    'h3' => 'Jundiaí',
                    'texto' => 'Origem frequente para bairro. Informe nome na lista da portaria do DAIA. Jundiaí não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'DAIA',
                    'texto' => 'Origem frequente para distrito agroindustrial. Informe nome na lista da portaria do DAIA. DAIA não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Vila Jaiara',
                    'texto' => 'Origem frequente para residencial. Informe nome na lista da portaria do DAIA. Vila Jaiara não compartilha o recuo de Centro.',
                ],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Três combinações que a pauta de Anápolis repete',
        'itens' => [
            [
                'titulo' => 'Centro → GYN',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: BR-153.',
            ],
            [
                'titulo' => 'GYN → Jundiaí',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome na lista da portaria do DAIA.',
            ],
            [
                'titulo' => 'Centro → Goiânia',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Jundiaí; o horário sai sob consulta.',
            ],
        ],
    ],
];
