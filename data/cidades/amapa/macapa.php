<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Macapá',
    'geo' => ['lat' => 0.03493, 'lng' => -51.0694],
    'imagem' => 'norte.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Macapá',
    'seo' => [
        'title' => 'MCP, Marco Zero e o Trapiche no Centro de Macapá',
        'description' => 'Motorista em Macapá para Centro, Trapiche Eliezer Levy, Marco Zero e o Alberto Alcolumbre. Santana e o porto saem à parte. Informe o voo MCP.',
        'og_title' => 'Carro no Centro, no Trapiche e no Alberto Alcolumbre',
        'og_description' => 'Traslado amapaense: Fortaleza e Trapiche no Centro, Marco Zero na linha do Equador e o terminal MCP no município.',
        'og_image_alt' => 'Sedan executivo em avenida de Macapá próxima ao rio Amazonas',
    ],
    'kicker' => 'Capital amapaense · AP',
    'h1' => 'Do Alberto Alcolumbre ao Trapiche sem usar o Marco Zero de atalho',
    'preambulo' => 'Macapá é a capital cortada pela linha do Equador. O voo chega no Alberto Alcolumbre (MCP), no próprio município. A pauta institucional desce no Centro, na Fortaleza de São José e no Trapiche Eliezer Levy, sobre o Amazonas. O Marco Zero não é o desembarque do avião: entra só se estiver no roteiro.',
    'artigos' => [
        [
            'h2' => 'Centro, Fortaleza e Trapiche pedem porta, não “na orla”',
            'texto' => 'Avenida FAB, Beira-Rio e o Centro concentram hotel, banco e sede. A Fortaleza de São José de Macapá fica no miolo, às margens do Amazonas. O Trapiche Eliezer Levy avança sobre o rio; o calçamento pede ponto de espera. “Perto da Fortaleza” não coloca o carro na porta do palácio nem no acesso de serviço do hotel.',
        ],
        [
            'h2' => 'Marco Zero entra como visita combinada, não como desvio',
            'texto' => 'O monumento do Equador fica noutro recorte da cidade, fora do calçadão do Trapiche. Se a comitiva for ao Marco Zero, o horário sai no pedido — não no meio do trajeto Centro–MCP. Santana, com o porto no canal do Amazonas, é município vizinho: o trecho sai com margem própria, não como segunda parada da FAB.',
        ],
        [
            'h2' => 'Alberto Alcolumbre — MCP',
            'texto' => 'Lei federal denomina o terminal Aeroporto Internacional de Macapá/AP — Alberto Alcolumbre. Fica em Macapá. Combinamos o voo. A espera no desembarque entra no trecho MCP. Do terminal ao Centro ou ao Trapiche, avenida e chuva da tarde mudam o intervalo; o Marco Zero não encurta o saguão.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em Macapá',
        'itens' => [
            ['h3' => 'Hotel no Centro', 'texto' => 'Informe o nome e a entrada. A Beira-Rio e a FAB não compartilham o mesmo recuo.'],
            ['h3' => 'Fortaleza de São José e o Trapiche', 'texto' => 'Pauta institucional e espera no píer. O cerimonial pede ponto combinado, não “na muralha” nem no fim do trapiche.'],
            ['h3' => 'Marco Zero', 'texto' => 'Visita ou evento na linha do Equador. Combinamos o horário; não é escala automática entre o MCP e o Centro.'],
            ['h3' => 'Santana e o porto', 'texto' => 'Município vizinho e canal de cargas. Quando a reunião cruza rumo a Santana, o trecho entra como rota própria, sob consulta.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pousa no Alberto Alcolumbre',
    'faq' => [
        ['pergunta' => 'O MCP desembarca no Marco Zero?', 'resposta' => 'Não. O aeroporto fica em Macapá, noutro recorte. O Marco Zero entra só se estiver no roteiro, como visita.'],
        ['pergunta' => 'Trapiche Eliezer Levy e Fortaleza de São José pedem o mesmo recuo?', 'resposta' => 'Não. São pontos vizinhos no Centro, com calçamento e cerimonial diferentes. Informe qual porta vale para a espera.'],
        ['pergunta' => 'Santana e o porto entram no mesmo pedido do Alberto Alcolumbre?', 'resposta' => 'Entram como trecho próprio. Santana é outro município; não é o recorte do Centro nem do MCP.'],
        ['pergunta' => 'Oiapoque e a ponte binacional cabem no expediente do Centro?', 'resposta' => 'Não. Oiapoque é viagem longa pela BR-156. Se precisar, o trecho sai sob consulta, sem virar roteiro turístico da capital.'],
    ],
    'cta' => [
        'titulo' => 'Envie o hotel junto com o horário do MCP',
        'texto' => 'O orçamento de Macapá sai sob consulta. Centro, Trapiche, Marco Zero e terminal no mesmo recado.',
        'botao' => 'Pedir motorista em Macapá',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'amapa', 'ancora' => 'Oiapoque, Santana e o recorte amapaense'],
        ['tipo' => 'cidade', 'estado' => 'para', 'cidade' => 'belem', 'ancora' => 'Nazaré, Ver-o-Peso e o Val-de-Cans'],
        ['tipo' => 'cidade', 'estado' => 'amazonas', 'cidade' => 'manaus', 'ancora' => 'O Eduardo Gomes e a agenda manauara'],
    ],
];
