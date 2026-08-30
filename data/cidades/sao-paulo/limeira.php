<?php

declare(strict_types=1);

return [
    'layout' => 'mare',
    'cidade_nome' => 'Limeira',
    'geo' => [
        'lat' => -22.5645,
        'lng' => -47.4017,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Limeira',
    'seo' => [
        'title' => 'Carro com motorista em Limeira: Jardim Aquarius e VCP',
        'description' => 'Carro com motorista em Limeira para Centro, Jardim Aquarius e VCP. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Agenda em Limeira com motorista — Jardim Aquarius e Viracopos',
        'og_description' => 'O motorista combina Centro com Viracopos (VCP), em Campinas. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Limeira',
    ],
    'kicker' => 'Interior paulista · SP',
    'h1' => 'Em Limeira: do embarque em Centro ao VCP',
    'faq_h2' => 'Dúvidas de quem embarca em Limeira',
    'faq' => [
        [
            'pergunta' => 'Quem está em Limeira embarca no VCP dentro da cidade?',
            'resposta' => 'Não. De Limeira o VCP (Viracopos) fica em Campinas. O trecho sai de Centro pela Anhanguera.',
        ],
        [
            'pergunta' => 'Em Limeira, vocês buscam em Centro?',
            'resposta' => 'Sim, em Limeira. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Limeira vocês fazem Piracicaba?',
            'resposta' => 'Sim, saindo de Limeira. Piracicaba não é o recorte de Centro; o horário pela SP-147 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Limeira o carro fica entre Centro e Jardim Aquarius?',
            'resposta' => 'Sim, em Limeira. A hora à disposição cobre sede e hotel em Centro e bairro em Jardim Aquarius.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Limeira e o VCP',
        'texto' => 'Diga o ponto em Centro ou Jardim Aquarius, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Limeira',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'sao-paulo',
            'ancora' => 'Limeira e o recorte de Interior paulista',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'campinas',
            'ancora' => 'Motorista em campinas',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'piracicaba',
            'ancora' => 'Motorista em piracicaba',
        ],
    ],
    'editorial' => [
        'h2' => 'Limeira pede ordem de endereço, não slogan',
        'texto' => [
            'Limeira usa Viracopos (VCP), em Campinas. Quem embarca em Centro não está no município da pista. A Anhanguera é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
            'Jardim Aquarius pede bairro. UNICAMP Limeira pede campus. Quando Piracicaba entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela SP-147.',
        ],
    ],
    'coluna_a' => [
        'h2' => 'Eixos de Limeira',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel. Centro não compartilha o recuo de Jardim Aquarius.',
            ],
            [
                'h3' => 'Jardim Aquarius',
                'texto' => 'Origem frequente para bairro. Informe nome do hotel. Jardim Aquarius não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'UNICAMP Limeira',
                'texto' => 'Origem frequente para campus. Informe nome do hotel. UNICAMP Limeira não compartilha o recuo de Centro.',
            ],
        ],
    ],
    'coluna_b' => [
        'h2' => 'VCP e a vazão',
        'texto' => 'Viracopos (VCP) fica em Campinas, não em Limeira. O trecho sai pela Anhanguera. Diga o IATA e o número do voo. Piracicaba entra como viagem.',
    ],
];
