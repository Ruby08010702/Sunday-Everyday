<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomersOrderDetailFixture
 */
class CustomersOrderDetailFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'customers_order_detail';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 'f01d13c8-e11a-4fc5-ab88-e496e811395a',
                'product_id' => 'd199d2c1-7cde-47c3-acc6-2929414d6e07',
                'order_id' => '220f4759-8252-428c-ba2a-beec65b79212',
                'price' => 1,
            ],
        ];
        parent::init();
    }
}
