<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property string $id
 * @property string $cost
 * @property string $payment
 * @property string $address
 * @property int $item_count
 * @property \Cake\I18n\FrozenDate $date
 * @property string $po_id
 * @property string $customer_id
 *
 * @property \App\Model\Entity\ProductOrder[] $product_orders
 * @property \App\Model\Entity\Customer $customer
 */
class Order extends Entity
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
        'cost' => true,
        'payment' => true,
        'address' => true,
        'item_count' => true,
        'date' => true,
        'po_id' => true,
        'customer_id' => true,
        'product_orders' => true,
        'customer' => true,
    ];
}
