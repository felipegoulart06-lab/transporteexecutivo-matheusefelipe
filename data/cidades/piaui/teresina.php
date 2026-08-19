<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Teresina',
    'geo' => ['lat' => -5.08921, 'lng' => -42.8016],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Teresina',
    'seo' => [
        'title' => 'Traslado executivo em Teresina: Centro, Jóquei e THE',
        'description' => 'Motorista executivo em Teresina para o Centro, Jóquei, Fátima, Ilhotas e o aeroporto Senador Petrônio Portella. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro de Teresina, no Jóquei e no THE',
        'og_description' => 'Traslado na capital piauiense: hotel no Jóquei, pauta no Centro e o terminal THE.',
        'og_image_alt' => 'Sedan executivo em avenida arborizada de Teresina',
    ],
    'kicker' => 'Capital piauiense · PI',
    'h1' => 'Do Petrônio Portella ao Jóquei sem perder a pauta no Centro',
    'lead' => 'Teresina é quente no asfalto e longa nas avenidas paralelas ao Parnaíba. O motorista segura a Frei Serafim e a Homero Castelo Branco; o passageiro segura a reunião — não a vaga na porta do hotel.',
    'contexto' => [
        'h2' => 'A capital do meio-norte cobra endereço de bairro, não “no centro”',
        'texto' => [
            'Centro, Jóquei, Fátima, Ilhotas e o Noivos não compartilham o mesmo recuo. Hotel (River Park, similar), clínica no Jóquei e voo no Senador Petrônio Portella (THE) cabem no mesmo expediente se a ordem das avenidas já estiver no roteiro.',
            'O recorte é a rotina da capital: embarque na portaria, espera discreta e chegada no terminal certo. Quando a pauta cruza a ponte rumo a Timon, no Maranhão, o trecho deixa de ser só teresinense e sai com margem própria.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos da capital onde o embarque mais se concentra',
        'itens' => [
            ['h3' => 'Centro e a Frei Serafim', 'texto' => 'Sede, palácio e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde.'],
            ['h3' => 'Jóquei e o shopping', 'texto' => 'Hotéis, torres e clínicas. Deslocamentos curtos que esticam no semáforo da Homero Castelo Branco.'],
            ['h3' => 'Fátima, Ilhotas e o Noivos', 'texto' => 'Pauta residencial e jantar. O recuo pede rua e número; “no Fátima” não basta.'],
            ['h3' => 'Zona Leste e a ponte para Timon', 'texto' => 'Quando a reunião cruza o Parnaíba, o município muda. Informe o lado do rio antes do embarque.'],
        ],
    ],
    'aeroportos' => [
        'h2' => 'Petrônio Portella — THE no meio da pauta',
        'itens' => [
            ['h3' => 'Senador Petrônio Portella — THE', 'texto' => 'Terminal da capital, no recorte urbano. Combinamos o voo. A espera no desembarque integra o trecho THE.'],
            ['h3' => 'Quando a pauta aponta para o litoral', 'texto' => 'Parnaíba ou o Delta não são o mesmo pedido do Centro. Se a visita vaza para o litoral piauiense, o orçamento sai à parte.'],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que a agenda teresinense mais pede',
        'itens' => [
            ['titulo' => 'THE → hotel no Jóquei', 'texto' => 'Pouso e pernoite. Informe o nome do hotel e se há vaga de visitante.'],
            ['titulo' => 'Jóquei → Centro → Parque da Cidadania', 'texto' => 'Reunião, palácio e um intervalo só se estiver no roteiro. Um motorista cobre os três.'],
            ['titulo' => 'Hotel → Timon ou Parnaíba no mesmo dia', 'texto' => 'Ponte ou litoral. Não é o recorte urbano do Centro; o horário sai sob consulta.'],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na grade em Teresina',
        'passos' => [
            ['titulo' => 'Bairro e número', 'texto' => 'Jóquei, Centro ou Fátima. Autocomplete não resolve avenida com dois acessos.'],
            ['titulo' => 'Hotel ou THE', 'texto' => 'Diga se o embarque é o Petrônio Portella ou a portaria do hotel.'],
            ['titulo' => 'Confirmação', 'texto' => 'Nome e DDD no WhatsApp. Devolvemos o horário de apresentação.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Petrônio Portella',
    'faq' => [
        ['pergunta' => 'O aeroporto de Teresina fica longe do Jóquei?', 'resposta' => 'É trecho urbano. Marcamos margem: a Frei Serafim e o horário de pico alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no THE se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês cruzam a ponte rumo a Timon?', 'resposta' => 'Sim. Informe o endereço em Timon. São dois municípios; o recuo muda no outro lado do Parnaíba.'],
        ['pergunta' => 'Dá para seguir a Parnaíba ou ao Delta depois do hotel?', 'resposta' => 'Sim, como viagem. Não é o mesmo recorte do Centro; o orçamento sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Jóquei ao horário do Petrônio Portella',
        'texto' => 'O orçamento de Teresina sai sob consulta. Centro, hotel e THE no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Teresina',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'piaui', 'ancora' => 'Parnaíba, Picos e o recorte piauiense'],
        ['tipo' => 'cidade', 'estado' => 'maranhao', 'cidade' => 'sao-luis', 'ancora' => 'Calhau, Centro Histórico e o SLZ'],
        ['tipo' => 'cidade', 'estado' => 'ceara', 'cidade' => 'fortaleza', 'ancora' => 'Meireles, Aldeota e o Pinto Martins'],
    ],
];
