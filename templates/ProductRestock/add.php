<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductRestock $productRestock
 * @var \Cake\Collection\CollectionInterface|string[] $products
 * @var \Cake\Collection\CollectionInterface|string[] $restockingOrders
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Product Restock'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productRestock form content">
            <?= $this->Form->create($productRestock) ?>
            <fieldset>
                <legend><?= __('Add Product Restock') ?></legend>
                <?php
                    echo $this->Form->control('amount');
                    echo $this->Form->control('cost');
                    echo $this->Form->control('product_id', ['options' => $products]);
                    echo $this->Form->control('rp_id', ['options' => $restockingOrders]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
