<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Guarulhos',
    'geo' => ['lat' => -23.4538, 'lng' => -46.5333],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Guarulhos',
    'seo' => [
        'title' => 'Traslado executivo em Guarulhos: Centro, Cumbica e GRU',
        'description' => 'Motorista executivo em Guarulhos para o Centro, Macedo, Vila Augusta, Cumbica e o aeroporto de Guarulhos. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro de Guarulhos e no aeroporto GRU',
        'og_description' => 'Traslado em Guarulhos: hotel próximo a Cumbica, pauta no Centro e os terminais de GRU.',
        'og_image_alt' => 'Sedan executivo em via de acesso ao aeroporto de Guarulhos',
    ],
    'kicker' => 'Cumbica e a cidade · SP',
    'h1' => 'Do terminal de GRU ao Centro sem perder o recuo de Cumbica',
    'preambulo' => 'Guarulhos não é bairro da capital: é o município do Aeroporto Internacional de São Paulo (GRU). Hotel em Cumbica, reunião no Centro e o saguão certo do terminal cabem no mesmo expediente se o motorista já conhece a Monteiro Lobato e o protocolo de cada terminal.',
    'artigos' => [
        [
            'h2' => 'O município do GRU pede terminal, não “no aeroporto”',
            'texto' => 'Terminais 1, 2 e 3 não compartilham o mesmo recuo. Hotel próximo a Cumbica (Ibis, similar) e pauta no Centro ou no Macedo pedem o número do voo e o terminal no roteiro. “Me busca no GRU” não coloca o carro na porta certa.',
        ],
        [
            'h2' => 'Centro, Vila Augusta e o silêncio da espera',
            'texto' => 'Sede, clínica e o eixo da Paes de Barros. O recuo pede rua e número. Quando a comitiva dorme em Guarulhos e reúne na Faria Lima, o trecho cruza o município — a margem sai de Cumbica, não da Marginal.',
        ],
        [
            'h2' => 'Guarulhos — GRU no relógio da pauta',
            'texto' => 'O Aeroporto Internacional de São Paulo fica em Cumbica. Combinamos voo, terminal e ponto de encontro. A espera no desembarque integra o trecho GRU. Até o Centro de Guarulhos o intervalo é urbano; até a capital, a Dutra e a Ayrton Senna pesam mais que o mapa.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em Guarulhos',
        'itens' => [
            ['h3' => 'Terminal 1, 2 ou 3', 'texto' => 'Informe o número do voo. Os três recuos não se trocam no mesmo cartaz.'],
            ['h3' => 'Hotel em Cumbica ou no Centro', 'texto' => 'O nome do hotel evita a volta na Monteiro Lobato. “Perto do aeroporto” não basta.'],
            ['h3' => 'Centro, Macedo e Vila Augusta', 'texto' => 'Pauta urbana do município. Informe o prédio; a Paes de Barros muda o sentido no pico.'],
            ['h3' => 'Quando a pauta aponta para a capital', 'texto' => 'GRU → Faria Lima ou Paulista não é o mesmo pedido do Centro de Guarulhos. O orçamento sai à parte.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pousa em GRU',
    'faq' => [
        ['pergunta' => 'O motorista espera no GRU se o voo internacional atrasar?', 'resposta' => 'Sim. Acompanhamos o painel com o número do voo. A espera no terminal integra o trecho GRU.'],
        ['pergunta' => 'Vocês distinguem os terminais 2 e 3?', 'resposta' => 'Sim. O terminal entra no roteiro junto com o voo. Não improvisamos o recuo no saguão vizinho.'],
        ['pergunta' => 'Dá para ir do hotel em Cumbica ao Centro de Guarulhos?', 'resposta' => 'Sim. Em Guarulhos, é trecho urbano do município. Informe o nome do hotel e o prédio no Centro.'],
        ['pergunta' => 'O carro segue daqui à Faria Lima no mesmo dia?', 'resposta' => 'Sim, quando a capital entra no roteiro. Não é o mesmo recorte de Guarulhos; a Dutra pede margem própria.'],
    ],
    'cta' => [
        'titulo' => 'Envie o terminal junto com o horário do voo',
        'texto' => 'O orçamento de Guarulhos sai sob consulta. Cumbica, Centro e GRU no mesmo recado.',
        'botao' => 'Solicitar carro em Guarulhos',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e o miolo da capital'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'campinas', 'ancora' => 'Cambuí, Unicamp e o Viracopos'],
    ],
];
