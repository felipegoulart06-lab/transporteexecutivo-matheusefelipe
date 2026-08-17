<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'Rio de Janeiro',
    'geo' => ['lat' => -22.9068, 'lng' => -43.1729],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista na cidade do Rio de Janeiro',
    'seo' => [
        'title' => 'Carro com motorista no Rio: Galeão, SDU e Zona Sul',
        'description' => 'Motorista executivo no Rio de Janeiro para Santos Dumont, Galeão, Zona Sul e Barra. Embarque discreto, espera combinada e orçamento sob consulta.',
        'og_title' => 'Traslado executivo entre a orla, o Centro e os dois aeroportos do Rio',
        'og_description' => 'Carro com motorista para agendas que misturam hotel na Zona Sul, reunião no Centro e voo em SDU ou GIG.',
        'og_image_alt' => 'Carro executivo preto em via litorânea da cidade do Rio de Janeiro',
    ],
    'kicker' => 'Cidade do Rio · RJ',
    'h1' => 'Do saguão do Santos Dumont à porta do hotel na orla',
    'epigrafe' => 'No Rio o atalho muda com o evento, o túnel e a maré de trânsito da Avenida Brasil. O motorista segura o volante; o passageiro segura o horário.',
    'abertura' => [
        'h2' => 'Uma cidade de dois aeroportos e várias cidades dentro',
        'texto' => [
            'Santos Dumont encosta no Centro; o Galeão pede a Ilha e a Avenida Brasil. Entre os dois cabem a Zona Sul, a Barra e o Centro — cada um com regra de acesso, horário de túnel e hotel com recuo apertado.',
            'O serviço na cidade do Rio é de traslado e de espera: o carro não “cai do aplicativo” na porta do Copacabana Palace. Ele já está no roteiro, com o nome do passageiro e o terminal certos.',
        ],
    ],
    'faixas' => [
        ['h2' => 'Zona Sul: o relógio da orla', 'texto' => 'Ipanema, Leblon, Copacabana e Botafogo concentram hotel e jantar. O trecho até o Santos Dumont é curto quando a via está livre e longo quando há evento no Aterro.'],
        ['h2' => 'Centro e Santo Cristo', 'texto' => 'Reuniões em prédio histórico, desembarque no SDU e almoço na Lapa cabem no mesmo turno se a ordem dos endereços estiver no roteiro — não no Waze da hora.'],
        ['h2' => 'Barra e a Linha Amarela', 'texto' => 'Hotel em Jacarepaguá ou na Barra com voo no Galeão. A distância no mapa não conta o pedágio nem o horário de pedágio invertido da via.'],
    ],
    'aeroportos' => [
        'h2' => 'SDU e GIG não se trocam no mesmo recorte',
        'itens' => [
            ['h3' => 'Santos Dumont — SDU', 'texto' => 'Ponte aérea e voo doméstico colado ao Centro. Combinamos o desembarque e o sentido do Aterro antes do pouso.'],
            ['h3' => 'Galeão — GIG', 'texto' => 'Internacional e doméstico na Ilha. Terminal, voo e ponto de encontro entram na ordem; a espera no saguão faz parte do trecho.'],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque carioca',
        'lista' => [
            'Hotel ou prédio com nome — “em Ipanema” não basta para o recuo.',
            'Qual terminal: SDU ou GIG, com número do voo se houver espera.',
            'Se a comitiva segue para a Barra depois do Centro, a ordem muda o tempo mais que o quilômetro.',
        ],
    ],
    'faq_h2' => 'Dúvidas de quem voa ou se hospeda no Rio',
    'faq' => [
        ['pergunta' => 'O carro espera no Galeão se o voo internacional atrasar?', 'resposta' => 'Sim. Acompanhamos o painel com o número do voo. A espera no terminal integra o trecho GIG.'],
        ['pergunta' => 'Dá para sair do Santos Dumont e chegar ao Leblon no fim da tarde?', 'resposta' => 'Dá, com margem para o Aterro e para o túnel. O horário é combinado; não é corrida instantânea.'],
        ['pergunta' => 'Vocês fazem hotel na Barra e reunião no Centro no mesmo dia?', 'resposta' => 'Sim. Informe a ordem e se o carro permanece. A Linha Amarela e a Brasil mudam o intervalo mais que a distância.'],
        ['pergunta' => 'O motorista sobe até a portaria de hotel na orla?', 'resposta' => 'Sim. Combinamos o recuo ou a garagem. Evitamos o cruzamento da Avenida Atlântica no horário de evento sem aviso.'],
    ],
    'cta' => [
        'titulo' => 'Marque o terminal antes de marcar o jantar',
        'texto' => 'Diga se o embarque é SDU, GIG ou hotel na Zona Sul. Devolvemos o horário de apresentação.',
        'botao' => 'Pedir carro no Rio',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-de-janeiro', 'ancora' => 'O recorte fluminense além da capital'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas e GRU no mesmo expediente'],
        ['tipo' => 'cidade', 'estado' => 'bahia', 'cidade' => 'salvador', 'ancora' => 'Orla de Salvador, Centro e o aeroporto SSA'],
    ],
];
