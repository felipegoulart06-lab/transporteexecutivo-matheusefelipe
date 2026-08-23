<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Santa Maria',
    'geo' => ['lat' => -29.6868, 'lng' => -53.8149],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Santa Maria',
    'seo' => [
        'title' => 'Motorista executivo em Santa Maria: Centro, Camobi e RIA',
        'description' => 'Carro com motorista em Santa Maria para o Centro, Camobi, Nossa Senhora e o aeroporto Santa Maria. Campus da UFSM, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado no Centro de Santa Maria, no Camobi e no aeroporto RIA',
        'og_description' => 'Motorista no centro do Rio Grande: hotel, pauta no campus e o terminal RIA.',
        'og_image_alt' => 'Sedan executivo em avenida de Santa Maria',
    ],
    'kicker' => 'Centro gaúcho · RS',
    'h1' => 'Do RIA ao Camobi sem perder a pauta no Centro',
    'lead' => 'Santa Maria concentra universidade, quartel e o aeroporto Santa Maria (RIA). O motorista segura a Rio Branco e a Presidente Vargas; o passageiro segura a pauta — não a vaga na porta do hotel.',
    'contexto' => [
        'h2' => 'A cidade cobra bairro e campus, não “no centro”',
        'texto' => [
            'Centro, Camobi, Nossa Senhora de Lourdes e Nossa Senhora do Rosário não compartilham o mesmo recuo. Hotel (Ibis, similares), reunião no Centro e voo no RIA cabem no mesmo expediente se a ordem da avenida já estiver no roteiro.',
            'O recorte é a rotina do interior gaúcho: embarque na portaria, espera discreta e chegada no terminal certo. Quando a pauta aponta para Porto Alegre, a BR-287 deixa de ser só urbana.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos da cidade onde o embarque mais se concentra',
        'itens' => [
            ['h3' => 'Centro e a Rio Branco', 'texto' => 'Sede e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde.'],
            ['h3' => 'Camobi e o campus da UFSM', 'texto' => 'Pauta acadêmica. O recuo pede bloco e portaria, não “na universidade”.'],
            ['h3' => 'Nossa Senhora de Lourdes e o shopping', 'texto' => 'Hotéis, torres e clínicas. Deslocamentos curtos que esticam na Presidente Vargas.'],
            ['h3' => 'Nossa Senhora do Rosário e o Patronato', 'texto' => 'Pauta residencial. O recuo pede rua e número.'],
        ],
    ],
    'aeroportos' => [
        'h2' => 'Santa Maria — RIA no recorte da cidade',
        'itens' => [
            ['h3' => 'Santa Maria — RIA', 'texto' => 'Terminal compartilhado com a Base Aérea. Combinamos o voo. A espera no desembarque integra o trecho RIA.'],
            ['h3' => 'Quando a pauta aponta para Porto Alegre', 'texto' => 'O trecho Santa Maria–POA não é o mesmo pedido urbano. Se a reunião vaza pela BR-287, o orçamento sai à parte.'],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que a agenda santa-mariense mais pede',
        'itens' => [
            ['titulo' => 'RIA → hotel no Centro', 'texto' => 'Pouso e pernoite. Informe o nome do hotel e se há vaga de visitante.'],
            ['titulo' => 'Centro → Camobi → UFSM', 'texto' => 'Sede e campus. Um motorista cobre os dois se a ordem já estiver no roteiro.'],
            ['titulo' => 'Santa Maria → Porto Alegre', 'texto' => 'BR-287. Não é o recorte urbano do Centro; o horário sai sob consulta.'],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na grade em Santa Maria',
        'passos' => [
            ['titulo' => 'Bairro e número', 'texto' => 'Centro, Camobi ou Lourdes. Autocomplete não resolve bloco com dois acessos.'],
            ['titulo' => 'Hotel ou RIA', 'texto' => 'Diga se o embarque é o aeroporto ou a portaria do hotel.'],
            ['titulo' => 'Confirmação', 'texto' => 'Nome e DDD no WhatsApp. Devolvemos o horário de apresentação.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no RIA',
    'faq' => [
        ['pergunta' => 'O aeroporto de Santa Maria fica longe do Centro?', 'resposta' => 'É trecho urbano. Marcamos margem: a Rio Branco e o horário de pico alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no RIA se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem Centro, Camobi e a UFSM no mesmo dia?', 'resposta' => 'Sim. Informe o bloco. Um motorista articula os três recuos.'],
        ['pergunta' => 'Dá para seguir a Porto Alegre depois do hotel?', 'resposta' => 'Sim, como viagem pela BR-287. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Camobi ao horário do RIA',
        'texto' => 'O orçamento de Santa Maria sai sob consulta. Centro, campus e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Santa Maria',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-grande-do-sul', 'ancora' => 'Serra, Porto e o recorte gaúcho'],
        ['tipo' => 'cidade', 'estado' => 'rio-grande-do-sul', 'cidade' => 'porto-alegre', 'ancora' => 'Moinhos, Centro Histórico e o Salgado Filho'],
        ['tipo' => 'cidade', 'estado' => 'rio-grande-do-sul', 'cidade' => 'pelotas', 'ancora' => 'Centro, Areal e o João Simões Lopes Neto'],
    ],
];
