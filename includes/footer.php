<?php

declare(strict_types=1);
$ocultarChrome = !empty($ocultarChrome);
if (!$ocultarChrome):
$grupos = estados_por_regiao();
?>
    <footer class="site-footer">
        <div class="site-footer__inner">
            <div>
                <p class="logo">Transporte<span>Executivo</span></p>
                <p>Transporte executivo privado com motorista, sob consulta.</p>
            </div>
            <nav aria-label="Unidades da federação por região">
                <?php foreach ($grupos as $regiao => $lista): ?>
                    <div class="foot-col">
                        <strong><?= e($regiao) ?></strong>
                        <ul>
                            <?php foreach ($lista as $item): ?>
                                <li><a href="<?= e(url_estado($item['slug'])) ?>"><?= e($item['nome']) ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </nav>
        </div>
        <p class="copy">© <?= date('Y') ?> <?= e((string) config('nome')) ?>. Todos os direitos reservados.</p>
    </footer>
<?php endif; ?>
    <script src="<?= e(url_site('assets/js/app.min.js')) ?>" defer></script>
</body>
</html>
