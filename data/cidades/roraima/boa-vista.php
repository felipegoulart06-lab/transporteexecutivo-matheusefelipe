<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Boa Vista',
    'geo' => ['lat' => 2.82384, 'lng' => -60.6753],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Boa Vista',
    'seo' => [
        'title' => 'Traslado executivo em Boa Vista: Centro, Mecejana e BVB',
        'description' => 'Motorista executivo em Boa Vista para o Centro, Mecejana, São Pedro, Caçari e o aeroporto Atlas Brasil Cantanhede. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro de Boa Vista e no aeroporto BVB',
        'og_description' => 'Traslado na capital de Roraima: hotel, Orla Taumanan e o terminal Atlas Brasil Cantanhede.',
        'og_image_alt' => 'Sedan executivo em avenida radiocêntrica de Boa Vista',
    ],
    'kicker' => 'Capital de Roraima · RR',
    'h1' => 'Do Atlas Brasil à Orla Taumanan sem perder a pauta no Centro',
    'olho' => 'Boa Vista é radiocêntrica no traçado e quente no asfalto. O motorista segura a Ville Roy e a Ataíde Teive; o passageiro segura a reunião — e o horário do voo para Manaus ou Brasília, quando houver.',
    'capitulos' => [
        [
            'h2' => 'A capital planejada e o rio que marca o recuo',
            'texto' => 'Hotel no Centro ou no Mecejana, reunião no Palácio do Governo e voo no Atlas Brasil Cantanhede (BVB) cabem no mesmo dia. A Orla Taumanan, o Caçari e o trecho até o Marco BV-8 não se trocam no mesmo recuo. A margem sai do embarque, não do saguão.',
        ],
        [
            'h2' => 'Onde o embarque boa-vistense mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Praça do Centro Cívico', 'texto' => 'Sede, palácio e hotel (Aipana, similar). Informe o prédio; as avenidas em leque se repetem no nome.'],
                ['h3' => 'Mecejana, São Pedro e o Caçari', 'texto' => 'Clínicas, condomínio e o parque. O recuo pede rua e número; “no Caçari” não define a entrada.'],
                ['h3' => 'Orla Taumanan e o Rio Branco', 'texto' => 'Jantar e visita combinada. O calçamento pede ponto de espera, não GPS na beira do rio.'],
            ],
        ],
        [
            'h2' => 'Rotas de trabalho, orla e porta da fronteira',
            'texto' => 'BVB → hotel no Centro → Palácio → Orla Taumanan só se a orla estiver no roteiro. Outro clássico: hotel → Monte Roraima ou Pacaraima como viagem, não como corrida urbana. Quem segue à Venezuela combina o trecho à parte, com horário de BR-174.',
        ],
        [
            'h2' => 'Atlas Brasil Cantanhede — BVB',
            'texto' => 'O aeroporto internacional fica no recorte da cidade. Combinamos o voo. A espera no desembarque integra o trecho BVB. Até o Centro ou o Mecejana, a avenida pesa mais que o quilômetro no mapa.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que evitam atraso na capital',
        'itens' => [
            ['num' => '01', 'titulo' => 'Avenida e número', 'texto' => 'Ville Roy ou Ataíde Teive. “No Centro” não define o recuo do palácio.'],
            ['num' => '02', 'titulo' => 'Voo no BVB', 'texto' => 'Número e horário. O carro sai com margem, não no minuto do check-in.'],
            ['num' => '03', 'titulo' => 'Fronteira ou cidade', 'texto' => 'Pacaraima entra como viagem. O urbano é outro orçamento.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Atlas Brasil Cantanhede',
    'faq' => [
        ['pergunta' => 'O aeroporto de Boa Vista fica longe do Centro?', 'resposta' => 'É trecho urbano. Marcamos margem: a avenida e o horário de pico alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no BVB se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem a Orla Taumanan e o palácio no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. Um motorista articula o Centro Cívico e a beira do Rio Branco.'],
        ['pergunta' => 'Dá para seguir a Pacaraima depois do hotel?', 'resposta' => 'Sim, como viagem pela BR-174. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Marque o BVB no mesmo recado do hotel',
        'texto' => 'O orçamento de Boa Vista sai sob consulta. Centro, orla e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir traslado em Boa Vista',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'roraima', 'ancora' => 'Pacaraima, Caracaraí e o recorte de Roraima'],
        ['tipo' => 'cidade', 'estado' => 'amazonas', 'cidade' => 'manaus', 'ancora' => 'Adrianópolis, Ponta Negra e o MAO'],
        ['tipo' => 'cidade', 'estado' => 'para', 'cidade' => 'belem', 'ancora' => 'Nazaré, Umarizal e o Val-de-Cans'],
    ],
];
