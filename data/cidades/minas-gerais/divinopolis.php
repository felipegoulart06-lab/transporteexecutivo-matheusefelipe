<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Divinópolis',
    'geo' => [
        'lat' => -20.1446,
        'lng' => -44.8916,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Divinópolis',
    'seo' => [
        'title' => 'Motorista executivo em Divinópolis: Centro e DIQ',
        'description' => 'Motorista executivo em Divinópolis: Centro, Catalão e Brigadeiro Antônio Cabral (DIQ), no próprio município. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Embarque em Divinópolis: hotel, Centro e DIQ',
        'og_description' => 'O motorista combina Centro com Brigadeiro Antônio Cabral (DIQ), no próprio município. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Divinópolis',
    ],
    'kicker' => 'Centro-oeste mineiro · MG',
    'h1' => 'Divinópolis: entre Centro, Catalão e o terminal certo',
    'faq_h2' => 'Dúvidas de quem embarca em Divinópolis',
    'faq' => [
        [
            'pergunta' => 'Em Divinópolis, o DIQ fica no próprio município?',
            'resposta' => 'Sim. Em Divinópolis, Brigadeiro Antônio Cabral (DIQ) fica no município. Informe o acesso via MG-050.',
        ],
        [
            'pergunta' => 'Em Divinópolis, vocês buscam em Centro?',
            'resposta' => 'Sim, em Divinópolis. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Divinópolis vocês fazem Belo Horizonte?',
            'resposta' => 'Sim, saindo de Divinópolis. Belo Horizonte não é o recorte de Centro; o horário pela MG-050 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Divinópolis, DIQ e CNF são o mesmo recorte?',
            'resposta' => 'Não, em Divinópolis. DIQ fica em Divinópolis; CNF fica em Confins. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Divinópolis e o DIQ',
        'texto' => 'Diga o ponto em Centro ou Catalão, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Divinópolis',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'minas-gerais',
            'ancora' => 'Divinópolis e o recorte de Centro-oeste mineiro',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'minas-gerais',
            'cidade' => 'belo-horizonte',
            'ancora' => 'Motorista em belo horizonte',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'minas-gerais',
            'cidade' => 'betim',
            'ancora' => 'Motorista em betim',
        ],
    ],
    'intro' => 'Divinópolis concentra Centro (sede e hotel) e Brigadeiro Antônio Cabral (DIQ) no mesmo município. O motorista precisa do ponto de embarque e do DIQ no mesmo recado — “me busca em Divinópolis” não define o recuo.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Divinópolis não é pegar um carro',
            'texto' => 'Divinópolis concentra Centro (sede e hotel) e Brigadeiro Antônio Cabral (DIQ) no mesmo município. O motorista precisa do ponto de embarque e do DIQ no mesmo recado — “me busca em Divinópolis” não define o recuo.',
        ],
        [
            'h2' => 'Quadrantes que mais geram embarque',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel. Centro não compartilha o recuo de Catalão.',
                ],
                [
                    'h3' => 'Catalão',
                    'texto' => 'Origem frequente para bairro. Informe nome do hotel. Catalão não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Porto Velho',
                    'texto' => 'Origem frequente para residencial. Informe nome do hotel. Porto Velho não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Danilo Passos',
                    'texto' => 'Origem frequente para eixo. Informe nome do hotel. Danilo Passos não compartilha o recuo de Centro.',
                ],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Três combinações que a pauta de Divinópolis repete',
        'itens' => [
            [
                'titulo' => 'Centro → DIQ',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: MG-050.',
            ],
            [
                'titulo' => 'DIQ → Catalão',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome do hotel.',
            ],
            [
                'titulo' => 'Centro → Belo Horizonte',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Catalão; o horário sai sob consulta.',
            ],
        ],
    ],
];
