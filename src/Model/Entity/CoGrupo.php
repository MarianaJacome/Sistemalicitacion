<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CoGrupo Entity
 *
 * @property string $id
 * @property string|null $name
 * @property string $descripción
 * @property string|null $pagina_inicial
 * @property bool|null $activo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\CoUsuario[] $co_usuarios
 * @property \App\Model\Entity\CoMenu[] $co_menus
 * @property \App\Model\Entity\CoPermiso[] $co_permisos
 */
class CoGrupo extends Entity
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
        'descripción' => true,
        'pagina_inicial' => true,
        'activo' => true,
        'created' => true,
        'modified' => true,
        'co_usuarios' => true,
        'co_menus' => true,
        'co_permisos' => true,
    ];
}
