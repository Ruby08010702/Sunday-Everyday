<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomersOrderDetail[]|\Cake\Collection\CollectionInterface $customersOrderDetail
 */
?>
<div class="customersOrderDetail index content">
    <?= $this->Html->link(__('New Customers Order Detail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Customers Order Detail') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('order_id') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customersOrderDetail as $customersOrderDetail): ?>
                <tr>
                    <td><?= h($customersOrderDetail->id) ?></td>
                    <td><?= $customersOrderDetail->has('product') ? $this->Html->link($customersOrderDetail->product->name, ['controller' => 'Products', 'action' => 'view', $customersOrderDetail->product->id]) : '' ?></td>
                    <td><?= $customersOrderDetail->has('order') ? $this->Html->link($customersOrderDetail->order->id, ['controller' => 'Orders', 'action' => 'view', $customersOrderDetail->order->id]) : '' ?></td>
                    <td><?= $this->Number->format($customersOrderDetail->price) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $customersOrderDetail->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customersOrderDetail->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customersOrderDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customersOrderDetail->id)]) ?>
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
