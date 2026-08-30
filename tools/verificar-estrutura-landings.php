<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$indice = require $root . '/data/cidades/indice.php';
$issues = [];
$ok = 0;

foreach ($indice as $item) {
    $estado = $item['estado'];
    $cidade = $item['cidade'];
    $slug = $estado . '/' . $cidade;
    $rel = 'data/cidades/' . $estado . '/' . $cidade . '.php';
    $path = $root . '/' . $rel;
    $atual = require $path;

    $cmd = 'git show HEAD:' . str_replace('\\', '/', $rel);
    $oldPhp = [];
    $code = 0;
    exec($cmd . ' 2>NUL', $oldPhp, $code);
    if ($code !== 0 || $oldPhp === []) {
        $issues[] = $slug . ' HEAD_AUSENTE';
        continue;
    }
    $tmp = $root . '/tools/_tmp-head-' . $estado . '-' . $cidade . '.php';
    file_put_contents($tmp, implode("\n", $oldPhp) . "\n");
    $antigo = require $tmp;
    unlink($tmp);

    foreach (['layout', 'imagem'] as $chave) {
        if (($atual[$chave] ?? null) !== ($antigo[$chave] ?? null)) {
            $issues[] = $slug . ' ' . $chave . ' mudou';
        }
    }
    $geoA = $atual['geo'] ?? [];
    $geoB = $antigo['geo'] ?? [];
    if ((float) ($geoA['lat'] ?? 0) !== (float) ($geoB['lat'] ?? 0)
        || (float) ($geoA['lng'] ?? 0) !== (float) ($geoB['lng'] ?? 0)
    ) {
        $issues[] = $slug . ' geo mudou';
    }
    $slugsA = array_map(static fn(array $r): string => ($r['tipo'] ?? '') . ':' . ($r['slug'] ?? ''), $atual['relacionados'] ?? []);
    $slugsB = array_map(static fn(array $r): string => ($r['tipo'] ?? '') . ':' . ($r['slug'] ?? ''), $antigo['relacionados'] ?? []);
    if ($slugsA !== $slugsB) {
        $issues[] = $slug . ' relacionados mudaram: ' . implode(',', $slugsA) . ' != ' . implode(',', $slugsB);
    }
    if (($atual['cidade_nome'] ?? '') !== ($antigo['cidade_nome'] ?? '')) {
        $issues[] = $slug . ' cidade_nome mudou';
    }
    $ok++;
}

echo 'comparadas=' . $ok . ' issues=' . count($issues) . PHP_EOL;
foreach (array_slice($issues, 0, 40) as $i) {
    echo $i . PHP_EOL;
}
if (count($issues) > 40) {
    echo '... +' . (count($issues) - 40) . PHP_EOL;
}
exit(count($issues) > 0 ? 1 : 0);
