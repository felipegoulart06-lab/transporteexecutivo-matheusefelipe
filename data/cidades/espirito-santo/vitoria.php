<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Vitória',
    'geo' => ['lat' => -20.3155, 'lng' => -40.3128],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Vitória',
    'seo' => [
        'title' => 'Motorista executivo em Vitória: Praia do Canto, Centro e VIX',
        'description' => 'Carro com motorista em Vitória para Praia do Canto, Jardim da Penha, Centro, Enseada do Suá e o aeroporto Eurico Salles. Circuito da Grande Vitória sob consulta.',
        'og_title' => 'Traslado executivo na ilha de Vitória e no aeroporto VIX',
        'og_description' => 'Motorista para o circuito capixaba: hotel na Praia do Canto, pauta no Suá e o terminal Eurico de Aguiar Salles.',
        'og_image_alt' => 'Carro executivo em avenida da Praia do Canto em Vitória',
    ],
    'kicker' => 'Capital capixaba · ES',
    'h1' => 'A ilha, o porto e o VIX no mesmo circuito — sem trocar de carro',
    'intro' => 'Vitória é ilha ligada a Vila Velha, Serra e Cariacica por pontes e pela Terceira Ponte. Hotel na Praia do Canto, reunião na Enseada do Suá e voo no Eurico de Aguiar Salles (VIX), em Goiabeiras, cabem no mesmo turno se a ordem das pontes já estiver no roteiro.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento na capital não é “pegar um carro na orla”',
            'texto' => 'A cidade mistura porto, governo e hotel de passagem. O recuo na Praia do Canto não é o da Cidade Alta. Quem tem pauta no Palácio Anchieta e check-out no Sheraton ou no Senac precisa de um motorista que já conhece o sentido da Dante Michelini, não o atalho do momento.',
        ],
        [
            'h2' => 'Quadrantes da ilha que mais geram embarque',
            'itens' => [
                ['h3' => 'Praia do Canto e Jardim da Penha', 'texto' => 'Hotéis e clínicas. Informe o nome do prédio; a orla e a interna não compartilham o mesmo recuo.'],
                ['h3' => 'Enseada do Suá e o shopping', 'texto' => 'Torres e centro de convenções. O acesso muda com o horário do porto e da Terceira Ponte.'],
                ['h3' => 'Centro e a Cidade Alta', 'texto' => 'Palácio, catedral e o desnível. O calçamento pede ponto de espera, não “na Escadaria”.'],
                ['h3' => 'Goiabeiras — VIX', 'texto' => 'O Eurico de Aguiar Salles fica no norte da ilha. O trecho até a Praia do Canto entra com margem para a Dante Michelini.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que o circuito da Grande Vitória mais pede',
        'itens' => [
            ['titulo' => 'Hotel na Praia do Canto → Palácio Anchieta', 'texto' => 'Orla e Centro no mesmo turno. Informe se o carro espera na Cidade Alta.'],
            ['titulo' => 'VIX → Enseada do Suá → Vila Velha', 'texto' => 'Pouso, reunião e a Terceira Ponte. A ordem muda o tempo mais que o quilômetro.'],
            ['titulo' => 'Praia do Canto → Camburi → aeroporto', 'texto' => 'Hotel, intervalo na orla de Camburi só se estiver no roteiro, e o terminal no fim da tarde.'],
            ['titulo' => 'Vitória → Guarapari ou à Serra', 'texto' => 'Quando a pauta sai da ilha, o trecho entra como viagem. Orçamento à parte.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Eurico Salles',
    'faq' => [
        ['pergunta' => 'O aeroporto de Vitória fica longe da Praia do Canto?', 'resposta' => 'Fica em Goiabeiras, na própria ilha. Ainda assim marcamos margem: a Dante Michelini muda o relógio no pico.'],
        ['pergunta' => 'Em Vitória, o motorista espera no VIX se o voo atrasar?', 'resposta' => 'Sim. Em Vitória, o número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês cruzam a Terceira Ponte rumo a Vila Velha?', 'resposta' => 'Sim. Informe o endereço em Vila Velha. A ponte pesa mais que a distância no mapa.'],
        ['pergunta' => 'Dá para incluir o Convento da Penha no mesmo dia?', 'resposta' => 'Sim, quando a visita entra no roteiro. O acesso em Vila Velha pede ponto de espera combinado.'],
    ],
    'cta' => [
        'titulo' => 'Coloque o VIX e a Praia do Canto no mesmo recado',
        'texto' => 'O orçamento de Vitória sai sob consulta. Ilha, ponte e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Vitória',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'espirito-santo', 'ancora' => 'O circuito das quatro cidades capixabas'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Santos Dumont, Galeão e a Zona Sul'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'belo-horizonte', 'ancora' => 'Savassi e o trecho até Confins'],
    ],
];
