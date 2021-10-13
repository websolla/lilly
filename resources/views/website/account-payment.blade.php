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
                            <li class="breadcrumb-item text-nowrap active" aria-current="page">My Wishlist</li>
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
                                <div class="avatar avatar-lg rounded-circle">
                                    <img src="assets/img/avatar-2.jpg" title="" alt="">
                                </div>
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
                                    <a class="nav-link-style d-flex align-items-center p-3" href="account-wishlist.php">
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
                                    <a class="nav-link-style d-flex align-items-center active p-3" href="account-payment.php">
                                        <i class="bi bi-credit-card me-2"></i>Payment
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
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header py-3 d-flex align-items-center">
                                        <h6 class="m-0">Visa Card</h6>
                                        <span class="ms-auto"><img width="40" src="assets/img/flags/card-visa.png" title="" alt=""></span>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <span class="small letter-spacing-2">CARD NUMBER</span>
                                                <h6 class="m-0 mt-1">xxxx xxxx xxxx 5050</h6>
                                            </div>
                                            <div class="col-8">
                                                <span class="small letter-spacing-2">NAME OF CARD</span>
                                                <h6 class="m-0 mt-1">Bhagudii Bayers</h6>
                                            </div>
                                            <div class="col-4">
                                                <span class="small letter-spacing-2">VALIDITY</span>
                                                <h6 class="m-0 mt-1">xx / xx</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex p-3">
                                        <a class="link-dark text-uppercase fw-500" href="javascript:void(0);">Edit </a>
                                        <a class="link-danger text-uppercase fw-500 ms-auto" href="javascript:void(0);">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header py-3 d-flex align-items-center">
                                        <h6 class="m-0">Master Card</h6>
                                        <span class="ms-auto"><img width="40" src="assets/img/flags/card-master.png" title="" alt=""></span>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <span class="small letter-spacing-2">CARD NUMBER</span>
                                                <h6 class="m-0 mt-1">xxxx xxxx xxxx 5050</h6>
                                            </div>
                                            <div class="col-8">
                                                <span class="small letter-spacing-2">NAME OF CARD</span>
                                                <h6 class="m-0 mt-1">Bhagudii Bayers</h6>
                                            </div>
                                            <div class="col-4">
                                                <span class="small letter-spacing-2">VALIDITY</span>
                                                <h6 class="m-0 mt-1">xx / xx</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex p-3">
                                        <a class="link-dark text-uppercase fw-500" href="javascript:void(0);">Edit </a>
                                        <a class="link-danger text-uppercase fw-500 ms-auto" href="javascript:void(0);">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header py-3">
                                <h6 class="m-0">Add New Address</h6>
                            </div>
                            <div class="card-body p-3">
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" id="cc-number" data-format="card" placeholder="Card number">
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" id="cc-number" data-format="card" placeholder="Your Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-7 form-group">
                                                <input class="form-control" type="text" id="cc-expiry" data-format="date" placeholder="Expiry Date">
                                            </div>
                                            <div class="col-5 form-group">
                                                <input class="form-control" type="password" id="cc-cvc" data-format="cvc" placeholder="CVC">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-primary d-block w-100" type="submit">Register this card</button>
                                    </div>
                                </div>
                            </div>
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