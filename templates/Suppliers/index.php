<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier[]|\Cake\Collection\CollectionInterface $suppliers
 */
?>
<div class="suppliers index content">
    <?= $this->Html->link(__('New Supplier'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Suppliers') ?></h3>
        <table id="suppliers_table">
            <thead>
                <tr>
                    <th><?= h('Business Name') ?></th>
                    <th><?= h('Address') ?></th>
                    <th><?= h('Phone') ?></th>
                    <th><?= h('Email') ?></th>
                    <th><?= h('Order Count') ?></th>
                    <th><?= h('ABN') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($suppliers as $supplier): ?>
                <tr>
                    <td><?= h($supplier->business_name) ?></td>
                    <td><?= h($supplier->address) ?></td>
                    <td><?= h($supplier->phone) ?></td>
                    <td><?= h($supplier->email) ?></td>
                    <td><?= $this->Number->format($supplier->order_count) ?></td>
                    <td><?= $this->Number->format($supplier->abn) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $supplier->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $supplier->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supplier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>

<script>
    $(document).ready( function () {
        $('#suppliers_table').DataTable();
    } );
</script>
