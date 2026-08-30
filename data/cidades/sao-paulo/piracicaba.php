<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Piracicaba',
    'geo' => [
        'lat' => -22.7253,
        'lng' => -47.6492,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Piracicaba',
    'seo' => [
        'title' => 'Motorista executivo em Piracicaba: Centro e VCP',
        'description' => 'Carro com motorista em Piracicaba para Centro, Cidade Alta e VCP. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Agenda em Piracicaba com motorista — Cidade Alta e Viracopos',
        'og_description' => 'O motorista combina Centro com Viracopos (VCP), em Campinas. Informe nome do campus ou do hotel.',
        'og_image_alt' => 'Carro executivo em via de Piracicaba',
    ],
    'kicker' => 'Interior paulista · SP',
    'h1' => 'Piracicaba: entre Centro, Cidade Alta e o terminal certo',
    'faq_h2' => 'Dúvidas de quem embarca em Piracicaba',
    'faq' => [
        [
            'pergunta' => 'Quem está em Piracicaba embarca no VCP dentro da cidade?',
            'resposta' => 'Não. De Piracicaba o VCP (Viracopos) fica em Campinas. O trecho sai de Centro pela SP-304.',
        ],
        [
            'pergunta' => 'Em Piracicaba, vocês buscam em Centro?',
            'resposta' => 'Sim, em Piracicaba. Envie nome do campus ou do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Piracicaba vocês fazem Limeira?',
            'resposta' => 'Sim, saindo de Piracicaba. Limeira não é o recorte de Centro; o horário pela SP-127 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Piracicaba, VCP e RAO são o mesmo recorte?',
            'resposta' => 'Não, em Piracicaba. VCP fica em Campinas; RAO fica em Ribeirão Preto. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Piracicaba e o VCP',
        'texto' => 'Diga o ponto em Centro ou Cidade Alta, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Piracicaba',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'sao-paulo',
            'ancora' => 'Piracicaba e o recorte de Interior paulista',
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
            'cidade' => 'sao-paulo',
            'ancora' => 'Motorista em sao paulo',
        ],
    ],
    'preambulo' => 'Piracicaba usa Viracopos (VCP), em Campinas. Quem embarca em Centro não está no município da pista. A SP-304 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'artigos' => [
        [
            'h2' => 'Centro pede protocolo, não pin',
            'texto' => 'Origem frequente para sede e hotel. Informe nome do campus ou do hotel. Centro não compartilha o recuo de Cidade Alta.',
        ],
        [
            'h2' => 'Cidade Alta e Unimep',
            'texto' => 'Cidade Alta pede bairro. Unimep pede campus. Quando Limeira entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela SP-127.',
        ],
        [
            'h2' => 'Viracopos (VCP)',
            'texto' => 'Viracopos (VCP) fica em Campinas, não em Piracicaba. O trecho sai pela SP-304. Diga o IATA e o número do voo.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens da ordem do dia em Piracicaba',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome do campus ou do hotel. Centro não compartilha o recuo de Cidade Alta.',
            ],
            [
                'h3' => 'Cidade Alta',
                'texto' => 'Origem frequente para bairro. Informe nome do campus ou do hotel. Cidade Alta não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Unimep',
                'texto' => 'Origem frequente para campus. Informe nome do campus ou do hotel. Unimep não compartilha o recuo de Centro.',
            ],
        ],
    ],
];
