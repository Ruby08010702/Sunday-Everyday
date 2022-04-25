<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier $supplier
 */
?>

<div class="grid">

 <h1 class="h3 mb-2 text-gray-800">Edit Supplier</h1>
    <?= $this->Form->create($supplier) ?>
            <?php
            echo $this->Form->control('business_name');
            echo $this->Form->control('address');
            echo $this->Form->control('email');
            echo $this->Form->control('phone');
            echo $this->Form->control('abn');
            ?>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>


    <h2 class="h3 mb-2 text-gray-800">Actions:</h2>

        <li>
            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supplier->id],
                ['confirm' => __('Are you sure you want to delete {0} ? ID: {1}?', $supplier->business_name, $supplier->id),
                    'class' => 'side-nav-item']) ?>
        </li>

        <li>
            <?= $this->Html->link(__('List Suppliers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </li>



</div>
