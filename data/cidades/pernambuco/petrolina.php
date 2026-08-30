<?php

declare(strict_types=1);

return [
    'layout' => 'rio',
    'cidade_nome' => 'Petrolina',
    'geo' => ['lat' => -9.38866, 'lng' => -40.5027],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Petrolina',
    'seo' => [
        'title' => 'Motorista executivo em Petrolina: Centro, orla e PNZ',
        'description' => 'Carro com motorista em Petrolina para o Centro, orla do São Francisco, Cohab e o aeroporto Senador Nilo Coelho. Vale, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Centro de Petrolina, na orla e no PNZ',
        'og_description' => 'Motorista no Vale do São Francisco: hotel, pauta no Centro e o terminal PNZ.',
        'og_image_alt' => 'Sedan executivo em avenida de Petrolina próxima ao rio',
    ],
    'kicker' => 'Vale do São Francisco · PE',
    'h1' => 'Do PNZ à orla sem perder a pauta no Centro nem a ponte',
    'corrente' => [
        [
            'h2' => 'Petrolina se organiza pelo rio e pela ponte — o relógio é o do voo e o de Juazeiro',
            'texto' => 'Quem chega pousa no Senador Nilo Coelho (PNZ). Hotel no Centro ou na orla, reunião na Cohab e o trecho até Juazeiro da Bahia cabem no mesmo expediente se o motorista já saiu com a ordem da Cardoso de Sá e da ponte, não com o aceite do minuto.',
        ],
        [
            'h2' => 'Pontos da cidade que a agenda petrolinense mais cita',
            'itens' => [
                ['h3' => 'Centro e a Cardoso de Sá', 'texto' => 'Sede, hotel (Ibis, Hotel do Lago, similares) e o calçadão. Informe o prédio; o Centro mistura comércio e pernoite.'],
                ['h3' => 'Orla do São Francisco e o calçadão', 'texto' => 'Pernoite e jantar. Combinamos o ponto de espera; o calçamento não admite recuo improvisado.'],
                ['h3' => 'Cohab, Areia Branca e o polo irrigado', 'texto' => 'Clínicas, packing house e a BR-407. Protocolo de portaria entra no roteiro junto com o turno da fruta.'],
                ['h3' => 'Univasf e o campus', 'texto' => 'Em Petrolina, pauta acadêmica. O recuo pede bloco e portaria, não “na universidade”.'],
            ],
        ],
        [
            'h2' => 'Rotas de vale, ponte e porta do sertão',
            'itens' => [
                ['h3' => 'PNZ → hotel na orla → Centro', 'texto' => 'Pouso, pernoite e sede. A margem sai do terminal, não da fila do táxi.'],
                ['h3' => 'Petrolina → Juazeiro pela ponte', 'texto' => 'Dois estados no mesmo recado. Informe o endereço em Juazeiro; o recuo muda no outro lado do rio.'],
                ['h3' => 'Hotel → packing house ou Casa Nova', 'texto' => 'Quando a pauta sai pela BR-407, o trecho entra como viagem. Orçamento à parte.'],
            ],
        ],
        [
            'h2' => 'Senador Nilo Coelho — PNZ',
            'texto' => 'O aeroporto internacional fica no recorte da cidade. Combinamos o voo. A espera no desembarque integra o trecho PNZ; o passageiro não cruza o saguão atrás de uma placa genérica.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Nilo Coelho',
    'faq' => [
        ['pergunta' => 'O aeroporto de Petrolina fica longe da orla?', 'resposta' => 'É trecho urbano. Marcamos margem: a Cardoso de Sá e o horário de pico alteram o intervalo.'],
        ['pergunta' => 'Em Petrolina, o motorista espera no PNZ se o voo atrasar?', 'resposta' => 'Sim. Em Petrolina, o número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês cruzam a ponte rumo a Juazeiro?', 'resposta' => 'Sim. Informe o endereço na Bahia. São dois municípios; o recuo muda no outro lado do São Francisco.'],
        ['pergunta' => 'Dá para ir ao packing house depois do hotel?', 'resposta' => 'Sim, quando a planta entra no roteiro. Envie o nome na portaria; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o PNZ ao hotel da orla',
        'texto' => 'O orçamento de Petrolina sai sob consulta. Rio, ponte e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir carro em Petrolina',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'pernambuco', 'ancora' => 'Caruaru, Petrolina e o recorte pernambucano'],
        ['tipo' => 'cidade', 'estado' => 'pernambuco', 'cidade' => 'recife', 'ancora' => 'Boa Viagem, pontes e o Guararapes'],
        ['tipo' => 'cidade', 'estado' => 'bahia', 'cidade' => 'feira-de-santana', 'ancora' => 'Centro, Kalilândia e o João Durval'],
    ],
];
