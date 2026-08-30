<?php

declare(strict_types=1);

return [
    'layout' => 'gaucha',
    'cidade_nome' => 'Criciúma',
    'geo' => [
        'lat' => -28.6775,
        'lng' => -49.3697,
    ],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Criciúma',
    'seo' => [
        'title' => 'Motorista executivo em Criciúma: Centro e CCM',
        'description' => 'Motorista executivo em Criciúma: Centro, Próspera e Diomício Freitas (CCM), em Forquilhinha. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Agenda em Criciúma com motorista — Próspera e Diomício Freitas',
        'og_description' => 'O motorista combina Centro com Diomício Freitas (CCM), em Forquilhinha. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Criciúma',
    ],
    'kicker' => 'Sul catarinense · SC',
    'h1' => 'Em Criciúma: do embarque em Centro ao CCM',
    'faq_h2' => 'Dúvidas de quem embarca em Criciúma',
    'faq' => [
        [
            'pergunta' => 'Quem está em Criciúma embarca no CCM dentro da cidade?',
            'resposta' => 'Não. De Criciúma o CCM (Diomício Freitas) fica em Forquilhinha. O trecho sai de Centro pela BR-101.',
        ],
        [
            'pergunta' => 'Em Criciúma, vocês buscam em Centro?',
            'resposta' => 'Sim, em Criciúma. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Criciúma vocês fazem Içara?',
            'resposta' => 'Sim, saindo de Criciúma. Içara não é o recorte de Centro; o horário pela SC-445 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Criciúma, CCM e FLN são o mesmo recorte?',
            'resposta' => 'Não, em Criciúma. CCM fica em Forquilhinha; FLN fica em Florianópolis. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Criciúma e o CCM',
        'texto' => 'Diga o ponto em Centro ou Próspera, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Criciúma',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'santa-catarina',
            'ancora' => 'Criciúma e o recorte de Sul catarinense',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'santa-catarina',
            'cidade' => 'florianopolis',
            'ancora' => 'Motorista em florianopolis',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'santa-catarina',
            'cidade' => 'chapeco',
            'ancora' => 'Motorista em chapeco',
        ],
    ],
    'coluna' => [
        'h2' => 'Criciúma no mapa e na BR-101',
        'texto' => [
            'Criciúma usa Diomício Freitas (CCM), em Forquilhinha. Quem embarca em Centro não está no município da pista. A BR-101 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
            'Próspera pede bairro. Santa Bárbara pede residencial. Quando Içara entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela SC-445.',
        ],
    ],
    'lateral' => [
        'h2' => 'Pontos que o pedido em Criciúma mais cita',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome do hotel. Centro não compartilha o recuo de Próspera.',
            ],
            [
                'h3' => 'Próspera',
                'texto' => 'Origem frequente para bairro. Informe nome do hotel. Próspera não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Santa Bárbara',
                'texto' => 'Origem frequente para residencial. Informe nome do hotel. Santa Bárbara não compartilha o recuo de Centro.',
            ],
        ],
    ],
    'faixa' => [
        'h2' => 'Rotas urbanas e o salto para Içara',
        'texto' => 'Centro → Içara: Transfer intermunicipal. Não é o mesmo recorte de Próspera; o horário sai sob consulta.',
    ],
];
