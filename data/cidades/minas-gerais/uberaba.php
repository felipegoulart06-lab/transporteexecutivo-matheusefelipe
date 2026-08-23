<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Uberaba',
    'geo' => ['lat' => -19.7472, 'lng' => -47.9381],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Uberaba',
    'seo' => [
        'title' => 'Traslado executivo em Uberaba: Centro, Estados Unidos e UBA',
        'description' => 'Motorista executivo em Uberaba para o Centro, Estados Unidos, Santa Maria e o aeroporto Mário de Almeida Franco. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro de Uberaba, no Estados Unidos e no UBA',
        'og_description' => 'Traslado no Triângulo Mineiro: hotel, pauta pecuária e o terminal UBA.',
        'og_image_alt' => 'Sedan executivo em avenida de Uberaba',
    ],
    'kicker' => 'Triângulo Mineiro · MG',
    'h1' => 'Do UBA ao Estados Unidos sem perder a pauta no Centro',
    'lead' => 'Uberaba é o nó da pecuária e da Expozebu. O motorista segura a Getúlio Vargas e a Santos Dumont; o passageiro segura a reunião — não a vaga na porta do hotel.',
    'contexto' => [
        'h2' => 'A cidade do zebu cobra recinto e bairro, não “no centro”',
        'texto' => [
            'Centro, Estados Unidos, Santa Maria e o Parque Fernando Costa não compartilham o mesmo recuo. Hotel (Ibis, Grand Uberaba, similares), clínica no Estados Unidos e voo no Mário de Almeida Franco (UBA) cabem no mesmo expediente se a ordem das avenidas já estiver no roteiro.',
            'Na semana da Expozebu o intervalo muda. Combinamos o portão do parque; “na exposição” não define o recuo. Quando a pauta aponta para Uberlândia ou à BR-050, o trecho deixa de ser só urbano.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos da cidade onde o embarque mais se concentra',
        'itens' => [
            ['h3' => 'Centro e a Getúlio Vargas', 'texto' => 'Sede e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde.'],
            ['h3' => 'Estados Unidos e o shopping', 'texto' => 'Hotéis, torres e clínicas. Deslocamentos curtos que esticam no semáforo da Santos Dumont.'],
            ['h3' => 'Santa Maria, Olinda e o Uniube', 'texto' => 'Campus e pauta residencial. O recuo pede bloco e número; “no Uniube” não basta.'],
            ['h3' => 'Parque Fernando Costa — Expozebu', 'texto' => 'Evento e recinto. Portão e horário de operação entram no roteiro; o carro espera onde combinado.'],
        ],
    ],
    'aeroportos' => [
        'h2' => 'Mário de Almeida Franco — UBA no meio da pauta',
        'itens' => [
            ['h3' => 'Uberaba — UBA', 'texto' => 'Terminal da cidade, no recorte urbano. Combinamos o voo. A espera no desembarque integra o trecho UBA.'],
            ['h3' => 'Quando a pauta aponta para Uberlândia', 'texto' => 'O trecho Uberaba–UDI não é o mesmo pedido do Centro. Se a reunião vaza pela BR-050, o orçamento sai à parte.'],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que a agenda uberabense mais pede',
        'itens' => [
            ['titulo' => 'UBA → hotel no Estados Unidos', 'texto' => 'Pouso e pernoite. Informe o nome do hotel e se há vaga de visitante.'],
            ['titulo' => 'Hotel → Centro → Parque Fernando Costa', 'texto' => 'Sede e recinto só se o evento estiver no roteiro. Um motorista cobre os três.'],
            ['titulo' => 'Uberaba → Uberlândia no mesmo dia', 'texto' => 'Quando a pauta cruza o Triângulo, o trecho deixa de ser urbano. Horário sob consulta.'],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na grade em Uberaba',
        'passos' => [
            ['titulo' => 'Bairro e número', 'texto' => 'Estados Unidos, Centro ou Santa Maria. Autocomplete não resolve o portão do parque.'],
            ['titulo' => 'Hotel ou UBA', 'texto' => 'Diga se o embarque é o aeroporto ou a portaria do hotel.'],
            ['titulo' => 'Confirmação', 'texto' => 'Nome e DDD no WhatsApp. Devolvemos o horário de apresentação.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no UBA',
    'faq' => [
        ['pergunta' => 'O aeroporto de Uberaba fica longe do Estados Unidos?', 'resposta' => 'É trecho urbano. Marcamos margem: a avenida e o horário de pico — e o da Expozebu — alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no UBA se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês entram no Parque Fernando Costa na Expozebu?', 'resposta' => 'Levamos até o portão combinado. Credencial do recinto é do passageiro; o carro espera onde combinado.'],
        ['pergunta' => 'Dá para seguir a Uberlândia depois do hotel?', 'resposta' => 'Sim, como viagem. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Estados Unidos ao horário do UBA',
        'texto' => 'O orçamento de Uberaba sai sob consulta. Centro, recinto e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Uberaba',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'minas-gerais', 'ancora' => 'Confins, Vale do Aço e a agenda mineira'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'uberlandia', 'ancora' => 'Umuarama, Centro e o aeroporto UDI'],
        ['tipo' => 'cidade', 'estado' => 'goias', 'cidade' => 'goiania', 'ancora' => 'Bueno, Marista e o Santa Genoveva'],
    ],
];
