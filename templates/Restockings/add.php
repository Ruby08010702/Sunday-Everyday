<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Restocking $restocking
 * @var \Cake\Collection\CollectionInterface|string[] $staffs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Restockings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="restockings form content">
            <?= $this->Form->create($restocking) ?>
            <fieldset>
                <legend><?= __('Add Restocking') ?></legend>
                <?php
                    echo $this->Form->control('staff_id', ['options' => $staffs]);
                    echo $this->Form->control('date');
                    echo $this->Form->control('payment');
                    echo $this->Form->control('quantity');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>