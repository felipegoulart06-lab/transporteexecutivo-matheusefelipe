<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Indaiatuba',
    'geo' => [
        'lat' => -23.0884,
        'lng' => -47.2181,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Indaiatuba',
    'seo' => [
        'title' => 'Motorista executivo em Indaiatuba: Centro e VCP',
        'description' => 'Motorista executivo em Indaiatuba: Centro, Helvétia e Viracopos (VCP), em Campinas. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Agenda em Indaiatuba com motorista — Helvétia e Viracopos',
        'og_description' => 'O motorista combina Centro com Viracopos (VCP), em Campinas. Informe nome do condomínio.',
        'og_image_alt' => 'Carro executivo em via de Indaiatuba',
    ],
    'kicker' => 'Região Metropolitana de Campinas · SP',
    'h1' => 'Em Indaiatuba, de Centro a Viracopos (VCP), em Campinas',
    'faq_h2' => 'Dúvidas de quem embarca em Indaiatuba',
    'faq' => [
        [
            'pergunta' => 'Quem está em Indaiatuba embarca no VCP dentro da cidade?',
            'resposta' => 'Não. De Indaiatuba o VCP (Viracopos) fica em Campinas. O trecho sai de Centro pela SP-075.',
        ],
        [
            'pergunta' => 'Em Indaiatuba, vocês buscam em Centro?',
            'resposta' => 'Sim, em Indaiatuba. Envie nome do condomínio em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Indaiatuba vocês fazem Campinas?',
            'resposta' => 'Sim, saindo de Indaiatuba. Campinas não é o recorte de Centro; o horário pela Bandeirantes sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Indaiatuba o carro fica entre Centro e Helvétia?',
            'resposta' => 'Sim, em Indaiatuba. A hora à disposição cobre sede e hotel em Centro e condomínio e VCP em Helvétia.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Indaiatuba e o VCP',
        'texto' => 'Diga o ponto em Centro ou Helvétia, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Indaiatuba',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'sao-paulo',
            'ancora' => 'Indaiatuba e o recorte de Região Metropolitana de Campinas',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'campinas',
            'ancora' => 'Motorista em campinas',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'jundiai',
            'ancora' => 'Motorista em jundiai',
        ],
    ],
    'preambulo' => 'Indaiatuba usa Viracopos (VCP), em Campinas. Quem embarca em Centro não está no município da pista. A SP-075 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
    'artigos' => [
        [
            'h2' => 'Centro pede protocolo, não pin',
            'texto' => 'Origem frequente para sede e hotel. Informe nome do condomínio. Centro não compartilha o recuo de Helvétia.',
        ],
        [
            'h2' => 'Helvétia e Jardim Pompéia',
            'texto' => 'Helvétia pede condomínio e VCP. Jardim Pompéia pede bairro. Quando Campinas entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela Bandeirantes.',
        ],
        [
            'h2' => 'Viracopos (VCP)',
            'texto' => 'Viracopos (VCP) fica em Campinas, não em Indaiatuba. O trecho sai pela acesso Helvétia / Santos Dumont. Diga o IATA e o número do voo.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens da ordem do dia em Indaiatuba',
        'itens' => [
            [
                'h3' => 'Centro',
                'texto' => 'Origem frequente para sede e hotel. Informe nome do condomínio. Centro não compartilha o recuo de Helvétia.',
            ],
            [
                'h3' => 'Helvétia',
                'texto' => 'Origem frequente para condomínio e VCP. Informe nome do condomínio. Helvétia não compartilha o recuo de Centro.',
            ],
            [
                'h3' => 'Jardim Pompéia',
                'texto' => 'Origem frequente para bairro. Informe nome do condomínio. Jardim Pompéia não compartilha o recuo de Centro.',
            ],
        ],
    ],
];
