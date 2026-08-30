<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Porto Velho',
    'geo' => ['lat' => -8.76116, 'lng' => -63.9004],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Porto Velho',
    'seo' => [
        'title' => 'PVH, Caiari e a Madeira-Mamoré em Porto Velho',
        'description' => 'Motorista em Porto Velho para o Caiari, o complexo da Madeira-Mamoré, o porto no Madeira e o Jorge Teixeira. A BR-364 rumo ao interior sai sob consulta, sem minuto fixo.',
        'og_title' => 'Carro no Caiari, na ferrovia histórica e no aeroporto PVH',
        'og_description' => 'Traslado rondoniense: hotel no Caiari, pauta no Palácio Rio Madeira e o terminal Governador Jorge Teixeira.',
        'og_image_alt' => 'Sedan executivo em avenida de Porto Velho próxima ao rio Madeira',
    ],
    'kicker' => 'Capital rondoniense · RO',
    'h1' => 'Do Jorge Teixeira ao Caiari sem confundir porto e ferrovia',
    'intro' => 'Porto Velho nasceu no porto do Madeira e na Estrada de Ferro Madeira-Mamoré; hoje o deslocamento executivo se organiza pela BR-364 e pelas avenidas do Caiari. Hotel no Centro, pauta no Palácio Rio Madeira (Av. Farquar, Pedrinhas) e voo no Governador Jorge Teixeira (PVH) cabem no mesmo expediente se o motorista já saiu com essa malha, não com o aceite do minuto.',
    'blocos' => [
        [
            'h2' => 'Por que o pedido na capital não é “pegar um carro no porto”',
            'texto' => 'O complexo da Madeira-Mamoré, o cais e o Caiari são vizinhos no papel e distintos no recuo. A Sete de Setembro não é a Farquar do palácio. Quem tem check-out no hotel e gabinete em Pedrinhas precisa de um motorista que já conhece o sentido da via; o atalho da chuva no Madeira não substitui o roteiro.',
        ],
        [
            'h2' => 'Quadrantes da capital que mais geram embarque',
            'itens' => [
                ['h3' => 'Caiari e o Centro', 'texto' => 'Hotéis, comércio e o calçamento junto ao rio. Informe o prédio; o Centro mistura sede antiga e hotel em quadras curtas.'],
                ['h3' => 'Palácio Rio Madeira — Farquar', 'texto' => 'Sede do governo em Pedrinhas, na Av. Farquar. Não é o recuo do Caiari. Diga o acesso de serviço.'],
                ['h3' => 'Madeira-Mamoré e o porto', 'texto' => 'Visita à ferrovia histórica ou pauta no cais só se estiver no roteiro. Combinamos o ponto de espera; o calçamento do complexo não admite recuo improvisado.'],
                ['h3' => 'Aeroporto — PVH', 'texto' => 'O Governador Jorge Teixeira fica no município de Porto Velho, no bairro Aeroporto, com acesso pela Av. Jorge Teixeira e pela Lauro Sodré. Combinamos o voo. A espera no desembarque entra no trecho.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta porto-velhense mais pede',
        'itens' => [
            ['titulo' => 'PVH → hotel no Caiari → Palácio Rio Madeira', 'texto' => 'Pouso, pernoite e pauta institucional em Pedrinhas. Informe se o carro espera na Farquar.'],
            ['titulo' => 'Centro → complexo da Madeira-Mamoré', 'texto' => 'Visita à ferrovia só com ponto combinado. Não é escala automática entre o hotel e o porto.'],
            ['titulo' => 'Hotel → Ariquemes ou Ji-Paraná pela BR-364', 'texto' => 'Quando a pauta sai da capital, o trecho entra como viagem. Orçamento à parte, com horário de estrada sob consulta.'],
            ['titulo' => 'Porto Velho rumo ao Acre pela malha da 364', 'texto' => 'Fronteira estadual. Não é o mesmo recorte do Caiari; o intervalo sai sob consulta, sem minuto inventado.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Jorge Teixeira',
    'faq' => [
        ['pergunta' => 'O Jorge Teixeira fica no complexo da Madeira-Mamoré?', 'resposta' => 'Não. O PVH fica no bairro Aeroporto. A ferrovia histórica e o cais ficam no recorte do Caiari, junto ao Madeira.'],
        ['pergunta' => 'Caiari e Palácio Rio Madeira cabem no mesmo trecho do PVH?', 'resposta' => 'Cabem, se a ordem já estiver no pedido. O palácio é na Farquar, em Pedrinhas — não na porta do Caiari.'],
        ['pergunta' => 'A BR-364 rumo a Ariquemes sai como hora urbana do Centro?', 'resposta' => 'Não. É viagem. Informe o destino; o horário sai sob consulta, sem minuto fixo de estrada.'],
        ['pergunta' => 'O porto no Madeira usa o mesmo recuo do Centro?', 'resposta' => 'Não. Cais e calçadão pedem ponto de espera próprio. “Perto da Madeira-Mamoré” não escolhe a porta.'],
    ],
    'cta' => [
        'titulo' => 'Coloque o PVH, o Caiari e a Farquar no mesmo recado',
        'texto' => 'O orçamento de Porto Velho sai sob consulta. Madeira, palácio e número do voo no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Porto Velho',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rondonia', 'ancora' => 'Ji-Paraná, Ariquemes e o recorte rondoniense'],
        ['tipo' => 'cidade', 'estado' => 'acre', 'cidade' => 'rio-branco', 'ancora' => 'Via Verde, Bosque e o Plácido de Castro'],
        ['tipo' => 'cidade', 'estado' => 'amazonas', 'cidade' => 'manaus', 'ancora' => 'Adrianópolis, Zona Franca e o MAO'],
    ],
];
