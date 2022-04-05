<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RestockingOrder[]|\Cake\Collection\CollectionInterface $restockingOrders
 */
?>
<div class="restockingOrders index content">
    <?= $this->Html->link(__('New Restocking Order'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Restocking Orders') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('item_count') ?></th>
                    <th><?= $this->Paginator->sort('cost') ?></th>
                    <th><?= $this->Paginator->sort('payment') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('product_arrival_date') ?></th>
                    <th><?= $this->Paginator->sort('supplier_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($restockingOrders as $restockingOrder): ?>
                <tr>
                    <td><?= h($restockingOrder->id) ?></td>
                    <td><?= $this->Number->format($restockingOrder->item_count) ?></td>
                    <td><?= $this->Number->format($restockingOrder->cost) ?></td>
                    <td><?= h($restockingOrder->payment) ?></td>
                    <td><?= h($restockingOrder->date) ?></td>
                    <td><?= h($restockingOrder->product_arrival_date) ?></td>
                    <td><?= $restockingOrder->has('supplier') ? $this->Html->link($restockingOrder->supplier->id, ['controller' => 'Suppliers', 'action' => 'view', $restockingOrder->supplier->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $restockingOrder->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $restockingOrder->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $restockingOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $restockingOrder->id)]) ?>
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
