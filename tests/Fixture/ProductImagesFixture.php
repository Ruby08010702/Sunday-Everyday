<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductImagesFixture
 */
class ProductImagesFixture extends TestFixture
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
                'id' => 'd6df8568-b6c7-41c6-8460-c2c47d057670',
                'product_id' => 'e96c8ff3-c409-469a-bd87-47936f27c425',
                'filename' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
