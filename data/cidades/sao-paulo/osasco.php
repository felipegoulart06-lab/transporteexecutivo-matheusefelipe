<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Osasco',
    'geo' => ['lat' => -23.532, 'lng' => -46.7916],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Osasco',
    'seo' => [
        'title' => 'Traslado em Osasco: Autonomistas, Bela Vista e GRU',
        'description' => 'Carro com motorista em Osasco para o Centro, a Bela Vista, a Autonomistas, a Castelo e a Anhanguera. GRU e Congonhas ficam fora do município. Orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro de Osasco, na Bela Vista e na Castelo',
        'og_description' => 'Osasco cola no continuum oeste. Combinamos o recuo da Autonomistas e a margem até GRU ou Congonhas.',
        'og_image_alt' => 'Sedan executivo em avenida de Osasco',
    ],
    'kicker' => 'Oeste da capital · SP',
    'h1' => 'Da Bela Vista ao Centro sem perder a janela da Anhanguera',
    'lead' => 'Osasco é cidade-continuum: Centro, Bela Vista e a Autonomistas colados ao recorte oeste, com a Castelo Branco (SP-280) e a Anhanguera (SP-330) como corte. O motorista segura o viaduto e o sentido da via; o passageiro segura a pauta — não a vaga na porta do hotel. GRU e Congonhas ficam fora do município.',
    'contexto' => [
        'h2' => 'A cidade cobra bairro e viaduto, não “no centro”',
        'texto' => [
            'Centro, Bela Vista e Presidente Altino não compartilham o mesmo recuo. Hotel, reunião na Autonomistas e voo em GRU ou Congonhas cabem no mesmo expediente se a ordem da Castelo ou da Anhanguera já estiver no roteiro — não se o carro for chamado na hora do check-out.',
            'O recorte é a rotina do município colado: embarque na portaria, espera discreta e chegada no terminal certo, que não está em Osasco. A Autonomistas muda o sentido no fim da tarde; o pin do mapa não resolve viaduto com dois acessos.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos da cidade onde o embarque mais se concentra',
        'itens' => [
            ['h3' => 'Centro e a Autonomistas', 'texto' => 'Sede, Câmara e o calçadão. Informe o prédio e o número; “no Centro” não define a porta.'],
            ['h3' => 'Bela Vista', 'texto' => 'Hotéis, torres e clínicas. Deslocamentos curtos que esticam no semáforo da Castelo. Informe o nome do hotel.'],
            ['h3' => 'Presidente Altino e o km 18', 'texto' => 'Pauta residencial e o recuo da linha. “No Altino” não define a porta.'],
            ['h3' => 'Castelo e Anhanguera', 'texto' => 'Os dois cortes que tiram o trecho do miolo urbano. Rua e número no embarque; a margem da rodovia sai sob consulta.'],
        ],
    ],
    'aeroportos' => [
        'h2' => 'GRU e Congonhas ficam fora de Osasco',
        'itens' => [
            ['h3' => 'Guarulhos — GRU', 'texto' => 'O terminal fica em Guarulhos. O trecho Castelo–Dutra não é urbano de Osasco. Combinamos o voo e o terminal. A espera no desembarque integra o trecho GRU.'],
            ['h3' => 'Congonhas — CGH', 'texto' => 'O terminal fica em outro município. Castelo, marginal e o recuo da Washington Luís. Informe o voo; a margem sai do hotel na Bela Vista, não do saguão.'],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que a agenda osasquense mais pede',
        'itens' => [
            ['titulo' => 'Hotel na Bela Vista → Centro', 'texto' => 'Pernoite e sede. Informe o nome do hotel e se há vaga de visitante.'],
            ['titulo' => 'Osasco → GRU no mesmo dia', 'texto' => 'Castelo e Dutra. Combinamos o terminal e a margem; não é corrida da Autonomistas.'],
            ['titulo' => 'Osasco → Congonhas no mesmo dia', 'texto' => 'Castelo e o recuo da Washington Luís. O horário sai sob consulta.'],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na grade em Osasco',
        'passos' => [
            ['titulo' => 'Bairro e número', 'texto' => 'Bela Vista, Centro ou Altino. Autocomplete não resolve viaduto com dois acessos.'],
            ['titulo' => 'Hotel ou aeroporto', 'texto' => 'Diga se o embarque é o hotel, o GRU ou o Congonhas — os dois saguões ficam fora do município.'],
            ['titulo' => 'Confirmação', 'texto' => 'Em Osasco, nome e DDD no WhatsApp. Devolvemos o horário de apresentação.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta Osasco e a Castelo',
    'faq' => [
        ['pergunta' => 'Osasco tem aeroporto comercial?', 'resposta' => 'Não. O voo da pauta sai em geral por GRU (Guarulhos) ou Congonhas, ambos fora do município. O trecho entra no roteiro com margem da Castelo ou da Anhanguera.'],
        ['pergunta' => 'O motorista vai ao GRU a partir da Bela Vista?', 'resposta' => 'Sim, quando o GRU entra no roteiro. A Castelo e a Dutra pedem margem; não é corrida da Autonomistas.'],
        ['pergunta' => 'Vocês fazem Centro e Bela Vista no mesmo dia?', 'resposta' => 'Sim. Informe a ordem e o prédio. O sentido da Autonomistas no pico pesa mais que a distância no mapa.'],
        ['pergunta' => 'O motorista espera no GRU se o voo atrasar?', 'resposta' => 'Sim, quando o voo está no roteiro. Acompanhamos o painel; a espera no terminal faz parte do trecho desde a Bela Vista ou o Centro.'],
    ],
    'cta' => [
        'titulo' => 'Junte a Bela Vista ao horário da Castelo',
        'texto' => 'Informe o embarque no Centro ou na Bela Vista, se o destino é GRU ou Congonhas, e o horário de apresentação. O orçamento de Osasco sai sob consulta.',
        'botao' => 'Pedir motorista em Osasco',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Oeste e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Congonhas como destino, fora de Osasco'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'guarulhos', 'ancora' => 'GRU no município de Guarulhos'],
    ],
];
