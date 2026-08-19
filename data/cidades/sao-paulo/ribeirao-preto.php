<?php

declare(strict_types=1);

return [
    'layout' => 'dunas',
    'cidade_nome' => 'Ribeirão Preto',
    'geo' => ['lat' => -21.1775, 'lng' => -47.8103],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Ribeirão Preto',
    'seo' => [
        'title' => 'Traslado executivo em Ribeirão Preto: Centro, Jardim e RAO',
        'description' => 'Motorista executivo em Ribeirão Preto para o Centro, Jardim Irajá, Ribeirânia e o aeroporto Leite Lopes. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro de Ribeirão, no Jardim e no RAO',
        'og_description' => 'Traslado no interior paulista: hotel, pauta médica e o terminal Leite Lopes.',
        'og_image_alt' => 'Sedan executivo em avenida arborizada de Ribeirão Preto',
    ],
    'kicker' => 'Interior paulista · SP',
    'h1' => 'Do Leite Lopes ao Centro sem perder a janela da Ribeirânia',
    'trilha' => [
        'h2' => 'Ribeirão Preto se lê em avenida larga e em pauta médica — não no atalho do app',
        'texto' => 'A cidade alinha hotel no Jardim Irajá ou na Ribeirânia, reunião no Centro e voo no Leite Lopes (RAO). A Independência e a Presidente Vargas mudam o relógio. O motorista sai com essa malha; o passageiro não discute faixa com o GPS na porta do hospital.',
    ],
    'chips' => [
        'h2' => 'Onde o embarque ribeirão-pretano mais se repete',
        'itens' => ['Centro', 'Jardim Irajá', 'Ribeirânia', 'Nova Aliança', 'Campus da USP', 'Aeroporto Leite Lopes'],
    ],
    'historias' => [
        [
            'h2' => 'O hotel como embarque, não como slogan de parceria',
            'texto' => 'JP, Nacional Inn e similares entram no roteiro pelo nome e pelo recuo, não por “no Jardim”. O carro espera no acesso de serviço quando a Independência está tomada.',
        ],
        [
            'h2' => 'Centro, hospitais e a pauta da USP',
            'texto' => 'Clínicas, o HC e o campus. Deslocamentos curtos e repetidos; um carro à disposição rende mais que três chamadas entre a Ribeirânia e o Centro. Informe a unidade; “no hospital” não define a porta.',
        ],
        [
            'h2' => 'Rotas que misturam trabalho, campus e o interior',
            'texto' => 'RAO → hotel no Jardim → Centro → USP só se o campus estiver no roteiro. Outro clássico: hotel → Sertãozinho ou Barrinha como viagem curta, com horário de rodovia, não como segunda corrida urbana.',
        ],
        [
            'h2' => 'Leite Lopes — RAO',
            'texto' => 'O terminal fica no recorte da cidade. Combinamos o voo. A espera no desembarque integra o trecho RAO; a avenida e o pico mudam o intervalo mais que o mapa admite.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Leite Lopes',
    'faq' => [
        ['pergunta' => 'O aeroporto de Ribeirão Preto fica longe do Centro?', 'resposta' => 'É trecho urbano. Marcamos margem: a Independência e o horário de pico alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no RAO se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem hospital, Centro e a USP no mesmo dia?', 'resposta' => 'Sim. Informe a unidade e o bloco. Um motorista à disposição evita três aceites na Ribeirânia.'],
        ['pergunta' => 'Dá para incluir Sertãozinho depois do hotel?', 'resposta' => 'Sim, como viagem. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Una o Jardim ao horário do Leite Lopes',
        'texto' => 'O orçamento de Ribeirão Preto sai sob consulta. Centro, hospital e RAO no mesmo WhatsApp.',
        'botao' => 'Pedir traslado em Ribeirão Preto',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'campinas', 'ancora' => 'Cambuí, Unicamp e o Viracopos'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
    ],
];
