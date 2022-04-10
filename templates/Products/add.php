<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var \Cake\Collection\CollectionInterface|string[] $suppliers
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
</div>
<div id="wrapper">


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Product</h1>
                <?= $this->Flash->render('error') ?>
                <!-- DataTales Example -->
                <?= $this->Form->create($product) ?>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Add Customer</h6>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <?php echo $this->Form->control('name',['label'=>'Name','class'=>'form-control']);?>
                                </div>
                                <div class="form-group">
                                    <?php echo $this->Form->control('cost',['label'=>'Cost','class'=>'form-control']);?>
                                </div>
                                <div class="form-group">
                                    <?php echo $this->Form->control('retail_price',['label'=>'Retail Price','class'=>'form-control']);?>
                                </div>
                                <div class="form-group">
                                    <?php echo $this->Form->control('stock',['label'=>'Stock','class'=>'form-control']);?>
                                </div>
                                <div class="form-group">
                                    <?php echo $this->Form->control('supplier_id',['label'=>'Supplier ID','class'=>'form-control']);?>
                                </div>
                                <?= $this->Form->button(__('ADD'),['class'=>'btn btn-primary btn-lg btn-block']) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

