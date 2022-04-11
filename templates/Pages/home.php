<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="dashboard">
    <div class="card-shad">
    <a class="nav-link " <?= $this->Html->link(__('Customers'), ['controller' => 'Customers','action' => 'index']) ?>
        <img class="img-profile rounded-circle" src="/fit3047_team14/webroot/img/default.png">
    </div>
    </a>

    <a href="http://localhost/team14-app_fit3047/staffs">
    <div class="card-shad">

        <h6 class="dash">Staffs</h6>
        <img class="img-profile rounded-circle" src="/fit3047_team14/webroot/img/default.png">


    </div>
    </a>


    <a href="http://localhost/team14-app_fit3047/suppliers">
    <div class="card-shad">

        <h6 class="dash">Suppliers</h6>

        <img class="img-profile rounded-circle" src="/fit3047_team14/webroot/img/default.png">


    </div>
    </a>


    <a href="http://localhost/team14-app_fit3047/products">
    <div class="card-shad">

        <h6 class="dash">Products</h6>
        <img class="img-profile rounded-circle" src="/fit3047_team14/webroot/img/default.png">
    </div>
    </a>

    <a href="http://localhost/team14-app_fit3047/orders">
    <div class="card-shad">
        <h6 class="dash">Orders</h6>
        <img class="img-profile rounded-circle" src="/fit3047_team14/webroot/img/default.png">
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

