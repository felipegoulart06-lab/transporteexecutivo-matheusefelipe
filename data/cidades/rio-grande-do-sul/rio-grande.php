<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Rio Grande',
    'geo' => ['lat' => -32.0350, 'lng' => -52.0986],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Rio Grande',
    'seo' => [
        'title' => 'Traslado em Rio Grande: Centro, Cassino e RIG',
        'description' => 'Motorista executivo em Rio Grande para o Centro, Cassino, Superporto, FURG e o aeroporto RIG. Litoral sul gaúcho e orçamento sob consulta.',
        'og_title' => 'Traslado no Centro de Rio Grande, no Superporto e no RIG',
        'og_description' => 'Motorista no extremo sul: hotel no Centro, pauta no Superporto e o terminal RIG.',
        'og_image_alt' => 'Sedan executivo em avenida de Rio Grande',
    ],
    'kicker' => 'Litoral sul gaúcho · RS',
    'h1' => 'Do RIG ao Superporto sem perder a janela do Cassino',
    'faixas' => [
        [
            'h2' => 'Rio Grande se mede em cais e em BR-392 — o app não lê o vento do Superporto',
            'texto' => 'Hotel no Centro, pauta no Superporto ou na FURG e voo no aeroporto RIG cabem no mesmo dia se o motorista já saiu com a ordem da Rheingantz e da Hidráulica, não com o atalho da hora. O Cassino só entra se a orla estiver no roteiro.',
        ],
        [
            'h2' => 'Três recortes, um relógio de porto',
            'itens' => [
                ['h3' => 'Centro e a Rheingantz', 'texto' => 'Sede, hotel e o casario. Informe o prédio; o recuo do Centro não é o da FURG nem o da cancela do cais.'],
                ['h3' => 'Superporto e a Hidráulica', 'texto' => 'Em Rio Grande, portaria e turno. Envie o nome na lista e o documento pedido; sem isso, a cancela não libera.'],
                ['h3' => 'Cassino e o campus da FURG', 'texto' => 'Praia só se a visita estiver combinada. O campus pede bloco e portaria, não “na universidade”.'],
            ],
        ],
        [
            'h2' => 'Rotas de pauta, cais e o salto para Pelotas',
            'texto' => 'RIG → hotel no Centro → Superporto → FURG. O Cassino só se a orla entrar no roteiro. Pelotas e a BR-392 entram como viagem, com horário de estrada, não como segunda corrida no Centro.',
        ],
        [
            'h2' => 'Aeroporto de Rio Grande — RIG',
            'texto' => 'O terminal fica no recorte da cidade. Combinamos o voo. A espera no desembarque integra o trecho RIG. Até o Centro, o Superporto ou o Cassino, a avenida e o vento do cais pesam mais que o mapa admite no pico.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no RIG',
    'faq' => [
        ['pergunta' => 'O aeroporto de Rio Grande fica longe do Centro?', 'resposta' => 'É trecho urbano. Marcamos margem: a Rheingantz e o horário de pico alteram o intervalo até o Superporto.'],
        ['pergunta' => 'O motorista espera no RIG se o voo atrasar?', 'resposta' => 'Sim. Combinamos o RIG com o número do voo; a espera no terminal local integra o trecho desde o Centro ou o Cassino.'],
        ['pergunta' => 'Vocês entram no Superporto com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista do Superporto e o documento pedido. Sem protocolo, a cancela do cais não libera.'],
        ['pergunta' => 'O Cassino entra no mesmo roteiro do porto?', 'resposta' => 'Sim, quando a praia está no itinerário. Informe a ordem; um motorista articula Centro, Superporto e Cassino se a margem estiver no roteiro.'],
        ['pergunta' => 'Dá para seguir a Pelotas depois do hotel?', 'resposta' => 'Sim, como viagem pela BR-392 rumo a Pelotas. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Superporto ao horário do RIG',
        'texto' => 'O orçamento de Rio Grande sai sob consulta. Centro, Cassino e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir traslado em Rio Grande',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-grande-do-sul', 'ancora' => 'Serra, Porto e o recorte gaúcho'],
        ['tipo' => 'cidade', 'estado' => 'rio-grande-do-sul', 'cidade' => 'pelotas', 'ancora' => 'Centro, Areal e o João Simões Lopes Neto'],
        ['tipo' => 'cidade', 'estado' => 'rio-grande-do-sul', 'cidade' => 'porto-alegre', 'ancora' => 'Moinhos, Centro Histórico e o Salgado Filho'],
    ],
];
