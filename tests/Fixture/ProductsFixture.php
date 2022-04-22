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
                'id' => '4ee88f0c-8b6e-4929-9420-214fc7c0e2ff',
                'name' => 'Lorem ipsum dolor sit amet',
                'cost' => 1.5,
                'retail_price' => 1.5,
                'quantity' => 1,
                'supplier_id' => '581ffc5f-8637-416c-a9f2-5078c3f6ee05',
            ],
        ];
        parent::init();
    }
}
