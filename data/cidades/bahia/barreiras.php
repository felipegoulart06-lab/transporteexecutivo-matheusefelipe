<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Barreiras',
    'geo' => ['lat' => -12.1527, 'lng' => -44.9902],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Barreiras',
    'seo' => [
        'title' => 'Oeste baiano: traslado em Barreiras, soja e BRA',
        'description' => 'Motorista executivo em Barreiras para o Centro, Renato Gonçalves, o eixo da soja e o aeroporto BRA. BR-242 no oeste baiano e orçamento sob consulta.',
        'og_title' => 'Traslado no Centro de Barreiras, na soja e no BRA',
        'og_description' => 'Carro no oeste baiano: hotel no Centro, pauta no agro e o terminal BRA.',
        'og_image_alt' => 'Sedan executivo em avenida de Barreiras no oeste da Bahia',
    ],
    'kicker' => 'Oeste baiano · BA',
    'h1' => 'O oeste baiano articula soja, BRA e a BR-242 — sem atalho de Feira',
    'lead' => 'Barreiras é o nó do oeste: grão, o terminal BRA e a BR-242 no mesmo mapa. Feira de Santana fica no outro lado do estado — o app que desenha um atalho a partir do Portal do Sertão erra o recuo na primeira curva.',
    'contexto' => [
        'h2' => 'A pauta do oeste cobra portaria de planta, não “perto da soja”',
        'texto' => [
            'Centro, Renato Gonçalves, Vila Brasil e o recorte agroindustrial não compartilham o mesmo acesso. Hotel no Centro, reunião na trading e voo no Aeroporto de Barreiras (BRA) cabem no mesmo expediente se a ordem da BR-242 já estiver escrita.',
            'O recorte é a rotina do cerrado baiano: embarque pelo nome do hotel, espera discreta na cancela e chegada no terminal certo. Quando a pauta aponta para Vitória da Conquista ou Salvador, a BR-242 e a BR-020 deixam de ser só urbanas.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos da cidade onde o embarque mais se concentra',
        'itens' => [
            [
                'h3' => 'Centro e a Barão do Rio Branco',
                'texto' => 'Sede, hotel e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde e “no Centro” não define o recuo.',
            ],
            [
                'h3' => 'Renato Gonçalves',
                'texto' => 'Pauta residencial, clínicas e o eixo interno. O recuo do bairro não é o da portaria agroindustrial; rua e número evitam a volta.',
            ],
            [
                'h3' => 'Vila Brasil e o recorte urbano',
                'texto' => 'Bairro de passagem entre o núcleo comercial e a saída da BR-242. Informe o ponto; o mapa trata como contínuo o que o trânsito separa.',
            ],
            [
                'h3' => 'Planta, silo e o eixo da soja',
                'texto' => 'Portaria agroindustrial. Envie o nome na lista e o documento pedido. Sem isso, a cancela não libera.',
            ],
        ],
    ],
    'aeroportos' => [
        'h2' => 'Aeroporto de Barreiras — BRA no recorte do município',
        'itens' => [
            [
                'h3' => 'Barreiras — BRA',
                'texto' => 'Terminal da cidade. Combinamos o voo. A espera no desembarque integra o trecho BRA quando o pouso já está no roteiro. Até o Centro a margem é urbana.',
            ],
            [
                'h3' => 'Quando a pauta aponta para Salvador ou Conquista',
                'texto' => 'Salvador e o SSA, ou Vitória da Conquista, não são o mesmo pedido do Centro. A BR-242 pede horário próprio. O orçamento sai à parte.',
            ],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que a agenda barreirense mais pede',
        'itens' => [
            [
                'titulo' => 'BRA → hotel no Centro',
                'texto' => 'Pouso e pernoite. Informe o nome do hotel e se há vaga de visitante.',
            ],
            [
                'titulo' => 'Centro → Renato Gonçalves → planta',
                'texto' => 'Reunião urbana e portaria do grão. Um motorista cobre os três se a ordem já estiver no roteiro.',
            ],
            [
                'titulo' => 'Hotel → Vitória da Conquista no mesmo dia',
                'texto' => 'Quando a pauta cruza o sudoeste, o trecho deixa de ser urbano. Horário sob consulta.',
            ],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na grade em Barreiras',
        'passos' => [
            [
                'titulo' => 'Bairro ou portaria',
                'texto' => 'Centro, Renato Gonçalves ou a planta. Autocomplete não resolve cancela com lista.',
            ],
            [
                'titulo' => 'Hotel ou BRA',
                'texto' => 'Diga se o embarque é o aeroporto da cidade ou a portaria do hotel.',
            ],
            [
                'titulo' => 'Confirmação',
                'texto' => 'Nome e DDD no WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pauta o oeste e pousa no BRA',
    'faq' => [
        [
            'pergunta' => 'Barreiras fica no mesmo recorte de Feira de Santana?',
            'resposta' => 'Não. Feira é o Portal do Sertão; Barreiras é o oeste, na BR-242. Não há atalho urbano entre as duas. O voo daqui sai pelo BRA.',
        ],
        [
            'pergunta' => 'O motorista espera no BRA se o voo atrasar?',
            'resposta' => 'Sim. O número do voo entra no roteiro e a espera no terminal faz parte do trecho.',
        ],
        [
            'pergunta' => 'Vocês fazem Centro, Renato Gonçalves e a planta no mesmo dia?',
            'resposta' => 'Sim. Informe a ordem e o nome na portaria. Um carro articula cidade e cancela agroindustrial.',
        ],
        [
            'pergunta' => 'Dá para seguir a Salvador depois da reunião no Centro?',
            'resposta' => 'Sim, como viagem pela BR-242. Não é o mesmo recorte urbano; o horário sai sob consulta.',
        ],
        [
            'pergunta' => 'A portaria da soja exige lista?',
            'resposta' => 'Em geral, sim. Envie o nome e o documento pedido. Sem isso, a cancela não libera. O orçamento sai sob consulta.',
        ],
    ],
    'cta' => [
        'titulo' => 'Combine o BRA com a pauta do oeste',
        'texto' => 'O orçamento de Barreiras sai sob consulta. Soja, Centro e terminal no mesmo recado.',
        'botao' => 'Solicitar traslado em Barreiras',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'bahia', 'ancora' => 'Salvador, Feira e o interior do oeste'],
        ['tipo' => 'cidade', 'estado' => 'bahia', 'cidade' => 'vitoria-da-conquista', 'ancora' => 'Centro, Recreio e a chapada do sudoeste'],
        ['tipo' => 'cidade', 'estado' => 'bahia', 'cidade' => 'salvador', 'ancora' => 'Barra, Paralela e o Luís Eduardo Magalhães'],
    ],
];
