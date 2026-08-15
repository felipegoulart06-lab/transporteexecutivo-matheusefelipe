<?php

declare(strict_types=1);

/** @var array<int, array{nome:string,url:?string}> $migalhas */
$migalhas = $migalhas ?? [];
if ($migalhas === []) {
    return;
}
?>
<nav class="breadcrumb" aria-label="Trilha de navegação">
    <ol>
        <?php foreach ($migalhas as $i => $item): ?>
            <li>
                <?php if (!empty($item['url']) && $i < count($migalhas) - 1): ?>
                    <a href="<?= e($item['url']) ?>"><?= e($item['nome']) ?></a>
                <?php else: ?>
                    <span aria-current="page"><?= e($item['nome']) ?></span>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ol>
</nav>
