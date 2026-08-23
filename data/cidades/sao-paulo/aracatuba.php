<?php

declare(strict_types=1);

return [
    'layout' => 'rio',
    'cidade_nome' => 'Araçatuba',
    'geo' => ['lat' => -21.2076, 'lng' => -50.4401],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Araçatuba',
    'seo' => [
        'title' => 'Noroeste paulista: motorista em Araçatuba e ARU',
        'description' => 'Motorista no noroeste paulista para o Centro de Araçatuba, Jardim Nova Yorque, Prestes Maia e o aeroporto Dario Guarita (ARU). BR-153, pecuária e valor sob consulta.',
        'og_title' => 'ARU e BR-153: o noroeste não se mede no app',
        'og_description' => 'Traslado em Araçatuba: Prestes Maia, Nova Yorque e o Dario Guarita — pecuária e saguão no mesmo expediente.',
        'og_image_alt' => 'Sedan executivo na Avenida Prestes Maia, em Araçatuba',
    ],
    'kicker' => 'Noroeste paulista · SP',
    'h1' => 'O noroeste paulista se mede em ARU e em BR-153, não em app',
    'corrente' => [
        [
            'h2' => 'Prestes Maia, gado e o saguão — o pin não lê o turno do frigorífico',
            'texto' => 'No noroeste paulista a distância útil se mede em ARU e em BR-153. Prestes Maia e o Jardim Nova Yorque pedem endereço, não o pin do aplicativo. Hotel no Centro entra só como embarque. A pauta pecuária — fazenda, leilão ou frigorífico — pede o nome da propriedade e, quando houver, lista na porteira. O Dario Guarita (ARU) liga em geral a GRU e a VCP; o saguão não se improvisa no GPS da avenida.',
        ],
        [
            'h2' => 'Recortes que a agenda araçatubense mais cita',
            'itens' => [
                [
                    'h3' => 'Centro e a Prestes Maia',
                    'texto' => 'Sede, hotel de embarque e o eixo comercial. Informe o prédio; o recuo do Centro não é o do Nova Yorque.',
                ],
                [
                    'h3' => 'Jardim Nova Yorque',
                    'texto' => 'Residencial e clínica. Rua e número evitam a volta no quarteirão depois da Prestes Maia.',
                ],
                [
                    'h3' => 'Pecuária, porteira e o recorte rural',
                    'texto' => 'Fazenda, leilão ou frigorífico. O nome da propriedade entra no roteiro; sem isso, a porteira não libera o sedan.',
                ],
            ],
        ],
        [
            'h2' => 'Dario Guarita — ARU, com malha a GRU e a VCP',
            'texto' => 'O aeroporto fica no recorte da cidade. Combinamos o voo — ligações típicas com Guarulhos e Viracopos. A espera no desembarque integra o trecho ARU quando o pouso está no itinerário. Até a Prestes Maia a margem é urbana; até São José do Rio Preto pela BR-153, o relógio deixa de ser o do Centro.',
        ],
        [
            'h2' => 'Rio Preto e Prudente não se improvisam depois do Nova Yorque',
            'texto' => 'Hotel → ARU → Prestes Maia só fecha se a ordem já estiver no recado. São José do Rio Preto pela BR-153 e Presidente Prudente pela malha do oeste entram como viagem, não como segunda corrida urbana. O hotel é ponto de embarque, sem convênio de porta. A pecuária pede margem de estrada quando a pauta sai do asfalto da avenida.',
        ],
    ],
    'faq_h2' => 'O noroeste pergunta em ARU e em BR-153',
    'faq' => [
        ['pergunta' => 'O Dario Guarita (ARU) liga para GRU ou VCP?', 'resposta' => 'A malha típica cobre os dois saguões, conforme o voo do dia. Combinamos número e terminal; o ARU não se trata como pin de aplicativo na Prestes Maia.'],
        ['pergunta' => 'Prestes Maia e Jardim Nova Yorque pedem rua, não pin?', 'resposta' => 'Pedem. São recuos distintos. O logradouro e o nome do estabelecimento entram no pedido junto com o horário.'],
        ['pergunta' => 'A BR-153 até Rio Preto é viagem ou corrida urbana?', 'resposta' => 'Viagem. São José do Rio Preto entra quando o endereço já está no itinerário. Não é o intervalo do Centro até o Nova Yorque; o horário sai sob consulta.'],
        ['pergunta' => 'A pauta pecuária entra com protocolo de fazenda ou frigorífico?', 'resposta' => 'Entra. Envie o nome da propriedade e, se houver, o visitante na lista. Sem isso, a porteira ou a cancela do frigorífico não libera.'],
        ['pergunta' => 'Presidente Prudente cabe no mesmo expediente?', 'resposta' => 'Cabe como salto do oeste, quando Prudente já está no roteiro. O urbano de Araçatuba é outro valor.'],
    ],
    'cta' => [
        'titulo' => 'ARU e BR-153 no mesmo pedido do noroeste',
        'texto' => 'Prestes Maia, Nova Yorque e o Dario Guarita. Mandamos o recuo e o valor.',
        'botao' => 'Solicitar sedan no noroeste',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'presidente-prudente', 'ancora' => 'Jardim das Rosas, Centro e o aeroporto PPB'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-jose-do-rio-preto', 'ancora' => 'Redentora, Centro e o aeroporto SJP'],
    ],
];
