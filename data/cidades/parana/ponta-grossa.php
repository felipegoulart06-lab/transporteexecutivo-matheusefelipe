<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Ponta Grossa',
    'geo' => ['lat' => -25.0916, 'lng' => -50.1668],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Ponta Grossa',
    'seo' => [
        'title' => 'Traslado em Ponta Grossa: Centro, Oficinas e CWB',
        'description' => 'Motorista executivo em Ponta Grossa para o Centro, Oficinas, Uvaranas, Nova Rússia e o Afonso Pena (CWB) pela BR-277. Campos Gerais e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro, nas Oficinas e no CWB',
        'og_description' => 'Traslado nos Campos Gerais: hotel nas Oficinas, pauta no Centro e o Afonso Pena pela 277.',
        'og_image_alt' => 'Sedan executivo em avenida de Ponta Grossa',
    ],
    'kicker' => 'Campos Gerais · PR',
    'h1' => 'Das Oficinas ao Centro sem perder a janela da 277',
    'intro' => 'Ponta Grossa concentra o agronegócio dos Campos Gerais, a UEPG e o eixo até Curitiba. Hotel no Centro ou nas Oficinas, reunião em Uvaranas e voo no Afonso Pena (CWB) cabem no mesmo expediente se o motorista já saiu com a ordem da Vicente Machado e da BR-376 — o campo de Sant\'Ana (PGZ) é só recorte local, sem linha regular desde março de 2025.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Ponta Grossa não é “pegar um carro no Centro”',
            'texto' => 'Centro, Oficinas, Uvaranas e Nova Rússia não compartilham o mesmo recuo. Quem tem pauta na cooperativa e check-out no hotel precisa de um motorista que já conhece o sentido da Balduíno Taques e a janela da 277 até o CWB, não o atalho do app.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque ponta-grossense mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Vicente Machado', 'texto' => 'Sede, hotel e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde.'],
                ['h3' => 'Oficinas e Nova Rússia', 'texto' => 'Hotéis e torres. “Nas Oficinas” não define o recuo da portaria nem o quarteirão da República.'],
                ['h3' => 'Uvaranas e o campus da UEPG', 'texto' => 'Pauta acadêmica e o recinto universitário. O recuo pede bloco e portaria, não “na universidade”.'],
                ['h3' => 'Quando a pauta aponta para o CWB', 'texto' => 'O voo comercial sai do Afonso Pena, em São José dos Pinhais: BR-376 até o contorno e BR-277 até o terminal. O PGZ não substitui essa janela.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta ponta-grossense mais pede',
        'itens' => [
            ['titulo' => 'Hotel nas Oficinas → Centro', 'texto' => 'Reunião e sede. Informe o nome do hotel e o prédio; o semáforo da Balduíno estica o intervalo.'],
            ['titulo' => 'Centro → UEPG → Uvaranas', 'texto' => 'Campus e pauta. Um motorista cobre os dois se a ordem do bloco já estiver no roteiro.'],
            ['titulo' => 'Ponta Grossa → CWB', 'texto' => 'BR-376 e BR-277 até o Afonso Pena. Combinamos o voo; a espera no desembarque integra o trecho.'],
            ['titulo' => 'Hotel → cooperativa ou planta', 'texto' => 'Portaria e turno dos Campos Gerais. Envie o nome na lista; sem isso, o recuo não libera.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem usa o CWB a partir de Ponta Grossa',
    'faq' => [
        ['pergunta' => 'O aeroporto Sant\'Ana (PGZ) tem voo comercial?', 'resposta' => 'Não há linha regular desde março de 2025. O terminal prático é o Afonso Pena (CWB), pela BR-376 e pela BR-277. O PGZ entra só como campo local, se a pauta pedir.'],
        ['pergunta' => 'O motorista espera no CWB se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem Centro, Oficinas e a UEPG no mesmo dia?', 'resposta' => 'Sim. Informe o bloco e a ordem. Um motorista articula os três recuos se a margem estiver no roteiro.'],
        ['pergunta' => 'Dá para seguir a Curitiba depois do hotel?', 'resposta' => 'Sim, como viagem pela BR-376. Não é o mesmo recorte das Oficinas; o horário sai sob consulta.'],
        ['pergunta' => 'Vocês entram na cooperativa com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, o recuo da planta não libera.'],
    ],
    'cta' => [
        'titulo' => 'Junte as Oficinas ao horário do CWB',
        'texto' => 'O orçamento de Ponta Grossa sai sob consulta. Centro, campus e Afonso Pena no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Ponta Grossa',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'parana', 'ancora' => 'Foz, Londrina e o recorte paranaense'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'curitiba', 'ancora' => 'Batel, Centro Cívico e o Afonso Pena'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'sao-jose-dos-pinhais', 'ancora' => 'Centro, Afonso Pena e o terminal CWB'],
    ],
];
