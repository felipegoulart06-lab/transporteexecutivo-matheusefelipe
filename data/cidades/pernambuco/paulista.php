<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'Paulista',
    'geo' => [
        'lat' => -7.9408,
        'lng' => -34.8728,
    ],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Paulista',
    'seo' => [
        'title' => 'Motorista executivo em Paulista: Centro e REC',
        'description' => 'Motorista executivo em Paulista: Centro, Janga e Guararapes Gilberto Freyre (REC), em Recife. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Traslado em Paulista: Centro e REC',
        'og_description' => 'O motorista combina Centro com Guararapes Gilberto Freyre (REC), em Recife. Informe nome do hotel na orla.',
        'og_image_alt' => 'Carro executivo em via de Paulista',
    ],
    'kicker' => 'Região Metropolitana do Recife · PE',
    'h1' => 'Paulista — Centro de manhã, REC quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Paulista',
    'faq' => [
        [
            'pergunta' => 'Quem está em Paulista embarca no REC dentro da cidade?',
            'resposta' => 'Não. De Paulista o REC (Guararapes Gilberto Freyre) fica em Recife. O trecho sai de Centro pela PE-15.',
        ],
        [
            'pergunta' => 'Em Paulista, vocês buscam em Centro?',
            'resposta' => 'Sim, em Paulista. Envie nome do hotel na orla em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Paulista vocês fazem Olinda?',
            'resposta' => 'Sim, saindo de Paulista. Olinda não é o recorte de Centro; o horário pela Avenida Dr. Cláudio José Gueiros Leite sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Paulista o carro fica entre Centro e Janga?',
            'resposta' => 'Sim, em Paulista. A hora à disposição cobre sede em Centro e orla em Janga.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Paulista e o REC',
        'texto' => 'Diga o ponto em Centro ou Janga, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Paulista',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'pernambuco',
            'ancora' => 'Paulista e o recorte de Região Metropolitana do Recife',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'pernambuco',
            'cidade' => 'recife',
            'ancora' => 'Motorista em recife',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'pernambuco',
            'cidade' => 'olinda',
            'ancora' => 'Motorista em olinda',
        ],
    ],
    'epigrafe' => 'Centro não é o mesmo recuo de Janga. O motorista segura o acesso; o passageiro segura o horário.',
    'abertura' => [
        'h2' => 'Paulista: origem na orla, destino no terminal certo',
        'texto' => [
            'Paulista usa Guararapes Gilberto Freyre (REC), em Recife. Quem embarca em Centro não está no município da pista. A PE-15 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
            'Janga pede orla. Maria Farinha pede orla e hotel. Quando Olinda entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela Avenida Dr. Cláudio José Gueiros Leite.',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'Centro: o relógio do embarque',
            'texto' => 'Centro concentra sede. Informe nome do hotel na orla.',
        ],
        [
            'h2' => 'Janga e Maria Farinha',
            'texto' => 'Janga pede orla. Maria Farinha pede orla e hotel. A ordem muda o intervalo mais que o mapa.',
        ],
        [
            'h2' => 'Guararapes Gilberto Freyre (REC), em Recife',
            'texto' => 'Guararapes Gilberto Freyre (REC) fica em Recife, não em Paulista. O trecho sai pela PE-15. Diga o IATA e o número do voo.',
        ],
    ],
    'aeroportos' => [
        'h2' => 'Terminal e vazão a partir de Paulista',
        'itens' => [
            [
                'h3' => 'Guararapes Gilberto Freyre — REC',
                'texto' => 'Guararapes Gilberto Freyre (REC) fica em Recife, não em Paulista. O trecho sai pela PE-15. Diga o IATA e o número do voo.',
            ],
            [
                'h3' => 'PE-15 e a vazão para Olinda',
                'texto' => 'Olinda e Recife aparecem no mesmo pedido de Paulista. Isso é viagem, não segunda corrida em Centro.',
            ],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque em Paulista',
        'lista' => [
            'Hotel, prédio ou empresa com nome — “em Centro” não basta.',
            'Qual terminal: REC em Recife.',
            'Se Olinda entra depois, a ordem muda o recorte.',
        ],
    ],
];
