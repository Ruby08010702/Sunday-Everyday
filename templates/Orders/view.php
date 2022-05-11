<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
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
                <h1 class="h3 mb-2 text-gray-800">Customer Orders</h1>
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
                                        <th><?= __('Customer:') ?></th>
                                        <td><?= $order->has('customer') ? $this->Html->link($order->customer->username, ['controller' => 'Customers', 'action' => 'view', $order->customer->id]) : '' ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Payment:') ?></th>
                                        <td><?= h($order->payment) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <th><?= __('Quantity:') ?></th>
                                        <td><?= $this->Number->format($order->quantity) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <th><?= __('Date:') ?></th>
                                        <td><?= h($order->date) ?></td>
                                    </tr>
                                </div>

                                <?= $this->Form->postLink("<i class=\"btn btn-primary btn-lg btn-blo\">Delete</i> ", ['action' => 'delete', $order->id], ['escape' => false,'confirm' => __('Are you sure you want to delete '.$order->id)]) ?>
                                <?= $this->Html->link("Back to Customers List", ['controller'=>'Customers','action' => 'index'], ['class' => 'btn btn-primary btn-lg btn-block']) ?>
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Products in this order</h6>
                                <a href="<?= $this->Url->build(['controller'=>'customersOrderDetail','action'=>'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                        class="fas fa-plus fa-sm text-white-50"></i>add product to this order </a>
                            </div>
                            <div class="card-body">
                                <?php if (!empty($order->customers_order_detail)) : ?>
                                <div>
                                    <?php foreach ($order->customers_order_detail as $customers_order_detail) : ?>
                                    <div>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Product Name:') ?></th>
                                        <td><?= h($customers_order_detail->product->name) ?></td>
                                    </tr>
                                </div>

                                <div>
                                    <tr>
                                        <th><?= __('Price: $') ?></th>
                                        <td><?= h($customers_order_detail->price) ?></td>

                                    </tr>
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
