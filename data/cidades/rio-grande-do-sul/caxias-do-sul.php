<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Caxias do Sul',
    'geo' => ['lat' => -29.1685, 'lng' => -51.1796],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Caxias do Sul',
    'seo' => [
        'title' => 'Carro executivo em Caxias do Sul: Centro, Pelegrino e CXJ',
        'description' => 'Carro com motorista em Caxias do Sul para o Centro, São Pelegrino, Panazzolo e o aeroporto Hugo Cantergiani. Serra, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Centro de Caxias, no São Pelegrino e no CXJ',
        'og_description' => 'Motorista na Serra Gaúcha: hotel, pauta industrial e o terminal CXJ.',
        'og_image_alt' => 'Sedan executivo em via da Serra Gaúcha em Caxias do Sul',
    ],
    'kicker' => 'Serra Gaúcha · RS',
    'h1' => 'Do CXJ ao São Pelegrino sem perder a pauta no Centro',
    'olho' => 'Caxias do Sul é indústria na serra e desnível no asfalto. O motorista segura a RS-122 e a Matteotti; o passageiro segura a reunião — e o horário do voo, quando houver.',
    'capitulos' => [
        [
            'h2' => 'A capital da serra não se troca com Gramado no mesmo recuo',
            'texto' => 'Hotel no São Pelegrino ou no Centro, reunião na zona industrial e voo no Hugo Cantergiani (CXJ) cabem no mesmo dia. Gramado, Canela e Bento Gonçalves não são o mesmo pedido urbano: entram como viagem de serra, com margem de RS-235.',
        ],
        [
            'h2' => 'Onde o embarque caxiense mais se concentra',
            'itens' => [
                ['h3' => 'Centro e o São Pelegrino', 'texto' => 'Hotéis (Ibis, similar), sede e o desnível. Informe o prédio; a Dante Alighieri não é o recuo da planta.'],
                ['h3' => 'Panazzolo, Desvio Rizzo e a zona industrial', 'texto' => 'Plantas e o eixo da RSC-453. Protocolo de portaria entra no roteiro junto com o turno.'],
                ['h3' => 'Sagrada Família e o Shopping', 'texto' => 'Clínicas e jantar. Deslocamentos curtos que esticam no semáforo da Matteotti.'],
            ],
        ],
        [
            'h2' => 'Rotas de trabalho, vinícola e porta da serra',
            'texto' => 'CXJ → hotel no São Pelegrino → Centro → planta só se a ordem estiver no roteiro. Outro clássico: hotel → Gramado ou Vale dos Vinhedos como viagem, não como corrida urbana. Quem segue a Farroupilha combina o trecho à parte.',
        ],
        [
            'h2' => 'Hugo Cantergiani — CXJ',
            'texto' => 'O aeroporto regional fica no recorte da cidade. Combinamos o voo. A espera no desembarque integra o trecho CXJ. Até o Centro ou o São Pelegrino, o desnível pesa mais que o quilômetro no mapa.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que evitam atraso na serra',
        'itens' => [
            ['num' => '01', 'titulo' => 'Bairro e prédio', 'texto' => 'São Pelegrino ou Centro. “Em Caxias” não define o recuo da portaria.'],
            ['num' => '02', 'titulo' => 'Voo no CXJ', 'texto' => 'Número e horário. O carro sai com margem, não no minuto do check-in.'],
            ['num' => '03', 'titulo' => 'Gramado ou cidade', 'texto' => 'Visita à serra turística entra como viagem. O urbano é outro orçamento.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Hugo Cantergiani',
    'faq' => [
        ['pergunta' => 'O aeroporto de Caxias fica longe do Centro?', 'resposta' => 'É trecho urbano. Marcamos margem: o desnível e o horário de pico alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no CXJ se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem o Vale dos Vinhedos no mesmo dia?', 'resposta' => 'Sim, quando Bento Gonçalves entra no roteiro. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
        ['pergunta' => 'Dá para seguir a Gramado depois do hotel?', 'resposta' => 'Sim, como viagem pela RS-235. A serra turística não é a segunda corrida urbana.'],
    ],
    'cta' => [
        'titulo' => 'Marque o CXJ no mesmo recado do hotel',
        'texto' => 'O orçamento de Caxias sai sob consulta. Serra, planta e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir traslado em Caxias do Sul',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-grande-do-sul', 'ancora' => 'Serra, Porto e o recorte gaúcho'],
        ['tipo' => 'cidade', 'estado' => 'rio-grande-do-sul', 'cidade' => 'porto-alegre', 'ancora' => 'Moinhos, Centro Histórico e o Salgado Filho'],
        ['tipo' => 'cidade', 'estado' => 'santa-catarina', 'cidade' => 'joinville', 'ancora' => 'Centro, América e o JOI'],
    ],
];
