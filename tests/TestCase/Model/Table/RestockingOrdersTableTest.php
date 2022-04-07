<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RestockingOrdersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RestockingOrdersTable Test Case
 */
class RestockingOrdersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RestockingOrdersTable
     */
    protected $RestockingOrders;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.RestockingOrders',
        'app.Suppliers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RestockingOrders') ? [] : ['className' => RestockingOrdersTable::class];
        $this->RestockingOrders = $this->getTableLocator()->get('RestockingOrders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->RestockingOrders);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RestockingOrdersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RestockingOrdersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
