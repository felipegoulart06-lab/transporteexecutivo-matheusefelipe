<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Juiz de Fora',
    'geo' => ['lat' => -21.7622, 'lng' => -43.3434],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Juiz de Fora',
    'seo' => [
        'title' => 'Motorista executivo em Juiz de Fora: Centro, São Mateus e IZA',
        'description' => 'Carro com motorista em Juiz de Fora para o Centro, São Mateus, Cascatinha e o aeroporto da Zona da Mata. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Centro, no São Mateus e no aeroporto IZA',
        'og_description' => 'Motorista na Zona da Mata: hotel, pauta no Centro e o terminal Itamar Franco.',
        'og_image_alt' => 'Sedan executivo em via de Juiz de Fora ao entardecer',
    ],
    'kicker' => 'Zona da Mata · MG',
    'h1' => 'Do IZA ao São Mateus sem perder a pauta no Centro',
    'olho' => 'Juiz de Fora é compacta no mapa e alongada no relógio quando o destino é o aeroporto da Zona da Mata, em Goianá. O motorista segura a BR-267; o passageiro segura a reunião.',
    'capitulos' => [
        [
            'h2' => 'A cidade universitária e o aeroporto que ficou no município vizinho',
            'texto' => 'Centro, São Mateus, Cascatinha e a UFJF cabem em poucos quilômetros. O Presidente Itamar Franco (IZA) não. Quem marca voo e almoço no mesmo dia precisa de um carro que já saiu do hotel, não de um aceite na porta do Independent Hotel ou similar.',
        ],
        [
            'h2' => 'Onde o embarque juiz-forano mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Halfeld', 'texto' => 'Sede, hotel e o calçadão. Informe o prédio; o recuo da Halfeld não é o da UFJF.'],
                ['h3' => 'São Mateus, Cascatinha e o shopping', 'texto' => 'Clínicas, torres e o desnível. “No São Mateus” não define a entrada do condomínio.'],
                ['h3' => 'UFJF e o Bairro São Pedro', 'texto' => 'Campus e pauta acadêmica. O recuo pede bloco e portaria, não GPS na reitoria.'],
            ],
        ],
        [
            'h2' => 'Rotas de trabalho, campus e a serra rumo ao Rio',
            'texto' => 'IZA → hotel no Centro → São Mateus → UFJF só se a ordem estiver no roteiro. Outro clássico: hotel → Petrópolis ou ao Rio pela BR-040 como viagem, não como corrida urbana.',
        ],
        [
            'h2' => 'Presidente Itamar Franco — IZA',
            'texto' => 'O aeroporto da Zona da Mata fica em Goianá, não na porta do Centro. Combinamos o voo. A espera no desembarque integra o trecho IZA; a BR-267 pesa mais que o mapa admite.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que evitam atraso na Zona da Mata',
        'itens' => [
            ['num' => '01', 'titulo' => 'Bairro e prédio', 'texto' => 'Centro ou São Mateus. “Em Juiz de Fora” não define o recuo.'],
            ['num' => '02', 'titulo' => 'Voo no IZA', 'texto' => 'Número e horário. O carro sai com margem para Goianá, não no minuto do check-in.'],
            ['num' => '03', 'titulo' => 'Rio ou cidade', 'texto' => 'O trecho até o Rio entra como viagem. O urbano é outro orçamento.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Itamar Franco',
    'faq' => [
        ['pergunta' => 'O aeroporto de Juiz de Fora fica na cidade?', 'resposta' => 'O IZA fica em Goianá. O trecho até o Centro ou o São Mateus entra no roteiro com margem para a BR-267.'],
        ['pergunta' => 'O motorista espera no IZA se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem Centro, São Mateus e a UFJF no mesmo dia?', 'resposta' => 'Sim. Informe a ordem e o bloco do campus. Um motorista articula os três.'],
        ['pergunta' => 'Dá para seguir ao Rio ou a Petrópolis depois do hotel?', 'resposta' => 'Sim, como viagem pela BR-040. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Marque o IZA no mesmo recado do hotel',
        'texto' => 'O orçamento de Juiz de Fora sai sob consulta. Centro, campus e Goianá no mesmo WhatsApp.',
        'botao' => 'Pedir traslado em Juiz de Fora',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'minas-gerais', 'ancora' => 'Confins, Vale do Aço e a agenda mineira'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'belo-horizonte', 'ancora' => 'Savassi, Lourdes e o trecho até Confins'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'petropolis', 'ancora' => 'Centro Histórico, Quitandinha e a serra'],
    ],
];
