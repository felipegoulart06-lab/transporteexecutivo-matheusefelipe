<?php

declare(strict_types=1);

return [
    'layout' => 'rio',
    'cidade_nome' => 'Blumenau',
    'geo' => ['lat' => -26.9155, 'lng' => -49.0709],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Blumenau',
    'seo' => [
        'title' => 'Motorista em Blumenau: Centro, Vila Nova e Navegantes',
        'description' => 'Carro com motorista em Blumenau no Centro, na Vila Nova e na Itoupava. Sem jet comercial próprio; o saguão prático é o NVT, o JOI ou o FLN, pela BR-470.',
        'og_title' => 'Traslado no Centro, na Vila Nova e na BR-470 rumo ao NVT',
        'og_description' => 'Motorista no Vale do Itajaí: hotel na Rua XV, planta na Vila Nova e o terminal em Navegantes.',
        'og_image_alt' => 'Sedan executivo em rua do Centro de Blumenau',
    ],
    'kicker' => 'Vale do Itajaí · SC',
    'h1' => 'Do Centro ao NVT sem vender o Quero-Quero como saguão',
    'corrente' => [
        [
            'h2' => 'Blumenau se organiza pelo rio e pela BR-470 — o jet comercial fica fora',
            'texto' => 'Quem chega de malha regular pousa no Ministro Victor Konder (NVT), em Navegantes, ou usa o Lauro Carneiro de Loyola (JOI), em Joinville, e o Hercílio Luz (FLN), em Florianópolis. O Aeroporto Regional de Blumenau (BNU), o Quero-Quero, atende aviação geral e executiva de pequeno porte: não é terminal de jet comercial nesta data. Hotel no Centro (Slaviero na Rua 7 de Setembro, ou o nome que você informar) e planta na Vila Nova cabem no mesmo expediente se o motorista já saiu com a ordem da via, não com o aceite do minuto.',
        ],
        [
            'h2' => 'Pontos da cidade que a agenda blumenauense mais cita',
            'itens' => [
                ['h3' => 'Centro e a Rua XV de Novembro', 'texto' => 'Hotéis, sede e o calçamento. Informe o prédio; o Centro mistura comércio e pernoite em quadras curtas. A 7 de Setembro não é a Vila Nova.'],
                ['h3' => 'Vila Nova, Garcia e a zona industrial', 'texto' => 'Plantas e clínicas. Protocolo de portaria entra no roteiro junto com o horário do turno. “Na Vila Nova” não define a cancela.'],
                ['h3' => 'Itoupava Norte, Seca e Central', 'texto' => 'Pauta residencial e o norte do vale. O recuo pede qual Itoupava e o número; a ponte sobre o Itajaí-Açu muda o intervalo no pico.'],
            ],
        ],
        [
            'h2' => 'NVT pela BR-470; JOI e FLN quando a malha pede',
            'texto' => 'NVT → hotel no Centro → Vila Nova é o clássico do vale: a margem sai de Navegantes, não da fila do táxi no saguão. JOI e FLN entram quando o voo não é o de Navegantes — trechos mais longos, orçamento à parte. Evento no Parque Vila Germânica só se estiver no roteiro, com ponto de espera combinado. Balneário Camboriú e Itajaí vazam pela mesma BR-470, como viagem, não como segunda corrida na Rua XV.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem voa por Navegantes, Joinville ou Florianópolis',
    'faq' => [
        ['pergunta' => 'Blumenau tem jet comercial próprio no Quero-Quero?', 'resposta' => 'Não nesta data. O BNU atende aviação geral. O saguão prático da malha é o NVT, em Navegantes; JOI e FLN entram quando o voo é por lá. Não marcamos espera de jet regular no Quero-Quero.'],
        ['pergunta' => 'Em Blumenau, o motorista espera no NVT se o voo atrasar?', 'resposta' => 'Sim, quando o voo está no roteiro. O número entra no pedido e a espera no Ministro Victor Konder faz parte do trecho Navegantes, pela BR-470.'],
        ['pergunta' => 'Vocês fazem Centro, Vila Nova e a Itoupava no mesmo dia?', 'resposta' => 'Sim. Informe a ordem e qual Itoupava. Um motorista articula os três recuos; a ponte sobre o rio pesa mais que o mapa.'],
        ['pergunta' => 'Dá para seguir a Joinville ou a Florianópolis depois do hotel?', 'resposta' => 'Sim, como viagem até o JOI ou o FLN. Não é o mesmo recorte do Centro; o horário sai sob consulta. Se o voo for o de Navegantes, o destino é o NVT.'],
    ],
    'cta' => [
        'titulo' => 'Junte o hotel da Rua XV ao horário do NVT',
        'texto' => 'O orçamento de Blumenau sai sob consulta. Vila Nova, Itoupava e Navegantes no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Blumenau',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'santa-catarina', 'ancora' => 'Joinville, Blumenau e o recorte catarinense'],
        ['tipo' => 'cidade', 'estado' => 'santa-catarina', 'cidade' => 'joinville', 'ancora' => 'Centro, América e o JOI'],
        ['tipo' => 'cidade', 'estado' => 'santa-catarina', 'cidade' => 'balneario-camboriu', 'ancora' => 'Avenida Central, orla e o NVT'],
    ],
];
