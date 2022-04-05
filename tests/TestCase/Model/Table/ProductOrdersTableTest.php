<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductOrdersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductOrdersTable Test Case
 */
class ProductOrdersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductOrdersTable
     */
    protected $ProductOrders;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ProductOrders',
        'app.Products',
        'app.Orders',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProductOrders') ? [] : ['className' => ProductOrdersTable::class];
        $this->ProductOrders = $this->getTableLocator()->get('ProductOrders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ProductOrders);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProductOrdersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProductOrdersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
