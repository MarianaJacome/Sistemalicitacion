<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CoMenu Entity
 *
 * @property string $id
 * @property string|null $co_menu_id
 * @property string|null $icon
 * @property string|null $name
 * @property int|null $posicion
 * @property string|null $destino
 * @property bool|null $activo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\CoMenu[] $co_menus
 * @property \App\Model\Entity\CoGrupo[] $co_grupos
 */
class CoMenu extends Entity
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
        'co_menu_id' => true,
        'icon' => true,
        'name' => true,
        'posicion' => true,
        'destino' => true,
        'activo' => true,
        'created' => true,
        'modified' => true,
        'co_menus' => true,
        'co_grupos' => true,
    ];
}
