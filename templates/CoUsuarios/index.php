<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoUsuario[]|\Cake\Collection\CollectionInterface $coUsuarios
 */
?>
<div class="coUsuarios index content">
    <?= $this->Html->link(__('New Co Usuario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Co Usuarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('co_grupo_id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('paterno') ?></th>
                    <th><?= $this->Paginator->sort('materno') ?></th>
                    <th><?= $this->Paginator->sort('activo') ?></th>
                    <th><?= $this->Paginator->sort('login') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th><?= $this->Paginator->sort('ultimo_acceso') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coUsuarios as $coUsuario): ?>
                <tr>
                    <td><?= h($coUsuario->id) ?></td>
                    <td><?= $coUsuario->has('co_grupo') ? $this->Html->link($coUsuario->co_grupo->name, ['controller' => 'CoGrupos', 'action' => 'view', $coUsuario->co_grupo->id]) : '' ?></td>
                    <td><?= h($coUsuario->nombre) ?></td>
                    <td><?= h($coUsuario->paterno) ?></td>
                    <td><?= h($coUsuario->materno) ?></td>
                    <td><?= h($coUsuario->activo) ?></td>
                    <td><?= h($coUsuario->login) ?></td>
                    <td><?= h($coUsuario->password) ?></td>
                    <td><?= h($coUsuario->ultimo_acceso) ?></td>
                    <td><?= h($coUsuario->created) ?></td>
                    <td><?= h($coUsuario->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $coUsuario->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coUsuario->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coUsuario->id)]) ?>
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
