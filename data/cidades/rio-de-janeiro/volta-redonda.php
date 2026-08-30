<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Volta Redonda',
    'geo' => ['lat' => -22.5202, 'lng' => -44.0996],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Volta Redonda',
    'seo' => [
        'title' => 'Motorista em Volta Redonda: Aterrado, CSN e Dutra',
        'description' => 'Carro com motorista em Volta Redonda para o Aterrado, Vila Santa Cecília, CSN e a Dutra rumo ao Rio. Portaria, espera combinada e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Aterrado, na CSN e na Dutra',
        'og_description' => 'Motorista no Vale do Paraíba: hotel no Aterrado, portaria da usina e o recuo da Dutra.',
        'og_image_alt' => 'Sedan executivo em avenida do Aterrado em Volta Redonda',
    ],
    'kicker' => 'Vale do Paraíba · RJ',
    'h1' => 'Do Aterrado à CSN sem perder a janela da Dutra',
    'olho' => 'Volta Redonda é a cidade da CSN e do recuo da Presidente Dutra rumo ao Rio. O motorista segura a portaria e a BR-116; o passageiro segura a reunião — não a vaga na porta do hotel.',
    'capitulos' => [
        [
            'h2' => 'A cidade do aço e o aeroporto que ficou no Rio',
            'texto' => 'Aterrado, Vila Santa Cecília, Sessenta e o Retiro cabem em poucos quilômetros. O Galeão e o Santos Dumont não. Quem marca visita na CSN e voo no mesmo dia precisa de um carro que já saiu do hotel no Aterrado, não de um aceite no minuto da Dutra.',
        ],
        [
            'h2' => 'Onde o embarque volta-redondense mais se concentra',
            'itens' => [
                ['h3' => 'Aterrado e o eixo comercial', 'texto' => 'Hotel, sede e o recuo da avenida. Informe o estabelecimento; “no Aterrado” não define a entrada.'],
                ['h3' => 'Vila Santa Cecília, Sessenta e o Retiro', 'texto' => 'Residencial e clínicas. O recuo pede rua e número; os bairros se repetem no mapa da usina.'],
                ['h3' => 'CSN e o protocolo de portaria', 'texto' => 'Nome na lista e documento. Sem isso, o recuo da siderúrgica não libera — e o app não resolve a cancela.'],
            ],
        ],
        [
            'h2' => 'Rotas de trabalho, usina e o salto pela Dutra',
            'texto' => 'Hotel no Aterrado → CSN → Vila Santa Cecília só se a ordem estiver no roteiro. Outro clássico: Volta Redonda → GIG ou SDU pela Presidente Dutra, como viagem do Vale do Paraíba fluminense, não como corrida urbana. Angra entra pela mesma lógica de serra e costa.',
        ],
        [
            'h2' => 'Presidente Dutra — o relógio do GIG e do SDU',
            'texto' => 'Volta Redonda não tem saguão próprio. Combinamos se o voo é Galeão ou Santos Dumont. A Dutra muda o intervalo mais que o mapa admite; a margem sai do Aterrado, não do saguão. A espera no desembarque, quando o voo está no roteiro, integra o trecho.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que evitam atraso no Vale do Paraíba',
        'itens' => [
            ['num' => '01', 'titulo' => 'Bairro e prédio', 'texto' => 'Aterrado ou Vila Santa Cecília. “Em Volta Redonda” não define o recuo.'],
            ['num' => '02', 'titulo' => 'Portaria da CSN', 'texto' => 'Nome na lista e documento. O carro chega com o protocolo, não com o GPS da usina.'],
            ['num' => '03', 'titulo' => 'GIG, SDU ou cidade', 'texto' => 'O trecho até o Rio entra como viagem pela Dutra. O urbano é outro orçamento.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta a CSN e a Dutra',
    'faq' => [
        ['pergunta' => 'Vocês entram na CSN com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, a cancela da siderúrgica não libera.'],
        ['pergunta' => 'O motorista segue a Dutra até o Galeão?', 'resposta' => 'Sim, quando o GIG entra no roteiro. A Presidente Dutra pede margem; não é corrida instantânea do Aterrado.'],
        ['pergunta' => 'Em Volta Redonda, dá para usar o Santos Dumont em vez do Galeão?', 'resposta' => 'Sim. Combinamos o terminal. O SDU pede outro recuo na chegada ao Rio; o horário sai sob consulta.'],
        ['pergunta' => 'Vocês fazem Aterrado, Sessenta e o Retiro no mesmo dia?', 'resposta' => 'Sim. Informe a ordem e o ponto de espera. Um motorista articula os três recortes.'],
        ['pergunta' => 'Dá para seguir a Angra depois da visita à usina?', 'resposta' => 'Sim, como viagem. Não é o mesmo recorte do Aterrado; o horário de serra e costa sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Marque a CSN no mesmo recado da Dutra',
        'texto' => 'O orçamento de Volta Redonda sai sob consulta. Aterrado, usina e voo no mesmo WhatsApp.',
        'botao' => 'Pedir traslado em Volta Redonda',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-de-janeiro', 'ancora' => 'O recorte fluminense além da capital'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Santos Dumont, Galeão e a Zona Sul'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'angra-dos-reis', 'ancora' => 'Centro, Frade e a Costa Verde'],
    ],
];
