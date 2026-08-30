(() => {
    const mesmaOrigem = (url) => {
        try {
            return new URL(url, window.location.href).origin === window.location.origin;
        } catch (err) {
            return false;
        }
    };

    document.querySelectorAll('.js-voltar').forEach((link) => {
        link.addEventListener('click', (ev) => {
            const ref = document.referrer;
            if (ref && mesmaOrigem(ref) && ref !== window.location.href && window.history.length > 1) {
                ev.preventDefault();
                document.body.classList.add('is-leaving');
                const reduzir = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                window.setTimeout(() => window.history.back(), reduzir ? 0 : 280);
            }
        });
    });

    window.addEventListener('pageshow', () => {
        document.body.classList.remove('is-leaving');
    });

    const toggle = document.querySelector('.nav-toggle');
    const menu = document.getElementById('menu-principal');
    if (toggle && menu) {
        const fecharMenu = () => {
            menu.classList.remove('is-open');
            toggle.setAttribute('aria-expanded', 'false');
        };

        toggle.addEventListener('click', () => {
            const aberto = menu.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', aberto ? 'true' : 'false');
        });

        menu.addEventListener('click', (ev) => {
            if (ev.target.closest('a')) fecharMenu();
        });

        document.addEventListener('click', (ev) => {
            if (!menu.classList.contains('is-open')) return;
            if (menu.contains(ev.target) || toggle.contains(ev.target)) return;
            fecharMenu();
        });

        document.addEventListener('keydown', (ev) => {
            if (!menu.classList.contains('is-open')) return;
            if (ev.key === 'Escape') {
                ev.preventDefault();
                fecharMenu();
                toggle.focus({ preventScroll: true });
                return;
            }
            if (ev.key === 'Tab') {
                const focaveis = [toggle, ...menu.querySelectorAll('a[href]')];
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
    }

    document.querySelectorAll('.faq-btn').forEach((botao) => {
        const painel = document.getElementById(botao.getAttribute('aria-controls'));
        botao.setAttribute('aria-expanded', 'false');
        if (painel) painel.hidden = true;

        botao.addEventListener('click', () => {
            const aberto = botao.getAttribute('aria-expanded') === 'true';
            botao.setAttribute('aria-expanded', aberto ? 'false' : 'true');
            if (painel) painel.hidden = aberto;
        });
    });
})();
