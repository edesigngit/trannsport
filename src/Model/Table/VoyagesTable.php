<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Voyages Model
 *
 * @method \App\Model\Entity\Voyage get($primaryKey, $options = [])
 * @method \App\Model\Entity\Voyage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Voyage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Voyage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Voyage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Voyage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Voyage findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VoyagesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('voyages');
        $this->displayField('num');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->date('dates')
            ->allowEmpty('dates');

        $validator
            ->allowEmpty('destination');

        return $validator;
    }
}
