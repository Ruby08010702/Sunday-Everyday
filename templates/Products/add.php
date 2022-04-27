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
echo $this->Form->control('name',['pattern' => '^[A-Za-z0-9 ]{0-24}']);
echo $this->Form->control('cost',['pattern' => '^[0-9]{0-10}'] );
echo $this->Form->control('retail_price',['pattern' => '^[0-9]{0-10}'] );
echo $this->Form->control('quantity',['max'=>999999]);
echo $this->Form->control('supplier_id', ['options' => $suppliers]);
?>
<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
<?= $this->Form->end() ?>
