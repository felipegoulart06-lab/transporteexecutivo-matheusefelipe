<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/bootstrap.php';
require_once __DIR__ . '/relatorio.php';

function validar_schema(): array
{
    $r = relatorio_novo();
    $proibidos = ['telephone', 'email', 'address', 'aggregateRating', 'price', 'priceCurrency', 'taxID', 'vatID'];

    foreach (catalogo() as $slug => $_meta) {
        $estado = carregar_estado($slug);
        $blocos = schemas_estado($estado, url_estado($slug));
        $tipos = [];
        foreach ($blocos as $bloco) {
            $json = json_encode($bloco, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            if ($json === false) {
                relatorio_erro($r, $slug, 'JSON-LD inválido');
                continue;
            }
            $dec = json_decode($json, true);
            if (!is_array($dec) || ($dec['@context'] ?? '') !== 'https://schema.org') {
                relatorio_erro($r, $slug, '@context ausente ou inválido');
            }
            $tipo = (string) ($dec['@type'] ?? '');
            $tipos[] = $tipo;
            foreach ($proibidos as $campo) {
                if (array_key_exists($campo, $dec) || isset($dec['provider'][$campo])) {
                    relatorio_erro($r, $slug, "campo comercial perigoso no Schema: {$campo}");
                }
            }
            if ($tipo === 'Service') {
                if (($dec['areaServed']['@type'] ?? '') !== 'AdministrativeArea') {
                    relatorio_erro($r, $slug, 'areaServed deve ser AdministrativeArea');
                }
                if (!isset($dec['areaServed']['geo']['latitude'])) {
                    relatorio_erro($r, $slug, 'geo da área atendida ausente');
                }
                if (isset($dec['areaServed']['address'])) {
                    relatorio_erro($r, $slug, 'endereço comercial na área atendida');
                }
            }
        }
        foreach (['WebPage', 'BreadcrumbList', 'Service'] as $obrigatorio) {
            if (!in_array($obrigatorio, $tipos, true)) {
                relatorio_erro($r, $slug, "Schema {$obrigatorio} ausente");
            }
        }
        if (!empty($estado['faq']) && !in_array('FAQPage', $tipos, true)) {
            relatorio_erro($r, $slug, 'FAQ visível sem FAQPage');
        }
        relatorio_info($r, $slug, implode(', ', $tipos));
    }

    return $r;
}

if (realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === realpath(__FILE__)) {
    exit(relatorio_imprimir('SCHEMA', validar_schema()) > 0 ? 1 : 0);
}
