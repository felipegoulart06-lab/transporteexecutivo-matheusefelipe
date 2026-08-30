<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Mauá',
    'geo' => ['lat' => -23.6677, 'lng' => -46.4613],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Mauá',
    'seo' => [
        'title' => 'Motorista em Mauá: Centro, Vila Bocaina e Sertãozinho',
        'description' => 'Carro com motorista em Mauá para o Centro, a Vila Bocaina e o polo de Sertãozinho. Congonhas ou GRU, sem saguão local. Valor sob consulta.',
        'og_title' => 'João Ramalho, Bocaina e o polo de Sertãozinho',
        'og_description' => 'Motorista em Mauá: Paço no Centro, Hospital Nardini na Bocaina e a cancela na Papa João XXIII.',
        'og_image_alt' => 'Sedan executivo na Avenida João Ramalho, em Mauá',
    ],
    'kicker' => 'ABC industrial · SP',
    'h1' => 'Sertãozinho não é Capuava: dois polos, um município',
    'preambulo' => 'Mauá tem dois polos industriais no próprio território: Sertãozinho, na Avenida Papa João XXIII, e Capuava, no complexo petroquímico compartilhado com Santo André. O Centro corre na João Ramalho; a Vila Bocaina estende o comércio e o Hospital Nardini. O aplicativo troca o recuo com Santo André se o pin vier só como ABC. Não há saguão comercial: a Prefeitura situa Congonhas (CGH) mais perto que Guarulhos (GRU). A cancela de Sertãozinho não abre com o endereço do Campestre.',
    'artigos' => [
        [
            'h2' => 'Centro e Vila Bocaina: extensão no mapa, portas distintas',
            'texto' => 'A João Ramalho concentra Paço, comércio e o hotel de embarque. A Vila Bocaina nasceu como loteamento vizinho ao Centro e hoje abriga clínicas e o Hospital Nardini, na Rua Regente Feijó. Informe o estabelecimento: o recuo da praça do Relógio não é a rampa do hospital. Sem rua e número, o GPS derruba o sedan em Santo André, do outro lado da divisa.',
        ],
        [
            'h2' => 'Sertãozinho pede a Papa João XXIII; Capuava pede outra lista',
            'texto' => 'O Polo de Sertãozinho reúne galpão, metalúrgica e autopeça no recorte oeste, ligado ao Centro pela Avenida Papa João XXIII e pela Dom José Gaspar. O Polo de Capuava e o petroquímico do Grande ABC ficam noutro recuo, com protocolo de cancela, EPI e documento na lista. “Me busca na indústria de Mauá” não diz qual dos dois. Envie o nome do complexo e a portaria.',
        ],
        [
            'h2' => 'Congonhas no relógio de Mauá; GRU pelo Rodoanel e Jacu-Pêssego',
            'texto' => 'Não existe terminal de passageiros regulares no município. O voo curto da pauta sai em Congonhas (CGH), no município de São Paulo, com acesso pela malha do ABC até a Via Anchieta (SP-150). Guarulhos (GRU) entra pelo Rodoanel (SP-021) e pela Avenida Jacu-Pêssego quando o roteiro já prevê o salto. A Imigrantes (SP-160) e o porto de Santos aparecem só se o litoral estiver no pedido. Combinamos o ponto de saída: Centro, Bocaina e Sertãozinho mudam o intervalo.',
        ],
    ],
    'pauta' => [
        'h2' => 'O que entra na ordem do dia em Mauá',
        'itens' => [
            ['h3' => 'Centro e a João Ramalho', 'texto' => 'Paço e o hotel de embarque. Informe o prédio; o recuo do Centro não é o de Sertãozinho.'],
            ['h3' => 'Vila Bocaina e o Nardini', 'texto' => 'Clínica, residencial e hospital. Rua e número evitam a troca com o pin de Santo André.'],
            ['h3' => 'Sertãozinho na Papa João XXIII', 'texto' => 'Polo industrial. Lista e portaria; não confundir com a cancela de Capuava.'],
            ['h3' => 'Quando o voo aponta para Congonhas ou GRU', 'texto' => 'CGH pela Anchieta; GRU pelo Rodoanel. A margem sai do recuo escolhido, não do saguão.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem não quer o pin de Santo André',
    'faq' => [
        ['pergunta' => 'Mauá tem aeroporto comercial?', 'resposta' => 'Não. Não há saguão de linha regular. O voo curto sai em Congonhas (CGH); Guarulhos (GRU) entra pelo Rodoanel e pela Jacu-Pêssego quando já está no roteiro.'],
        ['pergunta' => 'O polo de Sertãozinho é o mesmo recuo de Capuava?', 'resposta' => 'Não. Sertãozinho fica na Papa João XXIII. Capuava é o outro polo, petroquímico, na borda com Santo André. Cada complexo tem lista própria.'],
        ['pergunta' => 'O Hospital Nardini na Vila Bocaina entra no mesmo pedido do Paço?', 'resposta' => 'Entra, se a ordem estiver no roteiro. São recuos distintos na extensão do Centro; informe a Rua Regente Feijó ou o prédio do Paço.'],
        ['pergunta' => 'Por que o aplicativo para em Santo André quando peço Mauá?', 'resposta' => 'Porque o pin genérico do ABC ignora a divisa. Pedimos município, rua e o nome do estabelecimento. João Ramalho e Campestre não compartilham porta.'],
    ],
    'cta' => [
        'titulo' => 'Sertãozinho, Bocaina e o voo em Congonhas no mesmo recado',
        'texto' => 'Informe o polo, o hotel na João Ramalho e se o destino é CGH ou GRU. Respondemos com horário e valor.',
        'botao' => 'Pedir motorista em Mauá',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'santo-andre', 'ancora' => 'Campestre, Paço e a Avenida Industrial'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
    ],
];
