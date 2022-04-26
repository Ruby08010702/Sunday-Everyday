<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">

        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers view content">
        </div>
    </div>
</div>


<div class="row">
    <aside class="column">
        <div class="side-nav">

        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers form content">

        </div>
    </div>
</div>


<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Customer</h1>
                <?= $this->Flash->render('error') ?>
                <!-- DataTales Example -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
                            </div>
                            <div class="card-body">

                                <div>
                                    <tr>
                                        <th><?= __('First Name:') ?></th>
                                        <td><?= h($customer->first_name) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Last Name:') ?></th>
                                        <td><?= h($customer->last_name) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <th><?= __('Username:') ?></th>
                                        <td><?= h($customer->username) ?></td>
                                    </tr>                            </div>
                                <div>
                                    <tr>
                                        <th><?= __('Address:') ?></th>
                                        <td><?= h($customer->address) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Email:') ?></th>
                                        <td><?= h($customer->email) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Phone:') ?></th>
                                        <td><?= h($customer->phone) ?></td>
                                    </tr>
                                </div>
                                <div >

                                    <tr>
                                        <th><?= __('Abn:') ?></th>
                                        <td><?= h($customer->abn) ?></td>
                                    </tr>
                                </div>
                                <?= $this->Form->postLink("<i class=\"btn btn-primary btn-lg btn-blo\">Delete</i> ", ['action' => 'delete', $customer->id], ['escape' => false,'confirm' => __('Are you sure you want to delete '.$customer->first_name, $customer->last_name)]) ?>
                                <?= $this->Html->link("<i class=\"btn btn-primary btn-lg btn-blo\">Edit</i> ", ['action' => 'edit', $customer->id],['escape' => false,]) ?>
                                <?= $this->Html->link("Back to Customers List", ['action' => 'index'], ['class' => 'btn btn-primary btn-lg btn-block']) ?>
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Related Orders</h6>
                            </div>
                            <div class="card-body">
                                <?php if (!empty($customer->orders)) : ?>
                                <div>
                                    <?php foreach ($customer->orders as $orders) : ?>
                                    <div>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                    <tr>
                                        <th><?= __('Order ID:') ?></th>
                                        <td><?= h($orders->id) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Payment:') ?></th>
                                        <td><?= h($orders->payment) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Quantity:') ?></th>
                                        <td><?= h($orders->quantity) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Date:') ?></th>
                                        <td><?= h($orders->date) ?></td>
                                    </tr>
                                    <div>
                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['controller' => 'orders', 'action' => 'view', $orders->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['controller' => 'orders', 'action' => 'edit', $orders->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
                                        </td>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
