<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Goiânia',
    'geo' => ['lat' => -16.6864, 'lng' => -49.2643],
    'imagem' => 'centro-oeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Goiânia',
    'seo' => [
        'title' => 'Traslado executivo em Goiânia: Bueno, Marista e GYN',
        'description' => 'Motorista executivo em Goiânia para Setor Bueno, Marista, Oeste, Campinas e o aeroporto Santa Genoveva. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Bueno, no Marista e no Santa Genoveva',
        'og_description' => 'Traslado na capital goiana: hotel no Bueno, pauta no Marista e o terminal GYN.',
        'og_image_alt' => 'Sedan executivo em avenida arborizada de Goiânia',
    ],
    'kicker' => 'Capital goiana · GO',
    'h1' => 'Do Santa Genoveva ao Bueno sem perder a reunião no Marista',
    'lead' => 'Goiânia é larga no traçado e curta no relógio quando o destino é o Setor Bueno. O motorista segura a Anhanguera e a T-63; o passageiro segura a pauta — não a vaga na porta do hotel.',
    'contexto' => [
        'h2' => 'A capital do cerrado cobra endereço de setor, não “no centro”',
        'texto' => [
            'Bueno, Marista, Oeste, Sul e Campinas não se trocam no mesmo recuo. Hotel no Bueno, clínica no Marista e voo no Santa Genoveva (GYN) cabem no mesmo expediente se a ordem das T-avenidas já estiver no roteiro.',
            'O recorte é a rotina da capital: embarque em hotel (Rio Quente, Castro’s, similares), espera na porta do prédio e chegada no terminal certo, sem inventar filial no Setor Aeroporto.',
        ],
    ],
    'bairros' => [
        'h2' => 'Setores da capital onde o embarque mais se concentra',
        'itens' => [
            ['h3' => 'Setor Bueno', 'texto' => 'Hotéis, torres e o eixo da T-63. Informe o nome do condomínio; as quadras se repetem na numeração.'],
            ['h3' => 'Setor Marista', 'texto' => 'Clínicas e escritórios. Deslocamentos curtos que esticam no semáforo da 85.'],
            ['h3' => 'Setor Oeste e Sul', 'texto' => 'Pauta residencial e jantar. O recuo pede rua e número; “no Oeste” não basta.'],
            ['h3' => 'Campinas e o GYN', 'texto' => 'Bairro histórico e a porta do Santa Genoveva. O trecho até o Bueno entra com margem para a Anhanguera.'],
        ],
    ],
    'aeroportos' => [
        'h2' => 'Santa Genoveva — GYN no meio da pauta',
        'itens' => [
            ['h3' => 'Santa Genoveva — GYN', 'texto' => 'Terminal da capital, no recorte de Campinas. Combinamos o voo. A espera no desembarque integra o trecho.'],
            ['h3' => 'Quando a pauta aponta para Brasília', 'texto' => 'O trecho Goiânia–BSB não é o mesmo pedido urbano. Se a reunião vaza para o DF, o orçamento sai à parte.'],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que a agenda goianiense mais pede',
        'itens' => [
            ['titulo' => 'GYN → hotel no Bueno', 'texto' => 'Pouso e pernoite. Informe o nome do hotel e se há vaga de visitante.'],
            ['titulo' => 'Bueno → Marista → Parque Flamboyant', 'texto' => 'Reunião, clínica e um intervalo só se estiver no roteiro. Um motorista cobre os três.'],
            ['titulo' => 'Hotel → Anápolis no mesmo dia', 'texto' => 'Quando a planta farmacêutica entra na pauta, o trecho deixa de ser urbano. Horário sob consulta.'],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na grade em Goiânia',
        'passos' => [
            ['titulo' => 'Setor e número', 'texto' => 'Bueno, Marista ou Oeste. Autocomplete não resolve quadra com dois acessos.'],
            ['titulo' => 'Hotel ou GYN', 'texto' => 'Diga se o embarque é o Santa Genoveva ou a portaria do hotel.'],
            ['titulo' => 'Confirmação', 'texto' => 'Nome e DDD no WhatsApp. Devolvemos o horário de apresentação.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Santa Genoveva',
    'faq' => [
        ['pergunta' => 'O aeroporto de Goiânia fica longe do Bueno?', 'resposta' => 'É trecho urbano pela Anhanguera. Marcamos margem; o pico da T-63 altera o intervalo.'],
        ['pergunta' => 'O motorista espera no GYN se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem Bueno, Marista e o Flamboyant no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. Um carro à disposição evita três aceites entre as T-avenidas.'],
        ['pergunta' => 'Dá para seguir a Anápolis depois do hotel?', 'resposta' => 'Sim, quando Anápolis entra no roteiro. Não é o mesmo recorte do Setor Bueno.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Bueno ao horário do Santa Genoveva',
        'texto' => 'O orçamento de Goiânia sai sob consulta. Setor, hotel e GYN no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Goiânia',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'goias', 'ancora' => 'Anápolis, Rio Verde e o entorno do DF'],
        ['tipo' => 'cidade', 'estado' => 'distrito-federal', 'cidade' => 'brasilia', 'ancora' => 'Eixo Monumental, Lago e o BSB'],
        ['tipo' => 'cidade', 'estado' => 'mato-grosso', 'cidade' => 'cuiaba', 'ancora' => 'Goiabeiras, Centro e o Marechal Rondon'],
    ],
];
