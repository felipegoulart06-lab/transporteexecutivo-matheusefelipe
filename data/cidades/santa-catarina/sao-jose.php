<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'São José',
    'geo' => ['lat' => -27.6136, 'lng' => -48.6366],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em São José',
    'seo' => [
        'title' => 'Carro executivo em São José: Kobrasol, Campinas e FLN',
        'description' => 'Motorista executivo em São José (SC) para Kobrasol, Campinas, Barreiros e o Hercílio Luz (FLN), na ilha. Grande Florianópolis e orçamento sob consulta.',
        'og_title' => 'Traslado no Kobrasol, no Campinas e no Hercílio Luz',
        'og_description' => 'Motorista em São José da Grande Florianópolis: hotel no Kobrasol e o FLN pela ponte.',
        'og_image_alt' => 'Sedan executivo em avenida de São José, Santa Catarina',
    ],
    'kicker' => 'Grande Florianópolis · SC',
    'h1' => 'Do Kobrasol ao Campinas sem perder a janela do Hercílio',
    'epigrafe' => 'São José é o continente da Grande Florianópolis — não é São José dos Campos. O motorista segura o Kobrasol, o Campinas e a ponte até o Hercílio Luz; o passageiro segura a pauta — não a fila na Beira-Mar continental.',
    'abertura' => [
        'h2' => 'Continente, bairros e a ponte: três relógios, um roteiro',
        'texto' => [
            'Kobrasol concentra comércio e hotel de passagem. Campinas — o bairro, não a cidade paulista — e Barreiros pedem outro recuo. Forninho já é recorte residencial. O Hercílio Luz (FLN) fica na ilha, em Carianos: o trecho cruza a ponte Pedro Ivo Campos ou a Colombo Salles.',
            'O serviço é de traslado e de espera: o carro já está no roteiro com o nome do hotel e o número do voo. Não é corrida entre o shopping e a Beira-Mar do continente, a menos que o ponto entre na pauta.',
        ],
    ],
    'faixas' => [
        ['h2' => 'Kobrasol e o relógio do comércio', 'texto' => 'Hotel, sede e o eixo comercial. Informe o prédio ou o nome do hotel; “no Kobrasol” não define o recuo da portaria nem o quarteirão da Superintendência.'],
        ['h2' => 'Campinas, Barreiros e Forninho', 'texto' => 'Pauta residencial e clínicas. Campinas aqui é bairro de São José (SC). O recuo pede rua e número — autocomplete costuma apontar para São Paulo.'],
        ['h2' => 'Ponte, continente e a janela do FLN', 'texto' => 'O terminal está na ilha. A margem sai da ponte, não do mapa: horário de pico na Pedro Ivo ou na Colombo Salles alonga o intervalo até Carianos.'],
    ],
    'aeroportos' => [
        'h2' => 'FLN na ilha — o continente chega pela ponte',
        'itens' => [
            ['h3' => 'Hercílio Luz — FLN', 'texto' => 'Terminal em Carianos, Florianópolis. Combinamos o voo. A espera no desembarque integra o trecho; até o Kobrasol, a ponte pesa mais que o quilômetro.'],
            ['h3' => 'Quando a pauta aponta para a ilha ou para Itajaí', 'texto' => 'Centro de Florianópolis, Jurerê ou o Vale não são o mesmo pedido de São José. Se a reunião vaza pela BR-101, o orçamento sai à parte.'],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque no Kobrasol e no Campinas',
        'lista' => [
            'Hotel com nome — Kobrasol ou Campinas não bastam para o recuo.',
            'Se o voo é no FLN, número e horário. Do Kobrasol, a margem sai da ponte até Carianos — não do eixo da Superintendência.',
            'Confirme São José (SC): Campinas é bairro da Grande Florianópolis, não a cidade paulista.',
        ],
    ],
    'faq_h2' => 'Dúvidas de quem embarca em São José rumo ao FLN',
    'faq' => [
        ['pergunta' => 'São José fica na ilha de Florianópolis?', 'resposta' => 'Não. São José é o continente da Grande Florianópolis. O Hercílio Luz fica na ilha; o trecho até o Kobrasol ou o Campinas entra no roteiro com margem para a ponte.'],
        ['pergunta' => 'Em São José, o motorista espera no FLN se o voo atrasar?', 'resposta' => 'Sim. Monitoramos o voo no FLN; a espera em Carianos integra o trecho até o Kobrasol ou o Campinas.'],
        ['pergunta' => 'Campinas é a cidade de São Paulo?', 'resposta' => 'Não. Aqui Campinas é bairro de São José (SC). Informe rua e número; o autocomplete costuma puxar o município paulista.'],
        ['pergunta' => 'Vocês fazem Kobrasol, Barreiros e o FLN no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. A ponte pede margem própria; um motorista articula os três se o voo estiver no roteiro.'],
        ['pergunta' => 'Dá para seguir a Itajaí depois do hotel?', 'resposta' => 'Sim, como viagem pela BR-101. Não é o mesmo recorte do Kobrasol; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Kobrasol ao horário do Hercílio Luz',
        'texto' => 'O orçamento de São José sai sob consulta. Campinas, ponte e FLN no mesmo WhatsApp.',
        'botao' => 'Pedir carro em São José',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'santa-catarina', 'ancora' => 'Litoral, Vale e o recorte catarinense'],
        ['tipo' => 'cidade', 'estado' => 'santa-catarina', 'cidade' => 'florianopolis', 'ancora' => 'Jurerê, Centro e o Hercílio Luz'],
        ['tipo' => 'cidade', 'estado' => 'santa-catarina', 'cidade' => 'itajai', 'ancora' => 'Fazenda, porto e o aeroporto NVT'],
    ],
];
