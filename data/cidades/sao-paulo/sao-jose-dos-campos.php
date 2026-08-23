<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'São José dos Campos',
    'geo' => ['lat' => -23.1896, 'lng' => -45.8841],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em São José dos Campos',
    'seo' => [
        'title' => 'Motorista em São José dos Campos: Aquarius, Centro e SJK',
        'description' => 'Carro com motorista em São José dos Campos para o Centro, Jardim Aquarius, Vista Verde e o aeroporto. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Aquarius, no Centro e no aeroporto SJK',
        'og_description' => 'Motorista no Vale do Paraíba: hotel, pauta aeroespacial e o terminal SJK.',
        'og_image_alt' => 'Sedan executivo em avenida de São José dos Campos',
    ],
    'kicker' => 'Vale do Paraíba · SP',
    'h1' => 'Do SJK ao Aquarius sem perder a janela da planta',
    'lead' => 'São José dos Campos concentra CTA, Embraer e o aeroporto Professor Urbano Ernesto Stumpf (SJK). O motorista segura a Dutra e a Presidente Vargas; o passageiro segura a pauta — não a vaga na porta do hotel.',
    'contexto' => [
        'h2' => 'A cidade aeroespacial cobra endereço de jardim, não “no centro”',
        'texto' => [
            'Centro, Jardim Aquarius, Vista Verde e o Parque Tecnológico não compartilham o mesmo recuo. Hotel (Nacional Inn, similar), reunião no Aquarius e voo no SJK cabem no mesmo expediente se a ordem da Dutra já estiver no roteiro.',
            'O recorte é a rotina do Vale: embarque na portaria, espera discreta e chegada no terminal certo. Quando a pauta aponta para Taubaté, Jacareí ou à capital, o trecho deixa de ser só urbano.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos da cidade onde o embarque mais se concentra',
        'itens' => [
            ['h3' => 'Centro e a Nelson D\'Ávila', 'texto' => 'Sede e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde.'],
            ['h3' => 'Jardim Aquarius e o shopping', 'texto' => 'Hotéis, torres e clínicas. Deslocamentos curtos que esticam no semáforo da Dutra urbana.'],
            ['h3' => 'Vista Verde e o Parque Tecnológico', 'texto' => 'Planta e campus. Protocolo de portaria entra no roteiro junto com o horário da reunião.'],
            ['h3' => 'Urbanova e o sul', 'texto' => 'Pauta residencial e jantar. O recuo pede rua e número; “no Urbanova” não basta.'],
        ],
    ],
    'aeroportos' => [
        'h2' => 'Professor Urbano Ernesto Stumpf — SJK',
        'itens' => [
            ['h3' => 'São José dos Campos — SJK', 'texto' => 'Terminal da cidade. Combinamos o voo. A espera no desembarque integra o trecho SJK.'],
            ['h3' => 'Quando a pauta aponta para GRU ou a capital', 'texto' => 'O trecho Vale–capital não é o mesmo pedido urbano. Se a reunião vaza pela Dutra, o orçamento sai à parte.'],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que a agenda joseense mais pede',
        'itens' => [
            ['titulo' => 'SJK → hotel no Aquarius', 'texto' => 'Pouso e pernoite. Informe o nome do hotel e se há vaga de visitante.'],
            ['titulo' => 'Aquarius → planta → Centro', 'texto' => 'Reunião, portaria e sede. Um motorista cobre os três se a ordem já estiver no roteiro.'],
            ['titulo' => 'Hotel → Taubaté ou à capital', 'texto' => 'Quando a pauta sai pela Dutra, o trecho deixa de ser só urbano. Horário sob consulta.'],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na grade em São José',
        'passos' => [
            ['titulo' => 'Jardim e número', 'texto' => 'Aquarius, Centro ou Vista Verde. Autocomplete não resolve condomínio com dois acessos.'],
            ['titulo' => 'Hotel ou SJK', 'texto' => 'Diga se o embarque é o aeroporto ou a portaria do hotel.'],
            ['titulo' => 'Confirmação', 'texto' => 'Nome e DDD no WhatsApp. Devolvemos o horário de apresentação.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no SJK',
    'faq' => [
        ['pergunta' => 'O aeroporto de São José fica longe do Aquarius?', 'resposta' => 'É trecho urbano. Marcamos margem: a Dutra urbana e o horário de pico alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no SJK se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês entram na planta com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, o recuo da planta não libera.'],
        ['pergunta' => 'Dá para seguir a São Paulo depois da reunião?', 'resposta' => 'Sim, como viagem pela Dutra. Não é o mesmo recorte do Aquarius; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Aquarius ao horário do SJK',
        'texto' => 'O orçamento de São José dos Campos sai sob consulta. Hotel, planta e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em São José dos Campos',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'campinas', 'ancora' => 'Cambuí, Unicamp e o Viracopos'],
    ],
];
