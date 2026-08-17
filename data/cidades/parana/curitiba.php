<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Curitiba',
    'geo' => ['lat' => -25.4284, 'lng' => -49.2733],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Curitiba',
    'seo' => [
        'title' => 'Carro executivo em Curitiba: Centro Cívico, Batel e CWB',
        'description' => 'Motorista executivo em Curitiba para Batel, Centro Cívico, Água Verde e o aeroporto Afonso Pena. Horário combinado e orçamento sob consulta.',
        'og_title' => 'Traslado executivo na malha de Curitiba e no aeroporto CWB',
        'og_description' => 'Carro com motorista entre o Batel, o Centro Cívico e São José dos Pinhais, sem improviso de aplicativo.',
        'og_image_alt' => 'Carro executivo preto em avenida arborizada de Curitiba',
    ],
    'kicker' => 'Capital paranaense · PR',
    'h1' => 'A malha de Curitiba no relógio do board — não no do ônibus',
    'intro' => 'Curitiba é legível no mapa e traiçoeira no horário de pico das canaletas. O motorista executivo não compete com o BRT: ele tira o passageiro da troca de modal entre o Batel e o Afonso Pena.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento executivo aqui não é “pegar um carro”',
            'texto' => 'A cidade foi desenhada para o transporte coletivo. Quem chega de voo em São José dos Pinhais e tem reunião no Centro Cívico precisa de um recuo de prédio, não de um ponto de ônibus. O carro entra como extensão da pauta.',
        ],
        [
            'h2' => 'Quadrantes que mais geram embarque',
            'itens' => [
                ['h3' => 'Batel e Água Verde', 'texto' => 'Hotéis e escritórios. Informe o nome do condomínio; as vias paralelas à 7 de Setembro confundem quem vem do aeroporto pela primeira vez.'],
                ['h3' => 'Centro Cívico e Cabral', 'texto' => 'Pauta de governo e sede regional. O acesso muda com o sentido da via no fim da tarde.'],
                ['h3' => 'Ecoville e Campo Comprido', 'texto' => 'Torres e hotel de passagem. Útil quando a comitiva dorme longe do Centro e reúne cedo no Batel.'],
                ['h3' => 'São José dos Pinhais — CWB', 'texto' => 'O Afonso Pena não fica no Batel. O trecho até o terminal entra no roteiro com o número do voo.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Três combinações que a pauta curitibana repete',
        'itens' => [
            ['titulo' => 'Hotel no Batel → Afonso Pena', 'texto' => 'Saída com margem para a Linha Verde. O check-in aéreo não espera o semáforo da 114.'],
            ['titulo' => 'CWB → Centro Cívico', 'texto' => 'Desembarque e reunião no mesmo turno. Combinamos o saguão e a entrada do prédio.'],
            ['titulo' => 'Água Verde → Ecoville no mesmo dia', 'texto' => 'Dois polos, um motorista. A modalidade por hora evita a segunda chamada no frio da tarde.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Afonso Pena',
    'faq' => [
        ['pergunta' => 'O aeroporto de Curitiba fica na capital?', 'resposta' => 'O Afonso Pena (CWB) fica em São José dos Pinhais. O trecho até o Batel ou o Centro Cívico entra no roteiro com margem.'],
        ['pergunta' => 'O motorista espera se o voo atrasar?', 'resposta' => 'Sim, com o número do voo no pedido. A espera no terminal faz parte do trecho CWB.'],
        ['pergunta' => 'Dá para ir do Batel ao Centro Cívico e voltar ao hotel?', 'resposta' => 'Sim. Informe se o carro permanece. No pico das canaletas, um único motorista rende mais que dois aplicativos.'],
        ['pergunta' => 'Vocês entram em condomínio do Ecoville?', 'resposta' => 'Sim, com nome na lista da portaria. Envie o documento pedido pelo condomínio com antecedência.'],
    ],
    'cta' => [
        'titulo' => 'Coloque o CWB e o Batel no mesmo recado',
        'texto' => 'O orçamento de Curitiba sai sob consulta, com embarque e voo — se houver — no roteiro.',
        'botao' => 'Pedir motorista em Curitiba',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'parana', 'ancora' => 'Foz, Londrina e o recorte paranaense'],
        ['tipo' => 'cidade', 'estado' => 'rio-grande-do-sul', 'cidade' => 'porto-alegre', 'ancora' => 'Moinhos, Centro Histórico e o Salgado Filho'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'A rotina da capital paulista com motorista'],
    ],
];
