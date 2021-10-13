<?php 
    include "designs/header.php";
    include "designs/navbar.php";
?>
        <!-- Breadcrumb -->
        <div class="py-3 bg-gray-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 my-2">
                        <h1 class="m-0 h4 text-center text-lg-start">Wishlist</h1>
                    </div>
                    <div class="col-6 my-2">
                        <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                            <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="bi bi-home"></i>Home</a></li>
                            <li class=" text-nowrap active" aria-current="page">Wishlist</li>
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
                            <tr class="text-uppercase text-nowrap">
                                <th style="width: 80px;" class="text-dark fw-500">Image</th>
                                <th class="text-dark fw-500">Product Name</th>
                                <th style="width: 120px;" class="text-dark fw-500">Until Price</th>
                                <th style="width: 120px;" class="text-dark fw-500">Qty</th>
                                <th style="width: 120px;" class="text-dark fw-500">Subtotal</th>
                                <th style="width: 230px;" class="text-dark text-end fw-500 ">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-thumbnail">
                                    <a class="text-reset" href="product-details.php"><img src="assets/img/prod/1.jpg" class="img-fluid" width="60" alt=""></a>
                                </td>
                                <td class="product-name"><a class="text-reset" href="product-details.php">Product Name</a></td>
                                <td class="product-price-cart"><span class="amount">150.00</span></td>
                                <td class="product-quantity">
                                    <div class="cart-qty d-inline-flex">
                                        <div class="dec qty-btn">-</div>
                                        <input class="cart-qty-input form-control" type="text" name="qtybutton" value="1">
                                        <div class="inc qty-btn">+</div>
                                    </div>
                                </td>
                                <td class="product-subtotal">120.00</td>
                                <td class="product-remove text-end text-nowrap">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-dark text-nowrap px-3"><i class="bi bi-x lh-1"></i></a>
                                    <a href="shopping-cart.php" class="btn btn-sm btn-outline-primary text-nowrap px-3"><i class="bi bi-cart lh-1 me-md-1"></i> <span class="d-none d-md-inline-block">ADD TO CART</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumbnail">
                                   <a class="text-reset" href="product-details.php"><img src="assets/img/prod/1.jpg" class="img-fluid" width="60" alt=""></a>
                                </td>
                                <td class="product-name"><a class="text-reset" href="product-details.php">Product Name</a></td>
                                <td class="product-price-cart"><span class="amount">150.00</span></td>
                                <td class="product-quantity">
                                    <div class="cart-qty d-inline-flex">
                                        <div class="dec qty-btn">-</div>
                                        <input class="cart-qty-input form-control" type="text" name="qtybutton" value="1">
                                        <div class="inc qty-btn">+</div>
                                    </div>
                                </td>
                                <td class="product-subtotal">120.00</td>
                                <td class="product-remove text-end text-nowrap">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-dark text-nowrap px-3"><i class="bi bi-x lh-1"></i></a>
                                    <a href="shopping-cart.php" class="btn btn-sm btn-outline-primary text-nowrap px-3"><i class="bi bi-cart lh-1 me-md-1"></i> <span class="d-none d-md-inline-block">ADD TO CART</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumbnail">
                                   <a class="text-reset" href="product-details.php"><img src="assets/img/prod/1.jpg" class="img-fluid" width="60" alt=""></a>
                                </td>
                                <td class="product-name"><a class="text-reset" href="product-details.php">Product Name</a></td>
                                <td class="product-price-cart"><span class="amount">150.00</span></td>
                                <td class="product-quantity">
                                    <div class="cart-qty d-inline-flex">
                                        <div class="dec qty-btn">-</div>
                                        <input class="cart-qty-input form-control" type="text" name="qtybutton" value="1">
                                        <div class="inc qty-btn">+</div>
                                    </div>
                                </td>
                                <td class="product-subtotal">120.00</td>
                                <td class="product-remove text-end text-nowrap">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-dark text-nowrap px-3"><i class="bi bi-x lh-1"></i></a>
                                    <a href="shopping-cart.php" class="btn btn-sm btn-outline-primary text-nowrap px-3"><i class="bi bi-cart lh-1 me-md-1"></i> <span class="d-none d-md-inline-block">ADD TO CART</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumbnail">
                                   <a class="text-reset" href="product-details.php"><img src="assets/img/prod/1.jpg" class="img-fluid" width="60" alt=""></a>
                                </td>
                                <td class="product-name"><a class="text-reset" href="product-details.php">Product Name</a></td>
                                <td class="product-price-cart"><span class="amount">150.00</span></td>
                                <td class="product-quantity">
                                    <div class="cart-qty d-inline-flex">
                                        <div class="dec qty-btn">-</div>
                                        <input class="cart-qty-input form-control" type="text" name="qtybutton" value="1">
                                        <div class="inc qty-btn">+</div>
                                    </div>
                                </td>
                                <td class="product-subtotal">120.00</td>
                                <td class="product-remove text-end text-nowrap">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-dark text-nowrap px-3"><i class="bi bi-x lh-1"></i></a>
                                    <a href="shopping-cart.php" class="btn btn-sm btn-outline-primary text-nowrap px-3"><i class="bi bi-cart lh-1 me-md-1"></i> <span class="d-none d-md-inline-block">ADD TO CART</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumbnail">
                                   <a class="text-reset" href="product-details.php"><img src="assets/img/prod/1.jpg" class="img-fluid" width="60" alt=""></a>
                                </td>
                                <td class="product-name"><a class="text-reset" href="product-details.php">Product Name</a></td>
                                <td class="product-price-cart"><span class="amount">150.00</span></td>
                                <td class="product-quantity">
                                    <div class="cart-qty d-inline-flex">
                                        <div class="dec qty-btn">-</div>
                                        <input class="cart-qty-input form-control" type="text" name="qtybutton" value="1">
                                        <div class="inc qty-btn">+</div>
                                    </div>
                                </td>
                                <td class="product-subtotal">120.00</td>
                                <td class="product-remove text-end text-nowrap">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-dark text-nowrap px-3"><i class="bi bi-x lh-1"></i></a>
                                    <a href="shopping-cart.php" class="btn btn-sm btn-outline-primary text-nowrap px-3"><i class="bi bi-cart lh-1 me-md-1"></i> <span class="d-none d-md-inline-block">ADD TO CART</span></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Cart Table -->
    </main>
    <!-- End Main -->
    <?php 
        include "designs/footer.php"
    ?>