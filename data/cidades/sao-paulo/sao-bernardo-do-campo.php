<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'São Bernardo do Campo',
    'geo' => ['lat' => -23.6914, 'lng' => -46.5646],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em São Bernardo do Campo',
    'seo' => [
        'title' => 'Motorista em São Bernardo: Paço, Rudge Ramos e Assunção',
        'description' => 'Carro com motorista em São Bernardo do Campo para o Paço, Rudge Ramos e Assunção. Congonhas ou GRU, sem saguão no município. Valor sob consulta.',
        'og_title' => 'Traslado no Paço, no Rudge Ramos e na Assunção',
        'og_description' => 'Motorista em São Bernardo: UMESP, Scania e o recuo rumo a Congonhas pela Via Anchieta.',
        'og_image_alt' => 'Sedan executivo em avenida de São Bernardo do Campo',
    ],
    'kicker' => 'ABC paulista · SP',
    'h1' => 'Do Rudge Ramos ao Paço sem perder a janela da Assunção',
    'preambulo' => 'São Bernardo do Campo pauta montadora, universidade e sede no mesmo expediente. O Paço fica na Praça Samuel Sabatini; a Metodista, na Rua Alfeu Tavares, no Rudge Ramos; a Scania, na Assunção, colada à Via Anchieta. Não há saguão comercial no município: o voo curto sai em Congonhas (CGH), no município de São Paulo; o internacional, em Guarulhos (GRU). A margem nasce na portaria certa, não no pin “ABC”.',
    'artigos' => [
        [
            'h2' => 'Rudge Ramos pede a Alfeu Tavares, não a praça do Paço',
            'texto' => 'Hotel, clínica e o campus da Universidade Metodista de São Paulo (UMESP) concentram o embarque no Rudge Ramos. Informe o prédio e a rua: a Alfeu Tavares não é o recuo da Praça Samuel Sabatini. Quando a comitiva dorme aqui e reúne no Centro, o trecho é urbano de São Bernardo; quando segue à Faria Lima, a Anchieta vira viagem. A espera na porta do campus entra no roteiro se o nome já estiver na lista.',
        ],
        [
            'h2' => 'Assunção e Demarchi: duas portarias, uma mesma Anchieta',
            'texto' => 'A Scania opera no bairro Assunção, no lote junto à Via Anchieta (SP-150). A Volkswagen Anchieta fica no km 23,5, no Demarchi — outro recuo, outra cancela. “Na planta da Anchieta” não coloca o sedan na lista. Envie empresa, portaria, turno e o documento pedido. Sem isso, o recuo da montadora não libera. O Centro e o Paço não resolvem essa entrada.',
        ],
        [
            'h2' => 'Congonhas pela Anchieta; GRU pelo Rodoanel; litoral pela Imigrantes',
            'texto' => 'Não existe terminal de passageiros regulares em São Bernardo. Congonhas (CGH) é o destino típico da pauta curta: a Via Anchieta entra em São Paulo rumo ao saguão da zona sul. Guarulhos (GRU) pede Rodoanel (SP-021), não o mesmo sentido da planta. A Rodovia dos Imigrantes (SP-160) entra quando o roteiro desce ao litoral, em geral Santos. Combinamos voo, terminal e o ponto de saída — Rudge Ramos e Assunção mudam o intervalo. A espera no desembarque integra o trecho quando o pouso já está no pedido.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em São Bernardo',
        'itens' => [
            ['h3' => 'Centro e o Paço na Samuel Sabatini', 'texto' => 'Informe o prédio. O recuo do Paço não é o da UMESP nem o da Scania.'],
            ['h3' => 'Rudge Ramos e a Metodista', 'texto' => 'Campus, hotel e clínica. Rua e número evitam a volta na Kennedy.'],
            ['h3' => 'Assunção, Demarchi e a cancela', 'texto' => 'Scania ou Volkswagen: lista, documento e qual das portarias.'],
            ['h3' => 'Quando o voo aponta para CGH ou GRU', 'texto' => 'Congonhas pela Anchieta; Guarulhos pelo Rodoanel. O orçamento sai à parte do trecho urbano.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pauta o Paço e a Assunção',
    'faq' => [
        ['pergunta' => 'São Bernardo do Campo tem aeroporto comercial?', 'resposta' => 'Não. O município não opera saguão de linha regular. O voo curto sai em Congonhas (CGH), em São Paulo, pela Via Anchieta; o internacional, em Guarulhos (GRU), pelo Rodoanel.'],
        ['pergunta' => 'A Scania na Assunção e a Volkswagen no Demarchi aceitam o mesmo recuo?', 'resposta' => 'Não. São cancelas distintas na Anchieta. Envie a empresa, a portaria e o documento da lista. Sem isso, o sedan não entra.'],
        ['pergunta' => 'O motorista busca na UMESP e segue ao Paço no mesmo dia?', 'resposta' => 'Sim, quando a ordem já está no roteiro. Rudge Ramos (Alfeu Tavares) e Praça Samuel Sabatini são recuos diferentes; um motorista articula os dois.'],
        ['pergunta' => 'Dá para descer a Imigrantes rumo a Santos depois da planta?', 'resposta' => 'Sim, quando o litoral entra no itinerário. A SP-160 não é o mesmo sentido do CGH; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Envie a portaria da Assunção junto com o voo em Congonhas',
        'texto' => 'Informe Paço, Rudge Ramos ou planta, o hotel pelo nome e se o destino é CGH, GRU ou o litoral. Respondemos com horário e valor.',
        'botao' => 'Pedir motorista em São Bernardo do Campo',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'santos', 'ancora' => 'Gonzaga, porto e a orla santista'],
    ],
];
