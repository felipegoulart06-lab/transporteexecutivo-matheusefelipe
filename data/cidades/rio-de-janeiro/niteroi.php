<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Niterói',
    'geo' => ['lat' => -22.8832, 'lng' => -43.1034],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Niterói',
    'seo' => [
        'title' => 'Motorista executivo em Niterói: Icaraí, Centro e ponte',
        'description' => 'Carro com motorista em Niterói para Icaraí, São Francisco, Centro, Charitas e a Ponte Rio-Niterói. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo em Icaraí, no Centro e na Ponte Rio-Niterói',
        'og_description' => 'Motorista em Niterói: hotel em Icaraí, pauta no Centro e o recuo da baía.',
        'og_image_alt' => 'Sedan executivo em avenida de Icaraí com a baía ao fundo',
    ],
    'kicker' => 'Cidade da baía · RJ',
    'h1' => 'De Icaraí à ponte sem perder a pauta no Centro',
    'faixas' => [
        [
            'h2' => 'Niterói se mede em baía e em pedágio — o app não lê a ponte',
            'texto' => 'Hotel em Icaraí ou em São Francisco, reunião no Centro e o trecho até o Rio pela Ponte Presidente Costa e Silva cabem no mesmo dia se o motorista já saiu com a ordem da Quatorze e da ponte, não com o atalho da hora.',
        ],
        [
            'h2' => 'Três recortes, um relógio de baía',
            'itens' => [
                ['h3' => 'Icaraí, São Francisco e Charitas', 'texto' => 'Hotéis (Solar do Icaraí, similar) e a orla. Informe o nome; “na praia de Icaraí” não define o recuo da Sete de Setembro.'],
                ['h3' => 'Centro e o Ingá', 'texto' => 'Sede, CAM e o desnível. O calçamento pede ponto de espera, não GPS no MAC.'],
                ['h3' => 'Pendotiba, Região Oceânica e Itaipu', 'texto' => 'Quando a pauta vaza para a oceânica, o trecho deixa o Centro. Piratininga e Itaipu saem com margem de via, não como segunda corrida em Icaraí.'],
            ],
        ],
        [
            'h2' => 'Rotas de pauta, MAC e a travessia',
            'texto' => 'Hotel em Icaraí → Centro → MAC só se a visita estiver no roteiro. Outro clássico: Niterói → Santos Dumont ou Galeão, com a ponte no meio. Charitas e o catamarã entram quando o passageiro combina o modal; o carro articula o recuo, não substitui a barca no último minuto.',
        ],
        [
            'h2' => 'Ponte, SDU e o relógio do Rio',
            'texto' => 'A ponte muda o intervalo mais que o mapa admite. Combinamos se o destino é SDU, GIG ou a Zona Sul. A espera no desembarque, quando o voo está no roteiro, integra o trecho — do lado de Niterói ou do Rio.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem cruza a baía',
    'faq' => [
        ['pergunta' => 'O motorista atravessa a Ponte Rio-Niterói?', 'resposta' => 'Sim. Informe o destino no Rio. A ponte e o horário de pico pesam mais que a distância no mapa.'],
        ['pergunta' => 'Vocês buscam no Santos Dumont e levam a Icaraí?', 'resposta' => 'Sim, com o número do voo e a margem da ponte. A espera no SDU faz parte do trecho quando o voo está no roteiro.'],
        ['pergunta' => 'Dá para ir ao MAC e voltar ao hotel em Icaraí?', 'resposta' => 'Sim. Combinamos o ponto de espera no CAM. O calçamento não admite recuo improvisado.'],
        ['pergunta' => 'Vocês fazem a Região Oceânica no mesmo dia?', 'resposta' => 'Sim, quando Itaipu ou Piratininga entram no roteiro. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Diga se o embarque é Icaraí ou a ponte',
        'texto' => 'O orçamento de Niterói sai sob consulta. Orla, Centro e baía no mesmo recado.',
        'botao' => 'Pedir traslado em Niterói',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-de-janeiro', 'ancora' => 'O recorte fluminense além da capital'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Santos Dumont, Galeão e a Zona Sul'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'santos', 'ancora' => 'Gonzaga, porto e a orla santista'],
    ],
];
