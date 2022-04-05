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
                'id' => '1762a5e7-d06d-4691-b6b6-e4814343b197',
                'amount' => '43e53383-ebe4-47c1-9c23-acfc503eabd8',
                'product_id' => '26d85586-8b5d-4de7-9d6a-45be28be23cb',
                'order_id' => '450ec239-b2d6-4925-94d6-d690d8eb8b2f',
            ],
        ];
        parent::init();
    }
}
