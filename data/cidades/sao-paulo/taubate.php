<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Taubaté',
    'geo' => ['lat' => -23.0264, 'lng' => -45.5553],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Taubaté',
    'seo' => [
        'title' => 'Motorista em Taubaté: UNITAU, Centro e Dutra–SJK',
        'description' => 'Motorista em Taubaté para o Centro, a UNITAU e a planta em Piracangagua. O voo comercial vaza para o SJK, em São José dos Campos, pela Dutra. Orçamento sob consulta.',
        'og_title' => 'UNITAU, Piracangagua e o recuo da Dutra até o SJK',
        'og_description' => 'Traslado em Taubaté: campus no Centro, portaria da Volkswagen e o saguão em São José dos Campos.',
        'og_image_alt' => 'Sedan executivo em avenida do Centro de Taubaté',
    ],
    'kicker' => 'Vale do Paraíba · SP',
    'h1' => 'Da UNITAU à Dutra sem inventar saguão em Taubaté',
    'intro' => 'Taubaté articula o Centro, os campi da UNITAU e a planta da Volkswagen em Piracangagua no eixo da Rodovia Presidente Dutra (BR-116). O voo comercial de passageiros não sai daqui: o saguão prático é o Professor Urbano Ernesto Stumpf (SJK), em São José dos Campos. Hotel no Centro entra só como embarque; a portaria da montadora pede lista e documento.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Taubaté não é “pegar um carro no Centro”',
            'texto' => 'Centro, Independência e Piracangagua não compartilham o mesmo recuo. A UNITAU se espalha: Praça Félix Guisard e Barbosa de Oliveira no Centro, Bom Conselho na Avenida Tiradentes. A Volkswagen fica na Avenida Carlos Pedroso da Silveira, em Piracangagua — a Dutra urbana não abre a cancela. A Base de Aviação de Taubaté (SBTA) é militar; não substitui o terminal comercial de São José.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque taubateano mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Avenida 9 de Julho', 'texto' => 'Sede, Paço e o calçadão. Informe o prédio; o recuo do Centro não é o da Independência nem o da planta.'],
                ['h3' => 'UNITAU no Centro e no Bom Conselho', 'texto' => 'Bloco e portaria. Praça Félix Guisard não é a Avenida Tiradentes; o campus entra no roteiro com o endereço da unidade.'],
                ['h3' => 'Independência e o Jardim das Nações', 'texto' => 'Hotéis, clínicas e o recorte residencial junto à Dutra urbana. Rua e número evitam a volta no quarteirão.'],
                ['h3' => 'Piracangagua e a planta da Volkswagen', 'texto' => 'Cancela na Carlos Pedroso da Silveira. Sem nome na lista e documento, o recuo da montadora não libera. O trecho até o SJK pela Dutra é outro recorte.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta taubateana mais pede',
        'itens' => [
            ['titulo' => 'Hotel no Centro → UNITAU', 'texto' => 'Pernoite só como embarque. Informe o nome do hotel, a unidade do campus e se o carro espera enquanto a aula ou a reunião corre.'],
            ['titulo' => 'Centro → planta da Volkswagen', 'texto' => 'Portaria e turno em Piracangagua. Envie o nome na lista e o documento pedido; o GPS na Dutra não resolve a cancela.'],
            ['titulo' => 'Taubaté → São José dos Campos (SJK)', 'texto' => 'O aeroporto comercial fica em São José. Combinamos o voo e a margem da Dutra; a espera no terminal integra o trecho quando o pouso está no roteiro.'],
        ],
    ],
    'faq_h2' => 'UNITAU, planta e o Vale — o que costuma faltar',
    'faq' => [
        ['pergunta' => 'Taubaté tem aeroporto comercial de passageiros?', 'resposta' => 'Não. A Base de Aviação é militar e não opera malha regular de passageiros. O saguão prático é o SJK, em São José dos Campos, pela Dutra.'],
        ['pergunta' => 'O motorista espera no SJK se o voo atrasar?', 'resposta' => 'Sim, quando o voo está no roteiro. O número do voo entra no pedido e a espera no terminal faz parte do trecho São José, não do intervalo da 9 de Julho.'],
        ['pergunta' => 'A UNITAU aceita o recuo sem o bloco na lista?', 'resposta' => 'Quase nunca. Informe a unidade — Centro ou Bom Conselho — e o documento da portaria. Sem isso, o campus não libera o sedan.'],
        ['pergunta' => 'Vocês entram na Volkswagen em Piracangagua?', 'resposta' => 'Sim, com nome na lista e o documento pedido. A planta fica na Carlos Pedroso da Silveira; o pin “Taubaté” ou “Dutra” não abre a cancela.'],
    ],
    'cta' => [
        'titulo' => 'Junte a UNITAU ao horário da Dutra rumo ao SJK',
        'texto' => 'Diga se o embarque é o Centro, o campus ou a planta em Piracangagua, e se o voo é no SJK. Horário sob consulta.',
        'botao' => 'Pedir motorista em Taubaté',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-jose-dos-campos', 'ancora' => 'Aquarius, Centro e o aeroporto SJK'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
    ],
];
