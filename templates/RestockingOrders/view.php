<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RestockingOrder $restockingOrder
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Restocking Order'), ['action' => 'edit', $restockingOrder->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Restocking Order'), ['action' => 'delete', $restockingOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $restockingOrder->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Restocking Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Restocking Order'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="restockingOrders view content">
            <table>
                <tr>
                    <th><?= __('Payment') ?></th>
                    <td><?= h($restockingOrder->payment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier') ?></th>
                    <td><?= $restockingOrder->has('supplier') ? $this->Html->link($restockingOrder->supplier->business_name, ['controller' => 'Suppliers', 'action' => 'view', $restockingOrder->supplier->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Item Count') ?></th>
                    <td><?= $this->Number->format($restockingOrder->item_count) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cost') ?></th>
                    <td><?= $this->Number->format($restockingOrder->cost) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($restockingOrder->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Arrival Date') ?></th>
                    <td><?= h($restockingOrder->product_arrival_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
