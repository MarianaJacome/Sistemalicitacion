<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoGrupo[]|\Cake\Collection\CollectionInterface $coGrupos
 */
?>
<div class="coGrupos index content">
    <?= $this->Html->link(__('New Co Grupo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Co Grupos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('pagina_inicial') ?></th>
                    <th><?= $this->Paginator->sort('activo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coGrupos as $coGrupo): ?>
                <tr>
                    <td><?= h($coGrupo->id) ?></td>
                    <td><?= h($coGrupo->name) ?></td>
                    <td><?= h($coGrupo->pagina_inicial) ?></td>
                    <td><?= h($coGrupo->activo) ?></td>
                    <td><?= h($coGrupo->created) ?></td>
                    <td><?= h($coGrupo->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $coGrupo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coGrupo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coGrupo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coGrupo->id)]) ?>
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
