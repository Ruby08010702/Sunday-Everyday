<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>

    <h1 class="h3 mb-2 text-gray-800">Edit Customer</h1>
<?= $this->Form->create($customer) ?>
<?php
echo $this->Form->control('first_name',['pattern'=>'^[A-Za-z ]+$']);
echo $this->Form->control('last_name',['pattern'=>'^[A-Za-z ]+$']);
echo $this->Form->control('username');
echo $this->Form->control('address');
echo $this->Form->control('email',['pattern'=>'^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$']);
echo $this->Form->control('phone',['pattern' => '^[0-9]{10,10}'], ['placeholder'=>'e.g. 0412345678']);
echo $this->Form->control('abn', ['pattern' => '^[0-9]{11,11}'] ,['placeholder'=>'e.g. 11111111111']);
?>
<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
<?= $this->Form->end() ?>

<?php

