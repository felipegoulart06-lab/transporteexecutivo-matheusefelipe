<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'João Pessoa',
    'geo' => ['lat' => -7.11532, 'lng' => -34.861],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em João Pessoa',
    'seo' => [
        'title' => 'Motorista executivo em João Pessoa: Tambaú, Cabo Branco e JPA',
        'description' => 'Carro com motorista em João Pessoa para Tambaú, Cabo Branco, Bessa, Manaíra e o aeroporto Castro Pinto. Rotas, hotéis da orla e orçamento sob consulta.',
        'og_title' => 'Traslado executivo em Tambaú, Cabo Branco e no Castro Pinto',
        'og_description' => 'Motorista na capital paraibana: hotel na orla, pauta no Centro e o terminal JPA em Bayeux.',
        'og_image_alt' => 'Carro executivo em avenida da orla de João Pessoa',
    ],
    'kicker' => 'Capital paraibana · PB',
    'h1' => 'De Tambaú ao Castro Pinto sem perder a ponta do Cabo Branco',
    'epigrafe' => 'João Pessoa alinha hotel na orla, reunião no Centro e voo em Bayeux. O motorista segura a Epitácio Pessoa; o passageiro segura o horário — não a vaga na Beira-Mar.',
    'abertura' => [
        'h2' => 'A orla mais oriental do continente e o aeroporto do outro lado do rio',
        'texto' => [
            'Tambaú, Cabo Branco, Manaíra e Bessa concentram o pernoite. O Centro Histórico, o Varadouro e o Parque Solon de Lucena pedem outro recuo. O Aeroporto Internacional Presidente Castro Pinto (JPA) fica em Bayeux, não na ponta do Cabo Branco.',
            'O serviço é de traslado e de espera: o carro já está no roteiro com o nome do hotel (Littoral, Tambaú, similares) e o número do voo. Não é corrida de orla no fim de semana, a menos que a visita entre na pauta.',
        ],
    ],
    'faixas' => [
        ['h2' => 'Tambaú, Cabo Branco e o relógio da Beira-Mar', 'texto' => 'A Av. Almirante Tamandaré e a Epitácio Pessoa mudam o intervalo no pôr do sol. Informe o hotel e o recuo; “na orla” não distingue Tambaú de Bessa nem o acesso do Cabo Branco.'],
        ['h2' => 'Manaíra, Bessa e o shopping', 'texto' => 'Torres, clínicas e o Manaíra Shopping. Deslocamentos curtos que esticam no semáforo da Epitácio. Um carro à disposição cobre reunião, almoço e o retorno ao hotel sem nova chamada.'],
        ['h2' => 'Centro, Varadouro e a ladeira até o Porto', 'texto' => 'Pauta institucional, Estação Cabo Branco só como visita combinada, e o desnível rumo ao Porto do Capim. O calçamento pede ponto de espera, não GPS no beco do Centro Histórico.'],
    ],
    'aeroportos' => [
        'h2' => 'JPA não fica na ponta do continente — fica em Bayeux',
        'itens' => [
            ['h3' => 'Castro Pinto — JPA', 'texto' => 'Terminal em Bayeux. Combinamos o voo. A espera no desembarque integra o trecho; a BR-230 e a entrada da capital pesam mais que o mapa.'],
            ['h3' => 'Quando a pauta aponta para Campina Grande', 'texto' => 'O trecho João Pessoa–Campina não é o mesmo pedido urbano. Se a reunião vaza para o brejo, o orçamento sai à parte, com horário de serra.'],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque paraibano',
        'lista' => [
            'Hotel com nome — Tambaú, Cabo Branco ou Bessa não bastam para o recuo.',
            'Se o voo é no JPA, número e horário. A margem sai de Bayeux, não da Beira-Mar.',
            'Visita à Ponta do Seixas, ao Jacaré ou a Campina entra no roteiro; não é desvio de última hora.',
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pousa no Castro Pinto',
    'faq' => [
        ['pergunta' => 'O aeroporto de João Pessoa fica na orla?', 'resposta' => 'Não. O JPA fica em Bayeux. O trecho até Tambaú ou Cabo Branco entra no roteiro com margem para a BR-230.'],
        ['pergunta' => 'O motorista espera no JPA se o voo atrasar?', 'resposta' => 'Sim. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem Tambaú, Centro e o Jacaré no mesmo dia?', 'resposta' => 'Sim, quando o pôr do sol no Jacaré entra no roteiro. Combinamos o ponto de espera; não é city tour improvisado.'],
        ['pergunta' => 'Dá para seguir a Campina Grande depois do hotel?', 'resposta' => 'Sim, como viagem. Não é o mesmo recorte da orla; o horário e o valor saem sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Marque o hotel da orla junto com o horário do JPA',
        'texto' => 'O orçamento de João Pessoa sai sob consulta. Tambaú, Centro e Bayeux no mesmo WhatsApp.',
        'botao' => 'Pedir carro em João Pessoa',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'paraiba', 'ancora' => 'Campina Grande, Patos e o recorte paraibano'],
        ['tipo' => 'cidade', 'estado' => 'pernambuco', 'cidade' => 'recife', 'ancora' => 'Boa Viagem, pontes e o Guararapes'],
        ['tipo' => 'cidade', 'estado' => 'rio-grande-do-norte', 'cidade' => 'natal', 'ancora' => 'Ponta Negra, Tirol e o Aluízio Alves'],
    ],
];
