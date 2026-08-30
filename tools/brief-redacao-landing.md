# Contrato de redação — landing de transporte executivo

Missão: reconstruir o funcionamento dos deslocamentos da cidade para descobrir em quais situações alguém precisa de um motorista executivo. Depois transformar isso em landing local, verificável e orientada à conversão.

A página não apresenta a cidade. Ela vende a necessidade do serviço naquela cidade.

Pergunta permanente: por que alguém nesta cidade precisaria de um carro executivo com motorista?

## Dois produtos obrigatórios

1. Dossiê interno: `data/dossies/{estado}/{cidade}.json`
2. Landing pública: `data/cidades/{estado}/{cidade}.php`

O dossiê pode ter prefeito, postos, atrações descartadas, riscos e [VERIFICAR].
A landing só publica o que ajuda o usuário, é verdadeiro, é local e gera solicitação.

## O que NÃO muda no PHP

- `layout`
- `cidade_nome`
- `geo` (só altere se fonte oficial contradisser e o dossiê registrar a correção)
- `imagem`
- `relacionados` (slugs e tipos). Pode reescrever só `ancora`.
- Chaves do layout. Não invente chaves novas. Não omita chaves existentes.

## Schemas por layout

### Comum a todos
- `schema_service_name`
- `seo.title` — 45 a 65 caracteres visíveis, único, liga dois elementos reais da cidade
- `seo.description` — 130 a 170 caracteres visíveis, único, sem preço/tempo fixo
- `seo.og_title` — diferente do title
- `seo.og_description`
- `seo.og_image_alt` — descreve a imagem regional, menciona a cidade
- `kicker` — região + UF (DF: "Distrito Federal · Brasília")
- `h1` — único, diferente do title, conecta origem e destino reais
- `faq_h2`
- `faq` — 3 ou 4 pares locais
- `cta.titulo` — específico da cidade
- `cta.texto` — orientar embarque + destino + horário; sem "solicite agora"
- `cta.botao` — preferir "Pedir motorista em {Cidade}"

### eixo
`lead`, `contexto.h2`, `contexto.texto` (2 parágrafos), `bairros.h2`, `bairros.itens` (4 × h3+texto), `aeroportos.h2`, `aeroportos.itens` (2 × h3+texto), `rotas.h2`, `rotas.itens` (3 × titulo+texto), `como.h2`, `como.passos` (3 × titulo+texto)

### orla
`epigrafe`, `abertura.h2`, `abertura.texto` (2), `faixas` (3 × h2+texto), `aeroportos` (2 itens), `protocolo.h2`, `protocolo.lista` (3)

### protocolo
`preambulo`, `artigos` (3 × h2+texto), `pauta.h2`, `pauta.itens` (3 × h3+texto)

### malha
`intro`, `blocos[0]` (h2+texto), `blocos[1]` (h2 + 4 itens h3+texto), `grade.h2`, `grade.itens` (3 × titulo+texto)

### baia
`faixas` (3): faixa 0 h2+texto; faixa 1 h2+3 itens; faixa 2 h2+texto

### dunas
`trilha` (h2+texto), `chips.h2`, `chips.itens` (5–6 nomes locais), `historias` (3 × h2+texto)

### gaucha
`coluna.h2`, `coluna.texto` (2), `lateral.h2`, `lateral.itens` (3 × h3+texto), `faixa.h2`, `faixa.texto`

### mare
`editorial.h2`, `editorial.texto` (2), `coluna_a.h2`, `coluna_a.itens` (3 × h3+texto), `coluna_b.h2`, `coluna_b.texto`

### rio
`corrente` (3 blocos): bloco 0 h2+texto; bloco 1 h2+3 itens; bloco 2 h2+texto

### serra
`olho`, `capitulos` (3 × h2+texto, o do meio pode ter itens), `passos.h2`, `passos.itens` (3 × num+titulo+texto)

## Pesquisa (obrigatória)

Hierarquia: oficiais (IBGE, ANAC, prefeitura, DER/DNIT, administradora de aeroporto/rodovia) → institucionais → imprensa local → mapas só para cruzar.

Para cada fato de alto risco (aeroporto, IATA, município do terminal, rodovia, hotel nomeado, endereço): fonte + data no dossiê.

Cruzar: encontrei → confirmei → comparei → classifiquei.

Se não comprovar: `[VERIFICAR]` no dossiê. Nunca publicar. Nunca escrever "provavelmente", "aparentemente", "deve ser", "segundo informações encontradas".

## Mapa operacional

Construir ORIGEM → EIXO → DESTINO → MOTIVO.

Identificar 3–6 eixos de embarque (não 40 bairros).
Para cada eixo: de onde sai / para onde vai / o que o motorista precisa saber.

Fronteiras invisíveis: o aeroporto pode estar em outro município. Nome oficial + município físico + IATA + acesso. Se estiver fora, a landing deve dizer isso.

Cidades para as quais o pedido "vaza": aeroporto regional, capital, polo industrial, cidade turística, porto, município vizinho. Usar para ida, espera, retorno, dia à disposição, transfer intermunicipal — sem keyword stuffing.

## Regras de conteúdo

- Hotéis: 0 a 5 âncoras só se confirmados (site oficial, bairro, operação atual). Senão, use o eixo/bairro e "informe o nome do hotel e o ponto de embarque".
- Postos: só no dossiê.
- Prefeito: só no dossiê, salvo motivo conversional real (quase nunca).
- Turismo: só se gerar deslocamento contratável (aeroporto→hotel→evento→hotel).
- Sem parceria inventada, preço, tempo fixo em minutos, "24 horas", "garantimos", "menor preço", "líder".
- Sem lista turística ("a cidade possui hotéis, restaurantes e praias").
- Teste de genericidade: se trocar o nome da cidade a frase continua fazendo sentido → reescrever.
- Densidade local > volume. Frases curtas, concretas, operacionais.
- FAQ nasce da dúvida real: aeroporto no município?, hotel?, cidade vizinha?, hora à disposição?
- Protocolo local: portaria, terminal, recuo, nome na lista.

## Tom

Português brasileiro, seco, operacional, sem marketing vazio. Segunda pessoa quando orientar o pedido. Sem exclamação. Sem "conforto, segurança e pontualidade" soltos.

## Dossiê JSON

```json
{
  "estado": "sao-paulo",
  "cidade": "campinas",
  "nome": "Campinas",
  "pesquisado_em": "2026-08-30",
  "mapa_operacional": [
    {"origem": "", "eixo": "", "destino": "", "motivo": ""}
  ],
  "eixos": [],
  "aeroportos": [
    {"nome": "", "iata": "", "municipio": "", "relacao": "", "fonte": "", "data": ""}
  ],
  "rodovias": [],
  "hoteis_ancora": [],
  "polos": [],
  "vizinhos_pedido": [],
  "prefeito": {"nome": "", "fonte": "", "data": "", "publicado": false},
  "fatos": [
    {"fato": "", "fonte": "", "data": "", "tipo": "terminal|trecho|embarque|polo", "risco": "alto|medio|baixo", "frase": "", "publicado": true}
  ],
  "descartado": [],
  "revisoes": {"factual": "ok", "localidade": "ok", "conversao": "ok", "seo": "ok"}
}
```

## PHP

`declare(strict_types=1);` array puro com aspas simples. Escape `'` com `\'`. UTF-8. Sem comentários. Sem HTML.

## Revisões obrigatórias antes de gravar

1. Factual — nenhum aeroporto/IATA/rodovia/hotel sem fonte no dossiê
2. Localidade — a página não serve para outra cidade
3. Conversão — o leitor entende origem, destino, aeroporto, espera, intermunicipal e o que acontece depois do clique
4. SEO — title/description/H1 únicos e nas faixas; sem stuffing
