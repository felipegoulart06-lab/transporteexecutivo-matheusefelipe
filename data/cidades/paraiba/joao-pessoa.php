<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'João Pessoa',
    'geo' => [
        'lat' => -7.11532,
        'lng' => -34.861,
    ],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em João Pessoa',
    'seo' => [
        'title' => 'Motorista executivo em João Pessoa: Tambaú e JPA',
        'description' => 'Motorista executivo em João Pessoa: Tambaú, Manaíra e Castro Pinto (JPA), em Santa Rita. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Embarque em João Pessoa: hotel, Tambaú e JPA',
        'og_description' => 'O motorista combina Tambaú com Castro Pinto (JPA), em Santa Rita. Informe nome do hotel na orla.',
        'og_image_alt' => 'Carro executivo em via de João Pessoa',
    ],
    'kicker' => 'Capital paraibana · PB',
    'h1' => 'Em João Pessoa, de Tambaú a Castro Pinto (JPA), em Santa Rita',
    'faq_h2' => 'Dúvidas de quem embarca em João Pessoa',
    'faq' => [
        [
            'pergunta' => 'Quem está em João Pessoa embarca no JPA dentro da cidade?',
            'resposta' => 'Não. De João Pessoa o JPA (Castro Pinto) fica em Santa Rita. O trecho sai de Tambaú pela BR-230.',
        ],
        [
            'pergunta' => 'Em João Pessoa, vocês buscam em Tambaú?',
            'resposta' => 'Sim, em João Pessoa. Envie nome do hotel na orla em Tambaú. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De João Pessoa vocês fazem Cabedelo?',
            'resposta' => 'Sim, saindo de João Pessoa. Cabedelo não é o recorte de Tambaú; o horário pela Epitácio Pessoa sai sob consulta.',
        ],
        [
            'pergunta' => 'Em João Pessoa o carro fica entre Tambaú e Manaíra?',
            'resposta' => 'Sim, em João Pessoa. A hora à disposição cobre hotel na orla em Tambaú e orla executiva em Manaíra.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em João Pessoa e o JPA',
        'texto' => 'Diga o ponto em Tambaú ou Manaíra, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em João Pessoa',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'paraiba',
            'ancora' => 'João Pessoa e o recorte de Capital paraibana',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'pernambuco',
            'cidade' => 'recife',
            'ancora' => 'Motorista em recife',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-grande-do-norte',
            'cidade' => 'natal',
            'ancora' => 'Motorista em natal',
        ],
    ],
    'epigrafe' => 'Tambaú não é o mesmo recuo de Manaíra. O motorista segura o acesso; o passageiro segura o horário.',
    'abertura' => [
        'h2' => 'João Pessoa: origem na orla, destino no terminal certo',
        'texto' => [
            'João Pessoa usa Castro Pinto (JPA), em Santa Rita. Quem embarca em Tambaú não está no município da pista. A BR-230 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
            'Manaíra pede orla executiva. Centro pede pauta institucional. Quando Cabedelo entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela Epitácio Pessoa.',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'Tambaú: o relógio do embarque',
            'texto' => 'Tambaú concentra hotel na orla. Informe nome do hotel na orla.',
        ],
        [
            'h2' => 'Manaíra e Centro',
            'texto' => 'Manaíra pede orla executiva. Centro pede pauta institucional. A ordem muda o intervalo mais que o mapa.',
        ],
        [
            'h2' => 'Castro Pinto (JPA), em Santa Rita',
            'texto' => 'Castro Pinto (JPA) fica em Santa Rita, não em João Pessoa. O trecho sai pela BR-230. Diga o IATA e o número do voo.',
        ],
    ],
    'aeroportos' => [
        'h2' => 'Terminal e vazão a partir de João Pessoa',
        'itens' => [
            [
                'h3' => 'Castro Pinto — JPA',
                'texto' => 'Castro Pinto (JPA) fica em Santa Rita, não em João Pessoa. O trecho sai pela BR-230. Diga o IATA e o número do voo.',
            ],
            [
                'h3' => 'BR-230 e a vazão para Cabedelo',
                'texto' => 'Cabedelo e Bayeux aparecem no mesmo pedido de João Pessoa. Isso é viagem, não segunda corrida em Tambaú.',
            ],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque em João Pessoa',
        'lista' => [
            'Hotel, prédio ou empresa com nome — “em Tambaú” não basta.',
            'Qual terminal: JPA em Santa Rita.',
            'Se Cabedelo entra depois, a ordem muda o recorte.',
        ],
    ],
];
