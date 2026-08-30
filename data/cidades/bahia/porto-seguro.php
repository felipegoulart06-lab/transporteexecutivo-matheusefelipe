<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'Porto Seguro',
    'geo' => ['lat' => -16.4435, 'lng' => -39.0643],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Porto Seguro',
    'seo' => [
        'title' => 'Traslado em Porto Seguro: Cidade Histórica, orla e BPS',
        'description' => 'Carro com motorista em Porto Seguro para a Cidade Histórica, Taperapuã, Arraial d\'Ajuda, Trancoso e o aeroporto BPS. Rotas e orçamento sob consulta.',
        'og_title' => 'Traslado executivo na Cidade Histórica, na orla e no aeroporto BPS',
        'og_description' => 'Motorista na Costa do Descobrimento: hotel, Cidade Histórica e o terminal BPS.',
        'og_image_alt' => 'Carro executivo em via da orla de Porto Seguro',
    ],
    'kicker' => 'Costa do Descobrimento · BA',
    'h1' => 'Do BPS à Cidade Histórica sem perder a janela de Trancoso',
    'epigrafe' => 'Porto Seguro alinha hotel na orla, pauta no Centro Histórico e o voo no BPS. O motorista segura a do Descobrimento e a balsa; o passageiro segura o horário — não a vaga no Passarela do Álcool.',
    'abertura' => [
        'h2' => 'A cidade do descobrimento e os distritos não se trocam no mesmo recuo',
        'texto' => [
            'Cidade Histórica, Taperapuã, Cabralândia e o Centro concentram o pernoite urbano. Arraial d\'Ajuda e Trancoso pedem a balsa ou a estrada do distrito. O Aeroporto de Porto Seguro (BPS) fica no recorte do município, não na porta do farol.',
            'O serviço é de traslado e de espera: o carro já está no roteiro com o nome do hotel (Villaggio, Enotel, similares) e o número do voo. Não é corrida de passarela no feriado, a menos que a visita entre na pauta.',
        ],
    ],
    'faixas' => [
        ['h2' => 'Cidade Histórica, Centro e o relógio da ladeira', 'texto' => 'O Marco do Descobrimento e as igrejas pedem ponto de espera. Informe o hotel; “no histórico” não distingue a Cidade Alta do Centro comercial.'],
        ['h2' => 'Taperapuã, Cabralândia e a orla', 'texto' => 'Hotéis de passagem e o recuo da praia. A do Descobrimento muda o intervalo no verão; a margem sai do hotel, não do mapa.'],
        ['h2' => 'Arraial d\'Ajuda, Trancoso e o Quadrado', 'texto' => 'Quando a pauta cruza a balsa ou a estrada rumo a Trancoso, o distrito entra como viagem. O Quadrado pede ponto de espera, não GPS no coreto.'],
    ],
    'aeroportos' => [
        'h2' => 'BPS na cidade — longe do Quadrado, perto do Centro',
        'itens' => [
            ['h3' => 'Porto Seguro — BPS', 'texto' => 'Terminal do município. Combinamos o voo. A espera no desembarque integra o trecho BPS; até Taperapuã o intervalo é urbano, até Trancoso não.'],
            ['h3' => 'Quando a pauta aponta para Caraíva ou Cumuruxatiba', 'texto' => 'Estrada de terra e maré. Não é o mesmo pedido da Cidade Histórica; o orçamento sai à parte.'],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque na Costa',
        'lista' => [
            'Hotel com nome — Taperapuã ou Arraial não bastam para o recuo.',
            'Se o voo é no BPS, número e horário. A margem sai do terminal, não da passarela.',
            'Trancoso, Caraíva ou a Cidade Histórica entram no roteiro; não é desvio de última hora na balsa.',
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pousa no BPS',
    'faq' => [
        ['pergunta' => 'O aeroporto de Porto Seguro fica longe da Cidade Histórica?', 'resposta' => 'É trecho urbano até o Centro. Até a Cidade Alta marcamos margem para a ladeira; até Trancoso o recorte é outro.'],
        ['pergunta' => 'O motorista espera no BPS se o voo atrasar?', 'resposta' => 'Sim. Em Porto Seguro, o número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês cruzam a balsa rumo a Arraial d\'Ajuda?', 'resposta' => 'Sim. Informe o hotel no distrito. A balsa pesa mais que o quilômetro no mapa.'],
        ['pergunta' => 'Dá para ir ao Quadrado de Trancoso no mesmo dia?', 'resposta' => 'Sim, como viagem de distrito. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Marque o hotel junto com o horário do BPS',
        'texto' => 'O orçamento de Porto Seguro sai sob consulta. Histórica, orla e Trancoso no mesmo WhatsApp.',
        'botao' => 'Pedir carro em Porto Seguro',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'bahia', 'ancora' => 'Feira, Costa do Descobrimento e o recorte baiano'],
        ['tipo' => 'cidade', 'estado' => 'bahia', 'cidade' => 'salvador', 'ancora' => 'Barra, Paralela e o Luís Eduardo Magalhães'],
        ['tipo' => 'cidade', 'estado' => 'bahia', 'cidade' => 'feira-de-santana', 'ancora' => 'Centro, Kalilândia e o João Durval'],
    ],
];
