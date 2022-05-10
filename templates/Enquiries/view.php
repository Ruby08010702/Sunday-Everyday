-<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enquiry $enquiry
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
                <h1 class="h3 mb-2 text-gray-800">Order request details</h1>
                <?= $this->Flash->render('error') ?>
                <!-- DataTales Example -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Information:</h6>
                            </div>
                            <div class="card-body">


                                <div >
                                    <tr>
                                        <b><th><?= __('Order sent to supplier: ') ?></th> </b>
                                        <td><?= $enquiry->has('supplier') ? $this->Html->link($enquiry->supplier->business_name, ['controller' => 'Suppliers', 'action' => 'view', $enquiry->supplier->id]) : '' ?></td>
                                    </tr>
                                </div>
                                <div>
                                    <tr>
                                        <b><th><?= __('Created: ') ?></th> </b>
                                        <td><?= h($enquiry->created) ?></td>
                                    </tr>
                                </div>
                                <div >
                                    <tr>
                                        <b><th><?= __('Email Sent: ') ?></th> </b>
                                        <td><?= h($enquiry->email_sent) ?></td>
                                    </tr>
                                </div>

                                <div class>
                                    <tr>
                                        <b><th><?= __('Mail Body: ') ?></th> </b>
                                        <td><?= h($enquiry->body) ?></td>
                                        </tr>
                                </div>


                                <?= $this->Form->postLink("<i class=\"btn btn-primary btn-lg btn-blo\">Delete</i> ", ['action' => 'delete', $enquiry->id], ['escape' => false,'confirm' => __('Are you sure you want to delete email?')]) ?>

                                <?= $this->Html->link("Back to Email List", ['action' => 'index'], ['class' => 'btn btn-primary btn-lg btn-block']) ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>






