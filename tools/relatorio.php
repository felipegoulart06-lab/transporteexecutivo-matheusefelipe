<?php

declare(strict_types=1);

function relatorio_novo(): array
{
    return ['erros' => [], 'avisos' => [], 'infos' => []];
}

function relatorio_erro(array &$r, string $onde, string $msg): void
{
    $r['erros'][] = "ERROR [{$onde}] {$msg}";
}

function relatorio_aviso(array &$r, string $onde, string $msg): void
{
    $r['avisos'][] = "WARNING [{$onde}] {$msg}";
}

function relatorio_info(array &$r, string $onde, string $msg): void
{
    $r['infos'][] = "INFO [{$onde}] {$msg}";
}

function relatorio_imprimir(string $titulo, array $r): int
{
    echo "=== {$titulo} ===\n";
    foreach (['erros', 'avisos', 'infos'] as $tipo) {
        foreach ($r[$tipo] as $linha) {
            echo $linha . "\n";
        }
    }
    echo count($r['erros']) . " erros · " . count($r['avisos']) . " avisos · " . count($r['infos']) . " infos\n\n";
    return count($r['erros']);
}

function relatorio_juntar(array $a, array $b): array
{
    return [
        'erros' => array_merge($a['erros'], $b['erros']),
        'avisos' => array_merge($a['avisos'], $b['avisos']),
        'infos' => array_merge($a['infos'], $b['infos']),
    ];
}
