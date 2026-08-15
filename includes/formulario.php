<?php

declare(strict_types=1);

/** @var array<string, array{nome:string,cidades:array}> $estados */
/** @var array $erros */
/** @var bool $enviado */
/** @var ?array $resumo */
/** @var string $acaoFormulario */

$estados = $estados ?? [];
$erros = $erros ?? [];
$enviado = $enviado ?? false;
$resumo = $resumo ?? null;
$acaoFormulario = $acaoFormulario ?? url_site('#orcamento');
$ufTravada = $ufTravada ?? null;
?>
<section class="panel" id="orcamento">
    <?php if ($enviado && $resumo): ?>
        <div class="ok">
            <h2>Solicitação <span>recebida</span></h2>
            <?php if (($resumo['nome'] ?? '') !== ''): ?>
                <p>Obrigado, <?= e($resumo['nome']) ?>. Entraremos em contato pelo WhatsApp e pelo e-mail informados.</p>
                <dl class="resumo">
                    <div><dt>Trecho</dt><dd><?= e($resumo['cidade']) ?> → <?= e($resumo['cidade_destino']) ?> / <?= e($resumo['uf']) ?></dd></div>
                    <div><dt>Embarque</dt><dd><?= e($resumo['endereco']) ?></dd></div>
                    <div><dt>Quando</dt><dd><?= e(date('d/m/Y', strtotime((string) $resumo['data']))) ?> às <?= e($resumo['horario']) ?></dd></div>
                    <div><dt>Passageiros</dt><dd><?= (int) $resumo['pessoas'] ?></dd></div>
                    <div><dt>Serviço</dt><dd><?= e($resumo['tipo']) ?></dd></div>
                </dl>
            <?php endif; ?>
            <div class="actions" style="margin-top:22px">
                <a class="btn" href="<?= e($acaoFormulario) ?>">Nova solicitação</a>
            </div>
        </div>
    <?php else: ?>
        <?php if ($erros): ?>
            <ul class="erros">
                <?php foreach ($erros as $erro): ?>
                    <li><?= e($erro) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <form method="post" id="formNero" action="<?= e($acaoFormulario) ?>" class="form-orcamento">
            <input type="hidden" name="csrf" value="<?= e($_SESSION['csrf'] ?? '') ?>">
            <input type="hidden" name="form_ts" value="<?= e((string) time()) ?>">
            <p class="hp" aria-hidden="true">
                <label>Site <input type="text" name="fax" tabindex="-1" autocomplete="off"></label>
            </p>

            <label class="field">
                <span class="caption">Unidade da federação</span>
                <select name="estado" id="estado" required autocomplete="address-level1">
                    <option value="">Selecione</option>
                    <?php foreach ($estados as $uf => $info): ?>
                        <option value="<?= e($uf) ?>" <?= campo('estado') === $uf || $ufTravada === $uf ? 'selected' : '' ?>>
                            <?= e($info['nome']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </label>

            <label class="field" id="boxCidade">
                <span class="caption">Cidade de origem</span>
                <select name="cidade" id="cidade" required>
                    <option value="">Selecione a cidade de origem</option>
                    <?php foreach ($estados as $uf => $info): ?>
                        <optgroup label="<?= e($info['nome']) ?>" data-uf="<?= e($uf) ?>">
                            <?php foreach ($info['cidades'] as $nomeCidade): ?>
                                <option value="<?= e($nomeCidade) ?>" data-uf="<?= e($uf) ?>" <?= campo('cidade') === $nomeCidade ? 'selected' : '' ?>>
                                    <?= e($nomeCidade) ?>
                                </option>
                            <?php endforeach; ?>
                        </optgroup>
                    <?php endforeach; ?>
                </select>
            </label>

            <label class="field">
                <span class="caption">Cidade de destino</span>
                <select name="cidade_destino" id="cidade_destino" required>
                    <option value="">Selecione a cidade de destino</option>
                    <?php foreach ($estados as $uf => $info): ?>
                        <optgroup label="<?= e($info['nome']) ?>" data-uf="<?= e($uf) ?>">
                            <?php foreach ($info['cidades'] as $nomeCidade): ?>
                                <option value="<?= e($nomeCidade) ?>" data-uf="<?= e($uf) ?>" <?= campo('cidade_destino') === $nomeCidade ? 'selected' : '' ?>>
                                    <?= e($nomeCidade) ?>
                                </option>
                            <?php endforeach; ?>
                        </optgroup>
                    <?php endforeach; ?>
                </select>
            </label>

            <label class="field" id="boxEndereco">
                <span class="caption">Endereço de embarque</span>
                <input type="text" name="endereco" id="endereco" maxlength="180" placeholder="Rua, número e bairro" value="<?= e(campo('endereco')) ?>" autocomplete="off" required>
            </label>

            <div class="grid-2">
                <label class="field">
                    <span class="caption">Data</span>
                    <input type="date" name="data" id="data" value="<?= e(campo('data')) ?>" required>
                </label>
                <label class="field">
                    <span class="caption">Horário</span>
                    <input type="time" name="horario" id="horario" value="<?= e(campo('horario')) ?>" required>
                </label>
            </div>

            <label class="field">
                <span class="caption">Quantidade de passageiros</span>
                <div class="people">
                    <button type="button" id="menos" aria-label="Diminuir">−</button>
                    <input type="number" name="pessoas" id="pessoas" min="1" max="16" value="<?= e(campo('pessoas') !== '' ? campo('pessoas') : '1') ?>" required>
                    <button type="button" id="mais" aria-label="Aumentar">+</button>
                </div>
            </label>

            <fieldset class="field">
                <legend class="caption">Tipo de serviço</legend>
                <div class="tipos">
                    <label class="tipo">
                        <input type="radio" name="tipo" value="ida" <?= campo('tipo') === 'ida' ? 'checked' : '' ?> required>
                        <b>Somente ida</b>
                        <small>Embarque até o destino, sem retorno.</small>
                    </label>
                    <label class="tipo">
                        <input type="radio" name="tipo" value="ida_volta" <?= campo('tipo') === 'ida_volta' || campo('tipo') === '' ? 'checked' : '' ?>>
                        <b>Ida e volta</b>
                        <small>Leva e busca no horário combinado.</small>
                    </label>
                    <label class="tipo">
                        <input type="radio" name="tipo" value="por_hora" <?= campo('tipo') === 'por_hora' ? 'checked' : '' ?>>
                        <b>Por hora — a disposição</b>
                        <small>Motorista e veículo exclusivos pelo período.</small>
                    </label>
                </div>
            </fieldset>

            <label class="field">
                <span class="caption">Nome completo</span>
                <input type="text" name="nome" id="nome" maxlength="120" placeholder="Como no documento" value="<?= e(campo('nome')) ?>" autocomplete="name" required>
            </label>

            <div class="grid-2">
                <label class="field">
                    <span class="caption">E-mail</span>
                    <input type="email" name="email" id="email" maxlength="180" value="<?= e(campo('email')) ?>" autocomplete="email" required>
                </label>
                <label class="field">
                    <span class="caption">WhatsApp com DDD</span>
                    <input type="tel" name="whatsapp" id="whatsapp" inputmode="numeric" placeholder="(11) 99999-9999" value="<?= e(campo('whatsapp')) ?>" autocomplete="tel" required>
                </label>
            </div>

            <label class="field">
                <span class="caption">Mensagem <em>(opcional)</em></span>
                <textarea name="mensagem" id="mensagem" maxlength="1000" rows="3"><?= e(campo('mensagem')) ?></textarea>
            </label>

            <div class="actions">
                <button type="submit" class="btn">Solicitar orçamento</button>
            </div>
            <p class="hint">O endereço de embarque é digitado por você, sem autocomplete de rua.</p>
        </form>
    <?php endif; ?>
</section>
