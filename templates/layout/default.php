<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
echo $this->Html->css('//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css',['block'=>true]);
echo $this->Html->script('//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js',['block'=>true]);
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?= $this->Html->meta('icon') ?>

    <!-- Custom fonts for this template-->
    <?= $this->Html->css('/vendor/fontawesome-free/css/all.min.css') ?>
    <title><?= $this->fetch('title') ?></title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <!-- Custom styles for this template-->
    <?= $this->Html->css('sb-admin-2.min.css') ?>
    <!--  $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>-->

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>
<div id="content">
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->

    <ul class="navbar-nav ml-auto">
        <!-- Homepage -->
        <li class="nav-item">
            <a class="nav-link " <?= $this->Html->link(__('Homepage'), ['controller' => 'Pages','action' => 'home']) ?>
            </a>

        </li>

        <!-- Customers -->
        <li class="nav-item">
            <a class="nav-link " <?= $this->Html->link(__('Customers'), ['controller' => 'Customers','action' => 'index']) ?>
            </a>

        </li>
        <!-- Staffs -->
        <li class="nav-item">
            <a class="nav-link " <?= $this->Html->link(__('Staffs'), ['controller' => 'Staffs','action' => 'index']) ?>
            </a>

        </li>
        <!-- Suppliers -->
        <li class="nav-item">
            <a class="nav-link "<?= $this->Html->link(__('Suppliers'), ['controller' => 'Suppliers','action' => 'index']) ?>
            </a>
        </li>

        <!-- Products -->
        <li class="nav-item">
            <a class="nav-link "<?= $this->Html->link(__('Products'), ['controller' => 'Products','action' => 'index']) ?>
            </a>
        </li>


        <!-- Orders -->
        <li class="nav-item">
            <a class="nav-link " <?= $this->Html->link(__('Orders'), ['controller' => 'RestockingOrders','action' => 'index']) ?>
            </a>
        </li>


        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <img class="img-profile rounded-circle"
                     src="img/sundayEveryday_logo_blue.png" alt="">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                 aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
</div>
<!-- /.container-fluid -->
</div>
<footer>
    <?= $this->fetch('script') ?>
</footer>


</body>
</html>
