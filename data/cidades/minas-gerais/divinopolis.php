<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Divinópolis',
    'geo' => ['lat' => -20.1446, 'lng' => -44.8916],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Divinópolis',
    'seo' => [
        'title' => 'Centro-Oeste mineiro: carro em Divinópolis e CNF',
        'description' => 'Carro com motorista em Divinópolis para o Centro, Danilo Passos, Porto Velho e a UEMG. Aeroporto DIQ limitado; Confins prático e orçamento sob consulta.',
        'og_title' => 'Traslado no Centro, na UEMG e no recuo até Confins',
        'og_description' => 'Motorista no Centro-Oeste mineiro: hotel, campus e o trecho até o CNF.',
        'og_image_alt' => 'Sedan executivo em avenida do Centro de Divinópolis',
    ],
    'kicker' => 'Centro-Oeste mineiro · MG',
    'h1' => 'O Centro-Oeste mineiro articula planta, campus e o recuo até Confins',
    'intro' => 'No Centro-Oeste mineiro, planta, campus da UEMG e o recuo até Confins não cabem no mesmo aceite de Betim: Divinópolis tem grade própria entre o Centro, Danilo Passos e Porto Velho. O motorista segura a avenida e a MG-050; o passageiro segura a pauta — não o código DIQ no cartaz quando o voo prático já é o CNF.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Divinópolis não é “pegar um carro em BH”',
            'texto' => 'Centro, Danilo Passos, Porto Velho e o campus da UEMG não compartilham o mesmo recuo. O Aeroporto Brigadeiro Cabral (DIQ) existe e atende malha limitada; a conexão prática da pauta aérea é Confins (CNF). Quem tem reunião no campus e voo no mesmo dia precisa de um motorista que já saiu com a ordem da MG-050 e da BR-262, não com o atalho que o aplicativo chama de Grande BH.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque divinopolitano mais se concentra',
            'itens' => [
                ['h3' => 'Centro e o eixo comercial', 'texto' => 'Sede, hotel e o recuo da avenida. Informe o prédio; o Centro não é Danilo Passos nem o campus.'],
                ['h3' => 'Danilo Passos', 'texto' => 'Pernoite e o recorte residencial. “No Danilo” não define a porta; rua e número evitam a volta.'],
                ['h3' => 'Porto Velho — o bairro, não Rondônia', 'texto' => 'Pauta de distrito neste município. Informe o endereço; o nome se confunde e o recuo pede ponto próprio.'],
                ['h3' => 'UEMG e a planta no recorte', 'texto' => 'Campus, bloco e portaria. A pauta industrial entra com nome na lista; o trecho até Confins é outro recorte.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta divinopolitana mais pede',
        'itens' => [
            ['titulo' => 'Hotel no Centro → Danilo Passos ou Porto Velho', 'texto' => 'Pernoite e pauta. Informe o nome do hotel e se o carro espera no Centro enquanto a reunião corre.'],
            ['titulo' => 'Centro → campus da UEMG', 'texto' => 'Bloco e portaria. Envie o documento da lista; o GPS “Divinópolis” não coloca o carro no campus certo.'],
            ['titulo' => 'Hotel → planta no recorte', 'texto' => 'Cancela e turno. O protocolo entra no roteiro; não é o mesmo pedido do Centro.'],
            ['titulo' => 'Divinópolis → Confins (CNF)', 'texto' => 'O DIQ não substitui a conexão prática. Combinamos a MG-050 e a BR-262; o orçamento sai sob consulta.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta o campus e Confins',
    'faq' => [
        ['pergunta' => 'O aeroporto de Divinópolis substitui Confins?', 'resposta' => 'O DIQ tem malha limitada. O saguão prático da conexão é o CNF. Combinamos o recuo; não é corrida instantânea do Centro.'],
        ['pergunta' => 'Porto Velho é o município de Rondônia?', 'resposta' => 'Não. Neste recorte, Porto Velho é bairro de Divinópolis. Informe rua e número; o nome sozinho confunde o cartaz.'],
        ['pergunta' => 'Vocês fazem Centro, Danilo Passos e a UEMG no mesmo dia?', 'resposta' => 'Sim. Informe a ordem e o bloco do campus. Um motorista articula os três recuos se a margem estiver no roteiro.'],
        ['pergunta' => 'A planta entra com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, a cancela não libera.'],
        ['pergunta' => 'Dá para seguir a Betim ou a Savassi depois da reunião?', 'resposta' => 'Sim, como viagem. Não é o mesmo recorte do Centro-Oeste mineiro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Envie o campus com o recuo até Confins',
        'texto' => 'O orçamento de Divinópolis sai sob consulta. Centro, UEMG e CNF no mesmo WhatsApp.',
        'botao' => 'Solicitar traslado em Divinópolis',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'minas-gerais', 'ancora' => 'Confins, Vale do Aço e a agenda mineira'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'belo-horizonte', 'ancora' => 'Savassi, Lourdes e o trecho até Confins'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'betim', 'ancora' => 'Alterosas, Fiat e a BR-381'],
    ],
];
