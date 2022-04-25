<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var string[]|\Cake\Collection\CollectionInterface $suppliers
 */
?>

<h1 class="h3 mb-2 text-gray-800">Edit Product</h1>
<?= $this->Form->create($product) ?>
<?php
echo $this->Form->control('name');
echo $this->Form->control('cost');
echo $this->Form->control('retail_price');
echo $this->Form->control('quantity');
echo $this->Form->control('supplier_id', ['options' => $suppliers]);
?>
<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
<?= $this->Form->end() ?>

