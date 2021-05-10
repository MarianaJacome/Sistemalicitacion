<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoGrupo $coGrupo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Co Grupos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coGrupos form content">
            <?= $this->Form->create($coGrupo) ?>
            <fieldset>
                <legend><?= __('Add Co Grupo') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('descripción');
                    echo $this->Form->control('pagina_inicial');
                    echo $this->Form->control('activo');
                    echo $this->Form->control('co_menus._ids', ['options' => $coMenus]);
                    echo $this->Form->control('co_permisos._ids', ['options' => $coPermisos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
