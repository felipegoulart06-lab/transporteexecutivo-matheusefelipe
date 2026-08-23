<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Petrópolis',
    'geo' => ['lat' => -22.52, 'lng' => -43.1926],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Petrópolis',
    'seo' => [
        'title' => 'Traslado executivo em Petrópolis: Centro, Quitandinha e serra',
        'description' => 'Motorista executivo em Petrópolis para o Centro Histórico, Quitandinha, Itaipava e a BR-040 rumo ao Rio. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro Histórico, no Quitandinha e na serra',
        'og_description' => 'Traslado na cidade imperial: hotel, palácio e o recuo da serra rumo ao SDU.',
        'og_image_alt' => 'Sedan executivo em rua do Centro Histórico de Petrópolis',
    ],
    'kicker' => 'Região Serrana · RJ',
    'h1' => 'Do Quitandinha ao Centro sem perder a janela da serra',
    'preambulo' => 'Petrópolis não é bairro do Rio: é a cidade imperial na serra. Hotel no Centro ou em Itaipava, pauta no Palácio e o trecho até o Santos Dumont cabem no mesmo expediente se o motorista já conhece a Washington Luís e o recuo estreito do Centro Histórico.',
    'artigos' => [
        [
            'h2' => 'O Centro Histórico pede outro tipo de recuo',
            'texto' => 'Rua do Imperador, Palácio de Cristal e o Museu Imperial não se navegam como avenida da orla. Informe o hotel (Grande Hotel, similar) e a entrada. “Perto do palácio” não coloca o carro na porta certa nem no acesso de serviço.',
        ],
        [
            'h2' => 'Quitandinha, Itaipava e o silêncio da agenda',
            'texto' => 'O palácio-hotel e Itaipava concentram evento e pernoite. O recuo pede o nome do estabelecimento. Quando a pauta inclui Teresópolis ou o Vale do Cuiabá, o trecho deixa o Centro e sai com margem de serra.',
        ],
        [
            'h2' => 'A serra no relógio do Rio — SDU e GIG',
            'texto' => 'Petrópolis não tem saguão próprio. Combinamos se o voo é Santos Dumont ou Galeão. A BR-040 e a Washington Luís mudam o intervalo mais que o mapa admite; a margem sai do hotel, não do saguão.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em Petrópolis',
        'itens' => [
            ['h3' => 'Centro Histórico e o Palácio', 'texto' => 'Informe o hotel e o ponto de espera. O calçamento não admite recuo improvisado na Rua do Imperador.'],
            ['h3' => 'Quitandinha e o evento', 'texto' => 'Nome na lista da portaria. O palácio-hotel não compartilha o recuo do Centro.'],
            ['h3' => 'Itaipava e o distrito', 'texto' => 'Pernoite e jantar. “Em Itaipava” não define a entrada da pousada.'],
            ['h3' => 'Quando a pauta aponta para o Rio', 'texto' => 'SDU ou GIG, com número do voo. O trecho serra–cidade não é o mesmo pedido urbano.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem desce a serra',
    'faq' => [
        ['pergunta' => 'O motorista desce a serra até o Santos Dumont?', 'resposta' => 'Sim, quando o SDU entra no roteiro. A BR-040 pede margem; não é corrida instantânea do Centro Histórico.'],
        ['pergunta' => 'Vocês buscam no Galeão e sobem a Petrópolis?', 'resposta' => 'Sim, com o número do voo. A espera no GIG faz parte do trecho quando o voo está no roteiro.'],
        ['pergunta' => 'Dá para ir ao Museu Imperial e ao Quitandinha no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. O calçamento do Centro e o recuo do palácio-hotel são pontos distintos.'],
        ['pergunta' => 'Vocês fazem Itaipava e Teresópolis no mesmo expediente?', 'resposta' => 'Sim, quando os dois entram no roteiro. Não é o mesmo recorte do Centro; o horário de serra sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Envie o hotel junto com o terminal do Rio',
        'texto' => 'O orçamento de Petrópolis sai sob consulta. Palácio, serra e voo no mesmo recado.',
        'botao' => 'Solicitar carro em Petrópolis',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-de-janeiro', 'ancora' => 'O recorte fluminense além da capital'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Santos Dumont, Galeão e a Zona Sul'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'juiz-de-fora', 'ancora' => 'Centro, São Mateus e o aeroporto IZA'],
    ],
];
