<?php

declare(strict_types=1);

return [
    'layout' => 'dunas',
    'cidade_nome' => 'Maceió',
    'geo' => ['lat' => -9.66599, 'lng' => -35.735],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Maceió',
    'seo' => [
        'title' => 'Traslado executivo em Maceió: Pajuçara, Ponta Verde e MCZ',
        'description' => 'Motorista executivo em Maceió para Pajuçara, Ponta Verde, Jatiúca, Centro e o aeroporto Zumbi dos Palmares. Hotéis da orla, rotas e orçamento sob consulta.',
        'og_title' => 'Carro com motorista entre a orla de Maceió e o aeroporto MCZ',
        'og_description' => 'Traslado na capital alagoana: hotel em Ponta Verde, pauta no Centro e o terminal Zumbi dos Palmares.',
        'og_image_alt' => 'Carro executivo em avenida da orla de Maceió',
    ],
    'kicker' => 'Capital alagoana · AL',
    'h1' => 'Ponta Verde de manhã, Centro ao meio-dia, MCZ no fim da tarde',
    'trilha' => [
        'h2' => 'Maceió se lê em orla e em ladeira — não no atalho do app',
        'texto' => 'A capital alagoana alinha hotel em Pajuçara, Ponta Verde e Jatiúca, pauta no Centro e voo no Zumbi dos Palmares (MCZ), em Rio Largo. A Av. da Paz e a Fernandes Lima mudam o relógio. O motorista sai com essa malha; o passageiro não discute faixa com o GPS na hora do check-out.',
    ],
    'chips' => [
        'h2' => 'Onde o embarque maceioense mais se repete',
        'itens' => ['Pajuçara', 'Ponta Verde', 'Jatiúca', 'Cruz das Almas', 'Centro', 'Jaraguá', 'Aeroporto Zumbi dos Palmares'],
    ],
    'historias' => [
        [
            'h2' => 'A orla como hotel, não como passeio de sol',
            'texto' => 'Pajuçara, Ponta Verde e Jatiúca concentram pernoite executivo: Jatiúca Hotel, Ibis, Holiday Inn e similares entram no roteiro pelo nome e pelo recuo, não por “na beira-mar”. O carro espera no acesso de serviço quando a Av. Álvaro Otacílio está tomada.',
        ],
        [
            'h2' => 'Centro, Jaraguá e a pauta institucional',
            'texto' => 'Palácio, fórum e o bairro histórico de Jaraguá. O desnível entre a orla e o Centro pede margem. Informe o prédio; o calçamento do Jaraguá não admite recuo improvisado no horário de visita ao Mercado.',
        ],
        [
            'h2' => 'Rotas que misturam trabalho e visita',
            'texto' => 'Hotel na Ponta Verde → reunião no Centro → almoço em Cruz das Almas → retorno ao MCZ. Outro clássico: Pajuçara → Mirante da Sereia só como intervalo combinado, sem transformar o expediente em city tour. Quando a pauta inclui Marechal Deodoro ou a lagoa, o trecho sai como viagem, sob consulta.',
        ],
        [
            'h2' => 'Zumbi dos Palmares — MCZ',
            'texto' => 'O terminal fica em Rio Largo, não na Ponta Verde. Combinamos o voo. A espera no desembarque integra o trecho MCZ; a BR-104 e a entrada da capital mudam o intervalo mais que o mapa admite.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Zumbi dos Palmares',
    'faq' => [
        ['pergunta' => 'O aeroporto de Maceió fica na orla?', 'resposta' => 'Não. O MCZ fica em Rio Largo. O trecho até Pajuçara ou Ponta Verde entra no roteiro com margem.'],
        ['pergunta' => 'O motorista espera no MCZ se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês buscam no hotel da Ponta Verde e levam ao Centro?', 'resposta' => 'Sim. Informe o nome do hotel e o prédio no Centro. A Av. da Paz e a Fernandes Lima pesam no horário.'],
        ['pergunta' => 'Dá para incluir a lagoa ou Marechal Deodoro no mesmo dia?', 'resposta' => 'Sim, quando o destino entra no roteiro. Não é o mesmo recorte da orla; o intervalo sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Una a Ponta Verde ao horário do Zumbi dos Palmares',
        'texto' => 'O orçamento de Maceió sai sob consulta. Orla, Centro e MCZ no mesmo WhatsApp.',
        'botao' => 'Pedir traslado em Maceió',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'alagoas', 'ancora' => 'Arapiraca, Penedo e o recorte alagoano'],
        ['tipo' => 'cidade', 'estado' => 'pernambuco', 'cidade' => 'recife', 'ancora' => 'Boa Viagem, pontes e o Guararapes'],
        ['tipo' => 'cidade', 'estado' => 'sergipe', 'cidade' => 'aracaju', 'ancora' => 'Atalaia, Centro e o Santa Maria'],
    ],
];
