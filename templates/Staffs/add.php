<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff $staff
 */
?>
    <h1 class="h3 mb-2 text-gray-800">Add new Staff</h1>
<?= $this->Form->create($staff) ?>
<?php
echo $this->Form->control('first_name',['pattern'=>'^[A-Za-z]+$']);
echo $this->Form->control('last_name',['pattern'=>'^[A-Za-z]+$']);
echo $this->Form->control('address');
echo $this->Form->control('email',['pattern'=>'^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$']);
echo $this->Form->control('phone',['placeholder'=>'e.g. 0412345678']);
?>
<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
<?= $this->Form->end() ?>
