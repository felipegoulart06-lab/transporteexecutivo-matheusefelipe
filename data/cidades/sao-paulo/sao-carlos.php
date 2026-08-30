<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'São Carlos',
    'geo' => ['lat' => -22.0087, 'lng' => -47.8909],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em São Carlos',
    'seo' => [
        'title' => 'Motorista em São Carlos: campus USP, UFSCar e QSC',
        'description' => 'Motorista em São Carlos para o Centro, a USP e a UFSCar. O Mário Pereira Lopes (QSC) não tem malha regular; VCP e RAO vazam a conexão. Orçamento sob consulta.',
        'og_title' => 'USP, UFSCar e o recuo até Viracopos ou o RAO',
        'og_description' => 'Traslado em São Carlos: Área 1 no Centro, UFSCar na Washington Luís e o voo fora do QSC.',
        'og_image_alt' => 'Sedan executivo na Avenida São Carlos, no Centro de São Carlos',
    ],
    'kicker' => 'Interior paulista · SP',
    'h1' => 'Da USP à UFSCar sem tratar o QSC como saguão regular',
    'olho' => 'São Carlos junta sede no Centro, dois campi da USP e a UFSCar na Washington Luís (SP-310). O Aeroporto Estadual Mário Pereira Lopes (QSC), em Água Vermelha, opera aviação geral e o centro de manutenção da Latam — sem malha regular de passageiros. O voo comercial vaza para Viracopos (VCP) ou para o Leite Lopes (RAO), em Ribeirão Preto. O código IZA não é desta cidade.',
    'capitulos' => [
        [
            'h2' => 'Três portarias acadêmicas não cabem no mesmo pin do Centro',
            'texto' => 'A USP Área 1 fica na Avenida Trabalhador são-carlense, no Centro. A Área 2 fica em Santa Angelina, na Avenida João Dagnone. A UFSCar está na Rodovia Washington Luís, km 235 — outro recuo, outra lista. Hotel no Centro (Rua Episcopal / Avenida São Carlos) entra só como embarque. O campus pede bloco e documento; “em São Carlos” não abre a cancela.',
        ],
        [
            'h2' => 'Onde o embarque são-carlense mais se concentra',
            'itens' => [
                ['h3' => 'Centro, Episcopal e a Avenida São Carlos', 'texto' => 'Sede, hotel e o calçadão. Informe o prédio; o recuo do Centro não é o da USP Área 2 nem o da UFSCar.'],
                ['h3' => 'USP Área 1 e Área 2', 'texto' => 'Área 1 no Centro; Área 2 em Santa Angelina. A portaria muda. Envie o bloco; o GPS na reitoria não resolve as duas entradas.'],
                ['h3' => 'UFSCar na Washington Luís', 'texto' => 'Campus na SP-310, km 235. Protocolo de portaria entra no roteiro junto com o horário da reunião. Não se troca com a USP no mesmo pin.'],
            ],
        ],
        [
            'h2' => 'QSC no mapa, VCP e RAO no relógio da pauta aérea',
            'texto' => 'O Mário Pereira Lopes (QSC/SDSC) fica na Rodovia Engenheiro Thales de Lorena Peixoto Júnior (SP-318), em Água Vermelha. Combinamos o recuo quando a pauta é aviação geral ou o centro de manutenção — não como voo de linha. Para conexão comercial, o portão prático sai em Viracopos (VCP), pela Washington Luís rumo a Campinas, ou no Leite Lopes (RAO), em Ribeirão Preto. IZA é o aeroporto da Zona da Mata, em Minas; não use esse código no pedido de São Carlos.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que evitam atraso no campus e no voo',
        'itens' => [
            ['num' => '01', 'titulo' => 'Qual das portarias', 'texto' => 'Centro, USP Área 1, USP Área 2 ou UFSCar. “Em São Carlos” não define o recuo da cancela.'],
            ['num' => '02', 'titulo' => 'QSC só se for o campo certo', 'texto' => 'Sem malha regular de passageiros. VCP e RAO pedem margem de rodovia e o número do voo.'],
            ['num' => '03', 'titulo' => 'Cidade ou viagem', 'texto' => 'Campinas, Ribeirão Preto ou a capital entram como viagem. O urbano do Centro é outro orçamento.'],
        ],
    ],
    'faq_h2' => 'USP, UFSCar e o que o QSC não resolve',
    'faq' => [
        ['pergunta' => 'O aeroporto de São Carlos (QSC) tem voo comercial regular?', 'resposta' => 'Não. O Mário Pereira Lopes opera aviação geral e manutenção. O voo de linha vaza para Viracopos (VCP) ou para o Leite Lopes (RAO). IZA não é o código deste campo.'],
        ['pergunta' => 'USP e UFSCar ficam no mesmo campus?', 'resposta' => 'Não. A USP tem Área 1 no Centro e Área 2 em Santa Angelina. A UFSCar está na Washington Luís, km 235. Informe a unidade e o bloco; um motorista articula os três se a ordem já estiver no roteiro.'],
        ['pergunta' => 'O motorista espera no VCP ou no RAO se o voo atrasar?', 'resposta' => 'Sim, quando o voo está no roteiro. O número do voo entra no pedido e a espera no terminal faz parte do trecho de rodovia, não do intervalo da Episcopal.'],
        ['pergunta' => 'Dá para ir a Campinas ou a Ribeirão Preto depois do hotel?', 'resposta' => 'Sim, como viagem pela Washington Luís ou pelo recorte do interior. Não é o mesmo pedido do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Marque o campus no mesmo recado do VCP ou do RAO',
        'texto' => 'Diga se o embarque é o Centro, a USP ou a UFSCar, e se o voo é em Viracopos ou no Leite Lopes. Horário sob consulta.',
        'botao' => 'Pedir motorista em São Carlos',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'campinas', 'ancora' => 'Cambuí, Unicamp e o Viracopos'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'ribeirao-preto', 'ancora' => 'Centro, Jardim Irajá e o aeroporto RAO'],
    ],
];
