<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Taubaté',
    'geo' => ['lat' => -23.0264, 'lng' => -45.5553],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Taubaté',
    'seo' => [
        'title' => 'Traslado executivo em Taubaté: Centro, Independência e SJC',
        'description' => 'Carro com motorista em Taubaté para o Centro, Independência, UNITAU e o eixo da Dutra até o SJC. Planta, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro, na Independência e no eixo do SJC',
        'og_description' => 'Traslado em Taubaté: hotel no Centro, pauta na Volkswagen e o recuo rumo ao SJK.',
        'og_image_alt' => 'Sedan executivo em avenida de Taubaté',
    ],
    'kicker' => 'Vale do Paraíba · SP',
    'h1' => 'Da Independência ao Centro sem perder a janela da Volkswagen',
    'intro' => 'Taubaté concentra o Centro, o bairro Independência e o recorte da Rodovia Presidente Dutra (BR-116) até o aeroporto de São José dos Campos. Hotel no Centro (Ibis e similares, só como ponto de embarque), reunião na planta da Volkswagen e o campus da UNITAU cabem no mesmo expediente se o motorista já saiu com a ordem da Avenida 9 de Julho e da Dutra, não com o aceite do minuto.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Taubaté não é “pegar um carro no Centro”',
            'texto' => 'Centro, Independência e Jardim das Nações não compartilham o mesmo recuo. Quem tem pauta na Volkswagen e check-out no hotel precisa de um motorista que já conhece o protocolo da portaria e o sentido da Dutra urbana, não o atalho do aplicativo. A espera discreta na cancela da planta integra o trecho quando já está no roteiro. O saguão prático da pauta aérea é o Professor Urbano Ernesto Stumpf (SJK), em São José dos Campos — Taubaté não tem o terminal comercial da conexão.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque taubateano mais se concentra',
            'itens' => [
                ['h3' => 'Centro e a Avenida 9 de Julho', 'texto' => 'Sede, Paço e o calçadão. Informe o prédio; o recuo do Centro não é o da Independência nem o da planta.'],
                ['h3' => 'Independência e o Jardim das Nações', 'texto' => 'Hotéis, clínicas e o recorte residencial. “Na Independência” não define a porta; rua e número evitam a volta no quarteirão.'],
                ['h3' => 'UNITAU e o campus', 'texto' => 'Pauta acadêmica e o recuo do bloco. Protocolo de portaria entra no roteiro junto com o horário da reunião.'],
                ['h3' => 'Planta da Volkswagen e a Dutra', 'texto' => 'Cancela, turno e documento na lista. Sem isso, o recuo da montadora não libera. O trecho até o SJC pela BR-116 é outro recorte.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta taubateana mais pede',
        'itens' => [
            ['titulo' => 'Hotel no Centro → Independência ou UNITAU', 'texto' => 'Pernoite e pauta. Informe o nome do hotel e se o carro espera no Centro enquanto a reunião corre.'],
            ['titulo' => 'Centro → planta da Volkswagen', 'texto' => 'Portaria e turno. Envie o nome na lista e o documento pedido; o GPS na Dutra não resolve a cancela.'],
            ['titulo' => 'Taubaté → São José dos Campos (SJK)', 'texto' => 'O aeroporto prático fica em São José. Combinamos o voo e a margem da Dutra; a espera no terminal integra o trecho quando o pouso está no roteiro.'],
            ['titulo' => 'Hotel → capital pela Dutra', 'texto' => 'Quando a pauta vaza rumo a São Paulo, o recorte deixa de ser só urbano. Orçamento sob consulta.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta a planta e o Vale',
    'faq' => [
        ['pergunta' => 'Taubaté tem aeroporto comercial próprio?', 'resposta' => 'O saguão prático da pauta é o SJK, em São José dos Campos. O trecho pela Dutra entra no roteiro com margem; não é corrida instantânea da Independência.'],
        ['pergunta' => 'O motorista espera no SJK se o voo atrasar?', 'resposta' => 'Sim, quando o voo está no roteiro. O número do voo entra no pedido e a espera no terminal faz parte do trecho São José.'],
        ['pergunta' => 'Vocês entram na Volkswagen com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, o recuo da planta não libera.'],
        ['pergunta' => 'Vocês fazem Centro, Independência e a UNITAU no mesmo dia?', 'resposta' => 'Sim. Informe a ordem e o bloco do campus. Um motorista articula os três recuos sem trocar o bairro no cartaz.'],
        ['pergunta' => 'Dá para seguir a São Paulo depois da reunião?', 'resposta' => 'Sim, como viagem pela Presidente Dutra. Não é o mesmo recorte do Centro; o horário e o orçamento saem sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte a Independência ao horário da Dutra',
        'texto' => 'O orçamento de Taubaté sai sob consulta. Centro, planta e SJK no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Taubaté',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-jose-dos-campos', 'ancora' => 'Aquarius, Centro e o aeroporto SJK'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
    ],
];
