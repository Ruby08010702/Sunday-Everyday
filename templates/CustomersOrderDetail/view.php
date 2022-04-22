<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomersOrderDetail $customersOrderDetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Customers Order Detail'), ['action' => 'edit', $customersOrderDetail->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Customers Order Detail'), ['action' => 'delete', $customersOrderDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customersOrderDetail->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Customers Order Detail'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Customers Order Detail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customersOrderDetail view content">
            <h3><?= h($customersOrderDetail->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($customersOrderDetail->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $customersOrderDetail->has('product') ? $this->Html->link($customersOrderDetail->product->name, ['controller' => 'Products', 'action' => 'view', $customersOrderDetail->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $customersOrderDetail->has('order') ? $this->Html->link($customersOrderDetail->order->id, ['controller' => 'Orders', 'action' => 'view', $customersOrderDetail->order->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($customersOrderDetail->price) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
