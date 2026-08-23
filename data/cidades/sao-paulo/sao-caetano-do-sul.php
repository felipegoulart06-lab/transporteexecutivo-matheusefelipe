<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'São Caetano do Sul',
    'geo' => ['lat' => -23.6231, 'lng' => -46.5548],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em São Caetano do Sul',
    'seo' => [
        'title' => 'Traslado em São Caetano: Centro, Santa Paula e CGH',
        'description' => 'Motorista executivo em São Caetano do Sul para o Centro, Santa Paula, Barcelona, Fundação e o eixo da Anchieta até CGH. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro, no Santa Paula e no ABC',
        'og_description' => 'Traslado em São Caetano: hotel no Centro, pauta no Santa Paula e o recuo rumo a Congonhas.',
        'og_image_alt' => 'Sedan executivo na Avenida Goiás, em São Caetano do Sul',
    ],
    'kicker' => 'ABC paulista · SP',
    'h1' => 'Do Santa Paula ao Centro sem perder a janela da Fundação',
    'intro' => 'São Caetano do Sul é o município mais compacto do ABC, mas a Anchieta até Congonhas e a capital não cabe no mesmo recuo do Paço. Hotel no Centro (Ibis e similares, só como ponto de embarque), reunião no Santa Paula e o recorte da Fundação cabem no mesmo expediente se o motorista já saiu com a ordem da Avenida Goiás e da Via Anchieta, não com o aceite do minuto.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em São Caetano não é “pegar um carro no Centro”',
            'texto' => 'Centro, Santa Paula, Barcelona, Fundação e Cerâmica não compartilham o mesmo recuo, mesmo no município mais curto do ABC. Quem tem pauta no Paço e check-out no Ibis ou similar precisa de um motorista que já conhece o sentido da Goiás e o acesso da Anchieta, não o atalho do aplicativo. A espera discreta na porta do prédio integra o trecho quando já está no roteiro.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque sul-caetanense mais se concentra',
            'itens' => [
                ['h3' => 'Centro e o Paço Municipal', 'texto' => 'Sede, Avenida Goiás e o calçadão. Informe o prédio; o recuo do Paço não é o do Santa Paula nem o da Fundação.'],
                ['h3' => 'Santa Paula e a Rua Amazonas', 'texto' => 'Clínicas, torres e o recuo residencial. Deslocamentos curtos que esticam no semáforo da Kennedy rumo à Anchieta.'],
                ['h3' => 'Barcelona, Fundação e Cerâmica', 'texto' => 'Pauta de bairro e o recorte até a planta vizinha. “Na Fundação” não define a porta; rua e número evitam a volta no quarteirão.'],
                ['h3' => 'Quando a pauta aponta para Congonhas ou a capital', 'texto' => 'A Via Anchieta (SP-150) pesa mais que o quilômetro no mapa. CGH e Faria Lima entram como recorte próprio, não como desvio do Centro.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta sul-caetanense mais pede',
        'itens' => [
            ['titulo' => 'Hotel no Centro → Paço ou Santa Paula', 'texto' => 'Pernoite e sede. Informe o nome do hotel (Ibis ou similar) e se o carro espera no Centro enquanto a reunião corre.'],
            ['titulo' => 'São Caetano → Congonhas', 'texto' => 'O CGH não fica na porta da Goiás. Combinamos o voo e a margem da Anchieta; a espera no terminal integra o trecho quando o pouso está no roteiro.'],
            ['titulo' => 'Centro → Fundação e Cerâmica', 'texto' => 'Bairro compacto, recuo distinto. Informe a rua; o GPS no Paço não resolve a porta da Fundação.'],
            ['titulo' => 'Hotel → Santo André, São Bernardo ou a capital', 'texto' => 'Quando a pauta vaza no ABC ou na Faria Lima, o recorte deixa de ser só urbano de São Caetano. Orçamento sob consulta.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta o ABC compacto',
    'faq' => [
        ['pergunta' => 'O motorista vai a Congonhas a partir de São Caetano?', 'resposta' => 'Sim, quando o CGH entra no roteiro. A Via Anchieta pede margem; não é corrida instantânea do Santa Paula nem do Paço.'],
        ['pergunta' => 'Vocês fazem Paço, Santa Paula e a Fundação no mesmo dia?', 'resposta' => 'Sim. Informe a ordem e o prédio. O município é compacto, mas os recuos não se trocam no mesmo cartaz.'],
        ['pergunta' => 'Dá para ir a Santo André ou São Bernardo depois do hotel?', 'resposta' => 'Sim, quando o ABC vizinho entra no roteiro. Não é o mesmo pedido do Centro; o horário sai sob consulta.'],
        ['pergunta' => 'O carro segue à Faria Lima no mesmo expediente?', 'resposta' => 'Sim, quando a capital entra no roteiro. A Anchieta pede margem própria; o orçamento sai à parte do trecho urbano.'],
        ['pergunta' => 'O motorista espera no hotel ou no Paço se a reunião atrasar?', 'resposta' => 'Sim, quando a espera já está no itinerário. Não é corrida de aplicativo: o sedan permanece no recuo combinado.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Santa Paula ao horário da Anchieta',
        'texto' => 'O orçamento de São Caetano sai sob consulta. Paço, hotel e CGH no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em São Caetano do Sul',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'santo-andre', 'ancora' => 'Centro, Campestre e o eixo até Congonhas'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-bernardo-do-campo', 'ancora' => 'Centro, Rudge Ramos e as plantas da Anchieta'],
    ],
];
