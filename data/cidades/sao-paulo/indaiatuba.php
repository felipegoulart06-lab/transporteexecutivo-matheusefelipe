<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Indaiatuba',
    'geo' => ['lat' => -23.0884, 'lng' => -47.2181],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Indaiatuba',
    'seo' => [
        'title' => 'Motorista em Indaiatuba: Helvétia, Centro e Viracopos',
        'description' => 'Carro com motorista em Indaiatuba para Helvétia, o Centro e Viracopos (VCP) em Campinas, pela SP-075. Sem herdar o Cambuí. Valor sob consulta.',
        'og_title' => 'Helvétia já enxerga o saguão; o terminal é em Campinas',
        'og_description' => 'Traslado em Indaiatuba: Helvétia, Centro e o VCP no município vizinho — sem o relógio do Cambuí.',
        'og_image_alt' => 'Sedan executivo na Avenida Engenheiro Fábio Roberto Barnabé, em Indaiatuba',
    ],
    'kicker' => 'Entorno de Viracopos · SP',
    'h1' => 'Viracopos fica em Campinas; o recuo mais curto é Helvétia',
    'preambulo' => 'Indaiatuba não é bairro de Campinas. O Aeroporto Internacional de Viracopos (VCP) está na Rodovia Santos Dumont (SP-075), km 66, no município de Campinas. Helvétia cola nesse acesso: o recuo local encurta o saguão em relação a quem sai do Cambuí. O Centro corre na Engenheiro Fábio Roberto Barnabé. Tratar Indaiatuba como “região de VCP” entrega o carro no município errado e come a margem do check-in.',
    'artigos' => [
        [
            'h2' => 'Helvétia é o recuo que o VCP enxerga primeiro — e continua em Indaiatuba',
            'texto' => 'Centro, Helvétia e o Distrito Industrial ao longo da Santos Dumont formam três portas. Hotel no Centro ou condomínio na Helvétia entra só como embarque. Informe o nome da portaria: “perto de Viracopos” descreve meia dúzia de condomínios e nenhuma cancela. A SP-075 muda o intervalo no pico; o mapa encolhe o aeroporto, o relógio não. O sedan sai com o município certo.',
        ],
        [
            'h2' => 'O saguão vizinho pede o número do voo, não o atalho do Cambuí',
            'texto' => 'Viracopos opera em Campinas. Combinamos terminal e o ponto de saída em Indaiatuba — Helvétia e o Centro não compartilham o mesmo minuto até o desembarque. A espera no saguão integra o trecho quando o pouso já está no roteiro. Jundiaí, pela Anhanguera, e o próprio Centro de Campinas entram como trechos nomeados; não são o pedido urbano de Indaiatuba.',
        ],
        [
            'h2' => 'Santos Dumont, logística e o que o GPS chama de distrito',
            'texto' => 'Galpão e planta ao longo da SP-075 pedem o nome do condomínio empresarial e a portaria. O recorte industrial de Indaiatuba não se confunde com o Distrito de Barão Geraldo nem com o Cambuí. Sem endereço, o motorista não adivinha qual das Helvétias o passageiro quis dizer. Envie rua, número e se há lista de visitante.',
        ],
    ],
    'pauta' => [
        'h2' => 'O que entra na ordem do dia em Indaiatuba',
        'itens' => [
            ['h3' => 'Centro e a Fábio Roberto Barnabé', 'texto' => 'Sede, hotel de embarque e o comércio. Informe o prédio; o recuo do Centro não é o da Helvétia.'],
            ['h3' => 'Helvétia e o acesso a Viracopos', 'texto' => 'O recorte que mais encurta o VCP. Nome da portaria e o sentido da SP-075 entram no pedido.'],
            ['h3' => 'Distrito na Santos Dumont', 'texto' => 'Logística e planta. Rua e cancela evitam o pin genérico “perto do aeroporto”.'],
            ['h3' => 'Quando o voo já está no painel', 'texto' => 'Número e terminal do VCP em Campinas. A margem sai de Indaiatuba, não do relógio do Cambuí.'],
        ],
    ],
    'faq_h2' => 'Quem já embarca no relógio de Viracopos — sem ser Campinas',
    'faq' => [
        ['pergunta' => 'Viracopos fica em Indaiatuba?', 'resposta' => 'Não. O terminal VCP está em Campinas, na Santos Dumont, km 66. Helvétia e o Centro de Indaiatuba são o recuo vizinho; o município do saguão continua sendo Campinas.'],
        ['pergunta' => 'Dormir em Indaiatuba encurta o check-in em relação ao Cambuí?', 'resposta' => 'Com frequência, sim. Helvétia cola no acesso da SP-075. Combinamos a margem a partir do recuo real, não da “região de Campinas”.'],
        ['pergunta' => 'Em Indaiatuba, o motorista espera no VCP se o voo atrasar?', 'resposta' => 'Sim, quando o voo está no roteiro. Acompanhamos o painel com o número; a espera no terminal em Campinas faz parte do trecho Viracopos.'],
        ['pergunta' => 'Helvétia e o Centro se confundem no mesmo pin “perto do aeroporto”?', 'resposta' => 'Confundem no GPS. Informe o condomínio ou a rua. São recortes distintos de Indaiatuba; o pin não define a porta.'],
    ],
    'cta' => [
        'titulo' => 'Helvétia no relógio de Viracopos, município certo',
        'texto' => 'Informe o hotel no Centro ou a portaria na Helvétia e o número do voo no VCP. Respondemos com horário e valor.',
        'botao' => 'Pedir motorista em Indaiatuba',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'campinas', 'ancora' => 'Cambuí, Unicamp e o Viracopos'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'jundiai', 'ancora' => 'Medeiros, Centro e o eixo da Anhanguera'],
    ],
];
