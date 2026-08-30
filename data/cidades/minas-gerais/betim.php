<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Betim',
    'geo' => ['lat' => -19.9679, 'lng' => -44.1982],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Betim',
    'seo' => [
        'title' => 'Carro executivo em Betim: Fiat, REGAP e Confins',
        'description' => 'Motorista em Betim para Alterosas, Centro, Fiat (Stellantis) e REGAP. O CNF fica em Confins. Contagem é o município vizinho. Orçamento sob consulta.',
        'og_title' => 'A Fiat clássica é em Betim — Alterosas, REGAP e CNF',
        'og_description' => 'Polo Stellantis e REGAP neste município. Hotel nas Alterosas. Confins pelo CNF; Contagem vaza ao lado.',
        'og_image_alt' => 'Sedan executivo em avenida de Betim',
    ],
    'kicker' => 'Polo automotivo · MG',
    'h1' => 'Da Fiat às Alterosas — a planta clássica é em Betim',
    'preambulo' => 'Betim não é Contagem nem bairro de Belo Horizonte: é o município do Polo Automotivo Stellantis (Fiat) e da Refinaria Gabriel Passos (REGAP). Hotel nas Alterosas ou no Centro, briefing na planta e voo em Confins cabem no mesmo expediente se o motorista já conhece a BR-381, a MG-010 e o protocolo de cada portaria. O CNF fica em Confins.',
    'artigos' => [
        [
            'h2' => 'A Fiat fica em Betim — a Cidade Industrial ao lado é outro município',
            'texto' => 'Alterosas, Centro e o Distrito Industrial Paulo Camilo não compartilham o mesmo recuo. O Polo Automotivo Stellantis de Betim — a planta clássica da Fiat no Brasil — está neste município, não em Contagem. Hotel e pauta na montadora pedem o nome da portaria. “Me busca em Betim” não coloca o carro na cancela certa. Contagem vizinça: Cidade Industrial e Eldorado vazam no mesmo WhatsApp quando a comitiva cruza a divisa.',
        ],
        [
            'h2' => 'Alterosas, Centro e a REGAP',
            'texto' => 'A Regional Alterosas da prefeitura atende o Jardim das Alterosas e o entorno residencial. O recuo pede rua e número. A REGAP tem endereço institucional na Av. Refinaria Gabriel Passos, 690, Distrito Industrial Paulo Camilo Sul, Betim. A refinaria da Petrobras não é a cancela da Fiat: informe qual portaria. Quando a comitiva dorme nas Alterosas e reúne na planta no primeiro turno, a margem sai do hotel, não do pin da Fernão Dias.',
        ],
        [
            'h2' => 'Confins — CNF no relógio da BR-381',
            'texto' => 'Betim não tem saguão próprio. Combinamos o voo no CNF, em Confins. A BR-381 e a MG-010 mudam o intervalo mais que o mapa admite; a margem sai das Alterosas, não do saguão. A espera no desembarque, quando o voo está no roteiro, integra o trecho CNF.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em Betim',
        'itens' => [
            ['h3' => 'Fiat — Polo Automotivo Stellantis', 'texto' => 'Nome na lista e documento. A planta é betiminha; sem o protocolo, a cancela não libera.'],
            ['h3' => 'REGAP — Refinaria Gabriel Passos', 'texto' => 'Petrobras no município. Informe a portaria; o recuo da REGAP não é o da Fiat.'],
            ['h3' => 'Alterosas, Centro ou Confins', 'texto' => 'Hotel nas Alterosas ou no Centro pede o nome do estabelecimento. CNF e Savassi não são o mesmo pedido urbano; o orçamento sai com margem da BR-381 e da MG-010.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pauta a Fiat, a REGAP e Confins',
    'faq' => [
        ['pergunta' => 'A planta clássica da Fiat fica em Betim ou em Contagem?', 'resposta' => 'Em Betim. O Polo Automotivo Stellantis está neste município. Informe a portaria e o documento da lista; o recuo não se resolve com “Cidade Industrial” — isso é Contagem.'],
        ['pergunta' => 'A REGAP fica em Betim?', 'resposta' => 'Sim. A Petrobras publica a Refinaria Gabriel Passos em Betim, no Distrito Industrial Paulo Camilo Sul. Envie o nome na lista da refinaria; a cancela não é a da Fiat.'],
        ['pergunta' => 'O motorista vai a Confins a partir das Alterosas?', 'resposta' => 'Sim, quando o CNF entra no roteiro. O terminal fica em Confins. A BR-381 e a MG-010 pedem margem; não é corrida instantânea do Jardim das Alterosas.'],
        ['pergunta' => 'Dá para ir a Contagem ou à Savassi e voltar ao hotel em Betim no mesmo dia?', 'resposta' => 'Sim. Contagem é o município vizinho; a Savassi fica em Belo Horizonte. Informe a ordem. Cada divisa pesa mais que a distância no mapa.'],
    ],
    'cta' => [
        'titulo' => 'Mande a portaria da Fiat ou da REGAP junto com o horário do CNF',
        'texto' => 'Informe se o embarque é as Alterosas, o Centro, a Fiat ou a refinaria, o destino e o voo em Confins. Se Contagem entrar, anote a Cidade Industrial no recado certo — é outro município.',
        'botao' => 'Pedir motorista em Betim',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'minas-gerais', 'ancora' => 'Confins, Vale do Aço e a agenda mineira'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'contagem', 'ancora' => 'Cidade Industrial, Eldorado e Ressaca — o município vizinho'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'belo-horizonte', 'ancora' => 'Savassi, Lourdes e o trecho até Confins'],
    ],
];
