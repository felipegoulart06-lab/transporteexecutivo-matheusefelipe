<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Porto Velho',
    'geo' => ['lat' => -8.76116, 'lng' => -63.9004],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Porto Velho',
    'seo' => [
        'title' => 'Motorista executivo em Porto Velho: Caiari, centro e PVH',
        'description' => 'Carro com motorista em Porto Velho para o Caiari, Centro, Embratel, Areal e o aeroporto Jorge Teixeira. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Caiari, no Centro e no aeroporto PVH',
        'og_description' => 'Motorista na capital rondoniense: hotel, Madeira e o terminal Governador Jorge Teixeira.',
        'og_image_alt' => 'Sedan executivo em avenida de Porto Velho próxima ao rio Madeira',
    ],
    'kicker' => 'Capital rondoniense · RO',
    'h1' => 'Do Jorge Teixeira ao Caiari sem perder a janela do Madeira',
    'intro' => 'Porto Velho se organiza pelo Madeira e pela BR-364. Hotel no Caiari ou no Centro, reunião na Embratel e voo no Governador Jorge Teixeira (PVH) cabem no mesmo expediente se o motorista já saiu com a ordem da avenida, não com o aceite do minuto.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento na capital não é “pegar um carro no porto”',
            'texto' => 'A cidade mistura palácio, ferrovia histórica e hotel de passagem. O recuo no Caiari não é o da Av. Sete de Setembro. Quem tem pauta no Palácio Rio Madeira e check-out no Holiday Inn ou similar precisa de um motorista que já conhece o sentido da via, não o atalho da chuva.',
        ],
        [
            'h2' => 'Quadrantes da capital que mais geram embarque',
            'itens' => [
                ['h3' => 'Caiari e o Centro', 'texto' => 'Hotéis, palácio e o calçamento junto ao rio. Informe o prédio; o Centro mistura sede e comércio em quadras curtas.'],
                ['h3' => 'Embratel e o Areal', 'texto' => 'Torres, clínicas e condomínio. Deslocamentos que esticam no semáforo da Lauro Sodré.'],
                ['h3' => 'Nova Porto Velho e o shopping', 'texto' => 'Pernoite e jantar. O recuo pede o nome do estabelecimento, não “perto do Madeira-Mamoré”.'],
                ['h3' => 'Aeroporto — PVH', 'texto' => 'O Jorge Teixeira fica no recorte da cidade. Combinamos o voo. A espera no desembarque integra o trecho.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta porto-velhense mais pede',
        'itens' => [
            ['titulo' => 'PVH → hotel no Caiari → Palácio Rio Madeira', 'texto' => 'Pouso, pernoite e pauta institucional. Informe se o carro espera na portaria.'],
            ['titulo' => 'Centro → Estrada de Ferro Madeira-Mamoré', 'texto' => 'Visita à ferrovia só se estiver no roteiro. Combinamos o ponto de espera no complexo.'],
            ['titulo' => 'Hotel → Ariquemes ou Ji-Paraná', 'texto' => 'Quando a pauta sai pela BR-364, o trecho entra como viagem. Orçamento à parte, com horário de estrada.'],
            ['titulo' => 'Porto Velho → a ponte do Madeira rumo ao Acre', 'texto' => 'Fronteira estadual. Não é o mesmo recorte do Caiari; o intervalo sai sob consulta.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Jorge Teixeira',
    'faq' => [
        ['pergunta' => 'O aeroporto de Porto Velho fica longe do Caiari?', 'resposta' => 'É trecho urbano. Marcamos margem: a avenida e o temporal da tarde alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no PVH se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem o complexo da Madeira-Mamoré no mesmo dia?', 'resposta' => 'Sim, quando a visita entra no roteiro. Combinamos o ponto de espera; o calçamento não admite recuo improvisado.'],
        ['pergunta' => 'Dá para seguir a Ariquemes depois do hotel?', 'resposta' => 'Sim, como viagem pela BR-364. Não é o mesmo pedido do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Coloque o PVH e o Caiari no mesmo recado',
        'texto' => 'O orçamento de Porto Velho sai sob consulta. Madeira, palácio e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Porto Velho',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rondonia', 'ancora' => 'Ji-Paraná, Ariquemes e o recorte rondoniense'],
        ['tipo' => 'cidade', 'estado' => 'acre', 'cidade' => 'rio-branco', 'ancora' => 'Gameleira, Bosque e o Plácido de Castro'],
        ['tipo' => 'cidade', 'estado' => 'amazonas', 'cidade' => 'manaus', 'ancora' => 'Adrianópolis, Zona Franca e o MAO'],
    ],
];
