<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Montes Claros',
    'geo' => ['lat' => -16.7282, 'lng' => -43.8582],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Montes Claros',
    'seo' => [
        'title' => 'Motorista executivo em Montes Claros: Centro, Ibituruna e MOC',
        'description' => 'Carro com motorista em Montes Claros para o Centro, Ibituruna, Major Prates e o aeroporto Mário Ribeiro. Norte de Minas, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Centro, no Ibituruna e no aeroporto MOC',
        'og_description' => 'Motorista no Norte de Minas: hotel, pauta no Centro e o terminal MOC.',
        'og_image_alt' => 'Sedan executivo em avenida de Montes Claros',
    ],
    'kicker' => 'Norte de Minas · MG',
    'h1' => 'Do MOC ao Ibituruna sem perder a pauta no Centro',
    'olho' => 'Montes Claros é o polo do Norte de Minas. O motorista segura a Mestra Fininha e a Independência; o passageiro segura a reunião — e o horário do voo, quando houver.',
    'capitulos' => [
        [
            'h2' => 'A capital do norte mineiro e o aeroporto no recorte da cidade',
            'texto' => 'Centro, Ibituruna, Major Prates e a Unimontes cabem no mesmo expediente. O Mário Ribeiro (MOC) fica no município. Hotel (Ibis, similar) e pauta no Centro pedem o nome do prédio; “em Montes Claros” não define o recuo.',
        ],
        [
            'h2' => 'Onde o embarque montes-clarense mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Mestra Fininha', 'texto' => 'Sede, hotel e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde.'],
                ['h3' => 'Ibituruna, Major Prates e o shopping', 'texto' => 'Clínicas, torres e o eixo residencial. “No Ibituruna” não define a entrada do condomínio.'],
                ['h3' => 'Unimontes e o campus', 'texto' => 'Pauta acadêmica. O recuo pede bloco e portaria, não GPS na reitoria.'],
            ],
        ],
        [
            'h2' => 'Rotas de trabalho, campus e o salto para o sertão',
            'texto' => 'MOC → hotel no Centro → Ibituruna → Unimontes só se a ordem estiver no roteiro. Outro clássico: hotel → Janaúba, Pirapora ou a BR-135 como viagem, não como corrida urbana.',
        ],
        [
            'h2' => 'Mário Ribeiro — MOC',
            'texto' => 'O aeroporto fica no recorte da cidade. Combinamos o voo. A espera no desembarque integra o trecho MOC. Até o Centro ou o Ibituruna, a avenida pesa mais que o quilômetro no mapa.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que evitam atraso no Norte de Minas',
        'itens' => [
            ['num' => '01', 'titulo' => 'Bairro e prédio', 'texto' => 'Centro ou Ibituruna. “Em Montes Claros” não define o recuo.'],
            ['num' => '02', 'titulo' => 'Voo no MOC', 'texto' => 'Número e horário. O carro sai com margem, não no minuto do check-in.'],
            ['num' => '03', 'titulo' => 'Cidade ou sertão', 'texto' => 'Janaúba ou Pirapora entram como viagem. O urbano é outro orçamento.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Mário Ribeiro',
    'faq' => [
        ['pergunta' => 'O aeroporto de Montes Claros fica longe do Centro?', 'resposta' => 'É trecho urbano. Marcamos margem: a Independência e o horário de pico alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no MOC se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem Centro, Ibituruna e a Unimontes no mesmo dia?', 'resposta' => 'Sim. Informe a ordem e o bloco do campus. Um motorista articula os três.'],
        ['pergunta' => 'Dá para seguir a Janaúba depois do hotel?', 'resposta' => 'Sim, como viagem. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Marque o MOC no mesmo recado do hotel',
        'texto' => 'O orçamento de Montes Claros sai sob consulta. Centro, Ibituruna e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir traslado em Montes Claros',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'minas-gerais', 'ancora' => 'Confins, Vale do Aço e a agenda mineira'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'belo-horizonte', 'ancora' => 'Savassi, Lourdes e o trecho até Confins'],
        ['tipo' => 'cidade', 'estado' => 'bahia', 'cidade' => 'vitoria-da-conquista', 'ancora' => 'Candeias, Centro e o Glauber Rocha'],
    ],
];
