<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff $staff
 */
?>
    <h1 class="h3 mb-2 text-gray-800">Add new Staff</h1>
<?= $this->Form->create($staff) ?>
<?php
echo $this->Form->control('first_name',['pattern'=>'^[A-Za-z ]+{1,24}']);
echo $this->Form->control('last_name',['pattern'=>'^[A-Za-z ]+{1,24}']);
echo $this->Form->control('address', ['pattern' => '^[A-Za-z0-9, ]{3,40}']);
echo $this->Form->control('email', ['pattern' => '^{7,20}']);
echo $this->Form->control('phone', ['pattern' => '^[0-9]{10,10}']);
?>
<?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
<?= $this->Form->end() ?>
