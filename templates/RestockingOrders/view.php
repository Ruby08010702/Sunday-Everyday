<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RestockingOrder $restockingOrder
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
                <h1 class="h3 mb-2 text-gray-800">Restocking Order</h1>
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
                                        <th><?= __('Item Count:') ?></th>
                                        <td><?= h($restockingOrder->item_count) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Cost:') ?></th>
                                        <td><?= h($restockingOrder->cost) ?>$</td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Payment:') ?></th>
                                        <td><?= h($restockingOrder->payment) ?></td>
                                    </tr>                                   </div>
                                <div>
                                    <tr>
                                        <th><?= __('Date:') ?></th>
                                        <td><?= h($restockingOrder->date) ?></td>
                                    </tr>                                   </div>
                                <div>
                                    <tr>
                                        <th><?= __('Arrival Date:') ?></th>
                                        <td><?= h($restockingOrder->product_arrival_date) ?></td>
                                    </tr>                                   </div>
                                <div>
                                    <tr>
                                        <th><?= __('Supplier:') ?></th>
                                        <td><?= $restockingOrder->has('supplier') ? $this->Html->link($restockingOrder->supplier->business_name, ['controller' => 'Suppliers', 'action' => 'view', $restockingOrder->supplier->id]) : '' ?></td>
                                    </tr>
                                </div>
                                <?= $this->Form->postLink("<i class=\"btn btn-primary btn-lg btn-blo\">Delete</i> ", ['action' => 'delete', $restockingOrder->id], ['escape' => false,'confirm' => __('Are you sure you want to delete ')]) ?>
                                <?= $this->Html->link("<i class=\"btn btn-primary btn-lg btn-blo\">Edit</i> ", ['action' => 'edit', $restockingOrder->id],['escape' => false,]) ?>
                                <?= $this->Html->link("Back to Orders List", ['action' => 'index'], ['class' => 'btn btn-primary btn-lg btn-block']) ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
