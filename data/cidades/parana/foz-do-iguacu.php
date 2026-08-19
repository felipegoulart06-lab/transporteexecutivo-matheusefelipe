<?php

declare(strict_types=1);

return [
    'layout' => 'rio',
    'cidade_nome' => 'Foz do Iguaçu',
    'geo' => ['lat' => -25.5163, 'lng' => -54.5854],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Foz do Iguaçu',
    'seo' => [
        'title' => 'Traslado executivo em Foz do Iguaçu: Cataratas, Centro e IGU',
        'description' => 'Motorista executivo em Foz do Iguaçu para o Centro, Cataratas, Itaipu, Porto Meira e o aeroporto. Tríplice fronteira e orçamento sob consulta.',
        'og_title' => 'Carro com motorista nas Cataratas, no Centro e no aeroporto IGU',
        'og_description' => 'Traslado em Foz: hotel, Cataratas, Itaipu e o terminal das Cataratas.',
        'og_image_alt' => 'Sedan executivo em avenida de Foz do Iguaçu próxima ao rio',
    ],
    'kicker' => 'Tríplice fronteira · PR',
    'h1' => 'Do IGU às Cataratas sem perder a janela de Itaipu',
    'corrente' => [
        [
            'h2' => 'Foz se organiza por três fronteiras — o relógio é o do voo e o da visita',
            'texto' => 'Quem chega a Foz do Iguaçu pousa no Aeroporto Internacional das Cataratas (IGU). Hotel no Centro ou na Av. das Cataratas, visita ao Parque Nacional e à Itaipu cabem no mesmo roteiro se o motorista já saiu com a ordem da BR-469, não com o aceite do minuto.',
        ],
        [
            'h2' => 'Pontos da cidade que a agenda de Foz mais cita',
            'itens' => [
                ['h3' => 'Centro e a Av. Brasil', 'texto' => 'Hotéis, câmbio e o recuo urbano. Informe o nome; a avenida mistura comércio e pernoite em quadras curtas.'],
                ['h3' => 'Av. das Cataratas e Porto Meira', 'texto' => 'Hotéis de parque (Bourbon, similar). O recuo pede o estabelecimento; “na Cataratas” não define a entrada.'],
                ['h3' => 'Parque Nacional — Cataratas', 'texto' => 'Visita combinada. O acesso da BR-469 e o estacionamento do parque pedem horário de portaria, não GPS na passarela.'],
                ['h3' => 'Itaipu Binacional', 'texto' => 'Visita técnica ou turística. Protocolo de entrada entra no roteiro junto com o documento pedido pela usina.'],
            ],
        ],
        [
            'h2' => 'Rotas de fronteira que cabem no mesmo dia',
            'itens' => [
                ['h3' => 'IGU → hotel → Cataratas', 'texto' => 'Pouso, pernoite e o parque. A margem sai do terminal, não da fila do ônibus do complexo.'],
                ['h3' => 'Hotel → Itaipu → Marco das Três Fronteiras', 'texto' => 'Usina e o marco só se estiverem no roteiro. Combinamos o ponto de espera em cada recuo.'],
                ['h3' => 'Ponte da Amizade rumo a Ciudad del Este', 'texto' => 'Quando a pauta cruza ao Paraguai, o trecho entra como viagem de fronteira. Documentos e horário saem sob consulta.'],
            ],
        ],
        [
            'h2' => 'Cataratas Internacionais — IGU',
            'texto' => 'O terminal fica no recorte do município, no caminho do parque. Combinamos o voo. A espera no desembarque integra o trecho IGU; o passageiro não cruza o saguão atrás de uma placa genérica.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no IGU',
    'faq' => [
        ['pergunta' => 'O aeroporto de Foz fica longe das Cataratas?', 'resposta' => 'O IGU fica no eixo da BR-469, no caminho do parque. Ainda assim marcamos margem: o horário de visitação e o fluxo do complexo alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no IGU se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês entram no Parque Nacional e na Itaipu?', 'resposta' => 'Levamos até o recuo de cada complexo. Ingresso e protocolo da usina são do passageiro; o carro espera onde combinado.'],
        ['pergunta' => 'Dá para cruzar a Ponte da Amizade no mesmo dia?', 'resposta' => 'Sim, quando Ciudad del Este entra no roteiro. Não é o mesmo recorte do Centro; documentos e horário saem sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o IGU ao horário das Cataratas',
        'texto' => 'O orçamento de Foz sai sob consulta. Parque, Itaipu e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir carro em Foz do Iguaçu',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'parana', 'ancora' => 'Foz, Londrina e o recorte paranaense'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'curitiba', 'ancora' => 'Batel, Centro Cívico e o Afonso Pena'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'londrina', 'ancora' => 'Gleba, Centro e o LDB'],
    ],
];
