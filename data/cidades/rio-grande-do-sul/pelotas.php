<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Pelotas',
    'geo' => ['lat' => -31.7649, 'lng' => -52.3371],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Pelotas',
    'seo' => [
        'title' => 'Carro executivo em Pelotas: Centro, Areal e PET',
        'description' => 'Motorista executivo em Pelotas para o Centro, Areal, Três Vendas e o aeroporto João Simões Lopes Neto. Sul gaúcho, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Centro de Pelotas, no Areal e no aeroporto PET',
        'og_description' => 'Carro com motorista no sul do Rio Grande: hotel, pauta no Centro e o terminal PET.',
        'og_image_alt' => 'Sedan executivo em avenida de Pelotas',
    ],
    'kicker' => 'Sul gaúcho · RS',
    'h1' => 'Do PET ao Areal sem perder a reunião no Centro',
    'faixas' => [
        [
            'h2' => 'Pelotas se mede em canal e em BR-116 — o app não lê o vento da lagoa',
            'texto' => 'Hotel no Centro ou no Areal, reunião nas Três Vendas e voo no João Simões Lopes Neto (PET) cabem no mesmo dia se o motorista já saiu com a ordem da Bento Gonçalves e da Ferreira Viana, não com o atalho da hora.',
        ],
        [
            'h2' => 'Três recortes, um relógio de porto',
            'itens' => [
                ['h3' => 'Centro e o Calçadão', 'texto' => 'Sede, hotel (Dan Inn, similar) e o casario. Informe o prédio; o recuo do Centro Histórico não é o da UFPel.'],
                ['h3' => 'Areal, Três Vendas e o shopping', 'texto' => 'Torres e clínicas. Deslocamentos curtos que esticam no semáforo da Ferreira Viana.'],
                ['h3' => 'UFPel, Laranjal e a praia da lagoa', 'texto' => 'Campus e visita combinada. O Laranjal pede ponto de espera, não GPS no calçadão da praia.'],
            ],
        ],
        [
            'h2' => 'Rotas de pauta, doce e o salto para Rio Grande',
            'texto' => 'PET → hotel no Centro → UFPel → Laranjal só se a orla da lagoa estiver no roteiro. Rio Grande, o porto e a BR-392 entram como viagem, com horário de estrada, não como segunda corrida no Centro.',
        ],
        [
            'h2' => 'João Simões Lopes Neto — PET',
            'texto' => 'O aeroporto fica no recorte da cidade. Combinamos o voo. A espera no desembarque integra o trecho PET. Até o Centro ou o Areal, a avenida pesa mais que o mapa admite no pico.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Simões Lopes Neto',
    'faq' => [
        ['pergunta' => 'O aeroporto de Pelotas fica longe do Centro?', 'resposta' => 'É trecho urbano. Marcamos margem: a Bento Gonçalves e o horário de pico alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no PET se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem Centro, UFPel e o Laranjal no mesmo dia?', 'resposta' => 'Sim, quando a praia da lagoa entra no roteiro. Informe a ordem; um motorista articula os três.'],
        ['pergunta' => 'Dá para seguir a Rio Grande depois do hotel?', 'resposta' => 'Sim, como viagem pela BR-392. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Diga se o embarque é o Centro ou o PET',
        'texto' => 'O orçamento de Pelotas sai sob consulta. Areal, campus e terminal no mesmo recado.',
        'botao' => 'Pedir traslado em Pelotas',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-grande-do-sul', 'ancora' => 'Serra, Porto e o recorte gaúcho'],
        ['tipo' => 'cidade', 'estado' => 'rio-grande-do-sul', 'cidade' => 'porto-alegre', 'ancora' => 'Moinhos, Centro Histórico e o Salgado Filho'],
        ['tipo' => 'cidade', 'estado' => 'rio-grande-do-sul', 'cidade' => 'caxias-do-sul', 'ancora' => 'Centro, São Pelegrino e o CXJ'],
    ],
];
