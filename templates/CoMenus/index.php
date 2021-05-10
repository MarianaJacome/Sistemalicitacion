<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoMenu[]|\Cake\Collection\CollectionInterface $coMenus
 */
?>
<div class="coMenus index content">
    <?= $this->Html->link(__('New Co Menu'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Co Menus') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('co_menu_id') ?></th>
                    <th><?= $this->Paginator->sort('icon') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('posicion') ?></th>
                    <th><?= $this->Paginator->sort('destino') ?></th>
                    <th><?= $this->Paginator->sort('activo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coMenus as $coMenu): ?>
                <tr>
                    <td><?= h($coMenu->id) ?></td>
                    <td><?= h($coMenu->co_menu_id) ?></td>
                    <td><?= h($coMenu->icon) ?></td>
                    <td><?= h($coMenu->name) ?></td>
                    <td><?= $this->Number->format($coMenu->posicion) ?></td>
                    <td><?= h($coMenu->destino) ?></td>
                    <td><?= h($coMenu->activo) ?></td>
                    <td><?= h($coMenu->created) ?></td>
                    <td><?= h($coMenu->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $coMenu->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coMenu->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coMenu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coMenu->id)]) ?>
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
