<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Restocking $restocking
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Restocking'), ['action' => 'edit', $restocking->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Restocking'), ['action' => 'delete', $restocking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $restocking->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Restockings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Restocking'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="restockings view content">
            <h3><?= h($restocking->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($restocking->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff') ?></th>
                    <td><?= $restocking->has('staff') ? $this->Html->link($restocking->staff->id, ['controller' => 'Staffs', 'action' => 'view', $restocking->staff->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment') ?></th>
                    <td><?= h($restocking->payment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($restocking->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($restocking->date) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Staffs Restocking Detail') ?></h4>
                <?php if (!empty($restocking->staffs_restocking_detail)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Restocking Id') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($restocking->staffs_restocking_detail as $staffsRestockingDetail) : ?>
                        <tr>
                            <td><?= h($staffsRestockingDetail->id) ?></td>
                            <td><?= h($staffsRestockingDetail->product_id) ?></td>
                            <td><?= h($staffsRestockingDetail->restocking_id) ?></td>
                            <td><?= h($staffsRestockingDetail->quantity) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'StaffsRestockingDetail', 'action' => 'view', $staffsRestockingDetail->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'StaffsRestockingDetail', 'action' => 'edit', $staffsRestockingDetail->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'StaffsRestockingDetail', 'action' => 'delete', $staffsRestockingDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staffsRestockingDetail->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
