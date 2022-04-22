<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StaffsRestockingDetailFixture
 */
class StaffsRestockingDetailFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'staffs_restocking_detail';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => '9a5d5a31-7c3d-4101-8cab-495216dee7df',
                'product_id' => '35f46142-346d-4a2e-82a2-066e2fb6bdc3',
                'restocking_id' => 'f7716db1-41e5-4f87-98e9-f177764eaa39',
                'quantity' => 1,
            ],
        ];
        parent::init();
    }
}
