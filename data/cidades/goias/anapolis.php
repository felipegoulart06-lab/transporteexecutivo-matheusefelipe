<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Anápolis',
    'geo' => ['lat' => -16.3281, 'lng' => -48.9534],
    'imagem' => 'centro-oeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Anápolis',
    'seo' => [
        'title' => 'Motorista executivo em Anápolis: Centro, Jundiaí e DAE',
        'description' => 'Carro com motorista em Anápolis para o Centro, Jundiaí, Cidade Universitária e o Distrito Agroindustrial. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Centro, no Jundiaí e no Distrito Agroindustrial',
        'og_description' => 'Motorista em Anápolis: hotel, planta farmacêutica e o recuo do DAE.',
        'og_image_alt' => 'Sedan executivo em avenida de Anápolis',
    ],
    'kicker' => 'Entorno goiano · GO',
    'h1' => 'Do DAE ao Centro sem perder a janela da planta',
    'intro' => 'Anápolis concentra o Distrito Agroindustrial, campus e o eixo Goiânia–Brasília. Hotel no Centro ou no Jundiaí, reunião na planta e o trecho até o Santa Genoveva cabem no mesmo expediente se o motorista já saiu com a ordem da BR-153, não com o aceite do minuto.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Anápolis não é “pegar um carro no Centro”',
            'texto' => 'Centro, Jundiaí, Cidade Universitária e o DAE não compartilham o mesmo recuo. Quem tem pauta na planta farmacêutica e check-out no hotel precisa de um motorista que já conhece o protocolo da portaria, não o atalho do app.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque anapolino mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Goiás', 'texto' => 'Em Anápolis, sede, hotel e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde.'],
                ['h3' => 'Jundiaí e o shopping', 'texto' => 'Torres e clínicas. Deslocamentos curtos que esticam no semáforo da Brasil.'],
                ['h3' => 'Cidade Universitária e o campus', 'texto' => 'UEG e pauta acadêmica. O recuo pede bloco e portaria.'],
                ['h3' => 'Distrito Agroindustrial — DAE', 'texto' => 'Plantas e logística. Protocolo de lista entra no roteiro junto com o turno; sem isso, o recuo não libera.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta anapolina mais pede',
        'itens' => [
            ['titulo' => 'Hotel no Centro → DAE', 'texto' => 'Pauta na planta. Envie o nome na portaria e o documento pedido pelo condomínio industrial.'],
            ['titulo' => 'Jundiaí → Centro → campus', 'texto' => 'Clínica, sede e universidade. Um motorista cobre os três se a ordem já estiver no roteiro.'],
            ['titulo' => 'Anápolis → Goiânia (GYN)', 'texto' => 'O Santa Genoveva não fica na porta do hotel. Combinamos o voo e a margem da BR-153.'],
            ['titulo' => 'Anápolis → Brasília no mesmo dia', 'texto' => 'Quando a pauta vaza para o DF, o trecho deixa de ser urbano. Orçamento à parte.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta a planta e o DAE',
    'faq' => [
        ['pergunta' => 'O aeroporto de Anápolis atende voo comercial?', 'resposta' => 'O voo comercial da região sai em geral pelo Santa Genoveva, em Goiânia. O trecho Anápolis–GYN entra no roteiro com margem para a BR-153.'],
        ['pergunta' => 'Vocês entram no DAE com protocolo de portaria?', 'resposta' => 'Sim. Em Anápolis, envie o nome na lista e o documento pedido. Sem isso, o recuo da planta não libera.'],
        ['pergunta' => 'Dá para ir a Goiânia e voltar ao hotel no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. A BR-153 pesa mais que a distância no mapa.'],
        ['pergunta' => 'O carro segue a Brasília depois da reunião?', 'resposta' => 'Sim, quando o DF entra no roteiro. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o DAE ao hotel do Centro',
        'texto' => 'O orçamento de Anápolis sai sob consulta. Planta, campus e GYN no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Anápolis',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'goias', 'ancora' => 'Anápolis, Rio Verde e o entorno do DF'],
        ['tipo' => 'cidade', 'estado' => 'goias', 'cidade' => 'goiania', 'ancora' => 'Bueno, Marista e o Santa Genoveva'],
        ['tipo' => 'cidade', 'estado' => 'distrito-federal', 'cidade' => 'brasilia', 'ancora' => 'Eixo Monumental, Lago e o BSB'],
    ],
];
