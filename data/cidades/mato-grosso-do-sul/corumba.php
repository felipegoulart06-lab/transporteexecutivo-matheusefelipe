<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Corumbá',
    'geo' => ['lat' => -19.0078, 'lng' => -57.651],
    'imagem' => 'centro-oeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Corumbá',
    'seo' => [
        'title' => 'Fronteira e Pantanal: motorista em Corumbá e o CMG',
        'description' => 'Carro com motorista em Corumbá para o Centro, Popular Nova, o porto, a fronteira com a Bolívia e o aeroporto CMG. Pantanal só no roteiro. Orçamento sob consulta.',
        'og_title' => 'Traslado no porto de Corumbá, na fronteira e no CMG',
        'og_description' => 'Motorista no extremo oeste sul-mato-grossense: hotel no Centro, cais e o saguão CMG — não o CGR.',
        'og_image_alt' => 'Sedan executivo no Centro de Corumbá, na fronteira do Pantanal',
    ],
    'kicker' => 'Fronteira e Pantanal · MS',
    'h1' => 'Porto, fronteira e o CMG: Corumbá não se pauta como interior de Campo Grande',
    'faixas' => [
        [
            'h2' => 'Corumbá organiza o dia no cais e no CMG — a capital fica numa BR-262 de distância',
            'texto' => 'Campo Grande não é o município vizinho: é outra cidade, outro saguão (CGR), outro relógio. Hotel no Centro ou em Popular Nova, pauta no porto e voo no aeroporto internacional CMG cabem no mesmo expediente se o motorista já saiu com a ordem da beira do Paraguai, não com o aceite que trata Corumbá como interior da Cidade Morena. A fronteira com a Bolívia pede documento e ponto combinado.',
        ],
        [
            'h2' => 'Três recortes, um rio na porta',
            'itens' => [
                ['h3' => 'Centro', 'texto' => 'Sede, hotel e o casario. Informe o prédio; o recuo do Centro não é o de Popular Nova nem o da cancela do cais.'],
                ['h3' => 'Popular Nova', 'texto' => 'Pauta residencial e clínicas. “Na Popular” não define a entrada nem o ponto de espera do hotel.'],
                ['h3' => 'Porto e a fronteira', 'texto' => 'Cais, porto seco e o recuo rumo a Puerto Quijarro. Envie o documento pedido; sem isso, a cancela não libera. A Bolívia não se improvisa no GPS.'],
            ],
        ],
        [
            'h2' => 'Rotas de pauta, cais e o salto que não é Campo Grande',
            'texto' => 'CMG → hotel no Centro → porto → Popular Nova só se a ordem estiver no roteiro. O Pantanal entra apenas como itinerário combinado — flutuação, fazenda ou mirante não são desvio no meio da pauta de fronteira. Campo Grande e Dourados entram como viagem pela BR-262, não como segunda corrida urbana. O hotel é embarque, sem convênio de porta.',
        ],
        [
            'h2' => 'Aeroporto Internacional de Corumbá — CMG',
            'texto' => 'O terminal fica no recorte da cidade. Combinamos o voo. Até o Centro ou o porto a margem é urbana; até Campo Grande, a 262 pesa mais que o mapa. O passageiro não cruza o saguão atrás de uma placa genérica. O orçamento sai sob consulta.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta o porto e voa pelo CMG',
    'faq' => [
        ['pergunta' => 'Corumbá é interior de Campo Grande?', 'resposta' => 'Não. É município próprio, na fronteira e no Pantanal. O CGR fica na capital; o saguão daqui é o CMG. São pedidos distintos.'],
        ['pergunta' => 'O aeroporto de Corumbá fica longe do Centro?', 'resposta' => 'É trecho urbano. Marcamos margem: o acesso ao CMG e o horário de pico alteram o intervalo até o porto.'],
        ['pergunta' => 'Vocês levam até a fronteira com a Bolívia?', 'resposta' => 'Sim, quando o ponto entra no roteiro. Documento e cancela entram no pedido; sem isso, o recuo da fronteira não libera.'],
        ['pergunta' => 'O Pantanal entra automaticamente no traslado?', 'resposta' => 'Não. Fazenda, rio ou mirante só entram se estiverem no itinerário. Combine o ponto de espera; não é passeio no meio da pauta.'],
        ['pergunta' => 'Vocês fazem Centro, Popular Nova e o porto no mesmo dia?', 'resposta' => 'Sim. Informe a ordem e o nome do hotel. Um motorista articula os três recuos.'],
    ],
    'cta' => [
        'titulo' => 'Separe o porto da pauta de Campo Grande',
        'texto' => 'O orçamento de Corumbá sai sob consulta. Centro, fronteira e CMG no mesmo recado.',
        'botao' => 'Pedir motorista em Corumbá',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'mato-grosso-do-sul', 'ancora' => 'Campo Grande, Dourados e o Pantanal'],
        ['tipo' => 'cidade', 'estado' => 'mato-grosso-do-sul', 'cidade' => 'campo-grande', 'ancora' => 'Centro, Cidade Morena e o aeroporto CGR'],
        ['tipo' => 'cidade', 'estado' => 'mato-grosso-do-sul', 'cidade' => 'dourados', 'ancora' => 'Centro, Jardim América e o aeroporto DOU'],
    ],
];
