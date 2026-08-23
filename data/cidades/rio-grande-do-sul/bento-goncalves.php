<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Bento Gonçalves',
    'geo' => ['lat' => -29.1662, 'lng' => -51.5105],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Bento Gonçalves',
    'seo' => [
        'title' => 'Vale dos Vinhedos: motorista em Bento, Cidade Alta e CXJ',
        'description' => 'Motorista em Bento Gonçalves para a Cidade Alta, Juventude e a RS-122. Vale dos Vinhedos só se estiver no roteiro; voo no CXJ ou no POA. Orçamento sob consulta.',
        'og_title' => 'Carro na Cidade Alta de Bento, na RS-122 e no CXJ',
        'og_description' => 'Traslado na Serra Gaúcha: Cidade Alta, Juventude e o vale só se a visita estiver combinada.',
        'og_image_alt' => 'Sedan executivo na Cidade Alta de Bento Gonçalves',
    ],
    'kicker' => 'Serra Gaúcha · RS',
    'h1' => 'Cidade Alta, vale dos vinhedos e a RS-122 — visita só se estiver no roteiro',
    'olho' => 'Bento Gonçalves sobe na Cidade Alta e só desce ao vale dos vinhedos se a visita estiver no roteiro. O motorista segura a RS-122 e o recuo da Juventude; o passageiro segura a pauta — o voo sai do CXJ, em Caxias, ou do POA, não da vinícola.',
    'capitulos' => [
        [
            'h2' => 'A Cidade Alta não se troca com o vale no mesmo recuo',
            'texto' => 'Cidade Alta concentra hotel, sede e o casario. Juventude pede outro recuo. O vale dos vinhedos é itinerário opcional: entra quando a visita à vinícola estiver combinada, com horário de estrada local — não como “já que estamos em Bento”. Caxias do Sul cola pela RS-122; Gramado não se improvisa. O orçamento sai sob consulta.',
        ],
        [
            'h2' => 'Onde o embarque bentogonçalvense mais se concentra',
            'itens' => [
                ['h3' => 'Cidade Alta', 'texto' => 'Sede, hotel e o desnível. Informe o prédio; o recuo do casario não é o da Juventude nem o da vinícola.'],
                ['h3' => 'Juventude', 'texto' => 'Pauta residencial e o eixo interno. “Na Juventude” não define a entrada nem o ponto de espera.'],
                ['h3' => 'Vale dos Vinhedos — só com visita no recado', 'texto' => 'Itinerário à parte. Envie a vinícola, o horário e se há cancela. Sem isso, o carro não desce o vale.'],
            ],
        ],
        [
            'h2' => 'Rotas de trabalho, RS-122 e o salto para Caxias',
            'texto' => 'Hotel na Cidade Alta → Juventude → vale só se a visita estiver no roteiro. O clássico de serra é Bento → Caxias do Sul pela RS-122, rumo ao Hugo Cantergiani (CXJ). Porto Alegre e o POA entram como viagem, não como corrida urbana.',
        ],
        [
            'h2' => 'CXJ em Caxias ou POA na capital — a vinícola não tem saguão',
            'texto' => 'O terminal mais próximo com malha útil costuma ser o CXJ, em Caxias do Sul. O POA cobre o que a pauta da capital pedir. Combinamos o voo. Até a Cidade Alta, a RS-122 e o desnível da serra pesam mais que o pin da vinícola.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que evitam atraso na Serra Gaúcha',
        'itens' => [
            ['num' => '01', 'titulo' => 'Bairro e prédio', 'texto' => 'Cidade Alta ou Juventude. “Em Bento” não define o recuo.'],
            ['num' => '02', 'titulo' => 'Vale só se estiver no roteiro', 'texto' => 'Nome da vinícola e horário. Sem visita combinada, o carro não desce o vale.'],
            ['num' => '03', 'titulo' => 'CXJ ou POA', 'texto' => 'Diga o voo. Caxias e a capital são recortes diferentes. Orçamento sob consulta.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta a Cidade Alta — e o vale só se couber',
    'faq' => [
        ['pergunta' => 'O vale dos vinhedos entra automaticamente no traslado?', 'resposta' => 'Não. A visita só entra se estiver no roteiro. Informe a vinícola e o horário; sem isso, o recuo permanece na Cidade Alta ou na Juventude.'],
        ['pergunta' => 'Bento Gonçalves tem aeroporto comercial?', 'resposta' => 'O voo prático costuma ser o CXJ, em Caxias do Sul, pela RS-122, ou o POA, na capital. Informe o terminal; o recorte de serra muda o horário.'],
        ['pergunta' => 'Vocês fazem Cidade Alta e Juventude no mesmo dia?', 'resposta' => 'Sim. Informe a ordem e o nome do hotel. O vale só se a visita estiver combinada.'],
        ['pergunta' => 'Dá para seguir a Caxias do Sul depois do hotel?', 'resposta' => 'Sim, como viagem pela RS-122. Não é o mesmo recorte da Cidade Alta; o horário sai sob consulta.'],
        ['pergunta' => 'Gramado ou Canela entram no mesmo pedido?', 'resposta' => 'Entram como viagem de serra, não como extensão urbana de Bento. O orçamento sai à parte.'],
    ],
    'cta' => [
        'titulo' => 'Inclua o vale só se a visita estiver no roteiro',
        'texto' => 'O orçamento de Bento Gonçalves sai sob consulta. Cidade Alta, RS-122 e CXJ no mesmo WhatsApp.',
        'botao' => 'Pedir traslado em Bento Gonçalves',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-grande-do-sul', 'ancora' => 'Serra, Porto e o recorte gaúcho'],
        ['tipo' => 'cidade', 'estado' => 'rio-grande-do-sul', 'cidade' => 'caxias-do-sul', 'ancora' => 'Centro, São Pelegrino e o CXJ'],
        ['tipo' => 'cidade', 'estado' => 'rio-grande-do-sul', 'cidade' => 'porto-alegre', 'ancora' => 'Moinhos, Centro Histórico e o Salgado Filho'],
    ],
];
