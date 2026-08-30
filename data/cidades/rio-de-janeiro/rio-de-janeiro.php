<?php

declare(strict_types=1);

return [
    'layout' => 'orla',
    'cidade_nome' => 'Rio de Janeiro',
    'geo' => ['lat' => -22.9068, 'lng' => -43.1729],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Motorista executivo entre Santos Dumont, Galeão e a Zona Sul',
    'seo' => [
        'title' => 'Santos Dumont, Galeão e Zona Sul: motorista no Rio',
        'description' => 'Motorista no Rio para Santos Dumont no Centro, Galeão na Ilha do Governador, Zona Sul e Barra. Informe hotel, terminal e se o trecho usa a Linha Amarela.',
        'og_title' => 'Traslado entre a orla, o Centro, a Ilha e a Barra',
        'og_description' => 'Carro com motorista para hotel na Zona Sul, reunião no Centro, SDU na Praça Salgado Filho e GIG na Ilha do Governador.',
        'og_image_alt' => 'Carro executivo preto em via litorânea da cidade do Rio de Janeiro',
    ],
    'kicker' => 'Cidade do Rio · RJ',
    'h1' => 'Do saguão do Santos Dumont à portaria na orla',
    'epigrafe' => 'No Rio o atalho muda com o Túnel Rebouças, a Avenida Brasil e a Linha Amarela. Santos Dumont encosta no Centro; o Galeão pede a Ilha do Governador. O motorista segura o corredor; o passageiro segura o horário.',
    'abertura' => [
        'h2' => 'Dois aeroportos no mesmo município — e recuos que não se misturam',
        'texto' => [
            'O Santos Dumont (SDU) fica no Centro, na Praça Senador Salgado Filho, e opera voo doméstico colado às torres e à zona portuária. O Galeão (Tom Jobim) fica na Ilha do Governador, com acesso pela Avenida Vinte de Janeiro e pelos corredores da Linha Vermelha e da Avenida Brasil. Zona Sul e Barra não compartilham o mesmo relógio.',
            'O serviço na cidade do Rio é de traslado e de espera: o carro já está no roteiro, com o nome do passageiro, o hotel e o terminal certos. “Em Ipanema” não define o recuo; tampouco “no Galeão” define a porta do desembarque.',
        ],
    ],
    'faixas' => [
        ['h2' => 'Zona Sul: o relógio da orla e dos túneis', 'texto' => 'Ipanema, Leblon, Copacabana e Botafogo concentram hotel e jantar. O trecho até o Santos Dumont cruza Aterro e, conforme a origem, o Túnel Rebouças. Evento no Aterro muda o intervalo mais que a distância no mapa.'],
        ['h2' => 'Centro e o saguão do SDU', 'texto' => 'Reunião em prédio do Centro, desembarque na Praça Salgado Filho e almoço na mesma margem cabem no mesmo turno se a ordem dos endereços já estiver no roteiro — não no aplicativo da hora.'],
        ['h2' => 'Barra, Linha Amarela e o Galeão', 'texto' => 'Hotel na Barra ou em Jacarepaguá com voo na Ilha. A Linha Amarela (Lamsa) e a Avenida Brasil pesam mais que o quilômetro. Zona Sul e Barra não se resolvem com o mesmo atalho.'],
    ],
    'aeroportos' => [
        'h2' => 'SDU no Centro, GIG na Ilha — no município do Rio',
        'itens' => [
            ['h3' => 'Santos Dumont — SDU, Centro', 'texto' => 'Doméstico na Praça Senador Salgado Filho. Combinamos o desembarque e o sentido do Aterro antes do pouso. Não é o terminal da Ilha.'],
            ['h3' => 'Galeão — GIG, Ilha do Governador', 'texto' => 'Internacional e doméstico fora da orla. Terminal, voo e ponto de encontro entram na ordem; a espera no saguão integra o trecho da Ilha, pela Vinte de Janeiro e pelos corredores da CET-Rio.'],
        ],
    ],
    'protocolo' => [
        'h2' => 'O que pedimos para acertar o embarque carioca',
        'lista' => [
            'Hotel ou prédio com nome — o recuo de Copacabana não é o do Leblon.',
            'Qual terminal: SDU no Centro ou GIG na Ilha, com número do voo se houver espera.',
            'Se a comitiva segue para a Barra depois do Centro, a Linha Amarela muda a ordem mais que o mapa.',
        ],
    ],
    'faq_h2' => 'Dúvidas de quem voa no Centro ou se hospeda na orla',
    'faq' => [
        ['pergunta' => 'O Santos Dumont e o Galeão ficam no mesmo bairro?', 'resposta' => 'Não. Os dois estão no município do Rio de Janeiro, mas em recortes distintos: SDU no Centro, Praça Senador Salgado Filho; Galeão na Ilha do Governador. Informe qual terminal entra no roteiro.'],
        ['pergunta' => 'O motorista para na portaria do hotel na orla?', 'resposta' => 'Sim, com o nome do hotel e o recuo combinado. Evitamos cruzar a Avenida Atlântica no horário de evento sem aviso. “Na Zona Sul” não basta.'],
        ['pergunta' => 'Dá para hotel na Barra, reunião no Centro e voo no Galeão no mesmo dia?', 'resposta' => 'Dá, se a ordem vier no roteiro. A Linha Amarela e a Avenida Brasil pesam mais que a distância. Informe se o carro permanece ou se é só o trecho até a Ilha.'],
        ['pergunta' => 'Vocês cruzam para Niterói no mesmo pedido?', 'resposta' => 'Sim, quando o destino em Niterói entra no recado. A ponte e o retorno à Zona Sul ou ao SDU mudam o intervalo; a hora à disposição evita nova chamada.'],
    ],
    'cta' => [
        'titulo' => 'Diga se o terminal é o Centro ou a Ilha',
        'texto' => 'Informe hotel na Zona Sul ou na Barra, se o voo é SDU ou GIG, e o horário de apresentação. Devolvemos a confirmação pelo WhatsApp.',
        'botao' => 'Pedir motorista em Rio de Janeiro',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'rio-de-janeiro', 'ancora' => 'O recorte fluminense além da capital'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-paulo', 'ancora' => 'Faria Lima, Congonhas na capital e GRU em Guarulhos'],
        ['tipo' => 'cidade', 'estado' => 'bahia', 'cidade' => 'salvador', 'ancora' => 'Orla de Salvador, Centro e o aeroporto SSA'],
    ],
];
