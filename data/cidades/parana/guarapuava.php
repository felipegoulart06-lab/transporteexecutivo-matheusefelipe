<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Guarapuava',
    'geo' => ['lat' => -25.3905, 'lng' => -51.4627],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Guarapuava',
    'seo' => [
        'title' => 'Serra paranaense: carro em Guarapuava, Centro e CWB',
        'description' => 'Motorista em Guarapuava para o Centro, Santana, o Distrito Industrial e a serra até o Afonso Pena. GPB limitado; o voo prático é o CWB. Orçamento sob consulta.',
        'og_title' => 'Carro no Centro de Guarapuava, em Santana e no CWB',
        'og_description' => 'Traslado na serra paranaense: hotel no Centro, pauta industrial e o Afonso Pena como voo prático.',
        'og_image_alt' => 'Sedan executivo em avenida de Guarapuava na serra do Paraná',
    ],
    'kicker' => 'Serra paranaense · PR',
    'h1' => 'Entre o Centro e o CWB, a serra do Paraná muda o expediente',
    'olho' => 'Guarapuava sobe a serra e desce o relógio. O motorista segura a BR-277, o recuo de Santana e o Distrito Industrial; o passageiro segura a pauta — o CWB não está na porta do Centro, e o Tancredo Neves (GPB) não substitui a malha de Curitiba.',
    'capitulos' => [
        [
            'h2' => 'A serra não é atalho: altitude, geada e o intervalo até o Afonso Pena',
            'texto' => 'Centro, Santana e o Distrito Industrial cabem no mesmo dia se a ordem da Batel e da Manoel Ribas já estiver no recado. O campo Tancredo Neves (GPB) existe no recorte; linha regular costuma faltar. O voo prático sai do Afonso Pena (CWB), em São José dos Pinhais — serra e BR-277, não corrida urbana. Ponta Grossa cola no caminho só se a pauta pedir. O orçamento sai sob consulta.',
        ],
        [
            'h2' => 'Onde o embarque guarapuavano mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Batel', 'texto' => 'Sede, hotel e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde e “no Centro” não define o recuo.'],
                ['h3' => 'Santana', 'texto' => 'Pauta residencial, clínicas e o eixo interno. O recuo pede rua e número, não o nome do bairro sozinho.'],
                ['h3' => 'Distrito Industrial', 'texto' => 'Portaria e turno. Envie o nome na lista e o documento pedido; sem isso, a cancela não libera.'],
            ],
        ],
        [
            'h2' => 'Rotas de trabalho, serra e o salto pela 277',
            'texto' => 'Hotel no Centro → Santana → planta no Distrito só se a ordem estiver no roteiro. O clássico longo é Guarapuava → CWB pela BR-277, com margem de serra e de contorno. Ponta Grossa e Curitiba entram como viagem, não como segunda corrida no calçadão.',
        ],
        [
            'h2' => 'Tancredo Neves (GPB) e o CWB como janela prática',
            'texto' => 'O GPB fica no recorte de Guarapuava e atende o que a malha do dia oferecer. Sem linha útil, combinamos o Afonso Pena: o trecho até São José dos Pinhais pede horário de serra. O passageiro não cruza o saguão atrás de uma placa genérica; o número do voo entra no recado.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que evitam atraso na serra paranaense',
        'itens' => [
            ['num' => '01', 'titulo' => 'Bairro e prédio', 'texto' => 'Centro, Santana ou o Distrito. “Em Guarapuava” não define o recuo.'],
            ['num' => '02', 'titulo' => 'GPB ou CWB', 'texto' => 'Diga o voo. Sem linha no Tancredo Neves, o carro sai com margem de serra até o Afonso Pena.'],
            ['num' => '03', 'titulo' => 'Planta ou cidade', 'texto' => 'A cancela industrial pede nome na lista. O urbano é outro recuo. Orçamento sob consulta.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem desce a serra rumo ao CWB',
    'faq' => [
        ['pergunta' => 'O aeroporto Tancredo Neves (GPB) tem voo regular?', 'resposta' => 'A linha costuma ser limitada ou ausente. O terminal prático é o Afonso Pena (CWB), pela BR-277. Informe o voo; o recorte de serra muda o horário.'],
        ['pergunta' => 'O CWB fica perto do Centro de Guarapuava?', 'resposta' => 'Não. É trecho de serra até São José dos Pinhais. Marcamos margem de BR-277; não é o mesmo intervalo de Santana ao calçadão.'],
        ['pergunta' => 'Vocês entram no Distrito Industrial com protocolo?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, a cancela não libera.'],
        ['pergunta' => 'Vocês fazem Centro, Santana e o Distrito no mesmo dia?', 'resposta' => 'Sim. Informe a ordem e o nome do hotel. Um motorista articula os três recuos se a margem estiver no roteiro.'],
        ['pergunta' => 'Dá para parar em Ponta Grossa no caminho do CWB?', 'resposta' => 'Sim, quando a pauta pedir. Não é escala automática; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Encaixe Santana e o CWB na mesma pauta',
        'texto' => 'O orçamento de Guarapuava sai sob consulta. Centro, serra e Afonso Pena no mesmo recado.',
        'botao' => 'Pedir motorista em Guarapuava',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'parana', 'ancora' => 'Foz, Londrina e o recorte paranaense'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'ponta-grossa', 'ancora' => 'Centro, Oficinas e o recorte até o CWB'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'curitiba', 'ancora' => 'Batel, Centro Cívico e o Afonso Pena'],
    ],
];
