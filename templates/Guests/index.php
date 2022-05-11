<?php


/**
 * @var \App\View\AppView $this
 */

if(isset($_POST['add'])){
    print_r($_POST['productname']);
}
?>
<body>
 Navigation
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
        <?= $this->Html->link(__('Carts'), ['controller' => 'carts', 'action' => 'add'],['class'=>'btn btn-primary']) ?>

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


<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5">Top Sale Products</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="assets/img/product-1.jpg" alt="Image1" />
                    <h5 class="card-title">Ultra Gentle Lotion1</h5>
                    <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </h6>
                    <h5>
                        <span class="price">$10</span>
                    </h5>
                    <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="assets/img/product-2.jpg" alt="Image2" />
                    <h5 class="card-title">Pampers Baby Diapers1</h5>
                    <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </h6>
                    <h5>
                        <span class="price">$20</span>
                    </h5>
                    <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="assets/img/product-4.jpg" alt="Image4" />
                    <h5 class="card-title">Baby Oil1</h5>
                    <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </h6>
                    <h5>
                        <span class="price">$4</span>
                    </h5>
                    <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
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
                    <img class="img-fluid rounded-circle mb-3" src="assets/img/product-5.jpg" alt="Image5" />
                    <h5 class="card-title">Ultra Gentle Lotion2</h5>
                    <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </h6>
                    <h5>
                        <span class="price">$21</span>
                    </h5>
                    <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="assets/img/product-6.jpg" alt="Image6" />
                    <h5 class="card-title">Pampers Baby Diapers2</h5>
                    <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </h6>
                    <h5>
                        <span class="price">$36</span>
                    </h5>
                    <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="assets/img/product-7.jpg" alt="Image7" />
                    <h5 class="card-title">Baby Oil2</h5>
                    <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </h6>
                    <h5>
                        <span class="price">$12</span>
                    </h5>
                    <button type="submit" class="btn btn-primary" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>



