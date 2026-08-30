<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Caxias do Sul',
    'geo' => ['lat' => -29.1685, 'lng' => -51.1796],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Caxias do Sul',
    'seo' => [
        'title' => 'Motorista em Caxias do Sul: Pelegrino, Centro e CXJ',
        'description' => 'Carro com motorista em Caxias do Sul para São Pelegrino, Centro, Universitário e o aeroporto Hugo Cantergiani (CXJ). BR-116, serra e Porto Alegre sob consulta.',
        'og_title' => 'Traslado no São Pelegrino, no Centro e no aeroporto CXJ',
        'og_description' => 'O CXJ fica em Caxias do Sul. O carro articula hotel, pauta urbana e o trecho a Porto Alegre pela serra.',
        'og_image_alt' => 'Sedan executivo em via da Serra Gaúcha em Caxias do Sul',
    ],
    'kicker' => 'Serra Gaúcha · RS',
    'h1' => 'Do CXJ ao São Pelegrino sem perder a pauta no Centro',
    'olho' => 'Caxias do Sul é indústria na serra e desnível no asfalto. O motorista segura a BR-116 e o recuo do Hugo Cantergiani (CXJ); o passageiro segura a reunião — e o trecho a Porto Alegre, quando a pauta vaza da cidade.',
    'capitulos' => [
        [
            'h2' => 'São Pelegrino, Centro e Universitário não se trocam no GPS',
            'texto' => 'Hotel no São Pelegrino, reunião no Centro e embarque no Universitário cabem no mesmo dia se o endereço de cada porta já saiu no roteiro. O Aeroporto Regional Hugo Cantergiani (CXJ) opera no município. Porto Alegre não é a segunda corrida urbana: entra como viagem pela serra, com margem de BR-116. Informe o nome do hotel e o ponto de embarque.',
        ],
        [
            'h2' => 'Onde o embarque caxiense mais se concentra',
            'itens' => [
                ['h3' => 'São Pelegrino', 'texto' => 'Hotéis e o desnível da Júlio de Castilhos. Informe o prédio; o recuo da orla comercial não é o da planta.'],
                ['h3' => 'Centro', 'texto' => 'Sede e o miolo. O sentido das vias muda no fim da tarde; “no Centro” não define a porta.'],
                ['h3' => 'Universitário', 'texto' => 'Bairro de embarque residencial e clínico. A sede da UCS fica na Rua Francisco Getúlio Vargas, no Petrópolis — não neste bairro. Diga o campus e a portaria.'],
            ],
        ],
        [
            'h2' => 'Hugo Cantergiani — CXJ, e o salto a Porto Alegre',
            'texto' => 'O aeroporto regional fica no município de Caxias do Sul. Combinamos o voo. A espera no desembarque integra o trecho CXJ até o São Pelegrino, o Centro ou o Universitário. Quem segue a Porto Alegre combina o trecho à parte: é viagem de serra, não o mesmo orçamento do miolo urbano.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que evitam atraso na serra',
        'itens' => [
            ['num' => '01', 'titulo' => 'Bairro e prédio', 'texto' => 'São Pelegrino, Centro ou Universitário. “Em Caxias” não define o recuo da portaria.'],
            ['num' => '02', 'titulo' => 'Voo no CXJ', 'texto' => 'Número e horário. O carro sai com margem, não no minuto do check-in.'],
            ['num' => '03', 'titulo' => 'Cidade ou Porto Alegre', 'texto' => 'O trecho a Porto Alegre entra como viagem de BR-116. O urbano é outro orçamento.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Hugo Cantergiani',
    'faq' => [
        ['pergunta' => 'O aeroporto de Caxias do Sul fica no município?', 'resposta' => 'Sim. O Hugo Cantergiani (CXJ) opera em Caxias do Sul. Marcamos margem: o desnível e o horário de pico alteram o intervalo até o Centro ou o São Pelegrino.'],
        ['pergunta' => 'O motorista espera no CXJ se o voo atrasar?', 'resposta' => 'Sim. Combinamos o CXJ com o número do voo; a espera no Hugo Cantergiani integra o trecho até o São Pelegrino, o Centro ou o Universitário.'],
        ['pergunta' => 'Vocês fazem São Pelegrino, Centro e Universitário no mesmo dia?', 'resposta' => 'Sim. Informe a ordem e, se a pauta for a UCS, o recuo na Getúlio Vargas, no Petrópolis.'],
        ['pergunta' => 'Dá para seguir a Porto Alegre depois do hotel?', 'resposta' => 'Sim, como viagem pela serra e pela BR-116. Não é o mesmo recorte do Centro caxiense; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Marque o CXJ no mesmo recado do hotel',
        'texto' => 'Informe o bairro em Caxias do Sul, se há voo no Hugo Cantergiani e se o destino vaza a Porto Alegre. A apresentação volta sob consulta.',
        'botao' => 'Pedir motorista em Caxias do Sul',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-grande-do-sul', 'ancora' => 'Serra, Porto e o recorte gaúcho'],
        ['tipo' => 'cidade', 'estado' => 'rio-grande-do-sul', 'cidade' => 'porto-alegre', 'ancora' => 'Moinhos, Centro Histórico e o Salgado Filho'],
        ['tipo' => 'cidade', 'estado' => 'santa-catarina', 'cidade' => 'joinville', 'ancora' => 'Centro, América e o JOI'],
    ],
];
