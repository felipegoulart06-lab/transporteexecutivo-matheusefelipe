<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'São José dos Pinhais',
    'geo' => ['lat' => -25.5303, 'lng' => -49.2084],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em São José dos Pinhais',
    'seo' => [
        'title' => 'Traslado em São José dos Pinhais: Centro, Afonso Pena e CWB',
        'description' => 'Motorista executivo em São José dos Pinhais para o Centro, Afonso Pena, Costeira e o aeroporto. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro, na Afonso Pena e no aeroporto CWB',
        'og_description' => 'Traslado no município do Afonso Pena: hotel, planta e o terminal CWB.',
        'og_image_alt' => 'Sedan executivo em via de acesso ao aeroporto Afonso Pena',
    ],
    'kicker' => 'Região Metropolitana de Curitiba · PR',
    'h1' => 'Do CWB ao Centro sem perder o recuo da Afonso Pena',
    'olho' => 'São José dos Pinhais não é bairro de Curitiba: é o município do Aeroporto Afonso Pena (CWB). O motorista segura a Linha Verde e a Rui Barbosa; o passageiro segura a pauta — e o terminal certo.',
    'capitulos' => [
        [
            'h2' => 'O município do CWB pede o saguão, não “no aeroporto da capital”',
            'texto' => 'Centro, Costeira, Afonso Pena e o recuo das plantas da Renault e da Volkswagen não compartilham o mesmo acesso. Hotel próximo ao terminal e reunião no Centro cabem no mesmo expediente se o voo e a portaria já estiverem no roteiro.',
        ],
        [
            'h2' => 'Onde o embarque joseense mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Rui Barbosa', 'texto' => 'Sede, hotel e o calçadão. Informe o prédio; “no Centro” não define a porta.'],
                ['h3' => 'Afonso Pena, Costeira e o entorno do terminal', 'texto' => 'Hotéis de passagem (Ibis, similar). O nome evita a volta na via de acesso ao CWB.'],
                ['h3' => 'Plantas e o Distrito Industrial', 'texto' => 'Renault, Volkswagen e o eixo industrial. Protocolo de portaria entra no roteiro junto com o turno.'],
            ],
        ],
        [
            'h2' => 'Rotas urbanas e o salto para o Batel',
            'texto' => 'CWB → hotel na Costeira → Centro → Batel em Curitiba só se a capital entrar no roteiro. A Linha Verde muda o intervalo mais que o quilômetro. Colônia e São Marcos saem com margem própria.',
        ],
        [
            'h2' => 'Afonso Pena — CWB',
            'texto' => 'O terminal internacional fica neste município. Combinamos o voo. A espera no desembarque integra o trecho CWB. Até o Centro de São José o intervalo é urbano; até o Batel, a Linha Verde pesa mais que o mapa.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que evitam atraso no CWB',
        'itens' => [
            ['num' => '01', 'titulo' => 'Terminal e voo', 'texto' => 'Número e horário. O carro sai com margem, não no minuto do check-in.'],
            ['num' => '02', 'titulo' => 'Hotel ou planta', 'texto' => 'Costeira, Centro ou portaria industrial. “Perto do aeroporto” não basta.'],
            ['num' => '03', 'titulo' => 'Curitiba ou cidade', 'texto' => 'O trecho até o Batel entra como recorte próprio. O urbano de São José é outro orçamento.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Afonso Pena',
    'faq' => [
        ['pergunta' => 'O aeroporto de Curitiba fica em São José dos Pinhais?', 'resposta' => 'Sim. O CWB fica neste município. O trecho até o Centro local ou até o Batel entra no roteiro com margem distinta para cada um.'],
        ['pergunta' => 'O motorista espera no CWB se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês entram na planta com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, o recuo da planta não libera.'],
        ['pergunta' => 'Dá para ir ao Batel depois do hotel na Costeira?', 'resposta' => 'Sim. Informe a ordem. A Linha Verde pesa mais que a distância no mapa.'],
    ],
    'cta' => [
        'titulo' => 'Marque o CWB no mesmo recado do hotel',
        'texto' => 'O orçamento de São José dos Pinhais sai sob consulta. Terminal, planta e Centro no mesmo WhatsApp.',
        'botao' => 'Pedir traslado em São José dos Pinhais',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'parana', 'ancora' => 'Foz, Londrina e o recorte paranaense'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'curitiba', 'ancora' => 'Batel, Centro Cívico e o Afonso Pena'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'guarulhos', 'ancora' => 'Cumbica, Centro e o terminal GRU'],
    ],
];
