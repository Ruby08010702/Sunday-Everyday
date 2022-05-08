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
                <h1 class="h3 mb-2 text-gray-800">Product Details</h1>
                <?= $this->Flash->render('error') ?>
                <!-- DataTales Example -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Information:</h6>
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

                                <?= $this->Form->postLink("<i class=\"btn btn-primary btn-lg btn-blo\">Delete</i> ", ['action' => 'delete', $product->id], ['escape' => false,'confirm' => __('Are you sure you want to delete PRODUCT: {0}? ID: {1}', $product->name, $product->id)]) ?>
                                <?= $this->Html->link("<i class=\"btn btn-primary btn-lg btn-blo\">Edit</i> ", ['action' => 'edit', $product->id],['escape' => false,]) ?>
                                <?= $this->Html->link("Back to Products List", ['action' => 'index'], ['class' => 'btn btn-primary btn-lg btn-block']) ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
