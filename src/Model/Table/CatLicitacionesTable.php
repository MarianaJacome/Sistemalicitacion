<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CatLicitaciones Model
 *
 * @property \App\Model\Table\CatMunicipiosTable&\Cake\ORM\Association\BelongsTo $CatMunicipios
 *
 * @method \App\Model\Entity\CatLicitacione newEmptyEntity()
 * @method \App\Model\Entity\CatLicitacione newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CatLicitacione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CatLicitacione get($primaryKey, $options = [])
 * @method \App\Model\Entity\CatLicitacione findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CatLicitacione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CatLicitacione[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CatLicitacione|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CatLicitacione saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CatLicitacione[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CatLicitacione[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CatLicitacione[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CatLicitacione[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CatLicitacionesTable extends Table
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

        $this->setTable('cat_licitaciones');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('CatMunicipios', [
            'foreignKey' => 'cat_municipio_id',
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
            ->scalar('convocatoria')
            ->maxLength('convocatoria', 36)
            ->allowEmptyString('convocatoria');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->allowEmptyString('name');

        $validator
            ->scalar('numero_licitacion')
            ->maxLength('numero_licitacion', 50)
            ->allowEmptyString('numero_licitacion');

        $validator
            ->scalar('lugar')
            ->maxLength('lugar', 50)
            ->allowEmptyString('lugar');

        $validator
            ->decimal('monto')
            ->allowEmptyString('monto');

        $validator
            ->scalar('obra')
            ->maxLength('obra', 200)
            ->allowEmptyString('obra');

        $validator
            ->boolean('activo')
            ->allowEmptyString('activo');

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
        $rules->add($rules->existsIn(['cat_municipio_id'], 'CatMunicipios'), ['errorField' => 'cat_municipio_id']);

        return $rules;
    }
}
