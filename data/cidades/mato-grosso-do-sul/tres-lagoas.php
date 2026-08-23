<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Três Lagoas',
    'geo' => ['lat' => -20.7514, 'lng' => -51.6783],
    'imagem' => 'centro-oeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Três Lagoas',
    'seo' => [
        'title' => 'Traslado em Três Lagoas: Centro, Jupiá e o TJL',
        'description' => 'Carro com motorista em Três Lagoas para o Centro, Interlagos, Jupiá e o aeroporto Plínio Alarcom. Celulose, portaria e orçamento sob consulta.',
        'og_title' => 'Motorista no Centro, em Jupiá e no aeroporto TJL',
        'og_description' => 'Traslado no leste sul-mato-grossense: hotel no Centro, pauta na celulose e o terminal TJL.',
        'og_image_alt' => 'Sedan executivo em avenida de Três Lagoas próxima ao Paraná',
    ],
    'kicker' => 'Leste sul-mato-grossense · MS',
    'h1' => 'Do Jupiá ao Centro sem perder a janela da celulose',
    'intro' => 'Três Lagoas alinha o Centro, Interlagos e o recorte de Jupiá à beira do Paraná. Hotel, reunião na portaria da celulose e voo no Plínio Alarcom (TJL) cabem no mesmo expediente se o motorista já saiu com a ordem da BR-262 e da Castelo Branco, não com o aceite do minuto. Eldorado e Suzano entram no roteiro pelo nome na lista — não como vitrine de convênio.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Três Lagoas não é “pegar um carro no Centro”',
            'texto' => 'Centro, Interlagos, Jupiá e a portaria da celulose não compartilham o mesmo recuo. Quem tem pauta na planta e check-out no hotel precisa de um motorista que já conhece o protocolo da cancela e o acesso da hidrelétrica, não o atalho do app na beira das lagoas. O hotel é só o ponto de embarque. O orçamento sai sob consulta.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque trilagoense mais se concentra',
            'itens' => [
                [
                    'h3' => 'Centro e a Castelo Branco',
                    'texto' => 'Sede, hotel e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde e “no Centro” não define a porta.',
                ],
                [
                    'h3' => 'Interlagos e o Jardim Alvorada',
                    'texto' => 'Torres, clínicas e pauta residencial. O recuo de Interlagos não é o de Jupiá; rua e número evitam a volta no quarteirão errado.',
                ],
                [
                    'h3' => 'Jupiá e a beira do Paraná',
                    'texto' => 'Hidrelétrica, orla e o recorte oeste. Informe o ponto de espera; o acesso da usina pede autorização, não GPS no portão.',
                ],
                [
                    'h3' => 'Portaria da celulose',
                    'texto' => 'Eldorado, Suzano e similares entram pelo nome na lista e pelo documento pedido. Sem protocolo, a cancela não libera. Não há parceria de planta.',
                ],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta de Três Lagoas mais pede',
        'itens' => [
            [
                'titulo' => 'TJL → hotel no Centro',
                'texto' => 'Pouso e pernoite. Informe o nome do hotel. A espera no desembarque integra o trecho Plínio Alarcom.',
            ],
            [
                'titulo' => 'Hotel → portaria da celulose',
                'texto' => 'Pauta na planta. Envie o nome na lista. O recuo da cancela não se improvisa na BR-262.',
            ],
            [
                'titulo' => 'Centro → Interlagos → Jupiá',
                'texto' => 'Sede, clínica e o recorte da usina. Um motorista cobre os três se a ordem já estiver no roteiro.',
            ],
            [
                'titulo' => 'Três Lagoas → Campo Grande ou Dourados',
                'texto' => 'Quando a pauta vaza pela BR-262 ou pela BR-158, o trecho deixa de ser urbano. Orçamento à parte.',
            ],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta a celulose e o TJL',
    'faq' => [
        [
            'pergunta' => 'O aeroporto de Três Lagoas fica longe do Centro?',
            'resposta' => 'É trecho urbano. Marcamos margem: a Castelo Branco e o horário de pico alteram o intervalo até o TJL.',
        ],
        [
            'pergunta' => 'O motorista espera no TJL se o voo atrasar?',
            'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.',
        ],
        [
            'pergunta' => 'Vocês entram na portaria da celulose com protocolo?',
            'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, a cancela não libera. Não há convênio com a planta.',
        ],
        [
            'pergunta' => 'Dá para ir a Jupiá depois do hotel no Centro?',
            'resposta' => 'Sim, quando o recorte da usina entra no roteiro. O acesso pede ponto de espera combinado.',
        ],
        [
            'pergunta' => 'O carro segue a Campo Grande depois da reunião?',
            'resposta' => 'Sim, quando a capital entra no pedido. Não é o mesmo recorte do Centro; o horário sai sob consulta.',
        ],
    ],
    'cta' => [
        'titulo' => 'Junte o Jupiá ao horário do TJL',
        'texto' => 'O orçamento de Três Lagoas sai sob consulta. Centro, celulose e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Três Lagoas',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'mato-grosso-do-sul', 'ancora' => 'Campo Grande, Dourados e o leste da celulose'],
        ['tipo' => 'cidade', 'estado' => 'mato-grosso-do-sul', 'cidade' => 'campo-grande', 'ancora' => 'Centro, Cidade Morena e o CGR'],
        ['tipo' => 'cidade', 'estado' => 'mato-grosso-do-sul', 'cidade' => 'dourados', 'ancora' => 'Centro, Jardim América e o DOU'],
    ],
];
