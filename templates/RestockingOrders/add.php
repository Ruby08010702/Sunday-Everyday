<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RestockingOrder $restockingOrder
 * @var \Cake\Collection\CollectionInterface|string[] $suppliers
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Restocking Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="restockingOrders form content">
            <?= $this->Form->create($restockingOrder) ?>
            <fieldset>
                <legend><?= __('Add Restocking Order') ?></legend>
                <?php
                    echo $this->Form->control('item_count');
                    echo $this->Form->control('cost');
                    echo $this->Form->control('payment');
                    echo $this->Form->control('date');
                    echo $this->Form->control('product_arrival_date');
                    echo $this->Form->control('supplier_id', ['options' => $suppliers]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
