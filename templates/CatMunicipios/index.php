<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CatMunicipio[]|\Cake\Collection\CollectionInterface $catMunicipios
 */
?>
<div class="catMunicipios index content">
    <?= $this->Html->link(__('New Cat Municipio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cat Municipios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('cat_estado_id') ?></th>
                    <th><?= $this->Paginator->sort('id_municipio_ine') ?></th>
                    <th><?= $this->Paginator->sort('clave') ?></th>
                    <th><?= $this->Paginator->sort('meta') ?></th>
                    <th><?= $this->Paginator->sort('activo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($catMunicipios as $catMunicipio): ?>
                <tr>
                    <td><?= h($catMunicipio->id) ?></td>
                    <td><?= h($catMunicipio->name) ?></td>
                    <td><?= $catMunicipio->has('cat_estado') ? $this->Html->link($catMunicipio->cat_estado->name, ['controller' => 'CatEstados', 'action' => 'view', $catMunicipio->cat_estado->id]) : '' ?></td>
                    <td><?= $this->Number->format($catMunicipio->id_municipio_ine) ?></td>
                    <td><?= h($catMunicipio->clave) ?></td>
                    <td><?= $this->Number->format($catMunicipio->meta) ?></td>
                    <td><?= h($catMunicipio->activo) ?></td>
                    <td><?= h($catMunicipio->created) ?></td>
                    <td><?= h($catMunicipio->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $catMunicipio->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $catMunicipio->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $catMunicipio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catMunicipio->id)]) ?>
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
