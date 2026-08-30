<?php

declare(strict_types=1);

return [
    'layout' => 'gaucha',
    'cidade_nome' => 'Feira de Santana',
    'geo' => ['lat' => -12.2664, 'lng' => -38.9663],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Feira de Santana',
    'seo' => [
        'title' => 'Motorista em Feira de Santana: Kalilândia, Centro e SSA',
        'description' => 'Carro com motorista em Feira de Santana no Centro, na Kalilândia e no Ponto Central. Sem voo comercial no município; o trecho até o SSA pela BR-324 sai sob consulta.',
        'og_title' => 'Traslado na Kalilândia, no Centro e na BR-324 rumo ao SSA',
        'og_description' => 'Motorista no Portal do Sertão: hotel no Centro, pauta na Kalilândia e o saguão em Salvador.',
        'og_image_alt' => 'Sedan executivo em avenida de Feira de Santana',
    ],
    'kicker' => 'Portal do Sertão · BA',
    'h1' => 'Da Kalilândia ao SSA sem inventar saguão no município',
    'coluna' => [
        'h2' => 'Feira é entroncamento — o app não lê a BR-324 nem o horário da feira',
        'texto' => [
            'Centro, Kalilândia e Ponto Central concentram o embarque. Hotel (ibis no São João, ou o nome que você informar no Centro) e a Getúlio Vargas pedem o número da porta, não “no Centro”. A UEFS e o recuo do campus entram no roteiro quando a pauta é acadêmica.',
            'Não há voo comercial regular no município desde junho de 2024: o Aeroporto Governador João Durval Carneiro (FEC) permanece no mapa como aviação geral, não como saguão de malha. O pedido aéreo vaza para o Luís Eduardo Magalhães (SSA), em Salvador, pela BR-324. A BR-116 corta a cidade no sentido sertão–litoral; quando a pauta aponta para o recôncavo ou para a capital, o trecho deixa de ser urbano.',
        ],
    ],
    'lateral' => [
        'h2' => 'Pontos que o pedido feirense mais cita',
        'itens' => [
            ['h3' => 'Centro e a Getúlio Vargas', 'texto' => 'Sede, hotel e o calçadão. Informe o número; a avenida muda de caráter a cada quadra e o recuo do Ponto Central não é o da Kalilândia.'],
            ['h3' => 'Kalilândia e o shopping', 'texto' => 'Torres, clínicas e o Boulevard. Deslocamentos curtos que esticam no semáforo; “na Kalilândia” não define a porta.'],
            ['h3' => 'Ponto Central e a UEFS', 'texto' => 'Comércio denso e o campus quando a reunião é na Transnordestina. O recuo do bloco pede portaria, não GPS na reitoria.'],
        ],
    ],
    'faixa' => [
        'h2' => 'Rotas urbanas e o salto para Salvador pela BR-324',
        'texto' => 'Hotel no Centro → Kalilândia → UEFS só se o campus estiver no roteiro. SSA, Lauro de Freitas ou o recôncavo entram como viagem pela BR-324 ou pela BR-116, com horário de rodovia, não como segunda corrida no Ponto Central. Não marcamos desembarque comercial no FEC.',
    ],
    'faq_h2' => 'Dúvidas de quem pauta Feira e o SSA',
    'faq' => [
        ['pergunta' => 'Feira de Santana tem voo comercial regular no município?', 'resposta' => 'Não. Desde junho de 2024 o João Durval Carneiro não recebe malha regular. O saguão prático é o SSA, em Salvador; o trecho pela BR-324 entra no roteiro sob consulta.'],
        ['pergunta' => 'Em Feira de Santana, o motorista espera no SSA se o voo atrasar?', 'resposta' => 'Sim, quando o voo está no roteiro. O número entra no pedido e a espera no Luís Eduardo Magalhães faz parte do trecho Salvador, não de um terminal em Feira.'],
        ['pergunta' => 'Vocês fazem Kalilândia, Centro e a UEFS no mesmo dia?', 'resposta' => 'Sim. Informe a ordem e o bloco do campus. Um motorista articula os três recuos sem trocar o bairro no cartaz.'],
        ['pergunta' => 'A BR-116 e a BR-324 entram no mesmo recorte do Centro?', 'resposta' => 'Não. O urbano é Centro, Kalilândia e Ponto Central. Salvador pela BR-324 e o sertão pela BR-116 saem como viagem, com horário sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte a Kalilândia ao horário do SSA',
        'texto' => 'O orçamento de Feira de Santana sai sob consulta. Centro, campus e o trecho até Salvador no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Feira de Santana',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'bahia', 'ancora' => 'Feira, Costa do Descobrimento e o recorte baiano'],
        ['tipo' => 'cidade', 'estado' => 'bahia', 'cidade' => 'salvador', 'ancora' => 'Barra, Paralela e o Luís Eduardo Magalhães'],
        ['tipo' => 'cidade', 'estado' => 'sergipe', 'cidade' => 'aracaju', 'ancora' => 'Atalaia, Centro e o Santa Maria'],
    ],
];
