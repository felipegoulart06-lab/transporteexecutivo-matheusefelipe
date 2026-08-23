<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Macaé',
    'geo' => ['lat' => -22.3708, 'lng' => -41.7869],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Macaé',
    'seo' => [
        'title' => 'Traslado executivo em Macaé: Centro, Imbetiba e MEA',
        'description' => 'Motorista executivo em Macaé para o Centro, Imbetiba, Cavaleiros, Aeroporto e o eixo do petróleo. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro de Macaé, em Imbetiba e no MEA',
        'og_description' => 'Traslado na capital do petróleo: hotel, base e o terminal Benedito Lacerda.',
        'og_image_alt' => 'Sedan executivo em avenida de Macaé',
    ],
    'kicker' => 'Norte fluminense · RJ',
    'h1' => 'Do MEA a Imbetiba sem perder a janela da base',
    'preambulo' => 'Macaé não é passeio de orla: é o município das bases e do aeroporto Benedito Lacerda (MEA). Hotel no Centro ou em Cavaleiros, briefing em Imbetiba e o voo para a bacia cabem no mesmo expediente se o motorista já conhece o protocolo de cada portaria.',
    'artigos' => [
        [
            'h2' => 'A cidade do petróleo pede a base, não “na praia”',
            'texto' => 'Centro, Imbetiba, Cavaleiros e o Parque de Tubos não compartilham o mesmo recuo. Hotel (Ibis, similares) e pauta na operadora pedem o nome da base. “Me busca em Macaé” não coloca o carro na cancela certa.',
        ],
        [
            'h2' => 'Imbetiba, Cavaleiros e o silêncio da espera',
            'texto' => 'Orla executiva e o eixo residencial. O recuo pede rua e número. Quando a comitiva dorme em Cavaleiros e reúne na base às cinco da manhã, a margem sai do hotel, não do aceite do minuto.',
        ],
        [
            'h2' => 'Benedito Lacerda — MEA',
            'texto' => 'O aeroporto fica no recorte da cidade e concentra o voo para a bacia. Combinamos o voo e o ponto de encontro. A espera no desembarque integra o trecho MEA. Até Imbetiba o intervalo é urbano; até Campos ou Cabo Frio, a RJ-106 pesa mais que o mapa.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em Macaé',
        'itens' => [
            ['h3' => 'Base e portaria', 'texto' => 'Nome na lista e documento. Sem isso, o recuo da operadora não libera.'],
            ['h3' => 'Hotel no Centro ou em Cavaleiros', 'texto' => 'O nome do hotel evita a volta na do Norte. “Perto da praia” não basta.'],
            ['h3' => 'Imbetiba e o Parque de Tubos', 'texto' => 'Pauta logística. Informe o galpão; os acessos se repetem no nome.'],
            ['h3' => 'Quando a pauta aponta para Campos ou Cabo Frio', 'texto' => 'Não é o mesmo pedido urbano. O orçamento sai à parte, com horário de RJ-106.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pauta a base e o MEA',
    'faq' => [
        ['pergunta' => 'O aeroporto de Macaé fica longe de Imbetiba?', 'resposta' => 'É trecho urbano. Marcamos margem: o horário de turno da base altera o intervalo mais que o mapa.'],
        ['pergunta' => 'O motorista espera no MEA se o voo da bacia atrasar?', 'resposta' => 'Sim. O número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês entram na base com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, a cancela não libera.'],
        ['pergunta' => 'Dá para seguir a Cabo Frio depois do hotel?', 'resposta' => 'Sim, como viagem. Não é o mesmo recorte de Imbetiba; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Envie a base junto com o horário do MEA',
        'texto' => 'O orçamento de Macaé sai sob consulta. Imbetiba, hotel e terminal no mesmo recado.',
        'botao' => 'Solicitar carro em Macaé',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-de-janeiro', 'ancora' => 'O recorte fluminense além da capital'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'cabo-frio', 'ancora' => 'Passagem, Centro e o aeroporto CFB'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Santos Dumont, Galeão e a Zona Sul'],
    ],
];
