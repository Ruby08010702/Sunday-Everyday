<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductOrdersFixture
 */
class ProductOrdersFixture extends TestFixture
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
                'id' => 'ce5cd305-dea0-4697-a285-2838a23533ad',
                'amount' => '1eba90ad-06a3-45a4-877f-79d4df90742b',
                'product_id' => '2920236b-635a-4ee5-a54a-4518e127b050',
                'order_id' => '8b412ce8-4882-4828-9511-a798bda3be6c',
            ],
        ];
        parent::init();
    }
}
