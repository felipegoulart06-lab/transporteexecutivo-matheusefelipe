(() => {
    const estadoSel = document.getElementById('estado');
    const cidadeSel = document.getElementById('cidade');
    const destinoSel = document.getElementById('cidade_destino');
    if (!estadoSel || !cidadeSel) return;

    const filtrar = (select) => {
        if (!select) return;
        const uf = estadoSel.value;
        select.querySelectorAll('optgroup').forEach((grupo) => {
            const ok = !uf || grupo.getAttribute('data-uf') === uf;
            grupo.hidden = !ok;
            grupo.querySelectorAll('option').forEach((opt) => {
                opt.disabled = !ok;
            });
        });
        const atual = select.selectedOptions[0];
        if (atual && atual.disabled) select.value = '';
    };

    const aplicar = () => {
        filtrar(cidadeSel);
        filtrar(destinoSel);
    };

    estadoSel.addEventListener('change', aplicar);
    aplicar();

    const pessoas = document.getElementById('pessoas');
    document.getElementById('menos')?.addEventListener('click', () => {
        const n = Math.max(1, parseInt(pessoas.value || '1', 10) - 1);
        pessoas.value = String(n);
    });
    document.getElementById('mais')?.addEventListener('click', () => {
        const n = Math.min(16, parseInt(pessoas.value || '1', 10) + 1);
        pessoas.value = String(n);
    });

    const zap = document.getElementById('whatsapp');
    zap?.addEventListener('input', () => {
        const d = zap.value.replace(/\D/g, '').slice(0, 11);
        if (d.length <= 2) zap.value = d.length ? `(${d}` : '';
        else if (d.length <= 6) zap.value = `(${d.slice(0, 2)}) ${d.slice(2)}`;
        else if (d.length <= 10) zap.value = `(${d.slice(0, 2)}) ${d.slice(2, 6)}-${d.slice(6)}`;
        else zap.value = `(${d.slice(0, 2)}) ${d.slice(2, 7)}-${d.slice(7)}`;
    });
})();
