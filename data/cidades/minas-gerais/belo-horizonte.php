<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Belo Horizonte',
    'geo' => ['lat' => -19.9167, 'lng' => -43.9345],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Motorista executivo entre Savassi, Lourdes e Confins',
    'seo' => [
        'title' => 'Savassi, Lourdes e Confins: motorista em Belo Horizonte',
        'description' => 'Motorista em Belo Horizonte para Savassi, Lourdes e Belvedere. CNF fica em Confins, não na capital; o trecho usa a MG-010. Informe prédio, voo e se o carro permanece.',
        'og_title' => 'Traslado no Centro-Sul mineiro e na MG-010 rumo a Confins',
        'og_description' => 'Carro com motorista na Savassi e em Lourdes, com o Tancredo Neves fora do município de Belo Horizonte.',
        'og_image_alt' => 'Sedan executivo em via urbana de Belo Horizonte ao entardecer',
    ],
    'kicker' => 'Capital mineira · MG',
    'h1' => 'Da Savassi à MG-010 rumo a Confins',
    'olho' => 'Savassi e Lourdes cabem em poucos quilômetros. Confins não: o Tancredo Neves (CNF) fica no município de Confins — parte do sítio também em Lagoa Santa — e o relógio é o da MG-010, a Linha Verde. O motorista segura a via; o passageiro segura a pauta.',
    'capitulos' => [
        [
            'h2' => 'A capital compacta e o aeroporto que não é dela',
            'texto' => 'O Centro-Sul — Savassi, Lourdes, Funcionários, Belvedere — concentra hotel, consultório e escritório. Quem marca almoço na Savassi e voo no mesmo dia precisa de um carro que já saiu do hotel rumo à MG-010, não de um aceite na porta da Praça da Liberdade. O terminal internacional não está em Belo Horizonte.',
        ],
        [
            'h2' => 'Onde o embarque mineiro mais se concentra',
            'itens' => [
                ['h3' => 'Savassi e Lourdes', 'texto' => 'Hotel boutique e escritório no hipercentro. O recuo é estreito; o nome do prédio evita a volta na Liberdade. “Na Savassi” não define a porta.'],
                ['h3' => 'Belvedere', 'texto' => 'Agenda de board no desnível da serra. Se o destino vaza para Nova Lima, o município vizinho entra no roteiro à parte — não como bairro da capital.'],
                ['h3' => 'Centro e a área hospitalar', 'texto' => 'Deslocamentos curtos e repetidos. Útil quando a comitiva troca de torre sem trocar de motorista, antes da subida da Linha Verde.'],
            ],
        ],
        [
            'h2' => 'CNF em Confins, pela MG-010',
            'texto' => 'O Aeroporto Internacional Tancredo Neves fica em Confins (e em fração de Lagoa Santa), administrado pela BH Airport. A sede da concessionária está na MG-10, km 09, no município de Confins. Combinamos o voo e a margem da Linha Verde. A espera no desembarque integra o trecho; não é uma segunda corrida. O DER-MG intervém na marginal da MG-010: o horário de saída do hotel leva isso em conta, sem minuto de aplicativo.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que evitam atraso na capital',
        'itens' => [
            ['num' => '01', 'titulo' => 'Bairro e prédio', 'texto' => 'Rua e nome do hotel na Savassi ou em Lourdes. O recuo do Centro-Sul não se improvisa.'],
            ['num' => '02', 'titulo' => 'Voo em Confins', 'texto' => 'Número e terminal. O carro sai com margem para a MG-010, não no minuto do check-in na capital.'],
            ['num' => '03', 'titulo' => 'Espera ou só ida', 'texto' => 'Se a reunião na Savassi estica rumo a Belvedere e depois a Confins, a hora à disposição mantém o mesmo motorista.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem voa por Confins, não pelo hipercentro',
    'faq' => [
        ['pergunta' => 'O aeroporto de Confins fica em Belo Horizonte?', 'resposta' => 'Não. O Tancredo Neves (CNF) está no município de Confins, com parte do sítio em Lagoa Santa. O acesso a partir da capital é a MG-010 (Linha Verde), sob o DER-MG.'],
        ['pergunta' => 'A portaria do prédio na Savassi pede lista?', 'resposta' => 'Envie o nome do passageiro e o documento pedido pelo condomínio. Sem lista, o carro não resolve o recuo estreito na porta da Savassi.'],
        ['pergunta' => 'Vocês fazem Lourdes, Belvedere e Confins no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. O desnível da serra e a saída para a MG-010 pedem um único motorista. Se o compromisso for em Nova Lima, o município vizinho entra no mesmo recado.'],
        ['pergunta' => 'A hora à disposição cobre Savassi e a área hospitalar?', 'resposta' => 'Cobre. Deslocamentos curtos no hipercentro se repetem; o mesmo carro evita três aceites. Diga se no fim do expediente o destino é Confins.'],
    ],
    'cta' => [
        'titulo' => 'Coloque Confins e a Savassi no mesmo recado',
        'texto' => 'Informe o embarque em Belo Horizonte, se o voo é em Confins e o horário. A confirmação de apresentação volta pelo WhatsApp.',
        'botao' => 'Pedir motorista em Belo Horizonte',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'minas-gerais', 'ancora' => 'Confins, Vale do Aço e a agenda mineira'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas na capital e GRU em Guarulhos'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Santos Dumont no Centro e Galeão na Ilha'],
    ],
];
