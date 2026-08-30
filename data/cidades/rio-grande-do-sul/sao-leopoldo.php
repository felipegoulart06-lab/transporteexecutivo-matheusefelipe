<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'São Leopoldo',
    'geo' => ['lat' => -29.7604, 'lng' => -51.1472],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em São Leopoldo',
    'seo' => [
        'title' => 'Unisinos e BR-116: motorista em São Leopoldo e POA',
        'description' => 'Motorista em São Leopoldo para o Centro, São João, o campus da Unisinos e a BR-116 rumo ao Salgado Filho (POA). Vale dos Sinos e orçamento sob consulta.',
        'og_title' => 'Traslado na Unisinos, no Centro de São Leopoldo e na BR-116',
        'og_description' => 'Motorista no Vale dos Sinos: campus, hotel no Centro e o recorte da 116 até o POA.',
        'og_image_alt' => 'Sedan executivo em avenida de São Leopoldo no Vale dos Sinos',
    ],
    'kicker' => 'Vale dos Sinos · RS',
    'h1' => 'Unisinos, Centro e a BR-116 no relógio do Vale dos Sinos',
    'faixas' => [
        [
            'h2' => 'São Leopoldo marca o vale no campus e no asfalto da 116',
            'texto' => 'O relógio da cidade não é o da capital: é o da Unisinos, do Centro e da BR-116. Hotel no Centro, pauta em São João e embarque no campus cabem no mesmo dia se o motorista já saiu com o bloco e o sentido da via — não com o pin de Porto Alegre. O POA pede a 116, não o chute do app.',
        ],
        [
            'h2' => 'Três recortes, um relógio de vale',
            'itens' => [
                ['h3' => 'Centro e o calçadão', 'texto' => 'Sede e hotel. Informe o prédio; o recuo do Centro não é o da Unisinos nem o de São João.'],
                ['h3' => 'São João', 'texto' => 'Pauta residencial e clínicas. O recuo pede rua e número; o nome do bairro sozinho alonga a volta.'],
                ['h3' => 'Campus da Unisinos', 'texto' => 'Bloco e portaria. “Na Unisinos” não define a cancela; envie o prédio e o acesso pedido.'],
            ],
        ],
        [
            'h2' => 'Rotas de pauta, campus e o salto pela 116',
            'texto' => 'Hotel no Centro → São João → Unisinos só se a ordem estiver no roteiro. Novo Hamburgo e a Fenac colam no vale; Porto Alegre e o POA entram pela BR-116, com horário de mancha metropolitana, não como segunda corrida no calçadão.',
        ],
        [
            'h2' => 'Salgado Filho — POA no fim da 116, não na porta do campus',
            'texto' => 'O terminal comercial fica em Porto Alegre. Combinamos o voo. Até o Centro ou a Unisinos, a BR-116 e o pico do Vale pesam mais que o quilômetro no mapa. A Base Aérea de Canoas não substitui o saguão de passageiros.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta a Unisinos e a BR-116',
    'faq' => [
        ['pergunta' => 'O aeroporto de Porto Alegre fica em São Leopoldo?', 'resposta' => 'Não. O POA fica na capital. O trecho até o Centro ou o campus entra no roteiro com margem para a BR-116.'],
        ['pergunta' => 'O recuo da Unisinos pede bloco e portaria?', 'resposta' => 'Sim. Informe o prédio e o acesso. “Na universidade” não coloca o carro na cancela certa.'],
        ['pergunta' => 'Vocês fazem Centro, São João e a Unisinos no mesmo dia?', 'resposta' => 'Sim. Em São Leopoldo, informe a ordem e o nome do hotel. Um motorista articula os três recuos se a margem estiver no roteiro.'],
        ['pergunta' => 'Dá para seguir a Novo Hamburgo depois do campus?', 'resposta' => 'Sim, quando o vale entra no roteiro. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
        ['pergunta' => 'São Leopoldo se trata como bairro de Porto Alegre?', 'resposta' => 'Não. É município do Vale dos Sinos. A 116 liga; o recuo, o hotel e o campus permanecem locais. O orçamento sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Alinhe Unisinos e a BR-116 no mesmo expediente',
        'texto' => 'O orçamento de São Leopoldo sai sob consulta. Centro, campus e POA no mesmo recado.',
        'botao' => 'Solicitar motorista em São Leopoldo',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-grande-do-sul', 'ancora' => 'Serra, Porto e o recorte gaúcho'],
        ['tipo' => 'cidade', 'estado' => 'rio-grande-do-sul', 'cidade' => 'novo-hamburgo', 'ancora' => 'Ideal, Fenac e o recorte até o POA'],
        ['tipo' => 'cidade', 'estado' => 'rio-grande-do-sul', 'cidade' => 'porto-alegre', 'ancora' => 'Moinhos, Centro Histórico e o Salgado Filho'],
    ],
];
