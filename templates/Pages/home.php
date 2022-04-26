<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
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

            <h6 class="dash">Staffs</h6>
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

    <a href="<?= $this->Url->build(['controller' => 'Orders','action' => 'index'])?>">
        <div class="card-shad">
            <h6 class="dash">Orders</h6>
            <!--        <img class="dash-img" src="/team14-app_fit3047/webroot/img/default.png">-->
            <?= $this->Html->image('/img/order.png', [
                'class' => 'dasho-img',
                'url' => ['controller' => 'Orders','action' => 'index']
            ]); ?>
        </div>
    </a>

</div>




<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Low-Stock Products</h6>
    </div>
    <div class="card-body">

    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Over-Stock Products</h6>
        </div>
        <div class="card-body">

        </div>
    </div>
</div>

