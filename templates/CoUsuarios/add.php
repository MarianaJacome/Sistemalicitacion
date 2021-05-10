<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoUsuario $coUsuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Co Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coUsuarios form content">
            <?= $this->Form->create($coUsuario) ?>
            <fieldset>
                <legend><?= __('Add Co Usuario') ?></legend>
                <?php
                    echo $this->Form->control('co_grupo_id', ['options' => $coGrupos]);
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('paterno');
                    echo $this->Form->control('materno');
                    echo $this->Form->control('activo');
                    echo $this->Form->control('login');
                    echo $this->Form->control('password');
                    echo $this->Form->control('ultimo_acceso', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
