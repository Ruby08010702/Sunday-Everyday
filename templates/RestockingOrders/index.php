<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RestockingOrder[]|\Cake\Collection\CollectionInterface $restockingOrders
 */
?>
<div class="restockingOrders index content">
    <?= $this->Html->link(__('New Restocking Order'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Restocking Orders') ?></h3>
        <table id="ros_table">
            <thead>
                <tr>
                    <th><?= h('Item Count') ?></th>
                    <th><?= h('Cost') ?></th>
                    <th><?= h('Payment') ?></th>
                    <th><?= h('Date') ?></th>
                    <th><?= h('Product Arrival Date') ?></th>
                    <th><?= h('supplier_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($restockingOrders as $restockingOrder): ?>
                <tr>
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

<script>
    $(document).ready( function () {
        $('#ros_table').DataTable();
    } );
</script>
