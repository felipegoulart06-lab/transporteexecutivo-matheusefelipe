<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'Florianópolis',
    'geo' => ['lat' => -27.5945, 'lng' => -48.5477],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Florianópolis',
    'seo' => [
        'title' => 'Motorista executivo em Florianópolis: Centro, Jurerê e FLN',
        'description' => 'Carro com motorista em Florianópolis para o Centro, Jurerê, Lagoa, Canasvieiras e o aeroporto Hercílio Luz. Ilha, pontes e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Centro, em Jurerê e no Hercílio Luz',
        'og_description' => 'Motorista na Ilha da Magia: hotel em Jurerê, pauta no Centro e o terminal FLN.',
        'og_image_alt' => 'Carro executivo em via da ilha de Florianópolis com mar ao fundo',
    ],
    'kicker' => 'Capital catarinense · SC',
    'h1' => 'Do Hercílio Luz a Jurerê sem perder a ponte nem a Lagoa',
    'epigrafe' => 'Florianópolis é ilha ligada ao continente por pontes. O motorista segura a Beira-Mar, a SC-401 e o recuo de Jurerê; o passageiro segura a pauta — não a fila na ponte.',
    'abertura' => [
        'h2' => 'Uma ilha de vários relógios: Centro, norte, sul e o aeroporto',
        'texto' => [
            'O Centro e a Beira-Mar Norte concentram sede e hotel de passagem. Jurerê, Canasvieiras e Ingleses pedem a SC-401. Campeche, Lagoa da Conceição e o sul da ilha não se cruzam no mesmo intervalo. O Hercílio Luz (FLN) encosta no continente da ilha, em Carianos, mas o trecho até Jurerê não é “aí do lado”.',
            'O serviço é de traslado e de espera: o carro já está no roteiro com o nome do hotel (Costão do Santinho, Jurerê Beach Village, Majestic, similares) e o número do voo. Não é corrida de temporada na praia, a menos que a visita entre na pauta.',
        ],
    ],
    'faixas' => [
        ['h2' => 'Centro, Beira-Mar e o relógio da ponte', 'texto' => 'Reunião no Centro, check-out no hotel da Beira-Mar e a Ponte Hercílio Luz ou a Colombo Salles no caminho. Informe o prédio; o sentido da via muda no fim da tarde e no horário de pico da ponte.'],
        ['h2' => 'Jurerê, Canasvieiras e a SC-401', 'texto' => 'Pernoite executivo no norte da ilha. “Em Jurerê” não distingue Internacional de tradicional nem o recuo do Costão. A SC-401 alonga no verão; a margem sai do hotel, não do mapa.'],
        ['h2' => 'Lagoa, Campeche e o sul', 'texto' => 'Visita à Lagoa da Conceição, ao Campeche ou à Praia Mole só se combinada. O tráfego da João Pinho e da Avenida das Rendeiras pede ponto de espera, não GPS na ponte da Lagoa.'],
    ],
    'aeroportos' => [
        'h2' => 'FLN na ilha — longe de Jurerê, perto de Carianos',
        'itens' => [
            ['h3' => 'Hercílio Luz — FLN', 'texto' => 'Terminal em Carianos. Combinamos o voo. A espera no desembarque integra o trecho; até Jurerê ou o Centro, a via e a ponte pesam mais que o quilômetro.'],
            ['h3' => 'Quando a pauta aponta para o continente', 'texto' => 'São José, Palhoça ou Balneário Camboriú não são o mesmo pedido da ilha. Se a reunião vaza para o continente, o orçamento sai à parte.'],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque na ilha',
        'lista' => [
            'Hotel com nome — Jurerê, Canasvieiras ou Centro não bastam para o recuo.',
            'Se o voo é no FLN, número e horário. A margem sai de Carianos, não da SC-401.',
            'Visita à Lagoa, ao Costão ou a Camboriú entra no roteiro; não é desvio de última hora na ponte.',
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pousa no Hercílio Luz',
    'faq' => [
        ['pergunta' => 'O aeroporto de Florianópolis fica longe de Jurerê?', 'resposta' => 'Fica em Carianos, no sul da ilha. O trecho até Jurerê ou Canasvieiras entra no roteiro com margem para a SC-401.'],
        ['pergunta' => 'O motorista espera no FLN se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem Centro, Lagoa e Jurerê no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. São recortes diferentes da ilha; um motorista articula os três se a margem estiver no roteiro.'],
        ['pergunta' => 'Dá para seguir a Balneário Camboriú depois do hotel?', 'resposta' => 'Sim, como viagem pelo continente. Não é o mesmo recorte da ilha; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Marque Jurerê junto com o horário do Hercílio Luz',
        'texto' => 'O orçamento de Florianópolis sai sob consulta. Ilha, ponte e FLN no mesmo WhatsApp.',
        'botao' => 'Pedir carro em Florianópolis',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'santa-catarina', 'ancora' => 'Joinville, Blumenau e o recorte catarinense'],
        ['tipo' => 'cidade', 'estado' => 'rio-grande-do-sul', 'cidade' => 'porto-alegre', 'ancora' => 'Moinhos, Centro Histórico e o Salgado Filho'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'curitiba', 'ancora' => 'Batel, Centro Cívico e o Afonso Pena'],
    ],
];
