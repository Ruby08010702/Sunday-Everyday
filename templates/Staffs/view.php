<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff $staff
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Staff'), ['action' => 'edit', $staff->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Staff'), ['action' => 'delete', $staff->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staff->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Staffs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Staff'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="staffs view content">
            <h3><?= h($staff->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($staff->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($staff->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($staff->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($staff->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($staff->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($staff->phone) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Restockings') ?></h4>
                <?php if (!empty($staff->restockings)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Staff Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Payment') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($staff->restockings as $restockings) : ?>
                        <tr>
                            <td><?= h($restockings->id) ?></td>
                            <td><?= h($restockings->staff_id) ?></td>
                            <td><?= h($restockings->date) ?></td>
                            <td><?= h($restockings->payment) ?></td>
                            <td><?= h($restockings->quantity) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Restockings', 'action' => 'view', $restockings->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Restockings', 'action' => 'edit', $restockings->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Restockings', 'action' => 'delete', $restockings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $restockings->id)]) ?>
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
