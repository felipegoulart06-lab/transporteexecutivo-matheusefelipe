<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Niterói',
    'geo' => ['lat' => -22.8832, 'lng' => -43.1034],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Niterói',
    'seo' => [
        'title' => 'Traslado em Niterói: Icaraí, São Francisco e SDU',
        'description' => 'Carro com motorista em Niterói para Icaraí, São Francisco e o Centro, e a Ponte Rio-Niterói rumo ao Santos Dumont ou ao Galeão. Embarque, espera e orçamento sob consulta.',
        'og_title' => 'Motorista em Icaraí, no Centro e na Ponte Rio-Niterói',
        'og_description' => 'Niterói não tem aeroporto comercial de passageiros. O carro cruza a ponte rumo ao SDU ou ao GIG.',
        'og_image_alt' => 'Sedan executivo em avenida de Icaraí, Niterói, com a baía ao fundo',
    ],
    'kicker' => 'Cidade da baía · RJ',
    'h1' => 'De Icaraí ao Santos Dumont pela Ponte Rio-Niterói',
    'faixas' => [
        [
            'h2' => 'Niterói embarca na baía; o voo está do outro lado da ponte',
            'texto' => 'Niterói não opera aeroporto comercial de passageiros. Quem voa embarca no Santos Dumont (SDU), no Centro do Rio, ou no Galeão (GIG), na Ilha do Governador — os dois no município do Rio de Janeiro. O carro sai de Icaraí, de São Francisco ou do Centro e cruza a Ponte Presidente Costa e Silva (Ponte Rio-Niterói, BR-101). O intervalo da ponte muda com o fluxo; o roteiro sai com margem, não com o relógio do aplicativo.',
        ],
        [
            'h2' => 'Três recuos de baía que o pedido mais cita',
            'itens' => [
                ['h3' => 'Icaraí', 'texto' => 'Hotel e orla. Gavião Peixoto e Moreira César não são o mesmo recuo. Informe o nome do hotel e a porta; “na praia de Icaraí” não define a espera.'],
                ['h3' => 'Centro', 'texto' => 'Sede e o eixo da Amaral Peixoto. A Praça Araribóia articula a barca; o carro executivo cobre a ponte rumo ao Rio, não o catamarã no último minuto.'],
                ['h3' => 'São Francisco', 'texto' => 'Orla rumo a Charitas pela Quintino Bocaiúva. Informe rua e número; o recuo da baía não é o do Centro nem o de Icaraí.'],
            ],
        ],
        [
            'h2' => 'Hotel na orla, pauta no Centro e o recuo do SDU ou do GIG',
            'texto' => 'O clássico é Icaraí ou São Francisco → Centro → Ponte Rio-Niterói → Santos Dumont ou Galeão. Combinamos o número do voo e o terminal. A espera no desembarque, quando o voo está no roteiro, integra o trecho — do lado de Niterói ou do Rio. Diga se o destino no Rio é o Centro, a Zona Sul ou o GIG; a ponte não é o mesmo recorte urbano.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem cruza a baía',
    'faq' => [
        ['pergunta' => 'Niterói tem aeroporto comercial de passageiros?', 'resposta' => 'Não. O voo regular sai do Santos Dumont (SDU), no Centro do Rio, ou do Galeão (GIG), na Ilha do Governador. Os dois ficam no município do Rio de Janeiro. O acesso a partir de Niterói é a Ponte Rio-Niterói.'],
        ['pergunta' => 'O motorista busca no Santos Dumont e leva a Icaraí?', 'resposta' => 'Sim. Informe o número do voo e o hotel em Icaraí, em São Francisco ou no Centro. A espera no SDU faz parte do trecho quando o voo está no roteiro.'],
        ['pergunta' => 'Vocês fazem Icaraí, Centro e São Francisco no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. São três recuos de baía; um motorista articula os três se o roteiro já saiu com o endereço de cada porta.'],
        ['pergunta' => 'Quanto tempo leva a Ponte Rio-Niterói?', 'resposta' => 'O intervalo muda com o fluxo da BR-101. Combinamos uma margem; não publicamos duração fixa de travessia.'],
    ],
    'cta' => [
        'titulo' => 'Diga se o embarque é Icaraí ou o voo no Rio',
        'texto' => 'Informe o hotel, o bairro e se o destino é o Santos Dumont ou o Galeão. O horário de apresentação em Niterói volta sob consulta.',
        'botao' => 'Pedir motorista em Niterói',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-de-janeiro', 'ancora' => 'O recorte fluminense além da capital'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Santos Dumont, Galeão e a Zona Sul'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'santos', 'ancora' => 'Gonzaga, porto e a orla santista'],
    ],
];
