<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Teresina',
    'geo' => ['lat' => -5.08921, 'lng' => -42.8016],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Teresina',
    'seo' => [
        'title' => 'Petrônio Portella, Jóquei e a fronteira com Timon',
        'description' => 'Motorista em Teresina para THE, Jóquei, Fátima e Centro. Timon, no Maranhão, começa do outro lado do Parnaíba. Informe o município. Orçamento sob consulta.',
        'og_title' => 'Carro no THE, no Jóquei e rumo a Timon pelo Parnaíba',
        'og_description' => 'Traslado teresinense: terminal Senador Petrônio Portella, hotel no Jóquei e pauta que cruza para Timon só com endereço no Maranhão.',
        'og_image_alt' => 'Sedan executivo em avenida arborizada de Teresina',
    ],
    'kicker' => 'Capital piauiense · PI',
    'h1' => 'Do Senador Petrônio Portella ao Jóquei sem misturar Timon',
    'lead' => 'O voo cai no Senador Petrônio Portella, ainda em Teresina. A pauta no Jóquei usa a Homero Castelo Branco; a sede no Centro usa a Frei Serafim. Timon só entra se o endereço já estiver do outro lado do Parnaíba — aí o município muda e o recuo também.',
    'contexto' => [
        'h2' => 'Teresina e Timon compartilham o rio, não o mesmo pedido',
        'texto' => [
            'A capital piauiense concentra hotel, clínica e shopping no Jóquei; gabinete e comércio na Frei Serafim; pernoite residencial no Fátima. O aeroporto Senador Petrônio Portella (THE) fica no próprio município, na zona norte urbana. O motorista sai com bairro e número; “no centro” não distingue a Frei Serafim da Homero Castelo Branco.',
            'Do outro lado do Parnaíba começa Timon, no Maranhão. Há mais de uma ponte. Quando a agenda cruza, o trecho deixa de ser só teresinense: informe o município, o endereço e se o carro espera na volta. Parnaíba e o litoral piauiense não cabem no mesmo recorte do Centro.',
        ],
    ],
    'bairros' => [
        'h2' => 'Quatro eixos em que o embarque teresinense se concentra',
        'itens' => [
            ['h3' => 'Centro e a Frei Serafim', 'texto' => 'Sede, cartório e o calçadão. Informe o prédio e o sentido da via; no fim da tarde a Frei Serafim não admite recuo improvisado.'],
            ['h3' => 'Jóquei e a Homero Castelo Branco', 'texto' => 'Hotéis, torres e clínicas. Diga o nome do hotel e a entrada de serviço. “No Jóquei” não escolhe entre a Homero e a Jóquei Clube.'],
            ['h3' => 'Fátima e o recuo residencial', 'texto' => 'Pauta em casa ou consultório. Rua e número; o GPS da Homero Castelo Branco não substitui o portão.'],
            ['h3' => 'Ponte do Parnaíba rumo a Timon', 'texto' => 'Quando a reunião está no Maranhão, o pedido muda de UF. Informe Timon com endereço; não trate a ponte como atalho interno de Teresina.'],
        ],
    ],
    'aeroportos' => [
        'h2' => 'Senador Petrônio Portella — THE em Teresina',
        'itens' => [
            ['h3' => 'THE — município de Teresina', 'texto' => 'O terminal fica na capital, na Praça Santos Dumont, zona norte. Combinamos o voo. A espera no desembarque entra no trecho THE; a Frei Serafim e a Homero mudam o intervalo mais que o mapa.'],
            ['h3' => 'Quando a pauta aponta para o litoral piauiense', 'texto' => 'Parnaíba e o Delta não são o mesmo pedido do Jóquei. Se a visita vaza para o litoral, o trecho sai como viagem, com horário sob consulta.'],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que a agenda teresinense mais pede',
        'itens' => [
            ['titulo' => 'THE → hotel no Jóquei', 'texto' => 'Pouso ainda em Teresina e pernoite na Homero Castelo Branco. Informe o nome do hotel e se há vaga de visitante.'],
            ['titulo' => 'Jóquei → Centro → Fátima', 'texto' => 'Reunião, sede e um recuo residencial. Um motorista cobre os três se a ordem das avenidas já estiver no roteiro.'],
            ['titulo' => 'Hotel em Teresina → Timon no mesmo expediente', 'texto' => 'Cruza o Parnaíba e muda de estado. Não é corrida urbana do Centro; o horário sai sob consulta.'],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na grade em Teresina',
        'passos' => [
            ['titulo' => 'Município e bairro', 'texto' => 'Teresina ou Timon. Jóquei, Centro ou Fátima. Autocomplete não resolve avenida com dois acessos.'],
            ['titulo' => 'Hotel ou THE', 'texto' => 'Diga se o embarque é a Praça Santos Dumont ou a portaria do hotel no Jóquei.'],
            ['titulo' => 'Confirmação', 'texto' => 'Nome e DDD no WhatsApp. Devolvemos o horário de apresentação em Teresina.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Petrônio Portella',
    'faq' => [
        ['pergunta' => 'O THE fica em Teresina ou do outro lado do rio, em Timon?', 'resposta' => 'Fica em Teresina, na zona norte. Timon é outro município, no Maranhão; só entra no roteiro com endereço do outro lado do Parnaíba.'],
        ['pergunta' => 'Jóquei, Centro e Fátima cabem no mesmo trecho do Petrônio Portella?', 'resposta' => 'Cabem, se a ordem das avenidas já estiver no pedido. Frei Serafim e Homero Castelo Branco não compartilham o mesmo recuo.'],
        ['pergunta' => 'Qual dado evita o carro parado na porta errada no Fátima?', 'resposta' => 'Rua e número. “No Fátima” ou o pino da Homero Castelo Branco não escolhem o portão.'],
        ['pergunta' => 'O trecho até Timon sai como corrida urbana de Teresina?', 'resposta' => 'Não. Cruza o Parnaíba e muda de UF. Informe o endereço em Timon; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Diga se o embarque é o THE, o Jóquei ou Timon',
        'texto' => 'O orçamento de Teresina sai sob consulta. Bairro, município e número do voo no mesmo recado.',
        'botao' => 'Pedir motorista em Teresina',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'piaui', 'ancora' => 'Parnaíba, Picos e o recorte piauiense'],
        ['tipo' => 'cidade', 'estado' => 'maranhao', 'cidade' => 'sao-luis', 'ancora' => 'Calhau, Centro Histórico e o SLZ'],
        ['tipo' => 'cidade', 'estado' => 'ceara', 'cidade' => 'fortaleza', 'ancora' => 'Meireles, Aldeota e o Pinto Martins'],
    ],
];
