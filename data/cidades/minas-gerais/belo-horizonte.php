<?php

declare(strict_types=1);

return [
    'layout' => 'serra',
    'cidade_nome' => 'Belo Horizonte',
    'geo' => ['lat' => -19.9167, 'lng' => -43.9345],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Belo Horizonte',
    'seo' => [
        'title' => 'Traslado executivo em Belo Horizonte, Savassi e Confins',
        'description' => 'Motorista executivo em Belo Horizonte para Savassi, Lourdes, Belvedere e o aeroporto de Confins. Ida, espera ou dia — orçamento sob consulta.',
        'og_title' => 'Carro com motorista entre a Savassi e Confins',
        'og_description' => 'Traslado executivo na capital mineira: hotel, reunião e o trecho até Confins com horário combinado.',
        'og_image_alt' => 'Sedan executivo em via urbana de Belo Horizonte ao entardecer',
    ],
    'kicker' => 'Capital mineira · MG',
    'h1' => 'Da Savassi a Confins sem perder a reunião do meio',
    'olho' => 'Belo Horizonte é compacta no mapa e alongada no relógio quando o destino é Confins. O motorista segura a MG-10; o passageiro segura a pauta.',
    'capitulos' => [
        [
            'h2' => 'A cidade planejada e o aeroporto que ficou longe',
            'texto' => 'O centro expandido — Savassi, Lourdes, Funcionários, Belvedere — cabe em poucos quilômetros. Confins, não. Quem marca voo e almoço no mesmo dia precisa de um carro que já saiu do hotel, não de um aceite no celular na porta do Minas Tênis.',
        ],
        [
            'h2' => 'Onde o embarque mineiro mais se concentra',
            'itens' => [
                ['h3' => 'Savassi e Lourdes', 'texto' => 'Hotel boutique, consultório e escritório. O recuo é estreito; o nome do prédio evita a volta na Praça da Liberdade.'],
                ['h3' => 'Belvedere e Vila da Serra', 'texto' => 'Agendas de board e jantar. O desnível da serra muda o tempo mais que o Waze admite no fim da tarde.'],
                ['h3' => 'Centro e a área hospitalar', 'texto' => 'Deslocamentos curtos e repetidos. Útil quando a comitiva troca de torre sem trocar de motorista.'],
            ],
        ],
        [
            'h2' => 'Confins — CNF no relógio da pauta',
            'texto' => 'O aeroporto internacional fica em Confins, não no bairro vizinho ao hotel. Combinamos o voo, o terminal e a margem da MG-10. A espera no desembarque integra o trecho; não é uma segunda corrida.',
        ],
    ],
    'passos' => [
        'h2' => 'Três dados que evitam atraso na capital',
        'itens' => [
            ['num' => '01', 'titulo' => 'Bairro e prédio', 'texto' => '“Na Savassi” não define o recuo. Rua e nome do hotel entram no roteiro.'],
            ['num' => '02', 'titulo' => 'Voo em Confins', 'texto' => 'Número e horário. O carro sai com margem para a MG-10, não no minuto do check-in.'],
            ['num' => '03', 'titulo' => 'Espera ou só ida', 'texto' => 'Se a reunião estica, a modalidade por hora mantém o mesmo motorista.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem voa por Confins',
    'faq' => [
        ['pergunta' => 'Quanto tempo devo prever entre a Savassi e Confins?', 'resposta' => 'O intervalo muda com a MG-10 e com o horário. Combinamos uma margem; não prometemos minuto fixo de aplicativo.'],
        ['pergunta' => 'O motorista espera no desembarque de Confins?', 'resposta' => 'Sim, quando o voo está no roteiro. A espera no saguão faz parte do trecho CNF.'],
        ['pergunta' => 'Vocês fazem Lourdes, Belvedere e o aeroporto no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. O desnível da serra e a saída para Confins pedem um único motorista, não três aceites.'],
        ['pergunta' => 'Dá para esperar na porta do hospital na área central?', 'resposta' => 'Sim, com o nome da unidade e o ponto de recuo. Evitamos o cruzamento sem aviso no horário de visita.'],
    ],
    'cta' => [
        'titulo' => 'Marque Confins no mesmo recado do hotel',
        'texto' => 'Diga o embarque em Belo Horizonte e se há voo. A confirmação volta pelo WhatsApp.',
        'botao' => 'Pedir traslado em BH',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'minas-gerais', 'ancora' => 'Confins, Vale do Aço e a agenda mineira'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'A janela Faria Lima–Congonhas–GRU'],
        ['tipo' => 'cidade', 'estado' => 'rio-de-janeiro', 'cidade' => 'rio-de-janeiro', 'ancora' => 'Dois aeroportos e a orla no mesmo roteiro'],
    ],
];
