<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateFaqs extends AbstractMigration
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
        $table = $this->table('faqs', [
            'comment' => 'FAQ',
            'collation' => 'utf8mb4_general_ci',
        ]);

        $table->addColumn('question', 'string', [
            'comment' => '質問',
            'default' => null,
            'limit' => 4096,
            'null' => false,
        ]);
        $table->addColumn('answer', 'string', [
            'comment' => '答え',
            'default' => null,
            'limit' => 4096,
            'null' => false,
        ]);
        $table->addColumn('open_period_from', 'datetime', [
            'comment' => '公開期間（From）',
            'null' => false,
            'default' => '1900-01-01 00:00:00',
        ]);
        $table->addColumn('open_period_to', 'datetime', [
            'comment' => '公開期間（To）',
            'null' => false,
            'default' => '2999-12-31 23:59:59',
        ]);
        $table->addColumn('faq_category_id', 'integer', [
            'comment' => 'カテゴリID',
            'null' => true,
            'default' => null,
            'limit' => 11,
        ]);
        $table->addColumn('when', 'datetime', [
            'comment' => '公開日',
            'null' => true,
            'default' => null,
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

        $table->addIndex(
            ['open_period_from', 'open_period_to'],
            ['name' => 'IX_FAQ_PERIOD']
        );
        $table->addIndex('faq_category_id', ['name' => 'IX_FAQ_CATEGORY_ID']);
        $table->addIndex('sort_seq', ['name' => 'IX_SORT_SEQ']);

        $table->create();
    }
}
