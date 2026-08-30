<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Salvador',
    'geo' => [
        'lat' => -12.9718,
        'lng' => -38.5011,
    ],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Salvador',
    'seo' => [
        'title' => 'Carro com motorista em Salvador: Caminho das Árvores e SSA',
        'description' => 'Carro com motorista em Salvador para Barra e Ondina, Caminho das Árvores e SSA. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Traslado em Salvador: Barra e Ondina e SSA',
        'og_description' => 'O motorista combina Barra e Ondina com Luís Eduardo Magalhães (SSA), no próprio município. Informe nome do hotel e a ladeira.',
        'og_image_alt' => 'Carro executivo em via de Salvador',
    ],
    'kicker' => 'Capital baiana · BA',
    'h1' => 'Em Salvador: do embarque em Barra e Ondina ao SSA',
    'faq_h2' => 'Dúvidas de quem embarca em Salvador',
    'faq' => [
        [
            'pergunta' => 'Em Salvador, o SSA fica no próprio município?',
            'resposta' => 'Sim. Em Salvador, Luís Eduardo Magalhães (SSA) fica no município. Informe o acesso via Paralela.',
        ],
        [
            'pergunta' => 'Em Salvador, vocês buscam em Barra e Ondina?',
            'resposta' => 'Sim, em Salvador. Envie nome do hotel e a ladeira em Barra e Ondina. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Salvador vocês fazem Lauro de Freitas?',
            'resposta' => 'Sim, saindo de Salvador. Lauro de Freitas não é o recorte de Barra e Ondina; o horário pela Vale do Canela sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Salvador o carro fica entre Barra e Ondina e Caminho das Árvores?',
            'resposta' => 'Sim, em Salvador. A hora à disposição cobre hotel na orla em Barra e Ondina e torre e convenções em Caminho das Árvores.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Salvador e o SSA',
        'texto' => 'Diga o ponto em Barra e Ondina ou Caminho das Árvores, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Salvador',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'bahia',
            'ancora' => 'Salvador e o recorte de Capital baiana',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'pernambuco',
            'cidade' => 'recife',
            'ancora' => 'Motorista em recife',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'ceara',
            'cidade' => 'fortaleza',
            'ancora' => 'Motorista em fortaleza',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'Salvador se cruza por Paralela, não em linha reta',
            'texto' => 'Salvador concentra Barra e Ondina (hotel na orla) e Luís Eduardo Magalhães (SSA) no mesmo município. O motorista precisa do ponto de embarque e do SSA no mesmo recado — “me busca em Salvador” não define o recuo.',
        ],
        [
            'h2' => 'Três eixos, três recuos',
            'itens' => [
                [
                    'h3' => 'Barra e Ondina',
                    'texto' => 'Origem frequente para hotel na orla. Informe nome do hotel e a ladeira. Barra e Ondina não compartilha o recuo de Caminho das Árvores.',
                ],
                [
                    'h3' => 'Caminho das Árvores',
                    'texto' => 'Origem frequente para torre e convenções. Informe nome do hotel e a ladeira. Caminho das Árvores não compartilha o recuo de Barra e Ondina.',
                ],
                [
                    'h3' => 'Centro e Comércio',
                    'texto' => 'Origem frequente para pauta institucional. Informe nome do hotel e a ladeira. Centro e Comércio não compartilha o recuo de Barra e Ondina.',
                ],
            ],
        ],
        [
            'h2' => 'Luís Eduardo Magalhães — SSA',
            'texto' => 'Luís Eduardo Magalhães (SSA) fica em Salvador. Acesso: Paralela. Combinamos o voo; a espera no desembarque integra o trecho.',
        ],
    ],
];
