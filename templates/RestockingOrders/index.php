<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RestockingOrder[]|\Cake\Collection\CollectionInterface $restockingOrders
 */
?>
<div class="restockingOrders index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Restocking Orders') ?></h1>
        <a href="<?=$this->Url->build(['action'=>'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New Order</a>
    </div>

        <table id="ros_table">
            <thead>
                <tr>
                    <th><?= h('Item Count') ?></th>
                    <th><?= h('Cost') ?></th>
                    <th><?= h('Payment') ?></th>
                    <th><?= h('Date') ?></th>
                    <th><?= h('Product Arrival Date') ?></th>
                    <th><?= h('Supplier') ?></th>
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
                    <td><?= $restockingOrder->has('supplier') ? $this->Html->link($restockingOrder->supplier->business_name, ['controller' => 'Suppliers', 'action' => 'view', $restockingOrder->supplier->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $restockingOrder->id]) ?>
                        <?= $this->Html->link("<i class=\"far fa-edit\"></i>", ['action' => 'edit', $restockingOrder->id],['escape' => false,]) ?>
                        <?= $this->Form->postLink("<i class=\"fas fa-trash\"></i>", ['action' => 'delete', $restockingOrder->id], ['escape' => false,'confirm' => __('Are you sure you want to delete this order?')]) ?>
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
