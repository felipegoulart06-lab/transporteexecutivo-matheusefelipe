<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Araucária',
    'geo' => ['lat' => -25.5859, 'lng' => -49.4048],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Araucária',
    'seo' => [
        'title' => 'REPAR e CWB: motorista em Araucária, Sede e porto',
        'description' => 'Carro com motorista em Araucária para a Sede, Capela Velha, a REPAR da Petrobras e o trecho até o CWB. CIC vizinha e eixo ao porto. Orçamento sob consulta.',
        'og_title' => 'Traslado na REPAR, na Sede de Araucária e no CWB',
        'og_description' => 'Motorista na RMC: lista na refinaria, hotel na Sede e o Afonso Pena — o porto entra se a pauta pedir.',
        'og_image_alt' => 'Sedan executivo em via de acesso à REPAR em Araucária',
    ],
    'kicker' => 'Região Metropolitana de Curitiba · PR',
    'h1' => 'A REPAR não libera sem nome na lista — e o CWB não fica na porta',
    'preambulo' => 'Araucária não é o pátio da refinaria nem um bairro de Curitiba: é município com Sede, Capela Velha e a REPAR da Petrobras, que só abre com nome na lista. A Cidade Industrial cola no mapa; o recuo muda na cancela. O Afonso Pena (CWB) fica em São José dos Pinhais. O eixo ao porto de Paranaguá entra só se a pauta atravessar a BR-277.',
    'artigos' => [
        [
            'h2' => 'Artigo 1.º — A refinaria pede lista, não “me busca na Petrobras”',
            'texto' => 'A REPAR (Presidente Getúlio Vargas) opera com protocolo de acesso. Envie o nome na lista e o documento pedido; sem isso, o recuo da cancela não libera. “Na refinaria” não coloca o carro no portão certo. O hotel na Sede entra só como embarque, sem convênio de porta.',
        ],
        [
            'h2' => 'Artigo 2.º — Sede, Capela Velha e o silêncio da CIC ao lado',
            'texto' => 'Sede concentra hotel, sede municipal e o calçadão. Capela Velha pede outro recuo — rua e número. A Cidade Industrial de Curitiba é vizinha, não o mesmo município: quem dorme em Araucária e reúne na CIC cruza a mancha da RMC. Informe o prédio; autocomplete mistura os dois.',
        ],
        [
            'h2' => 'Artigo 3.º — CWB em São José dos Pinhais; porto só com a 277 no recado',
            'texto' => 'O voo comercial sai do Afonso Pena, não da porta da REPAR. Combinamos o voo. Até o terminal, a margem sai da RMC e da Linha Verde. Paranaguá e o cais entram como viagem pela BR-277 — outro orçamento, outro relógio. O valor sai sob consulta.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em Araucária',
        'itens' => [
            ['h3' => 'Portaria da REPAR', 'texto' => 'Nome na lista e documento. Sem protocolo, a cancela da refinaria não libera. Informe o portão, não só “Petrobras”.'],
            ['h3' => 'Hotel na Sede', 'texto' => 'O nome do hotel evita a volta na via de acesso. “Perto da refinaria” não basta. O hotel é só o ponto de saída.'],
            ['h3' => 'Capela Velha e a CIC vizinha', 'texto' => 'Dois recuos. Capela Velha é Araucária; a Cidade Industrial já é Curitiba. Diga o município e o número.'],
            ['h3' => 'Quando a pauta aponta para o CWB ou para o porto', 'texto' => 'Afonso Pena não é o pátio da REPAR. Paranaguá pela 277 sai à parte, com horário de estrada.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pauta a REPAR e voa pelo CWB',
    'faq' => [
        ['pergunta' => 'O aeroporto Afonso Pena fica em Araucária?', 'resposta' => 'Não. O CWB fica em São José dos Pinhais. O trecho até a Sede ou a REPAR entra no roteiro com margem para a RMC.'],
        ['pergunta' => 'Vocês entram na REPAR com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, a cancela da refinaria não libera.'],
        ['pergunta' => 'A Cidade Industrial é o mesmo que Araucária?', 'resposta' => 'Não. A CIC é Curitiba, colada no mapa. Informe o município: o recuo da planta e o da Sede não se trocam.'],
        ['pergunta' => 'Vocês fazem Sede, Capela Velha e a REPAR no mesmo dia?', 'resposta' => 'Sim. Informe a ordem, o portão e o nome do hotel. Um motorista articula os três se a lista estiver no recado.'],
        ['pergunta' => 'Dá para seguir a Paranaguá depois da refinaria?', 'resposta' => 'Sim, como viagem pela BR-277 até o porto. Não é o mesmo recorte da Sede; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte a lista da REPAR ao horário do Afonso Pena',
        'texto' => 'O orçamento de Araucária sai sob consulta. Sede, Capela Velha e CWB no mesmo recado.',
        'botao' => 'Solicitar carro em Araucária',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'parana', 'ancora' => 'Foz, Londrina e o recorte paranaense'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'curitiba', 'ancora' => 'Batel, Centro Cívico e o Afonso Pena'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'sao-jose-dos-pinhais', 'ancora' => 'Centro, Afonso Pena e o terminal CWB'],
    ],
];
