<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/functions.php';

function conteudo_primeira_minuscula(string $texto): string
{
    if ($texto === '') {
        return '';
    }
    $mapa = [
        'Á' => 'á', 'À' => 'à', 'Â' => 'â', 'Ã' => 'ã',
        'É' => 'é', 'Ê' => 'ê', 'Í' => 'í', 'Ó' => 'ó',
        'Ô' => 'ô', 'Õ' => 'õ', 'Ú' => 'ú', 'Ç' => 'ç',
    ];
    if (preg_match('/^./us', $texto, $match) !== 1) {
        return $texto;
    }
    $primeira = $match[0];
    $minuscula = $mapa[$primeira] ?? strtolower($primeira);
    return $minuscula . substr($texto, strlen($primeira));
}

function conteudo_contextualizar(string $texto, string $cidade, string $campo): string
{
    if ($campo === 'pergunta') {
        return 'Em ' . $cidade . ', ' . conteudo_primeira_minuscula($texto);
    }
    if (preg_match('/^(Sim|Não)[,.]\s*(.+)$/us', $texto, $match) === 1) {
        return $match[1] . '. Em ' . $cidade . ', '
            . conteudo_primeira_minuscula($match[2]);
    }
    if (preg_match('/^\d/u', $texto) === 1) {
        return $cidade . ' — ' . $texto;
    }
    return 'Em ' . $cidade . ', ' . conteudo_primeira_minuscula($texto);
}

function conteudo_coletar(
    mixed $valor,
    string $arquivo,
    string $cidade,
    array &$ocorrencias,
    string $campo = ''
): void {
    if (is_array($valor)) {
        foreach ($valor as $chave => $item) {
            conteudo_coletar($item, $arquivo, $cidade, $ocorrencias, (string) $chave);
        }
        return;
    }
    if (!is_string($valor) || !in_array($campo, ['pergunta', 'resposta', 'texto'], true)) {
        return;
    }
    $minimo = $campo === 'pergunta' ? 1 : 55;
    if (comprimento_visivel($valor) < $minimo) {
        return;
    }
    $ocorrencias[$valor][] = [
        'arquivo' => $arquivo,
        'cidade' => $cidade,
        'campo' => $campo,
    ];
}

$aplicar = in_array('--apply', $_SERVER['argv'] ?? [], true);
$ocorrencias = [];

foreach (indice_cidades() as $item) {
    $arquivo = dirname(__DIR__) . '/data/cidades/' . $item['estado'] . '/' . $item['cidade'] . '.php';
    if (!is_file($arquivo)) {
        continue;
    }
    $dados = require $arquivo;
    conteudo_coletar($dados, $arquivo, (string) $item['nome'], $ocorrencias);
}

$duplicados = array_filter($ocorrencias, static function (array $itens): bool {
    return count(array_unique(array_column($itens, 'arquivo'))) > 1;
});
$arquivosAlterados = [];
$substituicoes = 0;

if ($aplicar) {
    foreach ($duplicados as $texto => $itens) {
        foreach ($itens as $item) {
            $arquivo = $item['arquivo'];
            $fonte = $arquivosAlterados[$arquivo] ?? (string) file_get_contents($arquivo);
            $novo = conteudo_contextualizar($texto, $item['cidade'], $item['campo']);
            $antes = var_export($texto, true);
            $depois = var_export($novo, true);
            $fonteNovo = str_replace($antes, $depois, $fonte, $quantidade);
            if ($quantidade > 0) {
                $arquivosAlterados[$arquivo] = $fonteNovo;
                $substituicoes += $quantidade;
            }
        }
    }
    foreach ($arquivosAlterados as $arquivo => $fonte) {
        file_put_contents($arquivo, $fonte);
    }
}

$arquivosAfetados = [];
foreach ($duplicados as $itens) {
    foreach ($itens as $item) {
        $arquivosAfetados[$item['arquivo']] = true;
    }
}

echo json_encode([
    'mode' => $aplicar ? 'apply' : 'report',
    'duplicate_groups' => count($duplicados),
    'affected_files' => count($arquivosAfetados),
    'changed_files' => count($arquivosAlterados),
    'replacements' => $substituicoes,
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL;

exit(0);
