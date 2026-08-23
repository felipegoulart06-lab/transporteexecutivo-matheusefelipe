<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Ipatinga',
    'geo' => ['lat' => -19.4703, 'lng' => -42.5476],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Ipatinga',
    'seo' => [
        'title' => 'Traslado executivo em Ipatinga: Horto, Centro e IPN',
        'description' => 'Motorista executivo em Ipatinga para o Horto, Centro, Cariru e o aeroporto Usiminas. Vale do Aço, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Horto, no Centro e no aeroporto IPN',
        'og_description' => 'Traslado no Vale do Aço: hotel no Horto, pauta na usina e o terminal IPN.',
        'og_image_alt' => 'Sedan executivo em avenida de Ipatinga',
    ],
    'kicker' => 'Vale do Aço · MG',
    'h1' => 'Do IPN ao Horto sem perder a janela da usina',
    'olho' => 'Ipatinga é a cidade da Usiminas e do recinto do Vale do Aço. O motorista segura a Pedro Linhares e a BR-381; o passageiro segura a pauta — não a vaga na porta do hotel.',
    'capitulos' => [
        [
            'h2' => 'A cidade da usina e o aeroporto no recorte do município',
            'texto' => 'Horto, Centro, Cariru e o Ideal cabem no mesmo expediente. O Usiminas (IPN) fica em Santana do Paraíso, na porta do Vale. Hotel (Ibis, similares) e pauta na planta pedem o nome da portaria; “na usina” não define a cancela.',
        ],
        [
            'h2' => 'Onde o embarque ipatinguense mais se concentra',
            'itens' => [
                ['h3' => 'Horto e o shopping', 'texto' => 'Hotéis, torres e o recuo arborizado. Informe o nome do prédio; o Horto não é o Centro.'],
                ['h3' => 'Centro e a Pedro Linhares', 'texto' => 'Sede e o calçadão. O sentido da via muda no fim da tarde.'],
                ['h3' => 'Cariru, Cidade Nobre e o Ideal', 'texto' => 'Pauta residencial e clínicas. “No Cariru” não define a entrada.'],
            ],
        ],
        [
            'h2' => 'Rotas de trabalho, usina e o salto pela 381',
            'texto' => 'IPN → hotel no Horto → usina → Centro só se a ordem estiver no roteiro. Outro clássico: hotel → Coronel Fabriciano, Timóteo ou Governador Valadares como viagem, não como corrida urbana.',
        ],
        [
            'h2' => 'Usiminas — IPN',
            'texto' => 'O aeroporto fica em Santana do Paraíso. Combinamos o voo. A espera no desembarque integra o trecho IPN; até o Horto a margem é urbana, até Valadares não.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que evitam atraso no Vale do Aço',
        'itens' => [
            ['num' => '01', 'titulo' => 'Bairro e prédio', 'texto' => 'Horto ou Centro. “Em Ipatinga” não define o recuo.'],
            ['num' => '02', 'titulo' => 'Voo no IPN', 'texto' => 'Número e horário. O carro sai com margem, não no minuto do check-in.'],
            ['num' => '03', 'titulo' => 'Usina ou cidade', 'texto' => 'A portaria da Usiminas pede nome na lista. O urbano é outro recuo.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Usiminas',
    'faq' => [
        ['pergunta' => 'O aeroporto de Ipatinga fica na cidade?', 'resposta' => 'O IPN fica em Santana do Paraíso. O trecho até o Horto entra no roteiro com margem.'],
        ['pergunta' => 'O motorista espera no IPN se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês entram na usina com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, a cancela não libera.'],
        ['pergunta' => 'Dá para seguir a Governador Valadares depois do hotel?', 'resposta' => 'Sim, como viagem pela BR-381. Não é o mesmo recorte do Horto; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Marque o IPN no mesmo recado do Horto',
        'texto' => 'O orçamento de Ipatinga sai sob consulta. Usina, hotel e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir traslado em Ipatinga',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'minas-gerais', 'ancora' => 'Confins, Vale do Aço e a agenda mineira'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'belo-horizonte', 'ancora' => 'Savassi, Lourdes e o trecho até Confins'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'contagem', 'ancora' => 'Cidade Industrial, Eldorado e Confins'],
    ],
];
