<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerProductsCartDetail[]|\Cake\Collection\CollectionInterface $customerProductsCartDetail
 */
?>
<div class="customerProductsCartDetail index content">
    <?= $this->Html->link(__('New Customer Products Cart Detail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Customer Products Cart Detail') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('cart_id') ?></th>
                    <th><?= $this->Paginator->sort('cost') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customerProductsCartDetail as $customerProductsCartDetail): ?>
                <tr>
                    <td><?= h($customerProductsCartDetail->id) ?></td>
                    <td><?= $customerProductsCartDetail->has('product') ? $this->Html->link($customerProductsCartDetail->product->name, ['controller' => 'Products', 'action' => 'view', $customerProductsCartDetail->product->id]) : '' ?></td>
                    <td><?= $customerProductsCartDetail->has('cart') ? $this->Html->link($customerProductsCartDetail->cart->id, ['controller' => 'Carts', 'action' => 'view', $customerProductsCartDetail->cart->id]) : '' ?></td>
                    <td><?= $this->Number->format($customerProductsCartDetail->cost) ?></td>
                    <td><?= $this->Number->format($customerProductsCartDetail->quantity) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $customerProductsCartDetail->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customerProductsCartDetail->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customerProductsCartDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerProductsCartDetail->id)]) ?>
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
