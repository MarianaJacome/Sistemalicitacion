<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoPermiso $coPermiso
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $coPermiso->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $coPermiso->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Co Permisos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coPermisos form content">
            <?= $this->Form->create($coPermiso) ?>
            <fieldset>
                <legend><?= __('Edit Co Permiso') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('controller');
                    echo $this->Form->control('action');
                    echo $this->Form->control('activo');
                    echo $this->Form->control('co_grupos._ids', ['options' => $coGrupos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
