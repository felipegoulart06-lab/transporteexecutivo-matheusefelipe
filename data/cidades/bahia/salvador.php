<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Salvador',
    'geo' => ['lat' => -12.9718, 'lng' => -38.5011],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Salvador',
    'seo' => [
        'title' => 'Traslado executivo em Salvador: orla, Centro e SSA',
        'description' => 'Motorista executivo em Salvador para Barra, Caminho das Árvores, Centro e o aeroporto Luís Eduardo Magalhães. Orçamento sob consulta.',
        'og_title' => 'Carro com motorista entre a orla de Salvador e o aeroporto SSA',
        'og_description' => 'Traslado executivo na capital baiana: hotel na Barra, reunião no Iguatemi e o terminal SSA.',
        'og_image_alt' => 'Carro executivo em avenida litorânea de Salvador',
    ],
    'kicker' => 'Capital baiana · BA',
    'h1' => 'Da Barra ao SSA sem perder o horário da reunião',
    'faixas' => [
        [
            'h2' => 'Salvador se mede em ladeira e em paralelismo de orla',
            'texto' => 'A cidade não se cruza em linha reta. Hotel na Barra, reunião no Caminho das Árvores e voo no aeroporto Luís Eduardo Magalhães pedem um motorista que já saiu com margem — a Paralela e a Vale do Canela não perdoam o aceite tardio.',
        ],
        [
            'h2' => 'Três orlas, três relógios',
            'itens' => [
                ['h3' => 'Barra e Ondina', 'texto' => 'Hotel e evento. O recuo na orla enche em feriado; o nome do hotel evita a volta no Farol.'],
                ['h3' => 'Caminho das Árvores e Iguatemi', 'texto' => 'Torres e centro de convenções. O acesso pela Paralela muda o intervalo mais que a distância até a Barra.'],
                ['h3' => 'Centro e Comércio', 'texto' => 'Pauta institucional e desembarque no Elevador. Informe a ladeira e o ponto de espera; o GPS insiste no sentido errado.'],
            ],
        ],
        [
            'h2' => 'SSA — o terminal que não fica na Barra',
            'texto' => 'O Aeroporto Internacional de Salvador fica no trecho da Paralela, longe do Farol. Combinamos o voo e o saguão. A espera no desembarque integra o trecho; o passageiro não procura placa no meio do hall.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Luís Eduardo Magalhães',
    'faq' => [
        ['pergunta' => 'Quanto tempo entre a Barra e o aeroporto de Salvador?', 'resposta' => 'O intervalo depende da Paralela e do horário. Marcamos margem; não vendemos minuto fixo de aplicativo.'],
        ['pergunta' => 'Em Salvador, o motorista espera no SSA se o voo atrasar?', 'resposta' => 'Sim. Em Salvador, o número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem Barra, Iguatemi e o Centro no mesmo dia?', 'resposta' => 'Sim. A ordem dos três muda o tempo. Um motorista à disposição evita três aceites em ladeira.'],
        ['pergunta' => 'Dá para buscar no ferry e seguir ao aeroporto?', 'resposta' => 'Sim, com o horário da travessia e o do voo no mesmo recado. São dois relógios; o carro articula os dois.'],
    ],
    'cta' => [
        'titulo' => 'Diga se o embarque é orla ou Paralela',
        'texto' => 'O orçamento de Salvador sai sob consulta. Hotel, reunião e SSA no mesmo pedido.',
        'botao' => 'Pedir traslado em Salvador',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'bahia', 'ancora' => 'Feira, Costa do Descobrimento e o recorte baiano'],
        ['tipo' => 'cidade', 'estado' => 'pernambuco', 'cidade' => 'recife', 'ancora' => 'Recife Antigo, Boa Viagem e o REC'],
        ['tipo' => 'cidade', 'estado' => 'ceara', 'cidade' => 'fortaleza', 'ancora' => 'Meireles, Aldeota e o aeroporto FOR'],
    ],
];
