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
        <div class="products form content">

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
                <?= $this->Form->create($customer) ?>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Edit Customer</h6>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <?php echo $this->Form->control('first_name',['label'=>'First Name','class'=>'form-control']);?>
                                </div>
                                <div class="form-group">
                                    <?php echo $this->Form->control('last_name',['label'=>'Last Name','class'=>'form-control']);?>
                                </div>
                                <div class="form-group">
                                    <?php echo $this->Form->control('address',['label'=>'Address','class'=>'form-control']);?>
                                </div>
                                <div class="form-group">
                                    <?php echo $this->Form->control('contact',['label'=>'Contact','class'=>'form-control']);?>
                                </div>
                                <div class="form-group">
                                    <?php echo $this->Form->control('order_count',['label'=>'Order Count','class'=>'form-control']);?>
                                </div>
                                <div class="form-group">
                                    <?php echo $this->Form->control('abn',['label'=>'ABN','class'=>'form-control']);?>
                                </div>
                                <?= $this->Form->button(__('Update'),['class'=>'btn btn-primary btn-lg btn-block']) ?>
                                <?= $this->Form->postLink("<i class=\"btn btn-primary btn-lg btn-blo\">Delete</i> ", ['action' => 'delete', $customer->id], ['escape' => false,'confirm' => __('Are you sure you want to delete '.$customer->first_name, $customer->last_name)]) ?>
                                <?= $this->Html->link("Back to Customers list", ['action' => 'index'], ['class' => 'btn btn-primary btn-lg btn-block']) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
