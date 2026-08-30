<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'Paranaguá',
    'geo' => [
        'lat' => -25.5161,
        'lng' => -48.5225,
    ],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Paranaguá',
    'seo' => [
        'title' => 'Motorista executivo em Paranaguá: Centro Histórico e CWB',
        'description' => 'Carro com motorista em Paranaguá para Centro Histórico, Porto e CWB. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Agenda em Paranaguá com motorista — Porto e Afonso Pena',
        'og_description' => 'O motorista combina Centro Histórico com Afonso Pena (CWB), em São José dos Pinhais. Informe nome na lista do cais.',
        'og_image_alt' => 'Carro executivo em via de Paranaguá',
    ],
    'kicker' => 'Litoral paranaense · PR',
    'h1' => 'Em Paranaguá, de Centro Histórico a Afonso Pena (CWB), em São José dos Pinhais',
    'faq_h2' => 'Dúvidas de quem embarca em Paranaguá',
    'faq' => [
        [
            'pergunta' => 'Quem está em Paranaguá embarca no CWB dentro da cidade?',
            'resposta' => 'Não. De Paranaguá o CWB (Afonso Pena) fica em São José dos Pinhais. O trecho sai de Centro Histórico pela BR-277.',
        ],
        [
            'pergunta' => 'Em Paranaguá, vocês buscam em Centro Histórico?',
            'resposta' => 'Sim, em Paranaguá. Envie nome na lista do cais em Centro Histórico. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Paranaguá vocês fazem Curitiba?',
            'resposta' => 'Sim, saindo de Paranaguá. Curitiba não é o recorte de Centro Histórico; o horário pela Avenida Ayrton Senna sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Paranaguá o carro fica entre Centro Histórico e Porto?',
            'resposta' => 'Sim, em Paranaguá. A hora à disposição cobre sede e hotel em Centro Histórico e cais e terminal em Porto.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Paranaguá e o CWB',
        'texto' => 'Diga o ponto em Centro Histórico ou Porto, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Paranaguá',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'parana',
            'ancora' => 'Paranaguá e o recorte de Litoral paranaense',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'parana',
            'cidade' => 'curitiba',
            'ancora' => 'Motorista em curitiba',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'parana',
            'cidade' => 'sao-jose-dos-pinhais',
            'ancora' => 'Motorista em sao jose dos pinhais',
        ],
    ],
    'epigrafe' => 'Centro Histórico não é o mesmo recuo de Porto. O motorista segura o acesso; o passageiro segura o horário.',
    'abertura' => [
        'h2' => 'Paranaguá: origem na orla, destino no terminal certo',
        'texto' => [
            'Paranaguá usa Afonso Pena (CWB), em São José dos Pinhais. Quem embarca em Centro Histórico não está no município da pista. A BR-277 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
            'Porto pede cais e terminal. Alexandra pede distrito. Quando Curitiba entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela Avenida Ayrton Senna.',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'Centro Histórico: o relógio do embarque',
            'texto' => 'Centro Histórico concentra sede e hotel. Informe nome na lista do cais.',
        ],
        [
            'h2' => 'Porto e Alexandra',
            'texto' => 'Porto pede cais e terminal. Alexandra pede distrito. A ordem muda o intervalo mais que o mapa.',
        ],
        [
            'h2' => 'Afonso Pena (CWB), em São José dos Pinhais',
            'texto' => 'Afonso Pena (CWB) fica em São José dos Pinhais, não em Paranaguá. O trecho sai pela BR-277. Diga o IATA e o número do voo.',
        ],
    ],
    'aeroportos' => [
        'h2' => 'Terminal e vazão a partir de Paranaguá',
        'itens' => [
            [
                'h3' => 'Afonso Pena — CWB',
                'texto' => 'Afonso Pena (CWB) fica em São José dos Pinhais, não em Paranaguá. O trecho sai pela BR-277. Diga o IATA e o número do voo.',
            ],
            [
                'h3' => 'BR-277 e a vazão para Curitiba',
                'texto' => 'Curitiba e Antonina aparecem no mesmo pedido de Paranaguá. Isso é viagem, não segunda corrida em Centro Histórico.',
            ],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque em Paranaguá',
        'lista' => [
            'Hotel, prédio ou empresa com nome — “em Centro Histórico” não basta.',
            'Qual terminal: CWB em São José dos Pinhais.',
            'Se Curitiba entra depois, a ordem muda o recorte.',
        ],
    ],
];
