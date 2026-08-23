<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Imperatriz',
    'geo' => ['lat' => -5.5186, 'lng' => -47.4777],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Imperatriz',
    'seo' => [
        'title' => 'Motorista em Imperatriz: Centro, Bacuri e ITR',
        'description' => 'Carro com motorista em Imperatriz para o Centro, Bacuri, Nova Imperatriz e o aeroporto Prefeito Renato Moreira. Beira do Tocantins e orçamento sob consulta.',
        'og_title' => 'Traslado no Centro, no Bacuri e no aeroporto ITR',
        'og_description' => 'Motorista na tocantina maranhense: hotel no Centro, pauta no Bacuri e o terminal ITR.',
        'og_image_alt' => 'Sedan executivo em avenida de Imperatriz próxima ao Tocantins',
    ],
    'kicker' => 'Tocantina maranhense · MA',
    'h1' => 'Do ITR ao Bacuri sem perder a reunião no Centro',
    'faixas' => [
        [
            'h2' => 'Imperatriz se lê pelo rio e pela Belém-Brasília — não pelo atalho do app',
            'texto' => 'Hotel no Centro ou no Bacuri, reunião na Nova Imperatriz e voo no Prefeito Renato Moreira (ITR) cabem no mesmo expediente se o motorista já saiu com a ordem da BR-010 e da beira do Tocantins, não com o aceite do minuto. A cidade é porta entre Maranhão, Pará e Tocantins: o relógio da pauta muda quando o destino vira Palmas ou São Luís, não quando o GPS sugere a faixa da esquerda na Dorgival Pinheiro.',
        ],
        [
            'h2' => 'Três recortes, um rio na porta',
            'itens' => [
                [
                    'h3' => 'Centro e a Dorgival Pinheiro',
                    'texto' => 'Sede, hotel e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde e o recuo do Centro não é o do Bacuri.',
                ],
                [
                    'h3' => 'Bacuri e o Parque do Bacuri',
                    'texto' => 'Pauta residencial, clínicas e o eixo arborizado. “No Bacuri” não define a entrada do condomínio nem o ponto de espera do hotel.',
                ],
                [
                    'h3' => 'Nova Imperatriz e a beira do Tocantins',
                    'texto' => 'Expansão urbana e o recuo rumo à BR-010. Quando a pauta mistura Nova, Centro e ITR, a ordem das vias pesa mais que a distância no mapa.',
                ],
            ],
        ],
        [
            'h2' => 'Rotas de pauta que misturam hotel, rio e o salto estadual',
            'texto' => 'ITR → hotel no Centro → Bacuri → retorno ao terminal só se a ordem estiver no roteiro. Outro pedido: Centro → Nova Imperatriz → beira-rio como intervalo combinado. São Luís e Palmas entram como viagem pela BR-010 ou pela malha tocantina — não como segunda corrida urbana. O hotel é embarque, sem convênio de porta. O orçamento sai sob consulta.',
        ],
        [
            'h2' => 'Prefeito Renato Moreira — ITR',
            'texto' => 'O aeroporto fica no recorte da cidade. Combinamos o voo. A espera no desembarque integra o trecho ITR; o passageiro não cruza o saguão atrás de uma placa genérica. Até o Centro ou o Bacuri a margem é urbana; até Palmas ou São Luís, a Belém-Brasília pesa mais que o mapa.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Renato Moreira',
    'faq' => [
        [
            'pergunta' => 'O aeroporto de Imperatriz fica longe do Centro?',
            'resposta' => 'É trecho urbano. Marcamos margem: a Dorgival Pinheiro e o horário de pico alteram o intervalo até o ITR.',
        ],
        [
            'pergunta' => 'O motorista espera no ITR se o voo atrasar?',
            'resposta' => 'Sim. O número do voo entra no roteiro e a espera no terminal faz parte do trecho.',
        ],
        [
            'pergunta' => 'Vocês fazem Centro, Bacuri e Nova Imperatriz no mesmo dia?',
            'resposta' => 'Sim. Informe a ordem e o nome do hotel. Um carro articula os três recuos sem três aceites.',
        ],
        [
            'pergunta' => 'Dá para seguir a Palmas ou a São Luís depois da reunião?',
            'resposta' => 'Sim, como viagem. Não é o mesmo recorte do Centro; o horário sai sob consulta.',
        ],
        [
            'pergunta' => 'O hotel no Bacuri conta como ponto conveniado?',
            'resposta' => 'Não. O hotel entra só como embarque: nome, acesso e espera. O orçamento sai sob consulta.',
        ],
    ],
    'cta' => [
        'titulo' => 'Diga se o embarque é Centro ou Bacuri',
        'texto' => 'O orçamento de Imperatriz sai sob consulta. Rio, pauta e ITR no mesmo recado.',
        'botao' => 'Pedir traslado em Imperatriz',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'maranhao', 'ancora' => 'São Luís, a ilha e o interior tocantino'],
        ['tipo' => 'cidade', 'estado' => 'maranhao', 'cidade' => 'sao-luis', 'ancora' => 'Centro Histórico, Calhau e o SLZ'],
        ['tipo' => 'cidade', 'estado' => 'tocantins', 'cidade' => 'palmas', 'ancora' => 'Plano Diretor, quadras e o PMW'],
    ],
];
