<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Sete Lagoas',
    'geo' => ['lat' => -19.4569, 'lng' => -44.2413],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Sete Lagoas',
    'seo' => [
        'title' => 'Motorista em Sete Lagoas: Iveco, Centro e a MG-424',
        'description' => 'Motorista em Sete Lagoas para o Centro, CK e a planta Iveco. MG-424 rumo a Confins; Inhotim só se o itinerário pedir. Orçamento sob consulta.',
        'og_title' => 'Traslado na Iveco, no Centro e na MG-424',
        'og_description' => 'Motorista em Sete Lagoas: portaria da Iveco, hotel no Centro e o recuo até o CNF.',
        'og_image_alt' => 'Sedan executivo em avenida do Centro de Sete Lagoas',
    ],
    'kicker' => 'Iveco e MG-424 · MG',
    'h1' => 'Iveco, Centro e a MG-424: a pauta não cabe no aceite de BH',
    'preambulo' => 'Sete Lagoas fecha a pauta na Iveco e no Centro pela MG-424; o aceite de Belo Horizonte não cobre a cancela da planta nem o recorte até Confins. Hotel no Centro ou no CK, briefing na montadora e o voo no CNF cabem no mesmo expediente se o motorista já conhece a portaria e o sentido da 424.',
    'artigos' => [
        [
            'h2' => 'A Iveco fica em Sete Lagoas — não “na Grande BH”',
            'texto' => 'Centro, CK e a planta Iveco não compartilham o mesmo recuo. Hotel e pauta na montadora pedem o nome da cancela. “Me busca em Sete Lagoas” não coloca o carro na lista da Iveco nem na rua certa do CK. Inhotim não fica neste município: o instituto é em Brumadinho e só entra se o itinerário já o tiver.',
        ],
        [
            'h2' => 'CK, Centro e o silêncio da espera',
            'texto' => 'O CK concentra pernoite e o recorte residencial. O recuo pede rua e número. Quando a comitiva dorme no Centro e reúne na Iveco no primeiro turno, a margem sai do hotel, não do aceite que o aplicativo empresta de Contagem.',
        ],
        [
            'h2' => 'Confins — CNF no relógio da MG-424',
            'texto' => 'Sete Lagoas não tem saguão próprio. Combinamos o voo em Confins. A MG-424 muda o intervalo mais que o mapa admite; a margem sai do Centro, não do saguão. A espera no desembarque, quando o voo está no roteiro, integra o trecho CNF.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em Sete Lagoas',
        'itens' => [
            ['h3' => 'Iveco e o protocolo de portaria', 'texto' => 'Nome na lista e documento. Sem isso, o recuo da planta não libera.'],
            ['h3' => 'Hotel no Centro ou no CK', 'texto' => 'O nome do estabelecimento evita a volta. “Perto do Centro” não basta.'],
            ['h3' => 'Inhotim — só se o itinerário pedir', 'texto' => 'O instituto fica em Brumadinho, não em Sete Lagoas. Entra como viagem combinada, nunca como desvio no cartaz da Iveco.'],
            ['h3' => 'Quando a pauta aponta para Confins ou a Savassi', 'texto' => 'Não é o mesmo pedido urbano. O orçamento sai à parte, com margem da MG-424.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pauta a Iveco e a MG-424',
    'faq' => [
        ['pergunta' => 'A Iveco fica em Belo Horizonte?', 'resposta' => 'Não. A planta está em Sete Lagoas. Informe a portaria e o documento da lista; o recuo não se resolve com “Grande BH”.'],
        ['pergunta' => 'Inhotim fica em Sete Lagoas?', 'resposta' => 'Não. Inhotim é em Brumadinho. Só entra no pedido se o itinerário já o tiver; não é desvio da pauta da Iveco.'],
        ['pergunta' => 'O motorista vai a Confins pela MG-424?', 'resposta' => 'Sim, quando o CNF entra no roteiro. A 424 pede margem; não é corrida instantânea do Centro.'],
        ['pergunta' => 'Vocês fazem Centro, CK e a planta no mesmo expediente?', 'resposta' => 'Sim. Informe a ordem e o ponto de espera. A cancela da Iveco pede protocolo à parte do hotel.'],
        ['pergunta' => 'Dá para ir à Savassi e voltar ao CK no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. O trecho até Belo Horizonte pesa mais que a distância no mapa; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Mande a portaria da Iveco e a MG-424',
        'texto' => 'O orçamento de Sete Lagoas sai sob consulta. Centro, CK e Confins no mesmo recado.',
        'botao' => 'Pedir motorista em Sete Lagoas',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'minas-gerais', 'ancora' => 'Confins, Vale do Aço e a agenda mineira'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'belo-horizonte', 'ancora' => 'Savassi, Lourdes e o trecho até Confins'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'contagem', 'ancora' => 'Cidade Industrial, Eldorado e Confins'],
    ],
];
