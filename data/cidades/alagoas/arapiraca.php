<?php

declare(strict_types=1);

return [
    'layout' => 'protocolo',
    'cidade_nome' => 'Arapiraca',
    'geo' => ['lat' => -9.7549, 'lng' => -36.6615],
    'imagem' => 'nordeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em Arapiraca',
    'seo' => [
        'title' => 'Agreste: motorista em Arapiraca, Centro e o MCZ',
        'description' => 'Carro com motorista em Arapiraca para o Centro, Cacimbas, campus e o eixo até o Zumbi dos Palmares (MCZ). O APQ não substitui o portão comercial. Orçamento sob consulta.',
        'og_title' => 'Traslado no Centro de Arapiraca, em Cacimbas e rumo ao MCZ',
        'og_description' => 'Motorista no agreste alagoano: hotel no Centro, campus e o saguão prático em Maceió — não o APQ.',
        'og_image_alt' => 'Sedan executivo em avenida de Arapiraca no agreste de Alagoas',
    ],
    'kicker' => 'Agreste alagoano · AL',
    'h1' => 'O agreste alagoano pede Arapiraca no roteiro, não o MCZ como se fosse bairro',
    'preambulo' => 'O agreste alagoano concentra comércio e campus em Arapiraca. O Zumbi dos Palmares (MCZ) fica na Grande Maceió, não no quarteirão do Centro nem em Cacimbas. O campo APQ não substitui o portão comercial da pauta longa. O motorista segura a AL-220 e a BR-104; o passageiro segura a reunião — não a vaga na porta do hotel nem o atalho que trata o MCZ como recuo urbano.',
    'artigos' => [
        [
            'h2' => 'O município pede Centro e campus, não “perto de Maceió”',
            'texto' => 'Centro, Cacimbas e o campus da UFAL em Arapiraca não compartilham o mesmo recuo. Hotel, reunião na sede e o salto até o MCZ cabem no mesmo dia só se a ordem da AL-220 já estiver no roteiro. “Me busca em Arapiraca” não coloca o carro na portaria do campus nem no saguão de Rio Largo.',
        ],
        [
            'h2' => 'Cacimbas, o campus e o silêncio da espera na portaria',
            'texto' => 'Cacimbas puxa residencial e clínicas. O campus pede bloco, cancela e documento na lista. A espera discreta enquanto a visita corre integra o trecho quando já está no itinerário. Caruaru entra só como viagem de agreste — não como segunda corrida no Centro.',
        ],
        [
            'h2' => 'Zumbi dos Palmares — MCZ no relógio do agreste',
            'texto' => 'O voo comercial da pauta longa sai em geral pelo MCZ, na Grande Maceió. O aeródromo de Arapiraca (APQ) tem malha limitada e não substitui esse portão. Combinamos o voo e a margem da AL-220; o trecho até o Zumbi deixa de ser urbano. A espera no desembarque, quando o pouso já está no roteiro, integra o trecho MCZ.',
        ],
    ],
    'pauta' => [
        'h2' => 'Itens que entram na ordem do dia em Arapiraca',
        'itens' => [
            ['h3' => 'Centro', 'texto' => 'Sede, hotel e o calçadão. Informe o prédio; o recuo do Centro não é o de Cacimbas nem o do campus.'],
            ['h3' => 'Cacimbas', 'texto' => 'Pauta residencial e clínicas. O nome do estabelecimento evita a volta no quarteirão errado.'],
            ['h3' => 'Campus da UFAL', 'texto' => 'Bloco, portaria e documento na lista. Sem isso, o recuo do campus não libera.'],
            ['h3' => 'Quando a pauta aponta para o MCZ ou Caruaru', 'texto' => 'O Zumbi dos Palmares não é bairro de Arapiraca. Caruaru entra pela malha do agreste; o orçamento sai sob consulta.'],
        ],
    ],
    'faq_h2' => 'Dúvidas de quem pauta o agreste e voa pelo MCZ',
    'faq' => [
        ['pergunta' => 'Arapiraca tem voo comercial regular no APQ?', 'resposta' => 'A malha do APQ é limitada. O portão comercial prático da pauta longa é o Zumbi dos Palmares (MCZ), na Grande Maceió, pela AL-220.'],
        ['pergunta' => 'O MCZ fica em Arapiraca?', 'resposta' => 'Não. O Zumbi dos Palmares fica na Grande Maceió. O trecho até lá entra como viagem, com margem de estrada — não como recuo de bairro.'],
        ['pergunta' => 'Vocês fazem Centro, Cacimbas e o campus no mesmo dia?', 'resposta' => 'Sim. Informe a ordem, o bloco e o documento da portaria. Um motorista articula os três recuos.'],
        ['pergunta' => 'Dá para ir a Maceió depois da reunião no Centro?', 'resposta' => 'Sim, quando a orla ou o MCZ entram no roteiro. A AL-220 pede margem própria; o horário sai sob consulta.'],
        ['pergunta' => 'Em Arapiraca, o hotel no Centro é ponto conveniado?', 'resposta' => 'Não. O hotel entra só como embarque: nome e recuo. O orçamento sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Coloque Arapiraca no roteiro, não só o MCZ',
        'texto' => 'O orçamento do agreste sai sob consulta. Centro, campus e Zumbi no mesmo recado.',
        'botao' => 'Pedir motorista em Arapiraca',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'alagoas', 'ancora' => 'Maceió, o agreste e o recorte alagoano'],
        ['tipo' => 'cidade', 'estado' => 'alagoas', 'cidade' => 'maceio', 'ancora' => 'Ponta Verde, Pajuçara e o MCZ'],
        ['tipo' => 'cidade', 'estado' => 'pernambuco', 'cidade' => 'caruaru', 'ancora' => 'Centro, Indianópolis e o agreste pernambucano'],
    ],
];
