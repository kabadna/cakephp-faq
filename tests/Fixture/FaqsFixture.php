<?php
declare(strict_types=1);

namespace CakephpFaq\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FaqsFixture
 */
class FaqsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'question' => ['type' => 'string', 'length' => 4096, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '質問', 'precision' => null],
        'answer' => ['type' => 'string', 'length' => 4096, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '答え', 'precision' => null],
        'open_period_from' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => '1900-01-01 00:00:00', 'comment' => '公開期間（From）'],
        'open_period_to' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => '2999-12-31 23:59:59', 'comment' => '公開期間（To）'],
        'faq_category_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'カテゴリID', 'precision' => null, 'autoIncrement' => null],
        'when' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => '公開日'],
        'sort_seq' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => '99', 'comment' => '表示順', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'IX_FAQ_PERIOD' => ['type' => 'index', 'columns' => ['open_period_from', 'open_period_to'], 'length' => []],
            'IX_FAQ_CATEGORY_ID' => ['type' => 'index', 'columns' => ['faq_category_id'], 'length' => []],
            'IX_SORT_SEQ' => ['type' => 'index', 'columns' => ['sort_seq'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'question' => 'Lorem ipsum dolor sit amet',
                'answer' => 'Lorem ipsum dolor sit amet',
                'open_period_from' => '2021-05-06 09:38:40',
                'open_period_to' => '2021-05-06 09:38:40',
                'faq_category_id' => 1,
                'when' => '2021-05-06 09:38:40',
                'sort_seq' => 1,
                'created' => '2021-05-06 09:38:40',
                'modified' => '2021-05-06 09:38:40',
            ],
        ];
        parent::init();
    }
}
