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
                                    <a class="nav-link-style d-flex align-items-center active p-3" href="account-profile.php">
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
                        <div class="card mb-5">
                            <div class="card-header py-3">
                                <h5 class="m-0">Profile Update</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                  
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">First Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Last Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Last name">
                                    </div>
                                    <div class="col-sm-12 mb-6">
                                        <label class="form-label">Email address Used To login<span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="E-mail">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Mobile Number<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Mobile">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Landline Number</label>
                                        <input type="text" class="form-control" placeholder="Landline">
                                    </div>
                                    <div class="col-12 pt-2">
                                        <button class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header py-3">
                                <h5 class="m-0">Change your password</h5>
                            </div>
                            <div class="card-body p-4">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12 mb-3">
                                            <div class="form-group">
                                                <label for="password_old" class="form-label">Old password</label>
                                                <input type="password" id="password_old" class="form-control"></div>
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <div class="form-group">
                                                <label for="password_1" class="form-label">New password</label>
                                                <input type="password" id="password_1" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <div class="form-group"><label for="password_2" class="form-label">Retype new password</label><input type="password" id="password_2" class="form-control"></div>
                                        </div>
                                        <div class="col-12 pt-2">
                                            <button class="btn btn-primary">Change password</button>
                                        </div>
                                    </div>
                                </form>
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