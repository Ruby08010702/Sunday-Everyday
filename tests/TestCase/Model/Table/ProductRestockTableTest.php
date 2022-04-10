<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductRestockTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductRestockTable Test Case
 */
class ProductRestockTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductRestockTable
     */
    protected $ProductRestock;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ProductRestock',
        'app.Products',
        'app.RestockingOrders',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProductRestock') ? [] : ['className' => ProductRestockTable::class];
        $this->ProductRestock = $this->getTableLocator()->get('ProductRestock', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ProductRestock);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProductRestockTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProductRestockTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
