<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Diadema',
    'geo' => ['lat' => -23.686, 'lng' => -46.623],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Diadema',
    'seo' => [
        'title' => 'Carro executivo no ABC: Piraporinha, Canhema e Diadema',
        'description' => 'Carro com motorista em Diadema para Piraporinha, Canhema e o Paço. Imigrantes corta o município; Congonhas pela Anchieta. Valor sob consulta.',
        'og_title' => 'Piraporinha, Canhema e o Paço no relógio da Imigrantes',
        'og_description' => 'Traslado em Diadema: cancela na Piraporinha, recuo no Canhema e o trecho rumo a Congonhas.',
        'og_image_alt' => 'Sedan executivo na Avenida Piraporinha, em Diadema',
    ],
    'kicker' => 'Grande ABC · SP',
    'h1' => 'Em Diadema a Imigrantes corta o Centro antes da planta',
    'intro' => 'Diadema não herda o recuo de São Bernardo: a Rodovia dos Imigrantes (SP-160) atravessa o município e muda o sentido rumo à capital ou ao litoral. O Paço fica na Rua Almirante Barroso, 111, Vila Santa Dirce. Piraporinha é o núcleo industrial antigo e o Terminal Metropolitano. Canhema, ao norte, cola na Imigrantes e no Corredor ABD. Não há aeroporto comercial: Congonhas (CGH) pela Anchieta é o destino típico; GRU pede o Rodoanel. A cancela da planta não abre com o pin “ABC”.',
    'blocos' => [
        [
            'h2' => 'Piraporinha, Centro e Canhema não se resolvem no mesmo cartaz',
            'texto' => 'Quem chega pela Imigrantes já perdeu minutos se o motorista só souber “Diadema”. O Centro reúne Paço, comércio e o Terminal Metropolitano Diadema nas avenidas Fábio Eduardo Ramos Esquível, Alda e Antônio Piranga. Piraporinha concentra o primeiro núcleo fabril e o Terminal Piraporinha no corredor metropolitano. Canhema oferece a Avenida Dom João VI e o acesso à SP-160. A espera na cancela química ou metalúrgica só ocorre se lista, turno e portaria já estiverem no itinerário.',
        ],
        [
            'h2' => 'Três recuos que o pedido diademense mais cita',
            'itens' => [
                ['h3' => 'Centro, Paço e a Antônio Piranga', 'texto' => 'Sede na Almirante Barroso, Vila Santa Dirce. O recuo do Paço não é o da Piraporinha nem o do Canhema.'],
                ['h3' => 'Piraporinha: planta e terminal', 'texto' => 'Cancela industrial e o Terminal Metropolitano Piraporinha. Informe qual dos dois; o GPS na avenida não libera a fábrica.'],
                ['h3' => 'Canhema e a Imigrantes', 'texto' => 'Norte do município, Dom João VI e a SP-160. Número e sentido evitam a volta depois da planta.'],
                ['h3' => 'Anchieta rumo a Congonhas', 'texto' => 'O CGH não está na porta da fábrica. Combinamos voo e a margem da SP-150; o litoral pela Imigrantes é outro pedido.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Combinações que a pauta de Diadema mais fecha',
        'itens' => [
            ['titulo' => 'Hotel no Centro → portaria na Piraporinha', 'texto' => 'Pernoite só como embarque. Diga o nome do hotel e se a cancela pede documento na lista.'],
            ['titulo' => 'Planta → Congonhas pela Anchieta', 'texto' => 'O CGH fica em São Paulo. Combinamos o voo; a Imigrantes não é o atalho do saguão. GRU entra pelo Rodoanel quando já está no roteiro.'],
            ['titulo' => 'Centro → Canhema', 'texto' => 'Trecho curto no mapa, recuo distinto. Informe prédio e o sentido da SP-160.'],
            ['titulo' => 'Diadema → São Bernardo ou Santo André', 'texto' => 'Quando a pauta vaza no ABC, o trecho deixa de ser só urbano de Diadema. Valor sob consulta.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta a Piraporinha em Diadema',
    'faq' => [
        ['pergunta' => 'Diadema tem aeroporto comercial no município?', 'resposta' => 'Não. Não há saguão de linha regular. O voo curto sai em Congonhas (CGH), em São Paulo; Guarulhos (GRU) pede o Rodoanel. A Imigrantes (SP-160) corta Diadema rumo ao litoral, não ao terminal de Congonhas.'],
        ['pergunta' => 'O Terminal Piraporinha é a mesma porta da planta?', 'resposta' => 'Não. O terminal metropolitano e a cancela industrial ficam no mesmo bairro e não compartilham recuo. Informe qual dos dois e, na fábrica, a lista e o turno.'],
        ['pergunta' => 'Canhema se resolve no pin do Paço na Almirante Barroso?', 'resposta' => 'Não. O Paço fica na Vila Santa Dirce. Canhema cola na Imigrantes e na Dom João VI; rua e número entram no pedido.'],
        ['pergunta' => 'Depois da reunião o trecho segue a São Bernardo pela Anchieta?', 'resposta' => 'Sim, quando São Bernardo entra no itinerário. Não é desvio improvisado na SP-150; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Feche Piraporinha, Canhema e o voo em Congonhas',
        'texto' => 'Informe a portaria, o Paço e se o destino é CGH, GRU ou o litoral pela Imigrantes. Respondemos com horário e valor.',
        'botao' => 'Pedir motorista em Diadema',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'santo-andre', 'ancora' => 'Campestre, Paço e a Avenida Industrial'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-bernardo-do-campo', 'ancora' => 'Paço, Rudge Ramos e a Assunção na Anchieta'],
    ],
];
