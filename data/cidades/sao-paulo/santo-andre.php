<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Santo André',
    'geo' => ['lat' => -23.6639, 'lng' => -46.5307],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Santo André',
    'seo' => [
        'title' => 'Motorista em Santo André: Campestre, Paço e Industrial',
        'description' => 'Carro com motorista em Santo André para o Campestre, o Paço na Praça IV Centenário e a Avenida Industrial. Congonhas pela Anchieta; GRU pelo Rodoanel. Valor sob consulta.',
        'og_title' => 'Traslado no Campestre, no Paço andreense e na Industrial',
        'og_description' => 'Motorista em Santo André: hotel no Campestre, sede no Centro Cívico e o recuo rumo a Congonhas.',
        'og_image_alt' => 'Sedan executivo em avenida de Santo André',
    ],
    'kicker' => 'ABC paulista · SP',
    'h1' => 'Do Campestre ao Paço sem herdar o pin de Mauá',
    'intro' => 'Santo André concentra o Centro Cívico na Praça IV Centenário, o pernoite no Campestre e o eixo da Avenida Industrial. O GPS da região troca o município com Mauá e com São Caetano se o recado vier só como “ABC”. Não há aeroporto comercial aqui: Congonhas (CGH) pela Via Anchieta é o destino típico da pauta curta; Guarulhos (GRU) pede o Rodoanel. A Pereira Barreto articula o trecho urbano; não substitui o endereço da porta.',
    'blocos' => [
        [
            'h2' => 'O Paço andreense não embarca quem está no Campestre',
            'texto' => 'Prefeitura, Câmara e Fórum ficam no Centro Cívico da Praça IV Centenário. O Campestre, alguns quilômetros à parte, reúne hotel, clínica e prédio residencial — recuo próprio, ruas que se repetem no mapa. A Avenida Industrial (Grand Plaza e torres no entorno) é o terceiro ponto: shopping e escritório não compartilham o recuo do Paço. Informe o nome do hotel e a rua; “me busca no Centro de Santo André” deixa o carro na praça errada.',
        ],
        [
            'h2' => 'Três portas que o pedido andreense mais cita',
            'itens' => [
                ['h3' => 'Centro Cívico e a Praça IV Centenário', 'texto' => 'Paço, Câmara e Fórum. Diga o prédio; o calçadão não define a porta do executivo.'],
                ['h3' => 'Campestre e o pernoite', 'texto' => 'Hotel e clínica. O recuo do Campestre não é o da Industrial nem o da Pereira Barreto no Shopping ABC.'],
                ['h3' => 'Avenida Industrial e o Grand Plaza', 'texto' => 'Torres e o shopping no Centro. Informe o estabelecimento; o pin do Paço não resolve a rampa do shopping.'],
                ['h3' => 'Pereira Barreto rumo à Anchieta', 'texto' => 'Corredor até a Via Anchieta (SP-150) e a capital. CGH e Faria Lima entram como recorte próprio, não como desvio do Campestre.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta andreense mais fecha',
        'itens' => [
            ['titulo' => 'Hotel no Campestre → Paço', 'texto' => 'Pernoite e sede. Informe o nome do hotel e se o carro espera na Praça IV Centenário.'],
            ['titulo' => 'Santo André → Congonhas pela Anchieta', 'texto' => 'O CGH não fica na porta do Campestre. Combinamos o voo; a SP-150 pede margem. GRU entra pelo Rodoanel quando o roteiro já o nomeia.'],
            ['titulo' => 'Centro → Paranapiacaba', 'texto' => 'A vila ferroviária é distrito de Santo André, mas o recuo de serra não é urbano. Só como visita combinada; o horário sai sob consulta.'],
            ['titulo' => 'Campestre → São Bernardo ou a capital', 'texto' => 'Quando a pauta vaza no ABC vizinho ou na Faria Lima, o trecho deixa de ser só andreense.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem embarca no Campestre',
    'faq' => [
        ['pergunta' => 'Santo André tem aeroporto de linha regular?', 'resposta' => 'Não. Não há saguão comercial no município. O voo curto sai em Congonhas (CGH), em São Paulo, pela Via Anchieta; Guarulhos (GRU) pede o Rodoanel.'],
        ['pergunta' => 'O aplicativo entrega o carro em Mauá quando peço Santo André?', 'resposta' => 'Acontece se o pin vier só como ABC. Pedimos município, rua e o nome do hotel. Campestre e Centro Cívico não compartilham porta com a João Ramalho de Mauá.'],
        ['pergunta' => 'Paranapiacaba entra no mesmo recorte do Paço?', 'resposta' => 'Não. É distrito de Santo André, com recuo de serra. Combinamos como visita à parte; não é o trecho da Praça IV Centenário.'],
        ['pergunta' => 'Dá para fazer Campestre, Industrial e o Paço com um motorista?', 'resposta' => 'Sim, se a ordem já estiver no itinerário. São três recuos; o Grand Plaza não substitui a rampa da Prefeitura.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Campestre ao horário da Anchieta',
        'texto' => 'Informe o hotel no Campestre, o prédio do Paço e se o voo é Congonhas ou GRU. Respondemos com horário e valor.',
        'botao' => 'Pedir motorista em Santo André',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-bernardo-do-campo', 'ancora' => 'Paço, Rudge Ramos e a Assunção na Anchieta'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
    ],
];
