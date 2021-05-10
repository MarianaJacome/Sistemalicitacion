<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoMenu $coMenu
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Co Menus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coMenus form content">
            <?= $this->Form->create($coMenu) ?>
            <fieldset>
                <legend><?= __('Add Co Menu') ?></legend>
                <?php
                    echo $this->Form->control('co_menu_id');
                    echo $this->Form->control('icon');
                    echo $this->Form->control('name');
                    echo $this->Form->control('posicion');
                    echo $this->Form->control('destino');
                    echo $this->Form->control('activo');
                    echo $this->Form->control('co_grupos._ids', ['options' => $coGrupos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
