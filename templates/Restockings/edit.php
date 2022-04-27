<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Restocking $restocking
 * @var string[]|\Cake\Collection\CollectionInterface $staffs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $restocking->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $restocking->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Restockings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="restockings form content">
            <?= $this->Form->create($restocking) ?>
            <fieldset>
                <legend><?= __('Edit Restocking') ?></legend>
                <?php
                    echo $this->Form->control('staff_id', ['options' => $staffs]);
                    echo $this->Form->control('date');
                    echo $this->Form->control('payment');
                    echo $this->Form->control('quantity',['max'=>999]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
