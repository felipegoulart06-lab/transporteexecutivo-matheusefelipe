<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Campinas',
    'geo' => [
        'lat' => -22.9099,
        'lng' => -47.0626,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Campinas',
    'seo' => [
        'title' => 'Motorista executivo em Campinas: Cambuí e VCP',
        'description' => 'Carro com motorista em Campinas para Cambuí, Barão Geraldo e VCP. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Agenda em Campinas com motorista — Barão Geraldo e Viracopos',
        'og_description' => 'O motorista combina Cambuí com Viracopos (VCP), no próprio município. Informe nome do hotel ou do campus.',
        'og_image_alt' => 'Carro executivo em via de Campinas',
    ],
    'kicker' => 'Região Metropolitana de Campinas · SP',
    'h1' => 'Campinas: entre Cambuí, Barão Geraldo e o terminal certo',
    'faq_h2' => 'Dúvidas de quem embarca em Campinas',
    'faq' => [
        [
            'pergunta' => 'Em Campinas, o VCP fica no próprio município?',
            'resposta' => 'Sim. Em Campinas, Viracopos (VCP) fica no município. Informe o acesso via Santos Dumont / Rodovia dos Bandeirantes.',
        ],
        [
            'pergunta' => 'Em Campinas, vocês buscam em Cambuí?',
            'resposta' => 'Sim, em Campinas. Envie nome do hotel ou do campus em Cambuí. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Campinas vocês fazem Indaiatuba?',
            'resposta' => 'Sim, saindo de Campinas. Indaiatuba não é o recorte de Cambuí; o horário pela Bandeirantes sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Campinas o carro fica entre Cambuí e Barão Geraldo?',
            'resposta' => 'Sim, em Campinas. A hora à disposição cobre hotel e escritório em Cambuí e Unicamp e Ciatec em Barão Geraldo.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Campinas e o VCP',
        'texto' => 'Diga o ponto em Cambuí ou Barão Geraldo, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Campinas',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'sao-paulo',
            'ancora' => 'Campinas e o recorte de Região Metropolitana de Campinas',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'sao-paulo',
            'ancora' => 'Motorista em sao paulo',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'guarulhos',
            'ancora' => 'Motorista em guarulhos',
        ],
    ],
    'intro' => 'Campinas concentra Cambuí (hotel e escritório) e Viracopos (VCP) no mesmo município. O motorista precisa do ponto de embarque e do VCP no mesmo recado — “me busca em Campinas” não define o recuo.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Campinas não é pegar um carro',
            'texto' => 'Campinas concentra Cambuí (hotel e escritório) e Viracopos (VCP) no mesmo município. O motorista precisa do ponto de embarque e do VCP no mesmo recado — “me busca em Campinas” não define o recuo.',
        ],
        [
            'h2' => 'Quadrantes que mais geram embarque',
            'itens' => [
                [
                    'h3' => 'Cambuí',
                    'texto' => 'Origem frequente para hotel e escritório. Informe nome do hotel ou do campus. Cambuí não compartilha o recuo de Barão Geraldo.',
                ],
                [
                    'h3' => 'Barão Geraldo',
                    'texto' => 'Origem frequente para Unicamp e Ciatec. Informe nome do hotel ou do campus. Barão Geraldo não compartilha o recuo de Cambuí.',
                ],
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede. Informe nome do hotel ou do campus. Centro não compartilha o recuo de Cambuí.',
                ],
                [
                    'h3' => 'Taquaral',
                    'texto' => 'Origem frequente para orla da lagoa. Informe nome do hotel ou do campus. Taquaral não compartilha o recuo de Cambuí.',
                ],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Três combinações que a pauta de Campinas repete',
        'itens' => [
            [
                'titulo' => 'Cambuí → VCP',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: Santos Dumont / Rodovia dos Bandeirantes.',
            ],
            [
                'titulo' => 'VCP → Barão Geraldo',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome do hotel ou do campus.',
            ],
            [
                'titulo' => 'Cambuí → Indaiatuba',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Barão Geraldo; o horário sai sob consulta.',
            ],
        ],
    ],
];
