<?php

declare(strict_types=1);

return [
    'layout' => 'dunas',
    'cidade_nome' => 'Mossoró',
    'geo' => ['lat' => -5.1879, 'lng' => -37.3441],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Mossoró',
    'seo' => [
        'title' => 'Motorista em Mossoró: Centro, Nova Betânia e MVF',
        'description' => 'Carro com motorista em Mossoró para o Centro, Nova Betânia, Lagoa do Mato, a UERN e o aeroporto Dix-Sept Rosado. Sal, petróleo e orçamento sob consulta.',
        'og_title' => 'Traslado no Centro, em Nova Betânia e no MVF',
        'og_description' => 'Motorista no oeste potiguar: hotel no Centro, pauta na UERN e o terminal Dix-Sept Rosado.',
        'og_image_alt' => 'Sedan executivo em avenida de Mossoró no oeste do Rio Grande do Norte',
    ],
    'kicker' => 'Oeste potiguar · RN',
    'h1' => 'Do MVF à Nova Betânia sem perder a reunião no Centro',
    'trilha' => [
        'h2' => 'Mossoró se lê em sal, petróleo e campus — não no atalho da BR-304',
        'texto' => 'A segunda cidade potiguar alinha hotel no Centro ou em Nova Betânia, pauta na UERN ou em Lagoa do Mato e o trecho até o Dix-Sept Rosado (MVF). A Rio Branco e a Presidente Dutra mudam o relógio. O motorista sai com essa malha; o passageiro não discute faixa com o GPS na porta do hotel. Natal e Fortaleza entram como viagem, não como segunda corrida urbana.',
    ],
    'chips' => [
        'h2' => 'Onde o embarque mossoroense mais se repete',
        'itens' => [
            'Centro',
            'Nova Betânia',
            'Lagoa do Mato',
            'UERN',
            'Abolição',
            'Ilha de Santa Luzia',
            'Terminal MVF',
        ],
    ],
    'historias' => [
        [
            'h2' => 'O hotel do Centro é embarque, não slogan de parceria',
            'texto' => 'Hotéis da Rio Branco e de Nova Betânia entram no roteiro pelo nome e pelo recuo, não por “perto da catedral”. O carro espera no acesso de serviço quando a via está tomada. Não há convênio de porta: o hotel é só o ponto de saída.',
        ],
        [
            'h2' => 'Centro, Abolição e a pauta institucional',
            'texto' => 'Sede, fórum e o calçadão. Informe o prédio; o recuo do Centro não é o da UERN nem o de Lagoa do Mato. A numeração se repete e o sentido muda no pico.',
        ],
        [
            'h2' => 'Rotas que misturam campus, sal e o salto até Natal',
            'texto' => 'Hotel em Nova Betânia → Centro → UERN → Lagoa do Mato só se a ordem estiver no roteiro. Natal (NAT) sai pela BR-304, com margem de sertão. Fortaleza e o FOR entram pela BR-304 e pela malha cearense — não como recorte urbano de Mossoró. O orçamento sai sob consulta.',
        ],
        [
            'h2' => 'Dix-Sept Rosado — MVF',
            'texto' => 'O aeroporto fica no recorte da cidade. Combinamos o voo. A espera no desembarque integra o trecho MVF; o passageiro não cruza o saguão atrás de uma placa genérica. Até Nova Betânia a margem é urbana; até Natal, a 304 pesa mais que o mapa.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta o oeste potiguar',
    'faq' => [
        [
            'pergunta' => 'O aeroporto de Mossoró fica longe de Nova Betânia?',
            'resposta' => 'É trecho urbano. Marcamos margem: a Rio Branco e o horário de pico alteram o intervalo até o MVF.',
        ],
        [
            'pergunta' => 'O motorista espera no MVF se o voo atrasar?',
            'resposta' => 'Sim, quando o voo está no roteiro. O número entra no pedido e a espera no terminal faz parte do trecho.',
        ],
        [
            'pergunta' => 'Vocês fazem Centro, Nova Betânia e a UERN no mesmo dia?',
            'resposta' => 'Sim. Em Mossoró, informe o bloco do campus. Um motorista articula os três recuos.',
        ],
        [
            'pergunta' => 'Dá para seguir a Natal ou a Fortaleza depois do hotel?',
            'resposta' => 'Sim, como viagem pela BR-304. Não é o mesmo recorte do Centro; o horário sai sob consulta.',
        ],
        [
            'pergunta' => 'Lagoa do Mato e a pauta de petróleo entram no mesmo pedido?',
            'resposta' => 'Sim, quando o endereço e o nome na portaria entram no roteiro. Sem lista, o recuo da planta não libera. O orçamento sai sob consulta.',
        ],
    ],
    'cta' => [
        'titulo' => 'Una Nova Betânia ao horário do MVF',
        'texto' => 'O orçamento de Mossoró sai sob consulta. Centro, campus e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir traslado em Mossoró',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-grande-do-norte', 'ancora' => 'Natal, o sal e o oeste potiguar'],
        ['tipo' => 'cidade', 'estado' => 'rio-grande-do-norte', 'cidade' => 'natal', 'ancora' => 'Ponta Negra, Tirol e o NAT'],
        ['tipo' => 'cidade', 'estado' => 'ceara', 'cidade' => 'fortaleza', 'ancora' => 'Meireles, Aldeota e o Pinto Martins'],
    ],
];
