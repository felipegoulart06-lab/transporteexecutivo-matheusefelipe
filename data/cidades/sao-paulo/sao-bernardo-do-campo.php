<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'São Bernardo do Campo',
    'geo' => ['lat' => -23.6914, 'lng' => -46.5646],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em São Bernardo do Campo',
    'seo' => [
        'title' => 'Motorista executivo em São Bernardo: Centro, Rudge Ramos e ABC',
        'description' => 'Carro com motorista em São Bernardo do Campo para o Centro, Rudge Ramos, Demarchi, Assunção e o eixo até Congonhas. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Centro, no Rudge Ramos e no ABC',
        'og_description' => 'Motorista no ABC paulista: hotel, planta automotiva e o recuo rumo a CGH.',
        'og_image_alt' => 'Sedan executivo em avenida de São Bernardo do Campo',
    ],
    'kicker' => 'ABC paulista · SP',
    'h1' => 'Do Rudge Ramos ao Centro sem perder a janela da planta',
    'preambulo' => 'São Bernardo não é bairro da capital: é o município das montadoras e do Paço. Hotel no Centro ou no Rudge Ramos, reunião na planta e voo em Congonhas cabem no mesmo expediente se o motorista já conhece a Anchieta e o protocolo de cada portaria.',
    'artigos' => [
        [
            'h2' => 'O ABC pede o nome da planta, não “na via Anchieta”',
            'texto' => 'Centro, Rudge Ramos, Demarchi e Assunção não compartilham o mesmo recuo. Hotel (Ibis, similar) e pauta na Volkswagen, Scania ou no Paço pedem o endereço exato. “Me busca no ABC” não coloca o carro na porta certa.',
        ],
        [
            'h2' => 'Rudge Ramos, Universidade e o silêncio da espera',
            'texto' => 'UMESP, clínicas e o eixo da Kennedy. O recuo pede rua e número. Quando a comitiva dorme em São Bernardo e reúne na Faria Lima, o trecho cruza o município — a margem sai da Anchieta, não da Marginal.',
        ],
        [
            'h2' => 'Congonhas e GRU no relógio do ABC',
            'texto' => 'São Bernardo não tem saguão próprio. Combinamos se o voo é Congonhas (CGH) ou Guarulhos (GRU). A Anchieta, a Imigrantes e o Rodoanel mudam o intervalo mais que o mapa admite; a margem sai do hotel, não do saguão.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em São Bernardo',
        'itens' => [
            ['h3' => 'Centro e o Paço Municipal', 'texto' => 'Informe o prédio. O recuo do Paço não é o da planta na Anchieta.'],
            ['h3' => 'Rudge Ramos, Demarchi e Assunção', 'texto' => 'Hotel, campus e residencial. O nome do estabelecimento evita a volta na Kennedy.'],
            ['h3' => 'Plantas da Anchieta', 'texto' => 'Portaria, turno e documento na lista. Sem isso, o recuo da montadora não libera.'],
            ['h3' => 'Quando a pauta aponta para a capital', 'texto' => 'CGH ou Faria Lima não é o mesmo pedido do Centro de São Bernardo. O orçamento sai à parte.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pauta o ABC',
    'faq' => [
        ['pergunta' => 'O motorista vai a Congonhas a partir de São Bernardo?', 'resposta' => 'Sim, quando o CGH entra no roteiro. A Anchieta pede margem; não é corrida instantânea do Rudge Ramos.'],
        ['pergunta' => 'Vocês entram na planta com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, o recuo da montadora não libera.'],
        ['pergunta' => 'Dá para ir ao Paço e à universidade no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. O Centro e o Rudge Ramos são recuos distintos.'],
        ['pergunta' => 'O carro segue à Faria Lima depois da reunião?', 'resposta' => 'Sim, quando a capital entra no roteiro. Não é o mesmo recorte de São Bernardo; a Anchieta pede margem própria.'],
    ],
    'cta' => [
        'titulo' => 'Envie a planta junto com o horário do voo',
        'texto' => 'O orçamento de São Bernardo sai sob consulta. Paço, montadora e CGH no mesmo recado.',
        'botao' => 'Solicitar carro em São Bernardo',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'santos', 'ancora' => 'Gonzaga, porto e a orla santista'],
    ],
];
