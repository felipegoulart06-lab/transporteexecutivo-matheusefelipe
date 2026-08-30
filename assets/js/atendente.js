(() => {
    const raiz = document.querySelector('.gate');
    const painel = document.getElementById('gate-chat');
    const thread = document.getElementById('chat-thread');
    const btnFechar = document.getElementById('chat-fechar');
    const atalhos = document.getElementById('chat-quick');
    if (!raiz || !painel || !thread) return;

    const hrefDelivery = raiz.getAttribute('data-delivery') || 'https://delivery.transporteexecutivo.com/';
    const api = raiz.getAttribute('data-api');
    let aberto = false;
    let origemFoco = null;
    let iniciado = false;
    let landings = [];
    let localMontado = false;

    const el = (tag, classe, texto) => {
        const no = document.createElement(tag);
        if (classe) no.className = classe;
        if (texto) no.textContent = texto;
        return no;
    };

    const acoes = (itens) => {
        const wrap = el('div', 'gate-chat__acoes');
        itens.forEach((item) => {
            const btn = el('button', 'gate-chat__acao');
            btn.type = 'button';
            btn.textContent = item.rotulo;
            btn.dataset.intencao = item.intencao;
            wrap.appendChild(btn);
        });
        return wrap;
    };

    const bolha = (lado, texto, extras) => {
        const linha = el('div', `gate-chat__msg gate-chat__msg--${lado}`);
        if (texto) {
            const corpo = el('p', '', texto);
            linha.appendChild(corpo);
        }
        if (extras) linha.appendChild(extras);
        thread.appendChild(linha);
        thread.scrollTop = thread.scrollHeight;
        return linha;
    };

    const abrirDelivery = () => {
        const janela = window.open(hrefDelivery, '_blank', 'noopener,noreferrer');
        if (!janela) {
            const atalho = document.createElement('a');
            atalho.href = hrefDelivery;
            atalho.target = '_blank';
            atalho.rel = 'noopener noreferrer';
            document.body.appendChild(atalho);
            atalho.click();
            atalho.remove();
        }
    };

    const carregarLandings = async () => {
        if (landings.length) return landings;
        const res = await fetch(`${api}?recurso=landings`);
        const json = await res.json();
        if (!json.ok) throw new Error('falha');
        landings = json.dados;
        return landings;
    };

    const montarLocal = () => {
        const box = el('div', 'gate-chat__local');
        const rotuloEstado = el('label', 'gate-chat__campo');
        const textoEstado = el('span', '', 'Estado');
        const selEstado = document.createElement('select');
        selEstado.className = 'gate-chat__select';
        selEstado.setAttribute('aria-label', 'Selecione o estado');
        selEstado.innerHTML = '<option value="">Selecione o estado</option>';
        rotuloEstado.append(textoEstado, selEstado);

        const rotuloCidade = el('label', 'gate-chat__campo');
        const textoCidade = el('span', '', 'Cidade');
        const selCidade = document.createElement('select');
        selCidade.className = 'gate-chat__select';
        selCidade.setAttribute('aria-label', 'Selecione a cidade');
        selCidade.disabled = true;
        selCidade.innerHTML = '<option value="">Primeiro o estado</option>';
        rotuloCidade.append(textoCidade, selCidade);

        const status = el('p', 'gate-chat__local-status', 'Carregando estados…');
        box.append(rotuloEstado, rotuloCidade, status);

        const preencherCidades = (estadoSlug) => {
            selCidade.innerHTML = '<option value="">Selecione a cidade</option>';
            const grupo = landings.find((item) => item.slug === estadoSlug);
            if (!grupo || !grupo.cidades.length) {
                selCidade.disabled = true;
                status.textContent = 'Não há landing neste estado.';
                return;
            }
            grupo.cidades.forEach((cidade) => {
                const opt = document.createElement('option');
                opt.value = cidade.slug;
                opt.textContent = cidade.nome;
                selCidade.appendChild(opt);
            });
            selCidade.disabled = false;
            status.textContent = 'Agora escolha a cidade.';
            selCidade.focus();
        };

        carregarLandings()
            .then((lista) => {
                lista.forEach((estado) => {
                    const opt = document.createElement('option');
                    opt.value = estado.slug;
                    opt.textContent = estado.nome;
                    selEstado.appendChild(opt);
                });
                status.textContent = 'Escolha o estado e, em seguida, a cidade.';
                selEstado.focus();
            })
            .catch(() => {
                status.textContent = 'Não foi possível carregar os estados. Feche e abra o chat.';
            });

        selEstado.addEventListener('change', () => {
            const slug = selEstado.value;
            if (!slug) {
                selCidade.disabled = true;
                selCidade.innerHTML = '<option value="">Primeiro o estado</option>';
                status.textContent = 'Escolha o estado e, em seguida, a cidade.';
                return;
            }
            preencherCidades(slug);
        });

        selCidade.addEventListener('change', () => {
            const estadoSlug = selEstado.value;
            const cidadeSlug = selCidade.value;
            if (!estadoSlug || !cidadeSlug) return;
            const grupo = landings.find((item) => item.slug === estadoSlug);
            const cidade = grupo?.cidades.find((item) => item.slug === cidadeSlug);
            if (!cidade) return;
            status.textContent = `Abrindo ${cidade.nome}…`;
            selEstado.disabled = true;
            selCidade.disabled = true;
            document.body.classList.add('is-leaving');
            const reduzir = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            window.setTimeout(
                () => window.location.assign(`/transporte-executivo/${estadoSlug}/${cidadeSlug}/`),
                reduzir ? 0 : 360,
            );
        });

        return box;
    };

    const responder = (intencao) => {
        if (intencao === 'atendente') {
            bolha(
                'bot',
                'Você já está com a atendente virtual. Posso só tratar de motorista executivo ou de objetos de valor. Qual dos dois?',
                acoes([
                    { rotulo: 'Preciso de um motorista', intencao: 'motorista' },
                    { rotulo: 'Objetos de valor', intencao: 'objetos' },
                ]),
            );
            return;
        }

        if (intencao === 'objetos') {
            bolha(
                'bot',
                'Objetos de valor ficam na central de delivery — coleta e entrega assistidas, em serviço à parte do motorista. O site abre em uma nova aba.',
                acoes([{ rotulo: 'Abrir delivery', intencao: 'delivery' }]),
            );
            return;
        }

        if (intencao === 'motorista') {
            if (localMontado) {
                const ja = thread.querySelector('.gate-chat__local');
                bolha('bot', 'O estado e a cidade já estão nesta conversa, logo abaixo.');
                if (ja) ja.scrollIntoView({ block: 'nearest' });
                return;
            }
            localMontado = true;
            bolha(
                'bot',
                'Certo. Motorista executivo: traslado e espera combinados, sem aplicativo de rua. Escolha estado e cidade aqui para abrir a página local.',
                montarLocal(),
            );
        }
    };

    const escolher = (intencao, rotulo) => {
        if (!intencao) return;
        if (intencao === 'delivery') {
            bolha('eu', rotulo || 'Abrir delivery');
            abrirDelivery();
            return;
        }
        bolha('eu', rotulo);
        responder(intencao);
    };

    const boasVindas = () => {
        thread.replaceChildren();
        localMontado = false;
        bolha('bot', 'Olá. Sou a atendente virtual do transporte executivo. Escolha uma das três opções abaixo — sem escrever. Posso agendar o motorista ou encaminhar você à central de delivery.');
        iniciado = true;
    };

    const frame = document.querySelector('.gate-frame');

    const abrir = () => {
        if (aberto) return;
        origemFoco = document.activeElement;
        aberto = true;
        painel.hidden = false;
        document.body.classList.add('is-chat-open');
        if (frame) frame.setAttribute('inert', '');
        window.requestAnimationFrame(() => {
            window.requestAnimationFrame(() => raiz.classList.add('is-chat'));
        });
        if (!iniciado) boasVindas();
        carregarLandings().catch(() => {});
        const primeiro = atalhos?.querySelector('button');
        if (primeiro) primeiro.focus({ preventScroll: true });
    };

    const fechar = () => {
        if (!aberto) return;
        aberto = false;
        raiz.classList.remove('is-chat');
        document.body.classList.remove('is-chat-open');
        const encerrar = () => {
            painel.hidden = true;
            if (frame) frame.removeAttribute('inert');
            const voltar = origemFoco && typeof origemFoco.focus === 'function'
                ? origemFoco
                : document.querySelector('.gate-choice[data-tipo="virtual"]');
            if (voltar) voltar.focus({ preventScroll: true });
        };
        const reduzir = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        window.setTimeout(encerrar, reduzir ? 0 : 400);
    };

    if (atalhos) {
        atalhos.addEventListener('click', (ev) => {
            const btn = ev.target.closest('button[data-intencao]');
            if (!btn) return;
            escolher(btn.getAttribute('data-intencao'), btn.textContent.trim());
        });
    }

    thread.addEventListener('click', (ev) => {
        const btn = ev.target.closest('[data-intencao]');
        if (!btn) return;
        escolher(btn.getAttribute('data-intencao'), btn.textContent.trim());
    });

    if (btnFechar) btnFechar.addEventListener('click', fechar);

    document.addEventListener('keydown', (ev) => {
        if (ev.key === 'Escape' && aberto) {
            ev.preventDefault();
            fechar();
            return;
        }
        if (ev.key === 'Tab' && aberto) {
            const focaveis = Array.from(painel.querySelectorAll(
                'button:not([disabled]), select:not([disabled]), a[href], [tabindex]:not([tabindex="-1"])',
            )).filter((item) => !item.hidden && item.getClientRects().length > 0);
            if (!focaveis.length) return;
            const primeiro = focaveis[0];
            const ultimo = focaveis[focaveis.length - 1];
            if (ev.shiftKey && document.activeElement === primeiro) {
                ev.preventDefault();
                ultimo.focus();
            } else if (!ev.shiftKey && document.activeElement === ultimo) {
                ev.preventDefault();
                primeiro.focus();
            }
        }
    });

    painel.addEventListener('click', (ev) => {
        if (ev.target === painel) fechar();
    });

    document.addEventListener('transporte:abrir-chat', abrir);
})();
