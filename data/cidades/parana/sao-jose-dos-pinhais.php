<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'São José dos Pinhais',
    'geo' => ['lat' => -25.5303, 'lng' => -49.2084],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em São José dos Pinhais',
    'seo' => [
        'title' => 'Motorista em São José dos Pinhais: CWB e Afonso Pena',
        'description' => 'Motorista em São José dos Pinhais para Centro, Afonso Pena, Colônia Rio Grande e o CWB. Batel e Centro Cívico são Curitiba. Orçamento sob consulta.',
        'og_title' => 'O CWB fica em São José dos Pinhais, não em Curitiba',
        'og_description' => 'Afonso Pena (CWB) neste município. Centro e Colônia Rio Grande no recorte urbano. Batel e Centro Cívico vazam para a capital.',
        'og_image_alt' => 'Sedan executivo em via de acesso ao aeroporto Afonso Pena',
    ],
    'kicker' => 'Região Metropolitana de Curitiba · PR',
    'h1' => 'O Afonso Pena (CWB) fica neste município, não em Curitiba',
    'olho' => 'São José dos Pinhais não é bairro de Curitiba: é o município da pista do Aeroporto Internacional Afonso Pena (CWB). O terminal fica na Av. Rocha Pombo, Águas Belas. O motorista segura o acesso ao saguão e a Rui Barbosa; o passageiro segura a pauta — e o recorte certo: cidade ou capital.',
    'capitulos' => [
        [
            'h2' => 'A pista é daqui — o nome “Curitiba” no painel não muda o município',
            'texto' => 'O CWB serve a região metropolitana e aparece como aeroporto de Curitiba. O sítio aeroportuário, porém, está em São José dos Pinhais. Hotel no bairro Afonso Pena, reunião no Centro e desembarque no terminal cabem no mesmo expediente se o voo já estiver no roteiro. Ida ao Batel ou ao Centro Cívico é outro município.',
        ],
        [
            'h2' => 'Três eixos de embarque no município da pista',
            'itens' => [
                ['h3' => 'Centro', 'texto' => 'Sede, hotel e o calçadão. Informe o prédio. “No Centro” não define a porta — e não é o Centro de Curitiba.'],
                ['h3' => 'Afonso Pena', 'texto' => 'Bairro vizinho à área institucional do aeroporto. Hotéis de passagem e o recuo rumo ao CWB. O nome do estabelecimento evita a volta na via de acesso.'],
                ['h3' => 'Colônia Rio Grande', 'texto' => 'Eixo residencial e de serviço, com divisa com Curitiba. Pauta local pede rua e número. Não é o Batel: cruzar a divisa muda o recorte.'],
            ],
        ],
        [
            'h2' => 'Batel e Centro Cívico vazam: isso é Curitiba',
            'texto' => 'CWB → hotel no Afonso Pena → Centro de São José é recorte municipal. CWB → Batel ou Centro Cívico é intermunicipal. A Linha Verde muda o intervalo mais que o quilômetro. Combinamos o voo no Afonso Pena. A espera no desembarque integra o trecho CWB.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que evitam atraso no CWB',
        'itens' => [
            ['num' => '01', 'titulo' => 'Terminal e voo', 'texto' => 'O CWB fica em São José dos Pinhais. Número e horário. O carro sai com margem, não no minuto do check-in.'],
            ['num' => '02', 'titulo' => 'Centro, Afonso Pena ou Colônia Rio Grande', 'texto' => 'Três recuos distintos. “Perto do aeroporto” não basta.'],
            ['num' => '03', 'titulo' => 'Cidade ou Curitiba', 'texto' => 'Batel e Centro Cívico entram como trecho intermunicipal. O urbano de São José dos Pinhais é outro orçamento.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Afonso Pena',
    'faq' => [
        ['pergunta' => 'O aeroporto Afonso Pena fica em São José dos Pinhais ou em Curitiba?', 'resposta' => 'Fica em São José dos Pinhais, na Av. Rocha Pombo, Águas Belas. O nome comercial cita Curitiba porque o terminal serve a capital; o município da pista é este.'],
        ['pergunta' => 'Em São José dos Pinhais, o motorista espera no CWB se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho até o Centro, o Afonso Pena ou a Colônia Rio Grande.'],
        ['pergunta' => 'Ir ao Batel ou ao Centro Cívico é o mesmo pedido do Centro local?', 'resposta' => 'Não. Batel e Centro Cívico ficam em Curitiba. É trecho intermunicipal; o horário sai sob consulta.'],
        ['pergunta' => 'Vocês fazem Centro, Afonso Pena e Colônia Rio Grande no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. A Colônia Rio Grande divide com Curitiba; “me busca na divisa” não define a porta.'],
    ],
    'cta' => [
        'titulo' => 'Marque o CWB no mesmo recado do hotel neste município',
        'texto' => 'Informe se o embarque é o Afonso Pena (CWB), o Centro ou a Colônia Rio Grande. Se Batel ou Centro Cívico entrar, anote que o destino é Curitiba.',
        'botao' => 'Pedir motorista em São José dos Pinhais',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'parana', 'ancora' => 'Foz, Londrina e o recorte paranaense'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'curitiba', 'ancora' => 'Batel e Centro Cívico — o recorte que vaza daqui'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'guarulhos', 'ancora' => 'Cumbica, Centro e o terminal GRU'],
    ],
];
