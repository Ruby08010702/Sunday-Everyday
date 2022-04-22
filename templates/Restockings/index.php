<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Restocking[]|\Cake\Collection\CollectionInterface $restockings
 */
?>
<div class="restockings index content">
    <?= $this->Html->link(__('New Restocking'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Restockings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('staff_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('payment') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($restockings as $restocking): ?>
                <tr>
                    <td><?= h($restocking->id) ?></td>
                    <td><?= $restocking->has('staff') ? $this->Html->link($restocking->staff->id, ['controller' => 'Staffs', 'action' => 'view', $restocking->staff->id]) : '' ?></td>
                    <td><?= h($restocking->date) ?></td>
                    <td><?= h($restocking->payment) ?></td>
                    <td><?= $this->Number->format($restocking->quantity) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $restocking->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $restocking->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $restocking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $restocking->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
