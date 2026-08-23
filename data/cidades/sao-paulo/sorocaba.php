<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Sorocaba',
    'geo' => ['lat' => -23.5015, 'lng' => -47.4526],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Sorocaba',
    'seo' => [
        'title' => 'Traslado executivo em Sorocaba: Centro, Campolim e SOD',
        'description' => 'Motorista executivo em Sorocaba para o Centro, Campolim, Éden, Além Ponte e o aeroporto Bertram Luiz Leupolz. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Campolim, no Centro e no aeroporto SOD',
        'og_description' => 'Traslado em Sorocaba: hotel no Campolim, pauta no Centro e o terminal SOD.',
        'og_image_alt' => 'Sedan executivo em avenida de Sorocaba',
    ],
    'kicker' => 'Interior paulista · SP',
    'h1' => 'Do Campolim ao Centro sem perder a janela da planta',
    'intro' => 'Sorocaba concentra indústria, hospital e o aeroporto Bertram Luiz Leupolz (SOD). Hotel no Campolim, reunião no Centro e voo no SOD cabem no mesmo expediente se o motorista já saiu com a ordem da Ipanema e da Raposo Tavares, não com o aceite do minuto.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Sorocaba não é “pegar um carro no Centro”',
            'texto' => 'Campolim, Éden, Além Ponte e o recuo da planta não compartilham o mesmo acesso. Quem tem pauta no Parque Tecnológico e check-out no Ibis ou similar precisa de um motorista que já conhece o sentido da Avenida Ipanema, não o atalho do app.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque sorocabano mais se concentra',
            'itens' => [
                ['h3' => 'Campolim e o shopping', 'texto' => 'Hotéis, torres e clínicas. Informe o nome do prédio; as ruas do Campolim se repetem no mapa.'],
                ['h3' => 'Centro e a Além Ponte', 'texto' => 'Sede e o calçadão. O sentido da via muda no fim da tarde; “no Centro” não define a porta.'],
                ['h3' => 'Éden, Cajuru e a zona industrial', 'texto' => 'Plantas e o eixo da Raposo. Protocolo de portaria entra no roteiro junto com o turno.'],
                ['h3' => 'Aeroporto — SOD', 'texto' => 'O Bertram Luiz Leupolz fica no recorte da cidade. Combinamos o voo. A espera no desembarque integra o trecho.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta sorocabana mais pede',
        'itens' => [
            ['titulo' => 'SOD → hotel no Campolim', 'texto' => 'Pouso e pernoite. Informe o nome do hotel e se há vaga de visitante.'],
            ['titulo' => 'Campolim → Centro → planta no Éden', 'texto' => 'Reunião, sede e portaria. Um motorista cobre os três se a ordem já estiver no roteiro.'],
            ['titulo' => 'Hotel → Votorantim ou à capital', 'texto' => 'Quando a pauta vaza para Votorantim, Itu ou São Paulo, o trecho deixa de ser só urbano. Orçamento à parte.'],
            ['titulo' => 'Sorocaba → Viracopos no mesmo dia', 'texto' => 'O VCP não fica na porta do Campolim. Combinamos o voo e a margem da rodovia.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no SOD',
    'faq' => [
        ['pergunta' => 'O aeroporto de Sorocaba fica longe do Campolim?', 'resposta' => 'É trecho urbano. Marcamos margem: a Ipanema e o horário de pico alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no SOD se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês entram na planta com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, o recuo da planta não libera.'],
        ['pergunta' => 'Dá para seguir a São Paulo ou a Viracopos depois do hotel?', 'resposta' => 'Sim, como viagem. Não é o mesmo recorte do Campolim; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Campolim ao horário do SOD',
        'texto' => 'O orçamento de Sorocaba sai sob consulta. Hotel, planta e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Sorocaba',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'campinas', 'ancora' => 'Cambuí, Unicamp e o Viracopos'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
    ],
];
