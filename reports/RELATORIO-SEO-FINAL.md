# Relatório final — 3 rodadas de SEO

Gerado em 29/08/2026. Escopo: 170 landing pages PHP de cidade, 27 páginas de unidade da federação, home, hub, rotas auxiliares e persistência do formulário.

## 1 — Resumo executivo

- Páginas totais de cidade: 170
- Páginas analisadas em cada crawl integral: 170
- Páginas com HTTP 200 no teste final: 170
- Páginas indexáveis no teste final: 170
- Páginas com metadata, canonical e H1 válidos: 170
- Páginas com schema coerente: 170
- Páginas órfãs: 0
- Links internos quebrados: 0
- Duplicações finais de title, description, H1, FAQ, fragmento ou conteúdo exato: 0
- Datasets de cidade corrigidos: 145
- Pendências críticas no código auditado: 0

Os achados tinham sobreposição entre verificações, portanto não existe uma soma única tecnicamente honesta. As medidas objetivas foram: 34 grupos de fragmentos no primeiro crawler; 103 grupos/444 ocorrências na análise de campos; mais 1 FAQ curta/2 ocorrências; e correções finais cirúrgicas de semântica, factualidade, acessibilidade, segurança, rotas e performance.

## 2 — Rodada 1

- Inventário confirmou 170 landings e 199 URLs no sitemap (home + hub + 27 UFs + 170 cidades).
- Corrigidos renderização invisível/NO_FCP, sessões desnecessárias nas landings, canonical e barra final.
- Implementados AVIF/WebP, `srcset`, `sizes`, dimensões, prioridade da imagem LCP e lazy loading abaixo da dobra.
- Fontes passaram a ser locais; CSS e JavaScript passaram a usar bundles minificados.
- Reforçados metadata, Open Graph, Twitter Cards, WebPage, WebSite, Organization, Service, FAQPage e BreadcrumbList.
- Corrigidos sitemap dinâmico, robots, rotas legadas, 404 reais e bloqueio de arquivos PHP internos.
- O crawler integral encontrou 34 grupos de fragmentos repetidos; nenhum title, description ou H1 duplicado.

Artefatos: `seo-round-1.json`, `seo-round-1.csv`, `lighthouse-round-1/` e `lighthouse-round-1-summary.json`.

## 3 — Rodada 2

- Reauditoria independente do HTML, PHP, schema, conteúdo, links, imagens, segurança, mobile e performance.
- A análise de campos encontrou 103 grupos repetidos em 145 arquivos, totalizando 444 substituições contextualizadas.
- Uma FAQ curta que ficava abaixo do limiar inicial foi detectada pelo crawler corrigido e diferenciada em mais 2 ocorrências.
- Corrigidos falsos positivos de `Location` absoluto/relativo e o código de saída do auditor.
- Adicionadas verificações de FAQ, acessibilidade de nomes, headings, IDs, formatos modernos, dimensões, páginas órfãs, arquivos internos e redirects PHP.

Resultado depois da correção: 170 OK, 170 HTTP 200, 170 indexáveis, 170 schemas válidos, 0 links quebrados, 0 órfãs e 0 duplicações.

Artefatos: `seo-round-2.json` e `seo-round-2.csv`.

## 4 — Rodada 3

- Nova inspeção independente técnica, de conteúdo, performance/UX e segurança.
- Corrigida a contradição que associava a fábrica da Fiat a Contagem; Betim e Contagem agora têm recortes coerentes.
- Diferenciados protocolos Palhoça/São José, CTAs Betim/Contagem e respostas de voo/portaria/roteiro excessivamente padronizadas.
- Corrigidos contraste, alvos de toque, foco do chat, menu mobile, estado/cidade, fallback sem JavaScript e descrição acessível do diálogo.
- Adicionados preload responsivo da imagem LCP e canonical ausente em 404.
- Implementados redirect do domínio sem `www`, paridade de redirects `index.php`, HSTS em produção e remoção do Host header como fonte de ambiente.
- O RPC do Supabase recebeu validação real de data/horário, normalização, limite global, limite por hash, limite por e-mail/WhatsApp, timeout e três índices parciais. RLS permaneceu ativo.

Resultado final do crawler: 170 OK, 0 itens em revisão, 0 problemas globais e 0 duplicações em todas as categorias verificadas.

Lighthouse final em 12 páginas representativas (home, UF e 10 layouts):

- Performance: 99–100
- Acessibilidade: 100 em 12/12
- Boas práticas: 100 em 12/12
- SEO: 100 em 12/12
- TBT: 0 ms em 12/12
- Maior CLS observado: 0,064
- Maior LCP observado: aproximadamente 1,82 s

Artefatos: `seo-round-3.json`, `seo-round-3.csv`, `lighthouse-round-3/` e `lighthouse-round-3-summary.json`.

## 5 — Status das 170 páginas

A tabela completa obrigatória está em:

- `reports/seo-round-3.csv`
- `reports/seo-round-3.json`

O CSV contém as 170 linhas e as colunas `URL, HTTP, TITLE, DESCRIPTION, H1, CANONICAL, ROBOTS, SCHEMA, LINKS, STATUS, ISSUES`. Todas as 170 linhas terminaram com HTTP 200 e status OK.

## 6 — Arquivos modificados

O diff final contém 184 arquivos rastreados modificados e 1 removido:

- 145 datasets em `data/cidades/<estado>/<cidade>.php`
- `.gitignore`, `.htaccess`, `404.php`, `config.php`, `index.php`, `router.php`, `vercel.json`
- `api/index.php`, `api/localidades.php`
- `assets/css/app.css`
- `assets/js/app.js`, `assets/js/atendente.js`, `assets/js/gate.js`
- `includes/bootstrap.php`, `includes/faq.php`, `includes/footer.php`, `includes/formulario.php`, `includes/functions.php`, `includes/header.php`, `includes/orcamento.php`, `includes/seo.php`
- `robots.php`, `robots.txt`, `sitemap.php`
- `templates/cidade-landing.php`, `templates/cidade.php`, `templates/estado.php`, `templates/hub.php`
- os 10 arquivos em `templates/cidades/`
- `tools/validar-links.php`
- removido: `sitemap.xml` estático e desatualizado

## 7 — Arquivos criados

- `assets/css/app.min.css`
- `assets/js/app.min.js`, `assets/js/atendente.min.js`, `assets/js/gate.min.js`, `assets/js/orcamento.min.js`
- quatro fontes Poppins WOFF2 em `assets/fonts/`
- variantes AVIF/WebP de 800 e 1536 px para seis imagens
- `tools/auditar-landings.php`
- `tools/diferenciar-conteudo.php`
- `tools/resumir-lighthouse.php`
- `supabase/migrations/20260830020500_add_transporte_executivo_quote_rpc.sql`
- `supabase/migrations/20260830024000_harden_transporte_quote_rate_limits.sql`
- relatórios JSON/CSV das três rodadas e 26 relatórios Lighthouse individuais

## 8 — Testes executados

- Lint PHP de 176 arquivos alterados: sem erro de sintaxe.
- `php tools/validar-site.php`: 0 erros e 0 avisos.
- `php tools/validar-cidades.php`: 0 erros e 0 avisos.
- `php tools/diferenciar-conteudo.php`: 0 grupos duplicados restantes.
- Crawls completos das rodadas 1, 2 e 3.
- Testes de 200/301/404, trailing slash, URLs legadas, arquivos internos, domínio sem `www`, sitemap, robots e headers.
- Validação de 199 URLs no sitemap.
- Validação de JSON-LD e URLs internas dos schemas.
- Lighthouse mobile em 12 tipos de página.
- O Edge/Lighthouse emitiu `EPERM` ao apagar alguns diretórios temporários depois da coleta; os 12 JSONs foram gravados, validados e agregados normalmente.
- `git diff --check`: sem erro de whitespace.
- Diagnósticos do editor nos arquivos centrais: sem erro.
- Migração remota Supabase aplicada e verificada: função `security definer` com `search_path`, timeout de 5 s, RLS ativo e três índices presentes.
- Chamada anônima válida do RPC executada dentro de transação e revertida; confirmação posterior encontrou 0 linhas de teste retidas.

## 9 — Pendências e itens não aplicáveis

- Deploy/produção: a última implementação está no working tree; a verificação do domínio público depende de publicar esta versão.
- Search Console, inspeção de URL, cobertura real do Google e Core Web Vitals de campo: dependem de acesso externo e tráfego real; não podem ser simulados pelo teste local.
- INP de campo: não aplicável a Lighthouse de laboratório; TBT foi 0 ms nas 12 amostras.
- Cache público do HTML das páginas de UF: não aplicado porque o formulário contém token CSRF vinculado à sessão. Publicar esse HTML no CDN vazaria token/cookie entre usuários. Assets e landings sem formulário permanecem cacheados.
- CSS crítico continua bloqueante por decisão técnica: carregamento assíncrono criaria FOUC/CLS e conflito com a CSP. O bundle é minificado e o Lighthouse final permaneceu em 99–100.
- O endpoint de orçamento é necessariamente público para receber usuários anônimos. O abuso foi reduzido com validação e três camadas de rate limit; eliminação total exigiria CAPTCHA/Turnstile ou uma credencial privada configurada no ambiente.
