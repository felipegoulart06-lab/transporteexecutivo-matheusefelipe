(() => {
    const raiz = document.querySelector('.gate');
    if (!raiz) return;

    const api = raiz.getAttribute('data-api');
    const selEstado = document.getElementById('sel-estado');
    const listaEstado = document.getElementById('lista-estado');
    const selCidade = document.getElementById('sel-cidade');
    const listaCidade = document.getElementById('lista-cidade');
    const wrapCidade = document.getElementById('wrap-cidade');
    const filtroCidade = document.getElementById('filtro-cidade');
    const statusEl = document.getElementById('gate-status');
    const frame = document.querySelector('.gate-frame');
    const paneLocal = document.getElementById('pane-local');
    const paneServico = document.getElementById('pane-servico');
    const btnVoltar = document.getElementById('btn-voltar');
    const stepCidade = document.getElementById('step-cidade');
    const intro = document.getElementById('gate-intro');
    const btnEntrar = document.getElementById('btn-entrar');

    let estados = [];
    let cidades = [];
    let estadoAtual = null;
    let cidadeAtual = null;
    let tipoAtual = null;
    const hrefObjetos = raiz.getAttribute('data-delivery') || 'https://delivery.transporteexecutivo.com/';

    const status = (msg) => {
        if (statusEl) statusEl.textContent = msg || '';
    };

    const marcarProgresso = (id) => {
        document.querySelectorAll('.gate-progress li').forEach((li) => {
            li.classList.toggle('is-on', li.getAttribute('data-step') === id);
        });
    };

    const abrirPasso = (el) => {
        if (!el) return;
        el.hidden = false;
        el.classList.add('is-on');
    };

    const travarScroll = () => {
        const track = document.querySelector('.gate-track');
        if (track) track.scrollLeft = 0;
        document.documentElement.scrollLeft = 0;
        document.body.scrollLeft = 0;
        window.scrollTo(0, 0);
    };

    const abrirDelivery = (href) => {
        const url = href || hrefObjetos;
        const janela = window.open(url, '_blank', 'noopener,noreferrer');
        if (!janela) {
            const atalho = document.createElement('a');
            atalho.href = url;
            atalho.target = '_blank';
            atalho.rel = 'noopener noreferrer';
            document.body.appendChild(atalho);
            atalho.click();
            atalho.remove();
        }
    };

    const irParaLocal = () => {
        toggleEstado(false);
        toggleCidade(false);
        tipoAtual = 'pessoas';
        frame.classList.add('is-local');
        paneLocal.setAttribute('aria-hidden', 'false');
        paneLocal.removeAttribute('inert');
        paneServico.setAttribute('aria-hidden', 'true');
        paneServico.setAttribute('inert', '');
        marcarProgresso(cidadeAtual ? 'cidade' : 'estado');
        travarScroll();
        selEstado.focus({ preventScroll: true });
    };

    const voltarServico = () => {
        toggleEstado(false);
        toggleCidade(false);
        tipoAtual = null;
        frame.classList.remove('is-local');
        paneLocal.setAttribute('aria-hidden', 'true');
        paneLocal.setAttribute('inert', '');
        paneServico.setAttribute('aria-hidden', 'false');
        paneServico.removeAttribute('inert');
        marcarProgresso('tipo');
        travarScroll();
        const titulo = document.getElementById('q-tipo');
        if (titulo) titulo.focus({ preventScroll: true });
    };

    const irComHistorico = (url) => {
        document.body.classList.add('is-leaving');
        const reduzir = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        window.setTimeout(() => window.location.assign(url), reduzir ? 0 : 360);
    };

    const concluir = () => {
        if (!estadoAtual || !cidadeAtual || tipoAtual !== 'pessoas') return;
        irComHistorico(`/transporte-executivo/${estadoAtual.slug}/${cidadeAtual.slug}/`);
    };

    const montarLista = (ul, itens, getLabel, getValue) => {
        ul.innerHTML = '';
        if (!itens.length) {
            const vazio = document.createElement('li');
            vazio.className = 'gate-list__empty';
            vazio.textContent = 'Nenhuma cidade encontrada';
            ul.appendChild(vazio);
            return;
        }
        itens.forEach((item) => {
            const li = document.createElement('li');
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.textContent = getLabel(item);
            btn.dataset.value = getValue(item);
            li.appendChild(btn);
            ul.appendChild(li);
        });
    };

    const normalizar = (texto) => texto
        .toLowerCase()
        .normalize('NFD')
        .replace(/[\u0300-\u036f]/g, '');

    const filtrarCidades = (q) => {
        const t = normalizar(q.trim());
        if (!t) return cidades;
        return cidades
            .filter((c) => normalizar(c.nome).startsWith(t) || normalizar(c.nome).includes(t) || c.slug.startsWith(t))
            .sort((a, b) => {
                const aIni = normalizar(a.nome).startsWith(t) ? 0 : 1;
                const bIni = normalizar(b.nome).startsWith(t) ? 0 : 1;
                return aIni - bIni;
            });
    };

    const soltarPainel = (painel) => {
        if (painel.parentElement !== document.body) {
            document.body.appendChild(painel);
        }
    };

    const posicionarPainel = (botao, painel) => {
        soltarPainel(painel);
        const rect = botao.getBoundingClientRect();
        const margem = 48;
        const abaixo = window.innerHeight - rect.bottom - margem;
        const acima = rect.top - margem;
        const paraCima = abaixo < 360 && acima > abaixo;
        const filtro = painel.id === 'wrap-cidade' ? 72 : 8;
        const livre = (paraCima ? acima : abaixo) - filtro;
        const lista = painel.id === 'wrap-cidade' ? listaCidade : painel;
        const altura = Math.max(160, Math.min(Math.max(livre, 160), 560));

        painel.classList.toggle('is-up', paraCima);
        painel.style.position = 'fixed';
        painel.style.left = `${Math.round(rect.left)}px`;
        painel.style.width = `${Math.round(rect.width)}px`;
        painel.style.right = 'auto';
        painel.style.zIndex = '50';

        if (paraCima) {
            painel.style.top = 'auto';
            painel.style.bottom = `${Math.round(window.innerHeight - rect.top + 6)}px`;
        } else {
            painel.style.bottom = 'auto';
            painel.style.top = `${Math.round(rect.bottom + 6)}px`;
        }

        lista.style.maxHeight = `${Math.round(altura)}px`;
    };

    const toggleEstado = (forcar) => {
        const abrir = forcar !== undefined ? forcar : listaEstado.hidden;
        listaEstado.hidden = !abrir;
        selEstado.setAttribute('aria-expanded', abrir ? 'true' : 'false');
        if (abrir) {
            posicionarPainel(selEstado, listaEstado);
            const primeiraOpcao = listaEstado.querySelector('button');
            if (primeiraOpcao) primeiraOpcao.focus({ preventScroll: true });
        }
    };

    const toggleCidade = (forcar) => {
        const abrir = forcar !== undefined ? forcar : wrapCidade.hidden;
        wrapCidade.hidden = !abrir;
        selCidade.setAttribute('aria-expanded', abrir ? 'true' : 'false');
        if (abrir) {
            posicionarPainel(selCidade, wrapCidade);
            filtroCidade.value = '';
            montarLista(listaCidade, cidades, (c) => c.nome, (c) => c.slug);
            filtroCidade.focus();
        }
    };

    const preencherEstados = async () => {
        status('Carregando estados…');
        try {
            const res = await fetch(`${api}?recurso=estados`);
            const json = await res.json();
            if (!json.ok) throw new Error('falha');
            estados = json.dados;
            montarLista(listaEstado, estados, (e) => e.nome, (e) => e.uf);
            status('');
        } catch (err) {
            status('Não foi possível carregar os estados. Atualize a página.');
        }
    };

    selEstado.addEventListener('click', (ev) => {
        ev.stopPropagation();
        toggleEstado();
        toggleCidade(false);
    });

    selCidade.addEventListener('click', (ev) => {
        ev.stopPropagation();
        toggleCidade();
        toggleEstado(false);
    });

    wrapCidade.addEventListener('click', (ev) => ev.stopPropagation());
    listaEstado.addEventListener('click', (ev) => ev.stopPropagation());

    listaEstado.addEventListener('click', async (ev) => {
        const btn = ev.target.closest('button');
        if (!btn) return;
        const uf = btn.dataset.value;
        estadoAtual = estados.find((e) => e.uf === uf) || null;
        if (!estadoAtual) return;
        selEstado.textContent = estadoAtual.nome;
        toggleEstado(false);

        cidadeAtual = null;
        selCidade.textContent = 'Selecione a cidade';
        filtroCidade.value = '';
        cidades = [];
        listaCidade.innerHTML = '';

        status('Carregando cidades…');
        abrirPasso(stepCidade);
        marcarProgresso('cidade');
        try {
            const res = await fetch(`${api}?recurso=cidades&uf=${encodeURIComponent(estadoAtual.uf)}`);
            const json = await res.json();
            if (!json.ok) throw new Error('falha');
            cidades = json.dados;
            montarLista(listaCidade, cidades, (c) => c.nome, (c) => c.slug);
            status('');
        } catch (err) {
            status('Não foi possível carregar as cidades. Tente novamente.');
        }
    });

    filtroCidade.addEventListener('input', () => {
        cidadeAtual = null;
        montarLista(listaCidade, filtrarCidades(filtroCidade.value), (c) => c.nome, (c) => c.slug);
    });

    listaCidade.addEventListener('click', (ev) => {
        const btn = ev.target.closest('button');
        if (!btn) return;
        const slug = btn.dataset.value;
        cidadeAtual = cidades.find((c) => c.slug === slug) || null;
        if (!cidadeAtual) return;
        selCidade.textContent = cidadeAtual.nome;
        filtroCidade.value = '';
        toggleCidade(false);
        concluir();
    });

    if (btnVoltar) btnVoltar.addEventListener('click', voltarServico);

    document.addEventListener('click', () => {
        toggleEstado(false);
        toggleCidade(false);
    });

    document.addEventListener('keydown', (ev) => {
        if (ev.key !== 'Escape') return;
        if (!listaEstado.hidden) {
            ev.preventDefault();
            toggleEstado(false);
            selEstado.focus({ preventScroll: true });
        } else if (!wrapCidade.hidden) {
            ev.preventDefault();
            toggleCidade(false);
            selCidade.focus({ preventScroll: true });
        }
    });

    window.addEventListener('resize', () => {
        if (!listaEstado.hidden) posicionarPainel(selEstado, listaEstado);
        if (!wrapCidade.hidden) posicionarPainel(selCidade, wrapCidade);
    });

    document.querySelectorAll('.gate-choice').forEach((botao) => {
        botao.addEventListener('click', () => {
            const tipo = botao.getAttribute('data-tipo');
            if (!tipo) return;
            if (tipo === 'objetos-de-valor') {
                abrirDelivery(botao.getAttribute('data-href') || hrefObjetos);
                return;
            }
            if (tipo === 'virtual') {
                document.dispatchEvent(new CustomEvent('transporte:abrir-chat'));
                return;
            }
            if (tipo === 'pessoas') {
                irParaLocal();
            }
        });
    });

    document.addEventListener('transporte:agendar-motorista', irParaLocal);
    document.addEventListener('transporte:abrir-delivery', () => abrirDelivery());

    const abrirInicio = () => {
        if (!raiz.classList.contains('is-intro')) return;
        raiz.classList.remove('is-intro');
        raiz.classList.add('is-ready');
        if (intro) {
            intro.setAttribute('aria-hidden', 'true');
            intro.setAttribute('inert', '');
        }
        frame.removeAttribute('inert');
        const titulo = document.getElementById('q-tipo');
        if (titulo) titulo.focus({ preventScroll: true });
    };

    if (btnEntrar) {
        btnEntrar.addEventListener('click', (ev) => {
            ev.preventDefault();
            abrirInicio();
        });
    }

    preencherEstados();
})();
