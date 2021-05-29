<?php
declare(strict_types=1);

namespace Faq\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use Faq\Model\Table\FaqCategoriesTable;

/**
 * Faq\Model\Table\FaqCategoriesTable Test Case
 */
class FaqCategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Faq\Model\Table\FaqCategoriesTable
     */
    protected $FaqCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.Faq.FaqCategories',
        'plugin.Faq.Faqs',
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
