<?php

declare(strict_types=1);

return [
    'layout' => 'rio',
    'cidade_nome' => 'Parauapebas',
    'geo' => ['lat' => -6.0678, 'lng' => -49.9037],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Parauapebas',
    'seo' => [
        'title' => 'Carajás: traslado em Parauapebas, mina e o CKS',
        'description' => 'Carro com motorista em Parauapebas para o Centro, a Beira Rio, a portaria da mina e o aeroporto Carajás (CKS). Azul a CNF, BEL e MAB. Orçamento sob consulta.',
        'og_title' => 'Motorista no Centro, na Beira Rio e no saguão Carajás (CKS)',
        'og_description' => 'Traslado em Parauapebas: hotel no Centro, pauta mineral e o CKS — não o MAB de Marabá.',
        'og_image_alt' => 'Sedan executivo em avenida de Parauapebas, na Serra dos Carajás',
    ],
    'kicker' => 'Serra dos Carajás · PA',
    'h1' => 'Carajás tem saguão próprio: o CKS não se troca com o MAB de Marabá',
    'corrente' => [
        [
            'h2' => 'Parauapebas nasceu da mina — o saguão útil é o CKS, não o João Correa da Rocha',
            'texto' => 'Quem anota MAB pousa em Marabá; quem anota CKS desembarca no aeroporto Carajás, neste município. Centro e Beira Rio não se improvisam no mesmo recuo da portaria mineral. Azul opera o CKS rumo a Confins (CNF), Belém (BEL) e Marabá (MAB): três destinos, um saguão. O motorista já saiu com essa distinção; o passageiro não discute terminal na cancela da Vale.',
        ],
        [
            'h2' => 'Núcleos que a agenda de Parauapebas mais cita',
            'itens' => [
                [
                    'h3' => 'Centro',
                    'texto' => 'Sede, hotel e o comércio. Informe o prédio; o recuo do Centro não é o da Beira Rio nem o da portaria da mina.',
                ],
                [
                    'h3' => 'Beira Rio',
                    'texto' => 'Eixo junto ao Parauapebas. “Na Beira Rio” não define a porta do hotel nem o ponto de espera. Rua e número entram no roteiro.',
                ],
                [
                    'h3' => 'Portaria da mina e o complexo Carajás',
                    'texto' => 'Nome na lista, documento e turno. Sem protocolo, a cancela não libera. O recuo da planta não se resolve com “na Vale”.',
                ],
            ],
        ],
        [
            'h2' => 'Aeroporto de Carajás — CKS',
            'texto' => 'O terminal fica no recorte de Parauapebas, a serviço da serra — não no saguão MAB. Combinamos o voo (CNF, BEL ou o trecho até Marabá). Até o Centro a margem é municipal; até a portaria, o acesso da mina pesa mais que o mapa. O orçamento sai sob consulta.',
        ],
        [
            'h2' => 'Marabá e Belém não se improvisam depois da Beira Rio',
            'texto' => 'Hotel no Centro → Beira Rio → portaria só se a ordem estiver no roteiro. Marabá (MAB) e Belém (BEL) entram como outro voo ou como viagem, não como segunda corrida urbana. O hotel é ponto de embarque, sem convênio de porta.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Carajás e não no MAB',
    'faq' => [
        [
            'pergunta' => 'O CKS é o mesmo aeroporto de Marabá?',
            'resposta' => 'Não. O CKS é o aeroporto Carajás, em Parauapebas. O MAB é o João Correa da Rocha, em Marabá. Informe o código do voo; o motorista não espera no terminal errado.',
        ],
        [
            'pergunta' => 'O motorista espera no CKS se o voo atrasar?',
            'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho Carajás.',
        ],
        [
            'pergunta' => 'Vocês entram na portaria da mina com protocolo?',
            'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, a cancela do complexo não libera.',
        ],
        [
            'pergunta' => 'Vocês fazem Centro, Beira Rio e a mina no mesmo dia?',
            'resposta' => 'Sim. Informe a ordem e o turno da portaria. Um motorista articula os três recuos se a margem estiver no roteiro.',
        ],
        [
            'pergunta' => 'Dá para seguir a Marabá depois do hotel?',
            'resposta' => 'Sim, como viagem ou como conexão aérea pelo próprio CKS. Não é o mesmo recorte do Centro; o horário sai sob consulta.',
        ],
    ],
    'cta' => [
        'titulo' => 'Una a mina ao horário do CKS',
        'texto' => 'O orçamento de Parauapebas sai sob consulta. Centro, Beira Rio e Carajás no mesmo recado.',
        'botao' => 'Solicitar traslado em Parauapebas',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'para', 'ancora' => 'Belém, Marabá e o sudeste mineral'],
        ['tipo' => 'cidade', 'estado' => 'para', 'cidade' => 'maraba', 'ancora' => 'Nova Marabá, a Velha e o aeroporto MAB'],
        ['tipo' => 'cidade', 'estado' => 'para', 'cidade' => 'belem', 'ancora' => 'Nazaré, Batista Campos e o Val-de-Cans'],
    ],
];
