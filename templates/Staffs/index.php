<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff[]|\Cake\Collection\CollectionInterface $staffs
 */
?>
<div class="staffs index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Staffs') ?></h1>
        <a href="<?=$this->Url->build(['action'=>'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-user-plus fa-sm text-white-50"></i> New Staff</a>
    </div>

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
                        <?= $this->Html->link("<i class=\"far fa-edit\"></i>", ['action' => 'edit', $staff->id],['escape' => false,]) ?>
                        <?= $this->Form->postLink("<i class=\"fas fa-trash\"></i>", ['action' => 'delete', $staff->id], ['escape' => false,'confirm' => __('Are you sure you want to delete '.$staff->first_name,$staff->last_name)]) ?>
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
