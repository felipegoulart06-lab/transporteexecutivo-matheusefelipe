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

    const toggle = document.querySelector('.nav-toggle');
    const menu = document.getElementById('menu-principal');
    if (toggle && menu) {
        toggle.addEventListener('click', () => {
            const aberto = menu.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', aberto ? 'true' : 'false');
        });
    }

    document.querySelectorAll('.faq-btn').forEach((botao) => {
        botao.addEventListener('click', () => {
            const painel = document.getElementById(botao.getAttribute('aria-controls'));
            const aberto = botao.getAttribute('aria-expanded') === 'true';
            botao.setAttribute('aria-expanded', aberto ? 'false' : 'true');
            if (painel) painel.hidden = aberto;
        });
    });
})();
