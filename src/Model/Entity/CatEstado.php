<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CatEstado Entity
 *
 * @property string $id
 * @property string $name
 * @property string|null $clave
 * @property string|null $abrev
 * @property bool|null $activo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\CatMunicipio[] $cat_municipios
 */
class CatEstado extends Entity
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
        'clave' => true,
        'abrev' => true,
        'activo' => true,
        'created' => true,
        'modified' => true,
        'cat_municipios' => true,
    ];
}
