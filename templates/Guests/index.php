<?php
/**
 * @var \App\View\AppView $this
 */
?>
<body>
<!-- Navigation-->
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

    </div>
</nav>
<header class="masthead">
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="text-center text-black-50">
                    <!-- Page heading-->
                    <h1 class="mb-5">Welcome</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Top Sale products-->
<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5">Top Sale Products</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="assets/img/product-1.jpg" alt="..." />
                    <h5>Ultra Gentle Lotion</h5>
                    <p class="font-weight-light mb-0">"This is product will help......"</p>
                    <a class="btn btn-primary" href="#aboutus">Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="assets/img/product-2.jpg" alt="..." />
                    <h5>Pampers Baby Diapers</h5>
                    <p class="font-weight-light mb-0">"This is product will help......"</p>
                    <a class="btn btn-primary" href="#aboutus">Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="assets/img/product-4.jpg" alt="..." />
                    <h5>Baby Oil</h5>
                    <p class="font-weight-light mb-0">"This is product will help......"</p>
                    <a class="btn btn-primary" href="#aboutus">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials text-center bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="assets/img/product-5.jpg" alt="..." />
                    <h5>Ultra Gentle Lotion</h5>
                    <p class="font-weight-light mb-0">"This is product will help......"</p>
                    <a class="btn btn-primary" href="#aboutus">Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="assets/img/product-6.jpg" alt="..." />
                    <h5>Pampers Baby Diapers</h5>
                    <p class="font-weight-light mb-0">"This is product will help......"</p>
                    <a class="btn btn-primary" href="#aboutus">Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="assets/img/product-7.jpg" alt="..." />
                    <h5>Baby Oil</h5>
                    <p class="font-weight-light mb-0">"This is product will help......"</p>
                    <a class="btn btn-primary mb-5" href="#aboutus">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</section>



