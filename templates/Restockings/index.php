<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Restocking[]|\Cake\Collection\CollectionInterface $restockings
 */

echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);
?>


<div class="customers index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Restockings') ?></h1>
        <a href="<?= $this->Url->build(['action'=>'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-user-plus fa-sm text-white-50"></i> New Restocking</a>
    </div>
    <div class="table-responsive">
        <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>

                <th><?= h('id') ?></th>
                <th><?= h('staff_id') ?></th>
                <th><?= h('date') ?></th>
                <th><?= h('payment') ?></th>
                <th><?= h('quantity') ?></th>

                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($restockings as $restocking): ?>
                <tr>
                    <td><?= h($restocking->id) ?></td>
                    <td><?= $restocking->has('staff') ? $this->Html->link($restocking->staff->first_name, ['controller' => 'Staffs', 'action' => 'view', $restocking->staff->id]) : '' ?></td>
                    <td><?= h($restocking->date) ?></td>
                    <td><?= h($restocking->payment) ?></td>
                    <td><?= h($restocking->quantity) ?></td>
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

    <script>
        $(document).ready(function (){
            $('#dataTable').DataTable();
        });
    </script>
</div>


<!--------------->
