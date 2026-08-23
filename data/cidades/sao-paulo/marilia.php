<?php

declare(strict_types=1);

return [
    'layout' => 'dunas',
    'cidade_nome' => 'Marília',
    'geo' => ['lat' => -22.2171, 'lng' => -49.9505],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Marília',
    'seo' => [
        'title' => 'Traslado em Marília: Centro, campus Unimar e o MII',
        'description' => 'Traslado em Marília para o Centro, Jardim Alvorada, campus Unimar e Univem e o aeroporto Frank Milenkowich (MII). Ligação com VCP e JTC. Valor sob consulta.',
        'og_title' => 'Marília não é escala de Bauru: o MII tem recuo próprio',
        'og_description' => 'Motorista em Marília: hotel no Centro, pauta no campus e o saguão Frank Milenkowich — sem herdar o relógio de Bauru.',
        'og_image_alt' => 'Sedan executivo na Avenida Sampaio Vidal, em Marília',
    ],
    'kicker' => 'Centro-oeste paulista · SP',
    'h1' => 'Marília não é escala de Bauru: o MII tem recuo próprio',
    'trilha' => [
        'h2' => 'O MII, o campus e o alimento — Bauru não empresta o relógio',
        'texto' => 'Bauru não empresta o relógio a Marília. O Frank Milenkowich (MII) tem recuo próprio, e o campus Unimar/Univem não se resolve no GPS da vizinha. Centro, Jardim Alvorada e a Sampaio Vidal pedem logradouro. A malha do MII costuma ligar a Viracopos e ao JTC; tratar o saguão como escala bauruense é o erro que atrasa o embarque.',
    ],
    'chips' => [
        'h2' => 'Onde o embarque mariliense mais se repete',
        'itens' => [
            'Centro',
            'Jardim Alvorada',
            'Unimar',
            'Univem',
            'Sampaio Vidal',
            'Planta de alimentos',
            'Terminal MII',
        ],
    ],
    'historias' => [
        [
            'h2' => 'Hotel no Centro é porta de saída, não slogan',
            'texto' => 'Hotéis da Sampaio Vidal e do Alvorada entram pelo nome e pelo recuo. O carro espera no acesso combinado. Não há convênio de porta: o estabelecimento é só o ponto de embarque da pauta.',
        ],
        [
            'h2' => 'Unimar, Univem e o silêncio da portaria acadêmica',
            'texto' => 'Dois campi, dois protocolos. Bloco, visitante e o documento pedido entram no roteiro. O recuo da Unimar não é o da Univem; o pin “campus em Marília” entrega o sedan na cancela errada.',
        ],
        [
            'h2' => 'Alimento, Alvorada e o salto que não passa por Bauru',
            'texto' => 'Hotel → planta de alimentos → campus só fecha se a ordem já estiver no recado. Presidente Prudente e Bauru entram como viagem quando nomeados. O JTC não é o saguão de Marília; quem precisa do MII pede Marília, não a escala da vizinha.',
        ],
        [
            'h2' => 'Frank Milenkowich — MII, com malha a VCP e ao JTC',
            'texto' => 'O aeroporto fica no recorte da cidade. Combinamos o voo — ligações típicas com Viracopos (VCP) e Bauru (JTC). A espera no desembarque integra o trecho MII quando o pouso está no itinerário. Até o Centro a margem é urbana; até Prudente, a malha do oeste pede outro relógio.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem não escala em Bauru',
    'faq' => [
        ['pergunta' => 'O MII é escala de Bauru ou recuo próprio?', 'resposta' => 'Recuo próprio. O Frank Milenkowich atende Marília. O JTC é outro saguão; tratar Marília como escala bauruense atrasa o embarque.'],
        ['pergunta' => 'Unimar e Univem pedem portaria de campus?', 'resposta' => 'Pedem. Envie bloco, visitante e o campus certo. Sem lista, a cancela acadêmica não libera.'],
        ['pergunta' => 'Jardim Alvorada e o Centro compartilham o mesmo ponto?', 'resposta' => 'Não. Informe o hotel ou a rua. A Sampaio Vidal não resolve o recuo do Alvorada no mesmo pin.'],
        ['pergunta' => 'Há ligação prática do MII com VCP ou JTC?', 'resposta' => 'Sim, na malha típica da cidade. Combinamos o voo e o ponto de saída em Marília; o trecho até o saguão não se herda do relógio de Bauru.'],
        ['pergunta' => 'A planta de alimentos exige nome na cancela?', 'resposta' => 'Em geral, sim. Envie o complexo e o documento pedido. Sem isso, o recuo industrial não abre. Valor sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Trate o MII como recuo de Marília, não de Bauru',
        'texto' => 'Campus, Centro e Frank Milenkowich: um recado basta. Valor sob consulta.',
        'botao' => 'Pedir motorista em Marília',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'bauru', 'ancora' => 'Estoril, Centro e o aeroporto JTC'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'presidente-prudente', 'ancora' => 'Jardim das Rosas, Centro e o aeroporto PPB'],
    ],
];
