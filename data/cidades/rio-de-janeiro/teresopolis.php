<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Teresópolis',
    'geo' => [
        'lat' => -22.4165,
        'lng' => -42.9752,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Teresópolis',
    'seo' => [
        'title' => 'Motorista executivo em Teresópolis: Centro e GIG',
        'description' => 'Motorista executivo em Teresópolis: Centro, Alto e Galeão (GIG), em Rio de Janeiro. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Agenda em Teresópolis com motorista — Alto e Galeão',
        'og_description' => 'O motorista combina Centro com Galeão (GIG), em Rio de Janeiro. Informe nome do hotel.',
        'og_image_alt' => 'Carro executivo em via de Teresópolis',
    ],
    'kicker' => 'Região Serrana · RJ',
    'h1' => 'Teresópolis: entre Centro, Alto e o terminal certo',
    'faq_h2' => 'Dúvidas de quem embarca em Teresópolis',
    'faq' => [
        [
            'pergunta' => 'Quem está em Teresópolis embarca no GIG dentro da cidade?',
            'resposta' => 'Não. De Teresópolis o GIG (Galeão) fica em Rio de Janeiro. O trecho sai de Centro pela BR-116.',
        ],
        [
            'pergunta' => 'Em Teresópolis, vocês buscam em Centro?',
            'resposta' => 'Sim, em Teresópolis. Envie nome do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Teresópolis vocês fazem Petrópolis?',
            'resposta' => 'Sim, saindo de Teresópolis. Petrópolis não é o recorte de Centro; o horário pela BR-495 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Teresópolis, GIG e SDU são o mesmo recorte?',
            'resposta' => 'Não, em Teresópolis. Os dois ficam em Rio de Janeiro, mas o acesso muda: GIG pela BR-116 e SDU pela BR-116. Diga o IATA.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Teresópolis e o GIG',
        'texto' => 'Diga o ponto em Centro ou Alto, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Teresópolis',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'rio-de-janeiro',
            'ancora' => 'Teresópolis e o recorte de Região Serrana',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-de-janeiro',
            'cidade' => 'petropolis',
            'ancora' => 'Motorista em petropolis',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-de-janeiro',
            'cidade' => 'rio-de-janeiro',
            'ancora' => 'Motorista em rio de janeiro',
        ],
    ],
    'olho' => 'Centro e Galeão (GIG), em Rio de Janeiro não cabem no mesmo aceite tardio.',
    'capitulos' => [
        [
            'h2' => 'Centro e o recuo da pauta',
            'texto' => 'Teresópolis usa Galeão (GIG), em Rio de Janeiro. Quem embarca em Centro não está no município da pista. A BR-116 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
        ],
        [
            'h2' => 'Alto, Várzea e a ordem do dia',
            'itens' => [
                [
                    'h3' => 'Alto',
                    'texto' => 'Origem frequente para bairro alto. Informe nome do hotel. Alto não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Várzea',
                    'texto' => 'Origem frequente para eixo comercial. Informe nome do hotel. Várzea não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Granja Guarani',
                    'texto' => 'Origem frequente para condomínio. Informe nome do hotel. Granja Guarani não compartilha o recuo de Centro.',
                ],
            ],
        ],
        [
            'h2' => 'Galeão — GIG',
            'texto' => 'Galeão (GIG) fica em Rio de Janeiro, não em Teresópolis. O trecho sai pela BR-116. Diga o IATA e o número do voo.',
        ],
    ],
    'passos' => [
        'h2' => 'Como solicitar em Teresópolis',
        'itens' => [
            [
                'num' => '01',
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do hotel. Autocomplete não resolve dois acessos em Centro.',
            ],
            [
                'num' => '02',
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o GIG ou Petrópolis entra no dia.',
            ],
            [
                'num' => '03',
                'titulo' => 'Confirmação',
                'texto' => 'Em Teresópolis, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
