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
                'id' => 'a69994c0-3e4b-4d15-8096-9eca2c000832',
                'item_count' => 1,
                'cost' => 1.5,
                'payment' => 'Lorem ipsum dolor sit amet',
                'date' => '2022-04-07',
                'product_arrival_date' => '2022-04-07',
                'supplier_id' => '4d62919a-9578-4655-ac60-ac18bf31b068',
            ],
        ];
        parent::init();
    }
}
