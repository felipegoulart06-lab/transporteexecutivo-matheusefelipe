<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Parintins',
    'geo' => [
        'lat' => -2.6342,
        'lng' => -56.7324,
    ],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Parintins',
    'seo' => [
        'title' => 'Motorista executivo em Parintins: Centro e PIN',
        'description' => 'Motorista executivo em Parintins: Centro, Itaúna e Júlio Belém (PIN), no próprio município. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Agenda em Parintins com motorista — Itaúna e Júlio Belém',
        'og_description' => 'O motorista combina Centro com Júlio Belém (PIN), no próprio município. Informe nome do hotel ou do porto.',
        'og_image_alt' => 'Carro executivo em via de Parintins',
    ],
    'kicker' => 'Baixo Amazonas · AM',
    'h1' => 'Parintins: entre Centro, Itaúna e o terminal certo',
    'faq_h2' => 'Dúvidas de quem embarca em Parintins',
    'faq' => [
        [
            'pergunta' => 'Em Parintins, o PIN fica no próprio município?',
            'resposta' => 'Sim. Em Parintins, Júlio Belém (PIN) fica no município. Informe o acesso via acesso urbano.',
        ],
        [
            'pergunta' => 'Em Parintins, vocês buscam em Centro?',
            'resposta' => 'Sim, em Parintins. Envie nome do hotel ou do porto em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Parintins vocês fazem Manaus?',
            'resposta' => 'Sim, saindo de Parintins. Manaus não é o recorte de Centro; o horário pela Avenida Amazonas sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Parintins, PIN e MAO são o mesmo recorte?',
            'resposta' => 'Não, em Parintins. PIN fica em Parintins; MAO fica em Manaus. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Parintins e o PIN',
        'texto' => 'Diga o ponto em Centro ou Itaúna, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Parintins',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'amazonas',
            'ancora' => 'Parintins e o recorte de Baixo Amazonas',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'amazonas',
            'cidade' => 'manaus',
            'ancora' => 'Motorista em manaus',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'para',
            'cidade' => 'santarem',
            'ancora' => 'Motorista em santarem',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'Parintins se cruza por orla fluvial, não em linha reta',
            'texto' => 'Parintins concentra Centro (sede e hotel) e Júlio Belém (PIN) no mesmo município. O motorista precisa do ponto de embarque e do PIN no mesmo recado — “me busca em Parintins” não define o recuo.',
        ],
        [
            'h2' => 'Três eixos, três recuos',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel ou do porto. Centro não compartilha o recuo de Itaúna.',
                ],
                [
                    'h3' => 'Itaúna',
                    'texto' => 'Origem frequente para bairro. Informe nome do hotel ou do porto. Itaúna não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Palmares',
                    'texto' => 'Origem frequente para residencial. Informe nome do hotel ou do porto. Palmares não compartilha o recuo de Centro.',
                ],
            ],
        ],
        [
            'h2' => 'Júlio Belém — PIN',
            'texto' => 'Júlio Belém (PIN) fica em Parintins. Acesso: acesso urbano. Combinamos o voo; a espera no desembarque integra o trecho.',
        ],
    ],
];
