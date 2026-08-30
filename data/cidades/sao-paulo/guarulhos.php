<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Guarulhos',
    'geo' => ['lat' => -23.4538, 'lng' => -46.5333],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Guarulhos',
    'seo' => [
        'title' => 'Motorista em Guarulhos: Centro, Macedo e terminal GRU',
        'description' => 'Carro com motorista em Guarulhos para o Centro, o Macedo, a Vila Galvão, a Dutra e o aeroporto GRU, no município. Terminal, hotel e espera. Orçamento sob consulta.',
        'og_title' => 'Traslado no Macedo, na Vila Galvão e nos terminais de Cumbica',
        'og_description' => 'GRU fica em Guarulhos. Combinamos o recuo do Centro, o voo e o terminal certo em Cumbica.',
        'og_image_alt' => 'Sedan executivo em via de acesso ao aeroporto de Guarulhos',
    ],
    'kicker' => 'Cumbica e a cidade · SP',
    'h1' => 'Do Macedo ao saguão certo de GRU, no município',
    'preambulo' => 'Guarulhos é o município do Aeroporto Internacional de São Paulo/Guarulhos – Governador André Franco Montoro (GRU). O pedido da página é embarque na cidade — Centro, Macedo, Vila Galvão, bairro Presidente Dutra — e o recuo do terminal em Cumbica. Não é traslado da capital: a Hélio Smidt e a Monteiro Lobato saem da malha guarulhense.',
    'artigos' => [
        [
            'h2' => 'O município do GRU pede o número do terminal, não “no aeroporto”',
            'texto' => 'Terminais 1, 2 e 3 não compartilham o mesmo recuo. Hotel em Cumbica ou no Presidente Dutra e pauta no Centro pedem o voo e o terminal no roteiro. “Me busca no GRU” não coloca o carro na porta certa. O acesso local entra pela Monteiro Lobato até a Hélio Smidt.',
        ],
        [
            'h2' => 'Centro, Macedo e Vila Galvão são origem urbana, não saguão',
            'texto' => 'Sede, clínica e o eixo da Paes de Barros. O recuo pede rua e número. Vila Galvão tem recorte próprio, com o terminal de ônibus como referência de bairro — não substitui o endereço da portaria. Macedo cola no Centro; “perto do Paço” não distingue a porta.',
        ],
        [
            'h2' => 'Dutra, Cumbica e o relógio do desembarque',
            'texto' => 'A Rodovia Presidente Dutra (BR-116) corta o município e dá nome ao bairro Presidente Dutra, vizinho de Cumbica. Combinamos voo, terminal e ponto de encontro. A espera no desembarque integra o trecho GRU. Até o Centro de Guarulhos o intervalo é urbano; a Dutra no pico pesa mais que o mapa.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em Guarulhos',
        'itens' => [
            ['h3' => 'Terminal 1, 2 ou 3', 'texto' => 'Informe o número do voo. Os três recuos de Cumbica não se trocam no mesmo cartaz.'],
            ['h3' => 'Centro, Macedo e Vila Galvão', 'texto' => 'Pauta urbana do município. Informe o prédio; o sentido da via muda no pico.'],
            ['h3' => 'Hotel em Cumbica ou no Presidente Dutra', 'texto' => 'O nome do hotel evita a volta na Monteiro Lobato. “Perto do aeroporto” não basta.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem embarca em Guarulhos e pousa em GRU',
    'faq' => [
        ['pergunta' => 'O aeroporto GRU fica em Guarulhos ou na capital?', 'resposta' => 'Em Guarulhos, em Cumbica, na Rodovia Hélio Smidt. A página trata do município — Centro, Macedo, Vila Galvão — e do terminal, não de outro recorte.'],
        ['pergunta' => 'Vocês distinguem os terminais 2 e 3?', 'resposta' => 'Sim. O terminal entra no roteiro junto com o voo. Não improvisamos o recuo no saguão vizinho.'],
        ['pergunta' => 'O motorista espera no GRU se o voo internacional atrasar?', 'resposta' => 'Sim. Acompanhamos o painel com o número do voo. A espera no terminal integra o trecho GRU.'],
        ['pergunta' => 'Dá para ir do hotel em Cumbica ao Centro de Guarulhos?', 'resposta' => 'Sim. É trecho urbano do município. Informe o nome do hotel e o prédio no Centro ou no Macedo.'],
    ],
    'cta' => [
        'titulo' => 'Envie o terminal junto com o horário do voo',
        'texto' => 'Informe o embarque no Centro, no Macedo ou em Cumbica, o terminal de GRU e o horário de apresentação. O orçamento de Guarulhos sai sob consulta.',
        'botao' => 'Pedir motorista em Guarulhos',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Interior e metrópole paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Quando o voo da pauta não é o GRU de Cumbica'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'campinas', 'ancora' => 'Viracopos fica em Campinas, não em Guarulhos'],
    ],
];
