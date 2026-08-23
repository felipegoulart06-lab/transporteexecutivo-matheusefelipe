<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Mauá',
    'geo' => ['lat' => -23.6677, 'lng' => -46.4613],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Mauá',
    'seo' => [
        'title' => 'Traslado discreto em Mauá: Capuava, Centro e CGH',
        'description' => 'Traslado discreto em Mauá para Capuava, Centro, Vila Bocaina e Jardim Zaíra. Recuo petroquímico, embarque no hotel e o eixo até Congonhas. Valor sob consulta.',
        'og_title' => 'Capuava, Centro e o recuo que o app troca com Santo André',
        'og_description' => 'Motorista em Mauá: portaria em Capuava, Paço no Centro e o trecho rumo a CGH.',
        'og_image_alt' => 'Sedan executivo na Avenida João Ramalho, em Mauá',
    ],
    'kicker' => 'ABC industrial · SP',
    'h1' => 'Capuava, Centro e o recuo que o app troca com Santo André',
    'preambulo' => 'Quem pauta Capuava e o Centro no mesmo dia já sabe que o app confunde o recuo de Mauá com o de Santo André. A João Ramalho, a petroquímica e o Jardim Zaíra não compartilham porta com o Campestre. O sedan precisa sair com município, rua e cancela — senão o passageiro perde o turno enquanto o pin ainda aponta para o vizinho.',
    'artigos' => [
        [
            'h2' => 'Mauá pede o nome do complexo, não o pin do ABC',
            'texto' => 'Centro, Capuava, Vila Bocaina e Jardim Zaíra formam quatro recuos. Hotel no Centro entra só como ponto de embarque; a reunião na petroquímica pede lista, EPI e o número da portaria. “Me busca no ABC” entrega o carro em Santo André. A discreção do traslado é o recuo certo na hora certa, sem troca de município no GPS.',
        ],
        [
            'h2' => 'Capuava não é desvio de última hora depois do Paço',
            'texto' => 'O complexo petroquímico alonga o relógio mesmo quando o mapa mostra poucos quilômetros. Cancela, documento e o sentido da via entram no roteiro junto com o horário da visita. Vila Bocaina e o Zaíra ficam no meio: clínica, residencial e o hotel de apoio. Sem ordem, o motorista não improvisa a volta na João Ramalho no pico.',
        ],
        [
            'h2' => 'Congonhas no relógio de Mauá — via que o mapa encolhe',
            'texto' => 'Não há saguão comercial no município. O voo prático da pauta curta sai em Congonhas (CGH), com margem da malha do ABC até a Anchieta. Combinamos terminal e o ponto de saída — Centro ou Capuava mudam o intervalo. Guarulhos entra só quando o roteiro já prevê o salto; não é o mesmo pedido urbano.',
        ],
    ],
    'pauta' => [
        'h2' => 'O que entra na ordem do dia em Mauá',
        'itens' => [
            ['h3' => 'Centro e a João Ramalho', 'texto' => 'Paço, comércio e o hotel de embarque. Informe o prédio; o recuo do Centro não é o de Capuava.'],
            ['h3' => 'Capuava e a portaria petroquímica', 'texto' => 'Lista, documento e turno. Sem o nome do complexo, a cancela não libera o sedan.'],
            ['h3' => 'Vila Bocaina e Jardim Zaíra', 'texto' => 'Residencial e clínica. Rua e número evitam a troca com o pin de Santo André no limite do município.'],
            ['h3' => 'Quando o voo aponta para Congonhas', 'texto' => 'CGH não está na porta do Paço. A margem sai do recuo escolhido, não do saguão.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem não quer o pin de Santo André',
    'faq' => [
        ['pergunta' => 'O app coloca Mauá no recuo de Santo André — como evitam isso?', 'resposta' => 'Pedimos município, rua e o nome do estabelecimento. Capuava e o Centro de Mauá não compartilham porta com o Campestre; o pin genérico do ABC é o erro mais comum.'],
        ['pergunta' => 'Capuava exige documento na portaria petroquímica?', 'resposta' => 'Sim, na maior parte dos complexos. Envie visitante, documento e qual das cancelas. Sem lista, o recuo não abre.'],
        ['pergunta' => 'Vila Bocaina e Jardim Zaíra entram no mesmo pedido do Centro?', 'resposta' => 'Entram, se a ordem estiver no roteiro. São recuos distintos; um motorista articula os três quando o itinerário já os nomeia.'],
        ['pergunta' => 'O voo em Congonhas sai de qual recuo de Mauá?', 'resposta' => 'Do que estiver no pedido: Centro ou Capuava mudam a margem até o CGH. Informe o voo; a Anchieta não se improvisa no minuto.'],
        ['pergunta' => 'Dá para cruzar rumo ao ABC vizinho no mesmo dia?', 'resposta' => 'Sim, quando Santo André ou São Bernardo entram no itinerário. Não é desvio de aplicativo; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Capuava e Centro no mesmo recado, sem o pin de Santo André',
        'texto' => 'Informe Capuava, o hotel e o voo. Respondemos com horário e valor.',
        'botao' => 'Solicitar carro em Mauá',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'santo-andre', 'ancora' => 'Centro, Campestre e o eixo até Congonhas'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
    ],
];
