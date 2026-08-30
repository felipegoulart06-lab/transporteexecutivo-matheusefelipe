<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'Ilhéus',
    'geo' => [
        'lat' => -14.7889,
        'lng' => -39.0465,
    ],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Ilhéus',
    'seo' => [
        'title' => 'Traslado executivo em Ilhéus: Centro e BA-262',
        'description' => 'Motorista executivo em Ilhéus: Centro, Pontal e Jorge Amado (IOS), no próprio município. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Embarque em Ilhéus: hotel, Centro e IOS',
        'og_description' => 'O motorista combina Centro com Jorge Amado (IOS), no próprio município. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Ilhéus',
    ],
    'kicker' => 'Sul da Bahia · BA',
    'h1' => 'Ilhéus — Centro de manhã, IOS quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Ilhéus',
    'faq' => [
        [
            'pergunta' => 'Em Ilhéus, o IOS fica no próprio município?',
            'resposta' => 'Sim. Em Ilhéus, Jorge Amado (IOS) fica no município. Informe o acesso via BA-262.',
        ],
        [
            'pergunta' => 'Em Ilhéus, vocês buscam em Centro?',
            'resposta' => 'Sim, em Ilhéus. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Ilhéus vocês fazem Itabuna?',
            'resposta' => 'Sim, saindo de Ilhéus. Itabuna não é o recorte de Centro; o horário pela BR-101 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Ilhéus o carro fica entre Centro e Pontal?',
            'resposta' => 'Sim, em Ilhéus. A hora à disposição cobre sede e hotel em Centro e orla em Pontal.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Ilhéus e o IOS',
        'texto' => 'Diga o ponto em Centro ou Pontal, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Ilhéus',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'bahia',
            'ancora' => 'Ilhéus e o recorte de Sul da Bahia',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'bahia',
            'cidade' => 'porto-seguro',
            'ancora' => 'Motorista em porto seguro',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'bahia',
            'cidade' => 'salvador',
            'ancora' => 'Motorista em salvador',
        ],
    ],
    'epigrafe' => 'Centro não é o mesmo recuo de Pontal. O motorista segura o acesso; o passageiro segura o horário.',
    'abertura' => [
        'h2' => 'Ilhéus: origem na orla, destino no terminal certo',
        'texto' => [
            'Ilhéus concentra Centro (sede e hotel) e Jorge Amado (IOS) no mesmo município. O motorista precisa do ponto de embarque e do IOS no mesmo recado — “me busca em Ilhéus” não define o recuo.',
            'Pontal pede orla. Iguape pede distrito. Quando Itabuna entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela BR-101.',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'Centro: o relógio do embarque',
            'texto' => 'Centro concentra sede e hotel. Informe nome do hotel.',
        ],
        [
            'h2' => 'Pontal e Iguape',
            'texto' => 'Pontal pede orla. Iguape pede distrito. A ordem muda o intervalo mais que o mapa.',
        ],
        [
            'h2' => 'Jorge Amado (IOS), no próprio município',
            'texto' => 'Jorge Amado (IOS) fica em Ilhéus. Acesso: BA-262. Combinamos o voo; a espera no desembarque integra o trecho.',
        ],
    ],
    'aeroportos' => [
        'h2' => 'Terminal e vazão a partir de Ilhéus',
        'itens' => [
            [
                'h3' => 'Jorge Amado — IOS',
                'texto' => 'Jorge Amado (IOS) fica em Ilhéus. Acesso: BA-262. Combinamos o voo; a espera no desembarque integra o trecho.',
            ],
            [
                'h3' => 'BA-262 e a vazão para Itabuna',
                'texto' => 'Itabuna e Porto Seguro aparecem no mesmo pedido de Ilhéus. Isso é viagem, não segunda corrida em Centro.',
            ],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque em Ilhéus',
        'lista' => [
            'Hotel, prédio ou empresa com nome — “em Centro” não basta.',
            'Qual terminal: IOS em Ilhéus.',
            'Se Itabuna entra depois, a ordem muda o recorte.',
        ],
    ],
];
