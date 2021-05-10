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
            <?= $this->Html->link(__('Editar Licitacion'), ['action' => 'edit', $catLicitacione->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Borrar Licitación'), ['action' => 'delete', $catLicitacione->id], ['confirm' => __('¿Quieres borrar el registro # {0}?', $catLicitacione->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Licitaciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nueva Licitación'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="catLicitaciones view content">
            <h3><?= h($catLicitacione->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($catLicitacione->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Convocatoria') ?></th>
                    <td><?= h($catLicitacione->convocatoria) ?></td>
                </tr>
                <tr>
                    <th><?= __('Empresa') ?></th>
                    <td><?= h($catLicitacione->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero Licitacion') ?></th>
                    <td><?= h($catLicitacione->numero_licitacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lugar') ?></th>
                    <td><?= h($catLicitacione->lugar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Municipio') ?></th>
                    <td><?= $catLicitacione->has('cat_municipio') ? $this->Html->link($catLicitacione->cat_municipio->name, ['controller' => 'CatMunicipios', 'action' => 'view', $catLicitacione->cat_municipio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Obra') ?></th>
                    <td><?= h($catLicitacione->obra) ?></td>
                </tr>
                <tr>
                    <th><?= __('Monto') ?></th>
                    <td><?= $this->Number->format($catLicitacione->monto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creado') ?></th>
                    <td><?= h($catLicitacione->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modificado') ?></th>
                    <td><?= h($catLicitacione->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
