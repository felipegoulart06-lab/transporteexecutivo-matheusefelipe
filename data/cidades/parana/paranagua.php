<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'Paranaguá',
    'geo' => ['lat' => -25.5161, 'lng' => -48.5225],
    'imagem' => 'sul.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Paranaguá',
    'seo' => [
        'title' => 'Motorista em Paranaguá: Porto, Centro e BR-277',
        'description' => 'Carro com motorista em Paranaguá para o porto, o Centro Histórico, Alexandra e o Afonso Pena (CWB) pela serra da BR-277. Orçamento sob consulta.',
        'og_title' => 'Traslado no porto, no Centro Histórico e na serra da 277',
        'og_description' => 'Motorista no litoral paranaense: portaria do cais, hotel no Centro e o CWB pela serra.',
        'og_image_alt' => 'Sedan executivo em via do Centro Histórico de Paranaguá',
    ],
    'kicker' => 'Litoral paranaense · PR',
    'h1' => 'Do cais ao Centro Histórico sem perder a janela da 277',
    'epigrafe' => 'Paranaguá é porto e casario no mesmo recorte. O motorista segura a portaria do cais e a serra da BR-277; o passageiro segura a pauta — não a fila na cancela nem o nevoeiro da descida.',
    'abertura' => [
        'h2' => 'Cais, Centro Histórico e a serra não cabem no mesmo atalho',
        'texto' => [
            'O Porto de Paranaguá e o Porto Dom Pedro II pedem nome na lista. O Centro Histórico concentra hotel e sede no casario. Alexandra já é outro recuo, na saída para a serra. O voo comercial sai do Afonso Pena (CWB): a BR-277 sobe a Serra do Mar até São José dos Pinhais.',
            'O serviço é de traslado e de espera: o carro já está no roteiro com o nome do hotel e o protocolo da portaria. Ilha do Mel só entra se a visita estiver combinada — não é desvio de última hora no cais.',
        ],
    ],
    'faixas' => [
        ['h2' => 'Porto, portaria e o relógio da cancela', 'texto' => 'Pauta no terminal portuário. Envie o nome na lista e o documento pedido. Sem isso, a cancela não libera — e o app não resolve o recuo do cais.'],
        ['h2' => 'Centro Histórico e o Porto Dom Pedro II', 'texto' => 'Hotel, sede e o casario. Informe o prédio; “no Centro” não distingue a Rua da Praia do recuo do cais de passageiros.'],
        ['h2' => 'Alexandra e a subida da BR-277', 'texto' => 'Quem segue a Curitiba ou ao CWB já está na serra. Alexandra é o recorte de saída; a margem da 277 sai do hotel, não do mapa em dia de nevoeiro.'],
    ],
    'aeroportos' => [
        'h2' => 'CWB na serra — o voo não pousa no cais',
        'itens' => [
            ['h3' => 'Afonso Pena — CWB', 'texto' => 'Terminal em São José dos Pinhais, pela BR-277. Combinamos o voo. A espera no desembarque integra o trecho; a serra pesa mais que o quilômetro.'],
            ['h3' => 'Quando a pauta aponta para a Ilha do Mel', 'texto' => 'A travessia e o ponto de embarque entram só se a visita estiver no roteiro. Não é o mesmo pedido do porto nem do Centro Histórico.'],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque no cais',
        'lista' => [
            'Hotel com nome — Centro Histórico ou Alexandra não bastam para o recuo.',
            'Se a pauta é no porto, nome na portaria e documento. Sem lista, a cancela não abre.',
            'Voo no CWB ou visita à Ilha do Mel entra no roteiro; a serra e a travessia não são desvio de última hora.',
        ],
    ],
    'faq_h2' => 'Dúvidas de quem junta o porto à janela da 277',
    'faq' => [
        ['pergunta' => 'Paranaguá tem aeroporto comercial?', 'resposta' => 'O voo prático é o Afonso Pena (CWB), pela serra da BR-277. Combinamos o horário da subida; o nevoeiro altera a margem mais que o mapa.'],
        ['pergunta' => 'O motorista espera no CWB se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês entram no porto com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, a cancela do cais não libera.'],
        ['pergunta' => 'Dá para incluir a Ilha do Mel depois da reunião?', 'resposta' => 'Sim, só como visita combinada. Não é o mesmo recorte do porto; o horário da travessia sai sob consulta.'],
        ['pergunta' => 'Vocês fazem Centro Histórico, Alexandra e o CWB no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. A serra da 277 pede margem própria; um motorista articula os três se o roteiro já tiver o voo.'],
    ],
    'cta' => [
        'titulo' => 'Junte o cais ao horário da BR-277',
        'texto' => 'O orçamento de Paranaguá sai sob consulta. Porto, Centro Histórico e CWB no mesmo WhatsApp.',
        'botao' => 'Pedir carro em Paranaguá',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'parana', 'ancora' => 'Foz, Londrina e o recorte paranaense'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'curitiba', 'ancora' => 'Batel, Centro Cívico e o Afonso Pena'],
        ['tipo' => 'cidade', 'estado' => 'parana', 'cidade' => 'sao-jose-dos-pinhais', 'ancora' => 'Centro, Afonso Pena e o terminal CWB'],
    ],
];
