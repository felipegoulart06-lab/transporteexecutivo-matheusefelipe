<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Campos dos Goytacazes',
    'geo' => ['lat' => -21.7622, 'lng' => -41.3181],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Campos dos Goytacazes',
    'seo' => [
        'title' => 'Traslado executivo em Campos: Pelinca, Centro e CAW',
        'description' => 'Carro com motorista em Campos dos Goytacazes para Pelinca, Centro, Guarus e o aeroporto CAW. Norte Fluminense, espera combinada e orçamento sob consulta.',
        'og_title' => 'Traslado executivo na Pelinca, no Centro e no aeroporto CAW',
        'og_description' => 'Motorista no Norte Fluminense: hotel na Pelinca, pauta no Centro e o terminal CAW.',
        'og_image_alt' => 'Sedan executivo em avenida da Pelinca em Campos dos Goytacazes',
    ],
    'kicker' => 'Norte Fluminense · RJ',
    'h1' => 'Do CAW à Pelinca sem perder a reunião no Centro',
    'faixas' => [
        [
            'h2' => 'Campos se mede em Pelinca e em rio — o app não lê o Paraíba do Sul',
            'texto' => 'Hotel na Pelinca ou no Parque Tamandaré, reunião no Centro e voo no Bartolomeu Lysandro (CAW) cabem no mesmo dia se o motorista já saiu com a ordem da Alberto Torres e da ponte para Guarus, não com o atalho da hora. Petróleo e cana puxam a pauta; o relógio é o do aeroporto e o do expediente no Centro.',
        ],
        [
            'h2' => 'Três recortes, um relógio de Norte Fluminense',
            'itens' => [
                ['h3' => 'Pelinca e o Parque Tamandaré', 'texto' => 'Hotéis e o eixo comercial. Informe o nome; “na Pelinca” não define o recuo da rua nem a entrada do estabelecimento.'],
                ['h3' => 'Centro e o Parque Leopoldina', 'texto' => 'Sede, cartório e o calçadão. O recuo pede prédio; o Centro mistura comércio e gabinete em quadras curtas.'],
                ['h3' => 'Guarus, do outro lado do rio', 'texto' => 'Quando a pauta cruza o Paraíba do Sul, o trecho deixa a Pelinca. A ponte pesa mais que o mapa admite no fim da tarde.'],
            ],
        ],
        [
            'h2' => 'Rotas de pauta, cana e o salto para Macaé',
            'texto' => 'CAW → hotel na Pelinca → Centro → Parque Leopoldina só se a ordem estiver no roteiro. Outro clássico: Campos → Macaé ou Cabo Frio pela RJ-106, como viagem de óleo e de costa, não como segunda corrida urbana. O orçamento desses trechos sai à parte.',
        ],
        [
            'h2' => 'Bartolomeu Lysandro — CAW',
            'texto' => 'O aeroporto fica no recorte da cidade, no eixo do Parque Tamandaré. Combinamos o voo. A espera no desembarque integra o trecho CAW. Até a Pelinca o intervalo é urbano; até o Centro, a avenida pesa mais que o quilômetro no mapa.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Bartolomeu Lysandro',
    'faq' => [
        ['pergunta' => 'O aeroporto de Campos fica longe da Pelinca?', 'resposta' => 'É trecho urbano. Marcamos margem: o horário de pico e a Alberto Torres alteram o intervalo mais que o mapa.'],
        ['pergunta' => 'O motorista espera no CAW se o voo atrasar?', 'resposta' => 'Sim. Em Campos dos Goytacazes, o número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Dá para ir a Guarus e voltar ao Centro no mesmo turno?', 'resposta' => 'Sim. Informe a ordem. A ponte sobre o Paraíba do Sul pesa no horário; não é o mesmo recorte da Pelinca.'],
        ['pergunta' => 'Vocês seguem a Macaé depois do hotel na Pelinca?', 'resposta' => 'Sim, como viagem pela RJ-106. Não é o mesmo pedido urbano; o horário sai sob consulta.'],
        ['pergunta' => 'O Parque Leopoldina entra no mesmo roteiro da Pelinca?', 'resposta' => 'Sim. Combinamos o ponto de espera. “Em Campos” não define qual dos dois recuos.'],
    ],
    'cta' => [
        'titulo' => 'Diga se o embarque é a Pelinca ou o CAW',
        'texto' => 'O orçamento de Campos sai sob consulta. Centro, Guarus e terminal no mesmo recado.',
        'botao' => 'Pedir traslado em Campos',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-de-janeiro', 'ancora' => 'O recorte fluminense além da capital'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'macae', 'ancora' => 'Centro, Imbetiba e o aeroporto MEA'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'cabo-frio', 'ancora' => 'Passagem, Centro e o aeroporto CFB'],
    ],
];
