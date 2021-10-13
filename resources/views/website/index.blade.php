<?php 
    include "designs/header.php";
    include "designs/navbar.php";
?>
    <div class="container-fluid">
        <div data-bs-interval="3000" id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="assets/img/cover.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
            <img src="assets/img/summerb.png" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
            <img src="assets/img/cover.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
       
        <!-- section -->
        <section class="py-3">
            <div class="container-fluid">
                <div class="row g-3">
                    <div class="col-lg-3 col-6">
                        <div class="position-relative">
                            <img class="w-100 rounded" src="assets/img/category/scarf.jpg" title="" alt="">
                            <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center top-0 left-0 over-lay">
                                <div class="w-100 text-center">
                                    <h6 class="text-uppercase fw-lighten text-white mb-3">NEW IN</h6>
                                    <h3 class="fw-lighten h3 text-white">Scarf</h3>
                                    <div class="pt-3">
                                        <a class="btn btn-white btn-sm" href="shop.php">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="position-relative">
                            <img class="w-100 rounded" src="assets/img/category/cloth.png" title="" alt="">
                            <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center top-0 left-0 over-lay">
                                <div class="w-100 text-center">
                                    <h6 class="text-uppercase fw-lighten text-white mb-3">NEW IN</h6>
                                    <h3 class="fw-lighten h3 text-white">Clothes</h3>
                                    <div class="pt-3">
                                        <a class="btn btn-white btn-sm" href="shop.php">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="position-relative">
                            <img class="w-100 rounded" src="assets/img/category/acc.jpg" title="" alt="">
                            <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center top-0 left-0 over-lay">
                                <div class="w-100 text-center">
                                    <h6 class="text-uppercase fw-lighten text-white mb-3">NEW IN</h6>
                                    <h3 class="fw-lighten h3 text-white">Hijab Accessories</h3>
                                    <div class="pt-3">
                                        <a class="btn btn-white btn-sm" href="shop-fw-right.php">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="position-relative">
                            <img class="w-100 rounded" src="assets/img/category/acc.jpg" title="" alt="">
                            <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center top-0 left-0 over-lay">
                                <div class="w-100 text-center">
                                    <h6 class="text-uppercase fw-lighten text-white mb-3">NEW IN</h6>
                                    <h3 class="fw-lighten h3 text-white">Hijab Accessories</h3>
                                    <div class="pt-3">
                                        <a class="btn btn-white btn-sm" href="shop-fw-right.php">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section -->
        <!-- Product section -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center section-heading">
                    <div class="col-lg-6 text-center">
                        <p class="fs-6 m-0">Read Today’s News.</p>
                        <h3 class="h2 mt-2">Latest Arrivals</h3>
                    </div>
                </div>
                <div class="row g-3 g-lg-4">
                    <!-- Product Box -->
                    <div class="col-sm-6 col-6 col-md-4">
                        <div class="product-card-1">
                            <div class="product-card-image">
                                <div class="badge-ribbon">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <div class="product-action">
                                    <a href="wishlist.php" class="btn btn-outline-primary">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                     
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                                <div class="product-media">
                                    <a href=".phpproduct-details.php">
                                        <img class="img-fluid" src="assets/img/prod/1.jpg" title="" alt="">
                                    </a>
                                    <div class="product-cart-btn">
                                        <a href="shopping-cart.php" class="btn btn-primary btn-sm w-100">
                                            <i class="bi bi-cart"></i>
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-info">
                                <div class="product-meta small">
                                    <a href="shop.php">Clothing</a>
                                </div>
                                
                                <h6 class="product-title">
                                    <a href="shop.php">Scarf</a>
                                </h6>
                                <div class="product-price">
                                    <span class="text-primary">20.<small>50</small></span>
                                    <del class="fs-sm text-muted">38.<small>50</small></del>
                                </div>
                                <div class="nav-thumbs">
                                    <div class="form-check radio-text form-check-inline">
                                        <input class="form-check-input" type="radio" name="size3" id="btnradio1" checked>
                                        <label class="radio-text-label" for="btnradio1">XS</label>
                                    </div>
                                    <div class="form-check radio-text form-check-inline">
                                        <input class="form-check-input" type="radio" name="size3" id="btnradio2">
                                        <label class="radio-text-label" for="btnradio2">S</label>
                                    </div>
                                    <div class="form-check radio-text form-check-inline">
                                        <input class="form-check-input" type="radio" name="size3" id="btnradio3">
                                        <label class="radio-text-label" for="btnradio3">M</label>
                                    </div>
                                    <div class="form-check radio-text form-check-inline">
                                        <input class="form-check-input" type="radio" name="size3" id="btnradio4">
                                        <label class="radio-text-label" for="btnradio4">L</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Box -->
                    <!-- Product Box -->
                    <div class="col-sm-6 col-6 col-md-4">
                        <div class="product-card-1">
                            <div class="product-card-image">
                                <div class="badge-ribbon">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <div class="product-action">
                                    <a href="wishlist.php" class="btn btn-outline-primary">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                    
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                                <div class="product-media">
                                    <a href=".phpproduct-details.php">
                                        <img class="img-fluid" src="assets/img/prod/2.jpg" title="" alt="">
                                    </a>
                                    <div class="product-cart-btn">
                                         <a href="shopping-cart.php" class="btn btn-primary btn-sm w-100">
                                            <i class="bi bi-cart"></i>
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-info">
                                <div class="product-meta small">
                                    <a href="shop.php">Clothing</a>
                                </div>
                                
                                <h6 class="product-title">
                                    <a href="shop.php">Scarf</a>
                                </h6>
                                <div class="product-price">
                                    <span class="text-primary">20.<small>50</small></span>
                                    <del class="fs-sm text-muted">38.<small>50</small></del>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- End Product Box -->
                    <!-- Product Box -->
                    <div class="col-sm-6 col-6 col-md-4">
                        <div class="product-card-1">
                            <div class="product-card-image">
                                <div class="badge-ribbon">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <div class="product-action">
                                    <a href="wishlist.php" class="btn btn-outline-primary">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                     
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                                <div class="product-media">
                                    <a href=".phpproduct-details.php">
                                        <img class="img-fluid" src="assets/img/prod/3.jpg" title="" alt="">
                                    </a>
                                    <div class="product-cart-btn">
                                        <a href="shopping-cart.php" class="btn btn-primary btn-sm w-100">
                                            <i class="bi bi-cart"></i>
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-info">
                                <div class="product-meta small">
                                    <a href="shop.php">Clothing</a>
                                </div>
                                
                                <h6 class="product-title">
                                    <a href="shop.php">Scarf</a>
                                </h6>
                                <div class="product-price">
                                    <span class="text-primary">20.<small>50</small></span>
                                    <del class="fs-sm text-muted">38.<small>50</small></del>
                                </div>
                                <div class="nav-thumbs">
                                    <div class="form-check radio-text form-check-inline">
                                        <input class="form-check-input" type="radio" name="size4" id="btnradio_1" checked>
                                        <label class="radio-text-label" for="btnradio_1">XS</label>
                                    </div>
                                    <div class="form-check radio-text form-check-inline">
                                        <input class="form-check-input" type="radio" name="size4" id="btnradi_o2">
                                        <label class="radio-text-label" for="btnradi_o2">S</label>
                                    </div>
                                    <div class="form-check radio-text form-check-inline">
                                        <input class="form-check-input" type="radio" name="size4" id="btnradi_o3">
                                        <label class="radio-text-label" for="btnradi_o3">M</label>
                                    </div>
                                    <div class="form-check radio-text form-check-inline">
                                        <input class="form-check-input" type="radio" name="size4" id="btnradi_o4">
                                        <label class="radio-text-label" for="btnradi_o4">L</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Box -->
                    <!-- Product Box -->
                    <div class="col-sm-6 col-6 col-md-4">
                        <div class="product-card-1">
                            <div class="product-card-image">
                                <div class="badge-ribbon">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <div class="product-action">
                                    <a href="wishlist.php" class="btn btn-outline-primary">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                     
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                                <div class="product-media">
                                    <a href=".phpproduct-details.php">
                                        <img class="img-fluid" src="assets/img/prod/4.jpg" title="" alt="">
                                    </a>
                                    <div class="product-cart-btn">
                                         <a href="shopping-cart.php" class="btn btn-primary btn-sm w-100">
                                            <i class="bi bi-cart"></i>
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-info">
                                <div class="product-meta small">
                                    <a href="shop.php">Clothing</a>
                                </div>
                                
                                <h6 class="product-title">
                                    <a href="shop.php">Scarf</a>
                                </h6>
                                <div class="product-price">
                                    <span class="text-primary">20.<small>50</small></span>
                                    <del class="fs-sm text-muted">38.<small>50</small></del>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <!-- End Product Box -->
                    <!-- Product Box -->
                    <div class="col-sm-6 col-6 col-md-4">
                        <div class="product-card-1">
                            <div class="product-card-image">
                                <div class="badge-ribbon">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <div class="product-action">
                                    <a href="wishlist.php" class="btn btn-outline-primary">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                     
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                                <div class="product-media">
                                    <a href=".phpproduct-details.php">
                                        <img class="img-fluid" src="assets/img/prod/5.jpg" title="" alt="">
                                    </a>
                                    <div class="product-cart-btn">
                                         <a href="shopping-cart.php" class="btn btn-primary btn-sm w-100">
                                            <i class="bi bi-cart"></i>
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-info">
                                <div class="product-meta small">
                                    <a href="shop.php">Clothing</a>
                                </div>
                                
                                <h6 class="product-title">
                                    <a href="shop.php">Scarf</a>
                                </h6>
                                <div class="product-price">
                                    <span class="text-primary">20.<small>50</small></span>
                                    <del class="fs-sm text-muted">38.<small>50</small></del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Box -->
                    <!-- Product Box -->
                    <div class="col-sm-6 col-6 col-md-4">
                        <div class="product-card-1">
                            <div class="product-card-image">
                                <div class="badge-ribbon">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <div class="product-action">
                                    <a href="wishlist.php" class="btn btn-outline-primary">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                     
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                                <div class="product-media">
                                    <a href=".phpproduct-details.php">
                                        <img class="img-fluid" src="assets/img/prod/3.jpg" title="" alt="">
                                    </a>
                                    <div class="product-cart-btn">
                                         <a href="shopping-cart.php" class="btn btn-primary btn-sm w-100">
                                            <i class="bi bi-cart"></i>
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-info">
                                <div class="product-meta small">
                                    <a href="shop.php">Clothing</a>
                                </div>
                                
                                <h6 class="product-title">
                                    <a href="shop.php">Scarf</a>
                                </h6>
                                <div class="product-price">
                                    <span class="text-primary">20.<small>50</small></span>
                                    <del class="fs-sm text-muted">38.<small>50</small></del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Box -->
                    <!-- Product Box -->
                    <div class="col-sm-6 col-6 col-md-4">
                        <div class="product-card-1">
                            <div class="product-card-image">
                                <div class="badge-ribbon">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <div class="product-action">
                                    <a href="wishlist.php" class="btn btn-outline-primary">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                     
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                                <div class="product-media">
                                    <a href=".phpproduct-details.php">
                                        <img class="img-fluid" src="assets/img/prod/4.jpg" title="" alt="">
                                    </a>
                                    <div class="product-cart-btn">
                                         <a href="shopping-cart.php" class="btn btn-primary btn-sm w-100">
                                            <i class="bi bi-cart"></i>
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-info">
                                <div class="product-meta small">
                                    <a href="shop.php">Clothing</a>
                                </div>
                                
                                <h6 class="product-title">
                                    <a href="shop.php">Scarf</a>
                                </h6>
                                <div class="product-price">
                                    <span class="text-primary">20.<small>50</small></span>
                                    <del class="fs-sm text-muted">38.<small>50</small></del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Box -->
                    <!-- Product Box -->
                    <div class="col-sm-6 col-6 col-md-4">
                        <div class="product-card-1">
                            <div class="product-card-image">
                                <div class="badge-ribbon">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <div class="product-action">
                                    <a href="wishlist.php" class="btn btn-outline-primary">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                     
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                                <div class="product-media">
                                    <a href=".phpproduct-details.php">
                                        <img class="img-fluid" src="assets/img/prod/1.jpg" title="" alt="">
                                    </a>
                                    <div class="product-cart-btn">
                                         <a href="shopping-cart.php" class="btn btn-primary btn-sm w-100">
                                            <i class="bi bi-cart"></i>
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-info">
                                <div class="product-meta small">
                                    <a href="shop.php">Clothing</a>
                                </div>
                                
                                <h6 class="product-title">
                                    <a href="shop.php">Scarf</a>
                                </h6>
                                <div class="product-price">
                                    <span class="text-primary">20.<small>50</small></span>
                                    <del class="fs-sm text-muted">38.<small>50</small></del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Box -->
                </div>
            </div>
        </section>
        <!-- End Product section -->
        <!-- call to action -->
        <section class="py-12 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/img/cover.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                      <!--   <h6 class="text-white mb-4">Hurry up! Limited time offer</h6>
                        <h3 class="display-2 fw-lighten text-white">Nw Exclusive <br /> 2021 Collection</h3> -->
                        <div class="pt-4">
                            <a class="btn btn-outline-white" href="shop.php">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End call to action -->
      
     
        <!-- blog -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-6 text-center">
                        <h3 class="h2 mb-2">New Blog Posts</h3>
                        <p class="fs-6 m-0">Read Today’s News.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-6 col-md-4 my-3">
                        <div class="hover-scale text-center">
                            <div class="hover-scale-in position-relative">
                                <a href="shop.php">
                                    <img class="img-fluid" src="assets/img/prod/3.jpg" title="" alt="">
                                </a>
                                <div class="position-absolute top-0 start-0 mt-3 ms-3 bg-white d-flex flex-column align-items-center px-3 py-2">
                                    <span class="h4 m-0">25</span>
                                    <small>MAR</small>
                                </div>
                            </div>
                            <div class="pt-3 px-3">
                                <h5>
                                    <a class="text-reset" href="shop.php">Make your Marketing website</a>
                                </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <a class="btn btn-sm btn-outline-dark" href="javascript:(0);">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 col-md-3 my-3">
                        <div class="hover-scale text-center">
                             <div class="hover-scale-in position-relative">
                                <a href="shop.php">
                                    <img class="img-fluid" src="assets/img/prod/1.jpg" title="" alt="">
                                </a>
                                <div class="position-absolute top-0 start-0 mt-3 ms-3 bg-white d-flex flex-column align-items-center px-3 py-2">
                                    <span class="h4 m-0">25</span>
                                    <small>MAR</small>
                                </div>
                            </div>
                            <div class="pt-3 px-3">
                                <h5>
                                    <a class="text-reset" href="shop.php">Make your Marketing website</a>
                                </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <a class="btn btn-sm btn-outline-dark" href="javascript:void(0)">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 col-md-3 my-3">
                        <div class="hover-scale text-center">
                             <div class="hover-scale-in position-relative">
                                <a href="shop.php">
                                    <img class="img-fluid" src="assets/img/prod/2.jpg" title="" alt="">
                                </a>
                                <div class="position-absolute top-0 start-0 mt-3 ms-3 bg-white d-flex flex-column align-items-center px-3 py-2">
                                    <span class="h4 m-0">25</span>
                                    <small>MAR</small>
                                </div>
                            </div>
                            <div class="pt-3 px-3">
                                <h5>
                                    <a class="text-reset" href="shop.php">Make your Marketing website</a>
                                </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <a class="btn btn-sm btn-outline-dark" href="javascript:void(0)">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End blog -->
      
    </main>
   <?php 
    include "designs/footer.php"
   ?>