<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Contagem',
    'geo' => [
        'lat' => -19.9317,
        'lng' => -44.0536,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Contagem',
    'seo' => [
        'title' => 'Motorista executivo em Contagem: Cidade Industrial e CNF',
        'description' => 'Carro com motorista em Contagem para Cidade Industrial, Eldorado e CNF. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Agenda em Contagem com motorista — Eldorado e Confins',
        'og_description' => 'O motorista combina Cidade Industrial com Confins (CNF), em Confins. Informe nome na lista da portaria.',
        'og_image_alt' => 'Carro executivo em via de Contagem',
    ],
    'kicker' => 'Região Metropolitana de BH · MG',
    'h1' => 'Em Contagem, de Cidade Industrial a Confins (CNF), em Confins',
    'faq_h2' => 'Dúvidas de quem embarca em Contagem',
    'faq' => [
        [
            'pergunta' => 'Quem está em Contagem embarca no CNF dentro da cidade?',
            'resposta' => 'Não. De Contagem o CNF (Confins) fica em Confins. O trecho sai de Cidade Industrial pela Anel Rodoviário.',
        ],
        [
            'pergunta' => 'Em Contagem, vocês buscam em Cidade Industrial?',
            'resposta' => 'Sim, em Contagem. Envie nome na lista da portaria em Cidade Industrial. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Contagem vocês fazem Belo Horizonte?',
            'resposta' => 'Sim, saindo de Contagem. Belo Horizonte não é o recorte de Cidade Industrial; o horário pela BR-381 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Contagem o carro fica entre Cidade Industrial e Eldorado?',
            'resposta' => 'Sim, em Contagem. A hora à disposição cobre portaria industrial em Cidade Industrial e hotel e comércio em Eldorado.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Contagem e o CNF',
        'texto' => 'Diga o ponto em Cidade Industrial ou Eldorado, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Contagem',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'minas-gerais',
            'ancora' => 'Contagem e o recorte de Região Metropolitana de BH',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'minas-gerais',
            'cidade' => 'belo-horizonte',
            'ancora' => 'Motorista em belo horizonte',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'minas-gerais',
            'cidade' => 'ipatinga',
            'ancora' => 'Motorista em ipatinga',
        ],
    ],
    'preambulo' => 'Contagem usa Confins (CNF), em Confins. Quem embarca em Cidade Industrial não está no município da pista. A Anel Rodoviário é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'artigos' => [
        [
            'h2' => 'Cidade Industrial pede protocolo, não pin',
            'texto' => 'Origem frequente para portaria industrial. Informe nome na lista da portaria. Cidade Industrial não compartilha o recuo de Eldorado.',
        ],
        [
            'h2' => 'Eldorado e Centro',
            'texto' => 'Eldorado pede hotel e comércio. Centro pede sede. Quando Belo Horizonte entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela BR-381.',
        ],
        [
            'h2' => 'Confins (CNF)',
            'texto' => 'Confins (CNF) fica em Confins, não em Contagem. O trecho sai pela Anel / MG-010. Diga o IATA e o número do voo.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens da ordem do dia em Contagem',
        'itens' => [
            [
                'h3' => 'Cidade Industrial',
                'texto' => 'Origem frequente para portaria industrial. Informe nome na lista da portaria. Cidade Industrial não compartilha o recuo de Eldorado.',
            ],
            [
                'h3' => 'Eldorado',
                'texto' => 'Origem frequente para hotel e comércio. Informe nome na lista da portaria. Eldorado não compartilha o recuo de Cidade Industrial.',
            ],
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede. Informe nome na lista da portaria. Centro não compartilha o recuo de Cidade Industrial.',
            ],
        ],
    ],
];
