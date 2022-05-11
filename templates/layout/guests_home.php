<!DOCTYPE html>
<html lang="en">
<nav class="navbar navbar-light bg-light static-top">
    <div class="container">
        <a class="navbar-brand">Sunday Everyday</a>
        <div class="topnav">
            <!--<a href="#">Sale</a>
            <a href="#">Cart</a>
            -->
            <a class="btn btn-primary" href="#aboutus">About Us</a>

        </div>
        <!-- Nav Item - User Information -->
        <?= $this->Html->link(__('Login'), ['controller' => 'Staffs', 'action' => 'login'],['class'=>'btn btn-primary']) ?>
        <?= $this->Html->link(__('Carts'), ['controller' => 'carts', 'action' => 'index'],['class'=>'btn btn-primary']) ?>

    </div>
</nav>
<head>

    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?= $this->Html->meta('icon') ?>

    <title><?= $this->fetch('title') ?></title>

    <!-- Custom fonts for this template-->
    <?= $this->Html->css('/vendor/fontawesome-free/css/all.min.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">

    <!-- Custom styles for this template-->
    <?= $this->Html->css('sb-admin-2.css') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

    <?= $this->Html->script('/vendor/jquery/jquery.min.js') ?>


</head>


<!-- Masthead-->

<!-- Footer-->
<footer class="footer bg-light">
    <div class="container-fluid">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
</footer>
<!-- Bootstrap core JavaScript-->
<?= $this->Html->script('/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>

<!-- Core plugin JavaScript-->
<?= $this->Html->script('/vendor/jquery-easing/jquery.easing.min.js') ?>

<!-- Custom scripts for all pages-->
<?= $this->Html->script('sb-admin-2.min') ?>
<?= $this->fetch('script') ?>
</html>


