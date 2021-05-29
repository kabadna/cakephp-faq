<?php
declare(strict_types=1);

namespace Faq\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Faqs Model
 *
 * @property \CakephpFaq\Model\Table\FaqCategoriesTable&\Cake\ORM\Association\BelongsTo $FaqCategories
 * @method \CakephpFaq\Model\Entity\Faq newEmptyEntity()
 * @method \CakephpFaq\Model\Entity\Faq newEntity(array $data, array $options = [])
 * @method \CakephpFaq\Model\Entity\Faq[] newEntities(array $data, array $options = [])
 * @method \CakephpFaq\Model\Entity\Faq get($primaryKey, $options = [])
 * @method \CakephpFaq\Model\Entity\Faq findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \CakephpFaq\Model\Entity\Faq patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \CakephpFaq\Model\Entity\Faq[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \CakephpFaq\Model\Entity\Faq|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakephpFaq\Model\Entity\Faq saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakephpFaq\Model\Entity\Faq[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \CakephpFaq\Model\Entity\Faq[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \CakephpFaq\Model\Entity\Faq[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \CakephpFaq\Model\Entity\Faq[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FaqsTable extends Table
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

        $this->setTable('faqs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('FaqCategories', [
            'foreignKey' => 'faq_category_id',
            'className' => 'CakephpFaq.FaqCategories',
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
            ->scalar('question')
            ->maxLength('question', 4096)
            ->requirePresence('question', 'create')
            ->notEmptyString('question');

        $validator
            ->scalar('answer')
            ->maxLength('answer', 4096)
            ->requirePresence('answer', 'create')
            ->notEmptyString('answer');

        $validator
            ->dateTime('open_period_from')
            ->notEmptyDateTime('open_period_from');

        $validator
            ->dateTime('open_period_to')
            ->notEmptyDateTime('open_period_to');

        $validator
            ->dateTime('when')
            ->allowEmptyDateTime('when');

        $validator
            ->integer('sort_seq')
            ->allowEmptyString('sort_seq');

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
        $rules->add($rules->existsIn(['faq_category_id'], 'FaqCategories'), ['errorField' => 'faq_category_id']);

        return $rules;
    }
}
