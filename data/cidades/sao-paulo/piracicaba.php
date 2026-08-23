<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Piracicaba',
    'geo' => ['lat' => -22.7253, 'lng' => -47.6492],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Piracicaba',
    'seo' => [
        'title' => 'Motorista em Piracicaba: Centro, Cidade Alta e VCP',
        'description' => 'Carro com motorista em Piracicaba para o Centro, Cidade Alta, ESALQ e o eixo até Viracopos (VCP). SP-304, hotéis e orçamento sob consulta.',
        'og_title' => 'Traslado executivo no Centro, na Cidade Alta e no Viracopos',
        'og_description' => 'Motorista em Piracicaba: hotel no Centro, pauta na ESALQ e o recuo rumo a VCP.',
        'og_image_alt' => 'Sedan executivo em avenida de Piracicaba',
    ],
    'kicker' => 'Interior paulista · SP',
    'h1' => 'Da Cidade Alta ao Centro sem perder a janela da ESALQ',
    'preambulo' => 'Piracicaba alinha sede no Centro, pauta na Cidade Alta e o campus da ESALQ/USP no mesmo expediente. O motorista segura a Avenida Independência, a SP-304 Luiz de Queiroz e o recuo da Pádua Dias; o passageiro segura a reunião — não a vaga na porta do hotel nem o sentido da Rua do Porto no fim da tarde. O aeroporto prático da pauta longa é o Viracopos (VCP), em Campinas; o campo PIR de Piracicaba não é o portão comercial do voo de conexão.',
    'artigos' => [
        [
            'h2' => 'O município pede campus e rodovia, não “no centro”',
            'texto' => 'Centro, Cidade Alta, São Dimas e Nova Piracicaba não compartilham o mesmo recuo. Hotel (Ibis e similares, só como ponto de embarque), reunião na ESALQ ou na Unimep e o recorte até uma usina sucroenergética cabem no mesmo dia se a ordem da Independência e da Luiz de Queiroz já estiver no roteiro. “Me busca em Piracicaba” não coloca o carro na portaria da Pádua Dias.',
        ],
        [
            'h2' => 'ESALQ, Unimep e o silêncio da espera na portaria',
            'texto' => 'Campus da ESALQ/USP, Unimep e as plantas do etanol pedem bloco, cancela e documento na lista. A espera discreta enquanto a visita corre integra o trecho quando já está no itinerário. Parque do Taquaral entra só como visita combinada — não como desvio turístico no meio da pauta sucroalcooleira.',
        ],
        [
            'h2' => 'Viracopos — VCP no relógio de Piracicaba',
            'texto' => 'O voo comercial da pauta longa sai em geral pelo Aeroporto Internacional de Viracopos (VCP), pela SP-304 rumo a Campinas. O aeródromo de Piracicaba (PIR) não substitui esse portão. Combinamos o voo e a margem da Luiz de Queiroz; a espera no desembarque de Viracopos integra o trecho VCP quando o pouso já está no roteiro. A SP-127 (Fausto Santomauro / Cornélio Pires) entra quando a pauta vaza para o sul do estado.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em Piracicaba',
        'itens' => [
            ['h3' => 'Centro, Rua do Porto e a Independência', 'texto' => 'Sede e o calçadão. Informe o prédio; o recuo do Centro não é o da Cidade Alta nem o da ESALQ.'],
            ['h3' => 'Cidade Alta, São Dimas e Nova Piracicaba', 'texto' => 'Hotel, clínica e residencial. O nome do estabelecimento evita a volta na Boa Morte e na Armando de Salles Oliveira.'],
            ['h3' => 'ESALQ, Unimep e as usinas', 'texto' => 'Portaria, bloco e documento na lista. Sem isso, o recuo do campus ou da planta não libera.'],
            ['h3' => 'Quando a pauta aponta para o VCP ou a capital', 'texto' => 'Viracopos pela SP-304 não é o mesmo pedido urbano. São Paulo entra como viagem; o orçamento sai sob consulta.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pauta a ESALQ e o VCP',
    'faq' => [
        ['pergunta' => 'O aeroporto comercial de Piracicaba é o PIR?', 'resposta' => 'O campo PIR não é o portão comercial da conexão. O voo prático da pauta longa sai em geral pelo Viracopos (VCP), em Campinas, pela SP-304.'],
        ['pergunta' => 'O motorista espera no VCP se o voo atrasar?', 'resposta' => 'Sim, quando o voo está no roteiro. Acompanhamos o painel com o número do voo; a espera no terminal faz parte do trecho Viracopos.'],
        ['pergunta' => 'Vocês fazem Centro, Cidade Alta e a ESALQ no mesmo dia?', 'resposta' => 'Sim. Informe a ordem, o bloco do campus e o documento da portaria. Um motorista articula os três recuos.'],
        ['pergunta' => 'Dá para ir ao Parque do Taquaral depois da reunião?', 'resposta' => 'Sim, só como visita combinada no itinerário. Não é o mesmo recorte da ESALQ; o horário sai sob consulta.'],
        ['pergunta' => 'O carro segue à capital ou a Campinas no mesmo expediente?', 'resposta' => 'Sim, quando entram no roteiro. A SP-304 e a Anhanguera pedem margem própria; o orçamento sai à parte do trecho urbano.'],
    ],
    'cta' => [
        'titulo' => 'Envie o campus junto com o horário do VCP',
        'texto' => 'O orçamento de Piracicaba sai sob consulta. Centro, ESALQ e Viracopos no mesmo recado.',
        'botao' => 'Solicitar carro em Piracicaba',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'campinas', 'ancora' => 'Cambuí, Unicamp e o Viracopos'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU na capital'],
    ],
];
