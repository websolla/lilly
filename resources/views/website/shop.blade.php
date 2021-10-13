<?php 
    include "designs/header.php";
    include "designs/navbar.php";
?>
        <!-- Breadcrumb -->
        <div class="py-3 bg-gray-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-2">
                        <h1 class="m-0 h4 text-center text-lg-start">Shop</h1>
                    </div>
                    <div class="col-lg-6 my-2">
                        <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                            <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="bi bi-home"></i>Home</a></li>
                            <li class=" text-nowrap active" aria-current="page">Product</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->
        <!-- Shop -->
        <section class="py-6">
            <div class="container">
                <div class="row">
                    <!-- Sidebar -->
                    <div class="col-lg-4 col-xl-3 pe-xl-5 pt-9 pt-lg-0 shop-mob-toggle collapse d-lg-block" id="shop_filter">
                        <!-- Mobile Toggle -->
                        <button class="p-3 btn-close position-absolute top-0 start-0 ms-2 mt-2 d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#shop_filter" aria-controls="shop_filter" aria-expanded="false" aria-label="Toggle navigation">
                        </button>
                        <!-- End Mobile Toggle -->
                        <!-- Categories -->
                        <div class="shop-sidebar-block">
                            <div class="shop-sidebar-title">
                                <a class="h5" data-bs-toggle="collapse" href="#shop_categories" role="button" aria-expanded="true" aria-controls="shop_categories">Categories <i class="bi bi-chevron-up"></i></a>
                            </div>
                            <div class="shop-category-list collapse show" id="shop_categories">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link active">All Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link ">Hijab Scarf <span>(25)</span></a>
                                        <a data-bs-toggle="collapse" href="#shop_cat_1" role="button" aria-expanded="false" aria-controls="shop_cat_1" class="s-icon"></a>
                                        <div class="collapse" id="shop_cat_1">
                                            <ul class="nav nav-pills flex-column nav-hierarchy">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link ">Category Name</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link ">Category Name</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link ">Category Name</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link ">Category Name</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link ">Accessories <span>(40)</span></a>
                                        <a data-bs-toggle="collapse" href="#shop_cat_2" role="button" aria-expanded="false" aria-controls="shop_cat_2" class="s-icon"></a>
                                        <div class="collapse" id="shop_cat_2">
                                            <ul class="nav nav-pills flex-column nav-hierarchy">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link ">Category Name</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link ">Category Name</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link ">Category Name</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link ">B Category Name</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link ">Clothes <span>(35)</span></a>
                                        <a data-bs-toggle="collapse" href="#shop_cat_3" role="button" aria-expanded="false" aria-controls="shop_cat_3" class="s-icon"></a>
                                        <div class="collapse" id="shop_cat_3">
                                            <ul class="nav nav-pills flex-column nav-hierarchy">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link ">Category Name</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link ">Category Name</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link ">Category Name</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link ">Category Name</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link ">My Collection <span>(80)</span></a>
                                        <a data-bs-toggle="collapse" href="#shop_cat_4" role="button" aria-expanded="false" aria-controls="shop_cat_4" class="s-icon"></a>
                                        <div class="collapse" id="shop_cat_4">
                                            <ul class="nav nav-pills flex-column nav-hierarchy">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link ">Category Name</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link ">Category Name</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link ">Category Name</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link ">Category Name</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Categories -->
                       
                    </div>
                    <!-- End Sidebar -->
                    <!-- Product Box -->
                    <div class="col-lg-8  col-xl-9">
                        <div class="shop-top-bar d-flex pb-3">
                            <div class="layout-change">
                                <!-- Mobile Toggle -->
                                <button class="btn btn-sm d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#shop_filter" aria-controls="shop_filter" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fs-4 lh-1 bi bi-justify-left"></i>
                                </button>
                                <!-- End Mobile Toggle -->
                                <a class="btn btn-sm active" href="javascript:void(0);"><i class="bi bi-grid"></i></a>
                                <a class="btn btn-sm" href="#"><i class="bi bi-view-stacked"></i></a>
                            </div>
                            <div class="shop-mob-button">
                            </div>
                          
                        </div>
                        <div class="row g-3">   
                            <!-- Product Box -->
                            <div class="col-sm-6 col-6 col-md-3">
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
                                            <a href="product-details.php">
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
                                            <a href="shop-fw-without-filtres.php">Clothing</a> 
                                        </div>
                                        
                                        <h6 class="product-title">
                                            <a href="shop-fw-without-filtres.php">Scarf</a>
                                        </h6>
                                        <div class="product-price">
                                            <span class="text-primary">20.<small>50</small></span>
                                            <del class="fs-sm text-muted">50.<small>50</small></del>
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
                            <div class="col-sm-6  col-6 col-md-3 ">
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
                                            <a href="product-details.php">
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
                                            <a href="shop-fw-without-filtres.php">Scarf</a> 
                                        </div>
                                        
                                        <h6 class="product-title">
                                            <a href="shop-fw-without-filtres.php">Scarf</a>
                                        </h6>
                                        <div class="product-price">
                                            <span class="text-primary">20.<small>50</small></span>
                                            <del class="fs-sm text-muted">50.<small>50</small></del>
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
                            <div class="col-sm-6 col-6 col-md-3 ">
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
                                            <a href="product-details.php">
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
                                            <a href="shop-fw-without-filtres.php">Clothing</a> 
                                        </div>
                                        
                                        <h6 class="product-title">
                                            <a href="shop-fw-without-filtres.php">Scarf</a>
                                        </h6>
                                        <div class="product-price">
                                            <span class="text-primary">20.<small>50</small></span>
                                            <del class="fs-sm text-muted">50.<small>50</small></del>
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
                            <div class="col-sm-6  col-6 col-md-3 ">
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
                                            <a href="product-details.php">
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
                                            <a href="shop-fw-without-filtres.php">Clothing</a> 
                                        </div>
                                        
                                        <h6 class="product-title">
                                            <a href="shop-fw-without-filtres.php">Scarf</a>
                                        </h6>
                                        <div class="product-price">
                                            <span class="text-primary">20.<small>50</small></span>
                                            <del class="fs-sm text-muted">50.<small>50</small></del>
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Box -->
                            <!-- Product Box -->
                            <div class="col-sm-6 col-6 col-md-3 ">
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
                                            <a href="product-details.php">
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
                                            <a href="shop-fw-without-filtres.php">Clothing</a> 
                                        </div>
                                        
                                        <h6 class="product-title">
                                            <a href="shop-fw-without-filtres.php">Scarf</a>
                                        </h6>
                                        <div class="product-price">
                                            <span class="text-primary">20.<small>50</small></span>
                                            <del class="fs-sm text-muted">50.<small>50</small></del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Box -->
                            <!-- Product Box -->
                            <div class="col-sm-6 col-6 col-md-3 ">
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
                                            <a href="product-details.php">
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
                                            <a href="shop-fw-without-filtres.php">Clothing</a> 
                                        </div>
                                        
                                        <h6 class="product-title">
                                            <a href="shop-fw-without-filtres.php">Scarf</a>
                                        </h6>
                                        <div class="product-price">
                                            <span class="text-primary">20.<small>50</small></span>
                                            <del class="fs-sm text-muted">50.<small>50</small></del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Box -->
                            <!-- Product Box -->
                            <div class="col-sm-6 col-6 col-md-3 ">
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
                                            <a href="product-details.php">
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
                                            <a href="shop-fw-without-filtres.php">Clothing</a> 
                                        </div>
                                        
                                        <h6 class="product-title">
                                            <a href="shop-fw-without-filtres.php">Scarf</a>
                                        </h6>
                                        <div class="product-price">
                                            <span class="text-primary">20.<small>50</small></span>
                                            <del class="fs-sm text-muted">50.<small>50</small></del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Box -->
                            <!-- Product Box -->
                            <div class="col-sm-6 col-6 col-md-3 ">
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
                                            <a href="product-details.php">
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
                                            <a href="shop-fw-without-filtres.php">Clothing</a> 
                                        </div>
                                        
                                        <h6 class="product-title">
                                            <a href="shop-fw-without-filtres.php">Scarf</a>
                                        </h6>
                                        <div class="product-price">
                                            <span class="text-primary">20.<small>50</small></span>
                                            <del class="fs-sm text-muted">50.<small>50</small></del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Box -->
                            <!-- Product Box -->
                            <div class="col-sm-6 col-6 col-md-3 ">
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
                                            <a href="product-details.php">
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
                                            <a href="shop-fw-without-filtres.php">Clothing</a> 
                                        </div>
                                        
                                        <h6 class="product-title">
                                            <a href="shop-fw-without-filtres.php">Scarf</a>
                                        </h6>
                                        <div class="product-price">
                                            <span class="text-primary">20.<small>50</small></span>
                                            <del class="fs-sm text-muted">50.<small>50</small></del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Box -->
                        </div>
                        <div class="shop-bottom-bar d-flex align-items-center mt-3">
                            <div>Showing: 1 - 12 of 17</div>
                            <div class="ms-auto">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0);" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Box -->
                </div>
            </div>
        </section>
        <!-- End Shop -->
    </main>
    <!-- End Main -->
<?php 
    include "designs/footer.php"
?>