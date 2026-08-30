<?php

declare(strict_types=1);

/** @var array<int, array{pergunta:string,resposta:string}> $perguntas */
$perguntas = $perguntas ?? [];
if ($perguntas === []) {
    return;
}
?>
<div class="faq" id="perguntas-frequentes">
    <?php foreach ($perguntas as $i => $item): ?>
        <div class="faq-item">
            <h3>
                <button type="button" class="faq-btn" aria-expanded="true" aria-controls="faq-p<?= $i ?>" id="faq-q<?= $i ?>">
                    <?= e($item['pergunta']) ?>
                    <span aria-hidden="true">+</span>
                </button>
            </h3>
            <div class="faq-panel" id="faq-p<?= $i ?>" role="region" aria-labelledby="faq-q<?= $i ?>">
                <p><?= e($item['resposta']) ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
