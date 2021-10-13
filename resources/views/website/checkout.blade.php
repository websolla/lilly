<?php 
    include "designs/header.php";
    include "designs/navbar.php";
?>
        <!-- Breadcrumb -->
        <div class="py-3 bg-gray-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-2">
                        <h1 class="m-0 h4 text-center text-lg-start">Checkout</h1>
                    </div>
                    <div class="col-lg-6 my-2">
                        <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                            <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="bi bi-home"></i>Home</a></li>
                            <li class=" text-nowrap active" aria-current="page">Checkout</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->
        <!-- Table -->
        <div class="py-6">
            <div class="container">
                <div class="row flex-row-reverse">
                    <!-- sidebar -->
                    <div class="col-lg-5 ps-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <ul class="list-unstyled m-0 p-0">
                                    <li class="pb-3 mb-3 border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-4 col-md-2 col-lg-2">
                                                <!-- Image -->
                                                <a href="product-details.php">
                                                    <img class="img-fluid border" src="assets/img/product-2.jpg" alt="...">
                                                </a>
                                            </div>
                                            <div class="col-8">
                                                <!-- Title -->
                                                <p class="mb-1">
                                                    <a class="text-dark fw-500" href="product-details.php">Cotton floral print Dress</a>
                                                    <span class="m-0 text-muted w-100 d-block">50.00</span>
                                                </p>
                                                <!-- Remove -->
                                                <a class="small link-danger ms-auto" href="#!">
                                                    <i class="bi bi-x"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pb-3 mb-3 border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-4 col-md-2 col-lg-2">
                                                <!-- Image -->
                                                <a href="product-details.php">
                                                    <img class="img-fluid border" src="assets/img/product-2.jpg" alt="...">
                                                </a>
                                            </div>
                                            <div class="col-8">
                                                <!-- Title -->
                                                <p class="mb-1">
                                                    <a class="text-dark fw-500" href="product-details.php">Cotton floral print Dress</a>
                                                    <span class="m-0 text-muted w-100 d-block">50.00</span>
                                                </p>
                                                <!-- Remove -->
                                                <a class="small link-danger ms-auto" href="#!">
                                                    <i class="bi bi-x"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pb-3 mb-3 border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-4 col-md-2 col-lg-2">
                                                <!-- Image -->
                                                <a href="product-details.php">
                                                    <img class="img-fluid border" src="assets/img/product-2.jpg" alt="...">
                                                </a>
                                            </div>
                                            <div class="col-8">
                                                <!-- Title -->
                                                <p class="mb-1">
                                                    <a class="text-dark fw-500" href="product-details.php">Cotton floral print Dress</a>
                                                    <span class="m-0 text-muted w-100 d-block">50.00</span>
                                                </p>
                                                <!-- Remove -->
                                                <a class="small link-danger ms-auto" href="#!">
                                                    <i class="bi bi-x"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled m-0">
                                    <li class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="me-2 text-body">Subtotal</h6><span class="text-end">50.00</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="me-2 text-body">Taxes</h6><span class="text-end">50.00</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center border-top pt-3 mt-3">
                                        <h6 class="me-2">Grand Total</h6><span class="text-end text-dark">50.00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="border-bottom mb-4 pb-3">Shipping address</h5>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <label class="form-label">Email Address</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <label class="form-label">Street</label>
                                            <input type="email" class="form-control" id="exampleInputEmail3">
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <label class="form-label">ZIP</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <label class="form-label">State</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Use a different shipping address
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                     
                        <div class="pt-4">
                            <button type="submit" class="btn btn-primary w-100">Place Order</button>
                            <p class="m-0 pt-3">By placing your order you agree to our <a href="javascript:void(0);">Terms & Conditions</a>, <a href="javascript:void(0);">privacy and returns</a> policies. You also consent to some of your data being stored by Lilly Fashion, which may be used to make future shopping experiences better for you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Table -->
    </main>
    <!-- End Main -->
 <?php 
    include "designs/footer.php"
 ?>