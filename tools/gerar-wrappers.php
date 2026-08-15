<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/bootstrap.php';

$raiz = dirname(__DIR__) . '/transporte-executivo';
$conteudo = <<<'PHP'
<?php

declare(strict_types=1);

$slug = '%s';
require dirname(__DIR__, 2) . '/templates/estado.php';
PHP;

foreach (array_keys(catalogo()) as $slug) {
    $pasta = $raiz . '/' . $slug;
    if (!is_dir($pasta) && !mkdir($pasta, 0755, true) && !is_dir($pasta)) {
        fwrite(STDERR, "Falha ao criar {$pasta}\n");
        continue;
    }
    file_put_contents($pasta . '/index.php', sprintf($conteudo, $slug));
    echo "ok {$slug}\n";
}
