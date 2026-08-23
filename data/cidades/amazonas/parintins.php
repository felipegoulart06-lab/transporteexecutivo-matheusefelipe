<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Parintins',
    'geo' => ['lat' => -2.6342, 'lng' => -56.7324],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Parintins',
    'seo' => [
        'title' => 'Ilha do festival: carro em Parintins, Centro e o PIN',
        'description' => 'Motorista em Parintins para o Centro, Palmares, Itaúna e o aeroporto PIN. Sem estrada até Manaus: ar ou rio. Festival só no roteiro. Orçamento sob consulta.',
        'og_title' => 'Traslado no Centro de Parintins, em Palmares e no PIN',
        'og_description' => 'Motorista na ilha: hotel no Centro, pauta urbana e o saguão PIN — Manaus não chega de estrada.',
        'og_image_alt' => 'Sedan executivo no Centro de Parintins, ilha no baixo Amazonas',
    ],
    'kicker' => 'Ilha do baixo Amazonas · AM',
    'h1' => 'A ilha do festival pede o PIN e o rio — sem atalho terrestre',
    'faixas' => [
        [
            'h2' => 'Parintins é ilha: o recuo prático é o PIN ou o cais, não a BR que não existe',
            'texto' => 'Não há atalho terrestre até Manaus. Quem chega, chega de avião no Júlio Belém (PIN) ou pelo rio. Centro, Palmares e Itaúna se medem em ruas da ilha. O festival do Boi Bumbá só entra se estiver no itinerário — não como desvio automático no meio da pauta. O motorista já saiu com essa geografia; o passageiro não pede “a estrada da capital”.',
        ],
        [
            'h2' => 'Três recortes, um perímetro de ilha',
            'itens' => [
                ['h3' => 'Centro', 'texto' => 'Sede, hotel e o casario. Informe o prédio; o recuo do Centro não é o de Palmares nem o de Itaúna.'],
                ['h3' => 'Palmares', 'texto' => 'Eixo residencial e clínicas. “Nos Palmares” não define a porta nem o ponto de espera do hotel.'],
                ['h3' => 'Itaúna', 'texto' => 'Pauta mais interna da malha insular. Quando o dia mistura Itaúna, Centro e PIN, a ordem das ruas pesa mais que o mapa de Manaus.'],
            ],
        ],
        [
            'h2' => 'Rotas de pauta, cais e o festival só se combinado',
            'texto' => 'PIN → hotel no Centro → Palmares → Itaúna só se a ordem estiver no roteiro. O cais entra quando o trecho fluvial está no pedido. O bumbá, o Bumbódromo e a programação de junho só entram se o itinerário pedir — o carro não desvia para a arena no meio da reunião. Santarém (STM) e Manaus (MAO) são outros voos ou outro rio, não segunda corrida urbana. O hotel é embarque, sem convênio de porta.',
        ],
        [
            'h2' => 'Júlio Belém — PIN',
            'texto' => 'O aeroporto fica no recorte da ilha. Combinamos o voo. A espera no desembarque integra o trecho PIN; o passageiro não cruza o saguão atrás de uma placa genérica. Até o Centro a margem é urbana da ilha. O orçamento sai sob consulta.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem chega à ilha pelo PIN ou pelo rio',
    'faq' => [
        ['pergunta' => 'Dá para ir de carro de Manaus a Parintins?', 'resposta' => 'Não. Não há ligação terrestre. O recuo prático é o aeroporto Júlio Belém (PIN) ou o trecho fluvial. Informe o modo de chegada no pedido.'],
        ['pergunta' => 'O motorista espera no PIN se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho na ilha.'],
        ['pergunta' => 'O festival do Boi Bumbá entra automaticamente?', 'resposta' => 'Não. Arena e programação só entram se estiverem no itinerário. Fora disso, o roteiro é Centro, Palmares e Itaúna.'],
        ['pergunta' => 'Vocês fazem Centro, Palmares e Itaúna no mesmo dia?', 'resposta' => 'Sim. Informe a ordem e o nome do hotel. Um motorista articula os três recuos da ilha.'],
        ['pergunta' => 'Há alternativa fluvial além do PIN?', 'resposta' => 'Sim, quando o cais entra no roteiro. Combine o porto e o horário do barco; não é o mesmo recuo do saguão. O orçamento sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Diga se o trecho é o PIN ou o cais',
        'texto' => 'O orçamento de Parintins sai sob consulta. Centro, Palmares e ilha no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Parintins',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'amazonas', 'ancora' => 'Manaus, o rio e o recorte amazonense'],
        ['tipo' => 'cidade', 'estado' => 'amazonas', 'cidade' => 'manaus', 'ancora' => 'Adrianópolis, Ponta Negra e o MAO'],
        ['tipo' => 'cidade', 'estado' => 'para', 'cidade' => 'santarem', 'ancora' => 'Centro, Aldeia e o aeroporto STM'],
    ],
];
