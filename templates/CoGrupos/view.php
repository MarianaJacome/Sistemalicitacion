<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoGrupo $coGrupo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Co Grupo'), ['action' => 'edit', $coGrupo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Co Grupo'), ['action' => 'delete', $coGrupo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coGrupo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Co Grupos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Co Grupo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coGrupos view content">
            <h3><?= h($coGrupo->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($coGrupo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($coGrupo->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pagina Inicial') ?></th>
                    <td><?= h($coGrupo->pagina_inicial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($coGrupo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($coGrupo->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activo') ?></th>
                    <td><?= $coGrupo->activo ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descripción') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($coGrupo->descripción)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Co Menus') ?></h4>
                <?php if (!empty($coGrupo->co_menus)) : ?>
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
                        <?php foreach ($coGrupo->co_menus as $coMenus) : ?>
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
            <div class="related">
                <h4><?= __('Related Co Permisos') ?></h4>
                <?php if (!empty($coGrupo->co_permisos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Descripcion') ?></th>
                            <th><?= __('Controller') ?></th>
                            <th><?= __('Action') ?></th>
                            <th><?= __('Activo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($coGrupo->co_permisos as $coPermisos) : ?>
                        <tr>
                            <td><?= h($coPermisos->id) ?></td>
                            <td><?= h($coPermisos->name) ?></td>
                            <td><?= h($coPermisos->descripcion) ?></td>
                            <td><?= h($coPermisos->controller) ?></td>
                            <td><?= h($coPermisos->action) ?></td>
                            <td><?= h($coPermisos->activo) ?></td>
                            <td><?= h($coPermisos->created) ?></td>
                            <td><?= h($coPermisos->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CoPermisos', 'action' => 'view', $coPermisos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CoPermisos', 'action' => 'edit', $coPermisos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CoPermisos', 'action' => 'delete', $coPermisos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coPermisos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Co Usuarios') ?></h4>
                <?php if (!empty($coGrupo->co_usuarios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Co Grupo Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Paterno') ?></th>
                            <th><?= __('Materno') ?></th>
                            <th><?= __('Activo') ?></th>
                            <th><?= __('Login') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Ultimo Acceso') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($coGrupo->co_usuarios as $coUsuarios) : ?>
                        <tr>
                            <td><?= h($coUsuarios->id) ?></td>
                            <td><?= h($coUsuarios->co_grupo_id) ?></td>
                            <td><?= h($coUsuarios->nombre) ?></td>
                            <td><?= h($coUsuarios->paterno) ?></td>
                            <td><?= h($coUsuarios->materno) ?></td>
                            <td><?= h($coUsuarios->activo) ?></td>
                            <td><?= h($coUsuarios->login) ?></td>
                            <td><?= h($coUsuarios->password) ?></td>
                            <td><?= h($coUsuarios->ultimo_acceso) ?></td>
                            <td><?= h($coUsuarios->created) ?></td>
                            <td><?= h($coUsuarios->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CoUsuarios', 'action' => 'view', $coUsuarios->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CoUsuarios', 'action' => 'edit', $coUsuarios->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CoUsuarios', 'action' => 'delete', $coUsuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coUsuarios->id)]) ?>
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
