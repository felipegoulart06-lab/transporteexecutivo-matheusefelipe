<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Brasília',
    'geo' => ['lat' => -15.7939, 'lng' => -47.8828],
    'imagem' => 'centro-oeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Brasília',
    'seo' => [
        'title' => 'Motorista executivo em Brasília: Eixo e aeroporto',
        'description' => 'Carro com motorista em Brasília para o Eixo Monumental, Asas, Lago Sul e o aeroporto BSB. Embarque discreto e orçamento sob consulta.',
        'og_title' => 'Deslocamento executivo no Plano Piloto e no aeroporto de Brasília',
        'og_description' => 'Motorista para agendas de governo, hotel no Lago e o terminal BSB, com horário combinado.',
        'og_image_alt' => 'Sedan executivo em via larga do Plano Piloto em Brasília',
    ],
    'kicker' => 'Distrito Federal · Brasília',
    'h1' => 'Cerimonial de embarque no Eixo, sem alarde na portaria',
    'preambulo' => 'Brasília não é estado; é o território onde a pauta de governo, o hotel do Lago e o aeroporto cabem no mesmo expediente — se o motorista já conhece o acesso da via e o protocolo da recepção.',
    'artigos' => [
        [
            'h2' => 'O Plano Piloto pede outro tipo de recuo',
            'texto' => 'Asa Sul, Asa Norte, Setor Hoteleiro e o Eixo Monumental não se navegam como bairro de cidade radiocêntrica. Quadra, bloco e entrada são o endereço. “Perto da rodoviária” não coloca o carro na porta certa do ministério.',
        ],
        [
            'h2' => 'Lago Sul, Lago Norte e o silêncio da agenda',
            'texto' => 'Residências e embaixadas pedem discrição: sem identificação ostensiva no veículo, sem buzina no recuo. O motorista espera onde a segurança indicar, não onde o GPS sugere uma rotatória.',
        ],
        [
            'h2' => 'BSB no relógio da Esplanada',
            'texto' => 'O Aeroporto Internacional de Brasília fica no recorte da cidade, mas o tempo até a Asa muda com o Eixo e com o horário de sessão. Combinamos o voo e o ponto de encontro; a espera no desembarque integra o trecho.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia',
        'itens' => [
            ['h3' => 'Setor Hoteleiro Sul ou Norte', 'texto' => 'Informe o hotel e a entrada. Os dois setores não compartilham o mesmo recuo.'],
            ['h3' => 'Esplanada e ministérios', 'texto' => 'Acesso e credencial, quando houver. O carro não improvisa na via de cerimonial.'],
            ['h3' => 'Aeroporto Juscelino Kubitschek — BSB', 'texto' => 'Terminal, voo e se há conexão. A margem sai do hotel, não do saguão.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pauta Brasília',
    'faq' => [
        ['pergunta' => 'O Distrito Federal entra como estado no pedido?', 'resposta' => 'Não. Brasília é o município do DF. No fluxo do site, o DF aparece à parte — não como estado.'],
        ['pergunta' => 'Vocês esperam no BSB se a sessão atrasar o embarque?', 'resposta' => 'Sim, quando a espera está no roteiro. Informe se a pauta pode esticar; a modalidade por hora evita nova chamada.'],
        ['pergunta' => 'Dá para ir do Lago Sul à Esplanada e seguir ao aeroporto?', 'resposta' => 'Sim. A ordem dos três pontos muda o intervalo. Envie quadra, bloco e o número do voo.'],
        ['pergunta' => 'O motorista conhece o acesso de embaixada?', 'resposta' => 'Trabalhamos com o protocolo que você enviar: nome na lista e documento. Sem isso, a portaria não libera o recuo.'],
    ],
    'cta' => [
        'titulo' => 'Envie a quadra junto com o horário do voo',
        'texto' => 'O orçamento de Brasília sai sob consulta, com embarque e destino no mesmo recado.',
        'botao' => 'Solicitar carro em Brasília',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'distrito-federal', 'ancora' => 'O recorte do Distrito Federal além do Eixo'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Torres, Congonhas e GRU na capital paulista'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'belo-horizonte', 'ancora' => 'Savassi e o trecho até Confins'],
    ],
];
