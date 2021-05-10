<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoUsuario $coUsuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Co Usuario'), ['action' => 'edit', $coUsuario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Co Usuario'), ['action' => 'delete', $coUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coUsuario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Co Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Co Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coUsuarios view content">
            <h3><?= h($coUsuario->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($coUsuario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Co Grupo') ?></th>
                    <td><?= $coUsuario->has('co_grupo') ? $this->Html->link($coUsuario->co_grupo->name, ['controller' => 'CoGrupos', 'action' => 'view', $coUsuario->co_grupo->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($coUsuario->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paterno') ?></th>
                    <td><?= h($coUsuario->paterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Materno') ?></th>
                    <td><?= h($coUsuario->materno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Login') ?></th>
                    <td><?= h($coUsuario->login) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($coUsuario->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ultimo Acceso') ?></th>
                    <td><?= h($coUsuario->ultimo_acceso) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($coUsuario->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($coUsuario->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activo') ?></th>
                    <td><?= $coUsuario->activo ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
