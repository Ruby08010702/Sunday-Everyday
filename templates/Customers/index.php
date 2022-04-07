<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer[]|\Cake\Collection\CollectionInterface $customers
 */
echo $this->Html->css('//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css',['block'=>true]);
echo $this->Html->script('//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js',['block'=>true]);
?>
<div class="customers index content">
    <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Customers') ?></h3>

        <table id="customer_table">
            <thead>
                <tr>
                    <th><?= h('id') ?></th>
                    <th><?= h('first_name') ?></th>
                    <th><?= h('last_name') ?></th>
                    <th><?= h('address') ?></th>
                    <th><?= h('contact') ?></th>
                    <th><?= h('order_count') ?></th>
                    <th><?= h('abn') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= h($customer->id) ?></td>
                    <td><?= h($customer->first_name) ?></td>
                    <td><?= h($customer->last_name) ?></td>
                    <td><?= h($customer->address) ?></td>
                    <td><?= h($customer->contact) ?></td>
                    <td><?= h($customer->order_count) ?></td>
                    <td><?= $this->Number->format($customer->abn) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $customer->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

</div>
<script>
    $(document).ready( function () {
        $('#customer_table').DataTable();
    } );
</script>
