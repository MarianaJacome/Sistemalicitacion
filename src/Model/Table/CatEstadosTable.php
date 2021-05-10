<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CatEstados Model
 *
 * @property \App\Model\Table\CatMunicipiosTable&\Cake\ORM\Association\HasMany $CatMunicipios
 *
 * @method \App\Model\Entity\CatEstado newEmptyEntity()
 * @method \App\Model\Entity\CatEstado newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CatEstado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CatEstado get($primaryKey, $options = [])
 * @method \App\Model\Entity\CatEstado findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CatEstado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CatEstado[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CatEstado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CatEstado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CatEstado[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CatEstado[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CatEstado[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CatEstado[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CatEstadosTable extends Table
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

        $this->setTable('cat_estados');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('CatMunicipios', [
            'foreignKey' => 'cat_estado_id',
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
            ->maxLength('name', 120)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('clave')
            ->maxLength('clave', 2)
            ->allowEmptyString('clave');

        $validator
            ->scalar('abrev')
            ->maxLength('abrev', 15)
            ->allowEmptyString('abrev');

        $validator
            ->boolean('activo')
            ->allowEmptyString('activo');

        return $validator;
    }
}
