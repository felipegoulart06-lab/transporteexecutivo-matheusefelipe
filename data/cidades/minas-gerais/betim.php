<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Betim',
    'geo' => ['lat' => -19.9679, 'lng' => -44.1982],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Betim',
    'seo' => [
        'title' => 'Traslado executivo em Betim: Alterosas, Fiat e CNF',
        'description' => 'Motorista executivo em Betim para as Alterosas, a Fiat, a REGAP e Confins pela BR-381. A planta fica no município; espera combinada e orçamento sob consulta.',
        'og_title' => 'Carro com motorista nas Alterosas, na Fiat e rumo a Confins',
        'og_description' => 'Traslado em Betim: hotel, portaria da Fiat e o recuo da BR-381 até o CNF.',
        'og_image_alt' => 'Sedan executivo em avenida de Betim',
    ],
    'kicker' => 'Polo automotivo · MG',
    'h1' => 'Da Fiat às Alterosas sem perder a janela de Confins',
    'preambulo' => 'Betim não é Contagem nem bairro de Belo Horizonte: é o município da Fiat Automóveis e da REGAP. Hotel nas Alterosas ou no Centro, briefing na planta e voo em Confins cabem no mesmo expediente se o motorista já conhece a BR-381, a MG-010 e o protocolo de cada portaria.',
    'artigos' => [
        [
            'h2' => 'A Fiat fica em Betim — não “na Grande BH”',
            'texto' => 'Alterosas, Centro, PTB e Ingá não compartilham o mesmo recuo. A planta da Fiat Automóveis está em Betim, não em Contagem. Hotel (Ibis, similares) e pauta na montadora ou na REGAP pedem o nome da portaria. “Me busca em Betim” não coloca o carro na cancela certa.',
        ],
        [
            'h2' => 'Alterosas, PTB e o silêncio da espera',
            'texto' => 'Torres, clínicas e o eixo residencial. O recuo pede rua e número. Quando a comitiva dorme nas Alterosas e reúne na Fiat no primeiro turno, a margem sai do hotel, não do Waze da Fernão Dias. O Ingá e o PTB pedem ponto de espera próprio.',
        ],
        [
            'h2' => 'Confins — CNF no relógio da BR-381',
            'texto' => 'Betim não tem saguão próprio. Combinamos o voo em Confins. A BR-381 e a MG-010 mudam o intervalo mais que o mapa admite; a margem sai das Alterosas, não do saguão. A espera no desembarque, quando o voo está no roteiro, integra o trecho CNF.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em Betim',
        'itens' => [
            ['h3' => 'Fiat e o protocolo de portaria', 'texto' => 'Nome na lista e documento. A planta é betiminha; sem o protocolo, a cancela não libera.'],
            ['h3' => 'REGAP e o turno da refinaria', 'texto' => 'Petrobras no município. Informe a portaria; o recuo da REGAP não é o da Fiat.'],
            ['h3' => 'Hotel nas Alterosas ou no Centro', 'texto' => 'O nome do estabelecimento evita a volta na Fernão Dias. “Perto das Alterosas” não basta.'],
            ['h3' => 'Quando a pauta aponta para Confins ou a Savassi', 'texto' => 'Não é o mesmo pedido urbano. O orçamento sai à parte, com margem da BR-381 e da MG-010.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pauta a Fiat e Confins',
    'faq' => [
        ['pergunta' => 'A Fiat fica em Contagem ou em Betim?', 'resposta' => 'A Fiat Automóveis está em Betim. Informe a portaria e o documento da lista; o recuo não se resolve com “Cidade Industrial”.'],
        ['pergunta' => 'O motorista vai a Confins a partir de Betim?', 'resposta' => 'Sim, quando o CNF entra no roteiro. A BR-381 e a MG-010 pedem margem; não é corrida instantânea das Alterosas.'],
        ['pergunta' => 'Vocês entram na REGAP com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista da REGAP e o documento pedido. Sem protocolo, a cancela da refinaria não libera.'],
        ['pergunta' => 'Em Betim, dá para ir à Savassi e voltar ao hotel no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. O trecho até Belo Horizonte pesa mais que a distância no mapa.'],
        ['pergunta' => 'Em Betim, o motorista espera no CNF se o voo atrasar?', 'resposta' => 'Sim. Seguimos o voo no painel de Confins; a espera no saguão do CNF integra o trecho desde as Alterosas ou o Centro.'],
    ],
    'cta' => [
        'titulo' => 'Mande a portaria da Fiat junto com o horário do CNF',
        'texto' => 'O orçamento de Betim sai sob consulta. Fiat, Alterosas e CNF no mesmo recado.',
        'botao' => 'Solicitar carro em Betim',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'minas-gerais', 'ancora' => 'Confins, Vale do Aço e a agenda mineira'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'contagem', 'ancora' => 'Cidade Industrial, Eldorado e Confins'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'belo-horizonte', 'ancora' => 'Savassi, Lourdes e o trecho até Confins'],
    ],
];
