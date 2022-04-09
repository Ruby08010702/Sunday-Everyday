<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <h5>
            <?= $this->Html->link("<i class=\"far fa-edit\"></i> Edit", ['action' => 'edit', $customer->id],['escape' => false,]) ?>
            </h5>
            <h5>
            <?= $this->Form->postLink("<i class=\"fas fa-trash\"></i> Delete", ['action' => 'delete', $customer->id], ['escape' => false,'confirm' => __('Are you sure you want to delete '.$customer->first_name, $customer->last_name)]) ?>
            </h5>
            <h5>
            <?= $this->Html->link("List Customers", ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </h5>
            <h5>
                <?= $this->Html->link("Add Customer", ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            </h5>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers view content">
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($customer->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($customer->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($customer->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact') ?></th>
                    <td><?= h($customer->contact) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Count') ?></th>
                    <td><?= h($customer->order_count) ?></td>
                </tr>
                <tr>
                    <th><?= __('Abn') ?></th>
                    <td><?= $this->Number->format($customer->abn) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Orders') ?></h4>
                <?php if (!empty($customer->orders)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Cost') ?></th>
                            <th><?= __('Payment') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Item Count') ?></th>
                            <th><?= __('Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($customer->orders as $orders) : ?>
                        <tr>
                            <td><?= h($orders->cost) ?></td>
                            <td><?= h($orders->payment) ?></td>
                            <td><?= h($orders->address) ?></td>
                            <td><?= h($orders->item_count) ?></td>
                            <td><?= h($orders->date) ?></td>
                            <td class="actions">
                              <!--- so far not implement this
                                 $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) !--->
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
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
