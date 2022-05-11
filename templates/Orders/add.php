<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var \Cake\Collection\CollectionInterface|string[] $customers
 */
?>
<div class="row">
    <aside class="column">

    </aside>
    <div class="column-responsive column-80">
        <div class="orders form content">
            <?= $this->Form->create($order) ?>
            <fieldset>
                <h1 class="h3 mb-2 text-gray-800">Create New Order</h1>
                <?php
                    echo $this->Form->control('customer_id', ['options' => $customers]);
                    echo $this->Form->control('date');
                    echo $this->Form->select('payment',['Credit Card', 'Cash', 'Paypal']);
                    echo $this->Form->control('quantity',['max'=>99999, 'default' => 100],['pattern' => '^[0-9]{0-5}']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>


            <h2 class="h3 mb-2 text-gray-800">Actions:</h2>
        <li>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </li>
    </div>
</div>
