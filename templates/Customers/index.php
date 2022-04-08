<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer[]|\Cake\Collection\CollectionInterface $customers
 */

?>
<div class="customers index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Customers') ?></h1>
        <a href="<?=$this->Url->build(['action'=>'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-user-plus fa-sm text-white-50"></i> New Customer</a>
    </div>
        <table id="customers_table">
            <thead>
                <tr>
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
        $('#customers_table').DataTable();
    } );
</script>
