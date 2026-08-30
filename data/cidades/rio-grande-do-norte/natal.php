<?php

declare(strict_types=1);

return [
    'layout' => 'baia',
    'cidade_nome' => 'Natal',
    'geo' => ['lat' => -5.79448, 'lng' => -35.211],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Natal',
    'seo' => [
        'title' => 'Carro executivo em Natal: Ponta Negra, Tirol e NAT',
        'description' => 'Motorista executivo em Natal para Ponta Negra, Tirol, Petrópolis, Redinha e o aeroporto Aluízio Alves. Rotas, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo em Ponta Negra, no Tirol e no aeroporto NAT',
        'og_description' => 'Carro com motorista na capital potiguar: hotel na orla, pauta no Tirol e o terminal em São Gonçalo do Amarante.',
        'og_image_alt' => 'Carro executivo em avenida da orla de Ponta Negra em Natal',
    ],
    'kicker' => 'Capital potiguar · RN',
    'h1' => 'De Ponta Negra ao Aluízio Alves sem perder a janela do Tirol',
    'faixas' => [
        [
            'h2' => 'Natal se mede em via costeira e em ponte — o app não lê a duna',
            'texto' => 'Hotel em Ponta Negra, reunião no Tirol ou em Petrópolis e voo no Governador Aluízio Alves (NAT), em São Gonçalo do Amarante, cabem no mesmo dia se o motorista já saiu com a ordem da Via Costeira e da BR-101, não com o atalho da hora.',
        ],
        [
            'h2' => 'Três recortes, três relógios',
            'itens' => [
                ['h3' => 'Ponta Negra e a Via Costeira', 'texto' => 'Hotéis (Serhs, Holiday Inn, similares). Informe o nome e o recuo; “na Ponta Negra” não distingue a Rota do Sol da praia.'],
                ['h3' => 'Tirol, Petrópolis e o Alecrim', 'texto' => 'Clínicas, sede e o miolo da capital. Deslocamentos curtos que esticam no semáforo da Prudente de Morais.'],
                ['h3' => 'Redinha e o Forte dos Reis Magos', 'texto' => 'Visita ao forte ou à Redinha só se combinada. O calçamento pede ponto de espera, não GPS na ponta do forte.'],
            ],
        ],
        [
            'h2' => 'Rotas de pauta e de duna que se combinam',
            'texto' => 'NAT → hotel em Ponta Negra → Tirol → retorno ao terminal. Outro clássico: Via Costeira → Genipabu como viagem curta, com horário de duna e balsa, não como segunda corrida urbana. Pipa e São Miguel do Gostoso saem à parte, com margem de estrada.',
        ],
        [
            'h2' => 'Aluízio Alves — NAT',
            'texto' => 'O aeroporto internacional fica em São Gonçalo do Amarante, não na Ponta Negra. Combinamos o voo. A espera no desembarque integra o trecho NAT; a BR-101 e a entrada da capital mudam o intervalo mais que o mapa admite.',
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no Aluízio Alves',
    'faq' => [
        ['pergunta' => 'O aeroporto de Natal fica na Ponta Negra?', 'resposta' => 'Não. O NAT fica em São Gonçalo do Amarante. O trecho até Ponta Negra ou o Tirol entra no roteiro com margem.'],
        ['pergunta' => 'O motorista espera no NAT se o voo atrasar?', 'resposta' => 'Sim. Em Natal, o número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem Ponta Negra, Tirol e o Forte no mesmo dia?', 'resposta' => 'Sim, quando o Forte dos Reis Magos entra no roteiro. Informe a ordem; a Via Costeira pesa no horário.'],
        ['pergunta' => 'Dá para incluir Genipabu ou Pipa depois do hotel?', 'resposta' => 'Sim, como viagem. Não é o mesmo recorte da Rota do Sol; o orçamento sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Diga se o embarque é Ponta Negra ou o NAT',
        'texto' => 'O orçamento de Natal sai sob consulta. Orla, Tirol e São Gonçalo no mesmo recado.',
        'botao' => 'Pedir traslado em Natal',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-grande-do-norte', 'ancora' => 'Mossoró, Parnamirim e o recorte potiguar'],
        ['tipo' => 'cidade', 'estado' => 'paraiba', 'cidade' => 'joao-pessoa', 'ancora' => 'Tambaú, Cabo Branco e o Castro Pinto'],
        ['tipo' => 'cidade', 'estado' => 'ceara', 'cidade' => 'fortaleza', 'ancora' => 'Meireles, Aldeota e o Pinto Martins'],
    ],
];
