<?php
declare(strict_types=1);

namespace CakephpFaq\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use CakephpFaq\Model\Table\FaqsTable;

/**
 * CakephpFaq\Model\Table\FaqsTable Test Case
 */
class FaqsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \CakephpFaq\Model\Table\FaqsTable
     */
    protected $Faqs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.CakephpFaq.Faqs',
        'plugin.CakephpFaq.FaqCategories',
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
        $this->Faqs = $this->getTableLocator()->get('Faqs', $config);
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
