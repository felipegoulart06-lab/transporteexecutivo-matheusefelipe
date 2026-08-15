<?php

declare(strict_types=1);

return [
    'acre' => [
        'uf' => 'AC', 'nome' => 'Acre', 'capital' => 'Rio Branco', 'regiao' => 'Norte',
        'gentilico' => 'acreano', 'imagem' => 'norte.jpg',
        'geo' => ['lat' => -9.97499, 'lng' => -67.8243],
        'relacionados' => ['rondonia', 'amazonas'],
    ],
    'alagoas' => [
        'uf' => 'AL', 'nome' => 'Alagoas', 'capital' => 'Maceió', 'regiao' => 'Nordeste',
        'gentilico' => 'alagoano', 'imagem' => 'nordeste.jpg',
        'geo' => ['lat' => -9.66599, 'lng' => -35.735],
        'relacionados' => ['pernambuco', 'sergipe'],
    ],
    'amapa' => [
        'uf' => 'AP', 'nome' => 'Amapá', 'capital' => 'Macapá', 'regiao' => 'Norte',
        'gentilico' => 'amapaense', 'imagem' => 'norte.jpg',
        'geo' => ['lat' => 0.03493, 'lng' => -51.0694],
        'relacionados' => ['para', 'amazonas'],
    ],
    'amazonas' => [
        'uf' => 'AM', 'nome' => 'Amazonas', 'capital' => 'Manaus', 'regiao' => 'Norte',
        'gentilico' => 'amazonense', 'imagem' => 'norte.jpg',
        'geo' => ['lat' => -3.11903, 'lng' => -60.0217],
        'relacionados' => ['para', 'rondonia', 'roraima'],
    ],
    'bahia' => [
        'uf' => 'BA', 'nome' => 'Bahia', 'capital' => 'Salvador', 'regiao' => 'Nordeste',
        'gentilico' => 'baiano', 'imagem' => 'nordeste.jpg',
        'geo' => ['lat' => -12.9718, 'lng' => -38.5011],
        'relacionados' => ['sergipe', 'minas-gerais', 'espirito-santo'],
    ],
    'ceara' => [
        'uf' => 'CE', 'nome' => 'Ceará', 'capital' => 'Fortaleza', 'regiao' => 'Nordeste',
        'gentilico' => 'cearense', 'imagem' => 'nordeste.jpg',
        'geo' => ['lat' => -3.73186, 'lng' => -38.5267],
        'relacionados' => ['rio-grande-do-norte', 'piaui', 'pernambuco'],
    ],
    'distrito-federal' => [
        'uf' => 'DF', 'nome' => 'Distrito Federal', 'capital' => 'Brasília', 'regiao' => 'Centro-Oeste',
        'gentilico' => 'brasiliense', 'imagem' => 'centro-oeste.jpg',
        'geo' => ['lat' => -15.7939, 'lng' => -47.8828],
        'relacionados' => ['goias', 'minas-gerais'],
    ],
    'espirito-santo' => [
        'uf' => 'ES', 'nome' => 'Espírito Santo', 'capital' => 'Vitória', 'regiao' => 'Sudeste',
        'gentilico' => 'capixaba', 'imagem' => 'sudeste.jpg',
        'geo' => ['lat' => -20.3155, 'lng' => -40.3128],
        'relacionados' => ['rio-de-janeiro', 'minas-gerais', 'bahia'],
    ],
    'goias' => [
        'uf' => 'GO', 'nome' => 'Goiás', 'capital' => 'Goiânia', 'regiao' => 'Centro-Oeste',
        'gentilico' => 'goiano', 'imagem' => 'centro-oeste.jpg',
        'geo' => ['lat' => -16.6864, 'lng' => -49.2643],
        'relacionados' => ['distrito-federal', 'mato-grosso', 'minas-gerais'],
    ],
    'maranhao' => [
        'uf' => 'MA', 'nome' => 'Maranhão', 'capital' => 'São Luís', 'regiao' => 'Nordeste',
        'gentilico' => 'maranhense', 'imagem' => 'nordeste.jpg',
        'geo' => ['lat' => -2.53073, 'lng' => -44.3068],
        'relacionados' => ['piaui', 'para', 'tocantins'],
    ],
    'mato-grosso' => [
        'uf' => 'MT', 'nome' => 'Mato Grosso', 'capital' => 'Cuiabá', 'regiao' => 'Centro-Oeste',
        'gentilico' => 'mato-grossense', 'imagem' => 'centro-oeste.jpg',
        'geo' => ['lat' => -15.601, 'lng' => -56.0974],
        'relacionados' => ['mato-grosso-do-sul', 'goias', 'rondonia'],
    ],
    'mato-grosso-do-sul' => [
        'uf' => 'MS', 'nome' => 'Mato Grosso do Sul', 'capital' => 'Campo Grande', 'regiao' => 'Centro-Oeste',
        'gentilico' => 'sul-mato-grossense', 'imagem' => 'centro-oeste.jpg',
        'geo' => ['lat' => -20.4697, 'lng' => -54.6201],
        'relacionados' => ['mato-grosso', 'parana', 'sao-paulo'],
    ],
    'minas-gerais' => [
        'uf' => 'MG', 'nome' => 'Minas Gerais', 'capital' => 'Belo Horizonte', 'regiao' => 'Sudeste',
        'gentilico' => 'mineiro', 'imagem' => 'sudeste.jpg',
        'geo' => ['lat' => -19.9167, 'lng' => -43.9345],
        'relacionados' => ['sao-paulo', 'rio-de-janeiro', 'espirito-santo'],
    ],
    'para' => [
        'uf' => 'PA', 'nome' => 'Pará', 'capital' => 'Belém', 'regiao' => 'Norte',
        'gentilico' => 'paraense', 'imagem' => 'norte.jpg',
        'geo' => ['lat' => -1.4554, 'lng' => -48.4898],
        'relacionados' => ['amazonas', 'amapa', 'maranhao'],
    ],
    'paraiba' => [
        'uf' => 'PB', 'nome' => 'Paraíba', 'capital' => 'João Pessoa', 'regiao' => 'Nordeste',
        'gentilico' => 'paraibano', 'imagem' => 'nordeste.jpg',
        'geo' => ['lat' => -7.1195, 'lng' => -34.845],
        'relacionados' => ['pernambuco', 'rio-grande-do-norte'],
    ],
    'parana' => [
        'uf' => 'PR', 'nome' => 'Paraná', 'capital' => 'Curitiba', 'regiao' => 'Sul',
        'gentilico' => 'paranaense', 'imagem' => 'sul.jpg',
        'geo' => ['lat' => -25.4284, 'lng' => -49.2733],
        'relacionados' => ['santa-catarina', 'sao-paulo', 'mato-grosso-do-sul'],
    ],
    'pernambuco' => [
        'uf' => 'PE', 'nome' => 'Pernambuco', 'capital' => 'Recife', 'regiao' => 'Nordeste',
        'gentilico' => 'pernambucano', 'imagem' => 'nordeste.jpg',
        'geo' => ['lat' => -8.0476, 'lng' => -34.877],
        'relacionados' => ['paraiba', 'alagoas', 'bahia'],
    ],
    'piaui' => [
        'uf' => 'PI', 'nome' => 'Piauí', 'capital' => 'Teresina', 'regiao' => 'Nordeste',
        'gentilico' => 'piauiense', 'imagem' => 'nordeste.jpg',
        'geo' => ['lat' => -5.0892, 'lng' => -42.8016],
        'relacionados' => ['ceara', 'maranhao', 'bahia'],
    ],
    'rio-de-janeiro' => [
        'uf' => 'RJ', 'nome' => 'Rio de Janeiro', 'capital' => 'Rio de Janeiro', 'regiao' => 'Sudeste',
        'gentilico' => 'fluminense', 'imagem' => 'sudeste.jpg',
        'geo' => ['lat' => -22.9068, 'lng' => -43.1729],
        'relacionados' => ['sao-paulo', 'minas-gerais', 'espirito-santo'],
    ],
    'rio-grande-do-norte' => [
        'uf' => 'RN', 'nome' => 'Rio Grande do Norte', 'capital' => 'Natal', 'regiao' => 'Nordeste',
        'gentilico' => 'potiguar', 'imagem' => 'nordeste.jpg',
        'geo' => ['lat' => -5.7945, 'lng' => -35.211],
        'relacionados' => ['paraiba', 'ceara'],
    ],
    'rio-grande-do-sul' => [
        'uf' => 'RS', 'nome' => 'Rio Grande do Sul', 'capital' => 'Porto Alegre', 'regiao' => 'Sul',
        'gentilico' => 'gaúcho', 'imagem' => 'sul.jpg',
        'geo' => ['lat' => -30.0346, 'lng' => -51.2177],
        'relacionados' => ['santa-catarina', 'parana'],
    ],
    'rondonia' => [
        'uf' => 'RO', 'nome' => 'Rondônia', 'capital' => 'Porto Velho', 'regiao' => 'Norte',
        'gentilico' => 'rondoniense', 'imagem' => 'norte.jpg',
        'geo' => ['lat' => -8.76077, 'lng' => -63.8999],
        'relacionados' => ['acre', 'amazonas', 'mato-grosso'],
    ],
    'roraima' => [
        'uf' => 'RR', 'nome' => 'Roraima', 'capital' => 'Boa Vista', 'regiao' => 'Norte',
        'gentilico' => 'roraimense', 'imagem' => 'norte.jpg',
        'geo' => ['lat' => 2.82384, 'lng' => -60.6753],
        'relacionados' => ['amazonas', 'para'],
    ],
    'santa-catarina' => [
        'uf' => 'SC', 'nome' => 'Santa Catarina', 'capital' => 'Florianópolis', 'regiao' => 'Sul',
        'gentilico' => 'catarinense', 'imagem' => 'sul.jpg',
        'geo' => ['lat' => -27.5945, 'lng' => -48.5477],
        'relacionados' => ['parana', 'rio-grande-do-sul'],
    ],
    'sao-paulo' => [
        'uf' => 'SP', 'nome' => 'São Paulo', 'capital' => 'São Paulo', 'regiao' => 'Sudeste',
        'gentilico' => 'paulista', 'imagem' => 'sudeste.jpg',
        'geo' => ['lat' => -23.5505, 'lng' => -46.6333],
        'relacionados' => ['rio-de-janeiro', 'minas-gerais', 'parana'],
    ],
    'sergipe' => [
        'uf' => 'SE', 'nome' => 'Sergipe', 'capital' => 'Aracaju', 'regiao' => 'Nordeste',
        'gentilico' => 'sergipano', 'imagem' => 'nordeste.jpg',
        'geo' => ['lat' => -10.9472, 'lng' => -37.0731],
        'relacionados' => ['bahia', 'alagoas'],
    ],
    'tocantins' => [
        'uf' => 'TO', 'nome' => 'Tocantins', 'capital' => 'Palmas', 'regiao' => 'Norte',
        'gentilico' => 'tocantinense', 'imagem' => 'norte.jpg',
        'geo' => ['lat' => -10.184, 'lng' => -48.3336],
        'relacionados' => ['goias', 'maranhao', 'para'],
    ],
];
