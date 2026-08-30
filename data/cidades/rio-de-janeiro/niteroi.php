<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Niterói',
    'geo' => [
        'lat' => -22.8832,
        'lng' => -43.1034,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Niterói',
    'seo' => [
        'title' => 'Traslado executivo em Niterói: Icaraí e ponte Rio-Niterói',
        'description' => 'Motorista executivo em Niterói: Icaraí, Centro e Santos Dumont (SDU), em Rio de Janeiro. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Traslado em Niterói: Icaraí e SDU',
        'og_description' => 'O motorista combina Icaraí com Santos Dumont (SDU), em Rio de Janeiro. Informe nome do hotel e o recuo na orla.',
        'og_image_alt' => 'Carro executivo em via de Niterói',
    ],
    'kicker' => 'Região Metropolitana do Rio · RJ',
    'h1' => 'Niterói: entre Icaraí, Centro e o terminal certo',
    'faq_h2' => 'Dúvidas de quem embarca em Niterói',
    'faq' => [
        [
            'pergunta' => 'Quem está em Niterói embarca no SDU dentro da cidade?',
            'resposta' => 'Não. De Niterói o SDU (Santos Dumont) fica em Rio de Janeiro. O trecho sai de Icaraí pela ponte Rio-Niterói.',
        ],
        [
            'pergunta' => 'Em Niterói, vocês buscam em Icaraí?',
            'resposta' => 'Sim, em Niterói. Envie nome do hotel e o recuo na orla em Icaraí. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Niterói vocês fazem Rio de Janeiro?',
            'resposta' => 'Sim, saindo de Niterói. Rio de Janeiro não é o recorte de Icaraí; o horário pela RJ-104 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Niterói, SDU e GIG são o mesmo recorte?',
            'resposta' => 'Não, em Niterói. Os dois ficam em Rio de Janeiro, mas o acesso muda: SDU pela ponte Rio-Niterói e GIG pela ponte e Linha Vermelha. Diga o IATA.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Niterói e o SDU',
        'texto' => 'Diga o ponto em Icaraí ou Centro, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Niterói',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'rio-de-janeiro',
            'ancora' => 'Niterói e o recorte de Região Metropolitana do Rio',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'rio-de-janeiro',
            'cidade' => 'rio-de-janeiro',
            'ancora' => 'Motorista em rio de janeiro',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'santos',
            'ancora' => 'Motorista em santos',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'Niterói se cruza por ponte Rio-Niterói, não em linha reta',
            'texto' => 'Niterói usa Santos Dumont (SDU), em Rio de Janeiro. Quem embarca em Icaraí não está no município da pista. A ponte Rio-Niterói é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
        ],
        [
            'h2' => 'Três eixos, três recuos',
            'itens' => [
                [
                    'h3' => 'Icaraí',
                    'texto' => 'Origem frequente para hotel na orla. Informe nome do hotel e o recuo na orla. Icaraí não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'Centro',
                    'texto' => 'Origem frequente para pauta institucional. Informe nome do hotel e o recuo na orla. Centro não compartilha o recuo de Icaraí.',
                ],
                [
                    'h3' => 'São Francisco',
                    'texto' => 'Origem frequente para bairro. Informe nome do hotel e o recuo na orla. São Francisco não compartilha o recuo de Icaraí.',
                ],
            ],
        ],
        [
            'h2' => 'Santos Dumont — SDU',
            'texto' => 'Santos Dumont (SDU) fica em Rio de Janeiro, não em Niterói. O trecho sai pela ponte Rio-Niterói. Diga o IATA e o número do voo.',
        ],
    ],
];
