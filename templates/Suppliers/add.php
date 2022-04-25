<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier $supplier
 */
?>
<div class="row">

<aside class="buffer">
<h4 class="blank"> </h4> <!-- ADD BUFFER HERE FOR FORMATTING -->

</aside>

    <div class="column-responsive column-80">
            <?= $this->Form->create($supplier) ?>
            <fieldset>
                <h1 class="h3 mb-2 text-gray-800">Add New Supplier</h1>
                <?php
                    echo $this->Form->control('business_name');
                    echo $this->Form->control('address');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('Australian Business Number');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
            <?= $this->Form->end() ?>

        <h2 class="h3 mb-2 text-gray-800">Actions:</h2>

               <li>
            <?= $this->Html->link(__('List Suppliers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </li>

    </div>
</div>



