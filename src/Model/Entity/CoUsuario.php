<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * CoUsuario Entity
 *
 * @property string $id
 * @property string $co_grupo_id
 * @property string|null $nombre
 * @property string|null $paterno
 * @property string|null $materno
 * @property bool|null $activo
 * @property string|null $login
 * @property string|null $password
 * @property \Cake\I18n\FrozenTime|null $ultimo_acceso
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\CoGrupo $co_grupo
 */
class CoUsuario extends Entity
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
        'co_grupo_id' => true,
        'nombre' => true,
        'paterno' => true,
        'materno' => true,
        'activo' => true,
        'login' => true,
        'password' => true,
        'ultimo_acceso' => true,
        'created' => true,
        'modified' => true,
        'co_grupo' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
}
