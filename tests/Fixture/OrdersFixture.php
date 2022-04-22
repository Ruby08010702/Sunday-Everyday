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
                'id' => 'a494aef8-d9a8-4d78-af8d-ace681f687bb',
                'customer_id' => '9172eb2d-b94c-4acc-b6eb-e0dc281d0491',
                'date' => '2022-04-22',
                'payment' => 'Lorem ipsum dolor sit amet',
                'quantity' => 1,
            ],
        ];
        parent::init();
    }
}
