<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Gurupi',
    'geo' => ['lat' => -11.7279, 'lng' => -49.068],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Gurupi',
    'seo' => [
        'title' => 'Sul do TO: traslado em Gurupi, Centro e a BR-153',
        'description' => 'Motorista em Gurupi para o Centro, a Vila Guaracy, o aeroporto GRP e o eixo da BR-153. Sul do Tocantins, não a mesma cidade de Palmas. Orçamento sob consulta.',
        'og_title' => 'Carro no Centro de Gurupi, na Vila Guaracy e no GRP',
        'og_description' => 'Traslado no sul tocantinense: hotel no Centro, pauta urbana e o saguão GRP — Palmas é outra malha.',
        'og_image_alt' => 'Sedan executivo em avenida de Gurupi no sul do Tocantins',
    ],
    'kicker' => 'Sul tocantinense · TO',
    'h1' => 'O sul do Tocantins articula GRP e a BR-153, sem tratar Palmas como a mesma cidade',
    'olho' => 'Gurupi articula o sul do Tocantins no GRP e na BR-153. Palmas é outra cidade, outro Plano Diretor, outro saguão. O motorista segura a 153; o passageiro segura a pauta — não a vaga no Centro.',
    'capitulos' => [
        [
            'h2' => 'A cidade do sul e o aeroporto no recorte do município',
            'texto' => 'Centro e Vila Guaracy cabem no mesmo expediente. O Aeroporto de Gurupi (GRP) fica no recorte da cidade. Hotel, reunião na sede e o voo pedem o nome da rua; “no sul do TO” não define a porta. Palmas (PMW) e Araguaína (AUX) não se improvisam depois do calçadão. O hotel entra só como embarque. O orçamento sai sob consulta.',
        ],
        [
            'h2' => 'Onde o embarque gurupiense mais se concentra',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Sede, hotel e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde e o recuo do Centro não é o da Vila Guaracy.',
                ],
                [
                    'h3' => 'Vila Guaracy',
                    'texto' => 'Pauta residencial e clínicas. “Na Guaracy” não define a entrada do condomínio nem o ponto de espera.',
                ],
                [
                    'h3' => 'Acesso da BR-153',
                    'texto' => 'A Belém-Brasília corta o sul do Estado. Quando a pauta mistura hotel e saída para Palmas, a margem sai da 153, não do aceitar do app no Centro.',
                ],
            ],
        ],
        [
            'h2' => 'Rotas de trabalho e o salto pela 153 que não é Palmas',
            'texto' => 'GRP → hotel no Centro → Vila Guaracy só se a ordem estiver no roteiro. Outro pedido: hotel → Palmas pelo Plano Diretor ou Araguaína pelo norte, como viagem — não como corrida urbana. A BR-153 pede margem própria quando a pauta vaza do município.',
        ],
        [
            'h2' => 'Gurupi — GRP',
            'texto' => 'O aeroporto fica no recorte da cidade. Combinamos o voo. Até o Centro a margem é urbana; até Palmas (PMW) ou Araguaína (AUX), não. O passageiro não cruza o saguão atrás de uma placa genérica.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que evitam atraso no sul do Tocantins',
        'itens' => [
            [
                'num' => '01',
                'titulo' => 'Bairro e prédio',
                'texto' => 'Centro ou Vila Guaracy. “Em Gurupi” não define o recuo.',
            ],
            [
                'num' => '02',
                'titulo' => 'Voo no GRP',
                'texto' => 'Número e horário. O carro sai com margem, não no minuto do check-in.',
            ],
            [
                'num' => '03',
                'titulo' => 'Palmas ou cidade',
                'texto' => 'O Plano Diretor da capital é outra malha. O urbano de Gurupi é outro recuo. Orçamento sob consulta.',
            ],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta o sul do TO e o GRP',
    'faq' => [
        [
            'pergunta' => 'Gurupi é a mesma malha de Palmas?',
            'resposta' => 'Não. Palmas tem Plano Diretor e o PMW. Gurupi articula o GRP e a BR-153 no sul do Estado. São cidades distintas.',
        ],
        [
            'pergunta' => 'O aeroporto de Gurupi fica no Centro?',
            'resposta' => 'É trecho urbano do município. Marcamos margem: o acesso ao GRP e o horário de pico alteram o intervalo até a Vila Guaracy.',
        ],
        [
            'pergunta' => 'Vocês fazem Centro e Vila Guaracy no mesmo dia?',
            'resposta' => 'Sim. Informe a ordem e o nome do hotel. Um motorista articula os dois recuos.',
        ],
        [
            'pergunta' => 'Dá para seguir a Palmas pela BR-153 depois do hotel?',
            'resposta' => 'Sim, como viagem. Não é o mesmo recorte do Centro; o horário sai sob consulta.',
        ],
        [
            'pergunta' => 'Araguaína cabe no mesmo expediente urbano?',
            'resposta' => 'Não. Araguaína entra como viagem pelo norte da 153. O orçamento sai à parte do trecho de Gurupi.',
        ],
    ],
    'cta' => [
        'titulo' => 'Marque a 153 no mesmo recado do GRP',
        'texto' => 'O orçamento de Gurupi sai sob consulta. Centro, Guaracy e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir traslado em Gurupi',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'tocantins', 'ancora' => 'Palmas, o norte e o sul da 153'],
        ['tipo' => 'cidade', 'estado' => 'tocantins', 'cidade' => 'palmas', 'ancora' => 'Plano Diretor, Quadra e o PMW'],
        ['tipo' => 'cidade', 'estado' => 'tocantins', 'cidade' => 'araguaina', 'ancora' => 'Centro, Senador e o aeroporto AUX'],
    ],
];
