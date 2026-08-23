<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Serra',
    'geo' => ['lat' => -20.1286, 'lng' => -40.3074],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Serra',
    'seo' => [
        'title' => 'Carro executivo em Serra: Laranjeiras, Centro e VIX',
        'description' => 'Motorista executivo em Serra para Laranjeiras, Jacaraípe, Centro, Civit e o aeroporto VIX. Grande Vitória, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo em Laranjeiras, em Jacaraípe e no VIX',
        'og_description' => 'Carro com motorista na Serra capixaba: hotel, Civit e o terminal Eurico Salles.',
        'og_image_alt' => 'Sedan executivo em avenida de Serra no Espírito Santo',
    ],
    'kicker' => 'Grande Vitória · ES',
    'h1' => 'De Laranjeiras ao VIX sem perder a janela do Civit',
    'faixas' => [
        [
            'h2' => 'Serra se mede em Civit e em orla — o app não lê a Terceira Ponte',
            'texto' => 'Hotel em Laranjeiras ou em Jacaraípe, reunião no Civit e voo no Eurico de Aguiar Salles (VIX) cabem no mesmo dia se o motorista já saiu com a ordem da Nordelina e da Darly Santos, não com o atalho da hora.',
        ],
        [
            'h2' => 'Três recortes, um relógio de Grande Vitória',
            'itens' => [
                ['h3' => 'Laranjeiras, Serra Sede e o shopping', 'texto' => 'Hotéis e torres. Informe o nome; “em Laranjeiras” não define o recuo do condomínio.'],
                ['h3' => 'Civit I e II', 'texto' => 'Plantas e logística. Protocolo de portaria entra no roteiro junto com o turno.'],
                ['h3' => 'Jacaraípe, Manguinhos e a orla norte', 'texto' => 'Pernoite e visita combinada. O recuo da praia não é o da sede.'],
            ],
        ],
        [
            'h2' => 'Rotas de pauta, Civit e a ilha',
            'texto' => 'VIX → hotel em Laranjeiras → Civit → Jacaraípe só se a orla estiver no roteiro. Vitória, Vila Velha e a Terceira Ponte entram como recorte da Grande Vitória, com margem de ponte.',
        ],
        [
            'h2' => 'Eurico Salles — VIX na ilha vizinha',
            'texto' => 'O terminal fica em Goiabeiras, na ilha de Vitória. Combinamos o voo. A espera no desembarque integra o trecho VIX; até Laranjeiras a Darly Santos pesa mais que o mapa.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta a Serra e o VIX',
    'faq' => [
        ['pergunta' => 'O aeroporto fica em Serra?', 'resposta' => 'O VIX fica em Goiabeiras, na ilha de Vitória. O trecho até Laranjeiras entra no roteiro com margem para a Darly Santos.'],
        ['pergunta' => 'O motorista espera no VIX se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês entram no Civit com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, a cancela não libera.'],
        ['pergunta' => 'Dá para ir a Jacaraípe e à Praia do Canto no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. A orla de Serra e a ilha são recortes distintos; a ponte pesa no horário.'],
    ],
    'cta' => [
        'titulo' => 'Diga se o embarque é Laranjeiras ou o VIX',
        'texto' => 'O orçamento de Serra sai sob consulta. Civit, orla e terminal no mesmo recado.',
        'botao' => 'Pedir traslado em Serra',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'espirito-santo', 'ancora' => 'O circuito das quatro cidades capixabas'],
        ['tipo' => 'cidade', 'estado' => 'espirito-santo', 'cidade' => 'vitoria', 'ancora' => 'Praia do Canto, Suá e o Eurico Salles'],
        ['tipo' => 'cidade', 'estado' => 'espirito-santo', 'cidade' => 'vila-velha', 'ancora' => 'Praia da Costa, Penha e a Terceira Ponte'],
    ],
];
