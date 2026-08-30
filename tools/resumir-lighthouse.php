<?php

declare(strict_types=1);

$directory = $argv[1] ?? dirname(__DIR__) . '/reports/lighthouse-round-1';
$output = $argv[2] ?? rtrim($directory, '/\\') . '-summary.json';
$files = glob(rtrim($directory, '/\\') . '/*.json') ?: [];
$summary = [];

foreach ($files as $file) {
    $report = json_decode((string) file_get_contents($file), true);
    if (!is_array($report) || !isset($report['categories'], $report['audits'])) {
        continue;
    }

    $categories = [];
    foreach (['performance', 'accessibility', 'best-practices', 'seo'] as $category) {
        $score = $report['categories'][$category]['score'] ?? null;
        $categories[$category] = is_numeric($score) ? (int) round($score * 100) : null;
    }

    $metrics = [];
    foreach ([
        'first-contentful-paint' => 'fcp_ms',
        'largest-contentful-paint' => 'lcp_ms',
        'total-blocking-time' => 'tbt_ms',
        'cumulative-layout-shift' => 'cls',
        'speed-index' => 'speed_index_ms',
    ] as $auditId => $name) {
        $value = $report['audits'][$auditId]['numericValue'] ?? null;
        $metrics[$name] = is_numeric($value) ? round((float) $value, 3) : null;
    }

    $failures = [];
    foreach ($report['audits'] as $auditId => $audit) {
        $mode = $audit['scoreDisplayMode'] ?? '';
        $score = $audit['score'] ?? null;
        if (in_array($mode, ['informative', 'manual', 'notApplicable'], true)
            || !is_numeric($score) || $score >= 0.9) {
            continue;
        }
        $failures[] = [
            'id' => $auditId,
            'title' => $audit['title'] ?? $auditId,
            'score' => round((float) $score, 3),
            'display_value' => $audit['displayValue'] ?? null,
        ];
    }

    $summary[pathinfo($file, PATHINFO_FILENAME)] = [
        'url' => $report['finalDisplayedUrl'] ?? $report['finalUrl'] ?? '',
        'categories' => $categories,
        'metrics' => $metrics,
        'failures' => $failures,
    ];
}

ksort($summary);
$payload = [
    'generated_at' => date(DATE_ATOM),
    'reports' => count($summary),
    'pages' => $summary,
];

file_put_contents(
    $output,
    json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
);
echo json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL;

exit(count($summary) === 0 ? 1 : 0);
