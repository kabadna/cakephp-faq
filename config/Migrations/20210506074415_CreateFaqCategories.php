<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateFaqCategories extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * @return void
     */
    public function change()
    {
        $table = $this->table('faq_categories', [
            'comment' => 'FAQカテゴリ',
            'collation' => 'utf8mb4_general_ci',
        ]);

        $table->addColumn('name', 'string', [
            'comment' => 'カテゴリ名',
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('sort_seq', 'integer', [
            'comment' => '表示順',
            'null' => true,
            'default' => 99,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => true,
        ]);

        $table->addIndex('sort_seq', ['name' => 'IX_SORT_SEQ']);

        $table->create();
    }
}
