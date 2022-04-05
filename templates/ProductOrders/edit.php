<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductOrder $productOrder
 * @var string[]|\Cake\Collection\CollectionInterface $products
 * @var string[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productOrder->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productOrder->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Product Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productOrders form content">
            <?= $this->Form->create($productOrder) ?>
            <fieldset>
                <legend><?= __('Edit Product Order') ?></legend>
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
