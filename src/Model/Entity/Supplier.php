<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Supplier Entity
 *
 * @property string $id
 * @property string $business_name
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property int|null $order_count
 * @property int $abn
 *
 * @property \App\Model\Entity\Product[] $products
 * @property \App\Model\Entity\RestockingOrder[] $restocking_orders
 */
class Supplier extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'business_name' => true,
        'address' => true,
        'phone' => true,
        'email' => true,
        'order_count' => true,
        'abn' => true,
        'products' => true,
        'restocking_orders' => true,
    ];
}
