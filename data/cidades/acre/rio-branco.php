<?php

declare(strict_types=1);

return [
    'layout' => 'rio',
    'cidade_nome' => 'Rio Branco',
    'geo' => ['lat' => -9.97499, 'lng' => -67.8243],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Rio Branco',
    'seo' => [
        'title' => 'Motorista executivo em Rio Branco: centro, Gameleira e RBR',
        'description' => 'Carro com motorista em Rio Branco para o Centro, Gameleira, Bosque, Second Precinct e o aeroporto Plácido de Castro. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo entre o Centro, a Gameleira e o RBR',
        'og_description' => 'Motorista para agendas em Rio Branco: hotel, palácio, Mercado Velho e o terminal acreano.',
        'og_image_alt' => 'Sedan executivo em via urbana de Rio Branco ao entardecer',
    ],
    'kicker' => 'Capital acreana · AC',
    'h1' => 'Do Plácido de Castro à Gameleira sem perder a pauta do palácio',
    'corrente' => [
        [
            'h2' => 'Rio Branco se organiza pelo rio e pela BR-364 — o relógio é o do voo',
            'texto' => 'Quem chega à capital acreana quase sempre pousa no Aeroporto Internacional de Rio Branco — Plácido de Castro (RBR), no município vizinho de Senador Guiomard. O trecho até o Centro, o Bosque ou a Gameleira cabe no mesmo expediente se o motorista já saiu com a ordem da via, não com o aceite do minuto.',
        ],
        [
            'h2' => 'Pontos da cidade que a agenda acreana mais cita',
            'itens' => [
                ['h3' => 'Centro e o Palácio Rio Branco', 'texto' => 'Sede, cartório e o calçadão da Gameleira. Informe o prédio: o Centro mistura comércio, palácio e hotel em quadras curtas.'],
                ['h3' => 'Bosque e o 6° BEC', 'texto' => 'Hotel e área residencial. O recuo pede o nome do estabelecimento; “perto do Bosque” não define a entrada.'],
                ['h3' => 'Segundo Distrito e a Estrada da Floresta', 'texto' => 'Clínicas, condomínio e o eixo até a UFAC. Útil quando a comitiva troca de campus sem trocar de carro.'],
                ['h3' => 'Mercado Velho e a passarela Joaquim Macedo', 'texto' => 'Encontro e jantar à beira do Acre. Combinamos o ponto de espera; o calçamento não admite recuo improvisado.'],
            ],
        ],
        [
            'h2' => 'Hotéis e embarques que se repetem no roteiro',
            'texto' => 'Pedidos típicos saem do Hotel Guapindaia, do Terrasse ou de pousadas no Bosque rumo ao Palácio, à Assembleia ou ao RBR. Não há parceria ostensiva: o endereço do hotel entra no roteiro como qualquer outro embarque, com nome na portaria.',
        ],
        [
            'h2' => 'Rotas de trabalho e de visita que cabem no mesmo dia',
            'itens' => [
                ['h3' => 'RBR → Centro → Gameleira', 'texto' => 'Pouso, reunião no palácio e almoço no calçadão. A margem sai do terminal, não da fila do táxi.'],
                ['h3' => 'Hotel no Bosque → UFAC → aeroporto', 'texto' => 'Campus, gabinete e voo de volta. Informe o bloco da universidade e o horário do check-in.'],
                ['h3' => 'Centro → Xapuri no mesmo recado', 'texto' => 'Quando a pauta sai da capital rumo ao seringal histórico, o trecho entra como viagem, não como corrida urbana. Orçamento à parte, com horário combinado.'],
            ],
        ],
        [
            'h2' => 'Plácido de Castro — RBR',
            'texto' => 'O terminal internacional fica fora do perímetro do Centro. Combinamos o voo. A espera no desembarque integra o trecho; o passageiro não cruza o saguão atrás de uma placa genérica.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Plácido de Castro',
    'faq' => [
        ['pergunta' => 'O aeroporto de Rio Branco fica na capital?', 'resposta' => 'O RBR fica em Senador Guiomard. O trecho até o Centro ou o Bosque entra no roteiro com margem.'],
        ['pergunta' => 'O motorista espera no RBR se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Dá para ir ao Mercado Velho e seguir ao palácio no mesmo turno?', 'resposta' => 'Sim. São poucos quilômetros. Informe a ordem e o ponto de espera na passarela.'],
        ['pergunta' => 'Vocês fazem o trecho até Xapuri ou Brasiléia?', 'resposta' => 'Sim, quando o destino entra no roteiro como viagem. Não é o mesmo recorte do Centro; o horário e o valor saem sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o RBR ao hotel do Bosque no mesmo recado',
        'texto' => 'O orçamento de Rio Branco sai sob consulta. Terminal, palácio e Gameleira no mesmo WhatsApp.',
        'botao' => 'Pedir carro em Rio Branco',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'acre', 'ancora' => 'O recorte acreano além da capital'],
        ['tipo' => 'cidade', 'estado' => 'amazonas', 'cidade' => 'manaus', 'ancora' => 'Adrianópolis, Zona Franca e o MAO'],
        ['tipo' => 'cidade', 'estado' => 'rondonia', 'cidade' => 'porto-velho', 'ancora' => 'Caiari, Madeira e o Jorge Teixeira'],
    ],
];
