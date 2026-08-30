<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'São Paulo',
    'geo' => ['lat' => -23.5505, 'lng' => -46.6333],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Motorista executivo entre Faria Lima, Congonhas e GRU',
    'seo' => [
        'title' => 'Faria Lima, Congonhas e GRU: motorista em São Paulo',
        'description' => 'Motorista na Faria Lima, Berrini e Paulista. Congonhas no município de São Paulo; GRU em Guarulhos, pela Dutra. Informe embarque, destino e espera no terminal.',
        'og_title' => 'Traslado entre Itaim, Berrini, Washington Luís e Guarulhos',
        'og_description' => 'Carro com motorista para torre na Faria Lima, hotel na Paulista, Congonhas na zona sul e o terminal de Guarulhos.',
        'og_image_alt' => 'Sedan executivo preto em via urbana noturna da cidade de São Paulo',
    ],
    'kicker' => 'Capital paulista · SP',
    'h1' => 'Do recuo da Faria Lima ao saguão de Congonhas',
    'lead' => 'Na capital o expediente cabe na Faria Lima, na Berrini e na Paulista — se o carro já conhece o recuo da torre. Congonhas fica no município de São Paulo; GRU fica em Guarulhos. O motorista segura a Washington Luís e a Dutra; o passageiro segura a reunião.',
    'contexto' => [
        'h2' => 'Por que a agenda paulistana pede um carro já roteirizado',
        'texto' => [
            'Bancos na Faria Lima, fundos na Berrini e hotel na Paulista cabem no mesmo dia. O que não cabe é improvisar o acesso de visitante da torre nem o sentido da Marginal rumo à Dutra. O serviço aqui é o intervalo entre um endereço e o terminal certo.',
            'Congonhas (CGH), Deputado Freitas Nobre, está na zona sul da própria capital, com entrada de veículos pela Avenida Washington Luís. O Governador André Franco Montoro (GRU) está em Guarulhos: Rodovia Hélio Smidt, sítio fora do município de São Paulo. Os dois não se trocam no mesmo recuo.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos da capital onde o embarque mais se repete',
        'itens' => [
            ['h3' => 'Faria Lima e Itaim', 'texto' => 'Janela entre banco, fundo e almoço. Informe o nome da torre e se o recuo é garagem de visitante ou rua. “Na Faria Lima” não define a porta.'],
            ['h3' => 'Berrini e Vila Olímpia', 'texto' => 'Board no Brooklin com catraca. O motorista chega antes do intervalo, com o prédio no roteiro — não depois de um aceite na calçada da Luís Carlos Berrini.'],
            ['h3' => 'Paulista e Jardins', 'texto' => 'Hotel, consultório e escritório no mesmo eixo. Útil quando a comitiva troca de endereço sem trocar de carro, rumo a Congonhas ou à Dutra.'],
            ['h3' => 'Pinheiros', 'texto' => 'Agenda que mistura estúdio, jantar e retorno à torre do Itaim. O trecho é curto no mapa; o recuo de cada prédio não é.'],
        ],
    ],
    'aeroportos' => [
        'h2' => 'Dois terminais, dois municípios',
        'itens' => [
            ['h3' => 'Congonhas — CGH, município de São Paulo', 'texto' => 'Ponte aérea na zona sul. Combinamos o sentido da Washington Luís e o ponto de encontro no saguão. Obras da Aena mudam a entrada de carros; o horário de apresentação sai com margem, não no minuto do check-in.'],
            ['h3' => 'Guarulhos — GRU, município de Guarulhos', 'texto' => 'Porta internacional e doméstica fora da capital. Número do voo, terminal e o trecho Dutra–Hélio Smidt entram no roteiro antes do pouso. A espera no desembarque faz parte do trecho GRU, não de uma segunda chamada.'],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que a pauta paulistana mais pede',
        'itens' => [
            ['titulo' => 'Hotel nos Jardins → torre na Faria Lima', 'texto' => 'Deslocamento urbano com espera. Informe o nome do prédio e se há vaga de visitante.'],
            ['titulo' => 'Congonhas → Berrini no horário de almoço', 'texto' => 'O mapa encolhe; a Washington Luís e a Marginal não. O embarque é marcado no terminal da zona sul.'],
            ['titulo' => 'GRU em Guarulhos → hotel na Paulista', 'texto' => 'Dutra, Hélio Smidt e desembarque com bagagem de comitiva. O motorista acompanha o painel do voo.'],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na sua grade em São Paulo',
        'passos' => [
            ['titulo' => 'Endereço da torre ou do hotel', 'texto' => 'Rua, número e complemento. Autocomplete não resolve prédio com dois acessos na Faria Lima.'],
            ['titulo' => 'Qual terminal', 'texto' => 'CGH na capital ou GRU em Guarulhos. Se houver voo, o número entra no roteiro.'],
            ['titulo' => 'Ida, espera ou hora à disposição', 'texto' => 'Isso define se o mesmo motorista cobre Paulista, Berrini e o aeroporto no fim do dia. A confirmação volta pelo WhatsApp.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem reúne na Faria Lima ou voa pela capital',
    'faq' => [
        ['pergunta' => 'Congonhas fica no município de São Paulo ou em outro?', 'resposta' => 'No município de São Paulo, na zona sul. O acesso de carro é pela Avenida Washington Luís. GRU, o Governador André Franco Montoro, fica em Guarulhos, pela Dutra e pela Hélio Smidt.'],
        ['pergunta' => 'A portaria da torre na Faria Lima libera o recuo?', 'resposta' => 'Com nome do passageiro e o documento que o condomínio pedir, enviados com antecedência. Sem lista, o carro não improvisa na porta da Av. Brigadeiro Faria Lima.'],
        ['pergunta' => 'Consigo o mesmo motorista entre Paulista, Vila Olímpia e o aeroporto?', 'resposta' => 'Sim, na modalidade por hora. Informe a ordem: Jardins, Berrini e se o fim do dia é CGH na capital ou GRU em Guarulhos.'],
        ['pergunta' => 'O pedido cobre Osasco ou só a capital?', 'resposta' => 'A capital é o recorte desta página. Osasco, Barueri ou o retorno a Guarulhos entram quando você coloca origem, destino e horário no mesmo recado.'],
    ],
    'cta' => [
        'titulo' => 'Marque a torre e o terminal antes do pico da Dutra',
        'texto' => 'Diga se o embarque é Faria Lima, Paulista, Congonhas ou GRU em Guarulhos, o destino e o horário. A confirmação de apresentação volta pelo WhatsApp.',
        'botao' => 'Pedir motorista em São Paulo',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Santos Dumont no Centro e Galeão na Ilha'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'belo-horizonte', 'ancora' => 'Savassi, Lourdes e Confins fora da capital'],
    ],
];
