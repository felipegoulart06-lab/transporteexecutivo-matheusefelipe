<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Maringá',
    'geo' => ['lat' => -23.4205, 'lng' => -51.9333],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Maringá',
    'seo' => [
        'title' => 'Motorista executivo em Maringá: Zona 7, Centro e MGF',
        'description' => 'Carro com motorista em Maringá para a Zona 7, Centro, Jardim Aclimação e o aeroporto Sílvio Name Júnior. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo na Zona 7, no Centro e no aeroporto MGF',
        'og_description' => 'Motorista na cidade planejada: hotel na Zona 7, pauta no Centro e o terminal MGF.',
        'og_image_alt' => 'Sedan executivo em avenida arborizada de Maringá',
    ],
    'kicker' => 'Noroeste paranaense · PR',
    'h1' => 'Do MGF à Zona 7 sem perder a reunião no Centro',
    'lead' => 'Maringá é radiocêntrica no traçado e curta no relógio quando o destino é a Zona 7. O motorista segura a Colombo e a Mandacaru; o passageiro segura a pauta — não a vaga na porta do hotel.',
    'contexto' => [
        'h2' => 'A cidade planejada cobra zona e número, não “no centro”',
        'texto' => [
            'Centro, Zona 7, Jardim Aclimação e o aeroporto Sílvio Name Júnior (MGF) cabem no mesmo expediente se a ordem das avenidas já estiver no roteiro. Hotel (Deville, similar) e a Catedral concentram embarque.',
            'O recorte é a rotina do noroeste: embarque na portaria, espera discreta e chegada no terminal certo. Quando a pauta aponta para Londrina ou à BR-376, o trecho deixa de ser só urbano.',
        ],
    ],
    'bairros' => [
        'h2' => 'Zonas da cidade onde o embarque mais se concentra',
        'itens' => [
            ['h3' => 'Centro e a Catedral', 'texto' => 'Em Maringá, sede e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde.'],
            ['h3' => 'Zona 7 e o shopping', 'texto' => 'Hotéis, torres e clínicas. Deslocamentos curtos que esticam no semáforo da Colombo.'],
            ['h3' => 'Jardim Aclimação e o Parque do Ingá', 'texto' => 'Pauta residencial e visita combinada. O recuo pede rua e número; “no Ingá” não basta.'],
            ['h3' => 'UEM e o campus', 'texto' => 'Universidade. Protocolo de portaria entra no roteiro junto com o bloco.'],
        ],
    ],
    'aeroportos' => [
        'h2' => 'Sílvio Name Júnior — MGF no meio da pauta',
        'itens' => [
            ['h3' => 'Maringá — MGF', 'texto' => 'Terminal da cidade, no recorte urbano. Combinamos o voo. A espera no desembarque integra o trecho MGF.'],
            ['h3' => 'Quando a pauta aponta para Londrina', 'texto' => 'O trecho Maringá–Londrina não é o mesmo pedido urbano. Se a reunião vaza pela BR-376, o orçamento sai à parte.'],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que a agenda maringaense mais pede',
        'itens' => [
            ['titulo' => 'MGF → hotel na Zona 7', 'texto' => 'Em Maringá, pouso e pernoite. Informe o nome do hotel e se há vaga de visitante.'],
            ['titulo' => 'Zona 7 → Centro → Parque do Ingá', 'texto' => 'Reunião, sede e um intervalo só se estiver no roteiro. Um motorista cobre os três.'],
            ['titulo' => 'Hotel → Londrina no mesmo dia', 'texto' => 'Quando a pauta cruza o norte paranaense, o trecho deixa de ser urbano. Horário sob consulta.'],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na grade em Maringá',
        'passos' => [
            ['titulo' => 'Zona e número', 'texto' => 'Zona 7, Centro ou Aclimação. Autocomplete não resolve avenida com dois acessos.'],
            ['titulo' => 'Hotel ou MGF', 'texto' => 'Em Maringá, diga se o embarque é o aeroporto ou a portaria do hotel.'],
            ['titulo' => 'Confirmação', 'texto' => 'Em Maringá, nome e DDD no WhatsApp. Devolvemos o horário de apresentação.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no MGF',
    'faq' => [
        ['pergunta' => 'O aeroporto de Maringá fica longe da Zona 7?', 'resposta' => 'É trecho urbano. Marcamos margem: a Colombo e o horário de pico alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no MGF se o voo atrasar?', 'resposta' => 'Sim. Em Maringá, o número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem Zona 7, Centro e o Ingá no mesmo dia?', 'resposta' => 'Sim. Em Maringá, informe a ordem. Um carro à disposição evita três aceites entre as avenidas.'],
        ['pergunta' => 'Dá para seguir a Londrina depois do hotel?', 'resposta' => 'Sim, como viagem. Não é o mesmo recorte da Zona 7; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte a Zona 7 ao horário do MGF',
        'texto' => 'O orçamento de Maringá sai sob consulta. Centro, hotel e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Maringá',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'parana', 'ancora' => 'Foz, Londrina e o recorte paranaense'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'londrina', 'ancora' => 'Gleba Palhano, Centro e o LDB'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'curitiba', 'ancora' => 'Batel, Centro Cívico e o Afonso Pena'],
    ],
];
