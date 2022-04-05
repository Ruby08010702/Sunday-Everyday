<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductOrder[]|\Cake\Collection\CollectionInterface $productOrders
 */
?>
<div class="productOrders index content">
    <?= $this->Html->link(__('New Product Order'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Product Orders') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('amount') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('order_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productOrders as $productOrder): ?>
                <tr>
                    <td><?= h($productOrder->id) ?></td>
                    <td><?= h($productOrder->amount) ?></td>
                    <td><?= $productOrder->has('product') ? $this->Html->link($productOrder->product->name, ['controller' => 'Products', 'action' => 'view', $productOrder->product->id]) : '' ?></td>
                    <td><?= $productOrder->has('order') ? $this->Html->link($productOrder->order->id, ['controller' => 'Orders', 'action' => 'view', $productOrder->order->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productOrder->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productOrder->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productOrder->id)]) ?>
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
