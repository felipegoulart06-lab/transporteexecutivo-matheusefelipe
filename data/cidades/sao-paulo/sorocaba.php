<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'Sorocaba',
    'geo' => ['lat' => -23.5015, 'lng' => -47.4526],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Sorocaba',
    'seo' => [
        'title' => 'Motorista em Sorocaba: Campolim, Centro e Castelo Branco',
        'description' => 'Carro com motorista em Sorocaba no Campolim, no Centro e rumo a Votorantim. GRU pela Castelo Branco sai sob consulta; o SOD não é saguão regular.',
        'og_title' => 'Traslado no Campolim, no Centro e na Castelo Branco rumo ao GRU',
        'og_description' => 'Motorista em Sorocaba: hotel no Campolim, pauta no Centro e o trecho longo até Guarulhos.',
        'og_image_alt' => 'Sedan executivo em avenida de Sorocaba',
    ],
    'kicker' => 'Interior paulista · SP',
    'h1' => 'Do Campolim ao Centro sem perder a janela da Castelo Branco',
    'intro' => 'Sorocaba concentra indústria, hotel no Campolim e o eixo da Rodovia Presidente Castello Branco (SP-280) rumo à capital. O aeroporto Bertram Luiz Leupolz (SOD), no Jardim Ana Maria, opera aviação geral e manutenção — não malha regular de passageiros. Hotel no Campolim, reunião no Centro e planta no Éden cabem no mesmo expediente se o motorista já saiu com a ordem da Ipanema e da Castelo Branco, não com o aceite do minuto. O saguão comercial longo é o GRU, sob consulta; Viracopos (VCP), em Campinas, também entra no roteiro.',
    'blocos' => [
        [
            'h2' => 'Por que o deslocamento em Sorocaba não é “pegar um carro no Centro”',
            'texto' => 'Campolim, Centro, Além Ponte e o recuo da planta no Éden não compartilham o mesmo acesso. Quem tem pauta na zona industrial e check-out no ibis do Campolim precisa de um motorista que já conhece o sentido da Avenida Ipanema e o acesso pela Castelinho (SP-075) à Castelo Branco, não o atalho do aplicativo. Votorantim vaza o pedido no município vizinho; o trecho deixa de ser só urbano.',
        ],
        [
            'h2' => 'Quadrantes onde o embarque sorocabano mais se concentra',
            'itens' => [
                ['h3' => 'Campolim e a Ipanema', 'texto' => 'Hotéis, torres e clínicas. Informe o nome do prédio; as ruas do Campolim se repetem no mapa. O ibis fica neste recorte — diga a porta de embarque.'],
                ['h3' => 'Centro e a Além Ponte', 'texto' => 'Sede e o calçadão. O sentido da via muda no fim da tarde; “no Centro” não define a porta nem o recuo do outro lado do rio.'],
                ['h3' => 'Éden, Cajuru e a zona industrial', 'texto' => 'Plantas e o eixo da Raposo Tavares. Protocolo de portaria entra no roteiro junto com o turno.'],
                ['h3' => 'Castelo Branco rumo à capital', 'texto' => 'O SOD não substitui o saguão de passageiros. GRU pela Castelo Branco é trecho longo, sob consulta; VCP também entra quando o voo é em Campinas.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta sorocabana mais pede',
        'itens' => [
            ['titulo' => 'Hotel no Campolim → Centro → planta no Éden', 'texto' => 'Pernoite, sede e portaria. Um motorista cobre os três se a ordem e o nome na lista já estiverem no roteiro.'],
            ['titulo' => 'Hotel → Votorantim', 'texto' => 'Quando a pauta vaza para o município vizinho, o recorte deixa de ser só urbano. Informe o endereço em Votorantim; o orçamento sai à parte.'],
            ['titulo' => 'Sorocaba → GRU ou Viracopos', 'texto' => 'O SOD não opera malha regular de passageiros. GRU é destino longo, sob consulta; VCP, em Campinas, é o hub mais próximo quando o voo é por lá.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta Campolim e a Castelo Branco',
    'faq' => [
        ['pergunta' => 'O aeroporto Bertram Luiz Leupolz recebe voo comercial de passageiros?', 'resposta' => 'Não. O SOD, no Jardim Ana Maria, opera aviação geral e manutenção. Não vendemos espera de malha regular nesse pátio. O saguão comercial da pauta longa é o GRU ou o VCP.'],
        ['pergunta' => 'O trecho de Sorocaba até o GRU sai como corrida do Campolim?', 'resposta' => 'Não. É viagem pela Castelo Branco, sob consulta. Informe o voo e o terminal; a margem sai da rodovia, não do semáforo da Ipanema.'],
        ['pergunta' => 'Em Sorocaba, vocês entram na planta com protocolo de portaria?', 'resposta' => 'Sim. Envie o nome na lista e o documento pedido. Sem isso, o recuo da planta no Éden ou no Cajuru não libera.'],
        ['pergunta' => 'Dá para incluir Votorantim no mesmo pedido do Campolim?', 'resposta' => 'Sim, como recorte intermunicipal. Não é o mesmo orçamento do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Campolim ao horário da Castelo Branco',
        'texto' => 'O orçamento de Sorocaba sai sob consulta. Hotel, planta e o trecho até o GRU ou o VCP no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Sorocaba',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'campinas', 'ancora' => 'Cambuí, Unicamp e o Viracopos'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
    ],
];
