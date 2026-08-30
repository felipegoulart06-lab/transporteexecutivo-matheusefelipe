<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Várzea Grande',
    'geo' => ['lat' => -15.6458, 'lng' => -56.1322],
    'imagem' => 'centro-oeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Várzea Grande',
    'seo' => [
        'title' => 'Traslado em Várzea Grande: Centro, Glória e CGB',
        'description' => 'Motorista em Várzea Grande para o Centro, Jardim Glória, Costa Verde, CPA-VG e o aeroporto Marechal Rondon. O CGB fica neste município. Orçamento sob consulta.',
        'og_title' => 'Carro no Centro, na Glória e no Marechal Rondon',
        'og_description' => 'Traslado no município do CGB: hotel, pauta no Centro e o terminal Marechal Rondon — não em Cuiabá.',
        'og_image_alt' => 'Sedan executivo em via de acesso ao aeroporto de Várzea Grande',
    ],
    'kicker' => 'Município do CGB · MT',
    'h1' => 'Do CGB à Glória sem perder a reunião no Centro',
    'preambulo' => 'Várzea Grande não é bairro de Cuiabá: é o município do Aeroporto Internacional Marechal Rondon (CGB). Hotel no Jardim Glória, reunião no Centro e o saguão cabem no mesmo expediente se o motorista já conhece a Avenida da FEB, a Costa Verde e o protocolo do terminal — não o atalho da ponte no minuto errado.',
    'artigos' => [
        [
            'h2' => 'O Marechal Rondon pede o município certo, não “aeroporto de Cuiabá” no vago',
            'texto' => 'O CGB está em Várzea Grande. Quem anota só a capital chega ao terminal no município vizinho, do outro lado do Rio Cuiabá. Hotel no Jardim Glória ou na Costa Verde e pauta no Centro ou no CPA-VG pedem o número do voo no roteiro. “Me busca no CGB” coloca o carro no recuo certo quando o endereço de espera também está no recado.',
        ],
        [
            'h2' => 'Centro, Jardim Glória e o silêncio da espera na FEB',
            'texto' => 'Sede, clínica e o eixo da Avenida da FEB. O recuo pede rua e número. Quando a comitiva dorme em Várzea Grande e reúne em Goiabeiras, o trecho cruza a ponte Sérgio Motta — a margem sai deste lado do rio, não da Julio Muller. O hotel entra como embarque, sem convênio de porta.',
        ],
        [
            'h2' => 'Marechal Rondon — CGB no relógio desta cidade',
            'texto' => 'O terminal internacional fica neste município. Combinamos voo e ponto de encontro. A espera no desembarque integra o trecho CGB. Até o Centro ou o Jardim Glória o intervalo é urbano; até o Centro de Cuiabá, a ponte e o horário de pico pesam mais que o mapa. O orçamento sai sob consulta.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em Várzea Grande',
        'itens' => [
            [
                'h3' => 'Voo e recuo do CGB',
                'texto' => 'Informe o número do voo. O terminal fica aqui; o horário de apresentação sai do saguão, não da ponte.',
            ],
            [
                'h3' => 'Hotel no Jardim Glória ou no Centro',
                'texto' => 'O nome do hotel evita a volta na FEB. “Perto do aeroporto” não basta. O hotel é só o ponto de saída.',
            ],
            [
                'h3' => 'Centro, Costa Verde e CPA-VG',
                'texto' => 'Pauta urbana do município. Informe o prédio; a Costa Verde e o CPA não compartilham o mesmo recuo.',
            ],
            [
                'h3' => 'Quando a pauta aponta para Cuiabá ou Rondonópolis',
                'texto' => 'CGB → Goiabeiras ou Arena não é o mesmo pedido do Centro de Várzea Grande. Rondonópolis entra pela BR-163, com orçamento à parte.',
            ],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pousa no Marechal Rondon',
    'faq' => [
        [
            'pergunta' => 'O aeroporto de Cuiabá fica em Várzea Grande?',
            'resposta' => 'Sim. O Marechal Rondon (CGB) está neste município, não no perímetro de Cuiabá. Centro e Jardim Glória chegam ao terminal em trecho urbano.',
        ],
        [
            'pergunta' => 'Em Várzea Grande, o motorista espera no CGB se o voo atrasar?',
            'resposta' => 'Sim. Acompanhamos o painel com o número do voo. A espera no terminal integra o trecho CGB.',
        ],
        [
            'pergunta' => 'Dá para ir do hotel na Glória ao Centro de Várzea Grande?',
            'resposta' => 'Sim. Em Várzea Grande, é trecho urbano do município. Informe o nome do hotel e o prédio no Centro.',
        ],
        [
            'pergunta' => 'O carro segue daqui a Cuiabá no mesmo dia?',
            'resposta' => 'Sim, quando a capital entra no roteiro. A ponte pede margem própria; não é o mesmo recorte da FEB.',
        ],
        [
            'pergunta' => 'Vocês fazem Costa Verde, CPA-VG e o CGB no mesmo expediente?',
            'resposta' => 'Sim. Informe a ordem. Um motorista articula os três recuos. O orçamento sai sob consulta.',
        ],
    ],
    'cta' => [
        'titulo' => 'Envie o CGB junto com o hotel da Glória',
        'texto' => 'O orçamento de Várzea Grande sai sob consulta. Centro, Costa Verde e terminal no mesmo recado.',
        'botao' => 'Solicitar carro em Várzea Grande',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'mato-grosso', 'ancora' => 'Cuiabá, Rondonópolis e o eixo da soja'],
        ['tipo' => 'cidade', 'estado' => 'mato-grosso', 'cidade' => 'cuiaba', 'ancora' => 'Centro, Goiabeiras e a ponte rumo ao CGB'],
        ['tipo' => 'cidade', 'estado' => 'mato-grosso', 'cidade' => 'rondonopolis', 'ancora' => 'Vila Aurora, Centro e o Maestro Marinho'],
    ],
];
