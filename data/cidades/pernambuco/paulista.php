<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'Paulista',
    'geo' => ['lat' => -7.9408, 'lng' => -34.8728],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Paulista',
    'seo' => [
        'title' => 'Norte da RMR: motorista em Paulista, Janga e REC',
        'description' => 'Motorista em Paulista para Janga, Maria Farinha, Centro, Conceição e o trecho até o REC sem cruzar o centro do Recife duas vezes. Orçamento sob consulta.',
        'og_title' => 'Traslado em Janga, Maria Farinha e no aeroporto REC',
        'og_description' => 'Carro no norte da RMR: hotel na orla de Paulista, pauta no Centro e o recuo até o Guararapes.',
        'og_image_alt' => 'Sedan executivo na orla de Janga, em Paulista',
    ],
    'kicker' => 'Norte da Região Metropolitana · PE',
    'h1' => 'Janga, Maria Farinha e o REC sem cruzar o centro do Recife duas vezes',
    'epigrafe' => 'Paulista é o norte da RMR: Janga e Maria Farinha pedem a via litorânea. O centro do Recife não é passagem obrigatória até o Guararapes — só entra se a pauta o citar.',
    'abertura' => [
        'h2' => 'A orla de Paulista não é atalho da capital, nem o inverso',
        'texto' => [
            'Janga e Maria Farinha concentram o pernoite de praia. Centro e Conceição puxam para o núcleo municipal. O Aeroporto Internacional do Recife (REC) fica ao sul da mancha: o motorista monta o recuo pela via que evita a volta desnecessária pelo Recife Antigo ou pela Boa Vista.',
            'O serviço é de traslado e de espera. O hotel entra pelo nome — Janga ou Maria Farinha sozinhos não definem a porta. Olinda cola ao sul; o Sítio Histórico só entra se estiver no pedido.',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'Janga e o relógio da via litorânea',
            'texto' => 'Hotel, calçadão e o recuo da praia. Informe o trecho e o prédio; a numeração se repete e o sentido muda no fim de semana. “No Janga” não coloca o carro na porta certa.',
        ],
        [
            'h2' => 'Maria Farinha, o Centro e a Conceição',
            'texto' => 'Maria Farinha puxa para o norte da orla; o Centro e a Conceição voltam ao núcleo. Os três não compartilham o mesmo recuo. A ordem das vias pesa mais que a distância no mapa.',
        ],
        [
            'h2' => 'O REC pelo norte — sem a volta pelo miolo do Recife',
            'texto' => 'Do hotel em Janga ao Guararapes, o roteiro evita cruzar o centro da capital duas vezes. Informe se há parada em Olinda ou no Recife Antigo; cada uma redesenha o recuo.',
        ],
    ],
    'aeroportos' => [
        'h2' => 'Guararapes — REC ao sul, com recuo desenhado',
        'itens' => [
            [
                'h3' => 'Recife — REC',
                'texto' => 'Terminal no município do Recife. Combinamos o voo. Até Janga ou Maria Farinha o intervalo é metropolitano; a margem sai da via litorânea e da PE, não do atalho pelo centro.',
            ],
            [
                'h3' => 'Quando a pauta aponta para Olinda',
                'texto' => 'Casa Caiada e o Sítio Histórico colam no sul de Paulista. Entram só se o endereço estiver no roteiro — não como desvio de última hora na ladeira.',
            ],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque no norte da RMR',
        'lista' => [
            'Hotel com nome — Janga ou Maria Farinha não bastam para o recuo.',
            'Se o voo é no REC, número e horário. A margem sai da via, não do centro do Recife.',
            'Olinda, Conceição ou o Centro de Paulista entram no roteiro; não são desvio improvisado na orla.',
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pauta Janga e o Guararapes',
    'faq' => [
        [
            'pergunta' => 'É preciso cruzar o centro do Recife para chegar ao REC?',
            'resposta' => 'Não. Do norte da RMR o recuo se desenha pela via que evita a volta pelo miolo da capital. Informe se há parada no Recife; sem isso, o centro não entra.',
        ],
        [
            'pergunta' => 'Janga e Maria Farinha são o mesmo recuo?',
            'resposta' => 'Não. São trechos distintos da orla de Paulista. Envie o nome do hotel e a rua; o calçadão sozinho não define a porta.',
        ],
        [
            'pergunta' => 'Vocês fazem Janga, Conceição e o REC no mesmo dia?',
            'resposta' => 'Sim. Informe a ordem. Um motorista articula orla, núcleo municipal e o terminal sem três aceites.',
        ],
        [
            'pergunta' => 'Dá para incluir Olinda depois do hotel em Maria Farinha?',
            'resposta' => 'Sim, quando o endereço entra no roteiro. Os municípios colam; a ladeira do Sítio pede ponto de espera. O horário sai sob consulta.',
        ],
        [
            'pergunta' => 'O hotel no Janga conta como parceria do serviço?',
            'resposta' => 'Não. O hotel entra só como embarque: nome, acesso e espera. O orçamento sai sob consulta.',
        ],
    ],
    'cta' => [
        'titulo' => 'Monte o recuo de Janga sem a volta pelo Recife',
        'texto' => 'O orçamento de Paulista sai sob consulta. Maria Farinha, Centro e REC no mesmo WhatsApp.',
        'botao' => 'Pedir traslado em Paulista',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'pernambuco', 'ancora' => 'Recife, Olinda e o recorte da RMR'],
        ['tipo' => 'cidade', 'estado' => 'pernambuco', 'cidade' => 'recife', 'ancora' => 'Boa Viagem, Recife Antigo e o REC'],
        ['tipo' => 'cidade', 'estado' => 'pernambuco', 'cidade' => 'olinda', 'ancora' => 'Sítio Histórico, Casa Caiada e o Guararapes'],
    ],
];
