<?php

declare(strict_types=1);

return [
    'layout' => 'gaucha',
    'cidade_nome' => 'Araraquara',
    'geo' => ['lat' => -21.7845, 'lng' => -48.1786],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Araraquara',
    'seo' => [
        'title' => 'Carro em Araraquara: Fonte, campus UNESP e o AQA',
        'description' => 'Carro com motorista em Araraquara para Fonte, campus UNESP, Vila Xavier e Centro. O AQA entra no mesmo expediente, sem trocar de motorista. Valor sob consulta.',
        'og_title' => 'Fonte, UNESP e o AQA no mesmo expediente',
        'og_description' => 'Traslado em Araraquara: hotel na Fonte, pauta no campus e o voo no Bartolomeu de Gusmão — um motorista só.',
        'og_image_alt' => 'Sedan executivo na Avenida São Paulo, em Araraquara',
    ],
    'kicker' => 'Centro paulista · SP',
    'h1' => 'Fonte, campus e o AQA no mesmo expediente — sem trocar de motorista',
    'coluna' => [
        'h2' => 'Araraquara articula Fonte, UNESP e saguão — o app articula só o pin',
        'texto' => [
            'Fonte, UNESP e o Bartolomeu de Gusmão (AQA) entram no mesmo expediente quando o motorista já saiu com a ordem da Bandeirantes, não quando o passageiro chama o carro na saída da aula. Vila Xavier e o Centro pedem logradouro. Os voos do AQA ligam em geral a Viracopos; o saguão local não se improvisa no GPS da São Paulo.',
            'Hotel na Fonte ou no Centro entra só como embarque. A portaria do campus pede bloco e documento. São Carlos e Ribeirão Preto entram como viagem quando a pauta vaza; o mesmo motorista cobre o salto se o trecho já estiver escrito — não se o pedido nascer depois da defesa ou da visita.',
        ],
    ],
    'lateral' => [
        'h2' => 'Pontos que o pedido araraquarense mais cita',
        'itens' => [
            [
                'h3' => 'Fonte e o recorte residencial',
                'texto' => 'Hotel de embarque e o bairro. Informe o nome da portaria; “na Fonte” não define o recuo.',
            ],
            [
                'h3' => 'UNESP e Vila Xavier',
                'texto' => 'Campus, bloco e o recorte até Vila Xavier. A lista da portaria entra junto com o horário da banca ou da reunião.',
            ],
            [
                'h3' => 'Bartolomeu de Gusmão — AQA',
                'texto' => 'Terminal da cidade, com malha típica rumo a VCP. Combinamos o voo; o motorista permanece no expediente se o retorno já estiver no roteiro.',
            ],
        ],
    ],
    'faixa' => [
        'h2' => 'Quando a pauta cruza a Washington Luís rumo a São Carlos',
        'texto' => 'Fonte → campus → AQA fecha com um motorista só se a ordem já estiver no recado. São Carlos pela SP-310 e Ribeirão Preto pela malha do interior entram como viagem, não como segunda corrida urbana. A espera no desembarque do AQA integra o trecho quando o pouso está no itinerário — o passageiro não troca de carro no meio do dia por falta de combinado.',
    ],
    'faq_h2' => 'Fonte, campus e AQA — o que costuma faltar',
    'faq' => [
        ['pergunta' => 'O AQA voa para onde — e o motorista permanece no mesmo dia?', 'resposta' => 'A malha típica liga Araraquara a Viracopos (VCP). Se o retorno ou o trecho urbano já estiver no roteiro, o mesmo motorista cobre o expediente; não é um carro novo a cada perna.'],
        ['pergunta' => 'A UNESP libera o recuo sem bloco na lista?', 'resposta' => 'Quase nunca. Envie bloco, visitante e o documento pedido. Sem isso, a portaria do campus não abre.'],
        ['pergunta' => 'Fonte e Vila Xavier são o mesmo pedido do Centro?', 'resposta' => 'Não. São recuos distintos. O nome do hotel ou da rua entra no pedido; o pin “Araraquara” não basta.'],
        ['pergunta' => 'São Carlos entra no expediente sem trocar de motorista?', 'resposta' => 'Entra, quando São Carlos já está no itinerário. A Washington Luís pede margem; o horário sai sob consulta.'],
        ['pergunta' => 'Hotel no Centro serve só de embarque?', 'resposta' => 'Sim. O estabelecimento entra pelo nome da portaria, sem convênio de porta. Informe se o carro espera enquanto a pauta na Fonte corre.'],
    ],
    'cta' => [
        'titulo' => 'Fonte, campus e AQA com o mesmo motorista',
        'texto' => 'UNESP, Fonte e o Bartolomeu de Gusmão no mesmo recado. Sem trocar de carro no meio do dia.',
        'botao' => 'Reservar carro em Araraquara',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-carlos', 'ancora' => 'Centro, campus USP/UFSCar e o QSC'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'ribeirao-preto', 'ancora' => 'Centro, Jardim Irajá e o aeroporto RAO'],
    ],
];
