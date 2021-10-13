<?php 
    include "designs/header.php";
    include "designs/navbar.php";
?>
        <!-- Breadcrumb -->
        <div class="py-3 bg-gray-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-2">
                        <h1 class="m-0 h4 text-center text-lg-start">My Wishlist</h1>
                    </div>
                    <div class="col-lg-6 my-2">
                        <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                            <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="bi bi-home"></i>Home</a></li>
                            <li class=" text-nowrap active" aria-current="page">My Wishlist</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->
        <!-- Table -->
        <div class="py-6">
            <div class="container">
                <div class="row">
                    <!-- Profile Menu -->
                    <div class="col-lg-4 pb-4 pb-lg-0 col-xxl-3  pe-xxl-5">
                        <div class="bg-white border border-bottom-0 shadow-lg">
                            <div class="d-flex p-3 align-items-center">
                                 
                                <div class="col ps-3">
                                    <h6 class="m-0">Edward Joe</h6>
                                    <small><a href="javascript:void(0);">your@email.com</a></small>
                                </div>
                            </div>
                            <div class="bg-gray-200 p-3 border-bottom border-top">
                                <h6 class="m-0">Dashboard</h6>
                            </div>
                            <ul class="list-unstyled mb-0 theme-link">
                                <li class="border-bottom mb-0">
                                    <a class="nav-link-style d-flex align-items-center p-3" href="account-order.php">
                                        <i class="bi bi-bag me-2"></i> Order <div class="ms-auto badge-pill badge bg-secondary">5</div>
                                    </a>
                                </li>
                                <li class="border-bottom mb-0">
                                    <a class="nav-link-style d-flex align-items-center active p-3" href="account-wishlist.php">
                                        <i class="bi bi-heart me-2"></i>Wishlist <div class="ms-auto badge-pill badge bg-secondary">5</div>
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="bg-gray-200 p-3 border-bottom">
                                <h6 class="m-0">Account settings</h6>
                            </div>
                            <ul class="list-unstyled mb-0 theme-link">
                                <li class="border-bottom mb-0">
                                    <a class="nav-link-style d-flex align-items-center p-3" href="account-profile.php">
                                        <i class="bi bi-person-circle me-2"></i>Profile info
                                    </a>
                                </li>
                                <li class="border-bottom mb-0">
                                    <a class="nav-link-style d-flex align-items-center p-3" href="account-address.php">
                                        <i class="bi bi-map-fill me-2"></i>Addresses
                                    </a>
                                </li>
                                
                                <li class="border-bottom mb-0">
                                    <a class="nav-link-style d-flex align-items-center p-3" href="javascript:void(0);">
                                        <i class="bi bi-box-arrow-left me-2"></i>Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Profile Menu -->
                    <!-- Content -->
                    <div class="col-lg-8 col-xxl-9">
                        <div class="row g-2">
                            <!-- Product -->
                            <div class="col-6 col-md-3">
                                <div class="product-card-1">
                                    <div class="product-card-image">
                                        <div class="product-media">
                                            <a href="product-details.php">
                                                <img class="img-fluid" src="assets/img/product-1.jpg" title="" alt="">
                                            </a>
                                            <div class="product-cart-btn">
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm w-100">
                                                    <i class="bi bi-x-circle"></i>
                                                    Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card-info">
                                         
                                        <h6 class="product-title">
                                            <a href="shop-fw-without-filtres.php">Fine-knit sweater</a>
                                        </h6>
                                        <div class="product-price">
                                            <span class="text-primary"> 50.<small>50</small></span>
                                            <del class="fs-sm text-muted">80.<small>50</small></del>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                            <!-- End Product -->
                            <!-- Product -->
                            <div class="col-6 col-md-3">
                                <div class="product-card-1">
                                    <div class="product-card-image">
                                           <div class="product-media">
                                            <a href="product-details.php">
                                                <img class="img-fluid" src="assets/img/product-1.jpg" title="" alt="">
                                            </a>
                                            <div class="product-cart-btn">
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm w-100">
                                                    <i class="bi bi-x-circle"></i>
                                                    Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card-info">
                                         
                                        <h6 class="product-title">
                                            <a href="shop-fw-without-filtres.php">Fine-knit sweater</a>
                                        </h6>
                                        <div class="product-price">
                                            <span class="text-primary"> 50.<small>50</small></span>
                                            <del class="fs-sm text-muted">80.<small>50</small></del>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                            <!-- End Product -->
                            <!-- Product -->
                            <div class="col-6 col-md-3">
                                <div class="product-card-1">
                                    <div class="product-card-image">
                                           <div class="product-media">
                                            <a href="product-details.php">
                                                <img class="img-fluid" src="assets/img/product-1.jpg" title="" alt="">
                                            </a>
                                            <div class="product-cart-btn">
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm w-100">
                                                    <i class="bi bi-x-circle"></i>
                                                    Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card-info">
                                         
                                        <h6 class="product-title">
                                            <a href="shop-fw-without-filtres.php">Fine-knit sweater</a>
                                        </h6>
                                        <div class="product-price">
                                            <span class="text-primary"> 50.<small>50</small></span>
                                            <del class="fs-sm text-muted">80.<small>50</small></del>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                            <!-- End Product -->
                            <!-- Product -->
                            <div class="col-6 col-md-3">
                                <div class="product-card-1">
                                    <div class="product-card-image">
                                           <div class="product-media">
                                            <a href="product-details.php">
                                                <img class="img-fluid" src="assets/img/product-1.jpg" title="" alt="">
                                            </a>
                                            <div class="product-cart-btn">
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm w-100">
                                                    <i class="bi bi-x-circle"></i>
                                                    Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card-info">
                                         
                                        <h6 class="product-title">
                                            <a href="shop-fw-without-filtres.php">Fine-knit sweater</a>
                                        </h6>
                                        <div class="product-price">
                                            <span class="text-primary"> 50.<small>50</small></span>
                                            <del class="fs-sm text-muted">80.<small>50</small></del>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                            <!-- End Product -->
                            <!-- Product -->
                            <div class="col-6 col-md-3">
                                <div class="product-card-1">
                                    <div class="product-card-image">
                                           <div class="product-media">
                                            <a href="product-details.php">
                                                <img class="img-fluid" src="assets/img/product-1.jpg" title="" alt="">
                                            </a>
                                            <div class="product-cart-btn">
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm w-100">
                                                    <i class="bi bi-x-circle"></i>
                                                    Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card-info">
                                         
                                        <h6 class="product-title">
                                            <a href="shop-fw-without-filtres.php">Fine-knit sweater</a>
                                        </h6>
                                        <div class="product-price">
                                            <span class="text-primary"> 50.<small>50</small></span>
                                            <del class="fs-sm text-muted">80.<small>50</small></del>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                            <!-- End Product -->
                            <!-- Product -->
                            <div class="col-6 col-md-3">
                                <div class="product-card-1">
                                    <div class="product-card-image">
                                           <div class="product-media">
                                            <a href="product-details.php">
                                                <img class="img-fluid" src="assets/img/product-1.jpg" title="" alt="">
                                            </a>
                                            <div class="product-cart-btn">
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm w-100">
                                                    <i class="bi bi-x-circle"></i>
                                                    Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card-info">
                                         
                                        <h6 class="product-title">
                                            <a href="shop-fw-without-filtres.php">Fine-knit sweater</a>
                                        </h6>
                                        <div class="product-price">
                                            <span class="text-primary"> 50.<small>50</small></span>
                                            <del class="fs-sm text-muted">80.<small>50</small></del>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                            <!-- End Product -->
                            <!-- Product -->
                            <div class="col-6 col-md-3">
                                <div class="product-card-1">
                                    <div class="product-card-image">
                                           <div class="product-media">
                                            <a href="product-details.php">
                                                <img class="img-fluid" src="assets/img/product-1.jpg" title="" alt="">
                                            </a>
                                            <div class="product-cart-btn">
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm w-100">
                                                    <i class="bi bi-x-circle"></i>
                                                    Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card-info">
                                         
                                        <h6 class="product-title">
                                            <a href="shop-fw-without-filtres.php">Fine-knit sweater</a>
                                        </h6>
                                        <div class="product-price">
                                            <span class="text-primary"> 50.<small>50</small></span>
                                            <del class="fs-sm text-muted">80.<small>50</small></del>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                            <!-- End Product -->
                        </div>
                    </div>
                    <!-- End Content -->
                </div>
            </div>
        </div>
        <!--Table -->
    </main>
    <!-- End Main -->
    <?php 
    include "designs/footer.php";
?>