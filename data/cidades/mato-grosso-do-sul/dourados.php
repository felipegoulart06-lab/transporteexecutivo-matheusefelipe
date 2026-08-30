<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Dourados',
    'geo' => ['lat' => -22.2231, 'lng' => -54.812],
    'imagem' => 'centro-oeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Dourados',
    'seo' => [
        'title' => 'Motorista executivo em Dourados: Centro, Jardim América e DOU',
        'description' => 'Carro com motorista em Dourados para o Centro, Jardim América, Vila Progresso e o aeroporto Francisco de Matos Pereira. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Centro, no Jardim América e no aeroporto DOU',
        'og_description' => 'Motorista no sul de Mato Grosso do Sul: hotel, pauta no Centro e o terminal DOU.',
        'og_image_alt' => 'Sedan executivo em avenida de Dourados',
    ],
    'kicker' => 'Sul sul-mato-grossense · MS',
    'h1' => 'Do DOU ao Jardim América sem perder a reunião no Centro',
    'lead' => 'Dourados concentra universidade, agronegócio e o aeroporto Francisco de Matos Pereira (DOU). O motorista segura a Marcelino Pires e a Hayel; o passageiro segura a pauta — não a vaga na porta do hotel.',
    'contexto' => [
        'h2' => 'A cidade cobra bairro e campus, não “no centro”',
        'texto' => [
            'Centro, Jardim América, Vila Progresso e a UFGD não compartilham o mesmo recuo. Hotel (Ibis, similares), clínica no América e voo no DOU cabem no mesmo expediente se a ordem da avenida já estiver no roteiro.',
            'O recorte é a rotina do interior: embarque na portaria, espera discreta e chegada no terminal certo. Quando a pauta aponta para Ponta Porã, a fronteira ou Campo Grande, o trecho deixa de ser só urbano.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos da cidade onde o embarque mais se concentra',
        'itens' => [
            ['h3' => 'Centro e a Marcelino Pires', 'texto' => 'Em Dourados, sede e o calçadão. Informe o prédio; o sentido da via muda no fim da tarde.'],
            ['h3' => 'Jardim América e o shopping', 'texto' => 'Hotéis, torres e clínicas. Deslocamentos curtos que esticam no semáforo da Hayel.'],
            ['h3' => 'UFGD, Unigran e o campus', 'texto' => 'Em Dourados, pauta acadêmica. O recuo pede bloco e portaria, não “na universidade”.'],
            ['h3' => 'Vila Progresso e o sul', 'texto' => 'Pauta residencial. O recuo pede rua e número.'],
        ],
    ],
    'aeroportos' => [
        'h2' => 'Francisco de Matos Pereira — DOU',
        'itens' => [
            ['h3' => 'Dourados — DOU', 'texto' => 'Terminal da cidade. Combinamos o voo. A espera no desembarque integra o trecho DOU.'],
            ['h3' => 'Quando a pauta aponta para Campo Grande', 'texto' => 'O trecho Dourados–CGR não é o mesmo pedido urbano. Se a reunião vaza pela BR-163, o orçamento sai à parte.'],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que a agenda douradense mais pede',
        'itens' => [
            ['titulo' => 'DOU → hotel no Jardim América', 'texto' => 'Em Dourados, pouso e pernoite. Informe o nome do hotel e se há vaga de visitante.'],
            ['titulo' => 'América → Centro → UFGD', 'texto' => 'Em Dourados, reunião, sede e campus. Um motorista cobre os três se a ordem já estiver no roteiro.'],
            ['titulo' => 'Dourados → Ponta Porã', 'texto' => 'Fronteira. Não é o recorte urbano do Centro; o horário sai sob consulta.'],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na grade em Dourados',
        'passos' => [
            ['titulo' => 'Bairro e número', 'texto' => 'Jardim América, Centro ou campus. Autocomplete não resolve bloco com dois acessos.'],
            ['titulo' => 'Hotel ou DOU', 'texto' => 'Em Dourados, diga se o embarque é o aeroporto ou a portaria do hotel.'],
            ['titulo' => 'Confirmação', 'texto' => 'Em Dourados, nome e DDD no WhatsApp. Devolvemos o horário de apresentação.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no DOU',
    'faq' => [
        ['pergunta' => 'O aeroporto de Dourados fica longe do Jardim América?', 'resposta' => 'É trecho urbano. Marcamos margem: a Marcelino Pires e o horário de pico alteram o intervalo.'],
        ['pergunta' => 'O motorista espera no DOU se o voo atrasar?', 'resposta' => 'Sim. Em Dourados, o número do voo entra no roteiro e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem Centro, América e a UFGD no mesmo dia?', 'resposta' => 'Sim. Em Dourados, informe o bloco. Um motorista articula os três recuos.'],
        ['pergunta' => 'Dá para seguir a Ponta Porã depois do hotel?', 'resposta' => 'Sim, como viagem de fronteira. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Jardim América ao horário do DOU',
        'texto' => 'O orçamento de Dourados sai sob consulta. Centro, campus e terminal no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Dourados',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'mato-grosso-do-sul', 'ancora' => 'Dourados, Corumbá e o recorte sul-mato-grossense'],
        ['tipo' => 'cidade', 'estado' => 'mato-grosso-do-sul', 'cidade' => 'campo-grande', 'ancora' => 'Centro, shopping e o CGR'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
    ],
];
