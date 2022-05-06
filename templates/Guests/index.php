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
                    <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-1.jpg" alt="..." />
                    <h5>Product name</h5>
                    <p class="font-weight-light mb-0">"This is product will help......"</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-2.jpg" alt="..." />
                    <h5>Product name</h5>
                    <p class="font-weight-light mb-0">"This is product will help......"</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-3.jpg" alt="..." />
                    <h5>Product name</h5>
                    <p class="font-weight-light mb-0">"This is product will help......"</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section" id="aboutus">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About Us</h2>
            <div class="row text-center">
                <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                    <h4 class="my-3">E-Commerce</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                    <h4 class="my-3">Responsive Design</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                    <h4 class="my-3">Web Security</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
</section>


