<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart[]|\Cake\Collection\CollectionInterface $carts
 */

echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);
?>
<div class="carts index content">
    <?= $this->Html->link(__('New Cart'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Carts') ?></h3>

    <div class="table-responsive">
        <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>

                <th><?= h('id') ?></th>
                <th><?= h('customer_id') ?></th>
                <th><?= h('items_no') ?>
                <th><?= h('cost') ?>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($carts as $cart): ?>
                <tr>

                    <td><?= h($cart->id) ?></td>
                    <td><?= $cart->has('customer') ? $this->Html->link($cart->customer->username, ['controller' => 'Customers', 'action' => 'view', $cart->customer->id]) : '' ?></td>
                    <td><?= $this->Number->format($cart->items_no) ?></td>
                    <td><?= $this->Number->format($cart->cost) ?></td>


                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cart->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cart->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cart->id)]) ?>                    </td>
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
