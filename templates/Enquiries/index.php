<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enquiry[]|\Cake\Collection\CollectionInterface $enquiries
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);
?>



<div class="customers index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Order Request List') ?></h1>
        <a href="<?= $this->Url->build(['action'=>'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-user-plus fa-sm text-white-50"></i> Make New Order Request</a>
    </div>
    <div class="table-responsive">
        <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>


                <th><?= h('supplier') ?></th>
                <th><?= h('email') ?></th>
                <th><?= h('created') ?></th>
                <th><?= h('email_sent') ?></th>

                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($enquiries as $enquiry): ?>
                <tr>

                    <td><?= $enquiry->has('supplier') ? $this->Html->link($enquiry->supplier->business_name, ['controller' => 'Suppliers', 'action' => 'view', $enquiry->supplier->id]) : '' ?></td>
                    <td><?= $enquiry->has('supplier') ? $this->Html->link($enquiry->supplier->email, ['controller' => 'Suppliers', 'action' => 'view', $enquiry->supplier->id]) : '' ?></td>
                    <td><?= h($enquiry->created) ?></td>
                    <td><?= $enquiry->email_sent ? __('Yes') : __('No') ?></td>

                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $enquiry->id]) ?>
                        <?= $this->Html->link(__('Mark as sent'), ['action' => 'mark', $enquiry->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enquiry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->id)]) ?>
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








<!------------------------------------------->
