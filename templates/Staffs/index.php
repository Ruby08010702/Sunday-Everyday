<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff[]|\Cake\Collection\CollectionInterface $staffs
 */
?>
<div class="staffs index content">
    <?= $this->Html->link(__('New Staff'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Staffs') ?></h3>

        <table id="staffs_table">
            <thead>
                <tr>
                    <th><?= h('First Name') ?></th>
                    <th><?= h('Last Name') ?></th>
                    <th><?= h('Email') ?></th>
                    <th><?= h('Phone') ?></th>
                    <th><?= h('Role') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($staffs as $staff): ?>
                <tr>
                    <td><?= h($staff->first_name) ?></td>
                    <td><?= h($staff->last_name) ?></td>
                    <td><?= h($staff->email) ?></td>
                    <td><?= h($staff->phone) ?></td>
                    <td><?= h($staff->role) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $staff->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $staff->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $staff->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staff->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>

<script>
    $(document).ready( function () {
        $('#staffs_table').DataTable();
    } );
</script>
