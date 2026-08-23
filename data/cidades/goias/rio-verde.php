<?php

declare(strict_types=1);

return [
    'layout' => 'gaucha',
    'cidade_nome' => 'Rio Verde',
    'geo' => ['lat' => -17.7923, 'lng' => -50.9192],
    'imagem' => 'centro-oeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Rio Verde',
    'seo' => [
        'title' => 'Motorista executivo em Rio Verde: Centro, agro e RVD',
        'description' => 'Carro com motorista em Rio Verde para o Centro, Popular, o eixo do agronegócio, a UniRV e o aeroporto General Leite de Castro. Orçamento sob consulta.',
        'og_title' => 'Traslado no Centro de Rio Verde, no agro e no RVD',
        'og_description' => 'Motorista no sudoeste goiano: hotel no Centro, pauta no grão e o terminal RVD.',
        'og_image_alt' => 'Sedan executivo em avenida de Rio Verde no cerrado goiano',
    ],
    'kicker' => 'Sudoeste goiano · GO',
    'h1' => 'Do RVD ao Centro sem perder a janela do agronegócio',
    'coluna' => [
        'h2' => 'Rio Verde se lê em grão, suíno e solar — o app não lê o turno da planta',
        'texto' => [
            'Hotel no Centro ou no Popular, reunião na UniRV ou na portaria do polo de grãos e voo no General Leite de Castro (RVD) cabem no mesmo expediente se o motorista já saiu com a ordem da Jamel Cecílio e da BR-060, não com o aceite do minuto. A cidade concentra um dos maiores recortes de soja, milho e proteína do cerrado; o relógio da pauta é o da colheita e o do embarque aéreo, não o da fila do táxi.',
            'O recorte é a rotina do agronegócio: embarque no hotel pelo nome, espera discreta na portaria e chegada no terminal certo. Quando a pauta aponta para Goiânia ou Anápolis, a BR-060 e a BR-452 deixam de ser só urbanas. O orçamento sai sob consulta.',
        ],
    ],
    'lateral' => [
        'h2' => 'Pontos que o pedido rio-verdense mais cita',
        'itens' => [
            [
                'h3' => 'Centro e a Jamel Cecílio',
                'texto' => 'Sede, hotel e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde e “no Centro” não define o recuo.',
            ],
            [
                'h3' => 'Popular, Solar e a UniRV',
                'texto' => 'Pauta residencial, clínicas e o campus. O recuo da universidade pede bloco e portaria, não “na UniRV”. O hotel entra só como embarque.',
            ],
            [
                'h3' => 'General Leite de Castro — RVD',
                'texto' => 'Terminal da cidade. Combinamos o voo. A espera no desembarque integra o trecho RVD; até o Centro a margem é urbana.',
            ],
        ],
    ],
    'faixa' => [
        'h2' => 'Quando a pauta atravessa a BR-060 rumo a Goiânia',
        'texto' => 'Hotel no Centro, planta no recorte do grão e saída cedo pelo RVD. Goiânia, o Santa Genoveva e Anápolis entram como viagem, com margem de BR-060 e de BR-452 — não como segunda corrida urbana. A portaria industrial pede nome na lista; sem isso, o recuo não libera.',
    ],
    'faq_h2' => 'Dúvidas de quem pousa no Leite de Castro',
    'faq' => [
        [
            'pergunta' => 'O aeroporto de Rio Verde fica longe do Centro?',
            'resposta' => 'É trecho urbano. Marcamos margem: a Jamel Cecílio e o horário de pico alteram o intervalo até o RVD.',
        ],
        [
            'pergunta' => 'O motorista espera no RVD se o voo atrasar?',
            'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.',
        ],
        [
            'pergunta' => 'Vocês fazem Centro, Popular e a UniRV no mesmo dia?',
            'resposta' => 'Sim. Informe o bloco do campus e o nome do hotel. Um motorista articula os três recuos.',
        ],
        [
            'pergunta' => 'Dá para seguir a Goiânia depois da reunião na planta?',
            'resposta' => 'Sim, como viagem pela BR-060. Não é o mesmo recorte do Centro; o horário sai sob consulta.',
        ],
        [
            'pergunta' => 'A portaria do polo de grãos exige lista?',
            'resposta' => 'Em geral, sim. Envie o nome e o documento pedido. Sem isso, a cancela não libera. O orçamento sai sob consulta.',
        ],
    ],
    'cta' => [
        'titulo' => 'Junte o Centro ao horário do RVD',
        'texto' => 'O orçamento de Rio Verde sai sob consulta. Agro, campus e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir carro em Rio Verde',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'goias', 'ancora' => 'Goiânia, Anápolis e o sudoeste do grão'],
        ['tipo' => 'cidade', 'estado' => 'goias', 'cidade' => 'goiania', 'ancora' => 'Setor Bueno, T-63 e o GYN'],
        ['tipo' => 'cidade', 'estado' => 'goias', 'cidade' => 'anapolis', 'ancora' => 'DAE, campus e a BR-153'],
    ],
];
