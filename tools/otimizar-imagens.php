<?php

declare(strict_types=1);

$pasta = dirname(__DIR__) . '/assets/images';
$arquivos = glob($pasta . '/*.{jpg,jpeg,png}', GLOB_BRACE) ?: [];

if (!function_exists('imagecreatefromjpeg')) {
    fwrite(STDERR, "GD indisponível. Imagens não foram recompressas.\n");
    exit(1);
}

foreach ($arquivos as $origem) {
    $ext = strtolower(pathinfo($origem, PATHINFO_EXTENSION));
    $src = $ext === 'png' ? imagecreatefrompng($origem) : imagecreatefromjpeg($origem);
    if (!$src) {
        echo "falha {$origem}\n";
        continue;
    }
    $w = imagesx($src);
    $h = imagesy($src);
    $max = 1600;
    if ($w > $max) {
        $nw = $max;
        $nh = (int) round($h * ($max / $w));
        $dst = imagecreatetruecolor($nw, $nh);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $nw, $nh, $w, $h);
        imagedestroy($src);
        $src = $dst;
    }
    $jpg = preg_replace('/\.(png|jpeg)$/i', '.jpg', $origem) ?: $origem;
    imagejpeg($src, $jpg, 78);
    $webp = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $origem);
    if ($webp && function_exists('imagewebp')) {
        imagewebp($src, $webp, 76);
    }
    imagedestroy($src);
    echo 'ok ' . basename($jpg) . ' ' . round(filesize($jpg) / 1024) . " KB\n";
}
