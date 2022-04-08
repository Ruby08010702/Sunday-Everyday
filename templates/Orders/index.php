<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<div class="orders index content">
    <?= $this->Html->link(__('New Order'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orders') ?></h3>
        <table id="orders_table">
            <thead>
                <tr>
                    <th><?= h('Cost') ?></th>
                    <th><?= h('Payment') ?></th>
                    <th><?= h('Address') ?></th>
                    <th><?= h('Item Count') ?></th>
                    <th><?= h('Date') ?></th>
                    <th><?= h('po_id') ?></th>
                    <th><?= h('customer_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= $this->Number->format($order->cost) ?></td>
                    <td><?= h($order->payment) ?></td>
                    <td><?= h($order->address) ?></td>
                    <td><?= $this->Number->format($order->item_count) ?></td>
                    <td><?= h($order->date) ?></td>
                    <td><?= h($order->po_id) ?></td>
                    <td><?= $order->has('customer') ? $this->Html->link($order->customer->id, ['controller' => 'Customers', 'action' => 'view', $order->customer->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>
<script>
    $(document).ready( function () {
        $('#orders_table').DataTable();
    } );
</script>
