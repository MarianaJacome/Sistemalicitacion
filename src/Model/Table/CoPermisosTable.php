<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CoPermisos Model
 *
 * @property \App\Model\Table\CoGruposTable&\Cake\ORM\Association\BelongsToMany $CoGrupos
 *
 * @method \App\Model\Entity\CoPermiso newEmptyEntity()
 * @method \App\Model\Entity\CoPermiso newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CoPermiso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CoPermiso get($primaryKey, $options = [])
 * @method \App\Model\Entity\CoPermiso findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CoPermiso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CoPermiso[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CoPermiso|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoPermiso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoPermiso[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CoPermiso[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CoPermiso[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CoPermiso[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CoPermisosTable extends Table
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

        $this->setTable('co_permisos');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('CoGrupos', [
            'foreignKey' => 'co_permiso_id',
            'targetForeignKey' => 'co_grupo_id',
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
            ->scalar('descripcion')
            ->allowEmptyString('descripcion');

        $validator
            ->scalar('controller')
            ->maxLength('controller', 45)
            ->allowEmptyString('controller');

        $validator
            ->scalar('action')
            ->maxLength('action', 45)
            ->allowEmptyString('action');

        $validator
            ->boolean('activo')
            ->allowEmptyString('activo');

        return $validator;
    }
}
