<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/bootstrap.php';

header('Content-Type: text/plain; charset=UTF-8');
header('Cache-Control: public, max-age=300, s-maxage=3600, stale-while-revalidate=86400');

echo "User-agent: *\n";
echo "Allow: /\n\n";
echo "Disallow: /data/\n";
echo "Disallow: /includes/\n";
echo "Disallow: /templates/\n";
echo "Disallow: /tools/\n";
echo "Disallow: /docs/\n";
echo "Disallow: /api/\n\n";
echo 'Sitemap: ' . url_site('sitemap.xml') . "\n";
