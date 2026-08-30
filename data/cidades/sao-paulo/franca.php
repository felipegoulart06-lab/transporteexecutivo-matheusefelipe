<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Franca',
    'geo' => ['lat' => -20.5386, 'lng' => -47.4008],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Franca',
    'seo' => [
        'title' => 'Motorista em Franca: polo do calçado, FRC e o RAO',
        'description' => 'Motorista em Franca para o Centro, o City Petrópolis e a portaria calçadista. FRC é regional; o RAO, em Ribeirão Preto, vaza a conexão. Orçamento sob consulta.',
        'og_title' => 'Portaria calçadista em Franca e o recuo até o RAO',
        'og_description' => 'Traslado em Franca: cancela da fábrica, hotel no Centro e o salto pela Cândido Portinari rumo ao Leite Lopes.',
        'og_image_alt' => 'Sedan executivo na Avenida Champagnat, em Franca',
    ],
    'kicker' => 'Alta Mogiana · SP',
    'h1' => 'Da portaria do calçado ao RAO sem tratar o FRC como hub',
    'olho' => 'Franca é o polo calçadista: a portaria da planta não se troca pelo pin da Champagnat. O Aeroporto Estadual Tenente Lund Presotto (FRC) tem malha regional limitada rumo a Viracopos; confirme o voo no pedido. Para a maior parte das conexões, o saguão que vaza é o Leite Lopes (RAO), em Ribeirão Preto, pela Cândido Portinari (SP-334). City Petrópolis e o Centro não liberam a cancela da fábrica.',
    'capitulos' => [
        [
            'h2' => 'A cidade do couro não se pauta no pin da Champagnat',
            'texto' => 'Centro, City Petrópolis e o cinturão das fábricas cabem no mesmo município e exigem endereços diferentes. Hotel no Centro entra só como embarque. A visita à planta pede lista, documento e o número da portaria — o sedan não “aparece na fábrica” porque o app apontou Franca. Champagnat e a São Vicente de Paulo mudam o intervalo no pico da saída do turno. A Indicação Geográfica do calçado de Franca descreve o município inteiro; o motorista precisa do complexo, não do slogan.',
        ],
        [
            'h2' => 'Onde o embarque francano mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Champagnat', 'texto' => 'Sede, hotel de embarque e o calçadão. Informe o prédio; o recuo do Centro não é o da planta.'],
                ['h3' => 'City Petrópolis e a Cândido Portinari', 'texto' => 'Residencial e o recorte industrial junto à SP-334. Rua e o nome do complexo evitam a volta depois da cancela.'],
                ['h3' => 'Plantas do polo calçadista', 'texto' => 'Portaria, turno e visitante na lista. Sem o nome do complexo, o GPS no Centro não abre a entrada.'],
            ],
        ],
        [
            'h2' => 'FRC no município, RAO no relógio da pauta longa',
            'texto' => 'O Tenente Lund Presotto (FRC) fica na Rodovia Rio Negro e Solimões, no município de Franca, sob a Rede VOA. Há operação regional limitada rumo a Campinas (VCP); a malha é curta e pede conferência do voo. Quem precisa de conexão com mais frequência ou aeronave maior sai, na prática, pelo Leite Lopes (RAO), em Ribeirão Preto, com margem da SP-334. Uberaba entra como viagem quando a pauta cruza a divisa mineira. Não trate o FRC como o mesmo saguão do RAO.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que a portaria calçadista exige',
        'itens' => [
            ['num' => '01', 'titulo' => 'Qual das portarias', 'texto' => 'Centro, City Petrópolis ou o nome da planta. “Em Franca” não define a cancela.'],
            ['num' => '02', 'titulo' => 'FRC ou RAO', 'texto' => 'Confirme se o voo é no Lund Presotto ou no Leite Lopes, em Ribeirão. O RAO pede margem da Cândido Portinari.'],
            ['num' => '03', 'titulo' => 'Cidade ou salto', 'texto' => 'Ribeirão Preto e Uberaba entram como viagem. O urbano da Champagnat é outro valor.'],
        ],
    ],
    'faq_h2' => 'Quem fecha a portaria calçadista pergunta isto',
    'faq' => [
        ['pergunta' => 'O Tenente Lund Presotto (FRC) tem voo comercial?', 'resposta' => 'Há malha regional limitada rumo a Viracopos. Confirme o voo no pedido. Para a maior parte das conexões, o saguão prático continua sendo o Leite Lopes (RAO), em Ribeirão Preto.'],
        ['pergunta' => 'O Leite Lopes (RAO) entra no mesmo pedido da planta?', 'resposta' => 'Entra, se o voo já estiver no roteiro. A Cândido Portinari pede margem; não é o intervalo do Centro até o City Petrópolis.'],
        ['pergunta' => 'City Petrópolis e o Centro se trocam no GPS?', 'resposta' => 'Não. São recuos distintos. Rua, o nome do hotel ou da planta entram no pedido junto com o horário. O polo não admite pin genérico no turno.'],
        ['pergunta' => 'A portaria calçadista aceita o carro sem lista?', 'resposta' => 'Quase nunca. Envie visitante, documento e o complexo. Sem isso, a cancela do polo não libera.'],
    ],
    'cta' => [
        'titulo' => 'Mande a portaria da planta, não o pin do Centro',
        'texto' => 'Diga o complexo calçadista, se o embarque é o Centro ou o City Petrópolis, e se o voo é no FRC ou no RAO. Horário sob consulta.',
        'botao' => 'Pedir motorista em Franca',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'ribeirao-preto', 'ancora' => 'Centro, Jardim Irajá e o aeroporto RAO'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'uberaba', 'ancora' => 'Centro, Estados Unidos e o aeroporto UBA'],
    ],
];
