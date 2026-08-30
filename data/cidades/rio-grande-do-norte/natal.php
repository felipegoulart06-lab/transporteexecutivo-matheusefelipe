<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Natal',
    'geo' => [
        'lat' => -5.79448,
        'lng' => -35.211,
    ],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Natal',
    'seo' => [
        'title' => 'Motorista executivo em Natal: Ponta Negra e NAT',
        'description' => 'Carro com motorista em Natal para Ponta Negra, Via Costeira e NAT. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Embarque em Natal: hotel, Ponta Negra e NAT',
        'og_description' => 'O motorista combina Ponta Negra com Governador Aluízio Alves (NAT), em São Gonçalo do Amarante. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Natal',
    ],
    'kicker' => 'Capital potiguar · RN',
    'h1' => 'Em Natal: do embarque em Ponta Negra ao NAT',
    'faq_h2' => 'Dúvidas de quem embarca em Natal',
    'faq' => [
        [
            'pergunta' => 'Quem está em Natal embarca no NAT dentro da cidade?',
            'resposta' => 'Não. De Natal o NAT (Governador Aluízio Alves) fica em São Gonçalo do Amarante. O trecho sai de Ponta Negra pela BR-101.',
        ],
        [
            'pergunta' => 'Em Natal, vocês buscam em Ponta Negra?',
            'resposta' => 'Sim, em Natal. Envie nome do hotel em Ponta Negra. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Natal vocês fazem Parnamirim?',
            'resposta' => 'Sim, saindo de Natal. Parnamirim não é o recorte de Ponta Negra; o horário pela Via Costeira sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Natal o carro fica entre Ponta Negra e Via Costeira?',
            'resposta' => 'Sim, em Natal. A hora à disposição cobre hotel na orla em Ponta Negra e hotéis da costeira em Via Costeira.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Natal e o NAT',
        'texto' => 'Diga o ponto em Ponta Negra ou Via Costeira, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Natal',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'rio-grande-do-norte',
            'ancora' => 'Natal e o recorte de Capital potiguar',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'paraiba',
            'cidade' => 'joao-pessoa',
            'ancora' => 'Motorista em joao pessoa',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'ceara',
            'cidade' => 'fortaleza',
            'ancora' => 'Motorista em fortaleza',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'Natal se cruza por BR-101, não em linha reta',
            'texto' => 'Natal usa Governador Aluízio Alves (NAT), em São Gonçalo do Amarante. Quem embarca em Ponta Negra não está no município da pista. A BR-101 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
        ],
        [
            'h2' => 'Três eixos, três recuos',
            'itens' => [
                [
                    'h3' => 'Ponta Negra',
                    'texto' => 'Origem frequente para hotel na orla. Informe nome do hotel. Ponta Negra não compartilha o recuo de Via Costeira.',
                ],
                [
                    'h3' => 'Via Costeira',
                    'texto' => 'Origem frequente para hotéis da costeira. Informe nome do hotel. Via Costeira não compartilha o recuo de Ponta Negra.',
                ],
                [
                    'h3' => 'Petrópolis',
                    'texto' => 'Origem frequente para clínica e sede. Informe nome do hotel. Petrópolis não compartilha o recuo de Ponta Negra.',
                ],
            ],
        ],
        [
            'h2' => 'Governador Aluízio Alves — NAT',
            'texto' => 'Governador Aluízio Alves (NAT) fica em São Gonçalo do Amarante, não em Natal. O trecho sai pela RN-160. Diga o IATA e o número do voo.',
        ],
    ],
];
