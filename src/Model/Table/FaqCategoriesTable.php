<?php
declare(strict_types=1);

namespace Faq\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FaqCategories Model
 *
 * @property \Faq\Model\Table\FaqsTable&\Cake\ORM\Association\HasMany $Faqs
 * @method \Faq\Model\Entity\FaqCategory newEmptyEntity()
 * @method \Faq\Model\Entity\FaqCategory newEntity(array $data, array $options = [])
 * @method \Faq\Model\Entity\FaqCategory[] newEntities(array $data, array $options = [])
 * @method \Faq\Model\Entity\FaqCategory get($primaryKey, $options = [])
 * @method \Faq\Model\Entity\FaqCategory findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \Faq\Model\Entity\FaqCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Faq\Model\Entity\FaqCategory[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \Faq\Model\Entity\FaqCategory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Faq\Model\Entity\FaqCategory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Faq\Model\Entity\FaqCategory[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \Faq\Model\Entity\FaqCategory[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \Faq\Model\Entity\FaqCategory[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \Faq\Model\Entity\FaqCategory[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FaqCategoriesTable extends Table
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

        $this->setTable('faq_categories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Faqs', [
            'foreignKey' => 'faq_category_id',
            'className' => 'Faq.Faqs',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 256)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->integer('sort_seq')
            ->allowEmptyString('sort_seq');

        return $validator;
    }
}
