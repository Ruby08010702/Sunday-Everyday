<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductRestock Entity
 *
 * @property string $id
 * @property int $amount
 * @property string $cost
 * @property string $product_id
 * @property string $rp_id
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\RestockingOrder $restocking_order
 */
class ProductRestock extends Entity
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
        'amount' => true,
        'cost' => true,
        'product_id' => true,
        'rp_id' => true,
        'product' => true,
        'restocking_order' => true,
    ];
}
