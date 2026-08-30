<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'São Carlos',
    'geo' => [
        'lat' => -22.0087,
        'lng' => -47.8909,
    ],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em São Carlos',
    'seo' => [
        'title' => 'Motorista executivo em São Carlos: Centro e QSC',
        'description' => 'Carro com motorista em São Carlos para Centro, Cidade Jardim e QSC. Informe o ponto de embarque e o horário. Orçamento sob consulta.',
        'og_title' => 'Agenda em São Carlos com motorista — Cidade Jardim e Mário Pereira Lopes',
        'og_description' => 'O motorista combina Centro com Mário Pereira Lopes (QSC), no próprio município. Informe nome do campus ou do hotel.',
        'og_image_alt' => 'Carro executivo em via de São Carlos',
    ],
    'kicker' => 'Interior paulista · SP',
    'h1' => 'São Carlos — Centro de manhã, QSC quando o voo entra',
    'faq_h2' => 'Dúvidas de quem embarca em São Carlos',
    'faq' => [
        [
            'pergunta' => 'Em São Carlos, o QSC fica no próprio município?',
            'resposta' => 'Sim. Em São Carlos, Mário Pereira Lopes (QSC) fica no município. Informe o acesso via SP-310.',
        ],
        [
            'pergunta' => 'Em São Carlos, vocês buscam em Centro?',
            'resposta' => 'Sim, em São Carlos. Envie nome do campus ou do hotel em Centro. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De São Carlos vocês fazem Araraquara?',
            'resposta' => 'Sim, saindo de São Carlos. Araraquara não é o recorte de Centro; o horário pela SP-318 sai sob consulta.',
        ],
        [
            'pergunta' => 'Em São Carlos, QSC e RAO são o mesmo recorte?',
            'resposta' => 'Não, em São Carlos. QSC fica em São Carlos; RAO fica em Ribeirão Preto. Diga o IATA no pedido.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em São Carlos e o QSC',
        'texto' => 'Diga o ponto em Centro ou Cidade Jardim, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em São Carlos',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'sao-paulo',
            'ancora' => 'São Carlos e o recorte de Interior paulista',
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
            'cidade' => 'ribeirao-preto',
            'ancora' => 'Motorista em ribeirao preto',
        ],
    ],
    'olho' => 'Centro e Mário Pereira Lopes (QSC), no próprio município não cabem no mesmo aceite tardio.',
    'capitulos' => [
        [
            'h2' => 'Centro e o recuo da pauta',
            'texto' => 'São Carlos concentra Centro (sede e hotel) e Mário Pereira Lopes (QSC) no mesmo município. O motorista precisa do ponto de embarque e do QSC no mesmo recado — “me busca em São Carlos” não define o recuo.',
        ],
        [
            'h2' => 'Cidade Jardim, USP e a ordem do dia',
            'itens' => [
                [
                    'h3' => 'Cidade Jardim',
                    'texto' => 'Origem frequente para bairro. Informe nome do campus ou do hotel. Cidade Jardim não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'USP',
                    'texto' => 'Origem frequente para campus USP. Informe nome do campus ou do hotel. USP não compartilha o recuo de Centro.',
                ],
                [
                    'h3' => 'UFSCar',
                    'texto' => 'Origem frequente para campus UFSCar. Informe nome do campus ou do hotel. UFSCar não compartilha o recuo de Centro.',
                ],
            ],
        ],
        [
            'h2' => 'Mário Pereira Lopes — QSC',
            'texto' => 'Mário Pereira Lopes (QSC) fica em São Carlos. Acesso: SP-310. Combinamos o voo; a espera no desembarque integra o trecho.',
        ],
    ],
    'passos' => [
        'h2' => 'Como solicitar em São Carlos',
        'itens' => [
            [
                'num' => '01',
                'titulo' => 'Ponto de embarque',
                'texto' => 'Rua, número e nome do campus ou do hotel. Autocomplete não resolve dois acessos em Centro.',
            ],
            [
                'num' => '02',
                'titulo' => 'Destino e tipo de janela',
                'texto' => 'Ida, ida e volta ou hora à disposição. Diga se o QSC ou Araraquara entra no dia.',
            ],
            [
                'num' => '03',
                'titulo' => 'Confirmação',
                'texto' => 'Em São Carlos, nome e WhatsApp. Devolvemos o horário de apresentação.',
            ],
        ],
    ],
];
