<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Vitória',
    'geo' => ['lat' => -20.3155, 'lng' => -40.3128],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Motorista executivo na ilha de Vitória, no Suá e no VIX',
    'seo' => [
        'title' => 'Praia do Canto, Suá e VIX: motorista na ilha de Vitória',
        'description' => 'Motorista em Vitória para Praia do Canto, Enseada do Suá, Cidade Alta e o aeroporto Eurico de Aguiar Salles, no município da capital. Informe se a pauta cruza a Terceira Ponte rumo a Vila Velha.',
        'og_title' => 'Circuito na ilha: Canto, Suá, Cidade Alta e o terminal capixaba',
        'og_description' => 'Carro com motorista entre a Praia do Canto, a Enseada do Suá, o Palácio Anchieta e o Eurico de Aguiar Salles em Vitória.',
        'og_image_alt' => 'Carro executivo em avenida da Praia do Canto em Vitória',
    ],
    'kicker' => 'Capital capixaba · ES',
    'h1' => 'Da Praia do Canto ao VIX, com a ponte só se a pauta pedir',
    'intro' => 'Vitória é ilha. Praia do Canto, Enseada do Suá e Cidade Alta não compartilham o mesmo recuo. O Eurico de Aguiar Salles (VIX) fica no município de Vitória — na própria capital, não em Vila Velha. A Terceira Ponte entra no roteiro quando o destino cruza para a outra margem. Hotel, pauta no Suá e terminal cabem no mesmo turno se a ordem das pontes já estiver no recado.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento na capital não é “pegar um carro na orla”',
            'texto' => 'A ilha mistura porto, governo e hotel de passagem. O recuo na Praia do Canto não é o da Cidade Alta, na Praça João Clímaco, onde fica o Palácio Anchieta. Quem tem pauta no Centro e check-out no Canto precisa de um motorista que já conhece o sentido da orla norte rumo ao terminal, não o atalho do momento.',
        ],
        [
            'h2' => 'Quadrantes da ilha que mais geram embarque',
            'itens' => [
                ['h3' => 'Praia do Canto e Jardim da Penha', 'texto' => 'Hotéis e clínicas. Informe o nome do prédio; a orla e a rua interna não compartilham o mesmo recuo.'],
                ['h3' => 'Enseada do Suá', 'texto' => 'Torres e centro de convenções. O acesso muda com o horário do porto e com quem cruza a Terceira Ponte no mesmo intervalo.'],
                ['h3' => 'Centro e a Cidade Alta', 'texto' => 'Palácio Anchieta, catedral e o desnível. O calçamento pede ponto de espera combinado, não “na Escadaria”.'],
                ['h3' => 'Terminal no município de Vitória', 'texto' => 'O Eurico de Aguiar Salles fica na capital, no norte da ilha. O trecho até a Praia do Canto entra com margem para o corredor da orla — ainda assim é trecho intramunicipal, não travessia para Vila Velha.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que o circuito da Grande Vitória mais pede',
        'itens' => [
            ['titulo' => 'Hotel na Praia do Canto → Palácio Anchieta', 'texto' => 'Orla e Cidade Alta no mesmo turno. Informe se o carro espera no Centro.'],
            ['titulo' => 'VIX → Enseada do Suá → Vila Velha', 'texto' => 'Pouso no município de Vitória, reunião no Suá e a Terceira Ponte. A ordem muda o tempo mais que o quilômetro.'],
            ['titulo' => 'Praia do Canto → orla de Camburi → aeroporto', 'texto' => 'Hotel, intervalo na orla norte só se estiver no roteiro, e o terminal no município da capital no fim da tarde.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Eurico de Aguiar Salles',
    'faq' => [
        ['pergunta' => 'O aeroporto de Vitória fica em Vila Velha?', 'resposta' => 'Não. O Eurico de Aguiar Salles (VIX) está no município de Vitória, na ilha. Vila Velha entra quando o destino cruza a Terceira Ponte; aí a ponte pesa mais que o mapa.'],
        ['pergunta' => 'A portaria do hotel na Praia do Canto aceita espera na rua?', 'resposta' => 'Depende do prédio. Informe o nome do hotel e o ponto de embarque. A orla e a rua interna não são o mesmo recuo.'],
        ['pergunta' => 'Vocês cruzam a Terceira Ponte rumo a Vila Velha?', 'resposta' => 'Sim, quando o endereço em Vila Velha entra no roteiro. A ponte, sob gestão estadual (Ceturb-ES), muda o intervalo. Diga se o carro permanece ou se é só a travessia.'],
        ['pergunta' => 'A hora à disposição cobre Cidade Alta, Suá e o terminal?', 'resposta' => 'Cobre. Palácio Anchieta, Enseada do Suá e o VIX na própria capital cabem no mesmo motorista se a ordem vier no recado. Evita três aceites entre o desnível do Centro e o norte da ilha.'],
    ],
    'cta' => [
        'titulo' => 'Coloque o VIX e a Praia do Canto no mesmo recado',
        'texto' => 'Informe o embarque na ilha, se há voo no Eurico de Aguiar Salles e se o destino cruza a Terceira Ponte. A confirmação volta pelo WhatsApp.',
        'botao' => 'Pedir motorista em Vitória',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'espirito-santo', 'ancora' => 'O circuito das quatro cidades capixabas'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Santos Dumont no Centro e Galeão na Ilha'],
        ['tipo' => 'cidade', 'estado' => 'minas-gerais', 'cidade' => 'belo-horizonte', 'ancora' => 'Savassi e o trecho até Confins'],
    ],
];
