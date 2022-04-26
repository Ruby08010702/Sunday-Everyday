<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier $supplier
 */
?>


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
                                <h6 class="m-0 font-weight-bold text-primary">Details</h6>
                            </div>

                            <div class="card-body">
                                <div>
                                    <tr>
                                        <th><?= __('Business Name:') ?></th>
                                        <td><?= h($supplier->business_name) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('ID:') ?></th>
                                        <td><?= h($supplier->id) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <th><?= __('Address:') ?></th>
                                        <td><?= h($supplier->address) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <th><?= __('Contact Admin:') ?></th>
                                        <!--<td><?= h($supplier->email) ?></td> --> //Not yet implemented - requires table update
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <th><?= __('Contact Email:') ?></th>
                                        <td><?= h($supplier->email) ?></td>
                                    </tr>
                                </div>
                                <div class>
                                    <tr>
                                        <th><?= __('Phone:') ?></th>
                                        <td><?= h($supplier->phone) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('Contact:') ?></th>
                                        <td><?= h($supplier->contact_name) ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <th><?= __('ABN:') ?></th>
                                        <td><?= h($supplier->abn) ?></td>
                                    </tr>
                                </div>

                                <?= $this->Form->postLink("<i class=\"btn btn-primary btn-lg btn-blo\">Delete</i> ", ['action' => 'delete', $supplier->id], ['escape' => false,'confirm' => __('Are you sure you want to delete {0} ? ID: {1}?', $supplier->business_name, $supplier->id)]) ?>
                                <?= $this->Html->link("<i class=\"btn btn-primary btn-lg btn-blo\">Edit</i> ", ['action' => 'edit', $supplier->id],['escape' => false,]) ?>
                                <?= $this->Html->link("Back to Supplier List", ['action' => 'index'], ['class' => 'btn btn-primary btn-lg btn-block']) ?>
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Related Orders</h6>
                            </div>
                            <div class="card-body">
                                <?php if (!empty($supplier->customers_order_detail)) : ?>
                                <div>
                                    <?php foreach ($supplier->customers_order_detail as $customers_order_detail) : ?>
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
                                        <th><?= __('Price: $') ?></th>
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
