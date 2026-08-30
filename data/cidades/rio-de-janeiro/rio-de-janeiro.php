<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'Rio de Janeiro',
    'geo' => [
        'lat' => -22.9068,
        'lng' => -43.1729,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Rio de Janeiro',
    'seo' => [
        'title' => 'Motorista executivo em Rio de Janeiro: Zona Sul e SDU',
        'description' => 'Carro com motorista em Rio de Janeiro para Zona Sul, Centro e SDU. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Traslado em Rio de Janeiro: Zona Sul e SDU',
        'og_description' => 'O motorista combina Zona Sul com Santos Dumont (SDU), no próprio município. Informe nome do hotel e o recuo.',
        'og_image_alt' => 'Carro executivo em via de Rio de Janeiro',
    ],
    'kicker' => 'Cidade do Rio · RJ',
    'h1' => 'Rio de Janeiro — Zona Sul de manhã, SDU quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em Rio de Janeiro',
    'faq' => [
        [
            'pergunta' => 'Em Rio de Janeiro, o SDU fica no próprio município?',
            'resposta' => 'Sim. Em Rio de Janeiro, Santos Dumont (SDU) fica no município. Informe o acesso via Aterro.',
        ],
        [
            'pergunta' => 'Em Rio de Janeiro, vocês buscam em Zona Sul?',
            'resposta' => 'Sim, em Rio de Janeiro. Envie nome do hotel e o recuo em Zona Sul. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Rio de Janeiro vocês fazem Niterói?',
            'resposta' => 'Sim, saindo de Rio de Janeiro. Niterói não é o recorte de Zona Sul; o horário pela Linha Amarela sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Rio de Janeiro, SDU e GIG são o mesmo recorte?',
            'resposta' => 'Não, em Rio de Janeiro. Os dois ficam em Rio de Janeiro, mas o acesso muda: SDU pela Aterro e GIG pela Avenida Brasil. Diga o IATA.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Rio de Janeiro e o SDU',
        'texto' => 'Diga o ponto em Zona Sul ou Centro, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Rio de Janeiro',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'rio-de-janeiro',
            'ancora' => 'Rio de Janeiro e o recorte de Cidade do Rio',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'sao-paulo',
            'cidade' => 'sao-paulo',
            'ancora' => 'Motorista em sao paulo',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'bahia',
            'cidade' => 'salvador',
            'ancora' => 'Motorista em salvador',
        ],
    ],
    'epigrafe' => 'Zona Sul não é o mesmo recuo de Centro. O motorista segura o acesso; o passageiro segura o horário.',
    'abertura' => [
        'h2' => 'Rio de Janeiro: origem na orla, destino no terminal certo',
        'texto' => [
            'Rio de Janeiro concentra Zona Sul (hotel na orla) e Santos Dumont (SDU) no mesmo município. O motorista precisa do ponto de embarque e do SDU no mesmo recado — “me busca em Rio de Janeiro” não define o recuo.',
            'Centro pede reunião no centro. Barra da Tijuca pede hotel na Barra. Quando Niterói entra no pedido, o recorte deixa de ser urbano: horário sob consulta, pela Linha Amarela.',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'Zona Sul: o relógio do embarque',
            'texto' => 'Zona Sul concentra hotel na orla. Informe nome do hotel e o recuo.',
        ],
        [
            'h2' => 'Centro e Barra da Tijuca',
            'texto' => 'Centro pede reunião no centro. Barra da Tijuca pede hotel na Barra. A ordem muda o intervalo mais que o mapa.',
        ],
        [
            'h2' => 'Santos Dumont (SDU), no próprio município',
            'texto' => 'Santos Dumont (SDU) fica em Rio de Janeiro. Acesso: Aterro. Combinamos o voo; a espera no desembarque integra o trecho.',
        ],
    ],
    'aeroportos' => [
        'h2' => 'Terminal e vazão a partir de Rio de Janeiro',
        'itens' => [
            [
                'h3' => 'Santos Dumont — SDU',
                'texto' => 'Santos Dumont (SDU) fica em Rio de Janeiro. Acesso: Aterro. Combinamos o voo; a espera no desembarque integra o trecho.',
            ],
            [
                'h3' => 'Galeão — GIG',
                'texto' => 'Galeão (GIG) fica em Rio de Janeiro. Acesso: Avenida Brasil. Combinamos o voo; a espera no desembarque integra o trecho.',
            ],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque em Rio de Janeiro',
        'lista' => [
            'Hotel, prédio ou empresa com nome — “em Zona Sul” não basta.',
            'Qual terminal: SDU em Rio de Janeiro ou GIG em Rio de Janeiro.',
            'Se Niterói entra depois, a ordem muda o recorte.',
        ],
    ],
];
