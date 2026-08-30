<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'São Paulo',
    'geo' => ['lat' => -23.5505, 'lng' => -46.6333],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista na cidade de São Paulo',
    'seo' => [
        'title' => 'Motorista executivo em São Paulo: Faria Lima e aeroportos',
        'description' => 'Carro preto com motorista na capital paulista: Faria Lima, Berrini, Congonhas e GRU. Ida, espera ou dia à disposição — orçamento sob consulta.',
        'og_title' => 'Agenda corporativa com motorista executivo em São Paulo',
        'og_description' => 'Traslado entre torres, hotéis e terminais da capital, com horário combinado e embarque discreto.',
        'og_image_alt' => 'Sedan executivo preto em via urbana noturna da cidade de São Paulo',
    ],
    'kicker' => 'Capital paulista · SP',
    'h1' => 'A janela entre a torre, o hotel e o terminal na cidade de São Paulo',
    'lead' => 'Na capital, o relógio não perdoa a Marginal nem a fila do saguão. O motorista executivo entra na agenda para o passageiro desembarcar em reunião — não em procura de vaga.',
    'contexto' => [
        'h2' => 'São Paulo cobra pontualidade de quem vive de intervalo',
        'texto' => [
            'A cidade concentra o maior volume de reuniões presenciais do país em um raio curto e um trânsito longo. Faria Lima, Berrini, Paulista e o Itaim cabem no mesmo expediente — se o carro já conhece o acesso de garagem e o protocolo do condomínio.',
            'Não vendemos “São Paulo inteiro” como slogan. O recorte é a rotina corporativa da capital: embarque em hotel-apartamento, espera na porta do prédio e chegada no terminal certo de Congonhas ou de Guarulhos.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos da capital onde o embarque mais se repete',
        'itens' => [
            ['h3' => 'Faria Lima e Itaim', 'texto' => 'Janelas curtas entre bancos, fundos e almoço. O carro espera em garagem ou no recuo, sem buzina na porta.'],
            ['h3' => 'Berrini e Vila Olímpia', 'texto' => 'Torres com catraca e horários de board. O motorista chega antes do intervalo, não depois do aceite no aplicativo.'],
            ['h3' => 'Paulista e Jardins', 'texto' => 'Hotel, consultório e escritório no mesmo eixo. Útil quando a comitiva troca de endereço sem trocar de carro.'],
            ['h3' => 'Pinheiros e Vila Madalena', 'texto' => 'Agendas que misturam estúdio, jantar e retorno ao hotel. O trecho é curto no mapa e instável no relógio.'],
        ],
    ],
    'aeroportos' => [
        'h2' => 'Terminais que a capital usa no meio do expediente',
        'itens' => [
            ['h3' => 'Congonhas — CGH', 'texto' => 'Ponte aérea no miolo da cidade. Combinamos o acesso da Washington Luís e o saguão; a margem é menor que em GRU.'],
            ['h3' => 'Guarulhos — GRU', 'texto' => 'Porta internacional. Número do voo, terminal e ponto de encontro entram no roteiro antes do pouso.'],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que a agenda paulistana mais pede',
        'itens' => [
            ['titulo' => 'Hotel nos Jardins → Faria Lima', 'texto' => 'Deslocamento urbano com espera. Informe o nome do prédio e se há vaga de visitante.'],
            ['titulo' => 'Congonhas → Berrini no almoço', 'texto' => 'Trecho curto e relógio longo. O embarque é marcado, não instantâneo.'],
            ['titulo' => 'GRU → hotel na Paulista', 'texto' => 'Dutra, Marginal e desembarque com bagagem de comitiva. O motorista acompanha o painel do voo.'],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na sua grade em São Paulo',
        'passos' => [
            ['titulo' => 'Endereço exato', 'texto' => 'Rua, número e complemento. Autocomplete não resolve torre com dois acessos.'],
            ['titulo' => 'Tipo de janela', 'texto' => 'Ida, ida e volta ou hora à disposição. Isso define espera e veículo.'],
            ['titulo' => 'Confirmação', 'texto' => 'Em São Paulo, nome e DDD no WhatsApp. Devolvemos o horário de apresentação.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem reúne ou voa na capital',
    'faq' => [
        ['pergunta' => 'O motorista espera no desembarque de GRU se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no roteiro e a espera no terminal faz parte do trecho, sem nova chamada.'],
        ['pergunta' => 'Dá para sair de Congonhas e chegar à Faria Lima no horário de almoço?', 'resposta' => 'Dá, com margem. O mapa engana: o trecho é curto e o relógio, não. Por isso o horário é combinado.'],
        ['pergunta' => 'Consigo um carro o dia todo entre Paulista e Vila Olímpia?', 'resposta' => 'Sim. A modalidade por hora mantém o mesmo motorista entre reuniões, almoço e o aeroporto no fim do dia.'],
        ['pergunta' => 'Vocês entram em condomínio com protocolo de visitante?', 'resposta' => 'Sim. Envie o nome do passageiro e o documento pedido pela portaria com antecedência.'],
    ],
    'cta' => [
        'titulo' => 'Reserve o carro antes do pico da Marginal',
        'texto' => 'Informe o embarque na capital e o tipo de trajeto. A confirmação volta pelo WhatsApp.',
        'botao' => 'Pedir motorista em São Paulo',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Santos Dumont, Galeão e a Zona Sul'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'belo-horizonte', 'ancora' => 'Savassi, Lourdes e o trecho até Confins'],
    ],
];
