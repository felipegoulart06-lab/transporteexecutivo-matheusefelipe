(() => {
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
