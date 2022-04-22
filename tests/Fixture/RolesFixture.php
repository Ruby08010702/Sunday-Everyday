<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RolesFixture
 */
class RolesFixture extends TestFixture
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
                'id' => 'ba13a69e-052c-433d-99a5-017e4b67990d',
                'name' => 'Lorem ipsum dolor sit amet',
                'role_desc' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
