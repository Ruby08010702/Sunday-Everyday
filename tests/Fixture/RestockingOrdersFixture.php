<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RestockingOrdersFixture
 */
class RestockingOrdersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 'bce02484-60a5-4b26-b907-266911078af9',
                'item_count' => 1,
                'cost' => 1.5,
                'payment' => 'Lorem ipsum dolor sit amet',
                'date' => '2022-04-04',
                'product_arrival_date' => '2022-04-04',
                'supplier_id' => '87f7cfb8-bb24-467e-8cf3-051f63362b5f',
            ],
        ];
        parent::init();
    }
}
