<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer[]|\Cake\Collection\CollectionInterface $customers
 */
?>
<div class="customers index content">
    <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Customers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('contact') ?></th>
                    <th><?= $this->Paginator->sort('order_count') ?></th>
                    <th><?= $this->Paginator->sort('abn') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= h($customer->id) ?></td>
                    <td><?= h($customer->first_name) ?></td>
                    <td><?= h($customer->last_name) ?></td>
                    <td><?= h($customer->address) ?></td>
                    <td><?= h($customer->contact) ?></td>
                    <td><?= h($customer->order_count) ?></td>
                    <td><?= $this->Number->format($customer->abn) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $customer->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?>
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
