<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Brasília',
    'geo' => ['lat' => -15.7939, 'lng' => -47.8828],
    'imagem' => 'centro-oeste.jpg',
    'schema_service_name' => 'Motorista executivo no Plano Piloto e no aeroporto JK',
    'seo' => [
        'title' => 'Eixo, Setor Hoteleiro e BSB: motorista em Brasília',
        'description' => 'Motorista em Brasília para Asa Sul, Asa Norte, Setor Hoteleiro, Esplanada e o aeroporto JK (BSB), no Lago Sul. Informe quadra, bloco, entrada e se a pauta segue ao terminal.',
        'og_title' => 'Cerimonial de recuo nas Asas, no Eixo e no Lago Sul',
        'og_description' => 'Carro com motorista no Plano Piloto: quadra e bloco no endereço, Setor Hoteleiro e o terminal Presidente Juscelino Kubitschek.',
        'og_image_alt' => 'Sedan executivo em via larga do Plano Piloto em Brasília',
    ],
    'kicker' => 'Distrito Federal · Brasília',
    'h1' => 'Quadra, bloco e recuo no Plano Piloto até o BSB',
    'preambulo' => 'O Distrito Federal não é estado: a Constituição veda dividi-lo em municípios. Brasília concentra a pauta de governo, o hotel do Setor Hoteleiro e o aeroporto JK no Lago Sul — se o motorista já conhece a via da Asa e o protocolo da recepção. Quadra, bloco e entrada são o endereço. “Perto da rodoviária” não coloca o carro na porta certa do ministério.',
    'artigos' => [
        [
            'h2' => 'O Plano Piloto pede outro tipo de recuo',
            'texto' => 'Asa Sul, Asa Norte, Setor Hoteleiro Sul, Setor Hoteleiro Norte e o Eixo Monumental não se navegam como bairro radiocêntrico. O SHS e o SHN não compartilham o mesmo recuo. Informe o hotel e a entrada; os dois setores não se improvisam no mesmo retorno.',
        ],
        [
            'h2' => 'Lago Sul, Lago Norte e o silêncio da agenda',
            'texto' => 'Residências e embaixadas pedem discrição: sem identificação ostensiva no veículo, sem buzina no recuo. O motorista espera onde a segurança indicar. Nome na lista e documento seguem na frente do GPS.',
        ],
        [
            'h2' => 'BSB no Lago Sul, não na Esplanada',
            'texto' => 'O Aeroporto Internacional Presidente Juscelino Kubitschek (BSB) tem endereço operacional no Lago Sul, Área Especial s/n. O operador informa treze quilômetros até o Eixo Monumental. Combinamos o voo e o ponto de encontro; a espera no desembarque integra o trecho. O horário de sessão na Esplanada muda o intervalo até o terminal mais que o mapa.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia',
        'itens' => [
            ['h3' => 'Setor Hoteleiro Sul ou Norte', 'texto' => 'Informe o hotel e a entrada. Os dois setores não compartilham o mesmo recuo.'],
            ['h3' => 'Esplanada e ministérios', 'texto' => 'Acesso e credencial, quando houver. O carro não improvisa na via de cerimonial.'],
            ['h3' => 'Aeroporto Juscelino Kubitschek — BSB', 'texto' => 'Terminal, voo e se há conexão. A margem sai do hotel da Asa ou do Lago, não do saguão.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pauta o Plano Piloto',
    'faq' => [
        ['pergunta' => 'O Distrito Federal entra no pedido como estado?', 'resposta' => 'Não. O DF não é estado e não se divide em municípios. O recorte desta página é Brasília, no Distrito Federal: quadra, bloco e, se for o caso, a RA do Lago Sul no aeroporto JK.'],
        ['pergunta' => 'O Setor Hoteleiro Sul e o Norte são o mesmo recuo?', 'resposta' => 'Não. Informe o hotel e a entrada. SHS e SHN não se resolvem com “setor hoteleiro” no aplicativo.'],
        ['pergunta' => 'Dá para ir do Lago Sul à Esplanada e seguir ao BSB?', 'resposta' => 'Sim. A ordem dos três pontos muda o intervalo. Envie quadra, bloco e o número do voo. Se a sessão atrasar, a hora à disposição evita nova chamada no Eixo.'],
        ['pergunta' => 'O motorista entra em embaixada ou ministério sem lista?', 'resposta' => 'Não. Trabalhamos com o protocolo que você enviar: nome na lista e documento. Sem isso, a portaria não libera o recuo.'],
    ],
    'cta' => [
        'titulo' => 'Envie a quadra junto com o horário do voo',
        'texto' => 'Informe o embarque no Plano Piloto ou no Lago, o destino (Esplanada, hotel ou BSB) e o horário. A confirmação volta pelo WhatsApp.',
        'botao' => 'Pedir motorista em Brasília',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'distrito-federal', 'ancora' => 'O recorte do Distrito Federal além do Eixo'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas na capital e GRU em Guarulhos'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'belo-horizonte', 'ancora' => 'Savassi e o trecho até Confins'],
    ],
];
