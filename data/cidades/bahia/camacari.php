<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Camaçari',
    'geo' => ['lat' => -12.6975, 'lng' => -38.3238],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Camaçari',
    'seo' => [
        'title' => 'Traslado executivo em Camaçari: Centro, Polo e Arembepe',
        'description' => 'Motorista executivo em Camaçari para o Centro, Polo Industrial, Abrantes, Arembepe e o eixo até o SSA. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro, no Polo e em Arembepe',
        'og_description' => 'Traslado no litoral norte baiano: hotel, planta do Polo e o recuo rumo ao SSA.',
        'og_image_alt' => 'Sedan executivo em via de Camaçari',
    ],
    'kicker' => 'Litoral norte · BA',
    'h1' => 'Do Polo ao Centro sem perder a janela de Arembepe',
    'intro' => 'Camaçari concentra o Polo Industrial, a orla de Arembepe e o recorte até Salvador. Hotel no Centro ou em Abrantes, reunião na planta e voo no Luís Eduardo Magalhães (SSA) cabem no mesmo expediente se o motorista já saiu com a ordem da Paralela e da BA-099, não com o aceite do minuto.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Camaçari não é “pegar um carro no Polo”',
            'texto' => 'Centro, Polo, Abrantes e Arembepe não compartilham o mesmo recuo. Quem tem pauta na Ford, na Braskem ou no condomínio industrial e check-out no hotel precisa de um motorista que já conhece o protocolo da cancela, não o atalho do app.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque camaçariense mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a do Canal', 'texto' => 'Sede e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde.'],
                ['h3' => 'Polo Industrial de Camaçari', 'texto' => 'Plantas e logística. Nome na lista e documento; sem isso, a cancela não libera.'],
                ['h3' => 'Abrantes, Jauá e Arembepe', 'texto' => 'Hotéis de orla e visita combinada. “Na praia” não distingue Arembepe de Guarajuba.'],
                ['h3' => 'Quando a pauta aponta para o SSA', 'texto' => 'A Paralela e a BA-099 pesam mais que o mapa. Combinamos o voo.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta camaçariense mais pede',
        'itens' => [
            ['titulo' => 'Hotel no Centro → Polo', 'texto' => 'Pauta na planta. Envie o nome na portaria e o documento pedido.'],
            ['titulo' => 'Camaçari → SSA', 'texto' => 'O aeroporto de Salvador não fica na porta do Polo. Combinamos o voo e a margem da Paralela.'],
            ['titulo' => 'Centro → Arembepe', 'texto' => 'Visita à orla só se estiver no roteiro. O recuo da praia pede ponto de espera.'],
            ['titulo' => 'Hotel → Lauro de Freitas ou Salvador', 'texto' => 'Quando a pauta vaza pela Estrada do Coco, o recorte deixa de ser só urbano.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta o Polo e a orla',
    'faq' => [
        ['pergunta' => 'O motorista vai ao SSA a partir de Camaçari?', 'resposta' => 'Sim, quando o SSA entra no roteiro. A Paralela pede margem; não é corrida instantânea do Polo.'],
        ['pergunta' => 'Vocês entram no Polo com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, a cancela não libera.'],
        ['pergunta' => 'Dá para ir a Arembepe e voltar ao hotel no mesmo dia?', 'resposta' => 'Sim, quando a orla entra no roteiro. Não é o mesmo recorte do Polo; o horário sai sob consulta.'],
        ['pergunta' => 'O motorista espera no SSA se o voo atrasar?', 'resposta' => 'Sim, quando o voo está no roteiro. A espera no terminal faz parte do trecho.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Polo ao horário do SSA',
        'texto' => 'O orçamento de Camaçari sai sob consulta. Planta, orla e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Camaçari',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'bahia', 'ancora' => 'Feira, Costa do Descobrimento e o recorte baiano'],
        ['tipo' => 'cidade', 'estado' => 'bahia', 'cidade' => 'salvador', 'ancora' => 'Barra, Paralela e o Luís Eduardo Magalhães'],
        ['tipo' => 'cidade', 'estado' => 'bahia', 'cidade' => 'feira-de-santana', 'ancora' => 'Centro, Kalilândia e o João Durval'],
    ],
];
