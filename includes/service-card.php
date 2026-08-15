<?php

declare(strict_types=1);

/** @var array<int, array{h3:string,texto:string}> $servicos */
$servicos = $servicos ?? [];
?>
<div class="cards">
    <?php foreach ($servicos as $item): ?>
        <article class="card">
            <h3><?= e($item['h3']) ?></h3>
            <p><?= e($item['texto']) ?></p>
        </article>
    <?php endforeach; ?>
</div>
