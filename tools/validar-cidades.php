<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/functions.php';
require_once dirname(__DIR__) . '/tools/relatorio.php';

function validar_cidades(): array
{
    $r = relatorio_novo();
    $titles = [];
    $descriptions = [];
    $h1s = [];
    $proibidos = '/filial própria|garagem própria|motorista residente|base operacional|CNPJ \d|atendimento 24 horas|frota própria de \d/iu';
    $layouts = [];

    foreach (indice_cidades() as $item) {
        $chave = $item['estado'] . '/' . $item['cidade'];
        $arquivo = dirname(__DIR__) . '/data/cidades/' . $item['estado'] . '/' . $item['cidade'] . '.php';

        if (!is_file($arquivo)) {
            relatorio_erro($r, $chave, 'arquivo de dados ausente');
            continue;
        }

        $dados = require $arquivo;
        $title = trim((string) ($dados['seo']['title'] ?? ''));
        $desc = trim((string) ($dados['seo']['description'] ?? ''));
        $h1 = trim((string) ($dados['h1'] ?? ''));
        $layout = (string) ($dados['layout'] ?? '');

        if ($layout === '' || !is_file(dirname(__DIR__) . '/templates/cidades/' . $layout . '.php')) {
            relatorio_erro($r, $chave, 'layout ausente');
        } else {
            $layouts[$layout][] = $chave;
        }

        if ($title === '') {
            relatorio_erro($r, $chave, 'title ausente');
        } else {
            $nt = comprimento_visivel($title);
            if ($nt < 45 || $nt > 65) {
                relatorio_aviso($r, $chave, "title {$nt} caracteres");
            }
            $k = strtolower($title);
            if (isset($titles[$k])) {
                relatorio_erro($r, $chave, 'title duplicado');
            }
            $titles[$k] = $chave;
        }

        if ($desc === '') {
            relatorio_erro($r, $chave, 'description ausente');
        } else {
            $nd = comprimento_visivel($desc);
            if ($nd < 130 || $nd > 170) {
                relatorio_aviso($r, $chave, "description {$nd} caracteres");
            }
            $k = strtolower($desc);
            if (isset($descriptions[$k])) {
                relatorio_erro($r, $chave, 'description duplicada');
            }
            $descriptions[$k] = $chave;
        }

        if ($h1 === '' || preg_match('/^transporte executivo em /iu', $h1)) {
            relatorio_erro($r, $chave, 'H1 ausente ou genérico');
        } else {
            $k = strtolower($h1);
            if (isset($h1s[$k])) {
                relatorio_erro($r, $chave, 'H1 duplicado');
            }
            $h1s[$k] = $chave;
        }

        if (count($dados['faq'] ?? []) < 4) {
            relatorio_erro($r, $chave, 'menos de 4 FAQ');
        }
        if (count($dados['relacionados'] ?? []) < 2) {
            relatorio_erro($r, $chave, 'menos de 2 relacionados');
        }

        $blob = json_encode($dados, JSON_UNESCAPED_UNICODE) ?: '';
        if (preg_match($proibidos, $blob)) {
            relatorio_erro($r, $chave, 'claim comercial proibido');
        }
    }

    if (count(indice_cidades()) !== 37) {
        relatorio_aviso($r, 'lote', 'índice com ' . count(indice_cidades()) . ' cidades (alvo: 37)');
    }

    return $r;
}

if (PHP_SAPI === 'cli' && realpath((string) ($_SERVER['SCRIPT_FILENAME'] ?? '')) === __FILE__) {
    exit(relatorio_imprimir('Cidades capitais', validar_cidades()) > 0 ? 1 : 0);
}
