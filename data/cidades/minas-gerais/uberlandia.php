<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Uberlândia',
    'geo' => ['lat' => -18.9141, 'lng' => -48.2749],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Uberlândia',
    'seo' => [
        'title' => 'Traslado executivo em Uberlândia: Centro, Umuarama e UDI',
        'description' => 'Motorista executivo em Uberlândia para o Centro, Umuarama, Tibery, Parque do Sabiá e o aeroporto UDI. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro de Uberlândia, no Umuarama e no UDI',
        'og_description' => 'Traslado no Triângulo Mineiro: hotel, pauta no Centro e o terminal UDI.',
        'og_image_alt' => 'Sedan executivo em avenida larga de Uberlândia',
    ],
    'kicker' => 'Triângulo Mineiro · MG',
    'h1' => 'Do UDI ao Centro sem perder a reunião no Umuarama',
    'lead' => 'Uberlândia é o nó rodoviário do Triângulo. O motorista segura a João Naves, a Rondon Pacheco e o recuo do aeroporto; o passageiro segura a pauta — não a vaga na porta do hotel.',
    'contexto' => [
        'h2' => 'A cidade do agronegócio cobra endereço de bairro, não “no centro”',
        'texto' => [
            'Centro, Umuarama, Tibery, Martins e o Shopping Park não compartilham o mesmo recuo. Hotel (Gran Odara, similar), clínica no Umuarama e voo no Tenente Coronel Aviador César Bombonato (UDI) cabem no mesmo expediente se a ordem das avenidas já estiver no roteiro.',
            'O recorte é a rotina do interior que se comporta como capital: embarque na portaria, espera discreta e chegada no terminal certo. Quando a pauta aponta para Uberaba ou à BR-050 rumo a Brasília, o trecho deixa de ser só urbano.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos da cidade onde o embarque mais se concentra',
        'itens' => [
            ['h3' => 'Centro e a Afonso Pena', 'texto' => 'Sede e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde.'],
            ['h3' => 'Umuarama e o shopping', 'texto' => 'Hotéis, torres e clínicas. Deslocamentos curtos que esticam no semáforo da João Naves.'],
            ['h3' => 'Tibery, Martins e o Custódio Pereira', 'texto' => 'Pauta residencial e jantar. O recuo pede rua e número; “no Tibery” não basta.'],
            ['h3' => 'Distrito industrial e a BR-050', 'texto' => 'Planta e logística. Protocolo de portaria entra no roteiro junto com o voo de volta.'],
        ],
    ],
    'aeroportos' => [
        'h2' => 'Tenente César Bombonato — UDI no meio da pauta',
        'itens' => [
            ['h3' => 'Uberlândia — UDI', 'texto' => 'Terminal da cidade, no recorte urbano. Combinamos o voo. A espera no desembarque integra o trecho UDI.'],
            ['h3' => 'Quando a pauta aponta para Uberaba ou Brasília', 'texto' => 'O trecho não é o mesmo pedido do Centro. Se a reunião vaza pela BR-050, o orçamento sai à parte.'],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que a agenda uberlandense mais pede',
        'itens' => [
            ['titulo' => 'UDI → hotel no Umuarama', 'texto' => 'Pouso e pernoite. Informe o nome do hotel e se há vaga de visitante.'],
            ['titulo' => 'Umuarama → Centro → UFU', 'texto' => 'Reunião, sede e campus. Um motorista cobre os três se a ordem já estiver no roteiro.'],
            ['titulo' => 'Hotel → Uberaba no mesmo dia', 'texto' => 'Quando a pauta cruza o Triângulo, o trecho deixa de ser urbano. Horário sob consulta.'],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na grade em Uberlândia',
        'passos' => [
            ['titulo' => 'Bairro e número', 'texto' => 'Umuarama, Centro ou Tibery. Autocomplete não resolve avenida com dois acessos.'],
            ['titulo' => 'Hotel ou UDI', 'texto' => 'Diga se o embarque é o aeroporto ou a portaria do hotel.'],
            ['titulo' => 'Confirmação', 'texto' => 'Nome e DDD no WhatsApp. Devolvemos o horário de apresentação.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no UDI',
    'faq' => [
        ['pergunta' => 'O aeroporto de Uberlândia fica longe do Centro?', 'resposta' => 'É trecho urbano. Marcamos margem: a João Naves e o horário de pico alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no UDI se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem Umuarama, Centro e a UFU no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. Um carro à disposição evita três aceites entre as avenidas.'],
        ['pergunta' => 'Dá para seguir a Uberaba depois do hotel?', 'resposta' => 'Sim, como viagem. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Umuarama ao horário do UDI',
        'texto' => 'O orçamento de Uberlândia sai sob consulta. Centro, hotel e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Uberlândia',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'minas-gerais', 'ancora' => 'Confins, Vale do Aço e a agenda mineira'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'belo-horizonte', 'ancora' => 'Savassi, Lourdes e o trecho até Confins'],
        ['tipo' => 'cidade', 'estado' => 'goias', 'cidade' => 'goiania', 'ancora' => 'Bueno, Marista e o Santa Genoveva'],
    ],
];
