<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductOrder $productOrder
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product Order'), ['action' => 'edit', $productOrder->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product Order'), ['action' => 'delete', $productOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productOrder->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Product Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product Order'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productOrders view content">
            <h3><?= h($productOrder->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($productOrder->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= h($productOrder->amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $productOrder->has('product') ? $this->Html->link($productOrder->product->name, ['controller' => 'Products', 'action' => 'view', $productOrder->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $productOrder->has('order') ? $this->Html->link($productOrder->order->id, ['controller' => 'Orders', 'action' => 'view', $productOrder->order->id]) : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
