<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/bootstrap.php';

header('Content-Type: application/xml; charset=UTF-8');

$urls = [
    ['loc' => url_site(), 'lastmod' => date('Y-m-d', filemtime(__DIR__ . '/index.php'))],
    ['loc' => url_site('transporte-executivo/'), 'lastmod' => date('Y-m-d', filemtime(__DIR__ . '/templates/hub.php'))],
];

foreach (catalogo() as $slug => $_meta) {
    $arquivo = __DIR__ . '/data/estados/' . $slug . '.php';
    $urls[] = [
        'loc' => url_estado($slug),
        'lastmod' => date('Y-m-d', is_file($arquivo) ? filemtime($arquivo) : time()),
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
