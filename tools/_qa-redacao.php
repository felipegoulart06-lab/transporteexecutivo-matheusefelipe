<?php
declare(strict_types=1);
require_once dirname(__DIR__) . '/includes/functions.php';
$indice = require dirname(__DIR__) . '/data/cidades/indice.php';
$titles = $descs = $h1s = $faqs = $issues = [];
$ok = 0;
foreach ($indice as $item) {
    $slug = $item['estado'] . '/' . $item['cidade'];
    $d = require dirname(__DIR__) . '/data/cidades/' . $item['estado'] . '/' . $item['cidade'] . '.php';
    $t = comprimento_visivel((string) $d['seo']['title']);
    $de = comprimento_visivel((string) $d['seo']['description']);
    if ($t < 45 || $t > 65) $issues[] = "$slug TITLE $t";
    if ($de < 130 || $de > 170) $issues[] = "$slug DESC $de";
    if ($d['seo']['title'] === $d['h1']) $issues[] = "$slug TITLE=H1";
    if ($d['seo']['og_title'] === $d['seo']['title']) $issues[] = "$slug OG=TITLE";
    if (($d['cta']['botao'] ?? '') !== 'Pedir motorista em ' . $item['nome']) $issues[] = "$slug CTA";
    $titles[$d['seo']['title']][] = $slug;
    $descs[$d['seo']['description']][] = $slug;
    $h1s[$d['h1']][] = $slug;
    foreach ($d['faq'] as $f) {
        $faqs['P:' . $f['pergunta']][] = $slug;
        $faqs['R:' . $f['resposta']][] = $slug;
    }
    if (!is_file(dirname(__DIR__) . '/data/dossies/' . $item['estado'] . '/' . $item['cidade'] . '.json')) {
        $issues[] = "$slug DOSSIE";
    }
    $ok++;
}
foreach ([$titles, $descs, $h1s, $faqs] as $mapa) {
    foreach ($mapa as $k => $slugs) {
        if (count($slugs) > 1) $issues[] = 'DUP ' . $k . ' => ' . implode(',', $slugs);
    }
}
echo "paginas=$ok issues=" . count($issues) . PHP_EOL;
foreach (array_slice($issues, 0, 80) as $i) echo $i . PHP_EOL;
if (count($issues) > 80) echo '... +' . (count($issues) - 80) . PHP_EOL;
exit($issues === [] ? 0 : 1);
