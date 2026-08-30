<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Duque de Caxias',
    'geo' => [
        'lat' => -22.7868,
        'lng' => -43.3132,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Duque de Caxias',
    'seo' => [
        'title' => 'Motorista executivo em Duque de Caxias: Centro e GIG',
        'description' => 'Carro com motorista em Duque de Caxias para Centro, Gramacho e GIG. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Traslado em Duque de Caxias: Centro e GIG',
        'og_description' => 'O motorista combina Centro com Galeão (GIG), em Rio de Janeiro. Informe nome na lista da portaria.',
        'og_image_alt' => 'Carro executivo em via de Duque de Caxias',
    ],
    'kicker' => 'Baixada Fluminense · RJ',
    'h1' => 'Em Duque de Caxias, de Centro a Galeão (GIG), em Rio de Janeiro',
    'faq_h2' => 'Dúvidas de quem embarca em Duque de Caxias',
    'faq' => [
        [
            'pergunta' => 'Quem está em Duque de Caxias embarca no GIG dentro da cidade?',
            'resposta' => 'Não. De Duque de Caxias o GIG (Galeão) fica em Rio de Janeiro. O trecho sai de Centro pela Avenida Brasil.',
        ],
        [
            'pergunta' => 'Em Duque de Caxias, vocês buscam em Centro?',
            'resposta' => 'Sim, em Duque de Caxias. Envie nome na lista da portaria em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Duque de Caxias vocês fazem Rio de Janeiro?',
            'resposta' => 'Sim, saindo de Duque de Caxias. Rio de Janeiro não é o recorte de Centro; o horário pela Washington Luís sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Duque de Caxias, GIG e SDU são o mesmo recorte?',
            'resposta' => 'Não, em Duque de Caxias. Os dois ficam em Rio de Janeiro, mas o acesso muda: GIG pela Avenida Brasil / Washington Luís e SDU pela Avenida Brasil. Diga o IATA.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Duque de Caxias e o GIG',
        'texto' => 'Diga o ponto em Centro ou Gramacho, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Duque de Caxias',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'rio-de-janeiro',
            'ancora' => 'Duque de Caxias e o recorte de Baixada Fluminense',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-de-janeiro',
            'cidade' => 'rio-de-janeiro',
            'ancora' => 'Motorista em rio de janeiro',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-de-janeiro',
            'cidade' => 'niteroi',
            'ancora' => 'Motorista em niteroi',
        ],
    ],
    'preambulo' => 'Duque de Caxias usa Galeão (GIG), em Rio de Janeiro. Quem embarca em Centro não está no município da pista. A Avenida Brasil é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'artigos' => [
        [
            'h2' => 'Centro pede protocolo, não pin',
            'texto' => 'Origem frequente para sede. Informe nome na lista da portaria. Centro não compartilha o recuo de Gramacho.',
        ],
        [
            'h2' => 'Gramacho e Saracuruna',
            'texto' => 'Gramacho pede polo e REDUC. Saracuruna pede bairro. Quando Rio de Janeiro entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela Washington Luís.',
        ],
        [
            'h2' => 'Galeão (GIG)',
            'texto' => 'Galeão (GIG) fica em Rio de Janeiro, não em Duque de Caxias. O trecho sai pela Avenida Brasil / Washington Luís. Diga o IATA e o número do voo.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens da ordem do dia em Duque de Caxias',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede. Informe nome na lista da portaria. Centro não compartilha o recuo de Gramacho.',
            ],
            [
                'h3' => 'Gramacho',
                'texto' => 'Origem frequente para polo e REDUC. Informe nome na lista da portaria. Gramacho não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Saracuruna',
                'texto' => 'Origem frequente para bairro. Informe nome na lista da portaria. Saracuruna não compartilha o recuo de Centro.',
            ],
        ],
    ],
];
