<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Olinda',
    'geo' => [
        'lat' => -8.0089,
        'lng' => -34.8553,
    ],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Olinda',
    'seo' => [
        'title' => 'Carro com motorista em Olinda: Bairro Novo e REC',
        'description' => 'Motorista executivo em Olinda: Carmo, Bairro Novo e Guararapes Gilberto Freyre (REC), em Recife. Ida, espera ou dia à disposição. Orçamento sob consulta.',
        'og_title' => 'Embarque em Olinda: hotel, Carmo e REC',
        'og_description' => 'O motorista combina Carmo com Guararapes Gilberto Freyre (REC), em Recife. Informe nome do hotel ou do sítio.',
        'og_image_alt' => 'Carro executivo em via de Olinda',
    ],
    'kicker' => 'Região Metropolitana do Recife · PE',
    'h1' => 'Em Olinda: do embarque em Carmo ao REC',
    'faq_h2' => 'Dúvidas de quem embarca em Olinda',
    'faq' => [
        [
            'pergunta' => 'Quem está em Olinda embarca no REC dentro da cidade?',
            'resposta' => 'Não. De Olinda o REC (Guararapes Gilberto Freyre) fica em Recife. O trecho sai de Carmo pela PE-15.',
        ],
        [
            'pergunta' => 'Em Olinda, vocês buscam em Carmo?',
            'resposta' => 'Sim, em Olinda. Envie nome do hotel ou do sítio em Carmo. Só o bairro não define a entrada.',
        ],
        [
            'pergunta' => 'De Olinda vocês fazem Recife?',
            'resposta' => 'Sim, saindo de Olinda. Recife não é o recorte de Carmo; o horário pela Avenida Santos Dumont sai sob consulta.',
        ],
        [
            'pergunta' => 'Em Olinda o carro fica entre Carmo e Bairro Novo?',
            'resposta' => 'Sim, em Olinda. A hora à disposição cobre centro histórico em Carmo e orla em Bairro Novo.',
        ],
    ],
    'cta' => [
        'titulo' => 'Informe o embarque em Olinda e o REC',
        'texto' => 'Diga o ponto em Carmo ou Bairro Novo, o destino e o horário. A operação organiza o recuo e o terminal.',
        'botao' => 'Pedir motorista em Olinda',
    ],
    'relacionados' => [
        [
            'tipo' => 'estado',
            'slug' => 'pernambuco',
            'ancora' => 'Olinda e o recorte de Região Metropolitana do Recife',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'pernambuco',
            'cidade' => 'recife',
            'ancora' => 'Motorista em recife',
        ],
        [
            'tipo' => 'cidade',
            'estado' => 'paraiba',
            'cidade' => 'joao-pessoa',
            'ancora' => 'Motorista em joao pessoa',
        ],
    ],
    'faixas' => [
        [
            'h2' => 'Olinda se cruza por PE-15, não em linha reta',
            'texto' => 'Olinda usa Guararapes Gilberto Freyre (REC), em Recife. Quem embarca em Carmo não está no município da pista. A PE-15 é o eixo que liga a origem ao terminal; a margem sai do hotel ou da empresa, não do saguão.',
        ],
        [
            'h2' => 'Três eixos, três recuos',
            'itens' => [
                [
                    'h3' => 'Carmo',
                    'texto' => 'Origem frequente para centro histórico. Informe nome do hotel ou do sítio. Carmo não compartilha o recuo de Bairro Novo.',
                ],
                [
                    'h3' => 'Bairro Novo',
                    'texto' => 'Origem frequente para orla. Informe nome do hotel ou do sítio. Bairro Novo não compartilha o recuo de Carmo.',
                ],
                [
                    'h3' => 'Rio Doce',
                    'texto' => 'Origem frequente para bairro. Informe nome do hotel ou do sítio. Rio Doce não compartilha o recuo de Carmo.',
                ],
            ],
        ],
        [
            'h2' => 'Guararapes Gilberto Freyre — REC',
            'texto' => 'Guararapes Gilberto Freyre (REC) fica em Recife, não em Olinda. O trecho sai pela PE-15 / pontes. Diga o IATA e o número do voo.',
        ],
    ],
];
