<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/bootstrap.php';

header('Content-Type: application/xml; charset=UTF-8');
header('Cache-Control: public, max-age=300, s-maxage=3600, stale-while-revalidate=86400');

$lastmod = static function (array $arquivos): string {
    $timestamps = array_map(
        static fn (string $arquivo): int => is_file($arquivo) ? (int) filemtime($arquivo) : 0,
        $arquivos
    );
    return date('Y-m-d', max($timestamps) ?: (int) filemtime(__FILE__));
};
$comuns = [
    __DIR__ . '/includes/header.php',
    __DIR__ . '/includes/footer.php',
    __DIR__ . '/includes/seo.php',
    __DIR__ . '/includes/functions.php',
];
$urls = [
    ['loc' => url_site(), 'lastmod' => $lastmod(array_merge([__DIR__ . '/index.php'], $comuns))],
    ['loc' => url_site('transporte-executivo/'), 'lastmod' => $lastmod(array_merge([__DIR__ . '/templates/hub.php'], $comuns))],
];

foreach (catalogo() as $slug => $_meta) {
    $arquivo = __DIR__ . '/data/estados/' . $slug . '.php';
    $urls[] = [
        'loc' => url_estado($slug),
        'lastmod' => $lastmod(array_merge([$arquivo, __DIR__ . '/templates/estado.php'], $comuns)),
    ];
}

foreach (indice_cidades() as $item) {
    $arquivo = __DIR__ . '/data/cidades/' . $item['estado'] . '/' . $item['cidade'] . '.php';
    $dados = is_file($arquivo) ? require $arquivo : [];
    $layout = preg_replace('/[^a-z0-9-]/', '', (string) ($dados['layout'] ?? ''));
    $urls[] = [
        'loc' => url_cidade_landing($item['estado'], $item['cidade']),
        'lastmod' => $lastmod(array_merge([
            $arquivo,
            __DIR__ . '/templates/cidade-landing.php',
            __DIR__ . '/templates/cidades/' . $layout . '.php',
        ], $comuns)),
    ];
}

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $item): ?>
    <url>
        <loc><?= e($item['loc']) ?></loc>
        <lastmod><?= e($item['lastmod']) ?></lastmod>
    </url>
<?php endforeach; ?>
</urlset>
