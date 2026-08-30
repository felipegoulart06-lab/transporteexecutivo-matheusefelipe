<?php

declare(strict_types=1);

/**
 * Auditor técnico das landing pages de cidade.
 *
 * Uso:
 * php tools/auditar-landings.php --base=http://localhost:8000 --round=1 --out=reports/seo-round-1.json
 */

require_once dirname(__DIR__) . '/includes/functions.php';

function audit_option(string $name, string $default): string
{
    foreach ($_SERVER['argv'] ?? [] as $arg) {
        $prefix = '--' . $name . '=';
        if (str_starts_with($arg, $prefix)) {
            return substr($arg, strlen($prefix));
        }
    }
    return $default;
}

function audit_fetch(string $url, array $extraHeaders = []): array
{
    $requestHeaders = array_merge(
        ['Accept: text/html,application/xhtml+xml'],
        array_values(array_filter($extraHeaders, 'is_string'))
    );
    $context = stream_context_create([
        'http' => [
            'timeout' => 15,
            'ignore_errors' => true,
            'follow_location' => 0,
            'user_agent' => 'SEO-Audit-Transporte-Executivo/1.0',
            'header' => implode("\r\n", $requestHeaders) . "\r\n",
        ],
        'ssl' => [
            'verify_peer' => true,
            'verify_peer_name' => true,
        ],
    ]);

    $body = @file_get_contents($url, false, $context);
    $rawHeaders = $http_response_header ?? [];
    $status = 0;
    $headers = [];

    foreach ($rawHeaders as $i => $line) {
        if ($i === 0 && preg_match('/\s(\d{3})(?:\s|$)/', $line, $match)) {
            $status = (int) $match[1];
            continue;
        }
        $parts = explode(':', $line, 2);
        if (count($parts) !== 2) {
            continue;
        }
        $key = strtolower(trim($parts[0]));
        $headers[$key][] = trim($parts[1]);
    }

    return [
        'url' => $url,
        'status' => $status,
        'headers' => $headers,
        'body' => is_string($body) ? $body : '',
    ];
}

function audit_header(array $response, string $name): string
{
    return implode(', ', $response['headers'][strtolower($name)] ?? []);
}

function audit_dom(string $html): array
{
    $dom = new DOMDocument();
    $previous = libxml_use_internal_errors(true);
    $loaded = $html !== '' && $dom->loadHTML($html, LIBXML_NOWARNING | LIBXML_NOERROR);
    $errors = libxml_get_errors();
    libxml_clear_errors();
    libxml_use_internal_errors($previous);

    return [
        'dom' => $dom,
        'xpath' => new DOMXPath($dom),
        'loaded' => $loaded,
        'parse_errors' => count($errors),
    ];
}

function audit_text(?DOMNode $node): string
{
    if (!$node) {
        return '';
    }
    return trim((string) preg_replace('/\s+/u', ' ', $node->textContent));
}

function audit_first(DOMXPath $xpath, string $query): ?DOMNode
{
    $nodes = $xpath->query($query);
    return $nodes && $nodes->length > 0 ? $nodes->item(0) : null;
}

function audit_meta(DOMXPath $xpath, string $attribute, string $value): string
{
    $safe = str_replace("'", '&apos;', $value);
    $node = audit_first(
        $xpath,
        "//meta[translate(@{$attribute}, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz')='{$safe}']/@content"
    );
    return audit_text($node);
}

function audit_schema_types(mixed $node, array &$types): void
{
    if (!is_array($node)) {
        return;
    }
    if (isset($node['@type'])) {
        foreach ((array) $node['@type'] as $type) {
            if (is_string($type) && $type !== '') {
                $types[] = $type;
            }
        }
    }
    if (isset($node['@graph']) && is_array($node['@graph'])) {
        foreach ($node['@graph'] as $child) {
            audit_schema_types($child, $types);
        }
    }
}

function audit_absolute_url(string $href, string $pageUrl): ?string
{
    $href = trim($href);
    if ($href === '' || str_starts_with($href, '#')
        || str_starts_with($href, 'mailto:') || str_starts_with($href, 'tel:')
        || str_starts_with($href, 'javascript:') || str_starts_with($href, 'data:')) {
        return null;
    }

    if (preg_match('#^https?://#i', $href)) {
        return $href;
    }
    $page = parse_url($pageUrl);
    if (!isset($page['scheme'], $page['host'])) {
        return null;
    }
    $origin = $page['scheme'] . '://' . $page['host']
        . (isset($page['port']) ? ':' . $page['port'] : '');
    if (str_starts_with($href, '//')) {
        return $page['scheme'] . ':' . $href;
    }
    if (str_starts_with($href, '/')) {
        return $origin . $href;
    }

    $path = $page['path'] ?? '/';
    $dir = rtrim(str_replace('\\', '/', dirname($path)), '/');
    return $origin . ($dir === '' ? '' : $dir) . '/' . $href;
}

function audit_url_without_fragment(string $url): string
{
    return explode('#', $url, 2)[0];
}

function audit_location_matches(string $location, string $expected, string $requestUrl): bool
{
    $actualUrl = audit_absolute_url($location, $requestUrl);
    $expectedUrl = audit_absolute_url($expected, $requestUrl);
    if ($actualUrl === null || $expectedUrl === null) {
        return false;
    }
    return audit_url_without_fragment($actualUrl) === audit_url_without_fragment($expectedUrl);
}

function audit_lower(string $text): string
{
    return function_exists('mb_strtolower') ? mb_strtolower($text) : strtolower($text);
}

function audit_length(string $text): int
{
    return comprimento_visivel($text);
}

function audit_normalize_text(string $text): string
{
    $text = audit_lower(trim($text));
    $text = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $text) ?? $text;
    return trim((string) preg_replace('/\s+/u', ' ', $text));
}

function audit_shingles(string $text, int $size = 5): array
{
    $words = preg_split('/\s+/u', audit_normalize_text($text), -1, PREG_SPLIT_NO_EMPTY) ?: [];
    $set = [];
    $limit = count($words) - $size;
    for ($i = 0; $i <= $limit; $i++) {
        $set[implode(' ', array_slice($words, $i, $size))] = true;
    }
    return $set;
}

function audit_jaccard(array $a, array $b): float
{
    if ($a === [] && $b === []) {
        return 1.0;
    }
    $intersection = count(array_intersect_key($a, $b));
    $union = count($a) + count($b) - $intersection;
    return $union > 0 ? $intersection / $union : 0.0;
}

function audit_csv(array $rows): string
{
    $stream = fopen('php://temp', 'r+');
    fputcsv($stream, [
        'URL', 'HTTP', 'TITLE', 'DESCRIPTION', 'H1', 'CANONICAL',
        'ROBOTS', 'SCHEMA', 'LINKS', 'STATUS', 'ISSUES',
    ], ',', '"', '');
    foreach ($rows as $row) {
        fputcsv($stream, [
            $row['url'],
            $row['http'],
            $row['title_status'],
            $row['description_status'],
            $row['h1_status'],
            $row['canonical_status'],
            $row['robots_status'],
            $row['schema_status'],
            $row['links'],
            $row['status'],
            implode(' | ', $row['issues']),
        ], ',', '"', '');
    }
    rewind($stream);
    $csv = stream_get_contents($stream);
    fclose($stream);
    return is_string($csv) ? $csv : '';
}

$base = rtrim(audit_option('base', 'http://localhost:8000'), '/');
$round = max(1, (int) audit_option('round', '1'));
$output = audit_option('out', dirname(__DIR__) . '/reports/seo-round-' . $round . '.json');
$csvOutput = preg_replace('/\.json$/', '.csv', $output) ?: ($output . '.csv');
$expectedCount = 170;
$index = indice_cidades();
$catalog = catalogo();
$rows = [];
$documents = [];
$globalIssues = [];
$titles = [];
$descriptions = [];
$h1s = [];
$imageAlts = [];
$faqQuestions = [];
$faqAnswers = [];
$fragments = [];
$internalTargets = [];
$shingles = [];
$contentHashes = [];

if (count($index) !== $expectedCount) {
    $globalIssues[] = "Índice contém " . count($index) . " páginas; esperado: {$expectedCount}.";
}

$entryUrls = [$base . '/', $base . '/transporte-executivo/'];
foreach (array_keys($catalog) as $stateSlug) {
    $entryUrls[] = $base . '/transporte-executivo/' . $stateSlug . '/';
}

foreach ($entryUrls as $entryUrl) {
    $response = audit_fetch($entryUrl);
    $parsed = audit_dom($response['body']);
    $documents[$entryUrl] = [$response, $parsed];
}

foreach ($index as $item) {
    $stateSlug = (string) ($item['estado'] ?? '');
    $citySlug = (string) ($item['cidade'] ?? '');
    $url = $base . '/transporte-executivo/' . $stateSlug . '/' . $citySlug . '/';
    $expectedCanonical = $url;
    $issues = [];
    $response = audit_fetch($url);
    $parsed = audit_dom($response['body']);
    $xpath = $parsed['xpath'];
    $documents[$url] = [$response, $parsed];

    if ($response['status'] !== 200) {
        $issues[] = 'HTTP_' . $response['status'];
    }
    if (!$parsed['loaded']) {
        $issues[] = 'HTML_INVALIDO';
    }
    if (!str_starts_with(ltrim($response['body']), '<!DOCTYPE html>')) {
        $issues[] = 'DOCTYPE_AUSENTE';
    }

    $html = audit_first($xpath, '/html');
    $lang = $html instanceof DOMElement ? trim($html->getAttribute('lang')) : '';
    if ($lang !== 'pt-BR') {
        $issues[] = 'LANG_INVALIDO';
    }

    $title = audit_text(audit_first($xpath, '//title'));
    $description = audit_meta($xpath, 'name', 'description');
    $robots = audit_meta($xpath, 'name', 'robots');
    $h1Nodes = $xpath->query('//h1');
    $h1 = $h1Nodes && $h1Nodes->length > 0 ? audit_text($h1Nodes->item(0)) : '';
    $canonicalNode = audit_first($xpath, "//link[translate(@rel, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz')='canonical']/@href");
    $canonical = audit_text($canonicalNode);
    $mainNodes = $xpath->query('//main');
    $main = $mainNodes && $mainNodes->length > 0 ? $mainNodes->item(0) : null;
    $mainText = audit_text($main);
    $wordCount = count(preg_split('/\s+/u', $mainText, -1, PREG_SPLIT_NO_EMPTY) ?: []);

    $titleLength = audit_length($title);
    $descriptionLength = audit_length($description);
    if ($title === '') {
        $issues[] = 'TITLE_AUSENTE';
    } elseif ($titleLength < 45 || $titleLength > 65) {
        $issues[] = 'TITLE_TAMANHO_' . $titleLength;
    }
    if ($description === '') {
        $issues[] = 'DESCRIPTION_AUSENTE';
    } elseif ($descriptionLength < 130 || $descriptionLength > 170) {
        $issues[] = 'DESCRIPTION_TAMANHO_' . $descriptionLength;
    }
    if (!$h1Nodes || $h1Nodes->length !== 1) {
        $issues[] = 'H1_QUANTIDADE_' . ($h1Nodes ? $h1Nodes->length : 0);
    }
    if ($h1 === '') {
        $issues[] = 'H1_AUSENTE';
    }
    if ($canonical !== $expectedCanonical) {
        $issues[] = 'CANONICAL_INCORRETO';
    }
    if ($robots === '' || stripos($robots, 'noindex') !== false) {
        $issues[] = $robots === '' ? 'ROBOTS_META_AUSENTE' : 'NOINDEX';
    }
    if (!$mainNodes || $mainNodes->length !== 1) {
        $issues[] = 'MAIN_QUANTIDADE_' . ($mainNodes ? $mainNodes->length : 0);
    }
    if ($wordCount < 300) {
        $issues[] = 'CONTEUDO_CURTO_' . $wordCount;
    }

    $ids = [];
    $idNodes = $xpath->query('//*[@id]');
    if ($idNodes) {
        foreach ($idNodes as $idNode) {
            if (!$idNode instanceof DOMElement) {
                continue;
            }
            $id = trim($idNode->getAttribute('id'));
            if ($id !== '' && isset($ids[$id])) {
                $issues[] = 'ID_DUPLICADO_' . $id;
            }
            $ids[$id] = true;
        }
    }

    $headingNodes = $xpath->query('//main//*[self::h1 or self::h2 or self::h3 or self::h4 or self::h5 or self::h6]');
    $lastLevel = 0;
    if ($headingNodes) {
        foreach ($headingNodes as $heading) {
            $level = (int) substr(strtolower($heading->nodeName), 1);
            if (audit_text($heading) === '') {
                $issues[] = 'HEADING_VAZIO';
            }
            if ($lastLevel > 0 && $level > $lastLevel + 1) {
                $issues[] = "HEADING_SALTO_H{$lastLevel}_H{$level}";
            }
            $lastLevel = $level;
        }
    }

    $metaRequirements = [
        ['property', 'og:title'],
        ['property', 'og:description'],
        ['property', 'og:image'],
        ['property', 'og:image:alt'],
        ['property', 'og:image:width'],
        ['property', 'og:image:height'],
        ['name', 'twitter:card'],
        ['name', 'twitter:title'],
        ['name', 'twitter:description'],
        ['name', 'twitter:image'],
        ['name', 'twitter:image:alt'],
        ['name', 'viewport'],
    ];
    foreach ($metaRequirements as [$attribute, $name]) {
        if (audit_meta($xpath, $attribute, $name) === '') {
            $issues[] = 'META_AUSENTE_' . strtoupper(str_replace([':', '-'], '_', $name));
        }
    }

    $schemaTypes = [];
    $schemaValid = true;
    $schemaNodes = $xpath->query("//script[@type='application/ld+json']");
    if (!$schemaNodes || $schemaNodes->length === 0) {
        $schemaValid = false;
        $issues[] = 'SCHEMA_AUSENTE';
    } else {
        foreach ($schemaNodes as $schemaNode) {
            $decoded = json_decode($schemaNode->textContent, true);
            if (!is_array($decoded) || json_last_error() !== JSON_ERROR_NONE) {
                $schemaValid = false;
                $issues[] = 'SCHEMA_JSON_INVALIDO';
                continue;
            }
            audit_schema_types($decoded, $schemaTypes);
            $type = $decoded['@type'] ?? null;
            if ($type === 'WebPage' && ($decoded['url'] ?? '') !== $canonical) {
                $schemaValid = false;
                $issues[] = 'SCHEMA_WEBPAGE_URL';
            }
            if ($type === 'Service') {
                if (($decoded['url'] ?? '') !== $canonical
                    || ($decoded['serviceType'] ?? '') !== 'Transporte executivo'
                    || ($decoded['areaServed']['@type'] ?? '') !== 'City'
                    || ($decoded['provider']['@type'] ?? '') !== 'Organization') {
                    $schemaValid = false;
                    $issues[] = 'SCHEMA_SERVICE_INCOERENTE';
                }
            }
            if ($type === 'BreadcrumbList') {
                $items = $decoded['itemListElement'] ?? [];
                $positions = array_column(is_array($items) ? $items : [], 'position');
                if ($positions !== [1, 2, 3, 4]) {
                    $schemaValid = false;
                    $issues[] = 'SCHEMA_BREADCRUMB_INCOERENTE';
                }
            }
        }
        foreach (['WebPage', 'BreadcrumbList', 'Service', 'FAQPage'] as $requiredType) {
            if (!in_array($requiredType, $schemaTypes, true)) {
                $schemaValid = false;
                $issues[] = 'SCHEMA_SEM_' . strtoupper($requiredType);
            }
        }
    }

    $imageNodes = $xpath->query('//main//img');
    $imageCount = $imageNodes ? $imageNodes->length : 0;
    if ($imageCount === 0) {
        $issues[] = 'IMAGEM_CONTEUDO_AUSENTE';
    }
    $avifSources = $xpath->query("//main//source[@type='image/avif'][@srcset]");
    $webpSources = $xpath->query("//main//source[@type='image/webp'][@srcset]");
    if (!$avifSources || $avifSources->length === 0) {
        $issues[] = 'AVIF_AUSENTE';
    }
    if (!$webpSources || $webpSources->length === 0) {
        $issues[] = 'WEBP_AUSENTE';
    }
    $sourceNodes = $xpath->query('//main//source[@srcset]');
    if ($sourceNodes) {
        foreach ($sourceNodes as $source) {
            if (!$source instanceof DOMElement) {
                continue;
            }
            if (!$source->hasAttribute('sizes') || trim($source->getAttribute('sizes')) === '') {
                $issues[] = 'IMAGEM_SIZES_AUSENTE';
            }
            foreach (explode(',', $source->getAttribute('srcset')) as $candidate) {
                $candidateUrl = trim(preg_split('/\s+/', trim($candidate))[0] ?? '');
                $absolute = audit_absolute_url($candidateUrl, $url);
                if ($absolute) {
                    $internalTargets[audit_url_without_fragment($absolute)] = true;
                }
            }
        }
    }
    if ($imageNodes) {
        foreach ($imageNodes as $image) {
            if (!$image instanceof DOMElement) {
                continue;
            }
            if (!$image->hasAttribute('alt') || trim($image->getAttribute('alt')) === '') {
                $issues[] = 'IMAGEM_ALT_AUSENTE';
            } else {
                $altKey = audit_normalize_text($image->getAttribute('alt'));
                $imageAlts[$altKey][] = $url;
            }
            if (!$image->hasAttribute('width') || !$image->hasAttribute('height')) {
                $issues[] = 'IMAGEM_DIMENSOES_AUSENTES';
            } else {
                $declaredWidth = (int) $image->getAttribute('width');
                $declaredHeight = (int) $image->getAttribute('height');
                $sourcePath = (string) (parse_url($image->getAttribute('src'), PHP_URL_PATH) ?? '');
                $localPath = dirname(__DIR__) . str_replace('/', DIRECTORY_SEPARATOR, $sourcePath);
                $actual = is_file($localPath) ? @getimagesize($localPath) : false;
                if ($declaredWidth <= 0 || $declaredHeight <= 0
                    || (is_array($actual)
                        && abs(($declaredWidth / $declaredHeight) - ($actual[0] / $actual[1])) > 0.01)) {
                    $issues[] = 'IMAGEM_DIMENSOES_INCORRETAS';
                }
            }
            $src = audit_absolute_url($image->getAttribute('src'), $url);
            if ($src) {
                $internalTargets[audit_url_without_fragment($src)] = true;
            }
        }
    }

    $links = [];
    $linkNodes = $xpath->query('//a[@href]');
    if ($linkNodes) {
        foreach ($linkNodes as $link) {
            if (!$link instanceof DOMElement) {
                continue;
            }
            if (audit_text($link) === '' && trim($link->getAttribute('aria-label')) === '') {
                $issues[] = 'LINK_SEM_NOME';
            }
            $href = $link->getAttribute('href');
            $absolute = audit_absolute_url($href, $url);
            if (!$absolute) {
                continue;
            }
            $fragment = (string) (parse_url($absolute, PHP_URL_FRAGMENT) ?? '');
            if ($fragment !== ''
                && audit_url_without_fragment($absolute) === $url
                && !isset($ids[rawurldecode($fragment)])) {
                $issues[] = 'ANCORA_SEM_DESTINO_' . $fragment;
            }
            $links[] = $absolute;
            $parts = parse_url($absolute);
            $baseParts = parse_url($base);
            if (($parts['host'] ?? '') === ($baseParts['host'] ?? '')) {
                $internalTargets[audit_url_without_fragment($absolute)] = true;
            }
        }
    }
    if (count($links) < 4) {
        $issues[] = 'POUCOS_LINKS_' . count($links);
    }

    $buttonNodes = $xpath->query('//button');
    if ($buttonNodes) {
        foreach ($buttonNodes as $button) {
            if (!$button instanceof DOMElement) {
                continue;
            }
            if (audit_text($button) === '' && trim($button->getAttribute('aria-label')) === '') {
                $issues[] = 'BOTAO_SEM_NOME';
            }
        }
    }

    $faqNodes = $xpath->query("//button[contains(concat(' ', normalize-space(@class), ' '), ' faq-btn ')]");
    if ($faqNodes) {
        foreach ($faqNodes as $faqNode) {
            $faqKey = audit_normalize_text(audit_text($faqNode));
            if ($faqKey !== '') {
                $faqQuestions[$faqKey][] = $url;
            }
        }
    }
    $faqPrefixCount = 0;
    $faqAnswerNodes = $xpath->query(
        "//*[contains(concat(' ', normalize-space(@class), ' '), ' faq-panel ')]//p"
    );
    if ($faqAnswerNodes) {
        foreach ($faqAnswerNodes as $faqAnswerNode) {
            $faqAnswer = audit_text($faqAnswerNode);
            $faqKey = audit_normalize_text($faqAnswer);
            if ($faqKey !== '') {
                $faqAnswers[$faqKey][] = $url;
            }
            if (preg_match('/^Sim\.\s+Em\s+/u', $faqAnswer) === 1) {
                $faqPrefixCount++;
            }
        }
    }
    if ($faqPrefixCount >= 3) {
        $issues[] = 'FAQ_PREFIXO_REPETITIVO_' . $faqPrefixCount;
    }

    $withoutSlash = rtrim($url, '/');
    $redirectResponse = audit_fetch($withoutSlash);
    $redirectLocation = audit_header($redirectResponse, 'location');
    if (!in_array($redirectResponse['status'], [301, 308], true)
        || !audit_location_matches($redirectLocation, $url, $withoutSlash)) {
        $issues[] = 'REDIRECT_BARRA_FINAL';
    }

    $peopleResponse = audit_fetch($url . 'pessoas/');
    if ($peopleResponse['status'] !== 301
        || !audit_location_matches(audit_header($peopleResponse, 'location'), $url, $url . 'pessoas/')) {
        $issues[] = 'REDIRECT_LEGADO_PESSOAS';
    }
    $objectsResponse = audit_fetch($url . 'objetos-de-valor/');
    if ($objectsResponse['status'] !== 301
        || !audit_location_matches(
            audit_header($objectsResponse, 'location'),
            'https://delivery.transporteexecutivo.com/',
            $url . 'objetos-de-valor/'
        )) {
        $issues[] = 'REDIRECT_LEGADO_OBJETOS';
    }

    $cacheControl = strtolower(audit_header($response, 'cache-control'));
    if (!str_contains($cacheControl, 'public') || !str_contains($cacheControl, 's-maxage')) {
        $issues[] = 'CACHE_PUBLICO_AUSENTE';
    }
    if (audit_header($response, 'set-cookie') !== '') {
        $issues[] = 'COOKIE_DESNECESSARIO';
    }
    $contentType = strtolower(audit_header($response, 'content-type'));
    if (!str_contains($contentType, 'text/html') || !str_contains($contentType, 'utf-8')) {
        $issues[] = 'CONTENT_TYPE_INVALIDO';
    }

    foreach (['x-content-type-options', 'x-frame-options', 'content-security-policy', 'referrer-policy'] as $securityHeader) {
        if (audit_header($response, $securityHeader) === '') {
            $issues[] = 'HEADER_AUSENTE_' . strtoupper(str_replace('-', '_', $securityHeader));
        }
    }
    if (str_starts_with($base, 'https://') && audit_header($response, 'strict-transport-security') === '') {
        $issues[] = 'HSTS_AUSENTE';
    }

    $titleKey = audit_normalize_text($title);
    $descriptionKey = audit_normalize_text($description);
    $h1Key = audit_normalize_text($h1);
    if ($titleKey !== '') {
        $titles[$titleKey][] = $url;
    }
    if ($descriptionKey !== '') {
        $descriptions[$descriptionKey][] = $url;
    }
    if ($h1Key !== '') {
        $h1s[$h1Key][] = $url;
    }

    $blockNodes = $xpath->query('//main//p | //main//h2 | //main//h3 | //main//li');
    if ($blockNodes) {
        foreach ($blockNodes as $block) {
            $fragment = audit_normalize_text(audit_text($block));
            if (audit_length($fragment) >= 80) {
                $fragments[$fragment][] = $url;
            }
        }
    }

    $normalizedMain = audit_normalize_text($mainText);
    $contentHashes[hash('sha256', $normalizedMain)][] = $url;
    $shingles[$url] = audit_shingles($mainText);

    $rows[] = [
        'url' => $url,
        'state' => $stateSlug,
        'city' => $citySlug,
        'http' => $response['status'],
        'title' => $title,
        'title_length' => $titleLength,
        'title_status' => $title !== '' && $titleLength >= 45 && $titleLength <= 65 ? 'OK' : 'ERRO',
        'description' => $description,
        'description_length' => $descriptionLength,
        'description_status' => $description !== '' && $descriptionLength >= 130 && $descriptionLength <= 170 ? 'OK' : 'ERRO',
        'h1' => $h1,
        'h1_status' => $h1 !== '' && $h1Nodes && $h1Nodes->length === 1 ? 'OK' : 'ERRO',
        'canonical' => $canonical,
        'canonical_status' => $canonical === $expectedCanonical ? 'OK' : 'ERRO',
        'robots' => $robots,
        'robots_status' => $robots !== '' && stripos($robots, 'noindex') === false ? 'OK' : 'ERRO',
        'schema_types' => array_values(array_unique($schemaTypes)),
        'schema_status' => $schemaValid ? 'OK' : 'ERRO',
        'links' => count($links),
        'images' => $imageCount,
        'avif_sources' => $avifSources ? $avifSources->length : 0,
        'webp_sources' => $webpSources ? $webpSources->length : 0,
        'words' => $wordCount,
        'cache_control' => audit_header($response, 'cache-control'),
        'issues' => array_values(array_unique($issues)),
        'status' => $issues === [] ? 'OK' : 'REVISAR',
    ];
}

foreach ($documents as $sourceUrl => [$response, $parsed]) {
    if ($response['status'] !== 200) {
        $globalIssues[] = "Página de entrada não respondeu 200: {$sourceUrl} ({$response['status']}).";
        continue;
    }
    $links = $parsed['xpath']->query('//a[@href]');
    if (!$links) {
        continue;
    }
    foreach ($links as $link) {
        if (!$link instanceof DOMElement) {
            continue;
        }
        $absolute = audit_absolute_url($link->getAttribute('href'), $sourceUrl);
        if (!$absolute) {
            continue;
        }
        $target = audit_url_without_fragment($absolute);
        foreach ($rows as $i => $row) {
            if ($row['url'] === $target) {
                $rows[$i]['inbound'] = ($rows[$i]['inbound'] ?? 0) + 1;
            }
        }
    }
}

foreach ($entryUrls as $entryUrl) {
    [$entryResponse, $entryParsed] = $documents[$entryUrl];
    $entryXpath = $entryParsed['xpath'];
    $entryTitle = audit_text(audit_first($entryXpath, '//title'));
    $entryDescription = audit_meta($entryXpath, 'name', 'description');
    $entryCanonical = audit_text(audit_first(
        $entryXpath,
        "//link[translate(@rel, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz')='canonical']/@href"
    ));
    $entryRobots = audit_meta($entryXpath, 'name', 'robots');
    $entryH1 = $entryXpath->query('//h1');
    if ($entryResponse['status'] !== 200
        || $entryTitle === ''
        || $entryDescription === ''
        || !$entryH1
        || $entryH1->length !== 1
        || $entryCanonical !== $entryUrl
        || $entryRobots === ''
        || stripos($entryRobots, 'noindex') !== false) {
        $globalIssues[] = 'SEO base incoerente em ' . $entryUrl;
    }
    $entrySchemas = $entryXpath->query("//script[@type='application/ld+json']");
    if (!$entrySchemas || $entrySchemas->length === 0) {
        $globalIssues[] = 'Schema ausente em ' . $entryUrl;
    }
}

foreach ($rows as &$row) {
    $row['inbound'] = $row['inbound'] ?? 0;
    if ($row['inbound'] < 1) {
        $row['issues'][] = 'PAGINA_ORFA';
        $row['status'] = 'REVISAR';
    }
}
unset($row);

$duplicates = [
    'titles' => array_filter($titles, static fn (array $urls): bool => count(array_unique($urls)) > 1),
    'descriptions' => array_filter($descriptions, static fn (array $urls): bool => count(array_unique($urls)) > 1),
    'h1' => array_filter($h1s, static fn (array $urls): bool => count(array_unique($urls)) > 1),
    'image_alts' => array_filter($imageAlts, static fn (array $urls): bool => count(array_unique($urls)) > 1),
    'faq_questions' => array_filter($faqQuestions, static fn (array $urls): bool => count(array_unique($urls)) > 1),
    'faq_answers' => array_filter($faqAnswers, static fn (array $urls): bool => count(array_unique($urls)) > 1),
    'content_exact' => array_filter($contentHashes, static fn (array $urls): bool => count(array_unique($urls)) > 1),
    'fragments' => [],
];
foreach ($fragments as $fragment => $urls) {
    $unique = array_values(array_unique($urls));
    if (count($unique) > 1) {
        $duplicates['fragments'][$fragment] = $unique;
    }
}

$similar = [];
$urlsWithShingles = array_keys($shingles);
for ($i = 0, $count = count($urlsWithShingles); $i < $count; $i++) {
    for ($j = $i + 1; $j < $count; $j++) {
        $score = audit_jaccard($shingles[$urlsWithShingles[$i]], $shingles[$urlsWithShingles[$j]]);
        if ($score >= 0.72) {
            $similar[] = [
                'a' => $urlsWithShingles[$i],
                'b' => $urlsWithShingles[$j],
                'jaccard_5gram' => round($score, 4),
            ];
        }
    }
}

$brokenLinks = [];
foreach (array_keys($internalTargets) as $target) {
    $targetResponse = audit_fetch($target);
    if ($targetResponse['status'] < 200 || $targetResponse['status'] >= 400) {
        $brokenLinks[] = ['url' => $target, 'http' => $targetResponse['status']];
    }
}

$sitemapResponse = audit_fetch($base . '/sitemap.xml');
$sitemapUrls = [];
if ($sitemapResponse['status'] === 200 && $sitemapResponse['body'] !== '') {
    $xml = @simplexml_load_string($sitemapResponse['body']);
    if ($xml !== false) {
        foreach ($xml->url as $node) {
            $sitemapUrls[] = trim((string) $node->loc);
        }
    }
}
if (count($sitemapUrls) !== 2 + count($catalog) + $expectedCount) {
    $globalIssues[] = 'Sitemap contém ' . count($sitemapUrls) . ' URLs; esperado: '
        . (2 + count($catalog) + $expectedCount) . '.';
}
if (count($sitemapUrls) !== count(array_unique($sitemapUrls))) {
    $globalIssues[] = 'Sitemap contém URLs duplicadas.';
}
foreach ($rows as $row) {
    if (!in_array($row['url'], $sitemapUrls, true)) {
        $globalIssues[] = 'Landing ausente do sitemap: ' . $row['url'];
    }
}

$robotsResponse = audit_fetch($base . '/robots.txt');
if ($robotsResponse['status'] !== 200
    || !str_contains($robotsResponse['body'], 'Allow: /')
    || !str_contains($robotsResponse['body'], 'Sitemap:')) {
    $globalIssues[] = 'robots.txt ausente ou incoerente.';
}

$missingResponse = audit_fetch($base . '/transporte-executivo/pagina-inexistente/auditoria-seo/');
if ($missingResponse['status'] !== 404) {
    $globalIssues[] = 'URL inexistente retornou ' . $missingResponse['status'] . ' em vez de 404.';
} else {
    $missingParsed = audit_dom($missingResponse['body']);
    $missingRobots = audit_meta($missingParsed['xpath'], 'name', 'robots');
    if (stripos($missingRobots, 'noindex') === false) {
        $globalIssues[] = 'Página 404 sem meta robots noindex.';
    }
    $missingCanonical = audit_first(
        $missingParsed['xpath'],
        "//link[translate(@rel, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz')='canonical']"
    );
    if ($missingCanonical !== null) {
        $globalIssues[] = 'Página 404 publica canonical indevido.';
    }
}

foreach ([
    '/data/cidades/indice.php',
    '/includes/functions.php',
    '/templates/cidade-landing.php',
    '/tools/auditar-landings.php',
    '/config.php',
    '/404.php',
] as $privatePath) {
    $privateResponse = audit_fetch($base . $privatePath);
    if ($privateResponse['status'] !== 404) {
        $globalIssues[] = "Arquivo interno exposto em {$privatePath} (HTTP {$privateResponse['status']}).";
    }
}

foreach ([
    '/index.php' => '/',
    '/sitemap.php' => '/sitemap.xml',
    '/robots.php' => '/robots.txt',
    '/transporte-executivo/index.php' => '/transporte-executivo/',
    '/transporte-executivo/amazonas/index.php' => '/transporte-executivo/amazonas/',
] as $duplicatePath => $canonicalPath) {
    $duplicateResponse = audit_fetch($base . $duplicatePath);
    if ($duplicateResponse['status'] !== 301
        || !audit_location_matches(
            audit_header($duplicateResponse, 'location'),
            $base . $canonicalPath,
            $base . $duplicatePath
        )) {
        $globalIssues[] = "URL PHP duplicada sem redirect correto: {$duplicatePath}.";
    }
}

$apexResponse = audit_fetch($base . '/', ['Host: transporteexecutivo.com']);
if ($apexResponse['status'] !== 301
    || !audit_location_matches(
        audit_header($apexResponse, 'location'),
        'https://www.transporteexecutivo.com/',
        $base . '/'
    )) {
    $globalIssues[] = 'Host sem www não redireciona para o domínio canônico.';
}

$report = [
    'generated_at' => date(DATE_ATOM),
    'round' => $round,
    'base_url' => $base,
    'expected_pages' => $expectedCount,
    'analyzed_pages' => count($rows),
    'summary' => [
        'ok' => count(array_filter($rows, static fn (array $row): bool => $row['status'] === 'OK')),
        'review' => count(array_filter($rows, static fn (array $row): bool => $row['status'] !== 'OK')),
        'http_200' => count(array_filter($rows, static fn (array $row): bool => $row['http'] === 200)),
        'indexable' => count(array_filter($rows, static fn (array $row): bool => $row['robots_status'] === 'OK')),
        'valid_schema' => count(array_filter($rows, static fn (array $row): bool => $row['schema_status'] === 'OK')),
        'broken_internal_links' => count($brokenLinks),
        'orphan_pages' => count(array_filter($rows, static fn (array $row): bool => in_array('PAGINA_ORFA', $row['issues'], true))),
        'duplicate_titles' => count($duplicates['titles']),
        'duplicate_descriptions' => count($duplicates['descriptions']),
        'duplicate_h1' => count($duplicates['h1']),
        'duplicate_image_alts' => count($duplicates['image_alts']),
        'duplicate_faq_questions' => count($duplicates['faq_questions']),
        'duplicate_faq_answers' => count($duplicates['faq_answers']),
        'exact_duplicate_content' => count($duplicates['content_exact']),
        'high_similarity_pairs' => count($similar),
        'duplicate_fragments' => count($duplicates['fragments']),
    ],
    'global_issues' => array_values(array_unique($globalIssues)),
    'duplicates' => $duplicates,
    'similar_content' => $similar,
    'broken_links' => $brokenLinks,
    'rows' => $rows,
];

$directory = dirname($output);
if (!is_dir($directory)) {
    mkdir($directory, 0755, true);
}
file_put_contents($output, json_encode($report, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
file_put_contents($csvOutput, audit_csv($rows));

echo json_encode([
    'round' => $round,
    'report' => $output,
    'csv' => $csvOutput,
    'summary' => $report['summary'],
    'global_issues' => $report['global_issues'],
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL;

exit(
    count($rows) === $expectedCount
    && $report['summary']['http_200'] === $expectedCount
    && $report['summary']['broken_internal_links'] === 0
    && $report['summary']['review'] === 0
    && $report['summary']['duplicate_titles'] === 0
    && $report['summary']['duplicate_descriptions'] === 0
    && $report['summary']['duplicate_h1'] === 0
    && $report['summary']['duplicate_faq_questions'] === 0
    && $report['summary']['duplicate_faq_answers'] === 0
    && $report['summary']['exact_duplicate_content'] === 0
    && $report['summary']['high_similarity_pairs'] === 0
    && $report['summary']['duplicate_fragments'] === 0
    && $report['global_issues'] === []
        ? 0
        : 1
);
