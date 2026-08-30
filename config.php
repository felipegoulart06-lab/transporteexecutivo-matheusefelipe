<?php

declare(strict_types=1);

$https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || ((string) ($_SERVER['SERVER_PORT'] ?? '') === '443')
    || ((string) ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
$host = (string) ($_SERVER['HTTP_HOST'] ?? 'localhost:8000');
$ambiente = getenv('APP_ENV') ?: '';
$producao = $ambiente === 'production'
    || getenv('VERCEL_ENV') === 'production';
$dominioOficial = getenv('APP_URL') ?: '';
if ($producao && $dominioOficial === '') {
    $dominioOficial = 'https://www.transporteexecutivo.com';
}

if ($dominioOficial !== '') {
    $url = rtrim($dominioOficial, '/');
} else {
    $url = ($https ? 'https' : 'http') . '://' . $host;
}

return [
    'marca' => 'Transporte',
    'nome' => 'Transporte Executivo',
    'descricao_padrao' => 'Transporte executivo privado com motorista, sob consulta, em unidades da federação de todo o Brasil.',
    'url' => $url,
    'locale' => 'pt_BR',
    'imagem_og_padrao' => '/assets/images/hero-transporte.jpg',
    'robots_default' => 'index, follow',
    'producao' => $producao,
    'supabase_url' => getenv('SUPABASE_URL') ?: 'https://lsfwmbpvithxqerfdlhy.supabase.co',
    'supabase_publishable_key' => getenv('SUPABASE_PUBLISHABLE_KEY') ?: 'sb_publishable_Zjd3lIFnyCdvsFaVHF9F8Q_1I3XasZ0',
];
