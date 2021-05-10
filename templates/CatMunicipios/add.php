<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CatMunicipio $catMunicipio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Cat Municipios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="catMunicipios form content">
            <?= $this->Form->create($catMunicipio) ?>
            <fieldset>
                <legend><?= __('Add Cat Municipio') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('cat_estado_id', ['options' => $catEstados, 'empty' => true]);
                    echo $this->Form->control('id_municipio_ine');
                    echo $this->Form->control('clave');
                    echo $this->Form->control('meta');
                    echo $this->Form->control('activo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
