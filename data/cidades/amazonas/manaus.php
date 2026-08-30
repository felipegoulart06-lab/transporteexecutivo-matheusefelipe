<?php

declare(strict_types=1);

return [
    'layout' => 'rio',
    'cidade_nome' => 'Manaus',
    'geo' => ['lat' => -3.11903, 'lng' => -60.0217],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Manaus',
    'seo' => [
        'title' => 'Traslado executivo em Manaus: Centro, Adrianópolis e MAO',
        'description' => 'Motorista executivo em Manaus para Adrianópolis, Ponta Negra, Distrito Industrial e o aeroporto Eduardo Gomes. Orçamento sob consulta.',
        'og_title' => 'Carro com motorista entre Adrianópolis, Ponta Negra e o MAO',
        'og_description' => 'Traslado executivo na capital amazonense: hotel, Zona Franca e o terminal Eduardo Gomes.',
        'og_image_alt' => 'Sedan executivo em via urbana de Manaus ao anoitecer',
    ],
    'kicker' => 'Capital amazonense · AM',
    'h1' => 'Do Eduardo Gomes à Ponta Negra sem perder a janela da planta',
    'corrente' => [
        [
            'h2' => 'Manaus não tem atalho terrestre para o resto do país — o relógio é o do voo',
            'texto' => 'Quem chega à capital amazonense chega de avião. O Aeroporto Eduardo Gomes (MAO) é a porta. Hotel em Adrianópolis, jantar na Ponta Negra e visita ao Distrito Industrial cabem no mesmo roteiro se o motorista já saiu com a ordem da ponte e da AM-010, não com o aceite do minuto.',
        ],
        [
            'h2' => 'Três margens da agenda manauara',
            'itens' => [
                ['h3' => 'Adrianópolis e Vieiralves', 'texto' => 'Hotel e escritório. Informe o condomínio; as vias internas se repetem no nome e mudam no acesso.'],
                ['h3' => 'Ponta Negra', 'texto' => 'Pernoite e evento. O trecho até o Centro alonga no fim da tarde; a margem sai do hotel, não da orla.'],
                ['h3' => 'Distrito Industrial', 'texto' => 'Planta da Zona Franca. Protocolo de portaria e horário de turno entram no roteiro junto com o voo de volta.'],
            ],
        ],
        [
            'h2' => 'Eduardo Gomes — MAO',
            'texto' => 'O terminal internacional e doméstico é o começo e o fim da maioria das pautas. Combinamos o voo. A espera no desembarque integra o trecho; o passageiro não cruza o saguão atrás de um cartaz genérico.',
        ],
        [
            'h2' => 'Ponte e chuva no cálculo — sem promessa de minuto',
            'texto' => 'A Ponte Rio Negro e o temporal da tarde mudam o intervalo. Não vendemos pontualidade de aplicativo. Vendemos um motorista que saiu com margem e com o endereço da portaria.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Eduardo Gomes',
    'faq' => [
        ['pergunta' => 'O aeroporto de Manaus fica longe de Adrianópolis?', 'resposta' => 'É trecho urbano, sujeito a chuva e a pico. Marcamos margem; não prometemos o minuto do mapa.'],
        ['pergunta' => 'O motorista espera no MAO se o voo atrasar?', 'resposta' => 'Sim. Em Manaus, o número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Em Manaus, vocês entram no Distrito Industrial com protocolo?', 'resposta' => 'Sim. Envie o nome na lista e o documento da portaria. Sem isso, o recuo da planta não libera.'],
        ['pergunta' => 'Dá para fazer Ponta Negra, Centro e o aeroporto no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. A ponte e o temporal da tarde pesam mais que a distância no mapa.'],
    ],
    'cta' => [
        'titulo' => 'Coloque o MAO e a portaria da planta no mesmo recado',
        'texto' => 'O orçamento de Manaus sai sob consulta. Hotel, Zona Franca e voo no mesmo WhatsApp.',
        'botao' => 'Pedir traslado em Manaus',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'amazonas', 'ancora' => 'O recorte amazonense além da capital'],
        ['tipo' => 'cidade', 'estado' => 'distrito-federal', 'cidade' => 'brasilia', 'ancora' => 'Eixo Monumental, Lago e o BSB'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'A conexão com a capital paulista'],
    ],
];
