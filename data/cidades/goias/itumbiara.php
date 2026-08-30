<?php

declare(strict_types=1);

return [
    'layout' => 'rio',
    'cidade_nome' => 'Itumbiara',
    'geo' => [
        'lat' => -18.4136,
        'lng' => -49.217,
    ],
    'imagem' => 'centro-oeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Itumbiara',
    'seo' => [
        'title' => 'Motorista executivo em Itumbiara: Centro e ITR',
        'description' => 'Carro com motorista em Itumbiara para Centro, Novo Horizonte e ITR. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Traslado em Itumbiara: Centro e ITR',
        'og_description' => 'O motorista combina Centro com Francisco Vilela do Amaral (ITR), no próprio município. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Itumbiara',
    ],
    'kicker' => 'Sul goiano · GO',
    'h1' => 'Itumbiara — Centro de manhã, ITR quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Itumbiara',
    'faq' => [
        [
            'pergunta' => 'Em Itumbiara, o ITR fica no próprio município?',
            'resposta' => 'Sim. Em Itumbiara, Francisco Vilela do Amaral (ITR) fica no município. Informe o acesso via BR-153.',
        ],
        [
            'pergunta' => 'Em Itumbiara, vocês buscam em Centro?',
            'resposta' => 'Sim, em Itumbiara. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Itumbiara vocês fazem Goiânia?',
            'resposta' => 'Sim, saindo de Itumbiara. Goiânia não é o recorte de Centro; o horário pela BR-452 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Itumbiara, ITR e GYN são o mesmo recorte?',
            'resposta' => 'Não, em Itumbiara. ITR fica em Itumbiara; GYN fica em Goiânia. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Itumbiara e o ITR',
        'texto' => 'Diga o ponto em Centro ou Novo Horizonte, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Itumbiara',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'goias',
            'ancora' => 'Itumbiara e o recorte de Sul goiano',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'goias',
            'cidade' => 'rio-verde',
            'ancora' => 'Motorista em rio verde',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'minas-gerais',
            'cidade' => 'uberlandia',
            'ancora' => 'Motorista em uberlandia',
        ],
    ],
    'corrente' => [
        [
            'h2' => 'Itumbiara e o primeiro recuo',
            'texto' => 'Itumbiara concentra Centro (sede e hotel) e Francisco Vilela do Amaral (ITR) no mesmo município. O motorista precisa do ponto de embarque e do ITR no mesmo recado — “me busca em Itumbiara” não define o recuo.',
        ],
        [
            'h2' => 'Eixos que o pedido cita',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel. Centro não compartilha o recuo de Novo Horizonte.',
                ],
                [
                    'h3' => 'Novo Horizonte',
                    'texto' => 'Origem frequente para bairro. Informe nome do hotel. Novo Horizonte não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Distrito Industrial',
                    'texto' => 'Origem frequente para planta. Informe nome do hotel. Distrito Industrial não compartilha o recuo de Centro.',
                ],
            ],
        ],
        [
            'h2' => 'Francisco Vilela do Amaral (ITR)',
            'texto' => 'Francisco Vilela do Amaral (ITR) fica em Itumbiara. Acesso: BR-153. Combinamos o voo; a espera no desembarque integra o trecho.',
        ],
    ],
];
