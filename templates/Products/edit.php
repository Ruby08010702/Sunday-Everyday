<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var string[]|\Cake\Collection\CollectionInterface $suppliers
 */
?>

<h1 class="h3 mb-2 text-gray-800">Edit Existing Product</h1>
<?= $this->Form->create($product) ?>
<?php
echo $this->Form->control('name',['pattern' => '^[A-Za-z0-9 ]{0-24}']);
echo $this->Form->control('cost',['max'=>"9999.99", 'min' => "0.00",'step'=>"0.01"],['pattern' => '^[0-9]{0-10}'] );
echo $this->Form->control('retail_price',['max'=>"9999.99", 'min' => "0.00",'step'=>"0.01"],['pattern' => '^[0-9]{0-10}'] );
echo $this->Form->control('quantity',['max'=>99999, 'default' => 0]);
echo $this->Form->control('supplier_id', ['options' => $suppliers]);
?>
<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
<?= $this->Form->end() ?>

