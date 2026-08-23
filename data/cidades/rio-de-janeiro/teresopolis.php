<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Teresópolis',
    'geo' => ['lat' => -22.4165, 'lng' => -42.9752],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Teresópolis',
    'seo' => [
        'title' => 'Serra fluminense: motorista em Teresópolis e SDU',
        'description' => 'Motorista em Teresópolis para a Várzea, o Alto, Tijuca e Granja Comary. BR-116 até o Rio e o SDU, espera combinada e orçamento sob consulta.',
        'og_title' => 'Traslado na Várzea, no Alto e na descida ao SDU',
        'og_description' => 'Motorista na serra fluminense: hotel na Várzea, pauta no Alto e a BR-116 rumo ao Santos Dumont.',
        'og_image_alt' => 'Sedan executivo em via da Várzea, em Teresópolis',
    ],
    'kicker' => 'Serra fluminense · RJ',
    'h1' => 'Alto, Várzea e a BR-116 no relógio de quem desce ao SDU',
    'olho' => 'Teresópolis mede o dia pelo Alto e pela Várzea; a BR-116 até o Santos Dumont é a descida que o relógio da serra fluminense cobra, não o Waze da hora. O motorista segura a Oliveira Botelho e o recuo da Granja Comary; o passageiro segura a reunião — não a vaga na porta do hotel.',
    'capitulos' => [
        [
            'h2' => 'A serra e o aeroporto que ficou no Rio',
            'texto' => 'Várzea, Alto, Tijuca e Granja Comary cabem em poucos quilômetros de altitude. O Santos Dumont não. Quem marca pauta no Alto e voo no mesmo dia precisa de um carro que já saiu da Várzea com a ordem da BR-116, não de um aceite no minuto da descida.',
        ],
        [
            'h2' => 'Onde o embarque teresopolitano mais se concentra',
            'itens' => [
                ['h3' => 'Várzea e o eixo comercial', 'texto' => 'Hotel, sede e o recuo da avenida. Informe o estabelecimento; “na Várzea” não define a entrada nem o sentido da via.'],
                ['h3' => 'Alto e a Tijuca', 'texto' => 'Pernoite de cota e o recorte residencial. O recuo pede rua; Alto e Tijuca não se trocam no mesmo cartaz.'],
                ['h3' => 'Granja Comary e o protocolo de acesso', 'texto' => 'Centro de treinamento e pauta institucional. Nome na lista e documento; o GPS na serra não resolve a cancela.'],
            ],
        ],
        [
            'h2' => 'Rotas de trabalho, Comary e o salto pela 116',
            'texto' => 'Hotel na Várzea → Alto → Granja Comary só se a ordem estiver no roteiro. Outro clássico: Teresópolis → SDU pela BR-116, como viagem de serra fluminense, não como corrida urbana. Petrópolis entra pela mesma lógica de cota e recuo estreito.',
        ],
        [
            'h2' => 'BR-116 — o relógio do SDU e do GIG',
            'texto' => 'Teresópolis não tem saguão próprio. Combinamos se o voo é Santos Dumont ou Galeão. A descida da 116 muda o intervalo mais que o mapa admite; a margem sai da Várzea, não do saguão. Nevoeiro e pico pesam na cota.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que evitam atraso na serra',
        'itens' => [
            ['num' => '01', 'titulo' => 'Bairro e cota', 'texto' => 'Várzea, Alto ou Tijuca. “Em Teresópolis” não define o recuo nem o desnível.'],
            ['num' => '02', 'titulo' => 'Granja Comary', 'texto' => 'Nome na lista e documento. O carro chega com o protocolo, não com o GPS da granja.'],
            ['num' => '03', 'titulo' => 'SDU, GIG ou cidade', 'texto' => 'O trecho até o Rio entra como viagem pela BR-116. O urbano da Várzea é outro orçamento.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem desce a serra rumo ao SDU',
    'faq' => [
        ['pergunta' => 'Teresópolis tem aeroporto comercial?', 'resposta' => 'O saguão prático da pauta é o Santos Dumont, pela BR-116. Combinamos a margem da descida; nevoeiro e pico alteram o intervalo mais que o mapa.'],
        ['pergunta' => 'Vocês entram na Granja Comary com protocolo?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, a cancela do centro de treinamento não libera.'],
        ['pergunta' => 'Alto, Várzea e a Tijuca cabem no mesmo dia?', 'resposta' => 'Sim. Informe a ordem e o ponto de espera. A cota muda o recuo; um motorista articula os três se o roteiro já tiver a margem.'],
        ['pergunta' => 'Dá para usar o Galeão em vez do Santos Dumont?', 'resposta' => 'Sim. Combinamos o terminal. O GIG pede outro recuo na chegada ao Rio; o horário sai sob consulta.'],
        ['pergunta' => 'Petrópolis entra depois da reunião no Alto?', 'resposta' => 'Sim, como viagem de serra. Não é o mesmo recorte da Várzea; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Anote o Alto junto com a descida ao SDU',
        'texto' => 'O orçamento de Teresópolis sai sob consulta. Várzea, Comary e BR-116 no mesmo recado.',
        'botao' => 'Pedir motorista em Teresópolis',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-de-janeiro', 'ancora' => 'O recorte fluminense além da capital'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'petropolis', 'ancora' => 'Centro Histórico, Quitandinha e a serra'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Santos Dumont, Galeão e a Zona Sul'],
    ],
];
