<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/bootstrap.php';
require_once __DIR__ . '/relatorio.php';

function validar_seo(): array
{
    $r = relatorio_novo();
    $titles = [];
    $descriptions = [];
    $h1s = [];
    $paragrafos = [];
    $faqs = [];
    $proibidos = '/filial própria|garagem própria|motorista residente|base operacional|CNPJ \d|atendimento 24 horas|frota própria de \d/iu';

    foreach (catalogo() as $slug => $meta) {
        $arquivo = dirname(__DIR__) . '/data/estados/' . $slug . '.php';
        $wrapper = dirname(__DIR__) . '/transporte-executivo/' . $slug . '/index.php';

        if (!is_file($arquivo)) {
            relatorio_erro($r, $slug, 'arquivo de dados ausente');
            continue;
        }
        if (!is_file($wrapper)) {
            relatorio_erro($r, $slug, 'wrapper ausente');
        } else {
            $php = (string) file_get_contents($wrapper);
            if (str_contains($php, '<html') || str_contains($php, '<h1')) {
                relatorio_erro($r, $slug, 'wrapper não é fino');
            }
        }

        $dados = require $arquivo;
        $title = trim((string) ($dados['seo']['title'] ?? ''));
        $desc = trim((string) ($dados['seo']['description'] ?? ''));
        $h1 = trim((string) ($dados['h1'] ?? ''));

        if ($title === '') {
            relatorio_erro($r, $slug, 'title ausente');
        } else {
            $nt = comprimento_visivel($title);
            if ($nt > 70) {
                relatorio_aviso($r, $slug, "title longo ({$nt} caracteres)");
            }
            $k = mb_strtolower_safe($title);
            if (isset($titles[$k])) {
                relatorio_erro($r, $slug, 'title duplicado com ' . $titles[$k]);
            }
            $titles[$k] = $slug;
        }

        if ($desc === '') {
            relatorio_erro($r, $slug, 'description ausente');
        } else {
            $nd = comprimento_visivel($desc);
            if ($nd < 80) {
                relatorio_aviso($r, $slug, "description curta ({$nd})");
            }
            if ($nd > 180) {
                relatorio_aviso($r, $slug, "description longa ({$nd})");
            }
            $k = mb_strtolower_safe($desc);
            if (isset($descriptions[$k])) {
                relatorio_erro($r, $slug, 'description duplicada com ' . $descriptions[$k]);
            }
            $descriptions[$k] = $slug;
        }

        if ($h1 === '') {
            relatorio_erro($r, $slug, 'H1 ausente');
        } elseif (preg_match('/^transporte executivo em /iu', $h1)) {
            relatorio_erro($r, $slug, 'H1 genérico (fórmula proibida)');
        } else {
            $k = mb_strtolower_safe($h1);
            if (isset($h1s[$k])) {
                relatorio_erro($r, $slug, 'H1 duplicado com ' . $h1s[$k]);
            }
            $h1s[$k] = $slug;
        }

        $cidades = $dados['cidades']['itens'] ?? [];
        if (count($cidades) < 3) {
            relatorio_erro($r, $slug, 'menos de 3 cidades com H3');
        }
        foreach ($cidades as $cidade) {
            if (comprimento_visivel((string) ($cidade['texto'] ?? '')) < 40) {
                relatorio_aviso($r, $slug, 'cidade com texto insuficiente: ' . ($cidade['h3'] ?? ''));
            }
        }

        if (count($dados['aeroportos']['itens'] ?? []) < 1) {
            relatorio_erro($r, $slug, 'nenhum aeroporto');
        }
        $faq = $dados['faq'] ?? [];
        if (count($faq) < 4) {
            relatorio_aviso($r, $slug, 'menos de 4 FAQs');
        }
        foreach ($faq as $item) {
            $k = mb_strtolower_safe((string) ($item['pergunta'] ?? ''));
            if ($k !== '' && isset($faqs[$k])) {
                relatorio_erro($r, $slug, 'FAQ idêntico ao de ' . $faqs[$k]);
            }
            $faqs[$k] = $slug;
        }

        if (count($dados['ancoras_relacionadas'] ?? []) < 2) {
            relatorio_erro($r, $slug, 'menos de 2 links internos');
        }
        if (empty($dados['seo']['og_image_alt']) || empty($dados['secao_estado']['imagem_alt'])) {
            relatorio_erro($r, $slug, 'alt de imagem ausente');
        }
        if (!isset($meta['geo']['lat'], $meta['geo']['lng'])) {
            relatorio_erro($r, $slug, 'coordenadas da área atendida ausentes');
        }

        $texto = json_encode($dados, JSON_UNESCAPED_UNICODE) ?: '';
        if (preg_match($proibidos, $texto)) {
            relatorio_erro($r, $slug, 'possível informação comercial inventada');
        }

        foreach ($dados['intro'] ?? [] as $p) {
            $k = mb_strtolower_safe($p);
            if (isset($paragrafos[$k])) {
                relatorio_erro($r, $slug, 'parágrafo idêntico ao de ' . $paragrafos[$k]);
            }
            $paragrafos[$k] = $slug;
        }

        relatorio_info($r, $slug, count($cidades) . ' cidades · ' . count($faq) . ' FAQ · ' . count($meta['relacionados'] ?? []) . ' relacionados');
    }

    return $r;
}

function mb_strtolower_safe(string $t): string
{
    return function_exists('mb_strtolower') ? mb_strtolower(trim($t)) : strtolower(trim($t));
}

if (realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === realpath(__FILE__)) {
    exit(relatorio_imprimir('SEO', validar_seo()) > 0 ? 1 : 0);
}
