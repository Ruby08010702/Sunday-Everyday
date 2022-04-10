<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductOrder $productOrder
 * @var \Cake\Collection\CollectionInterface|string[] $products
 * @var \Cake\Collection\CollectionInterface|string[] $orders
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Product Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productOrders form content">
            <?= $this->Form->create($productOrder) ?>
            <fieldset>
                <legend><?= __('Add Product Order') ?></legend>
                <?php
                    echo $this->Form->control('amount');
                    echo $this->Form->control('product_id', ['options' => $products]);
                    echo $this->Form->control('order_id', ['options' => $orders]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
