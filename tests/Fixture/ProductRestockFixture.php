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
                'id' => '81e057c6-1f69-4897-8b05-40be1e8de114',
                'amount' => 1,
                'cost' => 1.5,
                'product_id' => '00b57daf-0198-4061-abed-4f9054751c69',
                'rp_id' => 'bad47ea7-8f19-44ce-bcc0-9644c01d3f72',
            ],
        ];
        parent::init();
    }
}
