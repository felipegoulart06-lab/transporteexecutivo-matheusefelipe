<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Sete Lagoas',
    'geo' => [
        'lat' => -19.4569,
        'lng' => -44.2413,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Sete Lagoas',
    'seo' => [
        'title' => 'Motorista executivo em Sete Lagoas: Centro e CNF',
        'description' => 'Motorista executivo em Sete Lagoas: Centro, Canadá e Confins (CNF), em Confins. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Agenda em Sete Lagoas com motorista — Canadá e Confins',
        'og_description' => 'O motorista combina Centro com Confins (CNF), em Confins. Informe nome da empresa ou do hotel.',
        'og_image_alt' => 'Carro executivo em via de Sete Lagoas',
    ],
    'kicker' => 'Região Central mineira · MG',
    'h1' => 'Sete Lagoas — Centro de manhã, CNF quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Sete Lagoas',
    'faq' => [
        [
            'pergunta' => 'Quem está em Sete Lagoas embarca no CNF dentro da cidade?',
            'resposta' => 'Não. De Sete Lagoas o CNF (Confins) fica em Confins. O trecho sai de Centro pela BR-040.',
        ],
        [
            'pergunta' => 'Em Sete Lagoas, vocês buscam em Centro?',
            'resposta' => 'Sim, em Sete Lagoas. Envie nome da empresa ou do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Sete Lagoas vocês fazem Belo Horizonte?',
            'resposta' => 'Sim, saindo de Sete Lagoas. Belo Horizonte não é o recorte de Centro; o horário pela MG-238 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Sete Lagoas o carro fica entre Centro e Canadá?',
            'resposta' => 'Sim, em Sete Lagoas. A hora à disposição cobre sede e hotel em Centro e bairro em Canadá.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Sete Lagoas e o CNF',
        'texto' => 'Diga o ponto em Centro ou Canadá, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Sete Lagoas',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'minas-gerais',
            'ancora' => 'Sete Lagoas e o recorte de Região Central mineira',
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
            'cidade' => 'contagem',
            'ancora' => 'Motorista em contagem',
        ],
    ],
    'preambulo' => 'Sete Lagoas usa Confins (CNF), em Confins. Quem embarca em Centro não está no município da pista. A BR-040 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'artigos' => [
        [
            'h2' => 'Centro pede protocolo, não pin',
            'texto' => 'Origem frequente para sede e hotel. Informe nome da empresa ou do hotel. Centro não compartilha o recuo de Canadá.',
        ],
        [
            'h2' => 'Canadá e Progresso',
            'texto' => 'Canadá pede bairro. Progresso pede residencial. Quando Belo Horizonte entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela MG-238.',
        ],
        [
            'h2' => 'Confins (CNF)',
            'texto' => 'Confins (CNF) fica em Confins, não em Sete Lagoas. O trecho sai pela BR-040. Diga o IATA e o número do voo.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens da ordem do dia em Sete Lagoas',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome da empresa ou do hotel. Centro não compartilha o recuo de Canadá.',
            ],
            [
                'h3' => 'Canadá',
                'texto' => 'Origem frequente para bairro. Informe nome da empresa ou do hotel. Canadá não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Progresso',
                'texto' => 'Origem frequente para residencial. Informe nome da empresa ou do hotel. Progresso não compartilha o recuo de Centro.',
            ],
        ],
    ],
];
