<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomersOrderDetail $customersOrderDetail
 * @var \Cake\Collection\CollectionInterface|string[] $products
 * @var \Cake\Collection\CollectionInterface|string[] $orders
 */
?>

<h1 class="h3 mb-2 text-gray-800">Add product to order</h1>
<?= $this->Form->create($customersOrderDetail) ?>
<?php

//Adds hint underneath input ('help' templateVars is also needed):
$this->Form->setTemplates([ 'inputContainer' => '<div class="input {{type}}{{required}}">
        {{content}} <span class="help">{{help}}</span></div>'
]);

echo $this->Form->control('product_id', ['options' => $products]);
echo $this->Form->control('order_id', ['options' => $orders]);
echo $this->Form->control('price');
?>
<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ;
?>
<?=
$this->Form->end();


?>

</div>

