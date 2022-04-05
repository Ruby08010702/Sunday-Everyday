<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property string $id
 * @property string $name
 * @property string $cost
 * @property string $retail_price
 * @property int $stock
 * @property string $supplier_id
 *
 * @property \App\Model\Entity\Supplier $supplier
 * @property \App\Model\Entity\ProductOrder[] $product_orders
 * @property \App\Model\Entity\ProductRestock[] $product_restock
 */
class Product extends Entity
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
        'name' => true,
        'cost' => true,
        'retail_price' => true,
        'stock' => true,
        'supplier_id' => true,
        'supplier' => true,
        'product_orders' => true,
        'product_restock' => true,
    ];
}
