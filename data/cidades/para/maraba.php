<?php

declare(strict_types=1);

return [
    'layout' => 'rio',
    'cidade_nome' => 'Marabá',
    'geo' => ['lat' => -5.3686, 'lng' => -49.1178],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Marabá',
    'seo' => [
        'title' => 'Traslado executivo em Marabá: Nova Marabá e MAB',
        'description' => 'Carro com motorista em Marabá para Nova Marabá, Velha Marabá, Cidade Nova e o aeroporto João Correa da Rocha. Mineração, EFC e orçamento sob consulta.',
        'og_title' => 'Motorista na Nova Marabá, na Velha e no aeroporto MAB',
        'og_description' => 'Traslado no sudeste paraense: hotel na Nova, pauta na Carajás e o terminal MAB.',
        'og_image_alt' => 'Sedan executivo em avenida da Nova Marabá, no Pará',
    ],
    'kicker' => 'Sudeste paraense · PA',
    'h1' => 'Do MAB à Nova Marabá sem perder o recuo da Carajás',
    'corrente' => [
        [
            'h2' => 'Marabá se organiza em folhas, rio e ferrovia — não no aceite do app',
            'texto' => 'A cidade nasce na confluência do Tocantins com o Itacaiunas e se espalha em núcleos que o mapa trata como um só e o relógio não. Nova Marabá (as folhas), Velha Marabá (o recorte histórico na beira) e Cidade Nova pedem endereço de núcleo, não “no centro”. Hotel na Folha 31, reunião na Folha 32 e voo no João Correa da Rocha (MAB) cabem no mesmo expediente se o motorista já saiu com a ordem da Transamazônica e da PA-150, não com o atalho do minuto. A Estrada de Ferro Carajás e o recorte mineral entram no roteiro pelo nome da portaria.',
        ],
        [
            'h2' => 'Núcleos que a agenda marabaense mais cita',
            'itens' => [
                [
                    'h3' => 'Nova Marabá e as folhas',
                    'texto' => 'Comércio, hotel e o traçado planejado. Informe a folha e o número; Folha 31 e Folha 32 não compartilham o mesmo recuo. O shopping e as torres pedem o nome do prédio.',
                ],
                [
                    'h3' => 'Velha Marabá e a beira do Tocantins',
                    'texto' => 'Núcleo histórico, calçamento e o recuo do rio. O acesso muda com a cheia e com o horário de pico da ponte interna. “Na Velha” não define a porta.',
                ],
                [
                    'h3' => 'Cidade Nova, mineração e a EFC',
                    'texto' => 'Pauta residencial e o salto rumo à portaria ferroviária ou mineral. O nome na lista entra no roteiro junto com o turno; sem isso, a cancela não libera.',
                ],
            ],
        ],
        [
            'h2' => 'João Correa da Rocha — MAB',
            'texto' => 'O aeroporto fica no recorte da cidade. Combinamos o voo. A espera no desembarque integra o trecho MAB; o passageiro não cruza o saguão atrás de uma placa genérica. Até a Nova Marabá a margem é urbana; até a portaria da Carajás, a PA-150 pesa mais que o mapa. O orçamento sai sob consulta.',
        ],
        [
            'h2' => 'Belém e Santarém não se improvisam depois da Folha 32',
            'texto' => 'Hotel na Nova → MAB → Velha Marabá só se a ordem estiver no roteiro. Belém (BEL) e Santarém (STM) entram como viagem longa ou como outro voo, não como segunda corrida urbana. O hotel é ponto de embarque, sem convênio de porta. A Transamazônica (BR-230) e a BR-222 pedem margem própria quando a pauta vaza do município.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no João Correa da Rocha',
    'faq' => [
        [
            'pergunta' => 'O aeroporto de Marabá fica longe da Nova Marabá?',
            'resposta' => 'É trecho urbano. Marcamos margem: a PA-150 e o horário de pico entre as folhas alteram o intervalo até o MAB.',
        ],
        [
            'pergunta' => 'O motorista espera no MAB se o voo atrasar?',
            'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.',
        ],
        [
            'pergunta' => 'Vocês fazem Nova Marabá, Velha Marabá e Cidade Nova no mesmo dia?',
            'resposta' => 'Sim. Informe a folha ou o núcleo. São recuos distintos; um motorista articula os três se a ordem estiver no roteiro.',
        ],
        [
            'pergunta' => 'Dá para ir à portaria da Carajás ou da EFC depois do hotel?',
            'resposta' => 'Sim, quando o nome na lista entra no pedido. Sem protocolo, a cancela não libera. O horário sai sob consulta.',
        ],
        [
            'pergunta' => 'O carro segue a Belém ou a Santarém no mesmo expediente?',
            'resposta' => 'Só como viagem longa, quando o endereço entra no roteiro. Não é o mesmo recorte das folhas; o orçamento sai sob consulta.',
        ],
    ],
    'cta' => [
        'titulo' => 'Junte a Folha 31 ao horário do MAB',
        'texto' => 'O orçamento de Marabá sai sob consulta. Nova, Velha e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir carro em Marabá',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'para', 'ancora' => 'Belém, Santarém e o sudeste mineral'],
        ['tipo' => 'cidade', 'estado' => 'para', 'cidade' => 'belem', 'ancora' => 'Nazaré, Batista Campos e o Val-de-Cans'],
        ['tipo' => 'cidade', 'estado' => 'para', 'cidade' => 'santarem', 'ancora' => 'Centro, Aldeia e o aeroporto STM'],
    ],
];
