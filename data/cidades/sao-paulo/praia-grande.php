<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'Praia Grande',
    'geo' => ['lat' => -24.0059, 'lng' => -46.4028],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Praia Grande',
    'seo' => [
        'title' => 'Litoral: motorista em Praia Grande, Boqueirão e serra',
        'description' => 'Motorista em Praia Grande para Boqueirão, Canto do Forte, Guilhermina e Vila Tupi. Serra pela Imigrantes até Congonhas, sem tratar como Santos. Valor sob consulta.',
        'og_title' => 'Boqueirão, Canto do Forte e a serra no horário certo',
        'og_description' => 'Traslado em Praia Grande: orla própria, recuo até a Imigrantes e o salto a CGH — sem o pin de Santos.',
        'og_image_alt' => 'Sedan executivo na Avenida Presidente Kennedy, em Praia Grande',
    ],
    'kicker' => 'Litoral sul paulista · SP',
    'h1' => 'Boqueirão, Canto do Forte e a serra no horário certo',
    'epigrafe' => 'Boqueirão e Canto do Forte não são Santos. A serra pela Imigrantes até Congonhas só fecha se o horário da subida já estiver no roteiro. Guilhermina e Vila Tupi pedem o trecho de orla certo; o pin da baixada entrega o carro no Gonzaga.',
    'abertura' => [
        'h2' => 'A orla de Praia Grande não empresta o recuo do porto',
        'texto' => [
            'Boqueirão, Canto do Forte, Guilhermina e Vila Tupi concentram o pernoite e a pauta de litoral sem serem bairro de Santos. Hotel na Kennedy ou no Canto do Forte entra só como embarque. Quem sobe à capital sobe a Imigrantes (SP-160) depois do canal; o trecho não é o calçadão nem o porto santista.',
            'O serviço é de traslado e de espera combinada. Feriado e verão esticam a serra. Não é corrida de orla no fim de semana, a menos que a visita à praia já esteja no itinerário. Tratar Praia Grande como “Santos lado B” é o erro que perde a janela do CGH.',
        ],
    ],
    'faixas' => [
        ['h2' => 'Boqueirão e a Kennedy no relógio da maré de gente', 'texto' => 'A avenida enche no feriado. Informe o hotel pelo nome e o recuo; “na praia” não distingue Boqueirão do Canto do Forte nem o acesso da Kennedy.'],
        ['h2' => 'Canto do Forte, Guilhermina e Vila Tupi', 'texto' => 'Três recortes de orla. Guilhermina e Tupi não compartilham o mesmo retorno. A litorânea muda o intervalo no pico; a margem sai do hotel, não do mapa.'],
        ['h2' => 'A serra só fecha se o horário da Imigrantes já estiver escrito', 'texto' => 'Subida rumo a Congonhas pede margem de SP-160, não o aceite do minuto na orla. Santos e Guarujá entram como trechos nomeados quando a pauta cruza o canal — não como o mesmo município.'],
    ],
    'aeroportos' => [
        'h2' => 'CGH pela Imigrantes — GRU como salto extra da pauta longa',
        'itens' => [
            ['h3' => 'Congonhas — CGH', 'texto' => 'O trecho Praia Grande–capital entra como viagem. Combinamos o terminal e a margem da Imigrantes; não é corrida urbana do Boqueirão nem o recuo do porto de Santos.'],
            ['h3' => 'Guarulhos — GRU', 'texto' => 'Serra, Rodoanel e Cumbica. Informe o voo; o intervalo não se herda do calçadão. Só entra se já estiver no roteiro.'],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque em Praia Grande',
        'lista' => [
            'Trecho de orla com nome — Boqueirão, Canto do Forte, Guilhermina ou Vila Tupi. Hotel pelo estabelecimento, só como embarque.',
            'Se o voo é em Congonhas, número e horário. A margem sai da Imigrantes, não da Kennedy.',
            'Santos ou Guarujá só entram se já estiverem no roteiro; não é desvio na fila do canal.',
        ],
    ],
    'faq_h2' => 'Boqueirão, serra e o que não é Santos',
    'faq' => [
        ['pergunta' => 'Praia Grande se trata como bairro de Santos?', 'resposta' => 'Não. É município próprio. Boqueirão e Canto do Forte não compartilham recuo com o Gonzaga; o pin da baixada é o erro que atrasa a serra.'],
        ['pergunta' => 'Boqueirão e Canto do Forte têm recuos distintos?', 'resposta' => 'Têm. Informe o hotel ou a quadra. A Kennedy não resolve os dois no mesmo pin.'],
        ['pergunta' => 'A subida pela Imigrantes até Congonhas pede qual margem?', 'resposta' => 'Margem de serra, a partir do horário de saída na orla. Feriado e pico esticam a SP-160; não é o intervalo Guilhermina–Tupi.'],
        ['pergunta' => 'Guilhermina e Vila Tupi entram no mesmo itinerário de orla?', 'resposta' => 'Entram, se a ordem já estiver no recado. São recortes distintos; um motorista articula os dois quando o roteiro os nomeia.'],
        ['pergunta' => 'O feriado na serra altera o horário combinado?', 'resposta' => 'Altera a margem, não o combinado se o horário de subida já estiver escrito. Avise o feriado no pedido; improvisar a Imigrantes no minuto perde o CGH.'],
    ],
    'cta' => [
        'titulo' => 'Boqueirão sobe a serra no horário combinado',
        'texto' => 'Canto do Forte, Guilhermina e a Imigrantes. Serra e orla no mesmo pedido.',
        'botao' => 'Pedir carro em Praia Grande',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'santos', 'ancora' => 'Gonzaga, porto e a orla santista'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'guaruja', 'ancora' => 'Pitangueiras, Enseada e a serra'],
    ],
];
