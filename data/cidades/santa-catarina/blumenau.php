<?php

declare(strict_types=1);

return [
    'layout' => 'rio',
    'cidade_nome' => 'Blumenau',
    'geo' => ['lat' => -26.9155, 'lng' => -49.0709],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Blumenau',
    'seo' => [
        'title' => 'Traslado executivo em Blumenau: Centro, Vila Nova e NVT',
        'description' => 'Motorista executivo em Blumenau para o Centro, Vila Nova, Garcia, Vorstadt e o aeroporto de Navegantes. Vale, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro de Blumenau, na Vila Nova e no NVT',
        'og_description' => 'Traslado no Vale do Itajaí: hotel, pauta no Centro e o terminal de Navegantes.',
        'og_image_alt' => 'Sedan executivo em rua do Centro de Blumenau',
    ],
    'kicker' => 'Vale do Itajaí · SC',
    'h1' => 'Do NVT ao Centro sem perder a janela da Vila Nova',
    'corrente' => [
        [
            'h2' => 'Blumenau se organiza pelo rio e pela BR-470 — o relógio é o de Navegantes',
            'texto' => 'Quem chega de voo pousa no Ministro Victor Konder (NVT), em Navegantes, não na Rua XV. Hotel no Centro ou na Vila Nova, reunião no Garcia e o trecho até o terminal cabem no mesmo expediente se o motorista já saiu com a ordem da via, não com o aceite do minuto.',
        ],
        [
            'h2' => 'Pontos da cidade que a agenda blumenauense mais cita',
            'itens' => [
                ['h3' => 'Centro e a Rua XV de Novembro', 'texto' => 'Hotéis (Slaviero, similar), sede e o calçamento. Informe o prédio; o Centro mistura comércio e pernoite em quadras curtas.'],
                ['h3' => 'Vila Nova, Garcia e a zona industrial', 'texto' => 'Em Blumenau, plantas e clínicas. Protocolo de portaria entra no roteiro junto com o horário do turno.'],
                ['h3' => 'Vorstadt, Velha e o Parque Vila Germânica', 'texto' => 'Evento e visita combinada. O recuo da Oktoberfest pede ponto de espera, não GPS no pavilhão.'],
                ['h3' => 'Ponta Aguda e o Itajaí-Açu', 'texto' => 'Pernoite e jantar à beira do rio. Combinamos o acesso; a enchente e o pico mudam o intervalo.'],
            ],
        ],
        [
            'h2' => 'Rotas de trabalho, vale e porta do litoral',
            'itens' => [
                ['h3' => 'NVT → hotel no Centro → Vila Nova', 'texto' => 'Pouso, pernoite e planta. A margem sai de Navegantes, não da fila do táxi no saguão.'],
                ['h3' => 'Centro → Parque Vila Germânica', 'texto' => 'Evento só se estiver no roteiro. Combinamos o ponto de espera no complexo.'],
                ['h3' => 'Blumenau → Balneário Camboriú ou Itajaí', 'texto' => 'Quando a pauta vaza para o litoral, o trecho entra como viagem. Orçamento à parte, com horário de BR-470.'],
            ],
        ],
        [
            'h2' => 'Navegantes — NVT',
            'texto' => 'O terminal internacional fica no litoral, não na Rua XV. Combinamos o voo. A espera no desembarque integra o trecho NVT; a BR-470 e a entrada do vale pesam mais que o mapa admite.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa em Navegantes',
    'faq' => [
        ['pergunta' => 'O aeroporto de Blumenau fica na cidade?', 'resposta' => 'O voo comercial chega em Navegantes (NVT). O trecho até o Centro ou a Vila Nova entra no roteiro com margem para a BR-470.'],
        ['pergunta' => 'Em Blumenau, o motorista espera no NVT se o voo atrasar?', 'resposta' => 'Sim. Em Blumenau, o número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem o Parque Vila Germânica no mesmo dia?', 'resposta' => 'Sim, quando o evento entra no roteiro. Combinamos o ponto de espera; o complexo não admite recuo improvisado.'],
        ['pergunta' => 'Dá para seguir a Camboriú depois do hotel?', 'resposta' => 'Sim. Em Blumenau, como viagem. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o NVT ao hotel da Rua XV',
        'texto' => 'O orçamento de Blumenau sai sob consulta. Vale, planta e Navegantes no mesmo WhatsApp.',
        'botao' => 'Pedir carro em Blumenau',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'santa-catarina', 'ancora' => 'Joinville, Blumenau e o recorte catarinense'],
        ['tipo' => 'cidade', 'estado' => 'santa-catarina', 'cidade' => 'joinville', 'ancora' => 'Centro, América e o JOI'],
        ['tipo' => 'cidade', 'estado' => 'santa-catarina', 'cidade' => 'balneario-camboriu', 'ancora' => 'Avenida Central, orla e o NVT'],
    ],
];
