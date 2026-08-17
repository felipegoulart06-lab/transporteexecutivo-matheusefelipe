<?php

declare(strict_types=1);

/** @var array $c */
?>
<nav class="lp-rel" aria-label="Páginas relacionadas">
    <h2>Rotas vizinhas</h2>
    <ul>
        <?php foreach ($c['relacionados'] as $rel): ?>
            <li>
                <?php if (($rel['tipo'] ?? '') === 'cidade'): ?>
                    <a href="<?= e(url_cidade_landing($rel['estado'], $rel['cidade'])) ?>"><?= e($rel['ancora']) ?></a>
                <?php else: ?>
                    <a href="<?= e(url_estado($rel['slug'])) ?>"><?= e($rel['ancora']) ?></a>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
