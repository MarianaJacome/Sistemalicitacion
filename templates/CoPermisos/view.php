<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoPermiso $coPermiso
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Co Permiso'), ['action' => 'edit', $coPermiso->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Co Permiso'), ['action' => 'delete', $coPermiso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coPermiso->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Co Permisos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Co Permiso'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coPermisos view content">
            <h3><?= h($coPermiso->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($coPermiso->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($coPermiso->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Controller') ?></th>
                    <td><?= h($coPermiso->controller) ?></td>
                </tr>
                <tr>
                    <th><?= __('Action') ?></th>
                    <td><?= h($coPermiso->action) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($coPermiso->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($coPermiso->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activo') ?></th>
                    <td><?= $coPermiso->activo ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descripcion') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($coPermiso->descripcion)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Co Grupos') ?></h4>
                <?php if (!empty($coPermiso->co_grupos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Descripción') ?></th>
                            <th><?= __('Pagina Inicial') ?></th>
                            <th><?= __('Activo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($coPermiso->co_grupos as $coGrupos) : ?>
                        <tr>
                            <td><?= h($coGrupos->id) ?></td>
                            <td><?= h($coGrupos->name) ?></td>
                            <td><?= h($coGrupos->descripción) ?></td>
                            <td><?= h($coGrupos->pagina_inicial) ?></td>
                            <td><?= h($coGrupos->activo) ?></td>
                            <td><?= h($coGrupos->created) ?></td>
                            <td><?= h($coGrupos->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CoGrupos', 'action' => 'view', $coGrupos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CoGrupos', 'action' => 'edit', $coGrupos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CoGrupos', 'action' => 'delete', $coGrupos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coGrupos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
