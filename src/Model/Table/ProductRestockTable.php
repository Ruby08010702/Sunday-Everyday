<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductRestock Model
 *
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 * @property \App\Model\Table\RestockingOrdersTable&\Cake\ORM\Association\BelongsTo $RestockingOrders
 *
 * @method \App\Model\Entity\ProductRestock newEmptyEntity()
 * @method \App\Model\Entity\ProductRestock newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ProductRestock[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductRestock get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductRestock findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ProductRestock patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductRestock[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductRestock|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductRestock saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductRestock[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductRestock[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductRestock[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductRestock[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductRestockTable extends Table
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

        $this->setTable('product_restock');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('RestockingOrders', [
            'foreignKey' => 'rp_id',
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
            ->integer('amount')
            ->requirePresence('amount', 'create')
            ->notEmptyString('amount');

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
        $rules->add($rules->existsIn('product_id', 'Products'), ['errorField' => 'product_id']);
        $rules->add($rules->existsIn('rp_id', 'RestockingOrders'), ['errorField' => 'rp_id']);

        return $rules;
    }
}
