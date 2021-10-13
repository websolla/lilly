<?php 
    include "designs/header.php";
    include "designs/navbar.php";
?>
        <!-- Breadcrumb -->
        <div class="py-3 bg-gray-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 my-2">
                        <h1 class="m-0 h4 text-center text-lg-start">Shopping Cart</h1>
                    </div>
                    <div class="col-6 my-2">
                        <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                            <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="bi bi-home"></i>Home</a></li>
                            <li class=" text-nowrap active" aria-current="page"> Cart</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->
        <!-- Cart Table -->
        <div class="py-6">
            <div class="container">
                <!-- Cart Table -->
                <div class="table-content table-responsive cart-table-content">
                    <table class="table table-bordered align-middle">
                        <thead>
                            <tr class="text-uppercase">
                                <th class="text-dark text-center fw-500 text-nowrap">Image</th>
                                <th class="text-dark text-center fw-500 text-nowrap">Product Name</th>
                                <th class="text-dark text-center fw-500 text-nowrap">Until Price</th>
                                <th class="text-dark text-center fw-500 text-nowrap">Qty</th>
                                <th class="text-dark text-center fw-500 text-nowrap">Subtotal</th>
                                <th class="text-dark fw-500 text-end text-nowrap">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center product-thumbnail">
                                    <a class="text-reset" href="product-details.php"><img src="assets/img/prod/1.jpg" class="img-fluid" width="100" alt=""></a>
                                </td>
                                <td class="text-center product-name"><a class="text-reset" href="product-details.php">Product Name</a></td>
                                <td class="text-center product-price-cart"><span class="amount">260 L.E.00</span></td>
                                <td class="text-center product-quantity">
                                    <div class="cart-qty d-inline-flex">
                                        <div class="dec qty-btn">-</div>
                                        <input class="cart-qty-input form-control" type="text" name="qtybutton" value="1">
                                        <div class="inc qty-btn">+</div>
                                    </div>
                                </td>
                                <td class="text-center product-subtotal">111.00</td>
                                <td class="product-remove text-end text-nowrap">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-secondary text-nowrap px-3"><i class="bi bi-pencil-square lh-1"></i> <span class="d-none d-md-inline-block">Edit</span></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger text-nowrap px-3"><i class="bi bi-x lh-1"></i> <span class="d-none d-md-inline-block">Remove</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center product-thumbnail">
                                    <a class="text-reset" href="product-details.php"><img src="assets/img/prod/1.jpg" class="img-fluid" width="100" alt=""></a>
                                </td>
                                <td class="text-center product-name"><a class="text-reset" href="product-details.php">Product Name</a></td>
                                <td class="text-center product-price-cart"><span class="amount">260 L.E.00</span></td>
                                <td class="text-center product-quantity">
                                    <div class="cart-qty d-inline-flex">
                                        <div class="dec qty-btn">-</div>
                                        <input class="cart-qty-input form-control" type="text" name="qtybutton" value="1">
                                        <div class="inc qty-btn">+</div>
                                    </div>
                                </td>
                                <td class="text-center product-subtotal">111.00</td>
                                <td class="product-remove text-end text-nowrap">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-secondary text-nowrap px-3"><i class="bi bi-pencil-square lh-1"></i> <span class="d-none d-md-inline-block">Edit</span></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger text-nowrap px-3"><i class="bi bi-x lh-1"></i> <span class="d-none d-md-inline-block">Remove</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center product-thumbnail">
                                    <a class="text-reset" href="product-details.php"><img src="assets/img/prod/1.jpg" class="img-fluid" width="100" alt=""></a>
                                </td>
                                <td class="text-center product-name"><a class="text-reset" href="product-details.php">Product Name</a></td>
                                <td class="text-center product-price-cart"><span class="amount">260 L.E.00</span></td>
                                <td class="text-center product-quantity">
                                    <div class="cart-qty d-inline-flex">
                                        <div class="dec qty-btn">-</div>
                                        <input class="cart-qty-input form-control" type="text" name="qtybutton" value="1">
                                        <div class="inc qty-btn">+</div>
                                    </div>
                                </td>
                                <td class="text-center product-subtotal">111.00</td>
                                <td class="product-remove text-end text-nowrap">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-secondary text-nowrap px-3"><i class="bi bi-pencil-square lh-1"></i> <span class="d-none d-md-inline-block">Edit</span></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger text-nowrap px-3"><i class="bi bi-x lh-1"></i> <span class="d-none d-md-inline-block">Remove</span></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Cart Table -->
                <div class="d-flex">
                    <div>
                        <a class="btn btn-outline-dark" href="shop.php">
                            <i class="ci-arrow-left mt-sm-0 me-1"></i>
                            <span class="d-none d-sm-inline">Continue Shopping</span>
                            <span class="d-inline d-sm-none">Back</span>
                        </a>
                    </div>
                    <div class="ms-auto">
                        <a class="btn btn-outline-primary" href="account-address.php">
                            <span class="d-none d-sm-inline">Update shopping cart</span>
                            <span class="d-inline d-sm-none">Next</span>
                            <i class="ci-arrow-right mt-sm-0 ms-1"></i>
                        </a>
                    </div>
                </div>
                <div class="row flex-row-reverse pt-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header bg-transparent py-3">
                                <h6 class="m-0 mb-1">Order Total</h6>
                            </div>
                            <div class="card-body ">
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="me-2 text-body">Subtotal</h6><span class="text-end">$265.00</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="me-2 text-body">Taxes</h6><span class="text-end">$265.00</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center border-top pt-3 mt-3">
                                        <h6 class="me-2">Grand Total</h6><span class="text-end text-dark">$265.00</span>
                                    </li>
                                </ul>
                                <div class="d-grid gap-2 mx-auto">
                                    <a class="btn btn-primary" href="checkout.php">PROCEED TO CHECKOUT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <div class="card">
                            <div class="card-header bg-transparent py-3">
                                <h6 class="m-0">Use Coupon Code</h6>
                            </div>
                            <div class="card-body ">
                                <form>
                                    <div class="form-group mb-3">
                                        <label class="form-label">Have a Coupon Code?</label>
                                        <input type="email" class="form-control" placeholder="">
                                    </div>
                                    <button type="button" class="btn btn-primary">Apply</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Table -->
    </main>
    <!-- End Main -->
    <?php 
    include "designs/footer.php";
?>