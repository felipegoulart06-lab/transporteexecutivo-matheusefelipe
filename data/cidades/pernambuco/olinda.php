<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Olinda',
    'geo' => ['lat' => -8.0089, 'lng' => -34.8553],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Olinda',
    'seo' => [
        'title' => 'Traslado em Olinda: Sítio Histórico, Casa Caiada e REC',
        'description' => 'Motorista executivo em Olinda para o Sítio Histórico, Casa Caiada, Bairro Novo e o aeroporto do Recife. Ladeira, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Sítio Histórico, em Casa Caiada e no REC',
        'og_description' => 'Traslado em Olinda: hotel na orla, pauta no sítio e o terminal dos Guararapes.',
        'og_image_alt' => 'Sedan executivo em ladeira do Sítio Histórico de Olinda',
    ],
    'kicker' => 'Cidade histórica · PE',
    'h1' => 'Do Sítio Histórico ao REC sem perder a orla de Casa Caiada',
    'faixas' => [
        [
            'h2' => 'Olinda se mede em ladeira e em maré — o app insiste no sentido errado',
            'texto' => 'Hotel em Casa Caiada ou no Bairro Novo, pauta no Sítio Histórico e voo no Guararapes (REC) cabem no mesmo dia se o motorista já saiu com a ordem da Av. Getúlio Vargas e da ladeira, não com o atalho da hora.',
        ],
        [
            'h2' => 'Três recortes, um relógio de sítio',
            'itens' => [
                ['h3' => 'Sítio Histórico e o Alto da Sé', 'texto' => 'Palácio, igrejas e o calçamento. Informe o ponto de espera; o GPS insiste no beco. “No sítio” não define a porta.'],
                ['h3' => 'Casa Caiada, Bairro Novo e a orla', 'texto' => 'Hotéis (7 Colinas, similar) e a praia. Informe o nome; a Getúlio Vargas não é o recuo da Varadouro.'],
                ['h3' => 'Rio Doce, Jockey e o Carmo', 'texto' => 'Pauta residencial e jantar. Deslocamentos curtos que esticam no semáforo rumo ao Recife.'],
            ],
        ],
        [
            'h2' => 'Rotas de pauta, carnaval fora de época e a ponte',
            'texto' => 'REC → hotel em Casa Caiada → Alto da Sé só se a visita estiver no roteiro. Outro clássico: Olinda → Recife Antigo → Boa Viagem, com as pontes no meio. O Mercado da Ribeira entra como intervalo combinado, não como desvio na ladeira.',
        ],
        [
            'h2' => 'Guararapes — REC no município vizinho',
            'texto' => 'O aeroporto fica no Recife. Combinamos o voo. A espera no desembarque integra o trecho REC; a Mascarenhas e a entrada de Olinda pesam mais que o mapa admite no fim da tarde.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem sobe a ladeira',
    'faq' => [
        ['pergunta' => 'O aeroporto de Olinda fica na cidade?', 'resposta' => 'O voo chega no Guararapes, no Recife. O trecho até Casa Caiada ou o Sítio entra no roteiro com margem.'],
        ['pergunta' => 'Em Olinda, o motorista espera no REC se o voo atrasar?', 'resposta' => 'Sim. Em Olinda, o número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês sobem ao Alto da Sé?', 'resposta' => 'Sim. Combinamos o ponto de espera. O calçamento não admite recuo improvisado no sítio.'],
        ['pergunta' => 'Dá para ir a Boa Viagem e voltar a Olinda no mesmo dia?', 'resposta' => 'Sim. Em Olinda, informe a ordem. A ponte e o sentido da via pesam mais que a distância no mapa.'],
    ],
    'cta' => [
        'titulo' => 'Diga se o embarque é Casa Caiada ou o sítio',
        'texto' => 'O orçamento de Olinda sai sob consulta. Ladeira, orla e REC no mesmo recado.',
        'botao' => 'Pedir traslado em Olinda',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'pernambuco', 'ancora' => 'Caruaru, Petrolina e o recorte pernambucano'],
        ['tipo' => 'cidade', 'estado' => 'pernambuco', 'cidade' => 'recife', 'ancora' => 'Boa Viagem, pontes e o Guararapes'],
        ['tipo' => 'cidade', 'estado' => 'paraiba', 'cidade' => 'joao-pessoa', 'ancora' => 'Tambaú, Cabo Branco e o Castro Pinto'],
    ],
];
