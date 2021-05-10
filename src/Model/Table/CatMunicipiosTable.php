<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CatMunicipios Model
 *
 * @property \App\Model\Table\CatEstadosTable&\Cake\ORM\Association\BelongsTo $CatEstados
 * @property \App\Model\Table\CatLicitacionesTable&\Cake\ORM\Association\HasMany $CatLicitaciones
 *
 * @method \App\Model\Entity\CatMunicipio newEmptyEntity()
 * @method \App\Model\Entity\CatMunicipio newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CatMunicipio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CatMunicipio get($primaryKey, $options = [])
 * @method \App\Model\Entity\CatMunicipio findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CatMunicipio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CatMunicipio[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CatMunicipio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CatMunicipio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CatMunicipio[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CatMunicipio[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CatMunicipio[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CatMunicipio[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CatMunicipiosTable extends Table
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

        $this->setTable('cat_municipios');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('CatEstados', [
            'foreignKey' => 'cat_estado_id',
        ]);
        $this->hasMany('CatLicitaciones', [
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
            ->scalar('name')
            ->maxLength('name', 45)
            ->allowEmptyString('name');

        $validator
            ->integer('id_municipio_ine')
            ->allowEmptyString('id_municipio_ine');

        $validator
            ->scalar('clave')
            ->maxLength('clave', 4)
            ->allowEmptyString('clave');

        $validator
            ->integer('meta')
            ->allowEmptyString('meta');

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
        $rules->add($rules->existsIn(['cat_estado_id'], 'CatEstados'), ['errorField' => 'cat_estado_id']);

        return $rules;
    }
}
