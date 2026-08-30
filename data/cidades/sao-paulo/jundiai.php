<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Jundiaí',
    'geo' => ['lat' => -23.1857, 'lng' => -46.8978],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Jundiaí',
    'seo' => [
        'title' => 'Traslado executivo em Jundiaí: Centro, Medeiros e Anhanguera',
        'description' => 'Motorista executivo em Jundiaí para o Centro, Medeiros, Vila Rio Branco, Serra do Japi e o eixo até Viracopos. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro de Jundiaí, no Medeiros e na Anhanguera',
        'og_description' => 'Traslado em Jundiaí: hotel, pauta industrial e o recuo rumo a VCP ou à capital.',
        'og_image_alt' => 'Sedan executivo em avenida de Jundiaí',
    ],
    'kicker' => 'Interior da capital · SP',
    'h1' => 'Do Medeiros ao Centro sem perder a janela da Anhanguera',
    'intro' => 'Jundiaí concentra planta, hospital e o recorte entre a capital e Campinas. Hotel no Centro ou no Medeiros, reunião na zona industrial e voo em Viracopos (VCP) ou Congonhas cabem no mesmo expediente se o motorista já saiu com a ordem da Anhanguera, não com o aceite do minuto.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Jundiaí não é “pegar um carro no Centro”',
            'texto' => 'Centro, Vila Rio Branco, Medeiros e o Distrito Industrial não compartilham o mesmo recuo. Quem tem pauta na planta e check-out no Comfort ou no Blue Tree precisa de um motorista que já conhece o sentido da Jundiaí-Itatiba, não o atalho do app.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque jundiaiense mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Barão de Jundiaí', 'texto' => 'Em Jundiaí, sede, hotel e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde.'],
                ['h3' => 'Medeiros, Vila Rio Branco e o shopping', 'texto' => 'Torres e clínicas. Deslocamentos curtos que esticam no semáforo da Jundiaí-Itatiba.'],
                ['h3' => 'Distrito Industrial e a Anhanguera', 'texto' => 'Em Jundiaí, plantas e logística. Protocolo de portaria entra no roteiro junto com o turno.'],
                ['h3' => 'Serra do Japi e o Horto Florestal', 'texto' => 'Visita combinada. Não é o mesmo recorte do Centro; o recuo do parque pede ponto de espera.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta jundiaiense mais pede',
        'itens' => [
            ['titulo' => 'Hotel no Centro → planta no Distrito', 'texto' => 'Pauta industrial. Envie o nome na portaria e o documento pedido pelo condomínio.'],
            ['titulo' => 'Medeiros → Centro → Hospital São Vicente', 'texto' => 'Clínica, sede e unidade. Um motorista cobre os três se a ordem já estiver no roteiro.'],
            ['titulo' => 'Jundiaí → Viracopos (VCP)', 'texto' => 'O VCP não fica na porta do hotel. Combinamos o voo e a margem da Anhanguera.'],
            ['titulo' => 'Jundiaí → Faria Lima ou Congonhas', 'texto' => 'Quando a pauta vaza para a capital, o trecho deixa de ser só urbano. Orçamento à parte.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta Jundiaí e a Anhanguera',
    'faq' => [
        ['pergunta' => 'Jundiaí tem aeroporto comercial?', 'resposta' => 'O campo de Jundiaí atende aviação geral. O voo comercial da pauta sai em geral por Viracopos ou Congonhas; o trecho entra no roteiro com margem.'],
        ['pergunta' => 'Em Jundiaí, o motorista espera no VCP se o voo atrasar?', 'resposta' => 'Sim, quando o VCP está no roteiro. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Em Jundiaí, vocês entram na planta com protocolo de portaria?', 'resposta' => 'Sim. Em Jundiaí, envie o nome na lista e o documento pedido. Sem isso, o recuo da planta não libera.'],
        ['pergunta' => 'Dá para ir à Serra do Japi e voltar ao hotel no mesmo dia?', 'resposta' => 'Sim, quando a visita entra no roteiro. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Medeiros ao horário da Anhanguera',
        'texto' => 'O orçamento de Jundiaí sai sob consulta. Planta, hotel e VCP no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Jundiaí',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'campinas', 'ancora' => 'Cambuí, Unicamp e o Viracopos'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
    ],
];
