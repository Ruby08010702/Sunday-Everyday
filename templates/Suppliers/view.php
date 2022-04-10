<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier $supplier
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
                <h1 class="h3 mb-2 text-gray-800">Supplier</h1>
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
                                        <th><?= __('Business Name:') ?></th>
                                        <td><?= h($supplier->business_name) ?></td>
                                    </tr>
                                </div>
                                <div class>
                                    <tr>
                                        <th><?= __('Address:') ?></th>
                                        <td><?= h($supplier->address) ?></td>
                                    </tr>
                                </div>
                                <div class>
                                    <tr>
                                        <th><?= __('Phone:') ?></th>
                                        <td><?= h($supplier->phone) ?></td>
                                    </tr>
                                </div>
                                <div class>
                                    <tr>
                                        <th><?= __('Email:') ?></th>
                                        <td><?= h($supplier->email) ?></td>
                                    </tr>
                                </div>
                                <div class>
                                    <tr>
                                        <th><?= __('Order Count:') ?></th>
                                        <td><?= h($supplier->order_count) ?></td>
                                    </tr>
                                </div>
                                <div class>
                                    <tr>
                                        <th><?= __('Abn:') ?></th>
                                        <td><?= h($supplier->abn) ?></td>
                                    </tr>
                                </div>
                                <?= $this->Form->postLink("<i class=\"btn btn-primary btn-lg btn-blo\">Delete</i> ", ['action' => 'delete', $supplier->id], ['escape' => false,'confirm' => __('Are you sure you want to delete '.$supplier->business_name)]) ?>
                                <?= $this->Html->link("<i class=\"btn btn-primary btn-lg btn-blo\">Edit</i> ", ['action' => 'edit', $supplier->id],['escape' => false,]) ?>
                                <?= $this->Html->link("Back to Suppliers List", ['action' => 'index'], ['class' => 'btn btn-primary btn-lg btn-block']) ?>
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Products Included</h6>
                            </div>
                            <div class="card-body">
                                <?php if (!empty($supplier->products)) : ?>

                                <div>
                                    <?php foreach ($supplier->products as $product) : ?>
                                    <tr>
                                        <th><?= __('Name:') ?></th>
                                        <td><?= h($product->name) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Cost:') ?></th>
                                        <td><?= h($product->cost) ?>$</td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Retail Price:') ?></th>
                                        <td><?= h($product->retail_price) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Current Stock:') ?></th>
                                        <td><?= h($product->stock) ?></td>
                                    </tr>                                   </div>

                                <div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Restocking Orders</h6>
                            </div>
                            <div class="card-body">
                                <?php if (!empty($supplier->restocking_orders)) : ?>

                                <div>
                                    <?php foreach ($supplier->restocking_orders as $restocking_order) : ?>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Item Count:') ?></th>
                                        <td><?= h($restocking_order->item_count) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Cost:') ?></th>
                                        <td><?= h($restocking_order->cost) ?>$</td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Payment:') ?></th>
                                        <td><?= h($restocking_order->payment) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Date:') ?></th>
                                        <td><?= h($restocking_order->date) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Arrival Date:') ?></th>
                                        <td><?= h($restocking_order->product_arrival_date) ?></td>
                                    </tr>
                                </div>

                                <div>
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
