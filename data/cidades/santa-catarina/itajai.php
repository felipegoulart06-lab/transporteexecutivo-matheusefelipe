<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Itajaí',
    'geo' => ['lat' => -26.9078, 'lng' => -48.6619],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Itajaí',
    'seo' => [
        'title' => 'Traslado executivo em Itajaí: Centro, Fazenda e NVT',
        'description' => 'Motorista executivo em Itajaí para o Centro, Fazenda, Praia Brava e o aeroporto de Navegantes. Porto, rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro, na Fazenda e no aeroporto NVT',
        'og_description' => 'Traslado no porto catarinense: hotel na Fazenda, pauta no cais e o terminal de Navegantes.',
        'og_image_alt' => 'Sedan executivo em avenida de Itajaí',
    ],
    'kicker' => 'Vale do Itajaí · SC',
    'h1' => 'Da Fazenda ao porto sem perder a janela do NVT',
    'intro' => 'Itajaí concentra o porto, a Fazenda e o recorte até Navegantes. Hotel no Centro ou na Fazenda, reunião no cais e voo no Ministro Victor Konder (NVT) cabem no mesmo expediente se o motorista já saiu com a ordem da Beira-Rio e da ponte, não com o aceite do minuto.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Itajaí não é “pegar um carro no porto”',
            'texto' => 'Centro, Fazenda, Praia Brava e Cabeçudas não compartilham o mesmo recuo. Quem tem pauta no terminal portuário e check-out no hotel precisa de um motorista que já conhece o protocolo da cancela e o recuo da ponte, não o atalho do app.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque itajaiense mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Beira-Rio', 'texto' => 'Sede e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde.'],
                ['h3' => 'Fazenda e o shopping', 'texto' => 'Hotéis (Slaviero, similares) e torres. “Na Fazenda” não define o recuo da portaria.'],
                ['h3' => 'Praia Brava e Cabeçudas', 'texto' => 'Pernoite de orla. O recuo da praia não é o do porto; o ponto de espera entra no roteiro.'],
                ['h3' => 'Quando a pauta aponta para o NVT', 'texto' => 'O terminal fica em Navegantes, do outro lado do rio. Combinamos o voo e a margem da ponte.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta itajaiense mais pede',
        'itens' => [
            ['titulo' => 'Hotel na Fazenda → porto', 'texto' => 'Pauta no terminal. Envie o nome na portaria e o documento pedido.'],
            ['titulo' => 'Itajaí → NVT', 'texto' => 'O aeroporto de Navegantes não fica na porta da Fazenda. Combinamos o voo e a ponte.'],
            ['titulo' => 'Centro → Praia Brava', 'texto' => 'Visita à orla só se estiver no roteiro. O recuo da praia pede ponto de espera.'],
            ['titulo' => 'Hotel → Balneário Camboriú ou Blumenau', 'texto' => 'Quando a pauta vaza pela BR-101 ou pelo Vale, o recorte deixa de ser só urbano.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta o porto e o NVT',
    'faq' => [
        ['pergunta' => 'O aeroporto fica em Itajaí?', 'resposta' => 'O NVT fica em Navegantes, do outro lado do rio. O trecho até a Fazenda entra no roteiro com margem para a ponte.'],
        ['pergunta' => 'O motorista espera no NVT se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês entram no porto com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, a cancela não libera.'],
        ['pergunta' => 'Dá para ir a Balneário Camboriú depois do hotel?', 'resposta' => 'Sim, quando a orla entra no roteiro. Não é o mesmo recorte do porto; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte a Fazenda ao horário do NVT',
        'texto' => 'O orçamento de Itajaí sai sob consulta. Porto, orla e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Itajaí',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'santa-catarina', 'ancora' => 'Litoral, Vale e o recorte catarinense'],
        ['tipo' => 'cidade', 'estado' => 'santa-catarina', 'cidade' => 'balneario-camboriu', 'ancora' => 'Avenida Central, orla e o NVT'],
        ['tipo' => 'cidade', 'estado' => 'santa-catarina', 'cidade' => 'blumenau', 'ancora' => 'Centro, Vorstadt e o eixo do Vale'],
    ],
];
