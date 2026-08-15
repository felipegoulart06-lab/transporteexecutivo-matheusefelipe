<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/functions.php';
require_once dirname(__DIR__) . '/includes/ibge.php';

$mapa = ibge_cidades_principais_mapa();
$ufs = ['AC','AL','AP','AM','BA','CE','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO'];
$falhas = 0;

foreach ($ufs as $uf) {
    $nomes = $mapa[$uf] ?? [];
    $qtdLista = count($nomes);
    $unicos = count(array_unique(array_map('slugify', $nomes)));
    $encontradas = ibge_cidades_principais($uf);
    $qtdOk = count($encontradas);
    $slugsIbge = [];
    foreach (ibge_cidades($uf) as $c) {
        $slugsIbge[$c['slug']] = $c['nome'];
    }
    $faltando = [];
    foreach ($nomes as $nome) {
        $slug = slugify($nome);
        if (!isset($slugsIbge[$slug])) {
            $faltando[] = $nome;
        }
    }
    $status = ($qtdLista === 15 && $unicos === 15 && $qtdOk === 15 && $faltando === []) ? 'OK' : 'ERRO';
    if ($status !== 'OK') {
        $falhas++;
    }
    echo $uf . ' lista=' . $qtdLista . ' unicos=' . $unicos . ' ibge=' . $qtdOk . ' ' . $status;
    if ($faltando) {
        echo ' faltando: ' . implode(', ', $faltando);
    }
    echo PHP_EOL;
}

echo $falhas === 0 ? "TUDO OK\n" : "FALHAS=$falhas\n";
exit($falhas === 0 ? 0 : 1);
