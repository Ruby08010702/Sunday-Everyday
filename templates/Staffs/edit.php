<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff $staff
 */
?>
<h1 class="h3 mb-2 text-gray-800">Edit Staff</h1>
<?= $this->Form->create($staff) ?>
<?php
echo $this->Form->control('first_name');
echo $this->Form->control('last_name');
echo $this->Form->control('address');
echo $this->Form->control('email');
echo $this->Form->control('phone');
?>
<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
<?= $this->Form->end() ?>
