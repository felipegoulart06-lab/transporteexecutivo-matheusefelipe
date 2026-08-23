<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Maracanaú',
    'geo' => ['lat' => -3.8769, 'lng' => -38.6256],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Maracanaú',
    'seo' => [
        'title' => 'Motorista em Maracanaú: Distrito Industrial e FOR',
        'description' => 'Carro com motorista em Maracanaú para o Centro, Pajuçara, Distrito Industrial, North Shopping e o trecho até o Pinto Martins. Orçamento sob consulta.',
        'og_title' => 'Traslado no Distrito Industrial, no Centro e no FOR',
        'og_description' => 'Motorista na RMF: hotel no Centro, pauta no Distrito e o recuo até o Pinto Martins.',
        'og_image_alt' => 'Sedan executivo em via do Distrito Industrial de Maracanaú',
    ],
    'kicker' => 'Região Metropolitana · CE',
    'h1' => 'Do Distrito ao Centro sem perder a janela do FOR',
    'preambulo' => 'Maracanaú é o recorte industrial da Região Metropolitana de Fortaleza — município próprio, não bairro da capital. Hotel no Centro ou em Pajuçara, reunião no Distrito Industrial e voo no Pinto Martins (FOR) cabem no mesmo expediente se o motorista já saiu com a ordem do Anel Viário, da BR-020 e da Contorno, não com o atalho do app na porta do North Shopping.',
    'artigos' => [
        [
            'h2' => 'O Distrito Industrial pede lista na portaria, não “me busca na fábrica”',
            'texto' => 'Plantas, logística e o protocolo de condomínio industrial. Envie o nome na lista e o documento pedido; sem isso, o recuo da cancela não libera. Centro, Pajuçara e o North Shopping não compartilham o mesmo acesso. “No Distrito” não coloca o carro na porta certa. O hotel entra como embarque, sem convênio de porta.',
        ],
        [
            'h2' => 'Centro, Pajuçara e o silêncio da espera no Anel',
            'texto' => 'Sede, clínica e o eixo comercial. Pajuçara de Maracanaú não é a orla de Maceió: informe rua e número. Quando a comitiva dorme aqui e reúne na Aldeota, o trecho cruza a mancha da RMF — a margem sai do Anel Viário, não da Beira Mar. O North Shopping é marco de encontro, não endereço completo.',
        ],
        [
            'h2' => 'Pinto Martins — FOR no relógio da pauta metropolitana',
            'texto' => 'O aeroporto comercial fica em Fortaleza, não em Maracanaú. Combinamos o voo. A espera no desembarque integra o trecho FOR. Até o Distrito ou o Centro o intervalo atravessa a RMF; a BR-020 e o Anel pesam mais que o mapa. O orçamento sai sob consulta.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em Maracanaú',
        'itens' => [
            [
                'h3' => 'Portaria do Distrito Industrial',
                'texto' => 'Nome na lista e documento. Sem protocolo, a cancela não libera. Informe a planta, não só o distrito.',
            ],
            [
                'h3' => 'Hotel no Centro ou em Pajuçara',
                'texto' => 'O nome do hotel evita a volta na Contorno. “Perto do North Shopping” não basta. O hotel é só o ponto de saída.',
            ],
            [
                'h3' => 'Centro, Pajuçara e o North Shopping',
                'texto' => 'Pauta urbana do município. Informe o prédio; o recuo do shopping e o da sede não se trocam.',
            ],
            [
                'h3' => 'Quando a pauta aponta para Fortaleza ou Sobral',
                'texto' => 'FOR → Aldeota não é o mesmo pedido do Distrito. Sobral entra pela BR-222, com orçamento à parte.',
            ],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pauta o Distrito e voa pelo FOR',
    'faq' => [
        [
            'pergunta' => 'O aeroporto de Fortaleza fica em Maracanaú?',
            'resposta' => 'Não. O Pinto Martins (FOR) fica em Fortaleza. O trecho até o Distrito entra no roteiro com margem para o Anel Viário e a BR-020.',
        ],
        [
            'pergunta' => 'O motorista espera no FOR se o voo atrasar?',
            'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.',
        ],
        [
            'pergunta' => 'Vocês entram no Distrito Industrial com protocolo de portaria?',
            'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, a cancela não libera.',
        ],
        [
            'pergunta' => 'Dá para ir à Aldeota depois do hotel no Centro?',
            'resposta' => 'Sim, quando Fortaleza entra no roteiro. A mancha da RMF é contínua; o recuo muda no município da capital.',
        ],
        [
            'pergunta' => 'O North Shopping serve como endereço de embarque?',
            'resposta' => 'Serve como marco se o ponto de espera estiver no recado. Prefira o nome do hotel ou do prédio. O orçamento sai sob consulta.',
        ],
    ],
    'cta' => [
        'titulo' => 'Junte o Distrito ao horário do Pinto Martins',
        'texto' => 'O orçamento de Maracanaú sai sob consulta. Centro, Pajuçara e FOR no mesmo recado.',
        'botao' => 'Solicitar carro em Maracanaú',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'ceara', 'ancora' => 'Fortaleza, Sobral e a malha metropolitana'],
        ['tipo' => 'cidade', 'estado' => 'ceara', 'cidade' => 'fortaleza', 'ancora' => 'Meireles, Aldeota e o FOR'],
        ['tipo' => 'cidade', 'estado' => 'ceara', 'cidade' => 'sobral', 'ancora' => 'Centro, Derby e o campus da UFC'],
    ],
];
