<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoMenu $coMenu
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Co Menu'), ['action' => 'edit', $coMenu->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Co Menu'), ['action' => 'delete', $coMenu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coMenu->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Co Menus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Co Menu'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coMenus view content">
            <h3><?= h($coMenu->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($coMenu->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Co Menu Id') ?></th>
                    <td><?= h($coMenu->co_menu_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Icon') ?></th>
                    <td><?= h($coMenu->icon) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($coMenu->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Destino') ?></th>
                    <td><?= h($coMenu->destino) ?></td>
                </tr>
                <tr>
                    <th><?= __('Posicion') ?></th>
                    <td><?= $this->Number->format($coMenu->posicion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($coMenu->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($coMenu->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activo') ?></th>
                    <td><?= $coMenu->activo ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Co Grupos') ?></h4>
                <?php if (!empty($coMenu->co_grupos)) : ?>
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
                        <?php foreach ($coMenu->co_grupos as $coGrupos) : ?>
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
            <div class="related">
                <h4><?= __('Related Co Menus') ?></h4>
                <?php if (!empty($coMenu->co_menus)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Co Menu Id') ?></th>
                            <th><?= __('Icon') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Posicion') ?></th>
                            <th><?= __('Destino') ?></th>
                            <th><?= __('Activo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($coMenu->co_menus as $coMenus) : ?>
                        <tr>
                            <td><?= h($coMenus->id) ?></td>
                            <td><?= h($coMenus->co_menu_id) ?></td>
                            <td><?= h($coMenus->icon) ?></td>
                            <td><?= h($coMenus->name) ?></td>
                            <td><?= h($coMenus->posicion) ?></td>
                            <td><?= h($coMenus->destino) ?></td>
                            <td><?= h($coMenus->activo) ?></td>
                            <td><?= h($coMenus->created) ?></td>
                            <td><?= h($coMenus->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CoMenus', 'action' => 'view', $coMenus->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CoMenus', 'action' => 'edit', $coMenus->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CoMenus', 'action' => 'delete', $coMenus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coMenus->id)]) ?>
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
