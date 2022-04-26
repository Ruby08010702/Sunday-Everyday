<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<h1 class="h3 mb-2 text-gray-800">Add new Customer</h1>
<?= $this->Form->create($customer) ?>
<?php
echo $this->Form->control('first_name',['pattern'=>'^[A-Za-z]+$']);
echo $this->Form->control('last_name',['pattern'=>'^[A-Za-z]+$']);
echo $this->Form->control('username');
echo $this->Form->control('address');
echo $this->Form->control('email');
echo $this->Form->control('phone');
echo $this->Form->control('abn');
?>
<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
<?= $this->Form->end() ?>

</div>
