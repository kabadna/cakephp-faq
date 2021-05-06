<?php
declare(strict_types=1);

namespace CakephpFaq\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FaqCategoriesFixture
 */
class FaqCategoriesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 256, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'カテゴリ名', 'precision' => null],
        'sort_seq' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => '99', 'comment' => '表示順', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
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
                'name' => 'Lorem ipsum dolor sit amet',
                'sort_seq' => 1,
                'created' => '2021-05-06 09:38:49',
                'modified' => '2021-05-06 09:38:49',
            ],
        ];
        parent::init();
    }
}
