<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Campinas',
    'geo' => ['lat' => -22.9099, 'lng' => -47.0626],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Campinas',
    'seo' => [
        'title' => 'Motorista executivo em Campinas: Cambuí, Centro e VCP',
        'description' => 'Carro com motorista em Campinas para Cambuí, Nova Campinas, Barão Geraldo e o aeroporto de Viracopos. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Cambuí, no Centro e em Viracopos',
        'og_description' => 'Motorista em Campinas: hotel no Cambuí, pauta no Centro e o terminal VCP.',
        'og_image_alt' => 'Sedan executivo em avenida arborizada de Campinas',
    ],
    'kicker' => 'Região Metropolitana de Campinas · SP',
    'h1' => 'Do Cambuí a Viracopos sem perder a janela do Centro',
    'intro' => 'Campinas não é a capital, mas concentra planta, universidade e o Viracopos (VCP). Hotel no Cambuí, reunião na Nova Campinas e voo em Viracopos cabem no mesmo expediente se o motorista já saiu com a ordem da Santos Dumont e da Anhanguera, não com o aceite do minuto.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Campinas não é “pegar um carro no Centro”',
            'texto' => 'Cambuí, Nova Campinas, Barão Geraldo e o terminal de Viracopos não compartilham o mesmo recuo. Quem tem pauta na Unicamp e check-out no Royal Palm ou no Vitória Hotel precisa de um motorista que já conhece o sentido da Norte-Sul, não o atalho do app.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque campineiro mais se concentra',
            'itens' => [
                ['h3' => 'Cambuí e a Nova Campinas', 'texto' => 'Hotéis, clínicas e torres. Informe o nome do prédio; as ruas paralelas à Coronel Quirino se repetem no mapa.'],
                ['h3' => 'Centro e a Aquidaban', 'texto' => 'Sede e o calçadão. O sentido da via muda no fim da tarde; “no Centro” não define a porta.'],
                ['h3' => 'Barão Geraldo e a Unicamp', 'texto' => 'Campus e planta. Protocolo de portaria entra no roteiro junto com o horário da reunião.'],
                ['h3' => 'Viracopos — VCP', 'texto' => 'O aeroporto internacional fica em Campinas, mas longe do Cambuí. Combinamos o voo. A espera no desembarque integra o trecho.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta campineira mais pede',
        'itens' => [
            ['titulo' => 'VCP → hotel no Cambuí', 'texto' => 'Pouso e pernoite. Informe o nome do hotel e se há vaga de visitante.'],
            ['titulo' => 'Cambuí → Unicamp → Centro', 'texto' => 'Campus, sede e retorno. Um motorista cobre os três se a ordem já estiver no roteiro.'],
            ['titulo' => 'Hotel → Valinhos ou à capital', 'texto' => 'Quando a pauta vaza para Valinhos, Paulínia ou São Paulo, o trecho deixa de ser só urbano. Orçamento à parte.'],
            ['titulo' => 'Viracopos → planta no Distrito Industrial', 'texto' => 'Portaria e turno. Envie o nome na lista; sem isso, o recuo da planta não libera.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa em Viracopos',
    'faq' => [
        ['pergunta' => 'O aeroporto de Campinas fica longe do Cambuí?', 'resposta' => 'Viracopos fica no recorte do município, mas o trecho até o Cambuí pede margem para a Santos Dumont e para o pico.'],
        ['pergunta' => 'O motorista espera no VCP se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês entram no campus da Unicamp?', 'resposta' => 'Sim, com o nome na portaria e o bloco. Sem isso, o recuo do campus não libera.'],
        ['pergunta' => 'Dá para seguir a São Paulo depois da reunião?', 'resposta' => 'Sim, como viagem. Não é o mesmo recorte do Cambuí; o horário da Anhanguera sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Cambuí ao horário de Viracopos',
        'texto' => 'O orçamento de Campinas sai sob consulta. Hotel, campus e VCP no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Campinas',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'guarulhos', 'ancora' => 'O recuo de Guarulhos e o terminal GRU'],
    ],
];
