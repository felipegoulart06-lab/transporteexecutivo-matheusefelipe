<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Macapá',
    'geo' => ['lat' => 0.03493, 'lng' => -51.0694],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Macapá',
    'seo' => [
        'title' => 'Carro executivo em Macapá: Centro, Marco Zero e MCP',
        'description' => 'Motorista executivo em Macapá para o Centro, Trem, Marco Zero da Equador, Fazendinha e o aeroporto Alberto Alcolumbre. Orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Centro de Macapá, no Marco Zero e no MCP',
        'og_description' => 'Carro com motorista na capital amapaense: hotel, Fortaleza de São José e o terminal Alberto Alcolumbre.',
        'og_image_alt' => 'Sedan executivo em avenida de Macapá próxima ao rio Amazonas',
    ],
    'kicker' => 'Capital amapaense · AP',
    'h1' => 'Do Alberto Alcolumbre ao Marco Zero sem perder a pauta na Fortaleza',
    'preambulo' => 'Macapá é a capital cortada pela linha do Equador. O voo chega no Alberto Alcolumbre (MCP); a pauta desce no Centro, no bairro Trem ou na Fortaleza de São José de Macapá. O motorista segura a AP-010 e o Canal do Jandiá; o passageiro segura o horário.',
    'artigos' => [
        [
            'h2' => 'O Centro e o Canal não se navegam no aceite do celular',
            'texto' => 'Avenida FAB, Beira-Rio e o Centro concentram hotel, banco e sede. O recuo pede o nome do prédio. “Perto da Fortaleza” não coloca o carro na porta certa do palácio nem no acesso de serviço do hotel.',
        ],
        [
            'h2' => 'Marco Zero, Fazendinha e o intervalo da visita',
            'texto' => 'O Marco Zero da Equador e o complexo da Fazendinha entram no roteiro como visita combinada — não como desvio de última hora. O trecho até Santana, quando há reunião no porto, sai com margem para a ponte; não é o mesmo recorte do Centro.',
        ],
        [
            'h2' => 'Alberto Alcolumbre — MCP',
            'texto' => 'O aeroporto fica no recorte urbano, sujeito a chuva. Combinamos o voo. A espera no desembarque integra o trecho MCP. Do terminal ao Centro ou ao Trem, o intervalo muda com a avenida e com o temporal da tarde.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em Macapá',
        'itens' => [
            ['h3' => 'Hotel no Centro ou no Trem', 'texto' => 'Informe o nome e a entrada. A Beira-Rio e a FAB não compartilham o mesmo recuo.'],
            ['h3' => 'Fortaleza de São José e o palácio', 'texto' => 'Pauta institucional. O calçamento e o cerimonial pedem ponto de espera, não “na muralha”.'],
            ['h3' => 'Marco Zero e o sambódromo', 'texto' => 'Visita ou evento. Combinamos o horário de pico na Avenida Equatorial.'],
            ['h3' => 'Santana e o porto', 'texto' => 'Quando a reunião cruza o rio canalizado rumo a Santana, o trecho entra como rota própria, sob consulta.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pousa no Alberto Alcolumbre',
    'faq' => [
        ['pergunta' => 'O aeroporto de Macapá fica longe do Centro?', 'resposta' => 'É trecho urbano. Marcamos margem: a avenida e a chuva da tarde alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no MCP se o voo atrasar?', 'resposta' => 'Sim. Em Macapá, o número do voo entra no roteiro e a espera no saguão faz parte do trecho.'],
        ['pergunta' => 'Dá para ir à Fortaleza e ao Marco Zero no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. São recortes diferentes da cidade; um motorista articula os dois.'],
        ['pergunta' => 'Vocês fazem o trecho até Santana?', 'resposta' => 'Sim, quando Santana entra no roteiro. Não é o mesmo pedido do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Envie o hotel junto com o horário do MCP',
        'texto' => 'O orçamento de Macapá sai sob consulta. Centro, Marco Zero e terminal no mesmo recado.',
        'botao' => 'Solicitar carro em Macapá',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'amapa', 'ancora' => 'Oiapoque, Santana e o recorte amapaense'],
        ['tipo' => 'cidade', 'estado' => 'para', 'cidade' => 'belem', 'ancora' => 'Nazaré, Ver-o-Peso e o Val-de-Cans'],
        ['tipo' => 'cidade', 'estado' => 'amazonas', 'cidade' => 'manaus', 'ancora' => 'O Eduardo Gomes e a agenda manauara'],
    ],
];
