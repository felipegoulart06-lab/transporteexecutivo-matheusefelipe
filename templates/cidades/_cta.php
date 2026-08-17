<?php

declare(strict_types=1);

/** @var array $c */
?>
<aside class="lp-cta" id="orcamento-cidade">
    <h2><?= e($c['cta']['titulo']) ?></h2>
    <p><?= e($c['cta']['texto']) ?></p>
    <a class="btn" href="<?= e(url_estado($c['estado_slug'])) ?>#orcamento"><?= e($c['cta']['botao']) ?></a>
</aside>
