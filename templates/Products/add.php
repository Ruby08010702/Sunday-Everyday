<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var \Cake\Collection\CollectionInterface|string[] $suppliers
 */
?>

<h1 class="h3 mb-2 text-gray-800">Add new Product</h1>
<?= $this->Form->create($product) ?>
<?php
echo $this->Form->control('name',['pattern'=>'^[A-Za-z]+$']);
echo $this->Form->control('cost');
echo $this->Form->control('retail_price');
echo $this->Form->control('quantity',['max'=>999]);
echo $this->Form->control('supplier_id', ['options' => $suppliers]);
?>
<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
<?= $this->Form->end() ?>
