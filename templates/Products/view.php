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
                    <th><?= __('Stock') ?></th>
                    <td><?= $this->Number->format($product->stock) ?></td>
                </tr>
            </table>

        </div>
    </div>
</div>
<div class="related">
    <h4><?= __('Related Product Orders') ?></h4>
    <?php if (!empty($product->product_orders)) : ?>
        <div class="table-responsive">
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Amount') ?></th>
                    <th><?= __('Product Id') ?></th>
                    <th><?= __('Order Id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($product->product_orders as $productOrders) : ?>
                    <tr>
                        <td><?= h($productOrders->id) ?></td>
                        <td><?= h($productOrders->amount) ?></td>
                        <td><?= h($productOrders->product_id) ?></td>
                        <td><?= h($productOrders->order_id) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'ProductOrders', 'action' => 'view', $productOrders->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'ProductOrders', 'action' => 'edit', $productOrders->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductOrders', 'action' => 'delete', $productOrders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productOrders->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <?php endif; ?>
</div>
<div class="related">
    <h4><?= __('Related Product Restock') ?></h4>
    <?php if (!empty($product->product_restock)) : ?>
        <div class="table-responsive">
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Amount') ?></th>
                    <th><?= __('Cost') ?></th>
                    <th><?= __('Product Id') ?></th>
                    <th><?= __('Rp Id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($product->product_restock as $productRestock) : ?>
                    <tr>
                        <td><?= h($productRestock->id) ?></td>
                        <td><?= h($productRestock->amount) ?></td>
                        <td><?= h($productRestock->cost) ?></td>
                        <td><?= h($productRestock->product_id) ?></td>
                        <td><?= h($productRestock->rp_id) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'ProductRestock', 'action' => 'view', $productRestock->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'ProductRestock', 'action' => 'edit', $productRestock->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductRestock', 'action' => 'delete', $productRestock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productRestock->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <?php endif; ?>
</div>
