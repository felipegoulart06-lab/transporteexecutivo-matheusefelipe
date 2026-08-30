<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Olinda',
    'geo' => ['lat' => -8.0089, 'lng' => -34.8553],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Olinda',
    'seo' => [
        'title' => 'Carro executivo em Olinda: Carmo, Bairro Novo e REC',
        'description' => 'Motorista em Olinda para Carmo, Bairro Novo e Rio Doce. O voo chega no REC, no Recife (Imbiribeira, junto de Boa Viagem). Orçamento sob consulta.',
        'og_title' => 'Olinda não tem saguão: o REC fica no Recife',
        'og_description' => 'Carmo, Bairro Novo e Rio Doce no município. O Guararapes (REC) fica na Imbiribeira, Recife. A ponte pesa mais que o mapa.',
        'og_image_alt' => 'Sedan executivo em ladeira do Sítio Histórico de Olinda',
    ],
    'kicker' => 'Cidade histórica · PE',
    'h1' => 'Do Carmo ao Recife: o voo é no Guararapes, não em Olinda',
    'faixas' => [
        [
            'h2' => 'Olinda se mede em ladeira e em ponte — o saguão fica no Recife',
            'texto' => 'Hotel no Bairro Novo, pauta no Carmo e pernoite no Rio Doce cabem no mesmo dia se o motorista já saiu com a ordem da Av. Getúlio Vargas, da Praça do Carmo e da ponte rumo ao Recife. Olinda não tem terminal de passageiros. O voo chega no Aeroporto Internacional do Recife/Guararapes – Gilberto Freyre (REC), na Praça Ministro Salgado Filho, Imbiribeira, Recife — na zona sul, junto de Boa Viagem. A Mascarenhas e a entrada de Olinda mudam o intervalo no fim da tarde.',
        ],
        [
            'h2' => 'Três recortes, um relógio de sítio',
            'itens' => [
                ['h3' => 'Carmo', 'texto' => 'Praça do Carmo, sítio e o calçamento. Informe o ponto de espera. O GPS insiste no beco; “no sítio” não define a porta.'],
                ['h3' => 'Bairro Novo', 'texto' => 'Orla, hotéis e a Getúlio Vargas. Diga o nome do hotel e o recuo. Não é o mesmo acesso do Varadouro nem o do Rio Doce.'],
                ['h3' => 'Rio Doce', 'texto' => 'Pauta residencial e o eixo da Tiradentes. Deslocamentos que esticam no semáforo rumo ao Recife. Informe rua e número.'],
            ],
        ],
        [
            'h2' => 'Pontes no meio — Boa Viagem e o REC no município vizinho',
            'texto' => 'REC → hotel no Bairro Novo → Carmo só se a visita estiver no roteiro. Outro clássico: Olinda → Recife Antigo → Boa Viagem, com a ponte José de Barros Lima e o viaduto do Tacaruna no meio. Combinamos o voo no Recife. A espera no desembarque da Imbiribeira integra o trecho; não é corrida que começa na ladeira de Olinda.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem sobe a ladeira',
    'faq' => [
        ['pergunta' => 'O voo para Olinda chega em qual terminal?', 'resposta' => 'No Guararapes (REC), no Recife, bairro da Imbiribeira — na zona sul, junto de Boa Viagem. Olinda não tem terminal de passageiros. O trecho até o Carmo, o Bairro Novo ou o Rio Doce entra no roteiro com margem para as pontes.'],
        ['pergunta' => 'Em Olinda, o motorista espera no REC se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no saguão da Imbiribeira faz parte do trecho até Olinda.'],
        ['pergunta' => 'Vocês esperam na Praça do Carmo?', 'resposta' => 'Sim. Combinamos o ponto. O calçamento do Carmo não admite recuo improvisado no sítio.'],
        ['pergunta' => 'Dá para ir a Boa Viagem e voltar ao Bairro Novo no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. A ponte e o sentido da via pesam mais que a distância no mapa.'],
    ],
    'cta' => [
        'titulo' => 'Diga se o embarque é Carmo, Bairro Novo ou o REC',
        'texto' => 'Informe o hotel em Olinda, o destino no Carmo ou no Rio Doce e o voo no Guararapes, no Recife. A operação organiza a ladeira e a ponte.',
        'botao' => 'Pedir motorista em Olinda',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'pernambuco', 'ancora' => 'Caruaru, Petrolina e o recorte pernambucano'],
        ['tipo' => 'cidade', 'estado' => 'pernambuco', 'cidade' => 'recife', 'ancora' => 'Boa Viagem, pontes e o Guararapes na Imbiribeira'],
        ['tipo' => 'cidade', 'estado' => 'paraiba', 'cidade' => 'joao-pessoa', 'ancora' => 'Tambaú, Cabo Branco e o Castro Pinto'],
    ],
];
