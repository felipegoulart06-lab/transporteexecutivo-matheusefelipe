<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Jaraguá do Sul',
    'geo' => ['lat' => -26.4851, 'lng' => -49.0713],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Jaraguá do Sul',
    'seo' => [
        'title' => 'Motorista em Jaraguá do Sul: Centro, WEG e JOI',
        'description' => 'Carro com motorista em Jaraguá do Sul para o Centro, Vila Lalau, Czerniewicz, a portaria da WEG e o aeroporto de Joinville (JOI). Orçamento sob consulta.',
        'og_title' => 'Traslado no Centro de Jaraguá, na WEG e no aeroporto JOI',
        'og_description' => 'Motorista no norte catarinense: hotel no Centro, pauta na WEG e o terminal JOI.',
        'og_image_alt' => 'Sedan executivo em avenida de Jaraguá do Sul',
    ],
    'kicker' => 'Norte catarinense · SC',
    'h1' => 'Da WEG ao Centro sem perder a janela do JOI',
    'intro' => 'Jaraguá do Sul concentra indústria — a WEG à frente — e o eixo da BR-280 até Joinville. Hotel no Centro, pauta na Vila Lalau ou em Czerniewicz e voo no Lauro Carneiro de Loyola (JOI) cabem no mesmo expediente se o motorista já saiu com o nome na portaria e o horário da 280, não com o aceite da hora.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Jaraguá não é “pegar um carro na WEG”',
            'texto' => 'Centro, Vila Lalau, Czerniewicz e o recuo da WEG não compartilham o mesmo acesso. Quem tem turno na planta e check-out no hotel precisa de um motorista que já conhece o protocolo da cancela e o sentido da Getúlio Vargas, não o atalho do app.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque jaraguaense mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Getúlio Vargas', 'texto' => 'Em Jaraguá do Sul, sede, hotel e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde.'],
                ['h3' => 'Vila Lalau e Czerniewicz', 'texto' => 'Torres e o recorte residencial-industrial. “Na Lalau” não define o recuo da portaria.'],
                ['h3' => 'WEG e a zona industrial', 'texto' => 'Em Jaraguá do Sul, portaria e turno. Envie o nome na lista e o documento pedido; sem isso, a cancela não libera.'],
                ['h3' => 'Quando a pauta aponta para o JOI', 'texto' => 'O terminal fica em Joinville, pela BR-280. Combinamos o voo. A espera no desembarque integra o trecho.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta jaraguaense mais pede',
        'itens' => [
            ['titulo' => 'Hotel no Centro → WEG', 'texto' => 'Pauta na portaria. Envie o nome na lista; o recuo da planta não é o do calçadão.'],
            ['titulo' => 'Jaraguá do Sul → JOI', 'texto' => 'BR-280 até Joinville. O aeroporto não fica na porta do Centro; combinamos o voo e a margem.'],
            ['titulo' => 'Centro → Vila Lalau → Czerniewicz', 'texto' => 'Reunião e recuos curtos que esticam no semáforo. Um motorista cobre os três se a ordem já estiver no roteiro.'],
            ['titulo' => 'Hotel → Blumenau ou Joinville', 'texto' => 'Quando a pauta vaza pela BR-280, o recorte deixa de ser só urbano. Orçamento à parte.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem junta a WEG ao JOI',
    'faq' => [
        ['pergunta' => 'Jaraguá do Sul tem aeroporto comercial?', 'resposta' => 'O voo prático é o JOI, em Joinville, pela BR-280. O trecho até o Centro ou a WEG entra no roteiro com margem para a via.'],
        ['pergunta' => 'Em Jaraguá do Sul, o motorista espera no JOI se o voo atrasar?', 'resposta' => 'Sim. O JOI fica em Joinville, pela BR-280; combinamos o voo e a espera no Lauro Carneiro de Loyola integra o trecho até o Centro ou a WEG.'],
        ['pergunta' => 'Vocês entram na WEG com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista da WEG e o documento pedido. Sem protocolo, a cancela da Vila Lalau não libera.'],
        ['pergunta' => 'Vocês fazem Centro, Vila Lalau e Czerniewicz no mesmo dia?', 'resposta' => 'Sim. Informe a ordem entre Centro, Vila Lalau e Czerniewicz. Um motorista articula os três recuos pela Getúlio Vargas se a margem estiver no roteiro.'],
        ['pergunta' => 'Em Jaraguá do Sul, dá para seguir a Blumenau depois do hotel?', 'resposta' => 'Sim, como viagem pela BR-280. Não é o mesmo recorte do Centro jaraguaense; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte a WEG ao horário do JOI',
        'texto' => 'O orçamento de Jaraguá do Sul sai sob consulta. Centro, planta e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Jaraguá do Sul',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'santa-catarina', 'ancora' => 'Joinville, Blumenau e o recorte catarinense'],
        ['tipo' => 'cidade', 'estado' => 'santa-catarina', 'cidade' => 'joinville', 'ancora' => 'Centro, América e o aeroporto JOI'],
        ['tipo' => 'cidade', 'estado' => 'santa-catarina', 'cidade' => 'blumenau', 'ancora' => 'Centro, Vorstadt e o eixo do Vale'],
    ],
];
