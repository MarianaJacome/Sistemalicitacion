<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CatLicitacione[]|\Cake\Collection\CollectionInterface $catLicitaciones
 */
?>
<div class="catLicitaciones index content">
    <?= $this->Html->link(__('Nueva Licitación'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Licitaciones') ?></h3>
    <div class="table-responsive">
        <table style="width: 100%">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('convocatoria') ?></th>
                    <th><?= $this->Paginator->sort('Empresa') ?></th>
                    <th><?= $this->Paginator->sort('numero_licitacion') ?></th>
                    <th><?= $this->Paginator->sort('lugar') ?></th>
                    <th><?= $this->Paginator->sort('Municipio') ?></th>
                    <th><?= $this->Paginator->sort('monto') ?></th>
                    <th><?= $this->Paginator->sort('obra') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($catLicitaciones as $catLicitacione): ?>
                <tr>
                    <td><?= h($catLicitacione->convocatoria) ?></td>
                    <td><?= h($catLicitacione->name) ?></td>
                    <td><?= h($catLicitacione->numero_licitacion) ?></td>
                    <td><?= h($catLicitacione->lugar) ?></td>
                    <td><?= $catLicitacione->has('cat_municipio') ? $this->Html->link($catLicitacione->cat_municipio->name, ['controller' => 'CatMunicipios', 'action' => 'view', $catLicitacione->cat_municipio->id]) : '' ?></td>
                    <td><?= $this->Number->format($catLicitacione->monto) ?></td>
                    <td><?= h($catLicitacione->obra) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $catLicitacione->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $catLicitacione->id]) ?>
                        <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $catLicitacione->id], ['confirm' => __('¿Quieres borrar el registro # {0}?', $catLicitacione->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
