<?php

declare(strict_types=1);

return [
    'layout' => 'dunas',
    'cidade_nome' => 'Fortaleza',
    'geo' => ['lat' => -3.73186, 'lng' => -38.5267],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Fortaleza',
    'seo' => [
        'title' => 'Motorista executivo em Fortaleza: Meireles, Aldeota e FOR',
        'description' => 'Carro com motorista em Fortaleza para Meireles, Aldeota, Mucuripe e o aeroporto Pinto Martins. Horário combinado e orçamento sob consulta.',
        'og_title' => 'Traslado executivo na Aldeota, no Meireles e no aeroporto FOR',
        'og_description' => 'Motorista para agendas em Fortaleza: hotel na orla, reunião na Aldeota e o terminal Pinto Martins.',
        'og_image_alt' => 'Carro executivo em avenida da orla de Fortaleza',
    ],
    'kicker' => 'Capital cearense · CE',
    'h1' => 'Meireles de manhã, Aldeota ao meio-dia, FOR no fim da tarde',
    'trilha' => [
        'h2' => 'Fortaleza se lê em avenida, não em atalho de app',
        'texto' => 'A capital cearense alinha hotel no Meireles, escritório na Aldeota e voo no Pinto Martins. A Beira-Mar e a Santos Dumont (a avenida, não o aeroporto carioca) mudam o relógio. O motorista executivo sai com essa malha na cabeça; o passageiro não discute faixa com o GPS.',
    ],
    'chips' => [
        'h2' => 'Onde o embarque fortalezense mais se repete',
        'itens' => ['Meireles', 'Aldeota', 'Mucuripe', 'Praia de Iracema', 'Papicu', 'Aeroporto Pinto Martins'],
    ],
    'historias' => [
        [
            'h2' => 'A orla como hotel, não como passeio',
            'texto' => 'Meireles e Mucuripe concentram pernoite executivo. O recuo na Beira-Mar pede o nome do hotel. “Na Praia de Iracema” não define a entrada de serviço.',
        ],
        [
            'h2' => 'Aldeota e o intervalo do almoço',
            'texto' => 'Torres e clínicas. Deslocamentos curtos que esticam no semáforo da Santos Dumont. Um carro à disposição cobre reunião, almoço e o retorno ao hotel sem nova chamada.',
        ],
        [
            'h2' => 'Pinto Martins — FOR',
            'texto' => 'O aeroporto fica no recorte urbano, com acesso que muda no pico. Combinamos o voo. A espera no desembarque integra o trecho FOR.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Pinto Martins',
    'faq' => [
        ['pergunta' => 'O aeroporto de Fortaleza fica longe do Meireles?', 'resposta' => 'É trecho urbano. Marcamos margem mesmo assim: a avenida e o horário de pico alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no FOR se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no roteiro e a espera no saguão faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem Aldeota, Meireles e o aeroporto no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. A Santos Dumont e a Beira-Mar pesam mais que o quilômetro no mapa.'],
        ['pergunta' => 'Dá para incluir o Centro no roteiro?', 'resposta' => 'Sim, com o endereço da sede. O sentido das vias do Centro pede ponto de espera combinado.'],
    ],
    'cta' => [
        'titulo' => 'Una a Aldeota ao horário do Pinto Martins',
        'texto' => 'O orçamento de Fortaleza sai sob consulta. Orla, reunião e FOR no mesmo WhatsApp.',
        'botao' => 'Pedir carro em Fortaleza',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'ceara', 'ancora' => 'Juazeiro, Sobral e o recorte cearense'],
        ['tipo' => 'cidade', 'estado' => 'pernambuco', 'cidade' => 'recife', 'ancora' => 'Boa Viagem, pontes e o Guararapes'],
        ['tipo' => 'cidade', 'estado' => 'bahia', 'cidade' => 'salvador', 'ancora' => 'Barra, Paralela e o Luís Eduardo Magalhães'],
    ],
];
