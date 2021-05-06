<?php
declare(strict_types=1);

namespace CakephpFaq\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use CakephpFaq\Model\Table\FaqCategoriesTable;

/**
 * CakephpFaq\Model\Table\FaqCategoriesTable Test Case
 */
class FaqCategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \CakephpFaq\Model\Table\FaqCategoriesTable
     */
    protected $FaqCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.CakephpFaq.FaqCategories',
        'plugin.CakephpFaq.Faqs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('FaqCategories') ? [] : ['className' => FaqCategoriesTable::class];
        $this->FaqCategories = $this->getTableLocator()->get('FaqCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->FaqCategories);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
