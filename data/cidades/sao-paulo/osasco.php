<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Osasco',
    'geo' => ['lat' => -23.532, 'lng' => -46.7916],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Osasco',
    'seo' => [
        'title' => 'Motorista executivo em Osasco: Centro, Bela Vista e Castelo',
        'description' => 'Carro com motorista em Osasco para o Centro, Bela Vista, Presidente Altino, Castelo Branco e o eixo até GRU. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Centro de Osasco, na Bela Vista e no Castelo',
        'og_description' => 'Motorista em Osasco: hotel, pauta no Centro e o recuo rumo a Guarulhos ou à Faria Lima.',
        'og_image_alt' => 'Sedan executivo em avenida de Osasco',
    ],
    'kicker' => 'Oeste da capital · SP',
    'h1' => 'Da Bela Vista ao Centro sem perder a janela da Castelo',
    'lead' => 'Osasco concentra sede, shopping e o recorte entre a Castelo Branco e a Marginal. O motorista segura a Autonomistas e a Raposo; o passageiro segura a pauta — não a vaga na porta do hotel.',
    'contexto' => [
        'h2' => 'A cidade cobra bairro e viaduto, não “no centro”',
        'texto' => [
            'Centro, Bela Vista, Presidente Altino e o km 18 não compartilham o mesmo recuo. Hotel (Ibis, similares), reunião no Centro e voo em GRU ou Congonhas cabem no mesmo expediente se a ordem da Castelo já estiver no roteiro.',
            'O recorte é a rotina do município colado à capital: embarque na portaria, espera discreta e chegada no terminal certo. Quando a pauta aponta para Barueri, Alphaville ou a Faria Lima, o trecho deixa de ser só osascoense.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos da cidade onde o embarque mais se concentra',
        'itens' => [
            ['h3' => 'Centro e a Autonomistas', 'texto' => 'Sede e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde.'],
            ['h3' => 'Bela Vista e o Osasco Plaza', 'texto' => 'Hotéis, torres e clínicas. Deslocamentos curtos que esticam no semáforo da Castelo.'],
            ['h3' => 'Presidente Altino e o km 18', 'texto' => 'Pauta residencial e o recuo da linha. “No Altino” não define a porta.'],
            ['h3' => 'City Bussocaba e o sul', 'texto' => 'Condomínio e jantar. O recuo pede rua e número.'],
        ],
    ],
    'aeroportos' => [
        'h2' => 'GRU e Congonhas no relógio de Osasco',
        'itens' => [
            ['h3' => 'Guarulhos — GRU', 'texto' => 'O trecho Castelo–Dutra não é urbano de Osasco. Combinamos o voo. A espera no desembarque integra o trecho GRU.'],
            ['h3' => 'Congonhas — CGH', 'texto' => 'Marginal e Rebouças. Informe o terminal; a margem sai do hotel, não do saguão.'],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que a agenda osasquense mais pede',
        'itens' => [
            ['titulo' => 'Hotel na Bela Vista → Centro', 'texto' => 'Pernoite e sede. Informe o nome do hotel e se há vaga de visitante.'],
            ['titulo' => 'Osasco → Alphaville ou Barueri', 'texto' => 'Castelo Branco. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
            ['titulo' => 'Osasco → GRU no mesmo dia', 'texto' => 'Combinamos o terminal e a margem da Dutra.'],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na grade em Osasco',
        'passos' => [
            ['titulo' => 'Bairro e número', 'texto' => 'Bela Vista, Centro ou Altino. Autocomplete não resolve viaduto com dois acessos.'],
            ['titulo' => 'Hotel ou aeroporto', 'texto' => 'Diga se o embarque é o hotel, o GRU ou o Congonhas.'],
            ['titulo' => 'Confirmação', 'texto' => 'Nome e DDD no WhatsApp. Devolvemos o horário de apresentação.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta Osasco e a Castelo',
    'faq' => [
        ['pergunta' => 'O motorista vai ao GRU a partir de Osasco?', 'resposta' => 'Sim, quando o GRU entra no roteiro. A Castelo e a Dutra pedem margem; não é corrida instantânea da Bela Vista.'],
        ['pergunta' => 'Vocês fazem Centro, Bela Vista e Alphaville no mesmo dia?', 'resposta' => 'Sim. Informe a ordem. A Castelo pesa mais que a distância no mapa.'],
        ['pergunta' => 'Dá para ir à Faria Lima depois do hotel?', 'resposta' => 'Sim, como recorte da capital. Não é o mesmo pedido do Centro de Osasco.'],
        ['pergunta' => 'O motorista espera no GRU se o voo atrasar?', 'resposta' => 'Sim, quando o voo está no roteiro. A espera no terminal faz parte do trecho.'],
    ],
    'cta' => [
        'titulo' => 'Junte a Bela Vista ao horário da Castelo',
        'texto' => 'O orçamento de Osasco sai sob consulta. Centro, hotel e GRU no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Osasco',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'guarulhos', 'ancora' => 'Cumbica, Centro e o terminal GRU'],
    ],
];
