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
                'id' => '1c94ad73-110d-444e-a263-c2deb1037a93',
                'name' => 'Lorem ipsum dolor sit amet',
                'cost' => 1.5,
                'retail_price' => 1.5,
                'stock' => 1,
                'supplier_id' => '47ccd559-8804-485f-bb62-a1d4452ec090',
            ],
        ];
        parent::init();
    }
}
