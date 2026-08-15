<?php

declare(strict_types=1);

function config(?string $chave = null, mixed $padrao = null): mixed
{
    static $cfg = null;
    if ($cfg === null) {
        $cfg = require dirname(__DIR__) . '/config.php';
    }
    if ($chave === null) {
        return $cfg;
    }
    return $cfg[$chave] ?? $padrao;
}

function e(mixed $valor): string
{
    return htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8');
}

function url_site(string $caminho = ''): string
{
    $base = rtrim((string) config('url'), '/');
    $caminho = '/' . ltrim($caminho, '/');
    if ($caminho === '/') {
        return $base . '/';
    }
    return $base . $caminho;
}

function url_estado(string $slug): string
{
    return url_site('transporte-executivo/' . $slug . '/');
}

function slugify(string $texto): string
{
    $mapa = [
        'Á'=>'a','À'=>'a','Ã'=>'a','Â'=>'a','Ä'=>'a','á'=>'a','à'=>'a','ã'=>'a','â'=>'a','ä'=>'a',
        'É'=>'e','È'=>'e','Ê'=>'e','Ë'=>'e','é'=>'e','è'=>'e','ê'=>'e','ë'=>'e',
        'Í'=>'i','Ì'=>'i','Î'=>'i','Ï'=>'i','í'=>'i','ì'=>'i','î'=>'i','ï'=>'i',
        'Ó'=>'o','Ò'=>'o','Õ'=>'o','Ô'=>'o','Ö'=>'o','ó'=>'o','ò'=>'o','õ'=>'o','ô'=>'o','ö'=>'o',
        'Ú'=>'u','Ù'=>'u','Û'=>'u','Ü'=>'u','ú'=>'u','ù'=>'u','û'=>'u','ü'=>'u',
        'Ç'=>'c','ç'=>'c','Ñ'=>'n','ñ'=>'n',
    ];
    $s = strtr($texto, $mapa);
    $s = strtolower($s);
    $s = preg_replace('/[^a-z0-9]+/', '-', $s) ?? '';
    return trim($s, '-');
}

function tipos_servico(): array
{
    return [
        'pessoas' => 'Transporte de pessoas',
        'objetos-de-valor' => 'Transporte de objetos de valor',
    ];
}

function url_cidade(string $estadoSlug, string $cidadeSlug, string $tipo): string
{
    return url_site('transporte-executivo/' . $estadoSlug . '/' . $cidadeSlug . '/' . $tipo . '/');
}

function url_orcamento(?string $uf = null, ?string $slug = null): string
{
    if ($slug !== null && slug_permitido($slug)) {
        return url_estado($slug) . '#orcamento';
    }
    return url_site($uf ? '?estado=' . rawurlencode($uf) . '#orcamento' : '#orcamento');
}

function slug_permitido(string $slug): bool
{
    return (bool) preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $slug)
        && isset(catalogo()[$slug]);
}

function uf_permitida(string $uf): bool
{
    $uf = strtoupper($uf);
    foreach (catalogo() as $item) {
        if ($item['uf'] === $uf) {
            return true;
        }
    }
    return false;
}

function slug_por_uf(string $uf): ?string
{
    $uf = strtoupper($uf);
    foreach (catalogo() as $slug => $item) {
        if ($item['uf'] === $uf) {
            return $slug;
        }
    }
    return null;
}

function campo(string $chave): string
{
    return trim((string) ($_POST[$chave] ?? ''));
}

function schema_organization(): array
{
    return [
        '@type' => 'Organization',
        'name' => (string) config('nome'),
        'url' => url_site(),
    ];
}

function url_imagem(string $arquivo, string $ext = 'jpg'): string
{
    $base = pathinfo($arquivo, PATHINFO_FILENAME);
    return 'assets/images/' . $base . '.' . $ext;
}

function arquivo_imagem_existe(string $arquivo, string $ext = 'jpg'): bool
{
    return is_file(dirname(__DIR__) . '/' . url_imagem($arquivo, $ext));
}

function catalogo(): array
{
    static $lista = null;
    if ($lista === null) {
        $lista = require dirname(__DIR__) . '/data/catalogo.php';
    }
    return $lista;
}

function carregar_estado(string $slug): array
{
    if (!slug_permitido($slug)) {
        http_response_code(404);
        require dirname(__DIR__) . '/404.php';
        exit;
    }
    $arquivo = dirname(__DIR__) . '/data/estados/' . $slug . '.php';
    if (!is_file($arquivo)) {
        http_response_code(404);
        require dirname(__DIR__) . '/404.php';
        exit;
    }
    $dados = require $arquivo;
    return array_merge(catalogo()[$slug], $dados, ['slug' => $slug]);
}

function schemas_estado(array $estado, string $canonical): array
{
    $blocos = [
        [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            'name' => $estado['seo']['title'],
            'description' => $estado['seo']['description'],
            'url' => $canonical,
            'inLanguage' => 'pt-BR',
            'isPartOf' => ['@type' => 'WebSite', 'name' => config('nome'), 'url' => url_site()],
        ],
        [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Início', 'item' => url_site()],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Transporte Executivo', 'item' => url_site('transporte-executivo/')],
                ['@type' => 'ListItem', 'position' => 3, 'name' => $estado['nome'], 'item' => $canonical],
            ],
        ],
        [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => $estado['schema_service_name'],
            'description' => $estado['seo']['description'],
            'serviceType' => 'Transporte executivo',
            'provider' => schema_organization(),
            'url' => $canonical,
            'areaServed' => [
                '@type' => 'AdministrativeArea',
                'name' => $estado['nome'],
                'geo' => [
                    '@type' => 'GeoCoordinates',
                    'latitude' => $estado['geo']['lat'],
                    'longitude' => $estado['geo']['lng'],
                ],
            ],
        ],
    ];

    if (!empty($estado['faq'])) {
        $blocos[] = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array_map(static function (array $faq): array {
                return [
                    '@type' => 'Question',
                    'name' => $faq['pergunta'],
                    'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['resposta']],
                ];
            }, $estado['faq']),
        ];
    }

    return $blocos;
}

function estados_por_regiao(): array
{
    $grupos = [];
    foreach (catalogo() as $slug => $item) {
        $grupos[$item['regiao']][] = $item + ['slug' => $slug];
    }
    return $grupos;
}

function comprimento_visivel(string $texto): int
{
    $texto = trim($texto);
    if (function_exists('mb_strlen')) {
        return mb_strlen($texto);
    }
    preg_match_all('/./us', $texto, $m);
    return count($m[0]);
}
