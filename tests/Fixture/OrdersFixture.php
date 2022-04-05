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
                'id' => '34dc0ec9-10cd-45d3-aad1-88db3a9b4bba',
                'cost' => 1.5,
                'payment' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'item_count' => 1,
                'date' => '2022-04-04',
                'po_id' => '6d7ed534-21c4-4fd6-943e-75e99a3f1a6a',
                'customer_id' => 'd4dc5cab-c19f-4f0c-9590-be81b177436c',
            ],
        ];
        parent::init();
    }
}
