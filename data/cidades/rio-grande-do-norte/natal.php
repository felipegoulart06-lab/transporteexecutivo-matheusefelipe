<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Natal',
    'geo' => ['lat' => -5.79448, 'lng' => -35.211],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Natal',
    'seo' => [
        'title' => 'NAT em São Gonçalo: Ponta Negra e Via Costeira',
        'description' => 'O NAT fica em São Gonçalo do Amarante, não no Centro nem em Parnamirim. Motorista para Ponta Negra, Via Costeira e Tirol, com espera no Aluízio Alves.',
        'og_title' => 'O aeroporto de Natal não fica no Centro nem em Parnamirim',
        'og_description' => 'Traslado potiguar: hotel em Ponta Negra ou na Via Costeira e o Governador Aluízio Alves em São Gonçalo do Amarante.',
        'og_image_alt' => 'Carro executivo em avenida da orla de Ponta Negra em Natal',
    ],
    'kicker' => 'Capital potiguar · RN',
    'h1' => 'De Ponta Negra ao Aluízio Alves sem achar que o NAT é o Centro',
    'faixas' => [
        [
            'h2' => 'O NAT não desembarca em Natal: o terminal é outro município',
            'texto' => 'O Aeroporto Internacional Governador Aluízio Alves (NAT) fica em São Gonçalo do Amarante, na Av. Dr. Ruy Pereira dos Santos. Não é o Centro de Natal, não é Ponta Negra e não é o antigo terminal de Parnamirim. Hotel na Via Costeira ou em Ponta Negra e pauta no Tirol cabem no mesmo dia se o motorista já saiu com essa fronteira invisível, não com o pino “Natal” do app.',
        ],
        [
            'h2' => 'Três recortes que o pedido potiguar mais usa',
            'itens' => [
                ['h3' => 'Ponta Negra e a Roberto Freire', 'texto' => 'Hotéis de orla. Informe o nome e o recuo; “na Ponta Negra” não distingue a praia da Rota do Sol.'],
                ['h3' => 'Via Costeira — Senador Dinarte Mariz', 'texto' => 'Faixa hoteleira entre a cidade e o mar. O embarque pede o hotel, não o quilômetro da via.'],
                ['h3' => 'Tirol, Petrópolis e o miolo da capital', 'texto' => 'Clínicas, sede e o semáforo da Prudente de Morais. Deslocamento curto que não se mistura com o trecho até São Gonçalo.'],
            ],
        ],
        [
            'h2' => 'Rotas de orla, de Tirol e o engano de Parnamirim',
            'texto' => 'NAT em São Gonçalo → hotel em Ponta Negra ou na Via Costeira → Tirol → retorno ao Aluízio Alves. Parnamirim aparece no caminho ou na memória do aeroporto antigo; não é o destino do voo comercial NAT. Pipa e São Miguel do Gostoso saem como viagem, com margem de estrada, não como segunda corrida da Roberto Freire.',
        ],
        [
            'h2' => 'Governador Aluízio Alves — NAT',
            'texto' => 'Lei federal denomina o terminal Aeroporto Internacional do Rio Grande do Norte/São Gonçalo do Amarante — Governador Aluízio Alves. Combinamos o voo. A espera no desembarque entra no trecho NAT. BR-101 e BR-304 pesam no intervalo até Ponta Negra mais que o mapa da capital.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Aluízio Alves',
    'faq' => [
        ['pergunta' => 'O voo NAT desembarca no Centro de Natal ou em Parnamirim?', 'resposta' => 'Em nenhum dos dois. O NAT fica em São Gonçalo do Amarante. Parnamirim é outro município; o Centro de Natal não tem o terminal comercial.'],
        ['pergunta' => 'Hotel na Via Costeira e reunião no Tirol cabem no mesmo pedido do Aluízio Alves?', 'resposta' => 'Cabem, se a ordem já estiver no roteiro. A Dinarte Mariz e a Prudente de Morais não substituem o trecho até São Gonçalo.'],
        ['pergunta' => 'Ponta Negra e São Gonçalo do Amarante são o mesmo município no roteiro?', 'resposta' => 'Não. Ponta Negra é Natal; o aeroporto é São Gonçalo. Informe os dois pontos — o app que escreve só “Natal” erra o recuo.'],
        ['pergunta' => 'Pipa entra como extensão da Via Costeira?', 'resposta' => 'Não. Pipa sai como viagem, fora do recorte da orla natalense. O horário e o valor saem sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Diga se o ponto é Ponta Negra, a Via Costeira ou o NAT',
        'texto' => 'O orçamento de Natal sai sob consulta. Município do terminal, hotel e horário do voo no mesmo recado.',
        'botao' => 'Pedir motorista em Natal',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-grande-do-norte', 'ancora' => 'Mossoró, Parnamirim e o recorte potiguar'],
        ['tipo' => 'cidade', 'estado' => 'paraiba', 'cidade' => 'joao-pessoa', 'ancora' => 'Tambaú, Cabo Branco e o Castro Pinto'],
        ['tipo' => 'cidade', 'estado' => 'ceara', 'cidade' => 'fortaleza', 'ancora' => 'Meireles, Aldeota e o Pinto Martins'],
    ],
];
