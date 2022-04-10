<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductRestockFixture
 */
class ProductRestockFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'product_restock';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => '905484f4-1474-49db-a238-4d371f3678ec',
                'amount' => 1,
                'cost' => 1.5,
                'product_id' => 'cd3c3908-8e5c-4212-b680-ec093a53afb4',
                'rp_id' => '24b84e64-d804-4db2-9565-a14643bfc3ea',
            ],
        ];
        parent::init();
    }
}
