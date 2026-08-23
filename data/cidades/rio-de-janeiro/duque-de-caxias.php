<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Duque de Caxias',
    'geo' => ['lat' => -22.7868, 'lng' => -43.3132],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Duque de Caxias',
    'seo' => [
        'title' => 'Motorista em Duque de Caxias: Centro, REDUC e GIG',
        'description' => 'Motorista executivo em Duque de Caxias para o Centro, 25 de Agosto, Gramacho, REDUC e o Galeão. Via Dutra, espera combinada e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro, na REDUC e rumo ao Galeão',
        'og_description' => 'Traslado na Baixada: hotel, portaria da refinaria e o recuo até o GIG.',
        'og_image_alt' => 'Sedan executivo em avenida de Duque de Caxias',
    ],
    'kicker' => 'Baixada Fluminense · RJ',
    'h1' => 'Da REDUC ao Centro sem perder a janela do Galeão',
    'preambulo' => 'Duque de Caxias não é subúrbio genérico do Rio: é o município da REDUC, da Via Dutra e do recuo curto até o Galeão, na Ilha do Governador. Hotel no Centro ou no Jardim 25 de Agosto, briefing na refinaria e o voo no GIG cabem no mesmo expediente se o motorista já conhece a Washington Luís e o protocolo de cada portaria.',
    'artigos' => [
        [
            'h2' => 'A Baixada pede a portaria, não “perto do Rio”',
            'texto' => 'Centro, 25 de Agosto, Gramacho e Saracuruna não compartilham o mesmo recuo. Hotel (Ibis, similares) e pauta na REDUC pedem o nome da cancela. “Me busca em Caxias” não coloca o carro na lista da refinaria nem na rua certa do Jardim 25 de Agosto.',
        ],
        [
            'h2' => 'Gramacho, Saracuruna e o silêncio da espera',
            'texto' => 'Eixo industrial e o recorte residencial ao norte. O recuo pede rua e número. Quando a comitiva dorme no 25 de Agosto e reúne na REDUC às seis, a margem sai do hotel, não do aceite do minuto na Washington Luís.',
        ],
        [
            'h2' => 'Galeão — GIG na porta da Baixada',
            'texto' => 'O Galeão fica na Ilha do Governador, a poucos quilômetros. Combinamos o voo e o terminal. A espera no desembarque integra o trecho GIG. O Santos Dumont (SDU) entra como alternativa de ponte aérea; até lá a Avenida Brasil pesa mais que o mapa. Via Dutra e Washington Luís mudam o intervalo conforme o horário.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em Duque de Caxias',
        'itens' => [
            ['h3' => 'REDUC e o protocolo de portaria', 'texto' => 'Nome na lista e documento. Sem isso, o recuo da refinaria não libera.'],
            ['h3' => 'Hotel no Centro ou no 25 de Agosto', 'texto' => 'O nome do hotel evita a volta na Washington Luís. “Perto do Centro” não basta.'],
            ['h3' => 'Gramacho e Saracuruna', 'texto' => 'Pauta logística. Informe o galpão ou o distrito; os acessos se repetem no nome.'],
            ['h3' => 'Quando a pauta aponta para o GIG ou o SDU', 'texto' => 'Não é o mesmo pedido urbano. O orçamento sai à parte, com horário de Dutra ou de Avenida Brasil.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pauta a REDUC e o Galeão',
    'faq' => [
        ['pergunta' => 'O Galeão fica longe do Centro de Duque de Caxias?', 'resposta' => 'É o aeroporto mais próximo. Marcamos margem: a Washington Luís e o acesso à Ilha do Governador alteram o intervalo mais que o mapa.'],
        ['pergunta' => 'O motorista espera no GIG se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês entram na REDUC com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, a cancela não libera.'],
        ['pergunta' => 'Dá para usar o Santos Dumont em vez do Galeão?', 'resposta' => 'Sim, quando o SDU entra no roteiro. Não é o mesmo recorte do GIG; a Avenida Brasil pede outra margem.'],
        ['pergunta' => 'Vocês fazem Gramacho e o Centro no mesmo expediente?', 'resposta' => 'Sim. Informe a ordem e o ponto de espera. A Via Dutra e a Washington Luís são eixos distintos.'],
    ],
    'cta' => [
        'titulo' => 'Envie a portaria junto com o horário do GIG',
        'texto' => 'O orçamento de Duque de Caxias sai sob consulta. REDUC, hotel e Galeão no mesmo recado.',
        'botao' => 'Solicitar carro em Duque de Caxias',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-de-janeiro', 'ancora' => 'O recorte fluminense além da capital'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Santos Dumont, Galeão e a Zona Sul'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'niteroi', 'ancora' => 'Icaraí, Centro e a Ponte Rio-Niterói'],
    ],
];
