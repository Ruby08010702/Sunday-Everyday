<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RestockingOrder Entity
 *
 * @property string $id
 * @property int $item_count
 * @property string $cost
 * @property string $payment
 * @property \Cake\I18n\FrozenDate $date
 * @property \Cake\I18n\FrozenDate $product_arrival_date
 * @property string $supplier_id
 *
 * @property \App\Model\Entity\Supplier $supplier
 */
class RestockingOrder extends Entity
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
        'item_count' => true,
        'cost' => true,
        'payment' => true,
        'date' => true,
        'product_arrival_date' => true,
        'supplier_id' => true,
        'supplier' => true,
    ];
}
