<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CatLicitacione $catLicitacione
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $catLicitacione->id],
                ['confirm' => __('¿Quieres borrar el registro # {0}?', $catLicitacione->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Licitaciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="catLicitaciones form content">
            <?= $this->Form->create($catLicitacione) ?>
            <fieldset>
                <legend><?= __('Editar Licitación') ?></legend>
                <?php
                    echo $this->Form->control('convocatoria');
                    echo $this->Form->control('name');
                    echo $this->Form->control('numero_licitacion');
                    echo $this->Form->control('lugar');
                    echo $this->Form->control('cat_municipio_id', ['options' => $catMunicipios, 'empty' => true]);
                    echo $this->Form->control('monto');
                    echo $this->Form->control('obra');
                    echo $this->Form->control('activo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
