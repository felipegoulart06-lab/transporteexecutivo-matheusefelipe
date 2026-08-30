<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Caruaru',
    'geo' => ['lat' => -8.28455, 'lng' => -35.9699],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Caruaru',
    'seo' => [
        'title' => 'Traslado executivo em Caruaru: Centro, Indianópolis e agreste',
        'description' => 'Motorista executivo em Caruaru para o Centro, Indianópolis, Maurício de Nassau e o eixo até o Recife. Feira, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro de Caruaru, no Indianópolis e no agreste',
        'og_description' => 'Traslado no agreste pernambucano: hotel, pauta no Centro e o recuo rumo ao REC.',
        'og_image_alt' => 'Sedan executivo em avenida de Caruaru',
    ],
    'kicker' => 'Agreste pernambucano · PE',
    'h1' => 'Do Indianópolis ao Centro sem perder a janela da feira',
    'lead' => 'Caruaru concentra a Feira de Caruaru, o Polo da Moda e o recorte até o Recife. O motorista segura a Agamenon Magalhães e a BR-232; o passageiro segura a pauta — não a vaga na porta do hotel.',
    'contexto' => [
        'h2' => 'A capital do agreste cobra bairro e barracão, não “na feira”',
        'texto' => [
            'Centro, Indianópolis, Maurício de Nassau e o Parque 18 de Maio não compartilham o mesmo recuo. Hotel (Village, similar), reunião no Indianópolis e o trecho até o Guararapes (REC) cabem no mesmo expediente se a ordem da 232 já estiver no roteiro.',
            'No São João o intervalo muda. Combinamos o portão do parque; “no forró” não define o recuo. Quando a pauta aponta para Toritama, Santa Cruz do Capibaribe ou Garanhuns, o trecho deixa de ser só urbano.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos da cidade onde o embarque mais se concentra',
        'itens' => [
            ['h3' => 'Centro e a feira', 'texto' => 'Sede, Sulanca e o calçadão. Informe o prédio; o recuo da feira não é o do hotel.'],
            ['h3' => 'Indianópolis e o shopping', 'texto' => 'Hotéis, torres e clínicas. Deslocamentos curtos que esticam no semáforo da Agamenon.'],
            ['h3' => 'Maurício de Nassau e o campus', 'texto' => 'UFPE e pauta acadêmica. O recuo pede bloco e portaria.'],
            ['h3' => 'Parque 18 de Maio — São João', 'texto' => 'Evento. Portão e horário entram no roteiro; o carro espera onde combinado.'],
        ],
    ],
    'aeroportos' => [
        'h2' => 'Oscar Laranjeiras e o relógio do Recife',
        'itens' => [
            ['h3' => 'Campo de Caruaru', 'texto' => 'Aviação geral. O voo comercial da pauta sai em geral pelo Guararapes; o trecho Caruaru–REC entra com margem para a BR-232.'],
            ['h3' => 'Quando a pauta aponta para o Recife', 'texto' => 'Boa Viagem ou o REC não é o mesmo pedido do Centro. Se a reunião vaza para a capital, o orçamento sai à parte.'],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que a agenda caruaruense mais pede',
        'itens' => [
            ['titulo' => 'Hotel no Indianópolis → Centro → feira', 'texto' => 'Pernoite, sede e visita combinada. Informe se o carro espera no parque da feira.'],
            ['titulo' => 'Caruaru → REC no mesmo dia', 'texto' => 'A BR-232 pesa mais que o mapa. Combinamos o voo e a margem.'],
            ['titulo' => 'Hotel → Toritama ou Santa Cruz', 'texto' => 'Polo da moda. Não é o recorte urbano do Centro; o horário sai sob consulta.'],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na grade em Caruaru',
        'passos' => [
            ['titulo' => 'Bairro e número', 'texto' => 'Indianópolis, Centro ou Nassau. Autocomplete não resolve o portão do parque.'],
            ['titulo' => 'Hotel ou Recife', 'texto' => 'Diga se o embarque é o hotel ou o trecho até o REC.'],
            ['titulo' => 'Confirmação', 'texto' => 'Em Caruaru, nome e DDD no WhatsApp. Devolvemos o horário de apresentação.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta o agreste',
    'faq' => [
        ['pergunta' => 'Caruaru tem voo comercial regular?', 'resposta' => 'O campo local atende aviação geral. O voo comercial da pauta sai em geral pelo Guararapes; o trecho entra no roteiro com margem para a BR-232.'],
        ['pergunta' => 'Em Caruaru, o motorista espera no REC se o voo atrasar?', 'resposta' => 'Sim, quando o Recife está no roteiro. O número do voo entra no pedido e a espera no terminal faz parte do trecho.'],
        ['pergunta' => 'Vocês fazem a Feira e o Parque 18 de Maio no São João?', 'resposta' => 'Sim, quando o evento entra no roteiro. Combinamos o portão; o complexo não admite recuo improvisado.'],
        ['pergunta' => 'Dá para seguir a Toritama depois do hotel?', 'resposta' => 'Sim. Em Caruaru, como viagem. Não é o mesmo recorte do Centro; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Indianópolis ao horário da BR-232',
        'texto' => 'O orçamento de Caruaru sai sob consulta. Feira, hotel e Recife no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Caruaru',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'pernambuco', 'ancora' => 'Caruaru, Petrolina e o recorte pernambucano'],
        ['tipo' => 'cidade', 'estado' => 'pernambuco', 'cidade' => 'recife', 'ancora' => 'Boa Viagem, pontes e o Guararapes'],
        ['tipo' => 'cidade', 'estado' => 'pernambuco', 'cidade' => 'petrolina', 'ancora' => 'Centro, orla do São Francisco e o PNZ'],
    ],
];
