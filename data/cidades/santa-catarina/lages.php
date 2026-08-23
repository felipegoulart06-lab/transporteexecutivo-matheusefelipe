<?php

declare(strict_types=1);

return [
    'layout' => 'gaucha',
    'cidade_nome' => 'Lages',
    'geo' => ['lat' => -27.815, 'lng' => -50.3259],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Lages',
    'seo' => [
        'title' => 'Serra catarinense: traslado em Lages, Centro e geada',
        'description' => 'Traslado em Lages para o Centro, Coral, a Uniplac e a geada da serra. LAJ em Correia Pinto costuma ficar sem voo; prático FLN ou XAP. Orçamento sob consulta.',
        'og_title' => 'Traslado no Centro de Lages, no Coral e na serra',
        'og_description' => 'Motorista no Planalto Serrano: hotel no Centro, geada no relógio e voo prático no FLN ou no XAP.',
        'og_image_alt' => 'Sedan executivo em avenida de Lages na serra catarinense',
    ],
    'kicker' => 'Serra catarinense · SC',
    'h1' => 'A serra catarinense se lê em geada e em LAJ, não em app de praia',
    'coluna' => [
        'h2' => 'Lages acorda em geada — o app de orla não lê o Coral nem o Correia Pinto',
        'texto' => [
            'O Planalto Serrano muda a manhã: o para-brisa e a BR-282 pedem margem que o litoral não cobra. Centro, Coral e a Universidade do Planalto Catarinense (Uniplac) concentram o expediente. O aeroporto de Correia Pinto (LAJ) fica no recorte vizinho e muitas vezes sem linha regular; o voo prático costuma ser o Hercílio Luz (FLN) ou o Serafin Enoss Bertaso (XAP), em Chapecó.',
            'O pedido executivo é de espera e de altitude: hotel pelo nome, campus pelo bloco, saída cedo se o voo for na ilha ou no oeste. Praia e ponte de Florianópolis não se improvisam depois do Coral. O orçamento sai sob consulta.',
        ],
    ],
    'lateral' => [
        'h2' => 'Pontos que o pedido lageano mais cita',
        'itens' => [
            ['h3' => 'Centro e o calçadão da serra', 'texto' => 'Sede e hotel. Informe o prédio; a geada e o sentido da via mudam o intervalo no início da manhã.'],
            ['h3' => 'Coral e a Uniplac', 'texto' => 'Pauta residencial, clínicas e o campus. O recuo da universidade pede bloco e portaria, não “na Uniplac”.'],
            ['h3' => 'LAJ — e o voo prático em FLN ou XAP', 'texto' => 'Correia Pinto atende o que a malha do dia oferecer. Sem linha útil, combinamos Florianópolis ou Chapecó, com horário de serra.'],
        ],
    ],
    'faixa' => [
        'h2' => 'Quando a pauta desce a serra rumo à ilha ou ao oeste',
        'texto' => 'Hotel no Centro, Coral e Uniplac no mesmo recado. O LAJ entra só se houver voo. Florianópolis e o FLN pedem a BR-282 e margem de serra; Chapecó e o XAP, o recorte oeste. Nem um nem outro é o mesmo intervalo do calçadão lageano.',
    ],
    'faq_h2' => 'Dúvidas de quem pauta Lages no Planalto Serrano',
    'faq' => [
        ['pergunta' => 'O aeroporto de Lages (LAJ) tem voo regular?', 'resposta' => 'O Correia Pinto costuma ficar sem linha regular. O terminal prático é o FLN, em Florianópolis, ou o XAP, em Chapecó. Informe o voo; o recorte de serra muda.'],
        ['pergunta' => 'A geada altera o horário de apresentação?', 'resposta' => 'Sim, no inverno do planalto. Marcamos margem de manhã; o app de orla não lê o asfalto da BR-282.'],
        ['pergunta' => 'Vocês fazem Centro, Coral e a Uniplac no mesmo dia?', 'resposta' => 'Sim. Informe o bloco do campus e o nome do hotel. Um motorista articula os três recuos.'],
        ['pergunta' => 'Dá para seguir a Florianópolis depois do hotel?', 'resposta' => 'Sim, como viagem pela BR-282. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
        ['pergunta' => 'Chapecó entra no mesmo pedido de Lages?', 'resposta' => 'Entra como viagem até o XAP ou o oeste, não como corrida urbana. O orçamento sai à parte.'],
    ],
    'cta' => [
        'titulo' => 'Combine o Centro com a geada e o voo prático',
        'texto' => 'O orçamento de Lages sai sob consulta. Coral, Uniplac e FLN ou XAP no mesmo WhatsApp.',
        'botao' => 'Pedir carro em Lages',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'santa-catarina', 'ancora' => 'Litoral, Vale e o recorte catarinense'],
        ['tipo' => 'cidade', 'estado' => 'santa-catarina', 'cidade' => 'florianopolis', 'ancora' => 'Jurerê, Centro e o Hercílio Luz'],
        ['tipo' => 'cidade', 'estado' => 'santa-catarina', 'cidade' => 'chapeco', 'ancora' => 'Centro, Médici e o terminal XAP'],
    ],
];
