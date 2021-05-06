<?php
declare(strict_types=1);

namespace CakephpFaq\Model\Entity;

use Cake\ORM\Entity;

/**
 * Faq Entity
 *
 * @property int $id
 * @property string $question
 * @property string $answer
 * @property \Cake\I18n\FrozenTime $open_period_from
 * @property \Cake\I18n\FrozenTime $open_period_to
 * @property int|null $faq_category_id
 * @property \Cake\I18n\FrozenTime|null $when
 * @property int|null $sort_seq
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \CakephpFaq\Model\Entity\FaqCategory $faq_category
 */
class Faq extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'question' => true,
        'answer' => true,
        'open_period_from' => true,
        'open_period_to' => true,
        'faq_category_id' => true,
        'when' => true,
        'sort_seq' => true,
        'created' => true,
        'modified' => true,
        'faq_category' => true,
    ];
}
