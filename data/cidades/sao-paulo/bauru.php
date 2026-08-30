<?php

declare(strict_types=1);

return [
    'layout' => 'eixo',
    'cidade_nome' => 'Bauru',
    'geo' => ['lat' => -22.3145, 'lng' => -49.0606],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Bauru',
    'seo' => [
        'title' => 'Traslado executivo em Bauru: Centro, Estoril e JTC',
        'description' => 'Traslado executivo em Bauru para o Centro, Estoril, Vila Universitária e o aeroporto JTC (Bauru-Arealva). Rondon, hotéis e orçamento sob consulta.',
        'og_title' => 'Carro com motorista no Centro, no Estoril e no aeroporto JTC',
        'og_description' => 'Traslado em Bauru: hotel no Estoril, pauta no Centro e o terminal Moussa Nakhl Tobias.',
        'og_image_alt' => 'Sedan executivo em avenida de Bauru',
    ],
    'kicker' => 'Centro-oeste paulista · SP',
    'h1' => 'Do JTC ao Estoril sem perder a reunião no Centro',
    'lead' => 'Bauru concentra o Centro, o Jardim Estoril e o recorte até o Aeroporto Estadual Moussa Nakhl Tobias (JTC), no eixo Bauru–Arealva. O motorista segura a Avenida Nações Unidas, a Getúlio Vargas e a Rodovia Marechal Rondon (SP-300); o passageiro segura a pauta — não a vaga na porta do hotel nem o código IATA errado no cartaz do voo.',
    'contexto' => [
        'h2' => 'A cidade cobra o IATA certo: JTC, não JAU',
        'texto' => [
            'Centro, Jardim Estoril, Vila Universitária, Mary Dota e Nações não compartilham o mesmo recuo. Hotel (Ibis e similares, só como ponto de embarque), reunião no Centro e o pouso no JTC cabem no mesmo expediente se a ordem da Marechal Rondon já estiver no roteiro. O terminal comercial fica entre Bauru e Arealva; o código JAU é de Jaú e não substitui o Moussa Nakhl Tobias.',
            'O recorte é a rotina do centro-oeste: embarque na portaria, espera discreta enquanto a reunião corre e chegada no saguão certo. USC e Unesp pedem campus e bloco. Quando a pauta aponta para Ribeirão Preto, São José do Rio Preto ou a capital, o trecho pela Rondon deixa de ser só urbano de Bauru.',
        ],
    ],
    'bairros' => [
        'h2' => 'Eixos da cidade onde o embarque mais se concentra',
        'itens' => [
            ['h3' => 'Centro e a Batista de Carvalho', 'texto' => 'Sede, calçadão e o recuo da Getúlio Vargas. Informe o prédio; o sentido da via muda no fim da tarde.'],
            ['h3' => 'Jardim Estoril e a Nações Unidas', 'texto' => 'Hotéis, clínicas e torres. Deslocamentos curtos que esticam no semáforo rumo à Rondon. Ibis e similares entram só como ponto de embarque.'],
            ['h3' => 'Vila Universitária, USC e Unesp', 'texto' => 'Campus e pauta acadêmica. O recuo pede bloco e portaria, não GPS na reitoria. Documento na lista evita a volta na cancela.'],
            ['h3' => 'Mary Dota, Nações e o sul da Rondon', 'texto' => 'Pauta residencial e o recorte até o JTC. “Nas Nações” não define a porta; rua e número evitam o viaduto errado.'],
        ],
    ],
    'aeroportos' => [
        'h2' => 'Moussa Nakhl Tobias — JTC, entre Bauru e Arealva',
        'itens' => [
            ['h3' => 'Bauru-Arealva — JTC', 'texto' => 'O terminal comercial fica no eixo Bauru–Arealva, não na porta do Centro. Combinamos o voo. A espera no desembarque integra o trecho JTC quando o pouso já está no roteiro. Não confundir com JAU (Jaú).'],
            ['h3' => 'Quando a pauta aponta para outro saguão', 'texto' => 'Viracopos, GRU ou a capital não são o mesmo pedido urbano. Se a reunião vaza pela Marechal Rondon ou pela SP-225, o orçamento sai sob consulta.'],
        ],
    ],
    'rotas' => [
        'h2' => 'Trajetos que a agenda bauruense mais pede',
        'itens' => [
            ['titulo' => 'JTC → hotel no Estoril', 'texto' => 'Pouso e pernoite. Informe o nome do hotel e se há vaga de visitante. O terminal não fica no Centro.'],
            ['titulo' => 'Estoril → Centro → campus', 'texto' => 'Reunião, sede e USC ou Unesp. Um motorista cobre os três se a ordem já estiver no roteiro.'],
            ['titulo' => 'Hotel → Ribeirão Preto ou Rio Preto', 'texto' => 'Quando a pauta sai pela Marechal Rondon, o trecho deixa de ser só urbano. Horário sob consulta.'],
        ],
    ],
    'como' => [
        'h2' => 'Como o carro entra na grade em Bauru',
        'passos' => [
            ['titulo' => 'Bairro e número', 'texto' => 'Estoril, Centro, Vila Universitária ou Mary Dota. Autocomplete não resolve condomínio com dois acessos.'],
            ['titulo' => 'Hotel ou JTC', 'texto' => 'Diga se o embarque é o hotel ou o Moussa Nakhl Tobias. Confirme o código JTC — não JAU.'],
            ['titulo' => 'Confirmação', 'texto' => 'Em Bauru, nome e DDD no WhatsApp. Devolvemos o horário de apresentação. Orçamento sob consulta.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pousa no JTC',
    'faq' => [
        ['pergunta' => 'O aeroporto de Bauru é o JAU?', 'resposta' => 'Não. O IATA comercial da pauta é o JTC (Moussa Nakhl Tobias), no eixo Bauru–Arealva. JAU é o campo de Jaú e não substitui esse terminal.'],
        ['pergunta' => 'O JTC fica longe do Estoril e do Centro?', 'resposta' => 'O terminal não fica na porta do Centro. Marcamos margem pela Marechal Rondon; o horário de pico altera o intervalo até o Estoril.'],
        ['pergunta' => 'O motorista espera no JTC se o voo atrasar?', 'resposta' => 'Sim, quando o voo está no roteiro. O número do voo entra no pedido e a espera no terminal faz parte do trecho JTC.'],
        ['pergunta' => 'Vocês fazem Centro, Estoril e o campus no mesmo dia?', 'resposta' => 'Sim. Informe a ordem, o bloco da USC ou da Unesp e o documento da portaria. Um motorista articula os três recuos.'],
        ['pergunta' => 'Dá para seguir a Ribeirão Preto ou a Rio Preto depois da reunião?', 'resposta' => 'Sim, como viagem pela Marechal Rondon. Não é o mesmo recorte do Centro; o horário e o orçamento saem sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Junte o Estoril ao horário do JTC',
        'texto' => 'O orçamento de Bauru sai sob consulta. Centro, hotel e Moussa Nakhl Tobias no mesmo WhatsApp.',
        'botao' => 'Pedir motorista em Bauru',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-jose-do-rio-preto', 'ancora' => 'Centro, Redentora e o eixo do interior'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'ribeirao-preto', 'ancora' => 'Centro, Jardim Irajá e o aeroporto RAO'],
    ],
];
