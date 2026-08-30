<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/functions.php';

$indice = require dirname(__DIR__) . '/data/cidades/indice.php';
$layouts = [
    'eixo' => ['lead', 'contexto', 'bairros', 'aeroportos', 'rotas', 'como', 'faq_h2', 'faq', 'cta'],
    'orla' => ['epigrafe', 'abertura', 'faixas', 'aeroportos', 'protocolo', 'faq_h2', 'faq', 'cta'],
    'protocolo' => ['preambulo', 'artigos', 'pauta', 'faq_h2', 'faq', 'cta'],
    'malha' => ['intro', 'blocos', 'grade', 'faq_h2', 'faq', 'cta'],
    'baia' => ['faixas', 'faq_h2', 'faq', 'cta'],
    'dunas' => ['trilha', 'chips', 'historias', 'faq_h2', 'faq', 'cta'],
    'gaucha' => ['coluna', 'lateral', 'faixa', 'faq_h2', 'faq', 'cta'],
    'mare' => ['editorial', 'coluna_a', 'coluna_b', 'faq_h2', 'faq', 'cta'],
    'rio' => ['corrente', 'faq_h2', 'faq', 'cta'],
    'serra' => ['olho', 'capitulos', 'passos', 'faq_h2', 'faq', 'cta'],
];

$genericas = [
    'a cidade possui hotéis',
    'conforto, segurança e pontualidade',
    'oferecemos conforto',
    'solicite agora',
    'melhor preço',
    'líder de mercado',
    'garantimos',
    'provavelmente',
    'aparentemente',
    'segundo informações encontradas',
];

$issues = [];
$titles = [];
$descs = [];
$h1s = [];
$faqsP = [];
$faqsR = [];
$dossiesOk = 0;

foreach ($indice as $item) {
    $estado = $item['estado'];
    $cidade = $item['cidade'];
    $slug = $estado . '/' . $cidade;
    $arquivo = dirname(__DIR__) . '/data/cidades/' . $estado . '/' . $cidade . '.php';
    $dossie = dirname(__DIR__) . '/data/dossies/' . $estado . '/' . $cidade . '.json';
    $dados = require $arquivo;
    $layout = (string) ($dados['layout'] ?? '');

    if (!is_file($dossie)) {
        $issues[] = [$slug, 'DOSSIE_AUSENTE'];
    } else {
        $dossiesOk++;
        $json = json_decode((string) file_get_contents($dossie), true);
        if (!is_array($json)) {
            $issues[] = [$slug, 'DOSSIE_JSON_INVALIDO'];
        }
    }

    foreach (['layout', 'cidade_nome', 'geo', 'imagem', 'schema_service_name', 'seo', 'kicker', 'h1', 'relacionados'] as $chave) {
        if (!isset($dados[$chave])) {
            $issues[] = [$slug, 'CHAVE_AUSENTE:' . $chave];
        }
    }

    foreach ($layouts[$layout] ?? ['LAYOUT_DESCONHECIDO'] as $chave) {
        if (!isset($dados[$chave])) {
            $issues[] = [$slug, 'LAYOUT_CHAVE_AUSENTE:' . $chave];
        }
    }

    $title = (string) ($dados['seo']['title'] ?? '');
    $desc = (string) ($dados['seo']['description'] ?? '');
    $h1 = (string) ($dados['h1'] ?? '');
    $lenT = comprimento_visivel($title);
    $lenD = comprimento_visivel($desc);
    if ($lenT < 45 || $lenT > 65) {
        $issues[] = [$slug, 'TITLE_FAIXA:' . $lenT];
    }
    if ($lenD < 130 || $lenD > 170) {
        $issues[] = [$slug, 'DESC_FAIXA:' . $lenD];
    }
    if ($title === $h1) {
        $issues[] = [$slug, 'TITLE_IGUAL_H1'];
    }
    if (($dados['seo']['og_title'] ?? '') === $title) {
        $issues[] = [$slug, 'OG_IGUAL_TITLE'];
    }

    $titles[$title][] = $slug;
    $descs[$desc][] = $slug;
    $h1s[$h1][] = $slug;

    $texto = strtolower(json_encode($dados, JSON_UNESCAPED_UNICODE) ?: '');
    foreach ($genericas as $g) {
        if (str_contains($texto, $g)) {
            $issues[] = [$slug, 'GENERICO:' . $g];
        }
    }

    foreach ($dados['faq'] ?? [] as $faq) {
        $faqsP[(string) $faq['pergunta']][] = $slug;
        $faqsR[(string) $faq['resposta']][] = $slug;
    }
}

$dup = static function (array $mapa, string $tipo) use (&$issues): void {
    foreach ($mapa as $valor => $slugs) {
        if ($valor !== '' && count($slugs) > 1) {
            $issues[] = [implode(',', $slugs), 'DUPLICADO_' . $tipo];
        }
    }
};
$dup($titles, 'TITLE');
$dup($descs, 'DESC');
$dup($h1s, 'H1');
$dup($faqsP, 'FAQ_P');
$dup($faqsR, 'FAQ_R');

$relatorio = [
    'paginas' => count($indice),
    'dossies' => $dossiesOk,
    'issues' => $issues,
    'ok' => $issues === [],
];

$saida = dirname(__DIR__) . '/reports/redacao-validacao.json';
file_put_contents($saida, json_encode($relatorio, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
fwrite(STDOUT, count($indice) . ' páginas, ' . $dossiesOk . ' dossiês, ' . count($issues) . " issues\n");
exit($issues === [] ? 0 : 1);
