<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CatEstado $catEstado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Cat Estados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="catEstados form content">
            <?= $this->Form->create($catEstado) ?>
            <fieldset>
                <legend><?= __('Add Cat Estado') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('clave');
                    echo $this->Form->control('abrev');
                    echo $this->Form->control('activo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
