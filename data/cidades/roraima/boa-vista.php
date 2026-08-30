<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Boa Vista',
    'geo' => ['lat' => 2.82384, 'lng' => -60.6753],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Boa Vista',
    'seo' => [
        'title' => 'BVB, Centro e Caimbé em Boa Vista; BR-174 à parte',
        'description' => 'Motorista em Boa Vista para Centro, Caimbé e o Atlas Brasil Cantanhede. A BR-174 rumo à fronteira sai só como viagem intermunicipal, sob consulta.',
        'og_title' => 'Carro no Centro, no Caimbé e no Atlas Brasil Cantanhede',
        'og_description' => 'Traslado em Roraima: pauta no Centro Cívico, recuo no Caimbé e o terminal BVB no município de Boa Vista.',
        'og_image_alt' => 'Sedan executivo em avenida radiocêntrica de Boa Vista',
    ],
    'kicker' => 'Capital de Roraima · RR',
    'h1' => 'Do Atlas Brasil ao Caimbé sem marcar a BR-174 no relógio urbano',
    'olho' => 'Boa Vista é radiocêntrica no traçado. O motorista segura as avenidas em leque até o Centro e o Caimbé; o passageiro segura a reunião. A BR-174 rumo à fronteira não entra nesse recorte: só como viagem intermunicipal, sob consulta, sem tempo inventado.',
    'capitulos' => [
        [
            'h2' => 'A capital planejada e o recuo que o leque esconde',
            'texto' => 'Hotel no Centro, pauta no Palácio e no Centro Cívico, pernoite ou clínica no Caimbé e voo no Atlas Brasil Cantanhede (BVB) cabem no mesmo dia. As avenidas se repetem no nome; “no Centro” não define a porta. O aeroporto fica no município de Boa Vista, não na faixa da BR-174 para Pacaraima.',
        ],
        [
            'h2' => 'Onde o embarque boa-vistense mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Praça do Centro Cívico', 'texto' => 'Sede, palácio e hotel. Informe o prédio; o traçado em leque faz duas portas parecerem a mesma no GPS.'],
                ['h3' => 'Caimbé', 'texto' => 'Bairro residencial e de serviços, com recuo em rua e número. “No Caimbé” não escolhe entre a Mário Homem de Melo e a Nossa Senhora de Nazaré.'],
                ['h3' => 'Bairro Aeroporto e o BVB', 'texto' => 'O terminal Atlas Brasil Cantanhede fica na Praça Santos Dumont, 100. Combinamos o voo. A espera no desembarque entra no trecho BVB.'],
            ],
        ],
        [
            'h2' => 'BR-174 rumo à fronteira: viagem, não corrida urbana',
            'texto' => 'BVB → hotel no Centro → Caimbé cobre o expediente da capital. Pacaraima e a faixa da fronteira só entram se o destino estiver no pedido, como trecho intermunicipal pela BR-174. Não publicamos intervalo de estrada. O orçamento urbano e o da fronteira não se misturam.',
        ],
        [
            'h2' => 'Atlas Brasil Cantanhede — BVB',
            'texto' => 'Lei federal denomina o terminal Aeroporto Internacional de Boa Vista — Atlas Brasil Cantanhede. Fica em Boa Vista. Combinamos o voo. Até o Centro ou o Caimbé, a avenida pesa mais que o quilômetro no mapa; a BR-174 para o norte não encurta o saguão.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que evitam atraso na capital',
        'itens' => [
            ['num' => '01', 'titulo' => 'Avenida e número', 'texto' => 'Centro Cívico ou Caimbé. “No Centro” não define o recuo do palácio.'],
            ['num' => '02', 'titulo' => 'Voo no BVB', 'texto' => 'Número e horário. O carro sai com margem no município, não no minuto do check-in.'],
            ['num' => '03', 'titulo' => 'Fronteira ou cidade', 'texto' => 'Pacaraima e a BR-174 entram como viagem sob consulta. O urbano de Boa Vista é outro orçamento.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Atlas Brasil Cantanhede',
    'faq' => [
        ['pergunta' => 'O BVB fica no Caimbé?', 'resposta' => 'Não. O terminal fica no bairro Aeroporto, na Praça Santos Dumont. O Caimbé é outro recuo, com rua e número próprios.'],
        ['pergunta' => 'Centro Cívico e Caimbé compartilham o mesmo ponto na Ville Roy?', 'resposta' => 'Não. O leque da capital repete nomes de via. Informe o prédio no Centro e o número no Caimbé.'],
        ['pergunta' => 'A BR-174 até Pacaraima entra como trecho urbano de Boa Vista?', 'resposta' => 'Não. É viagem intermunicipal sob consulta. Não marcamos tempo de fronteira no relógio do Centro.'],
        ['pergunta' => 'O número do voo BVB entra no pedido se o desembarque atrasar?', 'resposta' => 'Entra. Em Boa Vista a espera no Atlas Brasil faz parte do trecho combinado, sem minuto fixo.'],
    ],
    'cta' => [
        'titulo' => 'Marque o BVB no mesmo recado do Centro ou do Caimbé',
        'texto' => 'O orçamento de Boa Vista sai sob consulta. Bairro, voo e, se houver, a BR-174 como viagem à parte.',
        'botao' => 'Pedir motorista em Boa Vista',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'roraima', 'ancora' => 'Pacaraima, Caracaraí e o recorte de Roraima'],
        ['tipo' => 'cidade', 'estado' => 'amazonas', 'cidade' => 'manaus', 'ancora' => 'Adrianópolis, Ponta Negra e o MAO'],
        ['tipo' => 'cidade', 'estado' => 'para', 'cidade' => 'belem', 'ancora' => 'Nazaré, Umarizal e o Val-de-Cans'],
    ],
];
