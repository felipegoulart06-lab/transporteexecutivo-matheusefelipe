<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Palmas',
    'geo' => ['lat' => -10.184, 'lng' => -48.3336],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Palmas',
    'seo' => [
        'title' => 'Carro executivo em Palmas: Plano Diretor, Quadra e PMW',
        'description' => 'Motorista executivo em Palmas para o Plano Diretor, Palmas Mall, Praia da Graciosa e o aeroporto Brigadeiro Lysias Rodrigues. Orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Plano Diretor de Palmas e no aeroporto PMW',
        'og_description' => 'Carro com motorista na capital tocantinense: hotel na quadra, pauta no Palácio e o terminal PMW.',
        'og_image_alt' => 'Sedan executivo em avenida larga do Plano Diretor de Palmas',
    ],
    'kicker' => 'Capital tocantinense · TO',
    'h1' => 'Da quadra ao Lysias Rodrigues sem perder o protocolo do Palácio',
    'preambulo' => 'Palmas é cidade planejada à beira do Tocantins. Quadra, Avenida e Palácio Araguaia não se navegam como bairro de cidade antiga. O voo chega no Brigadeiro Lysias Rodrigues (PMW); a pauta desce na ARSE, na ALNO ou na Praia da Graciosa. O motorista já conhece o acesso da via; o passageiro segura o horário.',
    'artigos' => [
        [
            'h2' => 'O Plano Diretor pede outro tipo de recuo',
            'texto' => 'ARSE, ARSO, ALNE e ALNO não se trocam no mesmo recuo. Hotel (Graciosa, similar), reunião no Palácio e voo no PMW cabem no mesmo expediente se a quadra e a avenida já estiverem no roteiro. “Perto do Palmas Mall” não coloca o carro na porta certa do gabinete.',
        ],
        [
            'h2' => 'Praia da Graciosa, Taquaralto e o silêncio da agenda',
            'texto' => 'A orla do lago e o distrito de Taquaralto entram no roteiro como visita ou como pauta — não como desvio de última hora. Residências e órgãos pedem discrição: sem buzina no recuo, espera onde a portaria indicar, não onde o GPS sugere uma rotatória da Av. NS.',
        ],
        [
            'h2' => 'Brigadeiro Lysias Rodrigues — PMW',
            'texto' => 'O aeroporto fica no recorte da cidade, com acesso que muda no pico da Av. Teotônio Segurado. Combinamos o voo. A espera no desembarque integra o trecho PMW. Do terminal à quadra do hotel, a margem sai do embarque, não do saguão.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em Palmas',
        'itens' => [
            ['h3' => 'Quadra e hotel no Plano Diretor', 'texto' => 'Informe ARSE ou ALNO, o número da quadra e a entrada. Os eixos não compartilham o mesmo recuo.'],
            ['h3' => 'Palácio Araguaia e a Praça dos Girassóis', 'texto' => 'Pauta institucional. Acesso e ponto de espera; o carro não improvisa na via de cerimonial.'],
            ['h3' => 'Praia da Graciosa e o lago', 'texto' => 'Visita ou jantar. Combinamos o horário de pico na orla.'],
            ['h3' => 'Taquaralto e o sul', 'texto' => 'Quando a reunião desce para Taquaralto, o trecho entra como rota própria, sob consulta.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pousa no Lysias Rodrigues',
    'faq' => [
        ['pergunta' => 'O aeroporto de Palmas fica longe do Plano Diretor?', 'resposta' => 'É trecho urbano. Marcamos margem: a Teotônio Segurado e o horário de pico alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no PMW se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no roteiro e a espera no saguão faz parte do trecho.'],
        ['pergunta' => 'Dá para ir à Praia da Graciosa e ao Palácio no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. São recortes diferentes da cidade planejada; um motorista articula os dois.'],
        ['pergunta' => 'Vocês fazem o trecho até Taquaralto ou ao Jalapão?', 'resposta' => 'Taquaralto entra no recorte da capital. O Jalapão é viagem: horário e valor saem sob consulta, não como corrida urbana.'],
    ],
    'cta' => [
        'titulo' => 'Envie a quadra junto com o horário do PMW',
        'texto' => 'O orçamento de Palmas sai sob consulta. Plano Diretor, Graciosa e terminal no mesmo recado.',
        'botao' => 'Solicitar carro em Palmas',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'tocantins', 'ancora' => 'Araguaína, Gurupi e o recorte tocantinense'],
        ['tipo' => 'cidade', 'estado' => 'goias', 'cidade' => 'goiania', 'ancora' => 'Bueno, Marista e o Santa Genoveva'],
        ['tipo' => 'cidade', 'estado' => 'distrito-federal', 'cidade' => 'brasilia', 'ancora' => 'Eixo Monumental, Lago e o BSB'],
    ],
];
