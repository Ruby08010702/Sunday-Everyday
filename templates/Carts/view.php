<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart $cart
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cart'), ['action' => 'edit', $cart->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cart'), ['action' => 'delete', $cart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cart->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Carts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cart'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carts view content">
            <h3><?= h($cart->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($cart->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer') ?></th>
                    <td><?= $cart->has('customer') ? $this->Html->link($cart->customer->username, ['controller' => 'Customers', 'action' => 'view', $cart->customer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Items No') ?></th>
                    <td><?= $this->Number->format($cart->items_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cost') ?></th>
                    <td><?= $this->Number->format($cart->cost) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Customer Products Cart Detail') ?></h4>
                <?php if (!empty($cart->customer_products_cart_detail)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Cart Id') ?></th>
                            <th><?= __('Cost') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($cart->customer_products_cart_detail as $customerProductsCartDetail) : ?>
                        <tr>
                            <td><?= h($customerProductsCartDetail->id) ?></td>
                            <td><?= h($customerProductsCartDetail->product_id) ?></td>
                            <td><?= h($customerProductsCartDetail->cart_id) ?></td>
                            <td><?= h($customerProductsCartDetail->cost) ?></td>
                            <td><?= h($customerProductsCartDetail->quantity) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CustomerProductsCartDetail', 'action' => 'view', $customerProductsCartDetail->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CustomerProductsCartDetail', 'action' => 'edit', $customerProductsCartDetail->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CustomerProductsCartDetail', 'action' => 'delete', $customerProductsCartDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerProductsCartDetail->id)]) ?>
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
