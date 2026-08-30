<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Cascavel',
    'geo' => ['lat' => -24.9578, 'lng' => -53.4595],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Cascavel',
    'seo' => [
        'title' => 'Traslado executivo em Cascavel: Centro, Country e CAC',
        'description' => 'Motorista executivo em Cascavel para o Centro, Country, Cancelli e o aeroporto Adalberto Mendes da Silva. Oeste paranaense, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro de Cascavel, no Country e no CAC',
        'og_description' => 'Traslado no oeste do Paraná: hotel no Country, pauta no Centro e o terminal CAC.',
        'og_image_alt' => 'Sedan executivo em avenida de Cascavel',
    ],
    'kicker' => 'Oeste paranaense · PR',
    'h1' => 'Do CAC ao Country sem perder a reunião no Centro',
    'intro' => 'Cascavel concentra agronegócio, campus e o aeroporto Adalberto Mendes da Silva (CAC). Hotel no Country ou no Centro, reunião no Cancelli e voo no CAC cabem no mesmo expediente se o motorista já saiu com a ordem da Brasil e da Tito Muffato, não com o aceite do minuto.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Cascavel não é “pegar um carro no Centro”',
            'texto' => 'Centro, Country, Cancelli e a Unioeste não compartilham o mesmo recuo. Quem tem pauta na cooperativa e check-out no Bourbon ou no Ibis precisa de um motorista que já conhece o sentido da Brasil, não o atalho do app.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque cascavelense mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Brasil', 'texto' => 'Em Cascavel, sede, hotel e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde.'],
                ['h3' => 'Country, Cancelli e o shopping', 'texto' => 'Hotéis e torres. Deslocamentos curtos que esticam no semáforo da Tito Muffato.'],
                ['h3' => 'Unioeste e o campus', 'texto' => 'Em Cascavel, pauta acadêmica. O recuo pede bloco e portaria, não “na universidade”.'],
                ['h3' => 'Aeroporto — CAC', 'texto' => 'O Adalberto Mendes da Silva fica no recorte da cidade. Combinamos o voo. A espera no desembarque integra o trecho.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta cascavelense mais pede',
        'itens' => [
            ['titulo' => 'CAC → hotel no Country', 'texto' => 'Em Cascavel, pouso e pernoite. Informe o nome do hotel e se há vaga de visitante.'],
            ['titulo' => 'Country → Centro → Unioeste', 'texto' => 'Em Cascavel, reunião, sede e campus. Um motorista cobre os três se a ordem já estiver no roteiro.'],
            ['titulo' => 'Cascavel → Toledo ou Foz do Iguaçu', 'texto' => 'Quando a pauta vaza para o oeste, o trecho deixa de ser só urbano. Orçamento à parte.'],
            ['titulo' => 'Hotel → planta ou cooperativa', 'texto' => 'Portaria e turno. Envie o nome na lista; sem isso, o recuo não libera.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no CAC',
    'faq' => [
        ['pergunta' => 'O aeroporto de Cascavel fica longe do Country?', 'resposta' => 'É trecho urbano. Marcamos margem: a Brasil e o horário de pico alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no CAC se o voo atrasar?', 'resposta' => 'Sim. Em Cascavel, o número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Em Cascavel, vocês entram na cooperativa com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, o recuo não libera.'],
        ['pergunta' => 'Dá para seguir a Foz do Iguaçu depois do hotel?', 'resposta' => 'Sim, como viagem. Não é o mesmo recorte do Country; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Country ao horário do CAC',
        'texto' => 'O orçamento de Cascavel sai sob consulta. Centro, campus e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Cascavel',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'parana', 'ancora' => 'Foz, Londrina e o recorte paranaense'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'foz-do-iguacu', 'ancora' => 'Cataratas, Itaipu e o aeroporto IGU'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'curitiba', 'ancora' => 'Batel, Centro Cívico e o Afonso Pena'],
    ],
];
