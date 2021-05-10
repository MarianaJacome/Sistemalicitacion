<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CoPermiso Entity
 *
 * @property string $id
 * @property string|null $name
 * @property string|null $descripcion
 * @property string|null $controller
 * @property string|null $action
 * @property bool|null $activo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\CoGrupo[] $co_grupos
 */
class CoPermiso extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'descripcion' => true,
        'controller' => true,
        'action' => true,
        'activo' => true,
        'created' => true,
        'modified' => true,
        'co_grupos' => true,
    ];
}
