<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'São Gonçalo',
    'geo' => ['lat' => -22.8268, 'lng' => -43.0634],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em São Gonçalo',
    'seo' => [
        'title' => 'Motorista em São Gonçalo: Alcântara, Centro e SDU',
        'description' => 'Carro com motorista em São Gonçalo para Alcântara, Centro, Rocha e Boa Vista. Metrô, ponte Rio-Niterói, SDU ou GIG e orçamento sob consulta.',
        'og_title' => 'Traslado em Alcântara, no Centro e rumo ao SDU',
        'og_description' => 'Motorista em São Gonçalo: Alcântara, Centro e a travessia por Niterói até o Santos Dumont.',
        'og_image_alt' => 'Sedan executivo em avenida de Alcântara, em São Gonçalo',
    ],
    'kicker' => 'Leste da baía · RJ',
    'h1' => 'Alcântara e o Centro no recorte de quem não quer atravessar a ponte duas vezes',
    'faixas' => [
        [
            'h2' => 'São Gonçalo cobra o recuo certo — a ponte não é o atalho do leste',
            'texto' => 'Quem sai de Alcântara rumo ao Centro e ainda precisa do Santos Dumont já conhece o custo da Ponte Rio-Niterói duas vezes no mesmo expediente. Rocha e Boa Vista não compartilham o mesmo recuo; o eixo leste do Metrô Rio entra na conversa da pauta, mas o carro prático ainda cruza Niterói antes de chegar ao SDU ou ao GIG.',
        ],
        [
            'h2' => 'Quatro recortes, um relógio de leste fluminense',
            'itens' => [
                ['h3' => 'Alcântara e o eixo comercial', 'texto' => 'Comércio, clínicas e o recuo da avenida. Informe o estabelecimento; “em Alcântara” não define a porta nem o sentido da via no fim da tarde.'],
                ['h3' => 'Centro e a sede municipal', 'texto' => 'Gabinete, cartório e o calçadão. O recuo pede prédio; o Centro não se troca por Alcântara no mesmo cartaz.'],
                ['h3' => 'Rocha e Boa Vista', 'texto' => 'Pauta residencial e o recorte que o mapa mistura. Rua e número evitam a volta; “em São Gonçalo” não coloca o carro na quadra certa.'],
            ],
        ],
        [
            'h2' => 'Rotas que evitam a ponte em dobro',
            'texto' => 'Hotel ou portaria em Alcântara → Centro → Rocha só se a ordem já estiver no roteiro. O clássico aéreo é São Gonçalo → Niterói → SDU ou GIG, com a Ponte Presidente Costa e Silva uma vez, no sentido certo. Boa Vista entra no mesmo recado quando o endereço vem com número; o Metrô Rio leste não substitui o recuo combinado.',
        ],
        [
            'h2' => 'SDU e GIG pelo recorte de Niterói',
            'texto' => 'São Gonçalo não tem saguão próprio. Combinamos se o destino é o Santos Dumont ou o Galeão; os dois pedem Niterói e a ponte no meio. A margem sai de Alcântara ou do Centro, não do aceite do minuto na Quatorze. O orçamento do trecho aéreo sai à parte do urbano.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem cruza o leste sem repetir a ponte',
    'faq' => [
        ['pergunta' => 'O motorista precisa cruzar a Ponte Rio-Niterói duas vezes?', 'resposta' => 'Não, se a ordem já sai com o sentido certo. Informe se o voo é SDU ou GIG e se o embarque é Alcântara ou o Centro; a ponte entra uma vez no recorte.'],
        ['pergunta' => 'São Gonçalo tem estação do Metrô Rio?', 'resposta' => 'O eixo leste aparece na pauta metropolitana, mas o recuo prático ainda cruza Niterói. Combinamos o ponto de embarque; o metrô não substitui o endereço.'],
        ['pergunta' => 'Dá para ir de Alcântara ao Centro e seguir a Rocha no mesmo turno?', 'resposta' => 'Sim. Informe a ordem e o número. Alcântara, Centro e Rocha não compartilham o mesmo recuo no cartaz.'],
        ['pergunta' => 'O Santos Dumont e o Galeão saem pelo mesmo caminho?', 'resposta' => 'Ambos passam por Niterói e pela ponte, mas o recuo no Rio muda. Combinamos o terminal; o horário sai sob consulta.'],
        ['pergunta' => 'Boa Vista entra no mesmo pedido de Alcântara?', 'resposta' => 'Sim, quando o endereço vem com rua. “Em São Gonçalo” não distingue Boa Vista do Centro.'],
    ],
    'cta' => [
        'titulo' => 'Diga se o recuo é Alcântara ou a ponte',
        'texto' => 'O orçamento de São Gonçalo sai sob consulta. Centro, Rocha e o SDU no mesmo recado.',
        'botao' => 'Pedir carro em São Gonçalo',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-de-janeiro', 'ancora' => 'O recorte fluminense além da capital'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'niteroi', 'ancora' => 'Icaraí, Centro e a Ponte Rio-Niterói'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Santos Dumont, Galeão e a Zona Sul'],
    ],
];
