<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Anápolis',
    'geo' => ['lat' => -16.3281, 'lng' => -48.9534],
    'imagem' => 'centro-oeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Anápolis',
    'seo' => [
        'title' => 'Carro executivo em Anápolis: DAIA, Jundiaí e GYN',
        'description' => 'Motorista em Anápolis para Centro, Jundiaí e o DAIA. Voo comercial sai em Goiânia (GYN) ou em Brasília (BSB) pela BR-060 ou BR-153. Orçamento sob consulta.',
        'og_title' => 'Do DAIA ao hotel: o voo comercial não parte de Anápolis',
        'og_description' => 'Planta no DAIA, recuo no Jundiaí. Santa Genoveva fica em Goiânia; BSB no Lago Sul. A malha é BR-060 e BR-153.',
        'og_image_alt' => 'Sedan executivo em avenida de Anápolis',
    ],
    'kicker' => 'Entorno goiano · GO',
    'h1' => 'Do DAIA ao Centro, com janela para Goiânia ou Brasília',
    'intro' => 'Anápolis concentra o Distrito Agroindustrial (DAIA), o Centro e o Jundiaí no eixo Goiânia–Brasília. Hotel no Centro, reunião na planta e o trecho até o Santa Genoveva (GYN) ou até o BSB cabem no mesmo expediente se o motorista já saiu com a ordem da BR-153 e da BR-060 — e com o protocolo da portaria do DAIA. Anápolis não opera voo regular de passageiros; o embarque comercial é em outro município.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Anápolis não é “pegar um carro no Centro”',
            'texto' => 'Centro, Jundiaí e o DAIA não compartilham o mesmo recuo. Quem tem pauta na planta farmacêutica e check-out no hotel precisa de um motorista que já conhece a cancela do distrito, não o atalho do app. O voo do dia, se houver, é em Goiânia ou em Brasília.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque anapolino mais se concentra',
            'itens' => [
                ['h3' => 'Centro', 'texto' => 'Sede, hotel e o calçadão. Informe o prédio. O sentido da via muda no fim da tarde; “no Centro” não define a porta.'],
                ['h3' => 'Jundiaí', 'texto' => 'Torres, clínicas e pernoite. Deslocamentos curtos que esticam no semáforo. Diga rua e número; o recuo do Jundiaí não é o do DAIA.'],
                ['h3' => 'DAIA — Distrito Agroindustrial', 'texto' => 'Plantas e logística no complexo administrado pela Codego. Nome na lista e documento. Sem protocolo, a cancela da planta não libera.'],
                ['h3' => 'BR-060 e BR-153', 'texto' => 'Saída para Goiânia (GYN) e para Brasília (BSB). Não é o mesmo pedido urbano do Centro; a margem sai da rodovia.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta anapolina mais pede',
        'itens' => [
            ['titulo' => 'Hotel no Centro ou no Jundiaí → DAIA', 'texto' => 'Pauta na planta. Envie o nome na portaria e o documento pedido pelo condomínio industrial.'],
            ['titulo' => 'Jundiaí → Centro', 'texto' => 'Clínica e sede no mesmo expediente. Um motorista cobre os dois se a ordem já estiver no roteiro.'],
            ['titulo' => 'Anápolis → GYN ou BSB', 'texto' => 'O Santa Genoveva fica em Goiânia. O BSB fica no Lago Sul, no Distrito Federal. Combinamos o voo e a margem da BR-153 ou da BR-060.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta o DAIA e o voo fora',
    'faq' => [
        ['pergunta' => 'Anápolis tem voo comercial regular de passageiros?', 'resposta' => 'Não. O voo regular da pauta sai em geral pelo Santa Genoveva (GYN), em Goiânia, ou pelo BSB, no Lago Sul. O trecho Anápolis–GYN ou Anápolis–BSB entra no roteiro com margem para a BR-153 e a BR-060.'],
        ['pergunta' => 'Vocês entram no DAIA com protocolo de portaria?', 'resposta' => 'Sim. Em Anápolis, envie o nome na lista e o documento pedido. Sem isso, o recuo da planta no Distrito Agroindustrial não libera.'],
        ['pergunta' => 'Dá para ir a Goiânia e voltar ao Jundiaí no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. A BR-153 pesa mais que a distância no mapa.'],
        ['pergunta' => 'O carro segue a Brasília depois da reunião no DAIA?', 'resposta' => 'Sim, quando o DF entra no roteiro. Não é o mesmo recorte do Centro; o horário da BR-060 sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o DAIA ao hotel do Centro',
        'texto' => 'Informe a portaria no Distrito Agroindustrial, o hotel no Centro ou no Jundiaí e se o voo é em Goiânia (GYN) ou em Brasília (BSB). A operação organiza o recuo e a rodovia.',
        'botao' => 'Pedir motorista em Anápolis',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'goias', 'ancora' => 'Anápolis, Rio Verde e o entorno do DF'],
        ['tipo' => 'cidade', 'estado' => 'goias', 'cidade' => 'goiania', 'ancora' => 'Bueno, Marista e o Santa Genoveva (GYN)'],
        ['tipo' => 'cidade', 'estado' => 'distrito-federal', 'cidade' => 'brasilia', 'ancora' => 'Eixo Monumental, Lago Sul e o BSB'],
    ],
];
