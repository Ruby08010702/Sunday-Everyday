<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="products index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Products') ?></h1>
        <a href="<?=$this->Url->build(['action'=>'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New Product</a>
    </div>

        <table id="products_table">
            <thead>
                <tr>
                    <th><?= h('Name') ?></th>
                    <th><?= h('Cost') ?></th>
                    <th><?= h('Retail Price') ?></th>
                    <th><?= h('Stock') ?></th>
                    <th><?= h('Supplier') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= h($product->name) ?></td>
                    <td><?= $this->Number->format($product->cost) ?></td>
                    <td><?= $this->Number->format($product->retail_price) ?></td>
                    <td><?= $this->Number->format($product->stock) ?></td>
                    <td><?= $product->has('supplier') ? $this->Html->link($product->supplier->business_name, ['controller' => 'Suppliers', 'action' => 'view', $product->supplier->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link("<i class=\"far fa-edit\"></i>", ['action' => 'edit', $product->id],['escape' => false,]) ?>
                        <?= $this->Form->postLink("<i class=\"fas fa-trash\"></i>", ['action' => 'delete', $product->id], ['escape' => false,'confirm' => __('Are you sure you want to delete '.$product->name)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

</div>
<script>
    $(document).ready( function () {
        $('#products_table').DataTable();
    } );
</script>

