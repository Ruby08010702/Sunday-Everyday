<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carts Model
 *
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\CustomerProductsCartDetailTable&\Cake\ORM\Association\HasMany $CustomerProductsCartDetail
 *
 * @method \App\Model\Entity\Cart newEmptyEntity()
 * @method \App\Model\Entity\Cart newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Cart[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cart get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cart findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Cart patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cart[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cart|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cart saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cart[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cart[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cart[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cart[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CartsTable extends Table
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

        $this->setTable('carts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('CustomerProductsCartDetail', [
            'foreignKey' => 'cart_id',
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
            ->uuid('customer_id')
            ->requirePresence('customer_id', 'create')
            ->notEmptyString('customer_id');

        $validator
            ->integer('items_no')
            ->requirePresence('items_no', 'create')
            ->notEmptyString('items_no');

        $validator
            ->decimal('cost')
            ->requirePresence('cost', 'create')
            ->notEmptyString('cost');

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
        $rules->add($rules->existsIn('customer_id', 'Customers'), ['errorField' => 'customer_id']);

        return $rules;
    }
}
