<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Macapá',
    'geo' => [
        'lat' => 0.03493,
        'lng' => -51.0694,
    ],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Macapá',
    'seo' => [
        'title' => 'Traslado executivo em Macapá: Centro e AP-010',
        'description' => 'Motorista executivo em Macapá: Centro, Trem e Alberto Alcolumbre (MCP), no próprio município. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Traslado em Macapá: Centro e MCP',
        'og_description' => 'O motorista combina Centro com Alberto Alcolumbre (MCP), no próprio município. Informe nome do hotel ou da sede.',
        'og_image_alt' => 'Carro executivo em via de Macapá',
    ],
    'kicker' => 'Capital amapaense · AP',
    'h1' => 'Macapá — Centro de manhã, MCP quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Macapá',
    'faq' => [
        [
            'pergunta' => 'Em Macapá, o MCP fica no próprio município?',
            'resposta' => 'Sim. Em Macapá, Alberto Alcolumbre (MCP) fica no município. Informe o acesso via AP-010.',
        ],
        [
            'pergunta' => 'Em Macapá, vocês buscam em Centro?',
            'resposta' => 'Sim, em Macapá. Envie nome do hotel ou da sede em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Macapá vocês fazem Santana?',
            'resposta' => 'Sim, saindo de Macapá. Santana não é o recorte de Centro; o horário pela Avenida FAB sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Macapá o carro fica entre Centro e Trem?',
            'resposta' => 'Sim, em Macapá. A hora à disposição cobre sede e hotel em Centro e bairro em Trem.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Macapá e o MCP',
        'texto' => 'Diga o ponto em Centro ou Trem, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Macapá',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'amapa',
            'ancora' => 'Macapá e o recorte de Capital amapaense',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'para',
            'cidade' => 'belem',
            'ancora' => 'Motorista em belem',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'amazonas',
            'cidade' => 'manaus',
            'ancora' => 'Motorista em manaus',
        ],
    ],
    'preambulo' => 'Macapá concentra Centro (sede e hotel) e Alberto Alcolumbre (MCP) no mesmo município. O motorista precisa do ponto de embarque e do MCP no mesmo recado — “me busca em Macapá” não define o recuo.',
    'artigos' => [
        [
            'h2' => 'Centro pede protocolo, não pin',
            'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel ou da sede. Centro não compartilha o recuo de Trem.',
        ],
        [
            'h2' => 'Trem e Marco Zero',
            'texto' => 'Trem pede bairro. Marco Zero pede orla equatorial. Quando Santana entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela Avenida FAB.',
        ],
        [
            'h2' => 'Alberto Alcolumbre (MCP)',
            'texto' => 'Alberto Alcolumbre (MCP) fica em Macapá. Acesso: AP-010. Combinamos o voo; a espera no desembarque integra o trecho.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens da ordem do dia em Macapá',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel ou da sede. Centro não compartilha o recuo de Trem.',
            ],
            [
                'h3' => 'Trem',
                'texto' => 'Origem frequente para bairro. Informe nome do hotel ou da sede. Trem não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Marco Zero',
                'texto' => 'Origem frequente para orla equatorial. Informe nome do hotel ou da sede. Marco Zero não compartilha o recuo de Centro.',
            ],
        ],
    ],
];
