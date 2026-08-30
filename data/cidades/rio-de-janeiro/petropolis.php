<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Petrópolis',
    'geo' => [
        'lat' => -22.52,
        'lng' => -43.1926,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Petrópolis',
    'seo' => [
        'title' => 'Motorista executivo em Petrópolis: Centro Histórico e GIG',
        'description' => 'Carro com motorista em Petrópolis para Centro Histórico, Quitandinha e GIG. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Embarque em Petrópolis: hotel, Centro Histórico e GIG',
        'og_description' => 'O motorista combina Centro Histórico com Galeão (GIG), em Rio de Janeiro. Informe nome do hotel e o distrito.',
        'og_image_alt' => 'Carro executivo em via de Petrópolis',
    ],
    'kicker' => 'Região Serrana · RJ',
    'h1' => 'Em Petrópolis: do embarque em Centro Histórico ao GIG',
    'faq_h2' => 'Dúvidas de quem embarca em Petrópolis',
    'faq' => [
        [
            'pergunta' => 'Quem está em Petrópolis embarca no GIG dentro da cidade?',
            'resposta' => 'Não. De Petrópolis o GIG (Galeão) fica em Rio de Janeiro. O trecho sai de Centro Histórico pela BR-040.',
        ],
        [
            'pergunta' => 'Em Petrópolis, vocês buscam em Centro Histórico?',
            'resposta' => 'Sim, em Petrópolis. Envie nome do hotel e o distrito em Centro Histórico. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Petrópolis vocês fazem Rio de Janeiro?',
            'resposta' => 'Sim, saindo de Petrópolis. Rio de Janeiro não é o recorte de Centro Histórico; o horário pela União e Indústria sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Petrópolis, GIG e SDU são o mesmo recorte?',
            'resposta' => 'Não, em Petrópolis. Os dois ficam em Rio de Janeiro, mas o acesso muda: GIG pela BR-040 e SDU pela BR-040. Diga o IATA.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Petrópolis e o GIG',
        'texto' => 'Diga o ponto em Centro Histórico ou Quitandinha, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Petrópolis',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'rio-de-janeiro',
            'ancora' => 'Petrópolis e o recorte de Região Serrana',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-de-janeiro',
            'cidade' => 'rio-de-janeiro',
            'ancora' => 'Motorista em rio de janeiro',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'minas-gerais',
            'cidade' => 'juiz-de-fora',
            'ancora' => 'Motorista em juiz de fora',
        ],
    ],
    'preambulo' => 'Petrópolis usa Galeão (GIG), em Rio de Janeiro. Quem embarca em Centro Histórico não está no município da pista. A BR-040 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'artigos' => [
        [
            'h2' => 'Centro Histórico pede protocolo, não pin',
            'texto' => 'Origem frequente para hotel e palácio. Informe nome do hotel e o distrito. Centro Histórico não compartilha o recuo de Quitandinha.',
        ],
        [
            'h2' => 'Quitandinha e Itaipava',
            'texto' => 'Quitandinha pede evento. Itaipava pede distrito e condomínio. Quando Rio de Janeiro entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela União e Indústria.',
        ],
        [
            'h2' => 'Galeão (GIG)',
            'texto' => 'Galeão (GIG) fica em Rio de Janeiro, não em Petrópolis. O trecho sai pela BR-040. Diga o IATA e o número do voo.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens da ordem do dia em Petrópolis',
        'itens' => [
            [
                'h3' => 'Centro Histórico',
                'texto' => 'Origem frequente para hotel e palácio. Informe nome do hotel e o distrito. Centro Histórico não compartilha o recuo de Quitandinha.',
            ],
            [
                'h3' => 'Quitandinha',
                'texto' => 'Origem frequente para evento. Informe nome do hotel e o distrito. Quitandinha não compartilha o recuo de Centro Histórico.',
            ],
            [
                'h3' => 'Itaipava',
                'texto' => 'Origem frequente para distrito e condomínio. Informe nome do hotel e o distrito. Itaipava não compartilha o recuo de Centro Histórico.',
            ],
        ],
    ],
];
