<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RestockingsFixture
 */
class RestockingsFixture extends TestFixture
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
                'id' => '8f95cf73-5449-429e-8494-d640b5f2e607',
                'staff_id' => '22c78f96-ad33-4f3c-bce9-67166fb54ae4',
                'date' => '2022-04-22',
                'payment' => 'Lorem ipsum dolor sit amet',
                'quantity' => 1,
            ],
        ];
        parent::init();
    }
}
