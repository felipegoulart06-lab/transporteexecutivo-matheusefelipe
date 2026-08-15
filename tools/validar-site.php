<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/bootstrap.php';
require_once __DIR__ . '/relatorio.php';
require_once __DIR__ . '/validar-seo.php';
require_once __DIR__ . '/validar-links.php';
require_once __DIR__ . '/validar-schema.php';

$final = relatorio_novo();
$partes = [
    'SEO' => validar_seo(),
    'LINKS' => validar_links(),
    'SCHEMA' => validar_schema(),
];

echo "VALIDAÇÃO FINAL\n";
echo "===============\n\n";

foreach ($partes as $nome => $bloco) {
    relatorio_imprimir($nome, $bloco);
    $final = relatorio_juntar($final, $bloco);
}

$codigo = count($final['erros']) > 0 ? 1 : 0;
echo $codigo === 0
    ? "RESULTADO: sem ERROR. Páginas podem ser consideradas prontas após análise dos WARNING.\n"
    : "RESULTADO: existem ERROR. Nenhuma página deve ser publicada até correção.\n";

exit($codigo);
