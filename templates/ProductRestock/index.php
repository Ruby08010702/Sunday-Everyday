<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductRestock[]|\Cake\Collection\CollectionInterface $productRestock
 */
?>
<div class="productRestock index content">
    <?= $this->Html->link(__('New Product Restock'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Product Restock') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('amount') ?></th>
                    <th><?= $this->Paginator->sort('cost') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('rp_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productRestock as $productRestock): ?>
                <tr>
                    <td><?= h($productRestock->id) ?></td>
                    <td><?= $this->Number->format($productRestock->amount) ?></td>
                    <td><?= $this->Number->format($productRestock->cost) ?></td>
                    <td><?= $productRestock->has('product') ? $this->Html->link($productRestock->product->name, ['controller' => 'Products', 'action' => 'view', $productRestock->product->id]) : '' ?></td>
                    <td><?= $productRestock->has('restocking_order') ? $this->Html->link($productRestock->restocking_order->id, ['controller' => 'RestockingOrders', 'action' => 'view', $productRestock->restocking_order->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productRestock->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productRestock->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productRestock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productRestock->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
