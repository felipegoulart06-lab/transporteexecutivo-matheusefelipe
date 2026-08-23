<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Ananindeua',
    'geo' => ['lat' => -1.3656, 'lng' => -48.3743],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Ananindeua',
    'seo' => [
        'title' => 'RMB: motorista em Ananindeua, Cidade Nova e BEL',
        'description' => 'Motorista em Ananindeua para Cidade Nova, Coqueiro, Centro, Maguari e o trecho até o Val-de-Cans. Município da RMB, não bairro de Belém. Orçamento sob consulta.',
        'og_title' => 'Carro na Cidade Nova, no Coqueiro e no recuo até o BEL',
        'og_description' => 'Traslado na RMB: Ananindeua com endereço próprio, hotel na Cidade Nova e o Val-de-Cans em Belém.',
        'og_image_alt' => 'Sedan executivo na BR-316 em Ananindeua, na Região Metropolitana de Belém',
    ],
    'kicker' => 'Região Metropolitana de Belém · PA',
    'h1' => 'Cidade Nova, Coqueiro e o BEL sem tratar Ananindeua como bairro de Belém',
    'intro' => 'Ananindeua é o segundo município da RMB, colado a Belém pela BR-316 — não um bairro da capital. Cidade Nova, Coqueiro, o Centro e Maguari pedem cidade e setor; o Val-de-Cans (BEL) fica no recorte belenense. O motorista sai com essa fronteira; o passageiro não trata o Coqueiro como Nazaré.',
    'blocos' => [
        [
            'h2' => 'Por que o pedido na RMB não se resolve com “me busca em Belém”',
            'texto' => 'A mancha é contínua; o município não. Quem dorme na Cidade Nova e reúne no Maguari precisa do nome do conjunto e do sentido da 316, não do atalho que o mapa desenha como se Ananindeua fosse um setor de Nazaré. O hotel entra só como embarque. O orçamento sai sob consulta.',
        ],
        [
            'h2' => 'Setores de Ananindeua onde o embarque mais se concentra',
            'itens' => [
                ['h3' => 'Cidade Nova', 'texto' => 'Conjuntos, comércio e hotel de passagem. Informe o conjunto e o bloco; “na Cidade Nova” não define o recuo da portaria nem o quarteirão da 316.'],
                ['h3' => 'Coqueiro', 'texto' => 'Eixo residencial e clínicas. O recuo do Coqueiro não é o do Centro de Ananindeua; rua e número evitam a volta no trevo errado.'],
                ['h3' => 'Centro de Ananindeua', 'texto' => 'Sede municipal e o calçadão próprio. Não é o Centro de Belém: informe o prédio. O sentido da via muda no pico da 316.'],
                ['h3' => 'Maguari', 'texto' => 'Pauta mais interna da malha. Quando o dia mistura Maguari, Cidade Nova e o BEL, a ordem das vias pesa mais que a distância no mapa.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta ananindeuense mais pede',
        'itens' => [
            ['titulo' => 'Hotel na Cidade Nova → Coqueiro → Centro', 'texto' => 'Três recuos no mesmo município. Um motorista articula o conjunto, o Coqueiro e a sede se a ordem já estiver no roteiro.'],
            ['titulo' => 'Ananindeua → Val-de-Cans (BEL)', 'texto' => 'O terminal fica em Belém. Combinamos o voo. A BR-316 e a entrada da capital mudam o intervalo; não é o mesmo recuo do Maguari.'],
            ['titulo' => 'Maguari → Cidade Nova no mesmo expediente', 'texto' => 'Pauta interna. Informe o conjunto; o autocomplete costuma apontar para o bairro homônimo na capital.'],
            ['titulo' => 'Ananindeua → Santarém no mesmo recado', 'texto' => 'STM entra como outro voo ou como viagem longa, não como segunda corrida urbana da 316. Horário sob consulta.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta a RMB a partir de Ananindeua',
    'faq' => [
        ['pergunta' => 'Ananindeua é bairro de Belém?', 'resposta' => 'Não. É município próprio da RMB. Cidade Nova, Coqueiro, Centro e Maguari pedem cidade no endereço; o recuo não se resolve com “em Belém”.'],
        ['pergunta' => 'O aeroporto Val-de-Cans fica em Ananindeua?', 'resposta' => 'Não. O BEL fica em Belém. O trecho até o terminal entra no roteiro com margem para a BR-316 e para a entrada da capital.'],
        ['pergunta' => 'Vocês fazem Cidade Nova, Coqueiro e Maguari no mesmo dia?', 'resposta' => 'Sim. Informe o conjunto e a ordem. Um carro articula os três recuos sem três aceites.'],
        ['pergunta' => 'Dá para ir a Nazaré ou ao Umarizal depois do hotel?', 'resposta' => 'Sim, quando Belém entra no roteiro. A mancha é contínua; o município muda. O horário sai sob consulta.'],
        ['pergunta' => 'O hotel na Cidade Nova conta como ponto conveniado?', 'resposta' => 'Não. O hotel entra só como embarque: nome, conjunto e recuo. O orçamento sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Marque Cidade Nova no mesmo recado do BEL',
        'texto' => 'O orçamento de Ananindeua sai sob consulta. Coqueiro, Maguari e Val-de-Cans no mesmo WhatsApp.',
        'botao' => 'Pedir carro em Ananindeua',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'para', 'ancora' => 'Belém, Santarém e o recorte paraense'],
        ['tipo' => 'cidade', 'estado' => 'para', 'cidade' => 'belem', 'ancora' => 'Nazaré, Batista Campos e o Val-de-Cans'],
        ['tipo' => 'cidade', 'estado' => 'para', 'cidade' => 'santarem', 'ancora' => 'Centro, Aldeia e o aeroporto STM'],
    ],
];
