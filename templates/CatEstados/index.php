<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CatEstado[]|\Cake\Collection\CollectionInterface $catEstados
 */
?>
<div class="catEstados index content">
    <?= $this->Html->link(__('New Cat Estado'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cat Estados') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('clave') ?></th>
                    <th><?= $this->Paginator->sort('abrev') ?></th>
                    <th><?= $this->Paginator->sort('activo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($catEstados as $catEstado): ?>
                <tr>
                    <td><?= h($catEstado->id) ?></td>
                    <td><?= h($catEstado->name) ?></td>
                    <td><?= h($catEstado->clave) ?></td>
                    <td><?= h($catEstado->abrev) ?></td>
                    <td><?= h($catEstado->activo) ?></td>
                    <td><?= h($catEstado->created) ?></td>
                    <td><?= h($catEstado->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $catEstado->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $catEstado->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $catEstado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catEstado->id)]) ?>
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
