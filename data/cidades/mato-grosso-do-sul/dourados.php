<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Dourados',
    'geo' => [
        'lat' => -22.2231,
        'lng' => -54.812,
    ],
    'imagem' => 'centro-oeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Dourados',
    'seo' => [
        'title' => 'Motorista executivo em Dourados: Centro e DOU',
        'description' => 'Carro com motorista em Dourados para Centro, Jardim América e DOU. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Embarque em Dourados: hotel, Centro e DOU',
        'og_description' => 'O motorista combina Centro com Francisco de Matos Pereira (DOU), no próprio município. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Dourados',
    ],
    'kicker' => 'Sul sul-mato-grossense · MS',
    'h1' => 'Dourados — Centro de manhã, DOU quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Dourados',
    'faq' => [
        [
            'pergunta' => 'Em Dourados, o DOU fica no próprio município?',
            'resposta' => 'Sim. Em Dourados, Francisco de Matos Pereira (DOU) fica no município. Informe o acesso via MS-156.',
        ],
        [
            'pergunta' => 'Em Dourados, vocês buscam em Centro?',
            'resposta' => 'Sim, em Dourados. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Dourados vocês fazem Campo Grande?',
            'resposta' => 'Sim, saindo de Dourados. Campo Grande não é o recorte de Centro; o horário pela MS-156 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Dourados o carro fica entre Centro e Jardim América?',
            'resposta' => 'Sim, em Dourados. A hora à disposição cobre sede e hotel em Centro e bairro em Jardim América.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Dourados e o DOU',
        'texto' => 'Diga o ponto em Centro ou Jardim América, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Dourados',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'mato-grosso-do-sul',
            'ancora' => 'Dourados e o recorte de Sul sul-mato-grossense',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'mato-grosso-do-sul',
            'cidade' => 'campo-grande',
            'ancora' => 'Motorista em campo grande',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'sao-paulo',
            'ancora' => 'Motorista em sao paulo',
        ],
    ],
    'lead' => 'Dourados concentra Centro (sede e hotel) e Francisco de Matos Pereira (DOU) no mesmo município. O motorista precisa do ponto de embarque e do DOU no mesmo recado — “me busca em Dourados” não define o recuo.',
    'contexto' => [
        'h2' => 'Dourados se mede em BR-163, não em pin de aplicativo',
        'texto' => [
            'Dourados concentra Centro (sede e hotel) e Francisco de Matos Pereira (DOU) no mesmo município. O motorista precisa do ponto de embarque e do DOU no mesmo recado — “me busca em Dourados” não define o recuo.',
            'Jardim América pede bairro. Universitário pede UFGD. Quando Campo Grande entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela MS-156.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos de embarque em Dourados',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel. Centro não compartilha o recuo de Jardim América.',
            ],
            [
                'h3' => 'Jardim América',
                'texto' => 'Origem frequente para bairro. Informe nome do hotel. Jardim América não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Universitário',
                'texto' => 'Origem frequente para UFGD. Informe nome do hotel. Universitário não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Vila Progresso',
                'texto' => 'Origem frequente para residencial. Informe nome do hotel. Vila Progresso não compartilha o recuo de Centro.',
            ],
        ],
    ],
    'aeroportos' => [
        'h2' => 'O terminal que a agenda de Dourados realmente usa',
        'itens' => [
            [
                'h3' => 'Francisco de Matos Pereira — DOU',
                'texto' => 'Francisco de Matos Pereira (DOU) fica em Dourados. Acesso: MS-156. Combinamos o voo; a espera no desembarque integra o trecho.',
            ],
            [
                'h3' => 'BR-163 e a vazão para Campo Grande',
                'texto' => 'Campo Grande e Ponta Porã aparecem no mesmo pedido de Dourados. Isso é viagem, não segunda corrida em Centro.',
            ],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que o pedido em Dourados mais combina',
        'itens' => [
            [
                'titulo' => 'Centro → DOU',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: MS-156.',
            ],
            [
                'titulo' => 'DOU → Jardim América',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome do hotel.',
            ],
            [
                'titulo' => 'Centro → Campo Grande',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Jardim América; o horário sai sob consulta.',
            ],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na pauta em Dourados',
        'passos' => [
            [
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do hotel. Autocomplete não resolve dois acessos em Centro.',
            ],
            [
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o DOU ou Campo Grande entra no dia.',
            ],
            [
                'titulo' => 'Confirmação',
                'texto' => 'Em Dourados, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
