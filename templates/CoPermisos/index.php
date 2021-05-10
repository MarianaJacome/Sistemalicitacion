<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoPermiso[]|\Cake\Collection\CollectionInterface $coPermisos
 */
?>
<div class="coPermisos index content">
    <?= $this->Html->link(__('New Co Permiso'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Co Permisos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('controller') ?></th>
                    <th><?= $this->Paginator->sort('action') ?></th>
                    <th><?= $this->Paginator->sort('activo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coPermisos as $coPermiso): ?>
                <tr>
                    <td><?= h($coPermiso->id) ?></td>
                    <td><?= h($coPermiso->name) ?></td>
                    <td><?= h($coPermiso->controller) ?></td>
                    <td><?= h($coPermiso->action) ?></td>
                    <td><?= h($coPermiso->activo) ?></td>
                    <td><?= h($coPermiso->created) ?></td>
                    <td><?= h($coPermiso->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $coPermiso->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coPermiso->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coPermiso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coPermiso->id)]) ?>
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
