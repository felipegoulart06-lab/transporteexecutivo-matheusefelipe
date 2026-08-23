<?php

declare(strict_types=1);

return [
    'layout' => 'rio',
    'cidade_nome' => 'Itumbiara',
    'geo' => ['lat' => -18.4136, 'lng' => -49.217],
    'imagem' => 'centro-oeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Itumbiara',
    'seo' => [
        'title' => 'Paranaíba: traslado em Itumbiara, ponte e UDI',
        'description' => 'Traslado em Itumbiara para o Centro, a ponte do Paranaíba e o aeroporto UDI, em Uberlândia. A BR-153 articula o trecho; orçamento sob consulta.',
        'og_title' => 'Motorista na ponte de Itumbiara, no Centro e no UDI',
        'og_description' => 'Carro no Paranaíba: hotel no Centro, recuo da ponte e o terminal de Uberlândia — sem código ITR.',
        'og_image_alt' => 'Sedan executivo junto à ponte do Paranaíba, em Itumbiara',
    ],
    'kicker' => 'Vale do Paranaíba · GO',
    'h1' => 'A ponte do Paranaíba não é o mesmo recuo do Centro — o UDI pede a 153',
    'corrente' => [
        [
            'h2' => 'A ponte separa Goiás de Minas; o voo prático é o UDI',
            'texto' => 'Itumbiara encosta no Paranaíba e na ponte que leva a Minas. O campo de pouso local não é o portão comercial da pauta: o voo que a agenda usa é o Tenente Coronel Aviador César Bombonato (UDI), em Uberlândia, pela BR-153. Não se usa o código ITR — esse IATA é de Imperatriz, no Maranhão.',
        ],
        [
            'h2' => 'Pontos da margem goiana que a agenda mais cita',
            'itens' => [
                [
                    'h3' => 'Centro e o comércio da ponte',
                    'texto' => 'Sede, hotel e o calçadão. Informe o prédio; o recuo do Centro não é o da cabeceira da ponte nem o da saída da 153.',
                ],
                [
                    'h3' => 'Avenida Afonso Pena e o eixo urbano',
                    'texto' => 'Pauta interna, clínicas e o hotel de passagem. A numeração se repete; o nome da rua entra no recado.',
                ],
                [
                    'h3' => 'Cabeceira da ponte',
                    'texto' => 'Acesso ao Paranaíba e ao lado mineiro. Quando a pauta mistura ponte, Centro e UDI, a ordem da BR-153 pesa mais que o mapa.',
                ],
            ],
        ],
        [
            'h2' => 'César Bombonato — UDI em Uberlândia, pela 153',
            'texto' => 'O portão comercial da pauta é o UDI, em Uberlândia — não o campo de Itumbiara e não o ITR de Imperatriz. Combinamos o voo. Até o Centro itumbiarense o intervalo é o da BR-153; a margem sai do hotel, não da linha reta no mapa.',
        ],
        [
            'h2' => 'Rio Verde, Uberlândia e o salto que a ponte não resolve sozinha',
            'texto' => 'Hotel no Centro → ponte → UDI só se a ordem estiver escrita. Rio Verde entra pela malha do sudoeste goiano, como viagem. O hotel é embarque, sem convênio de porta. O orçamento sai sob consulta.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem cruza a ponte rumo ao UDI',
    'faq' => [
        [
            'pergunta' => 'Itumbiara usa o código ITR?',
            'resposta' => 'Não. ITR é o aeroporto de Imperatriz, no Maranhão. O voo prático da pauta itumbiarense é o UDI, em Uberlândia.',
        ],
        [
            'pergunta' => 'O aeroporto comercial fica em Itumbiara?',
            'resposta' => 'O campo local não é o portão comercial. Combinamos o UDI, em Uberlândia, pela BR-153, com margem de rodovia.',
        ],
        [
            'pergunta' => 'A ponte e o Centro são o mesmo recuo?',
            'resposta' => 'Não. A cabeceira do Paranaíba e o calçadão do Centro pedem pontos distintos. Informe os dois endereços no roteiro.',
        ],
        [
            'pergunta' => 'Vocês fazem Centro, ponte e o UDI no mesmo dia?',
            'resposta' => 'Sim. Informe a ordem. A BR-153 pede margem própria; um motorista articula os três se o voo já estiver no pedido.',
        ],
        [
            'pergunta' => 'Dá para seguir a Rio Verde depois da reunião no Centro?',
            'resposta' => 'Sim, como viagem pelo sudoeste goiano. Não é o mesmo recorte da ponte; o horário sai sob consulta.',
        ],
    ],
    'cta' => [
        'titulo' => 'A ponte e o UDI no mesmo pedido — sem código ITR',
        'texto' => 'O orçamento de Itumbiara sai sob consulta. Centro, Paranaíba e Uberlândia no mesmo recado.',
        'botao' => 'Pedir traslado em Itumbiara',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'goias', 'ancora' => 'Goiânia, o sudoeste e o Paranaíba'],
        ['tipo' => 'cidade', 'estado' => 'goias', 'cidade' => 'rio-verde', 'ancora' => 'Centro, agro e o General Leite de Castro'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'uberlandia', 'ancora' => 'Centro, Umuarama e o aeroporto UDI'],
    ],
];
