<?php

declare(strict_types=1);

return [
    'layout' => 'dunas',
    'cidade_nome' => 'Caucaia',
    'geo' => [
        'lat' => -3.7361,
        'lng' => -38.6531,
    ],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Caucaia',
    'seo' => [
        'title' => 'Traslado executivo em Caucaia: Centro e CE-085',
        'description' => 'Motorista executivo em Caucaia: Centro, Icaraí e Pinto Martins (FOR), em Fortaleza. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Traslado em Caucaia: Centro e FOR',
        'og_description' => 'O motorista combina Centro com Pinto Martins (FOR), em Fortaleza. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Caucaia',
    ],
    'kicker' => 'Região Metropolitana de Fortaleza · CE',
    'h1' => 'Em Caucaia, de Centro a Pinto Martins (FOR), em Fortaleza',
    'faq_h2' => 'Dúvidas de quem embarca em Caucaia',
    'faq' => [
        [
            'pergunta' => 'Quem está em Caucaia embarca no FOR dentro da cidade?',
            'resposta' => 'Não. De Caucaia o FOR (Pinto Martins) fica em Fortaleza. O trecho sai de Centro pela CE-085.',
        ],
        [
            'pergunta' => 'Em Caucaia, vocês buscam em Centro?',
            'resposta' => 'Sim, em Caucaia. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Caucaia vocês fazem Fortaleza?',
            'resposta' => 'Sim, saindo de Caucaia. Fortaleza não é o recorte de Centro; o horário pela BR-222 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Caucaia o carro fica entre Centro e Icaraí?',
            'resposta' => 'Sim, em Caucaia. A hora à disposição cobre sede em Centro e orla em Icaraí.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Caucaia e o FOR',
        'texto' => 'Diga o ponto em Centro ou Icaraí, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Caucaia',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'ceara',
            'ancora' => 'Caucaia e o recorte de Região Metropolitana de Fortaleza',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'ceara',
            'cidade' => 'fortaleza',
            'ancora' => 'Motorista em fortaleza',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'ceara',
            'cidade' => 'maracanau',
            'ancora' => 'Motorista em maracanau',
        ],
    ],
    'trilha' => [
        'h2' => 'Caucaia se lê em CE-085, não em atalho de app',
        'texto' => 'Caucaia usa Pinto Martins (FOR), em Fortaleza. Quem embarca em Centro não está no município da pista. A CE-085 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    ],
    'chips' => [
        'h2' => 'Onde o embarque em Caucaia mais se repete',
        'itens' => [
            'Centro',
            'Icaraí',
            'Jurema',
            'Parque Soledade',
            'Pinto Martins',
            'CE-085',
        ],
    ],
    'historias' => [
        [
            'h2' => 'Centro como origem, não como cartão-postal',
            'texto' => 'Origem frequente para sede. Informe nome do hotel. Centro não compartilha o recuo de Icaraí.',
        ],
        [
            'h2' => 'Icaraí no meio do expediente',
            'texto' => 'Icaraí pede orla. Jurema pede bairro. Quando Fortaleza entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela BR-222.',
        ],
        [
            'h2' => 'Pinto Martins — FOR',
            'texto' => 'Pinto Martins (FOR) fica em Fortaleza, não em Caucaia. O trecho sai pela CE-085 / BR-222. Diga o IATA e o número do voo.',
        ],
    ],
];
