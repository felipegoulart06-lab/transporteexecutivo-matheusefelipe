<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Campinas',
    'geo' => ['lat' => -22.9099, 'lng' => -47.0626],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Campinas',
    'seo' => [
        'title' => 'Motorista em Campinas: Cambuí, Barão Geraldo e VCP',
        'description' => 'Carro com motorista em Campinas para o Cambuí, o Centro, Barão Geraldo, a Unicamp e o aeroporto de Viracopos. Hotel, campus e VCP no mesmo recado. Orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Cambuí, na Unicamp e no VCP',
        'og_description' => 'Viracopos fica em Campinas. Combinamos o recuo do Cambuí, a portaria da Unicamp e o voo no VCP.',
        'og_image_alt' => 'Sedan executivo em avenida arborizada de Campinas',
    ],
    'kicker' => 'Região Metropolitana de Campinas · SP',
    'h1' => 'Do Cambuí a Viracopos com o recuo da Unicamp',
    'intro' => 'Campinas junta hotel no Cambuí, pauta no Centro, campus em Barão Geraldo e o Aeroporto Internacional de Viracopos (VCP) no próprio município. O motorista sai com a Santos Dumont, a Anhanguera e a Bandeirantes no roteiro. Quem pede GRU ou Congonhas está pedindo outro terminal, em outro município — não o saguão de Viracopos.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Campinas não é “me busca no Centro”',
            'texto' => 'Cambuí, Aquidaban, Barão Geraldo e o km 66 da Santos Dumont não compartilham o mesmo recuo. Reunião na Unicamp e check-out no Cambuí pedem o bloco na portaria e o nome do hotel. O pin do mapa não abre a cancela do campus nem coloca o carro na porta certa de Viracopos.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque campineiro mais se concentra',
            'itens' => [
                ['h3' => 'Cambuí e a Nova Campinas', 'texto' => 'Hotéis, clínicas e torres. Informe o prédio; as paralelas da Coronel Quirino se repetem no mapa.'],
                ['h3' => 'Centro e a Aquidaban', 'texto' => 'Sede e calçadão. O sentido da via muda no fim da tarde; “no Centro” não define a porta.'],
                ['h3' => 'Barão Geraldo, Unicamp e CIATEC', 'texto' => 'Campus Zeferino Vaz, HC da Unicamp e o polo. Nome na portaria e o bloco entram no roteiro.'],
                ['h3' => 'Viracopos — VCP', 'texto' => 'O terminal internacional fica no sul de Campinas, na Rodovia Santos Dumont, km 66. Combinamos o voo. A espera no desembarque integra o trecho.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta campineira mais pede',
        'itens' => [
            ['titulo' => 'VCP → hotel no Cambuí', 'texto' => 'Pouso no município e pernoite. Informe o nome do hotel e se há vaga de visitante.'],
            ['titulo' => 'Cambuí → Unicamp → Centro', 'texto' => 'Campus, sede e retorno. Um motorista cobre os três se a ordem já estiver no roteiro.'],
            ['titulo' => 'Hotel ou CIATEC → VCP', 'texto' => 'Santos Dumont, não atalho de aplicativo. Envie o voo; a margem sai do recuo do hotel ou da cancela.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa em Viracopos',
    'faq' => [
        ['pergunta' => 'O aeroporto de Campinas fica no município?', 'resposta' => 'Sim. Viracopos (VCP) fica em Campinas, na Santos Dumont, km 66. O trecho até o Cambuí ou Barão Geraldo é municipal, com margem para o pico.'],
        ['pergunta' => 'GRU ou Congonhas é o mesmo que Viracopos?', 'resposta' => 'Não. VCP é o terminal de Campinas. GRU fica em Guarulhos e Congonhas em outro município. Se a pauta pedir esses saguões, o trecho entra à parte.'],
        ['pergunta' => 'Vocês entram no campus da Unicamp?', 'resposta' => 'Sim, no campus Zeferino Vaz, em Barão Geraldo, com o nome na portaria e o bloco. Sem isso, a cancela não libera.'],
        ['pergunta' => 'O motorista espera no VCP se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no roteiro e a espera no terminal faz parte do trecho de Viracopos.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Cambuí ao horário de Viracopos',
        'texto' => 'Informe o hotel ou o bloco da Unicamp, o voo no VCP e o horário de apresentação. O orçamento de Campinas sai sob consulta.',
        'botao' => 'Pedir motorista em Campinas',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Interior e metrópole paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Quando o voo da pauta não é o VCP'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'guarulhos', 'ancora' => 'GRU no município de Guarulhos, não em Campinas'],
    ],
];
