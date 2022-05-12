<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */


/** PRODUCT ECHOES (Populate table*/
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);

?>

<div class="dashboard">
    <a href="<?= $this->Url->build(['controller' => 'Customers','action' => 'index'])?>">
        <div class="card-shad">
            <h6 class="dash">Customer</h6>
            <!--        <img class="dash-img" src="/team14-app_fit3047/webroot/img/default.png">-->
            <?= $this->Html->image('/img/Customer.png', [
                'class' => 'dash-img',
                'url' => ['controller' => 'Customers','action' => 'index']
            ]); ?>
        </div>
    </a>

    <a href="<?= $this->Url->build(['controller' => 'Staffs','action' => 'index'])?>">
        <div class="card-shad">

            <h6 class="dash">Staff</h6>
            <!--        <img class="dash-img" src="/team14-app_fit3047/webroot/img/default.png">-->
            <?= $this->Html->image('/img/staff.png', [
                'class' => 'dashst-img',
                'url' => ['controller' => 'Staffs','action' => 'index']
            ]); ?>

        </div>
    </a>


    <a href="<?= $this->Url->build(['controller' => 'Suppliers','action' => 'index'])?>">
        <div class="card-shad">

            <h6 class="dash">Suppliers</h6>

            <!--        <img class="dash-img" src="/team14-app_fit3047/webroot/img/default.png">-->
            <?= $this->Html->image('/img/supplier.png', [
                'class' => 'dashsu-img',
                'url' => ['controller' => 'Suppliers','action' => 'index']
            ]); ?>

        </div>
    </a>


    <a href="<?= $this->Url->build(['controller' => 'Products','action' => 'index'])?>">
        <div class="card-shad">

            <h6 class="dash">Products</h6>
            <!--        <img class="dash-img" src="/team14-app_fit3047/webroot/img/default.png">-->
            <?= $this->Html->image('/img/product.png', [
                'class' => 'dashp-img',
                'url' => ['controller' => 'Products','action' => 'index']
            ]); ?>
        </div>
    </a>

    <a href="<?= $this->Url->build(['controller' => 'Restockings','action' => 'index'])?>">
        <div class="card-shad">
            <h6 class="dash">Restock</h6>
            <!--        <img class="dash-img" src="/team14-app_fit3047/webroot/img/default.png">-->
            <?= $this->Html->image('/img/order.png', [
                'class' => 'dasho-img',
                'url' => ['controller' => 'Restockings','action' => 'index']
            ]); ?>
        </div>
    </a>


    <a href="<?= $this->Url->build(['controller' => 'Enquiries','action' => 'index'])?>">
        <div class="card-shad">
            <h6 class="dash">Email Supplier</h6>
            <!--        <img class="dash-img" src="/team14-app_fit3047/webroot/img/default.png">-->
            <?= $this->Html->image('/img/order.png', [
                'class' => 'dasho-img',
                'url' => ['controller' => 'Enquiries','action' => 'index']
            ]); ?>
        </div>
    </a>
</div>


<!-- UNDERSTOCK TABLE -->
<div class="card-body">

</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><!--TITLE --></h6>

        <!-- Table implementation: -->
        <div class="products index content">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?= __('Under-Stock Products:') ?></h1>
                <?=$this->Html->link(__('.'), ['controller'=>'Products','action' => 'understock']) ;
                ?>

            </div>
            <div class="table-responsive">
                <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>

                        <th><?= h('Name') ?></th>
                        <th><?= h('Cost') ?></th>
                        <th><?= h('Retail price') ?></th>
                        <th><?= h('Quantity') ?></th>
                        <th><?= h('Supplier') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= h($product->name) ?></td>
                            <td><?= h($product->cost) ?></td>
                            <td><?= h($product->retail_price) ?></td>
                            <td><?= h($product->quantity) ?></td>
                            <td><?= $product->has('supplier') ? $this->Html->link($product->supplier->business_name, ['controller' => 'Suppliers', 'action' => 'view', $product->supplier->id]) : '' ?></td>

                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'understock', $product->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete PRODUCT: {0}? ID: {1}', $product->name, $product->id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <script>
                $(document).ready(function (){
                    $('#dataTable').DataTable();
                });
            </script>
        </div>

        <!-- TABLE OBJECT TEST -->

    </div>
    <div class="card-body">

    </div>
</div>


<!-- OVERSTOCK TABLE: -->
<?php /*
    <div class="card-body">
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Over-Stock Products</h6>
        </div>
        <div class="card-body">

        </div>
 </div>
 */
 ?>





