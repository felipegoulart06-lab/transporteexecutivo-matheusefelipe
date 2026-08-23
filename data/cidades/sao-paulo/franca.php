<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Franca',
    'geo' => ['lat' => -20.5386, 'lng' => -47.4008],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Franca',
    'seo' => [
        'title' => 'Polo calçadista: motorista em Franca e no RAO',
        'description' => 'Motorista em Franca para Centro, City Petrópolis, Jardim Redentor e o polo calçadista. Voo prático no Leite Lopes (RAO), em Ribeirão Preto. Valor sob consulta.',
        'og_title' => 'Polo calçadista: portaria em Franca e o recuo até o RAO',
        'og_description' => 'Traslado em Franca: cancela da fábrica, hotel no Centro e o salto até o Leite Lopes.',
        'og_image_alt' => 'Sedan executivo na Avenida Champagnat, em Franca',
    ],
    'kicker' => 'Alta Mogiana · SP',
    'h1' => 'O polo calçadista pede a portaria, não o GPS no Centro',
    'olho' => 'Portaria de fábrica calçadista e GPS no Centro são pedidos distintos. Franca pede o primeiro; o segundo só atrasa o turno. City Petrópolis e o Jardim Redentor não liberam a cancela. O Tenente Lund Presotto (FRC) não opera voo comercial regular: o saguão prático da pauta longa é o Leite Lopes (RAO), em Ribeirão Preto.',
    'capitulos' => [
        [
            'h2' => 'A cidade do couro não se pauta no pin da Champagnat',
            'texto' => 'Centro, City Petrópolis, Jardim Redentor e o cinturão das fábricas cabem no mesmo município e exigem endereços diferentes. Hotel no Centro entra só como embarque. A visita à planta pede lista, documento e o número da portaria — o sedan não “aparece na fábrica” porque o app apontou Franca. Champagnat e a São Vicente de Paulo mudam o intervalo no pico da saída do turno.',
        ],
        [
            'h2' => 'Onde o embarque francano mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Champagnat', 'texto' => 'Sede, hotel de embarque e o calçadão. Informe o prédio; o recuo do Centro não é o da planta.'],
                ['h3' => 'City Petrópolis e Jardim Redentor', 'texto' => 'Residencial e o recorte até a fábrica. Rua e número evitam a volta depois da cancela do polo.'],
                ['h3' => 'Plantas do polo calçadista', 'texto' => 'Portaria, turno e visitante na lista. Sem o nome do complexo, o GPS no Centro não abre a entrada.'],
            ],
        ],
        [
            'h2' => 'FRC no mapa, RAO no relógio da pauta longa',
            'texto' => 'O Aeroporto Tenente Lund Presotto (FRC) aparece no mapa e não substitui o voo comercial. Quem precisa de conexão regular sai, na prática, pelo Leite Lopes (RAO), em Ribeirão Preto, com margem da SP-334 / Cândido Portinari. Combinamos o terminal de Ribeirão e o ponto de saída em Franca; não é o mesmo pedido urbano da Champagnat.',
        ],
        [
            'h2' => 'Quando a pauta vaza para Ribeirão Preto ou Uberaba',
            'texto' => 'Hotel → planta → RAO só fecha se a ordem já estiver no roteiro. Ribeirão Preto e Uberaba entram como viagem, com margem de rodovia. A espera na cancela da fábrica integra o trecho quando combinada; o polo não admite recuo improvisado no horário de troca de turno.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que a portaria calçadista exige',
        'itens' => [
            ['num' => '01', 'titulo' => 'Qual das portarias', 'texto' => 'Centro, City Petrópolis ou o nome da planta. “Em Franca” não define a cancela.'],
            ['num' => '02', 'titulo' => 'RAO, não o FRC comercial', 'texto' => 'O Lund Presotto não tem malha regular. O Leite Lopes em Ribeirão pede margem de rodovia e o número do voo.'],
            ['num' => '03', 'titulo' => 'Cidade ou salto', 'texto' => 'Ribeirão e Uberaba entram como viagem. O urbano da Champagnat é outro valor.'],
        ],
    ],
    'faq_h2' => 'Quem fecha a portaria calçadista pergunta isto',
    'faq' => [
        ['pergunta' => 'O Tenente Lund Presotto (FRC) tem voo comercial regular?', 'resposta' => 'Não. O campo de Franca não substitui a conexão regular. O saguão prático da pauta longa é o Leite Lopes (RAO), em Ribeirão Preto.'],
        ['pergunta' => 'O Leite Lopes (RAO) entra no mesmo pedido da planta?', 'resposta' => 'Entra, se o voo já estiver no roteiro. A Cândido Portinari pede margem; não é o intervalo do Centro até o City Petrópolis.'],
        ['pergunta' => 'City Petrópolis e Jardim Redentor se trocam no GPS do Centro?', 'resposta' => 'Não. São recuos distintos. Rua e o nome do hotel ou da clínica entram no pedido junto com o horário.'],
        ['pergunta' => 'A portaria calçadista aceita o carro sem lista?', 'resposta' => 'Quase nunca. Envie visitante, documento e o complexo. Sem isso, a cancela do polo não libera.'],
        ['pergunta' => 'Uberaba cabe depois da visita à fábrica?', 'resposta' => 'Cabe como viagem, quando o endereço entra no itinerário. Não é o mesmo recorte urbano de Franca; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Mande a portaria da planta, não o pin do Centro',
        'texto' => 'Planta calçadista, City Petrópolis e o RAO: envie a pauta. Cotamos o trecho.',
        'botao' => 'Agendar traslado em Franca',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'ribeirao-preto', 'ancora' => 'Centro, Jardim Irajá e o aeroporto RAO'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'uberaba', 'ancora' => 'Centro, Estados Unidos e o aeroporto UBA'],
    ],
];
