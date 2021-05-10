<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CatMunicipio Entity
 *
 * @property string $id
 * @property string|null $name
 * @property string|null $cat_estado_id
 * @property int|null $id_municipio_ine
 * @property string|null $clave
 * @property int|null $meta
 * @property bool|null $activo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\CatEstado $cat_estado
 * @property \App\Model\Entity\CatLicitacione[] $cat_licitaciones
 */
class CatMunicipio extends Entity
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
        'cat_estado_id' => true,
        'id_municipio_ine' => true,
        'clave' => true,
        'meta' => true,
        'activo' => true,
        'created' => true,
        'modified' => true,
        'cat_estado' => true,
        'cat_licitaciones' => true,
    ];
}
