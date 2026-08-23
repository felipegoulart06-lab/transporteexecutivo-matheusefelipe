(() => {
    const raiz = document.querySelector('.gate');
    const painel = document.getElementById('gate-chat');
    const thread = document.getElementById('chat-thread');
    const form = document.getElementById('chat-form');
    const campo = document.getElementById('chat-input');
    const btnFechar = document.getElementById('chat-fechar');
    const atalhos = document.getElementById('chat-quick');
    if (!raiz || !painel || !thread || !form || !campo) return;

    const hrefDelivery = raiz.getAttribute('data-delivery') || 'https://delivery.transporteexecutivo.com.br/';
    let aberto = false;
    let origemFoco = null;
    let iniciado = false;

    const normalizar = (texto) => texto
        .toLowerCase()
        .normalize('NFD')
        .replace(/[\u0300-\u036f]/g, '')
        .replace(/[^\w\s]/g, ' ')
        .replace(/\s+/g, ' ')
        .trim();

    const tem = (texto, padroes) => padroes.some((p) => p.test(texto));

    const classificar = (bruto) => {
        const t = normalizar(bruto);
        if (!t) return 'vazio';

        if (tem(t, [
            /ignore (as |todas )?(instru|regr|pedido)/,
            /voce (e|eh) agora/,
            /esque[cç]a (as )?(regras|instru)/,
            /jailbreak|prompt (do )?sistema|developer mode/,
        ])) return 'bloqueio';

        if (tem(t, [
            /uber|99app|\b99\b|inDrive|lyft|cabify|taxi comum|corrida de app/,
            /politica|eleic|futebol|clima|piada|receita de|codigo fonte/,
            /emprego|vaga|salario|namor|religia|medico|advogad/,
        ]) && !tem(t, [/motorista|objeto|delivery|atendimento virtual/])) {
            return 'fora';
        }

        const motorista = tem(t, [
            /motorista/,
            /deslocamento/,
            /traslado/,
            /chofer|chauffeur/,
            /\bcarro\b|\bsedan\b|\bveiculo\b/,
            /aeroporto|hotel|reunia/,
            /passageiro|embarque|pauta|roteiro/,
            /buscar (me|nos|no)|me buscar|me levar/,
            /agendar (um )?motorista|preciso de (um )?carro/,
        ]);
        const objetos = tem(t, [
            /objetos? de valor/,
            /transporte de objetos?/,
            /\bdelivery\b/,
            /coleta e entrega/,
            /\b(encomenda|pacote|carga|amostra|documentos?)\b/,
            /entregar (um |o )?(objeto|documento|pacote)/,
        ]);
        const virtual = tem(t, [
            /atendimento virtual/,
            /consulta a distancia/,
            /este (chat|canal|atendimento)/,
            /falar com (a )?atendente/,
        ]);
        const preco = tem(t, [
            /quanto custa|qual o (preco|valor)|orcamento|tabela|diaria/,
        ]);
        const ambos = motorista && objetos;
        const saudacao = tem(t, [/^(ola|oi|bom dia|boa tarde|boa noite|hey|hello|bem vindo)$/]);
        const obrigado = tem(t, [/obrigad|valeu|agrade[cç]/]);

        if (ambos) return 'ambos';
        if (motorista) return 'motorista';
        if (objetos) return 'objetos';
        if (virtual) return 'virtual';
        if (preco) return 'preco';
        if (saudacao) return 'saudacao';
        if (obrigado) return 'obrigado';
        if (tem(t, [/como funciona|o que (voces|vc) (fazem|oferecem)|quais (as )?opcoes|me explica/])) {
            return 'opcoes';
        }
        return 'fora';
    };

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
            btn.dataset.acao = item.acao;
            wrap.appendChild(btn);
        });
        return wrap;
    };

    const bolha = (lado, texto, extras) => {
        const linha = el('div', `gate-chat__msg gate-chat__msg--${lado}`);
        const corpo = el('p', '', texto);
        linha.appendChild(corpo);
        if (extras) linha.appendChild(extras);
        thread.appendChild(linha);
        thread.scrollTop = thread.scrollHeight;
    };

    const responder = (intencao) => {
        if (intencao === 'vazio') return;

        if (intencao === 'bloqueio' || intencao === 'fora') {
            bolha('bot', 'Posso tratar somente das três opções desta página: motorista executivo, transporte de objetos de valor ou este atendimento virtual. Qual dos três?');
            return;
        }

        if (intencao === 'saudacao') {
            bolha('bot', 'Olá. Sou a atendente virtual do transporte executivo. Posso ajudar com motorista, objetos de valor ou explicar este atendimento. O que você precisa?');
            return;
        }

        if (intencao === 'obrigado') {
            bolha('bot', 'À disposição. Quando quiser, seguimos com o agendamento do motorista ou com a central de delivery.');
            return;
        }

        if (intencao === 'opcoes' || intencao === 'virtual') {
            bolha(
                'bot',
                'Este canal é o atendimento virtual. As únicas saídas são duas: agendar um motorista — aí pedimos estado e cidade — ou abrir a central de delivery para objetos de valor. Qual caminho?',
                acoes([
                    { rotulo: 'Agendar motorista', acao: 'motorista' },
                    { rotulo: 'Abrir delivery', acao: 'delivery' },
                ]),
            );
            return;
        }

        if (intencao === 'preco') {
            bolha(
                'bot',
                'O orçamento é sob consulta. Não há tabela aberta nem corrida instantânea. Se for deslocamento, escolhemos estado e cidade. Se for objeto de valor, a central de delivery informa o recorte.',
                acoes([
                    { rotulo: 'Agendar motorista', acao: 'motorista' },
                    { rotulo: 'Abrir delivery', acao: 'delivery' },
                ]),
            );
            return;
        }

        if (intencao === 'ambos') {
            bolha(
                'bot',
                'São serviços separados. O motorista não faz a carga; a central de delivery não substitui o carro. Escolha um para seguir agora.',
                acoes([
                    { rotulo: 'Agendar motorista', acao: 'motorista' },
                    { rotulo: 'Abrir delivery', acao: 'delivery' },
                ]),
            );
            return;
        }

        if (intencao === 'motorista') {
            bolha(
                'bot',
                'Certo. Motorista executivo: traslado e espera combinados, sem aplicativo de rua. O próximo passo é escolher estado e cidade para abrir a página local e seguir o pedido.',
                acoes([{ rotulo: 'Escolher estado e cidade', acao: 'motorista' }]),
            );
            return;
        }

        if (intencao === 'objetos') {
            bolha(
                'bot',
                'Objetos de valor ficam na central de delivery — coleta e entrega assistidas, em serviço à parte do motorista. Abro o site em uma nova aba.',
                acoes([{ rotulo: 'Abrir delivery', acao: 'delivery' }]),
            );
        }
    };

    const boasVindas = () => {
        thread.replaceChildren();
        bolha('bot', 'Olá. Sou a atendente virtual do transporte executivo. Converso somente sobre as três opções deste site: motorista, transporte de objetos de valor e este atendimento. Meu objetivo é agendar o motorista ou encaminhar você à central de delivery. O que você precisa?');
        iniciado = true;
    };

    const frame = document.querySelector('.gate-frame');

    const abrir = () => {
        if (aberto) return;
        origemFoco = document.activeElement;
        aberto = true;
        painel.hidden = false;
        raiz.classList.add('is-chat');
        document.body.classList.add('is-chat-open');
        if (frame) frame.setAttribute('inert', '');
        if (!iniciado) boasVindas();
        campo.focus({ preventScroll: true });
    };

    const fechar = () => {
        if (!aberto) return;
        aberto = false;
        painel.hidden = true;
        raiz.classList.remove('is-chat');
        document.body.classList.remove('is-chat-open');
        if (frame) frame.removeAttribute('inert');
        const voltar = origemFoco && typeof origemFoco.focus === 'function'
            ? origemFoco
            : document.querySelector('.gate-choice[data-tipo="virtual"]');
        if (voltar) voltar.focus({ preventScroll: true });
    };

    const enviar = (texto, intencaoForcada) => {
        const limpo = (texto || '').trim();
        if (!limpo) return;
        bolha('eu', limpo);
        responder(intencaoForcada || classificar(limpo));
        campo.value = '';
    };

    const executarAcao = (acao) => {
        if (acao === 'motorista') {
            fechar();
            document.dispatchEvent(new CustomEvent('nero:agendar-motorista'));
            return;
        }
        if (acao === 'delivery') {
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
        }
    };

    form.addEventListener('submit', (ev) => {
        ev.preventDefault();
        enviar(campo.value);
    });

    if (atalhos) {
        atalhos.addEventListener('click', (ev) => {
            const btn = ev.target.closest('button[data-intencao]');
            if (!btn) return;
            const mapa = {
                motorista: 'Preciso de um motorista',
                objetos: 'Transporte de objetos de valor',
            };
            const intencao = btn.getAttribute('data-intencao');
            enviar(mapa[intencao] || btn.textContent, intencao);
        });
    }

    thread.addEventListener('click', (ev) => {
        const btn = ev.target.closest('[data-acao]');
        if (!btn) return;
        executarAcao(btn.getAttribute('data-acao'));
    });

    if (btnFechar) btnFechar.addEventListener('click', fechar);

    document.addEventListener('keydown', (ev) => {
        if (ev.key === 'Escape' && aberto) {
            ev.preventDefault();
            fechar();
        }
    });

    painel.addEventListener('click', (ev) => {
        if (ev.target === painel) fechar();
    });

    document.addEventListener('nero:abrir-chat', abrir);
})();
