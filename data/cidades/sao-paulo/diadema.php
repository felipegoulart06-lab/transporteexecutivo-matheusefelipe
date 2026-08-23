<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Diadema',
    'geo' => ['lat' => -23.686, 'lng' => -46.623],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Diadema',
    'seo' => [
        'title' => 'Carro executivo no ABC: Piraporinha, Centro e planta',
        'description' => 'Carro com motorista em Diadema para Piraporinha, Centro, Canhema e Conceição. Planta química ou metalúrgica, recuo até Congonhas pela Anchieta e valor sob consulta.',
        'og_title' => 'Piraporinha, Centro e a planta no relógio da Anchieta',
        'og_description' => 'Traslado em Diadema: cancela na Piraporinha, Paço no Centro e o recuo rumo a Congonhas.',
        'og_image_alt' => 'Sedan executivo na Avenida Piraporinha, em Diadema',
    ],
    'kicker' => 'Grande ABC · SP',
    'h1' => 'A planta na Piraporinha não espera o aceite da Anchieta',
    'intro' => 'Na Piraporinha o aceite da cancela vale mais que o tráfego da Anchieta: a planta química ou metalúrgica não espera o GPS recalcular o recuo enquanto o Centro e a Conceição ainda disputam o semáforo. O pedido precisa nascer com portaria, turno e o sentido da via — não com um pin genérico no ABC.',
    'blocos' => [
        [
            'h2' => 'Diadema não se resolve no mesmo cartaz de São Bernardo',
            'texto' => 'Piraporinha, Centro, Canhema e Conceição ficam a poucos quilômetros no mapa e a um expediente inteiro no relógio quando a pauta mistura Paço, hotel de embarque e cancela industrial. Quem chega pela Anchieta já perdeu minutos se o motorista só souber “Diadema” e não o número da portaria. O sedan entra pelo recuo combinado; a espera na cancela só ocorre se já estiver no itinerário.',
        ],
        [
            'h2' => 'Quatro recuos que o pedido diademense mais cita',
            'itens' => [
                ['h3' => 'Piraporinha e a cancela da planta', 'texto' => 'Eixo químico e metalúrgico. Informe turno, lista e qual das portarias; o GPS na avenida não libera a entrada.'],
                ['h3' => 'Centro e o Paço', 'texto' => 'Sede, comércio e o hotel de embarque. O recuo do Paço não é o da Piraporinha nem o da Conceição.'],
                ['h3' => 'Canhema e o recorte residencial', 'texto' => 'Clínica, prédio e rua estreita. Número e complemento evitam a volta no quarteirão depois da planta.'],
                ['h3' => 'Conceição rumo à Anchieta', 'texto' => 'Acesso que estica no pico. Quem sobe a CGH ou desce a São Bernardo sai daqui com margem de via, não de aplicativo.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Combinações que a pauta de Diadema mais fecha',
        'itens' => [
            ['titulo' => 'Hotel no Centro → portaria na Piraporinha', 'texto' => 'Pernoite só como embarque. Diga o nome do hotel e se a cancela pede documento na lista.'],
            ['titulo' => 'Planta → Congonhas pela Anchieta', 'texto' => 'O CGH não está na porta da fábrica. Combinamos voo e margem da SP-150; não é corrida do minuto.'],
            ['titulo' => 'Centro → Canhema ou Conceição', 'texto' => 'Trecho curto no mapa, recuo distinto. Informe prédio e sentido; o Paço não resolve a porta da Conceição.'],
            ['titulo' => 'Diadema → Santo André ou São Bernardo', 'texto' => 'Quando a pauta vaza no ABC, o trecho deixa de ser só urbano de Diadema. Valor sob consulta.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta a Piraporinha',
    'faq' => [
        ['pergunta' => 'A planta na Piraporinha libera o recuo sem nome na lista?', 'resposta' => 'Em geral, não. Envie o visitante, o documento pedido e qual das portarias. Sem isso, a cancela química ou metalúrgica não abre.'],
        ['pergunta' => 'Congonhas pela Anchieta cabe no mesmo expediente do Centro?', 'resposta' => 'Cabe, se o voo já estiver no roteiro. A SP-150 pede margem própria; o intervalo não é o do Paço até a Conceição.'],
        ['pergunta' => 'Canhema e Conceição se resolvem no mesmo pin do Paço?', 'resposta' => 'Não. São recuos distintos. Rua, número e o sentido da via entram no pedido junto com o horário.'],
        ['pergunta' => 'Química e metalúrgica pedem o mesmo protocolo de cancela?', 'resposta' => 'Cada planta tem lista própria. O nome do complexo e o turno importam mais que “na Piraporinha”.'],
        ['pergunta' => 'O trecho segue a Santo André ou São Bernardo depois da reunião?', 'resposta' => 'Sim, quando o ABC vizinho entra no itinerário. Não é desvio improvisado na Anchieta; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Feche a Piraporinha com o recuo da Anchieta',
        'texto' => 'Portaria, Centro e CGH saem com o mesmo recado. Valor sob consulta.',
        'botao' => 'Combinar recuo em Diadema',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'santo-andre', 'ancora' => 'Centro, Campestre e o eixo até Congonhas'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-bernardo-do-campo', 'ancora' => 'Centro, Rudge Ramos e as plantas da Anchieta'],
    ],
];
