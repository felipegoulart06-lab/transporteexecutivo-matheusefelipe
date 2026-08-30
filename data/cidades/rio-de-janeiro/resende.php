<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Resende',
    'geo' => ['lat' => -22.4704, 'lng' => -44.4506],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Resende',
    'seo' => [
        'title' => 'Vale do Paraíba: motorista em Resende, AMAN e Dutra',
        'description' => 'Carro com motorista em Resende para o Centro, Jardim Jalisco, AMAN, Stellantis e o Retiro. Dutra rumo a GIG ou SDU e orçamento sob consulta.',
        'og_title' => 'Traslado no Centro, na AMAN e na Dutra de Resende',
        'og_description' => 'Motorista no Vale do Paraíba: hotel no Centro, portaria da AMAN e o recuo da Dutra.',
        'og_image_alt' => 'Sedan executivo em avenida do Centro de Resende',
    ],
    'kicker' => 'Médio Paraíba · RJ',
    'h1' => 'A Dutra em Resende não é a mesma janela de Volta Redonda',
    'intro' => 'Resende articula o Centro, o Jardim Jalisco e a AMAN num recorte da Dutra que não copia a janela de Volta Redonda: a planta Stellantis e o Retiro pedem ordem própria. O motorista segura a portaria da Academia Militar das Agulhas Negras e a BR-116; o passageiro segura a pauta — não o aceite do minuto que o mapa empresta da CSN.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Resende não é “a mesma Dutra da CSN”',
            'texto' => 'Centro, Jardim Jalisco, Retiro e a AMAN não compartilham o mesmo recuo. Quem tem briefing na Academia e check-out no hotel precisa de um motorista que já conhece o protocolo da cancela e o sentido da Dutra neste município, não o intervalo de Volta Redonda. A planta Stellantis/Peugeot no recorte Resende–Porto Real entra com nome na lista. O saguão prático é o Galeão ou o Santos Dumont — Resende não tem o terminal comercial da conexão.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque resendense mais se concentra',
            'itens' => [
                ['h3' => 'Centro e o eixo comercial', 'texto' => 'Sede, hotel e o recuo da avenida. Informe o prédio; o Centro não é o Jardim Jalisco nem a portaria da AMAN.'],
                ['h3' => 'Jardim Jalisco', 'texto' => 'Pernoite e clínicas. “No Jalisco” não define a porta; rua e número evitam a volta no quarteirão.'],
                ['h3' => 'AMAN — Academia Militar das Agulhas Negras', 'texto' => 'Cancela, documento e nome na lista. Sem protocolo, o recuo da Academia não libera. O GPS na Dutra não resolve a portaria.'],
                ['h3' => 'Stellantis, Retiro e a Dutra', 'texto' => 'Planta no recorte Resende–Porto Real e o bairro do Retiro. Cada um pede ponto próprio; o trecho até o GIG ou o SDU pela BR-116 é outro recorte.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta resendense mais pede',
        'itens' => [
            ['titulo' => 'Hotel no Centro → Jardim Jalisco ou Retiro', 'texto' => 'Em Resende, pernoite e pauta. Informe o nome do hotel e se o carro espera no Centro enquanto a reunião corre.'],
            ['titulo' => 'Centro → AMAN', 'texto' => 'Portaria e turno. Envie o nome na lista e o documento pedido; o mapa da Dutra não abre a cancela.'],
            ['titulo' => 'Hotel → planta Stellantis', 'texto' => 'O recorte industrial pede protocolo. Combinamos a portaria; não é o mesmo pedido da Academia.'],
            ['titulo' => 'Resende → GIG ou SDU pela Dutra', 'texto' => 'A janela não copia Volta Redonda. Combinamos o terminal e a margem da BR-116; o orçamento sai sob consulta.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta a AMAN e a Dutra',
    'faq' => [
        ['pergunta' => 'A Dutra de Resende é a mesma janela de Volta Redonda?', 'resposta' => 'Não. O quilômetro é o mesmo eixo, mas a margem sai do Centro ou da AMAN neste município — não do Aterrado nem da CSN.'],
        ['pergunta' => 'Vocês entram na AMAN com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, a cancela da Academia não libera.'],
        ['pergunta' => 'A planta Stellantis fica em Resende?', 'resposta' => 'A pauta usa o recorte Resende–Porto Real. Informe a portaria; o GPS “Resende” não coloca o carro na cancela certa.'],
        ['pergunta' => 'Centro, Jardim Jalisco e o Retiro cabem no mesmo dia?', 'resposta' => 'Sim. Informe a ordem e o ponto de espera. Um motorista articula os três recuos sem trocar o bairro no cartaz.'],
        ['pergunta' => 'O motorista segue a Dutra até o Galeão ou o Santos Dumont?', 'resposta' => 'Sim, quando o terminal entra no roteiro. A BR-116 pede margem própria; não é corrida instantânea do Centro.'],
    ],
    'cta' => [
        'titulo' => 'Junte a AMAN à janela da Dutra',
        'texto' => 'O orçamento de Resende sai sob consulta. Centro, Stellantis e o voo no mesmo WhatsApp.',
        'botao' => 'Pedir carro em Resende',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-de-janeiro', 'ancora' => 'O recorte fluminense além da capital'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'volta-redonda', 'ancora' => 'Aterrado, CSN e a Dutra do aço'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Santos Dumont, Galeão e a Zona Sul'],
    ],
];
