<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Brusque',
    'geo' => ['lat' => -27.0977, 'lng' => -48.9106],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Brusque',
    'seo' => [
        'title' => 'Vale têxtil: motorista em Brusque, Centro e NVT',
        'description' => 'Carro com motorista em Brusque para o Centro, Santa Terezinha e as plantas têxteis. Voo no NVT, em Navegantes, não na porta da cidade. Orçamento sob consulta.',
        'og_title' => 'Traslado no Centro de Brusque, na planta têxtil e no NVT',
        'og_description' => 'Motorista no vale do Itajaí: hotel no Centro, portaria em Santa Terezinha e o terminal de Navegantes.',
        'og_image_alt' => 'Sedan executivo em avenida de Brusque no vale têxtil',
    ],
    'kicker' => 'Vale do Itajaí · SC',
    'h1' => 'O vale do Itajaí têxtil pede a portaria de Brusque, não o NVT no mesmo recuo',
    'intro' => 'Brusque costura o vale: portaria no Centro ou em Santa Terezinha, turno na planta, e o Ministro Victor Konder (NVT) só depois da SC-486 rumo a Navegantes. Quem trata o aeroporto como recuo da fábrica perde o check-in. Blumenau e Itajaí colam no mapa; o município não se dissolve neles.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Brusque não é “pegar um carro na fábrica”',
            'texto' => 'Centro, Santa Terezinha e o recuo das plantas têxteis não compartilham o mesmo acesso. Quem tem turno na cancela e check-out no hotel precisa de um motorista que já conhece o protocolo da portaria e o sentido da Rodrigues Alves — não o pin do NVT como se fosse o pátio da cidade.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque brusquense mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Rodrigues Alves', 'texto' => 'Sede, hotel e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde.'],
                ['h3' => 'Santa Terezinha', 'texto' => 'Pauta residencial e o eixo interno. “Na Terezinha” não define o recuo da portaria nem o quarteirão.'],
                ['h3' => 'Plantas têxteis e a cancela', 'texto' => 'Portaria e turno. Envie o nome na lista e o documento pedido; sem isso, o recuo da fábrica não libera.'],
                ['h3' => 'Quando a pauta aponta para o NVT', 'texto' => 'O terminal fica em Navegantes, não em Brusque. Combinamos o voo. A SC-486 e o recorte até Itajaí pesam mais que o mapa admite no pico.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta brusquense mais pede',
        'itens' => [
            ['titulo' => 'Hotel no Centro → planta têxtil', 'texto' => 'Pauta na portaria. Envie o nome na lista; o recuo da fábrica não é o do calçadão.'],
            ['titulo' => 'Centro → Santa Terezinha', 'texto' => 'Reunião e recuos curtos que esticam no semáforo. Um motorista cobre os dois se a ordem já estiver no roteiro.'],
            ['titulo' => 'Brusque → NVT', 'texto' => 'SC-486 rumo a Navegantes. O aeroporto não fica na porta da planta; combinamos o voo e a margem.'],
            ['titulo' => 'Hotel → Blumenau ou Itajaí', 'texto' => 'Quando a pauta vaza pelo vale, o recorte deixa de ser só urbano. Orçamento à parte.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem junta a portaria têxtil ao NVT',
    'faq' => [
        ['pergunta' => 'Brusque tem aeroporto comercial?', 'resposta' => 'O voo prático é o NVT, em Navegantes. O trecho até o Centro ou a planta entra no roteiro com margem para a SC-486 — não é o mesmo recuo da cancela.'],
        ['pergunta' => 'Vocês entram na planta têxtil com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, o recuo da fábrica não libera.'],
        ['pergunta' => 'Vocês fazem Centro, Santa Terezinha e a planta no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. Um motorista articula os três recuos se a margem estiver no roteiro.'],
        ['pergunta' => 'Dá para seguir a Blumenau depois do hotel?', 'resposta' => 'Sim, como viagem pelo vale. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
        ['pergunta' => 'Itajaí e o porto entram no mesmo pedido?', 'resposta' => 'Entram quando o cais está no roteiro. Não é extensão automática da planta; o orçamento sai à parte.'],
    ],
    'cta' => [
        'titulo' => 'Ponha a portaria têxtil no mesmo recado do NVT',
        'texto' => 'O orçamento de Brusque sai sob consulta. Centro, Santa Terezinha e Navegantes no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Brusque',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'santa-catarina', 'ancora' => 'Joinville, Blumenau e o recorte catarinense'],
        ['tipo' => 'cidade', 'estado' => 'santa-catarina', 'cidade' => 'blumenau', 'ancora' => 'Centro, Vorstadt e o eixo do Vale'],
        ['tipo' => 'cidade', 'estado' => 'santa-catarina', 'cidade' => 'itajai', 'ancora' => 'Fazenda, porto e o aeroporto NVT'],
    ],
];
