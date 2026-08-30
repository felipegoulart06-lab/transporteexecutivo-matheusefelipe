<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Crato',
    'geo' => ['lat' => -7.2312, 'lng' => -39.4097],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Crato',
    'seo' => [
        'title' => 'Cariri: motorista no Crato, Seminário e o JDO',
        'description' => 'Carro com motorista no Crato para o Centro, Seminário, Pinto Madeira e o trecho até o JDO, em Juazeiro do Norte. Cariri e orçamento sob consulta.',
        'og_title' => 'Traslado no Crato, no Seminário e no aeroporto JDO',
        'og_description' => 'Motorista no Cariri: hotel no Centro, pauta no Seminário e o terminal em Juazeiro do Norte.',
        'og_image_alt' => 'Sedan executivo em via do Centro do Crato',
    ],
    'kicker' => 'Cariri cearense · CE',
    'h1' => 'O Cariri tem dois relógios: o do Crato e o do JDO em Juazeiro',
    'olho' => 'No Cariri o relógio do Seminário não é o do saguão em Juazeiro do Norte. O Crato articula Centro e Pinto Madeira; o Orlando Bezerra (JDO) fica no município vizinho. Dois relógios, um roteiro.',
    'capitulos' => [
        [
            'h2' => 'O Crato não herda o terminal do vizinho',
            'texto' => 'Centro, Seminário e Pinto Madeira cabem no mesmo expediente municipal. O voo comercial da região pousa no Orlando Bezerra, em Juazeiro do Norte — não neste recorte. Hotel, reunião no Seminário e o saguão pedem a ordem da Avenida Padre Cícero já escrita. O hotel entra só como embarque. O orçamento sai sob consulta.',
        ],
        [
            'h2' => 'Onde o embarque cratense mais se concentra',
            'itens' => [
                [
                    'h3' => 'Centro e o casario',
                    'texto' => 'Sede, hotel e o comércio. Informe o prédio; o recuo do Centro não é o do Seminário nem o da saída para Juazeiro.',
                ],
                [
                    'h3' => 'Seminário',
                    'texto' => 'Bairro e o marco do Seminário. Pauta residencial e institucional. “No Seminário” não define a porta; rua e número evitam a volta na ladeira.',
                ],
                [
                    'h3' => 'Pinto Madeira',
                    'texto' => 'Eixo interno e o recuo residencial. Quando a agenda mistura Pinto Madeira, Centro e o JDO, a ordem das vias do Cariri pesa mais que o mapa.',
                ],
            ],
        ],
        [
            'h2' => 'Rotas que misturam o Crato, Juazeiro e o salto a Fortaleza',
            'texto' => 'Hotel no Centro → Seminário → JDO só se a ordem estiver no roteiro. Outro clássico: Crato → Barbalha como recorte do Cariri, com horário próprio. Fortaleza e o FOR entram pela malha do interior — não como segunda corrida urbana.',
        ],
        [
            'h2' => 'Orlando Bezerra — JDO em Juazeiro do Norte',
            'texto' => 'O aeroporto regional não fica no Crato. Combinamos o voo. Até o Centro cratense o intervalo atravessa a mancha do Cariri; nas romarias a Avenida Padre Cícero muda o relógio mais que o quilômetro admite.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que separam os dois relógios do Cariri',
        'itens' => [
            [
                'num' => '01',
                'titulo' => 'Bairro no Crato',
                'texto' => 'Centro, Seminário ou Pinto Madeira. “No Cariri” não define o recuo.',
            ],
            [
                'num' => '02',
                'titulo' => 'Voo no JDO',
                'texto' => 'Número e horário. O terminal é em Juazeiro do Norte; a margem sai da via, não do Seminário.',
            ],
            [
                'num' => '03',
                'titulo' => 'Cidade vizinha',
                'texto' => 'Juazeiro, Barbalha ou Fortaleza entram só se estiverem no pedido. Orçamento sob consulta.',
            ],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta o Crato e voa pelo JDO',
    'faq' => [
        [
            'pergunta' => 'O aeroporto JDO fica no Crato?',
            'resposta' => 'Não. O Orlando Bezerra fica em Juazeiro do Norte. O Crato é o município vizinho; o trecho entra no roteiro com margem para a malha do Cariri.',
        ],
        [
            'pergunta' => 'Por que falar em dois relógios?',
            'resposta' => 'Porque o horário do Seminário não é o do saguão. Romaria, Avenida Padre Cícero e o recuo cratense pedem margens distintas no mesmo dia.',
        ],
        [
            'pergunta' => 'Vocês fazem Centro, Seminário e Pinto Madeira no mesmo dia?',
            'resposta' => 'Sim. Em Crato, informe a ordem e o nome do hotel. Um motorista articula os três recuos.',
        ],
        [
            'pergunta' => 'Dá para seguir a Fortaleza depois da reunião no Centro?',
            'resposta' => 'Sim, como viagem. Não é o mesmo recorte do Cariri; o horário sai sob consulta.',
        ],
        [
            'pergunta' => 'O hotel no Seminário é ponto conveniado?',
            'resposta' => 'Não. Em Crato, o hotel entra só como embarque: nome, acesso e espera. O orçamento sai sob consulta.',
        ],
    ],
    'cta' => [
        'titulo' => 'Marque o Crato e o JDO como dois relógios',
        'texto' => 'O orçamento do Cariri sai sob consulta. Seminário, Centro e Juazeiro no mesmo WhatsApp.',
        'botao' => 'Solicitar motorista no Crato',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'ceara', 'ancora' => 'Fortaleza, o Cariri e o recorte cearense'],
        ['tipo' => 'cidade', 'estado' => 'ceara', 'cidade' => 'juazeiro-do-norte', 'ancora' => 'Centro, Salesianos e o Orlando Bezerra'],
        ['tipo' => 'cidade', 'estado' => 'ceara', 'cidade' => 'fortaleza', 'ancora' => 'Meireles, Aldeota e o Pinto Martins'],
    ],
];
