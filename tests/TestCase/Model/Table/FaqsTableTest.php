<?php
declare(strict_types=1);

namespace Faq\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use Faq\Model\Table\FaqsTable;

/**
 * Faq\Model\Table\FaqsTable Test Case
 */
class FaqsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Faq\Model\Table\FaqsTable
     */
    protected FaqsTable $Faqs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.Faq.Faqs',
        'plugin.Faq.FaqCategories',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Faqs') ? [] : ['className' => FaqsTable::class];
        /** @var FaqsTable $faqsTable */
        $faqsTable = $this->getTableLocator()->get('Faqs', $config);
        $this->Faqs = $faqsTable;
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Faqs);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
