# Especificação mestra — Transporte Executivo

Documento de implementação. Nenhuma página estadual é considerada pronta só porque o texto foi gerado. A página só fecha depois do checklist técnico.

## 1. Arquitetura PHP

Uma empresa, um template, 26 estados + Distrito Federal (mercado executivo relevante; DF não é estado, mas tem URL própria).

```
/
├── index.php                          # Home + formulário de orçamento
├── robots.txt
├── sitemap.php                        # XML dinâmico
├── 404.php
├── config.php
├── includes/
│   ├── bootstrap.php
│   ├── functions.php
│   ├── header.php
│   ├── footer.php
│   ├── breadcrumb.php
│   ├── seo.php
│   ├── schema.php
│   ├── faq.php
│   ├── service-card.php
│   └── estados-cidades.php            # cidades do formulário
├── data/
│   ├── catalogo.php                   # índice de slugs
│   └── estados/{slug}.php             # dados exclusivos
├── templates/
│   ├── estado.php                     # template único das páginas estaduais
│   └── hub.php                        # /transporte-executivo/
├── transporte-executivo/
│   ├── index.php
│   └── {slug}/index.php               # wrapper fino (só define $slug)
├── assets/
│   ├── css/app.css
│   ├── js/app.js
│   └── images/
└── tools/
    └── validar-seo.php
```

Proibido: 26 HTML/PHP independentes com markup diferente.

## 2. URLs

Padrão: `/transporte-executivo/{slug}/`

Slugs oficiais (sem acento, hífen, minúsculo):

| UF | Slug | Nome |
|----|------|------|
| AC | acre | Acre |
| AL | alagoas | Alagoas |
| AP | amapa | Amapá |
| AM | amazonas | Amazonas |
| BA | bahia | Bahia |
| CE | ceara | Ceará |
| DF | distrito-federal | Distrito Federal |
| ES | espirito-santo | Espírito Santo |
| GO | goias | Goiás |
| MA | maranhao | Maranhão |
| MT | mato-grosso | Mato Grosso |
| MS | mato-grosso-do-sul | Mato Grosso do Sul |
| MG | minas-gerais | Minas Gerais |
| PA | para | Pará |
| PB | paraiba | Paraíba |
| PR | parana | Paraná |
| PE | pernambuco | Pernambuco |
| PI | piaui | Piauí |
| RJ | rio-de-janeiro | Rio de Janeiro |
| RN | rio-grande-do-norte | Rio Grande do Norte |
| RS | rio-grande-do-sul | Rio Grande do Sul |
| RO | rondonia | Rondônia |
| RR | roraima | Roraima |
| SC | santa-catarina | Santa Catarina |
| SP | sao-paulo | São Paulo |
| SE | sergipe | Sergipe |
| TO | tocantins | Tocantins |

Hub: `/transporte-executivo/`
Home: `/`
Orçamento: `/#orcamento` (aceita `?estado=SP`)

## 3. SEO on-page

| Elemento | Regra |
|----------|--------|
| `<title>` | Único e natural. 50–60 é objetivo editorial, não ERROR. Ausente/duplicado = ERROR; longo = WARNING. |
| Meta description | Única, útil e local. 140–160 é referência editorial. Ausente/duplicada = ERROR. |
| H1 | 1 por página. Ângulo próprio (aeroporto, agronegócio, governo, litoral, indústria). Proibido só trocar o nome do estado. |
| H2 | Obrigatórios: contexto local, serviços, cidades, aeroportos, por que contratar, como funciona, regiões, FAQ. Wording diferente em cada arquivo de dados. |
| H3 | Variáveis: serviços, cidades, aeroportos. Nomes reais. |
| Canonical | Absoluta, com barra final, igual à URL da página. |
| Robots | `index, follow` nas estaduais, hub e home. |
| Open Graph | og:type website, og:locale pt_BR, título/descrição/imagem próprios. |
| Twitter | summary_large_image. |
| Meta keywords | **Não usar.** |
| Meta latitude/longitude | **Não usar.** Geo só no JSON-LD de `areaServed`. |

## 4. Schema.org (JSON-LD)

Uma empresa. Não inventar 27 LocalBusiness com CNPJ/NAP falsos.

Obrigatório em cada estadual:

1. `WebPage`
2. `BreadcrumbList`
3. `FAQPage`
4. `Service` com `provider` = Organization e `areaServed` = `State`/`AdministrativeArea` + `GeoCoordinates` da capital/região

Home/hub: `Organization` + `WebSite` + `BreadcrumbList`.

## 5. Coordenadas

Usar latitude/longitude da capital (ou centro urbano principal) apenas em `areaServed.geo`. Não criar 27 endereços comerciais fictícios.

## 6. Imagens

- Hero home: `assets/images/hero-transporte.jpg` — 1920×1080, JPG, < 400 KB alvo.
- Detalhe: `assets/images/detalhe-luxo.jpg`.
- Capa estadual: imagem regional contextualizada (Sudeste, Sul, Nordeste, Norte, Centro-Oeste), não 27 fotos genéricas iguais com alt trocado de nome.
- `width`/`height` no HTML, `loading="lazy"` abaixo da dobra, `decoding="async"`.
- Alt único, descritivo, sem keyword stuffing.

## 7. Links internos

- Home → hub + 5 estados âncora.
- Hub → todos os estados.
- Cada estado → 2 a 3 estados vizinhos/correlatos com âncora única (não “saiba mais”).
- CTA de todas as páginas → `/#orcamento?` com UF.
- Breadcrumb: Home > Transporte Executivo > {Estado}.

## 8. Anti-duplicação

Proibido:

- Trocar só o topônimo.
- Mesmo H1/H2/FAQ com find-replace.
- Parágrafos idênticos em mais de um estado.
- Keyword stuffing do nome do estado.
- Texto inventado sobre frota local que a empresa não tem.
- Schema de filial inexistente.

Obrigatório:

- Ângulo econômico/geográfico real (porto, aeroporto, agronegócio, turismo, governo, Zona Franca).
- Cidades e aeroportos reais daquele UF.
- FAQ com perguntas que só fazem sentido ali.
- Title, description e H1 únicos no validador.

## 9. Performance, mobile, acessibilidade

- Uma folha CSS, Poppins com `display=swap`.
- Contraste ouro/preto validado.
- Skip link, landmarks (`header`, `nav`, `main`, `footer`), foco visível.
- FAQ com `button` + `aria-expanded`.
- Um H1. Headings em ordem.
- Formulário com labels explícitos.
- Viewport, tap targets ≥ 44px.

## 10. Checklist antes de marcar página pronta

O script `tools/validar-seo.php` precisa passar em 100%:

- [ ] Title 50–60 e único
- [ ] Description 140–160 e única
- [ ] H1 único e diferente da fórmula genérica
- [ ] 8 H2 com wording próprio
- [ ] ≥ 3 cidades com H3 + texto
- [ ] ≥ 1 aeroporto real
- [ ] ≥ 4 FAQ únicos
- [ ] ≥ 2 links internos com âncora própria
- [ ] Canonical, OG, Twitter, robots
- [ ] JSON-LD com os 4 tipos
- [ ] Geo só no Schema
- [ ] Sem meta keywords
- [ ] Imagem + alt próprios
- [ ] Breadcrumb de 3 níveis
- [ ] CTA para orçamento com UF
- [ ] Wrapper fino (não duplica HTML)
