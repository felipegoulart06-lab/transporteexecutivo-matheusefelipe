<?php

declare(strict_types=1);

return [
    'layout' => 'malha',
    'cidade_nome' => 'São Caetano do Sul',
    'geo' => ['lat' => -23.6231, 'lng' => -46.5548],
    'imagem' => 'sudeste.jpg',
    'schema_service_name' => 'Transporte executivo com motorista em São Caetano do Sul',
    'seo' => [
        'title' => 'Motorista em São Caetano: Centro, Barcelona e Fundação',
        'description' => 'Carro com motorista em São Caetano do Sul para o Centro, o Barcelona da USCS e o bairro Fundação. Congonhas pela Anchieta; a ferrovia separa o recuo da capital. Valor sob consulta.',
        'og_title' => 'Traslado no Palácio da Cerâmica, na USCS e na Fundação',
        'og_description' => 'Motorista em São Caetano: Avenida Goiás, campus Barcelona e o recuo da Fundação na borda com Vila Prudente.',
        'og_image_alt' => 'Sedan executivo na Avenida Goiás, em São Caetano do Sul',
    ],
    'kicker' => 'ABC paulista · SP',
    'h1' => 'A Fundação não cruza a ferrovia no mesmo recuo do Paço',
    'intro' => 'São Caetano do Sul é o município mais compacto do ABC, mas a ferrovia e o Tamanduateí separam o Centro da Fundação, na borda com Vila Prudente, na capital. O Paço (Palácio da Cerâmica) fica na Avenida Fernando Simonsen; a USCS Barcelona, na Avenida Goiás, 3400. Não há aeroporto comercial: Congonhas (CGH) pela Via Anchieta é o destino típico; GRU pede o Rodoanel. “Me busca em São Caetano” não diz se o carro para na Goiás ou do outro lado dos trilhos.',
    'blocos' => [
        [
            'h2' => 'Compacto no mapa, partido pela linha férrea',
            'texto' => 'Quem tem pauta no Palácio da Cerâmica e check-out no Centro precisa do prédio, não do cartaz do município. A Avenida Goiás atravessa o Centro e chega ao Barcelona; o campus da Universidade Municipal de São Caetano do Sul (USCS) na Goiás, 3400, não é o Campus Centro nem o da Conceição. A Fundação nasceu no núcleo colonial e hoje cola na capital: o Museu Histórico fica neste recorte, não na rampa da Prefeitura. A espera na porta do Paço só ocorre se já estiver no itinerário.',
        ],
        [
            'h2' => 'Três recuos que o pedido sul-caetanense mais nomeia',
            'itens' => [
                ['h3' => 'Centro, Goiás e o Palácio da Cerâmica', 'texto' => 'Paço na Fernando Simonsen, 566. Informe o gabinete; o recuo da Goiás no calçadão não é o da Fundação.'],
                ['h3' => 'Barcelona e a USCS na Goiás, 3400', 'texto' => 'Campus mais antigo da universidade municipal. Diga a unidade: Barcelona, Centro e Conceição são portas diferentes.'],
                ['h3' => 'Fundação na borda com Vila Prudente', 'texto' => 'Bairro separado do Centro pela ferrovia e pelo Tamanduateí. Rua e número evitam o pin na capital.'],
                ['h3' => 'Anchieta rumo a Congonhas', 'texto' => 'A Via Anchieta (SP-150) pesa mais que o quilômetro urbano. CGH e Faria Lima entram como recorte próprio.'],
            ],
        ],
    ],
    'grade' => [
        'h2' => 'Rotas que a pauta sul-caetanense mais pede',
        'itens' => [
            ['titulo' => 'Hotel no Centro → Paço ou Barcelona', 'texto' => 'Pernoite e sede ou campus. Informe o nome do hotel e a unidade da USCS se a pauta for acadêmica.'],
            ['titulo' => 'São Caetano → Congonhas', 'texto' => 'O CGH não fica na porta da Goiás. Combinamos o voo e a margem da Anchieta. GRU entra pelo Rodoanel quando já está no roteiro.'],
            ['titulo' => 'Centro → Fundação', 'texto' => 'Município curto, recuo partido. O GPS no Paço não atravessa a ferrovia sozinho; envie a rua da Fundação.'],
            ['titulo' => 'Hotel → Santo André, São Bernardo ou a capital', 'texto' => 'Quando a pauta vaza no ABC ou em Vila Prudente, o trecho deixa de ser só urbano de São Caetano.'],
        ],
    ],
    'faq_h2' => 'Perguntas de quem pauta a Goiás e a Fundação',
    'faq' => [
        ['pergunta' => 'São Caetano do Sul tem aeroporto comercial?', 'resposta' => 'Não. Não há saguão de linha regular no município. O voo curto sai em Congonhas (CGH), em São Paulo, pela Via Anchieta; Guarulhos (GRU) pede o Rodoanel.'],
        ['pergunta' => 'A USCS do Barcelona é a mesma porta do Campus Centro?', 'resposta' => 'Não. O campus Barcelona fica na Avenida Goiás, 3400. Informe a unidade; Centro e Conceição são recuos distintos.'],
        ['pergunta' => 'O bairro Fundação fica em São Caetano ou na capital?', 'resposta' => 'É bairro de São Caetano do Sul, na divisa com Vila Prudente. A ferrovia o separa do Centro; o pin na capital entrega o carro no município errado.'],
        ['pergunta' => 'Depois do Paço o carro segue a Santo André no mesmo expediente?', 'resposta' => 'Sim, quando o ABC vizinho entra no itinerário. Não é o mesmo pedido da Fernando Simonsen; o horário sai sob consulta.'],
    ],
    'cta' => [
        'titulo' => 'Diga se o recuo é Goiás, Barcelona ou Fundação',
        'texto' => 'Informe o hotel, a unidade da USCS e se o voo é Congonhas ou GRU. Respondemos com horário e valor.',
        'botao' => 'Pedir motorista em São Caetano do Sul',
    ],
    'relacionados' => [
        ['tipo' => 'estado', 'slug' => 'sao-paulo', 'ancora' => 'Capital e interior paulista no mesmo serviço'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'santo-andre', 'ancora' => 'Campestre, Paço e a Avenida Industrial'],
        ['tipo' => 'cidade', 'estado' => 'sao-paulo', 'cidade' => 'sao-bernardo-do-campo', 'ancora' => 'Paço, Rudge Ramos e a Assunção na Anchieta'],
    ],
];
