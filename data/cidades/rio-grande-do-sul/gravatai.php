<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Gravataí',
    'geo' => ['lat' => -29.944, 'lng' => -50.9919],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Gravataí',
    'seo' => [
        'title' => 'Planta e freeway: traslado em Gravataí, Centro e POA',
        'description' => 'Traslado em Gravataí para o Centro, Barnabé, a planta da GM e a Freeway até o Salgado Filho (POA). Região Metropolitana e orçamento sob consulta.',
        'og_title' => 'Traslado no Centro de Gravataí, na planta da GM e no POA',
        'og_description' => 'Motorista na Região Metropolitana: hotel no Centro, portaria industrial e a Freeway até o Salgado Filho.',
        'og_image_alt' => 'Sedan executivo em avenida de Gravataí rumo à Freeway',
    ],
    'kicker' => 'Região Metropolitana de Porto Alegre · RS',
    'h1' => 'A planta da GM não é o mesmo pedido do Centro — e o POA pede a freeway',
    'intro' => 'Gravataí separa dois pedidos que o app mistura: o Centro (e o Barnabé) de um lado, a planta da GM e o entorno industrial do outro. O Salgado Filho (POA) entra pela Freeway; não é o mesmo recuo da portaria. Canoas e a capital colam na mancha; o município permanece outro.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Gravataí não é “pegar um carro na montadora”',
            'texto' => 'Centro, Barnabé e o recuo da planta não compartilham o mesmo acesso. Quem tem turno na cancela e check-out no hotel precisa de um motorista que já conhece o protocolo industrial e o sentido da Freeway — não o pin do POA como se fosse a porta da GM.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque gravataiense mais se concentra',
            'itens' => [
                ['h3' => 'Centro', 'texto' => 'Em Gravataí, sede, hotel e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde.'],
                ['h3' => 'Barnabé', 'texto' => 'Pauta residencial e o eixo interno. “No Barnabé” não define o recuo da portaria nem o quarteirão.'],
                ['h3' => 'Planta da GM e o entorno industrial', 'texto' => 'Portaria e turno. Envie o nome na lista e o documento pedido; sem isso, a cancela da montadora não libera.'],
                ['h3' => 'Quando a pauta aponta para o POA', 'texto' => 'O terminal fica em Porto Alegre, pela Freeway. Combinamos o voo. O pico da via pesa mais que o quilômetro no mapa.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta gravataiense mais pede',
        'itens' => [
            ['titulo' => 'Hotel no Centro → planta da GM', 'texto' => 'Pauta na portaria. Envie o nome na lista; o recuo da montadora não é o do calçadão.'],
            ['titulo' => 'Centro → Barnabé', 'texto' => 'Reunião e recuos curtos. Um motorista cobre os dois se a ordem já estiver no roteiro.'],
            ['titulo' => 'Gravataí → POA pela Freeway', 'texto' => 'O aeroporto não fica na porta da planta. Combinamos o voo e a margem da via.'],
            ['titulo' => 'Hotel → Canoas ou Porto Alegre', 'texto' => 'Quando a pauta vaza pela mancha, o recorte deixa de ser só o Centro. Orçamento à parte.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem junta a planta à Freeway',
    'faq' => [
        ['pergunta' => 'A planta da GM e o Centro são o mesmo traslado?', 'resposta' => 'Não. São recuos distintos. Informe se o pedido é a cancela industrial ou o hotel no Centro; o intervalo e o protocolo mudam.'],
        ['pergunta' => 'Como se chega ao aeroporto a partir de Gravataí?', 'resposta' => 'Pela Freeway até o Salgado Filho (POA), em Porto Alegre. O trecho entra no roteiro com margem de via; não é o recuo da montadora.'],
        ['pergunta' => 'Em Gravataí, vocês entram na planta com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, a cancela da GM não libera.'],
        ['pergunta' => 'Vocês fazem Centro, Barnabé e a planta no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. Um motorista articula os três recuos se a margem e a lista estiverem no roteiro.'],
        ['pergunta' => 'Em Gravataí, dá para seguir a Canoas depois do hotel?', 'resposta' => 'Sim. Em Gravataí, quando Canoas entra no roteiro. A mancha é contínua; o recuo muda no município. O horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Diga se o pedido é a planta ou o Centro',
        'texto' => 'O orçamento de Gravataí sai sob consulta. Barnabé, GM e Freeway até o POA no mesmo WhatsApp.',
        'botao' => 'Pedir carro em Gravataí',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-grande-do-sul', 'ancora' => 'Serra, Porto e o recorte gaúcho'],
        ['tipo' => 'cidade', 'estado' => 'rio-grande-do-sul', 'cidade' => 'porto-alegre', 'ancora' => 'Moinhos, Centro Histórico e o Salgado Filho'],
        ['tipo' => 'cidade', 'estado' => 'rio-grande-do-sul', 'cidade' => 'canoas', 'ancora' => 'Centro, Mathias Velho e o POA'],
    ],
];
