<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Sorriso',
    'geo' => [
        'lat' => -12.5425,
        'lng' => -55.721,
    ],
    'imagem' => 'centro-oeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Sorriso',
    'seo' => [
        'title' => 'Carro com motorista em Sorriso: Jardim Tropical e SMT',
        'description' => 'Carro com motorista em Sorriso para Centro, Jardim Tropical e SMT. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Agenda em Sorriso com motorista — Jardim Tropical e Adolino Bedin',
        'og_description' => 'O motorista combina Centro com Adolino Bedin (SMT), no próprio município. Informe nome na lista da portaria.',
        'og_image_alt' => 'Carro executivo em via de Sorriso',
    ],
    'kicker' => 'Norte mato-grossense · MT',
    'h1' => 'Em Sorriso: do embarque em Centro ao SMT',
    'faq_h2' => 'Dúvidas de quem embarca em Sorriso',
    'faq' => [
        [
            'pergunta' => 'Em Sorriso, o SMT fica no próprio município?',
            'resposta' => 'Sim. Em Sorriso, Adolino Bedin (SMT) fica no município. Informe o acesso via BR-163.',
        ],
        [
            'pergunta' => 'Em Sorriso, vocês buscam em Centro?',
            'resposta' => 'Sim, em Sorriso. Envie nome na lista da portaria em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Sorriso vocês fazem Sinop?',
            'resposta' => 'Sim, saindo de Sorriso. Sinop não é o recorte de Centro; o horário pela Avenida Blairo Maggi sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Sorriso, SMT e OPS são o mesmo recorte?',
            'resposta' => 'Não, em Sorriso. SMT fica em Sorriso; OPS fica em Sinop. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Sorriso e o SMT',
        'texto' => 'Diga o ponto em Centro ou Jardim Tropical, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Sorriso',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'mato-grosso',
            'ancora' => 'Sorriso e o recorte de Norte mato-grossense',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'mato-grosso',
            'cidade' => 'sinop',
            'ancora' => 'Motorista em sinop',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'mato-grosso',
            'cidade' => 'cuiaba',
            'ancora' => 'Motorista em cuiaba',
        ],
    ],
    'lead' => 'Sorriso concentra Centro (sede e hotel) e Adolino Bedin (SMT) no mesmo município. O motorista precisa do ponto de embarque e do SMT no mesmo recado — “me busca em Sorriso” não define o recuo.',
    'contexto' => [
        'h2' => 'Sorriso se mede em BR-163, não em pin de aplicativo',
        'texto' => [
            'Sorriso concentra Centro (sede e hotel) e Adolino Bedin (SMT) no mesmo município. O motorista precisa do ponto de embarque e do SMT no mesmo recado — “me busca em Sorriso” não define o recuo.',
            'Jardim Tropical pede bairro. Industrial pede grão e portaria. Quando Sinop entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela Avenida Blairo Maggi.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos de embarque em Sorriso',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome na lista da portaria. Centro não compartilha o recuo de Jardim Tropical.',
            ],
            [
                'h3' => 'Jardim Tropical',
                'texto' => 'Origem frequente para bairro. Informe nome na lista da portaria. Jardim Tropical não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Industrial',
                'texto' => 'Origem frequente para grão e portaria. Informe nome na lista da portaria. Industrial não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Boa Esperança',
                'texto' => 'Origem frequente para residencial. Informe nome na lista da portaria. Boa Esperança não compartilha o recuo de Centro.',
            ],
        ],
    ],
    'aeroportos' => [
        'h2' => 'O terminal que a agenda de Sorriso realmente usa',
        'itens' => [
            [
                'h3' => 'Adolino Bedin — SMT',
                'texto' => 'Adolino Bedin (SMT) fica em Sorriso. Acesso: BR-163. Combinamos o voo; a espera no desembarque integra o trecho.',
            ],
            [
                'h3' => 'Presidente João Figueiredo — OPS',
                'texto' => 'Presidente João Figueiredo (OPS) fica em Sinop, não em Sorriso. O trecho sai pela BR-163. Diga o IATA e o número do voo.',
            ],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que o pedido em Sorriso mais combina',
        'itens' => [
            [
                'titulo' => 'Centro → SMT',
                'texto' => 'Saída com o ponto de embarque e o voo no roteiro. Acesso: BR-163.',
            ],
            [
                'titulo' => 'SMT → Jardim Tropical',
                'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e nome na lista da portaria.',
            ],
            [
                'titulo' => 'Centro → Sinop',
                'texto' => 'Transfer intermunicipal. Não é o mesmo recorte de Jardim Tropical; o horário sai sob consulta.',
            ],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na pauta em Sorriso',
        'passos' => [
            [
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome na lista da portaria. Autocomplete não resolve dois acessos em Centro.',
            ],
            [
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o SMT ou Sinop entra no dia.',
            ],
            [
                'titulo' => 'Confirmação',
                'texto' => 'Em Sorriso, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
