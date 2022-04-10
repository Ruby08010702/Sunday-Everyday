<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier $supplier
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Supplier'), ['action' => 'edit', $supplier->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Supplier'), ['action' => 'delete', $supplier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Suppliers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Supplier'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="suppliers view content">
            <h3><?= h($supplier->business_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Business Name') ?></th>
                    <td><?= h($supplier->business_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($supplier->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($supplier->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($supplier->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Count') ?></th>
                    <td><?= $this->Number->format($supplier->order_count) ?></td>
                </tr>
                <tr>
                    <th><?= __('Abn') ?></th>
                    <td><?= $this->Number->format($supplier->abn) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Products') ?></h4>
                <?php if (!empty($supplier->products)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Cost') ?></th>
                            <th><?= __('Retail Price') ?></th>
                            <th><?= __('Stock') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($supplier->products as $products) : ?>
                        <tr>
                            <td><?= h($products->name) ?></td>
                            <td><?= h($products->cost) ?></td>
                            <td><?= h($products->retail_price) ?></td>
                            <td><?= h($products->stock) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Restocking Orders') ?></h4>
                <?php if (!empty($supplier->restocking_orders)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Item Count') ?></th>
                            <th><?= __('Cost') ?></th>
                            <th><?= __('Payment') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Product Arrival Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($supplier->restocking_orders as $restockingOrders) : ?>
                        <tr>
                            <td><?= h($restockingOrders->item_count) ?></td>
                            <td><?= h($restockingOrders->cost) ?></td>
                            <td><?= h($restockingOrders->payment) ?></td>
                            <td><?= h($restockingOrders->date) ?></td>
                            <td><?= h($restockingOrders->product_arrival_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'RestockingOrders', 'action' => 'view', $restockingOrders->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'RestockingOrders', 'action' => 'edit', $restockingOrders->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'RestockingOrders', 'action' => 'delete', $restockingOrders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $restockingOrders->id)]) ?>
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
