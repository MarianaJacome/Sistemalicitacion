<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CatLicitacione Entity
 *
 * @property string $id
 * @property string|null $convocatoria
 * @property string|null $name
 * @property string|null $numero_licitacion
 * @property string|null $lugar
 * @property string|null $cat_municipio_id
 * @property string|null $monto
 * @property string|null $obra
 * @property bool|null $activo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\CatMunicipio $cat_municipio
 */
class CatLicitacione extends Entity
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
        'convocatoria' => true,
        'name' => true,
        'numero_licitacion' => true,
        'lugar' => true,
        'cat_municipio_id' => true,
        'monto' => true,
        'obra' => true,
        'activo' => true,
        'created' => true,
        'modified' => true,
        'cat_municipio' => true,
    ];
}
