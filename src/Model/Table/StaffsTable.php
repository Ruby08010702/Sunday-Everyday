<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Staffs Model
 *
 * @property \App\Model\Table\RestockingsTable&\Cake\ORM\Association\HasMany $Restockings
 *
 * @method \App\Model\Entity\Staff newEmptyEntity()
 * @method \App\Model\Entity\Staff newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Staff[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Staff get($primaryKey, $options = [])
 * @method \App\Model\Entity\Staff findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Staff patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Staff[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Staff|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Staff saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Staff[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Staff[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Staff[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Staff[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class StaffsTable extends Table
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

        $this->setTable('staffs');
        $this->setDisplayField('first_name');
        $this->setPrimaryKey('id');

        $this->hasMany('Restockings', [
            'foreignKey' => 'staff_id',
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
            ->scalar('first_name')
            ->maxLength('first_name', 64, 'Name must be shortened.')
            ->minLength('first_name', 2, 'Must be longer than 1 character.')
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name', 'This field cannot be empty.');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 64, 'Name must be shortened.')
            ->minLength('last_name', 2, 'Must be longer than 1 character.')
            ->requirePresence('last_name', 'create')
            ->notEmptyString('last_name', 'This field cannot be empty.');

        $validator
            ->scalar('username')
            ->maxLength('username', 36, 'Username is too long.')
            ->minLength('username', 5, 'Must be longer than 4 characters.')
            ->requirePresence('username', 'create')
            ->notEmptyString('username', 'Please input a unique username. eg: user3856')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table', 'message' => 'This field must be unique.']);

        $validator
            ->scalar('password')
            ->maxLength('password', 128,'Password should not over 128 digit')
            ->minLength('password', 8, 'Must be longer than 8 characters')
            ->requirePresence('password', 'create')
            ->notEmptyString('password', 'This field cannot be empty.');

        $validator
            ->scalar('address')
            ->maxLength('address', 200, 'Address must be shortened.')
            ->minLength('address', 3, 'Must be longer than 3 characters.')
            ->requirePresence('address', 'create', 'This field cannot be empty.')
            ->notEmptyString('address', 'This field cannot be empty.');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->maxLength('email', 72, 'Email must be shortened.')
            ->minLength('email', 5, 'Must be longer than 5 characters.')
            ->notEmptyString('email', 'This field cannot be empty.')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('phone')
            ->maxLength('phone', 10,'Incorrect phone number length. eg:0412xxxxxx')
            ->minLength('phone',10,'Incorrect phone number length. eg:0412xxxxxx')
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone', 'Please input a valid phone number. eg:0414xxxxxx')
            ->add('phone', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);
        $rules->add($rules->isUnique(['phone']), ['errorField' => 'phone']);

        return $rules;
    }
}
