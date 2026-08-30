<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Santo André',
    'geo' => ['lat' => -23.6639, 'lng' => -46.5307],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Santo André',
    'seo' => [
        'title' => 'Traslado executivo em Santo André: Centro, Campestre e ABC',
        'description' => 'Motorista executivo em Santo André para o Centro, Campestre, Jardim, Utinga e o eixo até Congonhas. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro, no Campestre e no ABC',
        'og_description' => 'Traslado em Santo André: hotel no Campestre, pauta no Centro e o recuo rumo a CGH.',
        'og_image_alt' => 'Sedan executivo em avenida de Santo André',
    ],
    'kicker' => 'ABC paulista · SP',
    'h1' => 'Do Campestre ao Centro sem perder a janela da planta',
    'intro' => 'Santo André concentra Paço, shopping e o recorte do ABC até a capital. Hotel no Campestre ou no Centro, reunião no Jardim e voo em Congonhas cabem no mesmo expediente se o motorista já saiu com a ordem da Pereira Barreto, não com o aceite do minuto.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Santo André não é “pegar um carro no Centro”',
            'texto' => 'Centro, Campestre, Jardim e Utinga não compartilham o mesmo recuo. Quem tem pauta na planta e check-out no Ibis ou similar precisa de um motorista que já conhece o sentido da Anchieta, não o atalho do app.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque andreense mais se concentra',
            'itens' => [
                ['h3' => 'Centro e o Paço Municipal', 'texto' => 'Sede e o calçadão. Informe o prédio; o recuo do Paço não é o do Campestre.'],
                ['h3' => 'Campestre, Jardim e o Grand Plaza', 'texto' => 'Hotéis, torres e clínicas. Deslocamentos curtos que esticam no semáforo da Pereira Barreto.'],
                ['h3' => 'Utinga, Paranapiacaba e o Parque Pedroso', 'texto' => 'Visita combinada. O recuo da vila ferroviária pede ponto de espera, não GPS no coreto.'],
                ['h3' => 'Quando a pauta aponta para a capital', 'texto' => 'Congonhas ou Faria Lima. A Anchieta pesa mais que o quilômetro no mapa.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta andreense mais pede',
        'itens' => [
            ['titulo' => 'Hotel no Campestre → Paço', 'texto' => 'Pernoite e sede. Informe o nome do hotel e se o carro espera no Centro.'],
            ['titulo' => 'Santo André → Congonhas', 'texto' => 'O CGH não fica na porta do Campestre. Combinamos o voo e a margem da Anchieta.'],
            ['titulo' => 'Centro → Paranapiacaba', 'texto' => 'Visita à vila só se estiver no roteiro. O horário de serra sai sob consulta.'],
            ['titulo' => 'Hotel → São Bernardo ou São Paulo', 'texto' => 'Quando a pauta vaza no ABC ou na capital, o recorte deixa de ser só urbano.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta o ABC',
    'faq' => [
        ['pergunta' => 'O motorista vai a Congonhas a partir de Santo André?', 'resposta' => 'Sim, quando o CGH entra no roteiro. A Anchieta pede margem; não é corrida instantânea do Campestre.'],
        ['pergunta' => 'Vocês fazem Paço, Campestre e o shopping no mesmo dia?', 'resposta' => 'Sim. Em Santo André, informe a ordem. Um motorista articula os três recuos.'],
        ['pergunta' => 'Dá para ir a Paranapiacaba depois do hotel?', 'resposta' => 'Sim, como visita combinada. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
        ['pergunta' => 'Em Santo André, o carro segue à Faria Lima no mesmo expediente?', 'resposta' => 'Sim, quando a capital entra no roteiro. A Anchieta pede margem própria.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Campestre ao horário da Anchieta',
        'texto' => 'O orçamento de Santo André sai sob consulta. Paço, hotel e CGH no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Santo André',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-bernardo-do-campo', 'ancora' => 'Centro, Rudge Ramos e as plantas da Anchieta'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
    ],
];
