<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Cuiabá',
    'geo' => ['lat' => -15.601, 'lng' => -56.0974],
    'imagem' => 'centro-oeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Cuiabá',
    'seo' => [
        'title' => 'Motorista executivo em Cuiabá: Centro, Goiabeiras e CGB',
        'description' => 'Carro com motorista em Cuiabá para o Centro, Goiabeiras, Jardim das Américas, Várzea Grande e o aeroporto Marechal Rondon. Rotas e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Centro de Cuiabá e no Marechal Rondon',
        'og_description' => 'Motorista na capital mato-grossense: hotel, Arena Pantanal e o terminal CGB em Várzea Grande.',
        'og_image_alt' => 'Sedan executivo em avenida de Cuiabá sob sol do cerrado',
    ],
    'kicker' => 'Capital mato-grossense · MT',
    'h1' => 'Do Marechal Rondon ao Centro sem perder a janela do Pantanal',
    'olho' => 'Cuiabá é quente no asfalto e longa no trecho até o aeroporto, que fica em Várzea Grande. O motorista segura a Julio Muller; o passageiro segura a pauta — e o horário do voo para o Pantanal, quando houver.',
    'capitulos' => [
        [
            'h2' => 'A capital e Várzea Grande não se separam no mapa — separam-se no recuo',
            'texto' => 'Hotel no Centro ou em Goiabeiras, reunião no CPA e voo no Marechal Rondon (CGB) cabem no mesmo dia. O terminal não fica na porta do hotel: fica do outro lado da ponte, em Várzea Grande. A margem sai do embarque, não do saguão.',
        ],
        [
            'h2' => 'Onde o embarque cuiabano mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Prainha', 'texto' => 'Sede, mercado e o calçadão. Informe o prédio; o recuo do Centro Histórico não é o da arena.'],
                ['h3' => 'Goiabeiras e o Jardim das Américas', 'texto' => 'Hotéis (Deville, similar) e clínicas. A Av. Miguel Sutil muda o intervalo no fim da tarde.'],
                ['h3' => 'CPA e o Tijucal', 'texto' => 'Pauta de governo e condomínio. O número da avenida importa mais que “no CPA”.'],
            ],
        ],
        [
            'h2' => 'Rotas de trabalho, arena e porta do Pantanal',
            'texto' => 'CGB → hotel em Goiabeiras → Centro → Arena Pantanal só se o evento estiver no roteiro. Outro clássico: hotel → Chapada dos Guimarães como viagem, não como corrida urbana. Quem segue a Poconé ou à Transpantaneira combina o trecho à parte, com horário de estrada de terra.',
        ],
        [
            'h2' => 'Marechal Rondon — CGB',
            'texto' => 'O aeroporto internacional fica em Várzea Grande. Combinamos o voo. A espera no desembarque integra o trecho CGB. Até Goiabeiras, a ponte e a Julio Muller pesam mais que o quilômetro no mapa.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que evitam atraso na capital',
        'itens' => [
            ['num' => '01', 'titulo' => 'Cuiabá ou Várzea Grande', 'texto' => 'Hotel e aeroporto não estão no mesmo recuo. Diga o lado da ponte.'],
            ['num' => '02', 'titulo' => 'Voo no CGB', 'texto' => 'Em Cuiabá, número e horário. O carro sai com margem, não no minuto do check-in.'],
            ['num' => '03', 'titulo' => 'Chapada ou cidade', 'texto' => 'Visita à Chapada entra como viagem. O urbano é outro orçamento.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Marechal Rondon',
    'faq' => [
        ['pergunta' => 'O aeroporto de Cuiabá fica na capital?', 'resposta' => 'O CGB fica em Várzea Grande. O trecho até Goiabeiras ou o Centro entra no roteiro com margem.'],
        ['pergunta' => 'Em Cuiabá, o motorista espera no CGB se o voo atrasar?', 'resposta' => 'Sim. Em Cuiabá, o número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem a Chapada dos Guimarães no mesmo dia?', 'resposta' => 'Sim, quando a Chapada entra no roteiro. Não é o mesmo recorte do Centro; o intervalo sai sob consulta.'],
        ['pergunta' => 'Dá para ir à Arena Pantanal e voltar ao hotel?', 'resposta' => 'Sim. Informe o portão e se o carro permanece no evento.'],
    ],
    'cta' => [
        'titulo' => 'Marque o CGB no mesmo recado do hotel',
        'texto' => 'O orçamento de Cuiabá sai sob consulta. Ponte, Centro e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir traslado em Cuiabá',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'mato-grosso', 'ancora' => 'Rondonópolis, Sinop e o recorte mato-grossense'],
        ['tipo' => 'cidade', 'estado' => 'goias', 'cidade' => 'goiania', 'ancora' => 'Bueno, Marista e o Santa Genoveva'],
        ['tipo' => 'cidade', 'estado' => 'mato-grosso-do-sul', 'cidade' => 'campo-grande', 'ancora' => 'Centro, shopping e o CGR'],
    ],
];
