<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'São Luís',
    'geo' => ['lat' => -2.53073, 'lng' => -44.3068],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em São Luís',
    'seo' => [
        'title' => 'Carro executivo em São Luís: Centro, Ponta d\'Areia e SLZ',
        'description' => 'Motorista executivo em São Luís para o Centro Histórico, Ponta d\'Areia, Renascença, Calhau e o aeroporto Cunha Machado. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Centro, na Ponta d\'Areia e no SLZ',
        'og_description' => 'Carro com motorista na ilha de São Luís: hotel no Calhau, pauta no Centro e o terminal Marechal Cunha Machado.',
        'og_image_alt' => 'Sedan executivo em via da orla de São Luís',
    ],
    'kicker' => 'Capital maranhense · MA',
    'h1' => 'Do Cunha Machado ao Centro Histórico sem perder a maré da orla',
    'faixas' => [
        [
            'h2' => 'São Luís é ilha: o relógio muda com a ponte e com a ladeira',
            'texto' => 'Hotel no Calhau ou na Ponta d\'Areia, reunião no Centro Histórico e voo no Marechal Cunha Machado (SLZ) cabem no mesmo dia — se o motorista já saiu com a ordem da Avenida Litorânea e do desnível do Centro, não com o atalho da hora.',
        ],
        [
            'h2' => 'Três orlas, um Centro de pedra',
            'itens' => [
                ['h3' => 'Ponta d\'Areia, Calhau e Olho d\'Água', 'texto' => 'Hotéis de orla. Informe o nome: Pestana, Grand São Luís e similares entram pelo recuo, não por “na Litorânea”.'],
                ['h3' => 'Renascença e o shopping', 'texto' => 'Torres e clínicas. Deslocamentos curtos que esticam no semáforo da Colares Moreira.'],
                ['h3' => 'Centro Histórico e a Praia Grande', 'texto' => 'Palácio dos Leões, pedra de cantaria e o desnível. O calçamento pede ponto de espera, não GPS no beco.'],
            ],
        ],
        [
            'h2' => 'Rotas de pauta e de visita que se combinam',
            'texto' => 'SLZ → hotel no Calhau → Palácio dos Leões → retorno ao terminal. Outro pedido: Ponta d\'Areia → Espigão → Centro só como intervalo combinado. Quando a pauta inclui Alcântara, o trecho deixa o recorte urbano e sai sob consulta — inclusive o horário da travessia.',
        ],
        [
            'h2' => 'Marechal Cunha Machado — SLZ',
            'texto' => 'O aeroporto fica no recorte da ilha, sujeito a chuva. Combinamos o voo. A espera no desembarque integra o trecho SLZ. Até o Calhau ou o Centro, a Avenida dos Holandeses pesa mais que o mapa.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Cunha Machado',
    'faq' => [
        ['pergunta' => 'O aeroporto de São Luís fica longe da Ponta d\'Areia?', 'resposta' => 'É trecho urbano na ilha. Marcamos margem: a Holandeses e a chuva alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no SLZ se o voo atrasar?', 'resposta' => 'Sim. Em São Luís, o número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês sobem a ladeira do Centro Histórico?', 'resposta' => 'Sim. Combinamos o ponto de espera. O calçamento não admite recuo improvisado na Praia Grande.'],
        ['pergunta' => 'Dá para incluir Alcântara no mesmo dia?', 'resposta' => 'Sim, quando a travessia entra no roteiro. Não é o mesmo pedido da orla; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Diga se o embarque é Calhau ou Centro Histórico',
        'texto' => 'O orçamento de São Luís sai sob consulta. Orla, palácio e SLZ no mesmo recado.',
        'botao' => 'Pedir traslado em São Luís',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'maranhao', 'ancora' => 'Imperatriz, Balsas e o recorte maranhense'],
        ['tipo' => 'cidade', 'estado' => 'ceara', 'cidade' => 'fortaleza', 'ancora' => 'Meireles, Aldeota e o Pinto Martins'],
        ['tipo' => 'cidade', 'estado' => 'para', 'cidade' => 'belem', 'ancora' => 'Nazaré, Batista Campos e o BEL'],
    ],
];
