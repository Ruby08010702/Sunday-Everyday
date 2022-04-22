<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products view content">
            <h3><?= h($product->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($product->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($product->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier') ?></th>
                    <td><?= $product->has('supplier') ? $this->Html->link($product->supplier->id, ['controller' => 'Suppliers', 'action' => 'view', $product->supplier->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cost') ?></th>
                    <td><?= $this->Number->format($product->cost) ?></td>
                </tr>
                <tr>
                    <th><?= __('Retail Price') ?></th>
                    <td><?= $this->Number->format($product->retail_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($product->quantity) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Customers Order Detail') ?></h4>
                <?php if (!empty($product->customers_order_detail)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Order Id') ?></th>
                            <th><?= __('Price') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($product->customers_order_detail as $customersOrderDetail) : ?>
                        <tr>
                            <td><?= h($customersOrderDetail->id) ?></td>
                            <td><?= h($customersOrderDetail->product_id) ?></td>
                            <td><?= h($customersOrderDetail->order_id) ?></td>
                            <td><?= h($customersOrderDetail->price) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CustomersOrderDetail', 'action' => 'view', $customersOrderDetail->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CustomersOrderDetail', 'action' => 'edit', $customersOrderDetail->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CustomersOrderDetail', 'action' => 'delete', $customersOrderDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customersOrderDetail->id)]) ?>
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
