<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Restocking $restocking
 * @var \Cake\Collection\CollectionInterface|string[] $staffs
 */
?>
<div class="row">

    <aside class="buffer">
        <h4 class="blank"> </h4> <!-- ADD BUFFER HERE FOR FORMATTING -->

    </aside>

    <div class="column-responsive column-80">
        <?= $this->Form->create($restocking) ?>
        <fieldset>
            <h1 class="h3 mb-2 text-gray-800">Restock Product</h1>
            <?php
            echo $this->Form->control('staff_id', ['options' => $staffs]);
            echo $this->Form->control('date');
            echo $this->Form->control('payment', ['max' => 10000]); //TABLE NEEDS TO BE CHANGED TO INT FROM VARCHAR
            echo $this->Form->control('quantity',['max'=>99999],['pattern' => '^[0-9]']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
        <?= $this->Form->end() ?>

        <h2 class="h3 mb-2 text-gray-800">Actions:</h2>

        <li>
            <?= $this->Html->link(__('List Restocking Options'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </li>

    </div>
</div>
