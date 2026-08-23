<?php

declare(strict_types=1);

function ibge_ufs_validas(): array
{
    return ['AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO'];
}

function ibge_cache_dir(): string
{
    $dir = dirname(__DIR__) . '/data/cache';
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
    return $dir;
}

function ibge_baixar(string $url, string $destino): bool
{
    $ctx = stream_context_create([
        'http' => [
            'timeout' => 20,
            'header' => "Accept: application/json\r\nUser-Agent: Transporte-Executivo/1.0\r\n",
        ],
    ]);
    $raw = @file_get_contents($url, false, $ctx);
    if (is_string($raw) && $raw !== '') {
        return file_put_contents($destino, $raw) !== false;
    }

    if (PHP_OS_FAMILY === 'Windows') {
        $ps = 'powershell -NoProfile -Command ' . escapeshellarg(
            'Invoke-WebRequest -Uri \'' . $url . '\' -OutFile \'' . $destino . '\' -UseBasicParsing'
        );
        exec($ps, $out, $code);
        return $code === 0 && is_file($destino) && filesize($destino) > 20;
    }

    return false;
}

function ibge_buscar(string $url, string $cacheNome, int $ttl = 86400): array
{
    $arquivo = ibge_cache_dir() . '/' . $cacheNome;
    $fresco = is_file($arquivo) && (time() - filemtime($arquivo)) < $ttl && filesize($arquivo) > 20;

    if (!$fresco) {
        ibge_baixar($url, $arquivo);
    }

    if (!is_file($arquivo)) {
        return [];
    }

    $dados = json_decode((string) file_get_contents($arquivo), true);
    return is_array($dados) ? $dados : [];
}

function ibge_estados(): array
{
    $lista = ibge_buscar(
        'https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome',
        'estados.json'
    );
    $saida = [];
    foreach ($lista as $item) {
        $uf = strtoupper((string) ($item['sigla'] ?? ''));
        $nome = (string) ($item['nome'] ?? '');
        if (!in_array($uf, ibge_ufs_validas(), true) || $nome === '') {
            continue;
        }
        $saida[] = [
            'uf' => $uf,
            'nome' => $nome,
            'slug' => slugify($nome),
        ];
    }
    usort($saida, static fn (array $a, array $b): int => $a['nome'] <=> $b['nome']);
    return $saida;
}

function ibge_cidades_principais_mapa(): array
{
    static $mapa = null;
    if ($mapa === null) {
        $mapa = require dirname(__DIR__) . '/data/cidades-principais.php';
    }
    return is_array($mapa) ? $mapa : [];
}

function ibge_cidades_principais(string $uf): array
{
    $uf = strtoupper($uf);
    $todas = ibge_cidades($uf);
    $nomes = ibge_cidades_principais_mapa()[$uf] ?? null;

    if (!is_array($nomes) || $nomes === []) {
        return $todas;
    }

    $porSlug = [];
    foreach ($todas as $cidade) {
        $porSlug[$cidade['slug']] = $cidade;
    }

    $saida = [];
    foreach ($nomes as $nome) {
        $slug = slugify((string) $nome);
        if (isset($porSlug[$slug])) {
            $saida[] = $porSlug[$slug];
        }
    }

    return $saida;
}

function ibge_cidades(string $uf): array
{
    $uf = strtoupper($uf);
    if (!in_array($uf, ibge_ufs_validas(), true)) {
        return [];
    }
    $lista = ibge_buscar(
        'https://servicodados.ibge.gov.br/api/v1/localidades/estados/' . rawurlencode($uf) . '/municipios?orderBy=nome',
        'cidades-' . $uf . '.json'
    );
    $saida = [];
    foreach ($lista as $item) {
        $nome = (string) ($item['nome'] ?? '');
        $id = (int) ($item['id'] ?? 0);
        if ($nome === '' || $id < 1) {
            continue;
        }
        $saida[] = [
            'id' => $id,
            'nome' => $nome,
            'slug' => slugify($nome),
        ];
    }
    return $saida;
}
