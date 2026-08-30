<?php

declare(strict_types=1);

return [
    'layout' => 'rio',
    'cidade_nome' => 'Manaus',
    'geo' => [
        'lat' => -3.11903,
        'lng' => -60.0217,
    ],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Manaus',
    'seo' => [
        'title' => 'Motorista executivo em Manaus: Adrianópolis e MAO',
        'description' => 'Carro com motorista em Manaus para Adrianópolis, Ponta Negra e MAO. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Traslado em Manaus: Adrianópolis e MAO',
        'og_description' => 'O motorista combina Adrianópolis com Eduardo Gomes (MAO), no próprio município. Informe nome da torre ou da portaria.',
        'og_image_alt' => 'Carro executivo em via de Manaus',
    ],
    'kicker' => 'Capital amazonense · AM',
    'h1' => 'Manaus — Adrianópolis de manhã, MAO quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Manaus',
    'faq' => [
        [
            'pergunta' => 'Em Manaus, o MAO fica no próprio município?',
            'resposta' => 'Sim. Em Manaus, Eduardo Gomes (MAO) fica no município. Informe o acesso via Avenida Torquato Tapajós.',
        ],
        [
            'pergunta' => 'Em Manaus, vocês buscam em Adrianópolis?',
            'resposta' => 'Sim, em Manaus. Envie nome da torre ou da portaria em Adrianópolis. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Manaus vocês fazem Iranduba?',
            'resposta' => 'Sim, saindo de Manaus. Iranduba não é o recorte de Adrianópolis; o horário pela AM-010 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Manaus o carro fica entre Adrianópolis e Ponta Negra?',
            'resposta' => 'Sim, em Manaus. A hora à disposição cobre hotel e escritório em Adrianópolis e orla e pernoite em Ponta Negra.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Manaus e o MAO',
        'texto' => 'Diga o ponto em Adrianópolis ou Ponta Negra, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Manaus',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'amazonas',
            'ancora' => 'Manaus e o recorte de Capital amazonense',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'distrito-federal',
            'cidade' => 'brasilia',
            'ancora' => 'Motorista em brasilia',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'sao-paulo',
            'ancora' => 'Motorista em sao paulo',
        ],
    ],
    'corrente' => [
        [
            'h2' => 'Manaus e o primeiro recuo',
            'texto' => 'Manaus concentra Adrianópolis (hotel e escritório) e Eduardo Gomes (MAO) no mesmo município. O motorista precisa do ponto de embarque e do MAO no mesmo recado — “me busca em Manaus” não define o recuo.',
        ],
        [
            'h2' => 'Eixos que o pedido cita',
            'itens' => [
                [
                    'h3' => 'Adrianópolis',
                    'texto' => 'Origem frequente para hotel e escritório. Informe nome da torre ou da portaria. Adrianópolis não compartilha o recuo de Ponta Negra.',
                ],
                [
                    'h3' => 'Ponta Negra',
                    'texto' => 'Origem frequente para orla e pernoite. Informe nome da torre ou da portaria. Ponta Negra não compartilha o recuo de Adrianópolis.',
                ],
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para porto e comércio. Informe nome da torre ou da portaria. Centro não compartilha o recuo de Adrianópolis.',
                ],
            ],
        ],
        [
            'h2' => 'Eduardo Gomes (MAO)',
            'texto' => 'Eduardo Gomes (MAO) fica em Manaus. Acesso: Avenida Torquato Tapajós. Combinamos o voo; a espera no desembarque integra o trecho.',
        ],
    ],
];
