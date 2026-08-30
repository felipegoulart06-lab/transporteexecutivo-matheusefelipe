<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Jundiaí',
    'geo' => ['lat' => -23.1857, 'lng' => -46.8978],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Jundiaí',
    'seo' => [
        'title' => 'Motorista em Jundiaí: Centro, Medeiros e Anhanguera',
        'description' => 'Carro com motorista em Jundiaí para o Centro, Medeiros e o Distrito na Anhanguera. Voo regular em VCP ou CGH; QDV só aviação geral. Valor sob consulta.',
        'og_title' => 'Traslado no Centro, no Medeiros e no km da Anhanguera',
        'og_description' => 'Motorista em Jundiaí: hotel no Centro, planta no Distrito e o recuo rumo a VCP ou CGH.',
        'og_image_alt' => 'Sedan executivo em avenida de Jundiaí',
    ],
    'kicker' => 'Interior da capital · SP',
    'h1' => 'QDV recebe o jato executivo; o voo regular sai em VCP ou CGH',
    'intro' => 'Jundiaí alinha o Centro na Barão de Jundiaí, o Medeiros no vetor oeste e o Distrito Industrial colado à Rodovia Anhanguera (SP-330). O Aeroporto Estadual Comandante Rolim Adolfo Amaro (QDV/SBJD) opera aviação geral e executiva — hangar, manutenção e táxi aéreo — e não substitui o saguão de linha regular. O voo comercial da pauta sai em Viracopos (VCP), em Campinas, ou em Congonhas (CGH), em São Paulo. A Anhanguera e a dos Bandeirantes (SP-348) definem a margem, não o aceite do aplicativo.',
    'blocos' => [
        [
            'h2' => 'Medeiros, Centro e a planta não compartilham o recuo da Anhanguera',
            'texto' => 'Quem tem pauta no Distrito Industrial e check-out no Centro precisa da portaria e do km da SP-330. O Medeiros concentra condomínio e o acesso à Rodovia Dom Gabriel Paulino Bueno Couto; a Serra do Japi fica à vista, mas só entra no pedido como visita combinada, com ponto de espera — não como eixo turístico no meio da pauta fabril. O Hospital São Vicente de Paulo, referência regional no município, é recuo próprio no Centro. Informe o prédio; “no Centro de Jundiaí” não define a porta.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque jundiaiense mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Barão de Jundiaí', 'texto' => 'Sede, hotel e o Hospital São Vicente. Informe o prédio; o sentido da via muda no fim da tarde.'],
                ['h3' => 'Medeiros e o vetor oeste', 'texto' => 'Condomínio e o acesso à Dom Gabriel. Rua e portaria; o pin “Serra do Japi” não abre o recuo.'],
                ['h3' => 'Distrito Industrial na Anhanguera', 'texto' => 'Plantas nos km da SP-330, no recorte Engordadouro/Fazenda Grande. Lista e documento na cancela.'],
                ['h3' => 'QDV — aviação geral', 'texto' => 'Av. Emílio Antonon, 777. Embarque de jato executivo ou hangar. Não use QDV como terminal de linha regular.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta jundiaiense mais pede',
        'itens' => [
            ['titulo' => 'Hotel no Centro → planta no Distrito', 'texto' => 'Pauta industrial. Envie o nome na portaria e o km da Anhanguera. Sem lista, o recuo não libera.'],
            ['titulo' => 'Medeiros → Centro → São Vicente', 'texto' => 'Condomínio, sede e hospital. Um motorista cobre os três se a ordem já estiver no roteiro.'],
            ['titulo' => 'Jundiaí → Viracopos (VCP)', 'texto' => 'O VCP fica em Campinas, na Santos Dumont. Combinamos o voo e a margem da Anhanguera/Bandeirantes.'],
            ['titulo' => 'Jundiaí → Congonhas ou Faria Lima', 'texto' => 'Quando a pauta vaza para a capital, o trecho deixa de ser só urbano. CGH entra pela Anhanguera rumo a São Paulo.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta a Anhanguera e o QDV',
    'faq' => [
        ['pergunta' => 'O aeroporto de Jundiaí (QDV) tem voo comercial regular de passageiros?', 'resposta' => 'O Comandante Rolim Adolfo Amaro opera aviação geral e executiva. Há terminal novo e planos de linha regional, mas o voo regular da pauta sai em Viracopos (VCP) ou Congonhas (CGH). Não trate QDV como saguão de jet comercial sem confirmar o voo.'],
        ['pergunta' => 'Em Jundiaí, o motorista espera no VCP se o pouso atrasar?', 'resposta' => 'Sim, quando Viracopos está no roteiro. O número do voo entra no pedido; a espera no terminal em Campinas faz parte do trecho.'],
        ['pergunta' => 'A Serra do Japi entra no mesmo recorte do Distrito Industrial?', 'resposta' => 'Só como visita combinada, com ponto de espera. Não é o recuo da planta na Anhanguera; o horário sai sob consulta.'],
        ['pergunta' => 'A portaria no km da Anhanguera libera o sedan sem nome na lista?', 'resposta' => 'Em geral, não. Envie visitante, documento e o endereço da planta. O GPS no Centro não abre a cancela do Distrito.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Medeiros ao horário da Anhanguera',
        'texto' => 'Informe o hotel, a planta no Distrito e se o voo é VCP, CGH ou o hangar do QDV. Respondemos com horário e valor.',
        'botao' => 'Pedir motorista em Jundiaí',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'campinas', 'ancora' => 'Cambuí, Unicamp e o Viracopos'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
    ],
];
