<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CoUsuarios Model
 *
 * @property \App\Model\Table\CoGruposTable&\Cake\ORM\Association\BelongsTo $CoGrupos
 *
 * @method \App\Model\Entity\CoUsuario newEmptyEntity()
 * @method \App\Model\Entity\CoUsuario newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CoUsuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CoUsuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\CoUsuario findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CoUsuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CoUsuario[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CoUsuario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoUsuario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoUsuario[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CoUsuario[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CoUsuario[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CoUsuario[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CoUsuariosTable extends Table
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

        $this->setTable('co_usuarios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('CoGrupos', [
            'foreignKey' => 'co_grupo_id',
            'joinType' => 'INNER',
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
            ->scalar('nombre')
            ->maxLength('nombre', 120)
            ->allowEmptyString('nombre');

        $validator
            ->scalar('paterno')
            ->maxLength('paterno', 120)
            ->allowEmptyString('paterno');

        $validator
            ->scalar('materno')
            ->maxLength('materno', 120)
            ->allowEmptyString('materno');

        $validator
            ->boolean('activo')
            ->allowEmptyString('activo');

        $validator
            ->scalar('login')
            ->maxLength('login', 100)
            ->allowEmptyString('login');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->allowEmptyString('password');

        $validator
            ->dateTime('ultimo_acceso')
            ->allowEmptyDateTime('ultimo_acceso');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['login']), ['errorField' => 'login']);
        $rules->add($rules->existsIn(['co_grupo_id'], 'CoGrupos'), ['errorField' => 'co_grupo_id']);

        return $rules;
    }
}
