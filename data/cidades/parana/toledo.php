<?php

declare(strict_types=1);

return [
    'layout' => 'gaucha',
    'cidade_nome' => 'Toledo',
    'geo' => ['lat' => -24.7136, 'lng' => -53.7431],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Toledo',
    'seo' => [
        'title' => 'Oeste paranaense: motorista em Toledo e a BR-163',
        'description' => 'Carro com motorista em Toledo para o Centro, Jardim Coopagro, Vila Becker e o agro na BR-163. TOW na cidade ou CAC em Cascavel, conforme o voo. Orçamento sob consulta.',
        'og_title' => 'Motorista no Centro de Toledo, no Coopagro e na BR-163',
        'og_description' => 'Traslado no oeste paranaense: hotel no Centro, pauta no agro e o TOW — ou o CAC, se o voo pedir.',
        'og_image_alt' => 'Sedan executivo em avenida de Toledo no oeste do Paraná',
    ],
    'kicker' => 'Oeste paranaense · PR',
    'h1' => 'O oeste paranaense pede o TOW e a BR-163, não o atalho de Cascavel',
    'coluna' => [
        'h2' => 'Toledo se mede em cooperativa e em BR-163 — Cascavel é outro município',
        'texto' => [
            'A 163 organiza o oeste: grão, cooperativa e o relógio da colheita. Centro, Jardim Coopagro e Vila Becker não se resolvem com o pin de Cascavel. O Luiz Dalcanale Filho (TOW) fica no recorte da cidade; quando a linha comercial afina, o saguão prático é o Adalberto Mendes da Silva (CAC), em Cascavel — trecho de rodovia, não bairro colado.',
            'O pedido executivo aqui é portaria e espera: nome na lista da cooperativa, hotel pelo letreiro, saída cedo pela 163. Foz do Iguaçu e a tríplice fronteira entram como viagem, com margem de estrada. O orçamento sai sob consulta.',
        ],
    ],
    'lateral' => [
        'h2' => 'Pontos que o pedido toledano mais cita',
        'itens' => [
            ['h3' => 'Centro e o calçadão', 'texto' => 'Sede e hotel. Informe o prédio; “no Centro” não define o recuo nem o sentido da via no fim da tarde.'],
            ['h3' => 'Jardim Coopagro e Vila Becker', 'texto' => 'Pauta residencial, clínicas e o entorno agro. O recuo pede rua e número; a cooperativa pede lista.'],
            ['h3' => 'TOW na cidade — CAC quando o voo pedir', 'texto' => 'O Dalcanale Filho serve Toledo. Se o embarque comercial estiver em Cascavel, o trecho pela 163 entra no roteiro com horário de rodovia.'],
        ],
    ],
    'faixa' => [
        'h2' => 'Quando a pauta atravessa a 163 rumo a Cascavel ou a Foz',
        'texto' => 'Hotel no Centro, Coopagro e saída pelo TOW. Cascavel e o CAC entram só se o voo estiver lá — não como atalho urbano. Foz do Iguaçu, Itaipu e o IGU saem à parte, com margem de oeste. A portaria do agro pede nome na lista; sem isso, o recuo não libera.',
    ],
    'faq_h2' => 'Dúvidas de quem junta Toledo à BR-163',
    'faq' => [
        ['pergunta' => 'Toledo tem aeroporto comercial próprio?', 'resposta' => 'O TOW (Luiz Dalcanale Filho) fica no município. Quando não houver linha útil, o terminal prático é o CAC, em Cascavel, pela BR-163. Informe o voo; o recorte muda.'],
        ['pergunta' => 'Cascavel substitui o recuo de Toledo?', 'resposta' => 'Não. São municípios distintos. O atalho do app até o Country ou o CAC não entrega o Coopagro nem a Vila Becker.'],
        ['pergunta' => 'Vocês entram na cooperativa com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, o recuo do agro não libera.'],
        ['pergunta' => 'Vocês fazem Centro, Coopagro e Vila Becker no mesmo dia?', 'resposta' => 'Sim. Informe a ordem e o nome do hotel. Um motorista articula os três recuos se a margem estiver no roteiro.'],
        ['pergunta' => 'Dá para seguir a Foz do Iguaçu depois da reunião?', 'resposta' => 'Sim, como viagem pelo oeste. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Marque o Coopagro no mesmo recado da BR-163',
        'texto' => 'O orçamento de Toledo sai sob consulta. Centro, agro e TOW — ou CAC — no mesmo WhatsApp.',
        'botao' => 'Pedir carro em Toledo',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'parana', 'ancora' => 'Foz, Londrina e o recorte paranaense'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'cascavel', 'ancora' => 'Centro, Country e o aeroporto CAC'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'foz-do-iguacu', 'ancora' => 'Cataratas, Itaipu e o aeroporto IGU'],
    ],
];
