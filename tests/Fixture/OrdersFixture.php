<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdersFixture
 */
class OrdersFixture extends TestFixture
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
                'id' => '642d3d8e-0d44-4d88-a4eb-2b5dcbad2ca9',
                'cost' => 1.5,
                'payment' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'item_count' => 1,
                'date' => '2022-04-07',
                'po_id' => '9af05580-2273-43ed-bbe7-96a8033bf4c1',
                'customer_id' => 'e8a2251e-b9aa-4ffd-a643-d4136bc2a237',
            ],
        ];
        parent::init();
    }
}
