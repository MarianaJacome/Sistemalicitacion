<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CatMunicipio $catMunicipio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cat Municipio'), ['action' => 'edit', $catMunicipio->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cat Municipio'), ['action' => 'delete', $catMunicipio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catMunicipio->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cat Municipios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cat Municipio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="catMunicipios view content">
            <h3><?= h($catMunicipio->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($catMunicipio->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($catMunicipio->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cat Estado') ?></th>
                    <td><?= $catMunicipio->has('cat_estado') ? $this->Html->link($catMunicipio->cat_estado->name, ['controller' => 'CatEstados', 'action' => 'view', $catMunicipio->cat_estado->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Clave') ?></th>
                    <td><?= h($catMunicipio->clave) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Municipio Ine') ?></th>
                    <td><?= $this->Number->format($catMunicipio->id_municipio_ine) ?></td>
                </tr>
                <tr>
                    <th><?= __('Meta') ?></th>
                    <td><?= $this->Number->format($catMunicipio->meta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($catMunicipio->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($catMunicipio->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activo') ?></th>
                    <td><?= $catMunicipio->activo ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cat Licitaciones') ?></h4>
                <?php if (!empty($catMunicipio->cat_licitaciones)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Numero Licitacion') ?></th>
                            <th><?= __('Lugar') ?></th>
                            <th><?= __('Cat Municipio Id') ?></th>
                            <th><?= __('Monto') ?></th>
                            <th><?= __('Activo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($catMunicipio->cat_licitaciones as $catLicitaciones) : ?>
                        <tr>
                            <td><?= h($catLicitaciones->id) ?></td>
                            <td><?= h($catLicitaciones->name) ?></td>
                            <td><?= h($catLicitaciones->numero_licitacion) ?></td>
                            <td><?= h($catLicitaciones->lugar) ?></td>
                            <td><?= h($catLicitaciones->cat_municipio_id) ?></td>
                            <td><?= h($catLicitaciones->monto) ?></td>
                            <td><?= h($catLicitaciones->activo) ?></td>
                            <td><?= h($catLicitaciones->created) ?></td>
                            <td><?= h($catLicitaciones->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CatLicitaciones', 'action' => 'view', $catLicitaciones->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CatLicitaciones', 'action' => 'edit', $catLicitaciones->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CatLicitaciones', 'action' => 'delete', $catLicitaciones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catLicitaciones->id)]) ?>
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
