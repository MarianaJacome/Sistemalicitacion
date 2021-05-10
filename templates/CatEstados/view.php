<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CatEstado $catEstado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cat Estado'), ['action' => 'edit', $catEstado->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cat Estado'), ['action' => 'delete', $catEstado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catEstado->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cat Estados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cat Estado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="catEstados view content">
            <h3><?= h($catEstado->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($catEstado->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($catEstado->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clave') ?></th>
                    <td><?= h($catEstado->clave) ?></td>
                </tr>
                <tr>
                    <th><?= __('Abrev') ?></th>
                    <td><?= h($catEstado->abrev) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($catEstado->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($catEstado->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activo') ?></th>
                    <td><?= $catEstado->activo ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cat Municipios') ?></h4>
                <?php if (!empty($catEstado->cat_municipios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Cat Estado Id') ?></th>
                            <th><?= __('Id Municipio Ine') ?></th>
                            <th><?= __('Clave') ?></th>
                            <th><?= __('Meta') ?></th>
                            <th><?= __('Activo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($catEstado->cat_municipios as $catMunicipios) : ?>
                        <tr>
                            <td><?= h($catMunicipios->id) ?></td>
                            <td><?= h($catMunicipios->name) ?></td>
                            <td><?= h($catMunicipios->cat_estado_id) ?></td>
                            <td><?= h($catMunicipios->id_municipio_ine) ?></td>
                            <td><?= h($catMunicipios->clave) ?></td>
                            <td><?= h($catMunicipios->meta) ?></td>
                            <td><?= h($catMunicipios->activo) ?></td>
                            <td><?= h($catMunicipios->created) ?></td>
                            <td><?= h($catMunicipios->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CatMunicipios', 'action' => 'view', $catMunicipios->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CatMunicipios', 'action' => 'edit', $catMunicipios->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CatMunicipios', 'action' => 'delete', $catMunicipios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catMunicipios->id)]) ?>
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
