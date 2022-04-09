<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier[]|\Cake\Collection\CollectionInterface $suppliers
 */
?>
<div class="suppliers index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Suppliers') ?></h1>
        <a href="<?=$this->Url->build(['action'=>'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-user-plus fa-sm text-white-50"></i> New Supplier</a>
    </div>
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
                        <?= $this->Html->link("<i class=\"far fa-edit\"></i>", ['action' => 'edit', $supplier->id],['escape' => false,]) ?>
                        <?= $this->Form->postLink("<i class=\"fas fa-trash\"></i>", ['action' => 'delete', $supplier->id], ['escape' => false,'confirm' => __('Are you sure you want to delete '.$supplier->business_name)]) ?>
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
