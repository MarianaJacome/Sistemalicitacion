<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CoGrupos Model
 *
 * @property \App\Model\Table\CoUsuariosTable&\Cake\ORM\Association\HasMany $CoUsuarios
 * @property \App\Model\Table\CoMenusTable&\Cake\ORM\Association\BelongsToMany $CoMenus
 * @property \App\Model\Table\CoPermisosTable&\Cake\ORM\Association\BelongsToMany $CoPermisos
 *
 * @method \App\Model\Entity\CoGrupo newEmptyEntity()
 * @method \App\Model\Entity\CoGrupo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CoGrupo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CoGrupo get($primaryKey, $options = [])
 * @method \App\Model\Entity\CoGrupo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CoGrupo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CoGrupo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CoGrupo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoGrupo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoGrupo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CoGrupo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CoGrupo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CoGrupo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CoGruposTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('co_grupos');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('CoUsuarios', [
            'foreignKey' => 'co_grupo_id',
        ]);
        $this->belongsToMany('CoMenus', [
            'foreignKey' => 'co_grupo_id',
            'targetForeignKey' => 'co_menu_id',
            'joinTable' => 'co_grupos_co_menus',
        ]);
        $this->belongsToMany('CoPermisos', [
            'foreignKey' => 'co_grupo_id',
            'targetForeignKey' => 'co_permiso_id',
            'joinTable' => 'co_grupos_co_permisos',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->uuid('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 45)
            ->allowEmptyString('name');

        $validator
            ->scalar('descripción')
            ->requirePresence('descripción', 'create')
            ->notEmptyString('descripción');

        $validator
            ->scalar('pagina_inicial')
            ->maxLength('pagina_inicial', 100)
            ->allowEmptyString('pagina_inicial');

        $validator
            ->boolean('activo')
            ->allowEmptyString('activo');

        return $validator;
    }
}
