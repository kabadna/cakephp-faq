<?php
declare(strict_types=1);

namespace Faq\Model\Entity;

use Cake\ORM\Entity;

/**
 * FaqCategory Entity
 *
 * @property int $id
 * @property string $name
 * @property int|null $sort_seq
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \CakephpFaq\Model\Entity\Faq[] $faqs
 */
class FaqCategory extends Entity
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
        'name' => true,
        'sort_seq' => true,
        'created' => true,
        'modified' => true,
        'faqs' => true,
    ];
}
