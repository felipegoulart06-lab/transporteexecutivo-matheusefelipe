<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'Santos',
    'geo' => ['lat' => -23.9608, 'lng' => -46.3336],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Santos',
    'seo' => [
        'title' => 'Carro executivo em Santos: Gonzaga, Ponta da Praia e porto',
    'description' => 'Motorista executivo em Santos para Gonzaga, Ponta da Praia, Centro Histórico, Valongo e o porto. Guarujá, orla e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Gonzaga, na Ponta da Praia e no porto de Santos',
        'og_description' => 'Motorista na Baixada Santista: hotel na orla, pauta no porto e o recuo do Centro Histórico.',
        'og_image_alt' => 'Carro executivo em avenida da orla de Santos',
    ],
    'kicker' => 'Baixada Santista · SP',
    'h1' => 'Do Gonzaga ao porto sem perder a janela da Ponta da Praia',
    'epigrafe' => 'Santos alinha hotel na orla, pauta no porto e o Centro Histórico no mesmo dia. O motorista segura a Ana Costa e a Anchieta; o passageiro segura o horário — não a vaga na Beira-Mar.',
    'abertura' => [
        'h2' => 'A cidade do porto e a orla não se trocam no mesmo recuo',
        'texto' => [
            'Gonzaga, Boqueirão, Ponta da Praia e o José Menino concentram o pernoite. O Valongo, o Centro Histórico e os acessos do porto pedem outro recuo. Quem vem da capital desce a Anchieta ou a Imigrantes; o trecho não é o mesmo do calçadão.',
            'O serviço é de traslado e de espera: o carro já está no roteiro com o nome do hotel (Mendes Plaza, similar) e o terminal do porto, se houver. Não é corrida de orla no fim de semana, a menos que a visita entre na pauta.',
        ],
    ],
    'faixas' => [
        ['h2' => 'Gonzaga, Boqueirão e o relógio da Ana Costa', 'texto' => 'A orla enche no verão e no feriado. Informe o hotel e o recuo; “na praia” não distingue Gonzaga de Ponta da Praia nem o acesso do canal 6.'],
        ['h2' => 'Ponta da Praia, ferry e o Guarujá', 'texto' => 'Quando a pauta cruza o estuário rumo ao Guarujá, o ferry ou a rodovia entra no roteiro. Não é o mesmo pedido do Gonzaga; o intervalo sai com margem de travessia.'],
        ['h2' => 'Centro Histórico, Valongo e o porto', 'texto' => 'Pauta institucional, Bolsa do Café como visita combinada, e o recuo do cais. O calçamento pede ponto de espera, não GPS no bonde.'],
    ],
    'aeroportos' => [
        'h2' => 'Santos não tem o saguão da capital — o relógio é o da serra',
        'itens' => [
            ['h3' => 'Quando o voo é em Congonhas ou GRU', 'texto' => 'O trecho Santos–capital entra como viagem. Combinamos o terminal e a margem da Anchieta ou da Imigrantes; não é corrida urbana da orla.'],
            ['h3' => 'Base Aérea e o recorte da Baixada', 'texto' => 'Aviação geral e o circuito Guarujá–Praia Grande. Informe o ponto; o recuo militar pede protocolo, não aceite de aplicativo.'],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque santista',
        'lista' => [
            'Hotel com nome — Gonzaga ou Ponta da Praia não bastam para o recuo.',
            'Se a pauta é porto, o terminal e o horário de operação entram no roteiro.',
            'Guarujá, Praia Grande ou a capital entram como recorte próprio; não como desvio na orla.',
        ],
    ],
    'faq_h2' => 'Dúvidas de quem embarca na Baixada',
    'faq' => [
        ['pergunta' => 'O motorista desce a serra a partir da capital?', 'resposta' => 'Sim, quando São Paulo entra no roteiro. A Anchieta e a Imigrantes pedem margem; não é o mesmo recorte do Gonzaga.'],
        ['pergunta' => 'Vocês cruzam para o Guarujá no mesmo dia?', 'resposta' => 'Sim. Informe se o trecho é ferry ou rodovia. A travessia pesa mais que o quilômetro no mapa.'],
        ['pergunta' => 'Dá para ir ao porto e voltar ao hotel na orla?', 'resposta' => 'Sim. Combinamos o terminal e o ponto de espera. O cais não admite recuo improvisado.'],
        ['pergunta' => 'Vocês fazem o Centro Histórico e o bonde no mesmo turno?', 'resposta' => 'Sim, quando a visita entra no roteiro. O calçamento pede ponto de espera combinado.'],
    ],
    'cta' => [
        'titulo' => 'Marque o hotel da orla junto com o recuo do porto',
        'texto' => 'O orçamento de Santos sai sob consulta. Gonzaga, cais e serra no mesmo WhatsApp.',
        'botao' => 'Pedir carro em Santos',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Santos Dumont, Galeão e a Zona Sul'],
    ],
];
