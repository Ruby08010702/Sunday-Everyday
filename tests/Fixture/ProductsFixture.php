<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsFixture
 */
class ProductsFixture extends TestFixture
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
                'id' => '35e0c156-28c0-4037-b406-fb1835d29fa1',
                'name' => 'Lorem ipsum dolor sit amet',
                'cost' => 1.5,
                'retail_price' => 1.5,
                'stock' => 1,
                'supplier_id' => 'd10e2ef3-0b59-4bfc-b076-9fe79a677a8a',
            ],
        ];
        parent::init();
    }
}
