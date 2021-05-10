<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CatLicitacione $catLicitacione
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Lista de Licitaciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="catLicitaciones form content">
            <?= $this->Form->create($catLicitacione) ?>
            <fieldset>
                <legend><?= __('Agregar Nueva Licitacion') ?></legend>
                <?php
                    echo $this->Form->control('convocatoria', ['required' => true]);
                    echo $this->Form->control('name', ['required' => true, 'label' => [ 'text' => 'Empresa']]);
                    echo $this->Form->control('numero_licitacion', ['required' => true]);
                    echo $this->Form->control('lugar', ['required' => true]);
                    echo $this->Form->control('cat_municipio_id', ['required' => true, 'label' => ['text' => 'Municipio'], 'options' => $catMunicipios, 'empty' => true]);
                    echo $this->Form->control('monto', ['required' => true]);
                    echo $this->Form->control('obra');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
