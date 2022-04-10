<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductRestock $productRestock
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product Restock'), ['action' => 'edit', $productRestock->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product Restock'), ['action' => 'delete', $productRestock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productRestock->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Product Restock'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product Restock'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productRestock view content">
            <h3><?= h($productRestock->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($productRestock->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $productRestock->has('product') ? $this->Html->link($productRestock->product->name, ['controller' => 'Products', 'action' => 'view', $productRestock->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Restocking Order') ?></th>
                    <td><?= $productRestock->has('restocking_order') ? $this->Html->link($productRestock->restocking_order->id, ['controller' => 'RestockingOrders', 'action' => 'view', $productRestock->restocking_order->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $this->Number->format($productRestock->amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cost') ?></th>
                    <td><?= $this->Number->format($productRestock->cost) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
