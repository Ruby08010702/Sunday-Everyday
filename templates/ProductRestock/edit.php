<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductRestock $productRestock
 * @var string[]|\Cake\Collection\CollectionInterface $products
 * @var string[]|\Cake\Collection\CollectionInterface $restockingOrders
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productRestock->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productRestock->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Product Restock'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productRestock form content">
            <?= $this->Form->create($productRestock) ?>
            <fieldset>
                <legend><?= __('Edit Product Restock') ?></legend>
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
