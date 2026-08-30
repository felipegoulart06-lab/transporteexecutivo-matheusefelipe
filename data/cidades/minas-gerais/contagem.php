<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Contagem',
    'geo' => ['lat' => -19.9317, 'lng' => -44.0536],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Contagem',
    'seo' => [
        'title' => 'Motorista executivo em Contagem: Centro, Cidade Industrial e CNF',
        'description' => 'Carro com motorista em Contagem para o Centro, Cidade Industrial, Eldorado e o eixo até Confins. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Centro, na Cidade Industrial e rumo a Confins',
        'og_description' => 'Motorista na Grande BH: hotel, planta e o recuo da MG-10 até o CNF.',
        'og_image_alt' => 'Sedan executivo em avenida de Contagem',
    ],
    'kicker' => 'Grande Belo Horizonte · MG',
    'h1' => 'Da Cidade Industrial ao Centro sem perder a janela de Confins',
    'preambulo' => 'Contagem não é bairro de Belo Horizonte: é o município da Cidade Industrial e do recuo até Confins. Hotel no Eldorado ou no Centro, reunião na planta e voo no CNF cabem no mesmo expediente se o motorista já conhece a Via Expressa e o protocolo de cada portaria.',
    'artigos' => [
        [
            'h2' => 'A cidade industrial pede a planta, não “na Grande BH”',
            'texto' => 'Centro, Cidade Industrial, Eldorado e Ressaca não compartilham o mesmo recuo. Hotel (Ibis, similares) e pauta no condomínio industrial ou na portaria da planta pedem o nome da cancela. “Me busca em Contagem” não coloca o carro na entrada certa.',
        ],
        [
            'h2' => 'Eldorado, shopping e o silêncio da espera',
            'texto' => 'Torres, clínicas e o eixo da João César de Oliveira. O recuo pede rua e número. Quando a comitiva dorme em Contagem e reúne na Savassi, o trecho cruza o município — a margem sai da Via Expressa, não do Waze.',
        ],
        [
            'h2' => 'Confins — CNF no relógio da Cidade Industrial',
            'texto' => 'Contagem não tem saguão próprio. Combinamos o voo em Confins. A MG-010 e a Via Expressa mudam o intervalo mais que o mapa admite; a margem sai do hotel, não do saguão.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em Contagem',
        'itens' => [
            ['h3' => 'Centro e o Paço', 'texto' => 'Informe o prédio. O recuo do Paço não é o da Cidade Industrial.'],
            ['h3' => 'Cidade Industrial e condomínios fabris', 'texto' => 'Portaria, turno e documento na lista. A montadora fica em Betim; aqui o recuo é do parque industrial contagenense.'],
            ['h3' => 'Eldorado e o shopping', 'texto' => 'Hotel e clínicas. O nome do estabelecimento evita a volta na João César.'],
            ['h3' => 'Quando a pauta aponta para a Savassi ou Confins', 'texto' => 'Não é o mesmo pedido urbano. O orçamento sai à parte, com margem da MG-10.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pauta a Cidade Industrial',
    'faq' => [
        ['pergunta' => 'O motorista vai a Confins a partir de Contagem?', 'resposta' => 'Sim, quando o CNF entra no roteiro. A MG-10 pede margem; não é corrida instantânea do Eldorado.'],
        ['pergunta' => 'Em Contagem, vocês entram na planta com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista da planta e o documento pedido. Sem protocolo, a cancela da Cidade Industrial não libera.'],
        ['pergunta' => 'Em Contagem, dá para ir à Savassi e voltar ao hotel no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. A Via Expressa pesa mais que a distância no mapa.'],
        ['pergunta' => 'Em Contagem, o motorista espera no CNF se o voo atrasar?', 'resposta' => 'Sim. Acompanhamos o painel do CNF com o número do voo; a espera no desembarque integra o trecho desde o Eldorado ou o Centro.'],
    ],
    'cta' => [
        'titulo' => 'Informe a portaria da Cidade Industrial e o voo no CNF',
        'texto' => 'O orçamento de Contagem sai sob consulta. Industrial, hotel e CNF no mesmo recado.',
        'botao' => 'Solicitar carro em Contagem',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'minas-gerais', 'ancora' => 'Confins, Vale do Aço e a agenda mineira'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'belo-horizonte', 'ancora' => 'Savassi, Lourdes e o trecho até Confins'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'ipatinga', 'ancora' => 'Horto, Centro e o aeroporto IPN'],
    ],
];
