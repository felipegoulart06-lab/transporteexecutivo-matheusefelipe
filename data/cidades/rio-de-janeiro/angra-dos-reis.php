<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'Angra dos Reis',
    'geo' => ['lat' => -23.0067, 'lng' => -44.3181],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Angra dos Reis',
    'seo' => [
        'title' => 'Motorista em Angra dos Reis: Centro, Frade e orla',
        'description' => 'Carro com motorista em Angra dos Reis para o Centro, Frade, Cunhambebe e o eixo até o Galeão. Costa Verde, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Centro, no Frade e na Costa Verde',
        'og_description' => 'Motorista em Angra: hotel no Frade, pauta no cais e o recuo rumo ao GIG.',
        'og_image_alt' => 'Carro executivo em via da orla de Angra dos Reis',
    ],
    'kicker' => 'Costa Verde · RJ',
    'h1' => 'Do Frade ao cais sem perder a janela da Rio-Santos',
    'epigrafe' => 'Angra alinha hotel no Frade, pauta no Centro e o recuo da Rio-Santos rumo ao Galeão. O motorista segura a BR-101; o passageiro segura o horário — não a vaga na porta do cais.',
    'abertura' => [
        'h2' => 'A cidade da baía e o Frade não se trocam no mesmo recuo',
        'texto' => [
            'Centro, Japuíba, Cunhambebe e o Frade concentram o pernoite. Ilha Grande entra como visita combinada, não como desvio de última hora. O voo comercial da pauta sai em geral pelo Galeão ou pelo Santos Dumont.',
            'O serviço é de traslado e de espera: o carro já está no roteiro com o nome do hotel (do Frade, similares) e o número do voo. Não é corrida de orla no feriado, a menos que a visita à ilha entre na pauta.',
        ],
    ],
    'faixas' => [
        ['h2' => 'Centro, cais e o relógio da baía', 'texto' => 'Sede e o recuo do porto. Informe o hotel; “no centro” não distingue o cais do Frade.'],
        ['h2' => 'Frade, Monsuaba e a litorânea', 'texto' => 'Hotéis de passagem e o recuo da praia. A Rio-Santos muda o intervalo no verão; a margem sai do hotel, não do mapa.'],
        ['h2' => 'Ilha Grande e o recorte de barco', 'texto' => 'Quando a pauta inclui Abraão, o carro cobre até o cais. A travessia não entra no mesmo pedido urbano; o horário sai sob consulta.'],
    ],
    'aeroportos' => [
        'h2' => 'GIG e SDU no relógio da Costa Verde',
        'itens' => [
            ['h3' => 'Galeão — GIG', 'texto' => 'O trecho Angra–Ilha do Governador não é urbano. Combinamos o voo. A Rio-Santos pede margem de serra e de pedágio.'],
            ['h3' => 'Santos Dumont — SDU', 'texto' => 'Quando a ponte aérea entra no roteiro. Informe o terminal; a margem sai do hotel, não do saguão.'],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque na Costa Verde',
        'lista' => [
            'Hotel com nome — Frade ou Centro não bastam para o recuo.',
            'Se o voo é no GIG ou no SDU, número e horário. A margem sai da Rio-Santos, não do cais.',
            'Ilha Grande, Paraty ou o Centro entram no roteiro; não é desvio de última hora na BR-101.',
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pauta a Costa Verde',
    'faq' => [
        ['pergunta' => 'O motorista vai ao Galeão a partir de Angra?', 'resposta' => 'Sim, quando o GIG entra no roteiro. A Rio-Santos pede margem; não é corrida instantânea do Frade.'],
        ['pergunta' => 'Em Angra dos Reis, o motorista espera no GIG se o voo atrasar?', 'resposta' => 'Sim. Seguimos o voo no Galeão; a espera no GIG integra o trecho pela Rio-Santos desde o Frade ou o Centro.'],
        ['pergunta' => 'Vocês fazem Centro, Frade e o cais no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. A litorânea pesa mais que a distância no mapa.'],
        ['pergunta' => 'Dá para ir a Paraty ou à Ilha Grande depois do hotel?', 'resposta' => 'Sim, quando entram no roteiro. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Marque o Frade junto com o horário da Rio-Santos',
        'texto' => 'O orçamento de Angra sai sob consulta. Cais, orla e voo no mesmo WhatsApp.',
        'botao' => 'Pedir carro em Angra dos Reis',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-de-janeiro', 'ancora' => 'O recorte fluminense além da capital'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Zona Sul, Centro e os dois aeroportos'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'cabo-frio', 'ancora' => 'Centro, Passagem e o aeroporto CFB'],
    ],
];
