<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
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
                <h1 class="h3 mb-2 text-gray-800">Products</h1>
                <?= $this->Flash->render('error') ?>
                <!-- DataTales Example -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Details</h6>
                            </div>
                            <div class="card-body">

                                <div>
                                    <tr>
                                        <th><?= __('Name:') ?></th>
                                        <td><?= h($product->name) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('ID:') ?></th>
                                        <td><?= h($product->id) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <th><?= __('Cost:') ?></th>
                                        <td><?= h($product->cost) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <th><?= __('Retail price:') ?></th>
                                        <td><?= h($product->retail_price) ?></td>
                                    </tr>
                                </div>
                                <div class>
                                    <tr>
                                        <th><?= __('Supplier') ?></th>
                                        <td><?= $product->has('supplier') ? $this->Html->link($product->supplier->business_name, ['controller' => 'Suppliers', 'action' => 'view', $product->supplier->id]) : '' ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Quantity:') ?></th>
                                        <td><?= h($product->email) ?></td>
                                    </tr>
                                </div>

                                <?= $this->Form->postLink("<i class=\"btn btn-primary btn-lg btn-blo\">Delete</i> ", ['action' => 'delete', $product->id], ['escape' => false,'confirm' => __('Are you sure you want to delete '.$product->name)]) ?>
                                <?= $this->Html->link("<i class=\"btn btn-primary btn-lg btn-blo\">Edit</i> ", ['action' => 'edit', $product->id],['escape' => false,]) ?>
                                <?= $this->Html->link("Back to Products List", ['action' => 'index'], ['class' => 'btn btn-primary btn-lg btn-block']) ?>
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Related Orders</h6>
                            </div>
                            <div class="card-body">
                                <?php if (!empty($product->customers_order_detail)) : ?>
                                <div>
                                    <?php foreach ($product->customers_order_detail as $customers_order_detail) : ?>
                                    <div>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                    <tr>
                                        <th><?= __('Customer ID:') ?></th>
                                        <td><?= h($customers_order_detail->id) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Order ID:') ?></th>
                                        <td><?= h($customers_order_detail->order_id) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Price:') ?></th>
                                        <td><?= h($customers_order_detail->price) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <div>
                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['controller' => 'customers_order_detail', 'action' => 'view', $customers_order_detail->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['controller' => 'customers_order_detail', 'action' => 'edit', $customers_order_detail->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'customers_order_detail', 'action' => 'delete', $customers_order_detail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customers_order_detail->id)]) ?>
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
