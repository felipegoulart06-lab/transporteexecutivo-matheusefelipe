<?php

declare(strict_types=1);

/** @var array $schemas */
$schemas = $schemas ?? [];
foreach ($schemas as $bloco) {
    echo '<script type="application/ld+json">' . json_encode(
        $bloco,
        JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT
    ) . "</script>\n";
}
