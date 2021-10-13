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
        <!-- Product Details -->
        <section class="product-details py-6">
            <div class="container">
                <div class="row">
                    <!-- Product Gallery -->
                    <div class="col-lg-6 lightbox-gallery product-gallery">
                        <div class="slick-carousel product-slider border rounded" data-slick='{
                                "slidesToShow": 1,
                                "slidesToScroll": 1,
                                "arrows": false,
                                "fade": true,
                                "asNavFor": ".product-thumb"
                            }'>
                            <div>
                                <a class="gallery-link" href="assets/img/prod/1.jpg"><i class="bi bi-arrows-fullscreen"></i></a>
                                <img src="assets/img/prod/1.jpg" class="img-fluid" title="" alt="">
                            </div>
                            <div>
                                <a class="gallery-link" href="assets/img/prod/2.jpg"><i class="bi bi-arrows-fullscreen"></i></a>
                                <img src="assets/img/prod/2.jpg" class="img-fluid" title="" alt="">
                            </div>
                            <div>
                                <a class="gallery-link" href="assets/img/prod/3.jpg"><i class="bi bi-arrows-fullscreen"></i></a>
                                <img src="assets/img/prod/3.jpg" class="img-fluid" title="" alt="">
                            </div>
                            <div>
                                <a class="gallery-link" href="assets/img/prod/4.jpg"><i class="bi bi-arrows-fullscreen"></i></a>
                                <img src="assets/img/prod/4.jpg" class="img-fluid" title="" alt="">
                            </div>
                            <div>
                                <a class="gallery-link" href="assets/img/prod/5.jpg"><i class="bi bi-arrows-fullscreen"></i></a>
                                <img src="assets/img/prod/5.jpg" class="img-fluid" title="" alt="">
                            </div>
                          
                        </div>
                        <div class="slick-carousel product-thumb mt-3" data-slick='{
                                "slidesToShow": 5,
                                "slidesToScroll": 1,
                                "asNavFor": ".product-slider",
                                "centerMode": true,
                                "focusOnSelect": true,
                                "centerPadding": "40px",
                                "responsive": [
                                    {
                                        "breakpoint":1200,
                                        "settings":{
                                            "slidesToShow": 5
                                        }
                                    },
                                    {
                                        "breakpoint":992,
                                        "settings":{
                                            "slidesToShow": 4
                                        }
                                    },
                                    {
                                        "breakpoint":768,
                                        "settings":{
                                            "slidesToShow": 4
                                        }
                                    },
                                    {
                                        "breakpoint":576,
                                        "settings":{
                                            "slidesToShow": 3
                                        }
                                    }
                                ]
                            }'>
                            <div class="pe-2">
                                <img src="assets/img/prod/1.jpg" class="img-fluid" title="" alt="">
                            </div>
                            <div class="pe-2">
                                <img src="assets/img/prod/2.jpg" class="img-fluid" title="" alt="">
                            </div>
                            <div class="pe-2">
                                <img src="assets/img/prod/3.jpg" class="img-fluid" title="" alt="">
                            </div>
                            <div class="pe-2">
                                <img src="assets/img/prod/4.jpg" class="img-fluid" title="" alt="">
                            </div>
                            <div class="pe-2">
                                <img src="assets/img/prod/5.jpg" class="img-fluid" title="" alt="">
                            </div>
                          
                        </div>
                    </div>
                    <!-- End Product Gallery -->
                    <!-- Product Details -->
                    <div class="col-lg-6 ps-lg-5">
                        <div class="product-detail pt-4 pt-lg-0">
                            <div class="products-brand pb-2">
                                <span>Brand name</span>
                            </div>
                            <div class="products-title mb-2">
                                <h4 class="h4">Scarf</h4>
                            </div>
                            <div class="rating-star text small pb-4">
             
                                <small>(4 Reviews )</small>
                            </div>
                            <div class="product-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                            </div>
                            <div class="product-attribute">
                                <label class="fs-6 text-dark pb-2 fw-500">Size</label>
                                <div class="nav-thumbs nav mb-3">
                                    <div class="form-check radio-text form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="size_d3" id="xs_2" checked="">
                                        <label class="radio-text-label" for="xs_2">XS</label>
                                    </div>
                                    <div class="form-check radio-text form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="size_d3" id="s_2">
                                        <label class="radio-text-label" for="s_2">S</label>
                                    </div>
                                    <div class="form-check radio-text form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="size_d3" id="m_2">
                                        <label class="radio-text-label" for="m_2">M</label>
                                    </div>
                                    <div class="form-check radio-text form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="size_d3" id="l_2">
                                        <label class="radio-text-label" for="l_2">L</label>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="product-price fs-3 fw-500 mb-2">
                                <del class="text-muted fs-6">70.<small>50</small></del>
                                <span class="text-primary">50.<small>50</small></span>
                            </div>
                            <div class="product-detail-actions d-flex flex-wrap pt-3">
                                <div class="cart-qty me-3 mb-3">
                                    <div class="dec qty-btn">-</div>
                                    <input class="cart-qty-input form-control" type="text" name="qtybutton" value="1">
                                    <div class="inc qty-btn">+</div>
                                </div>
                                <div class="cart-button mb-3 d-flex">
                                    <a href="shopping-cart.php" class="btn btn-dark me-3">
                                        <i class="bi bi-cart"></i>
                                        Add to cart
                                    </a>
                                    <a href="wishlist.php" class="btn btn-outline-dark me-3">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                    
                                </div>
                            </div>
                            <div class="product-info-buttons nav pt-4">
                                <a href="javascript:void(0);" class="" data-bs-toggle="modal" data-bs-target="#px_shipping_modal"><i class="bi bi-truck me-2"></i>Policies</a>
                            </div>
                            <div class="pt-3 border-top mt-3 small">
                                <p class="theme-link mb-2">
                                    <label class="m-0 text-dark">Categories:</label>
                                    <a href="javascript:void(0);">Clothes</a>,
                                    
                                </p>
                               
                               
                            </div>
                            <div class="pt-4">
                            </div>
                        </div>
                    </div>
                    <!-- End Product Details -->
                </div>
            </div>
        </section>
        <!-- End Product Details -->
        <!-- Product Tabs -->
        <section class="pb-6 py-md-6 pb-lg-10 pt-lg-5">
            <div class="container">
                <div class="product-tabs">
                    <ul class="nav product-nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0);" class="nav-link active" id="pd_description_tab" data-bs-toggle="tab" data-bs-target="#pd_description" role="tab" aria-controls="pd_description" aria-selected="true">Description</a>
                        </li>
                       
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0);" class="nav-link" id="pd_reviews_tab" data-bs-toggle="tab" data-bs-target="#pd_reviews" role="tab" aria-controls="pd_reviews" aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="pd_description" role="tabpanel" aria-labelledby="pd_description_tab">
                            <div class="row">
                                <div class="col-lg-12 pe-lg-10">
                                    <h5>Details Description</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <h5 class="pt-3">Sample Unordered List</h5>
                                    <ul class="mb-5">
                                        <li>Comodous in tempor ullamcorper miaculis</li>
                                        <li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
                                        <li>Divamus sit amet purus justo.</li>
                                        <li>Proin molestie egestas orci ac suscipit risus posuere loremous</li>
                                    </ul>
                                    <h5>Sample Ordered Lista</h5>
                                    <ol>
                                        <li>Comodous in tempor ullamcorper miaculis</li>
                                        <li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
                                        <li>Divamus sit amet purus justo.</li>
                                        <li>Proin molestie egestas orci ac suscipit risus posuere loremous</li>
                                    </ol>
                                    <blockquote class="bg-gray-100 p-3 lead fw-400 mt-5 text-dark border-start border-primary border-5">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                    </blockquote>
                                </div>
                             
                            </div>
                        </div>
                     
                        <div class="tab-pane fade" id="pd_reviews" role="tabpanel" aria-labelledby="pd_reviews_tab">
                            <div class="row">
                                <div class="col-lg-8 pe-lg-8">
                                    <div class="row align-items-end">
                                        <div class="col-sm-6">
                                            <h5 class="m-0">Reviews</h5>
                                            <div class="rating-star small">
                                            
                                                <span>4.85/5 (400 Reviews)</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex review-box border-top mt-4 pt-4">
                                        <div>
                                            <div class="review-image">
                                                <img class="img-fluid" src="assets/img/product-1.jpg" title="" alt="">
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <h6>Dalia  Ibrahim</h6>
                                            <div class="rating-star small">
                                                
                                                <span>13 April 2012</span>
                                            </div>
                                            <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                                        </div>
                                    </div>
                                    <div class="d-flex review-box border-top mt-4 pt-4">
                                        <div>
                                            <div class="review-image">
                                                <img class="img-fluid" src="assets/img/product-1.jpg" title="" alt="">
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <h6>Dalia  Ibrahim</h6>
                                            <div class="rating-star small">
                                                
                                                <span>13 April 2012</span>
                                            </div>
                                            <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                                        </div>
                                    </div>
                                    <div class="d-flex review-box border-top mt-4 pt-4">
                                        <div>
                                            <div class="review-image">
                                                <img class="img-fluid" src="assets/img/product-1.jpg" title="" alt="">
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <h6>Dalia  Ibrahim</h6>
                                            <div class="rating-star small">
                                                
                                                <span>13 April 2012</span>
                                            </div>
                                            <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                                        </div>
                                    </div>
                                    <div class="d-flex review-box border-top mt-4 pt-4">
                                        <div>
                                            <div class="review-image">
                                                <img class="img-fluid" src="assets/img/product-1.jpg" title="" alt="">
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <h6>Dalia  Ibrahim</h6>
                                            <div class="rating-star small">
                                                
                                                <span>13 April 2012</span>
                                            </div>
                                            <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="border p-4 sticky-lg-top review-form mt-4 mt-lg-0">
                                        <h5 class="mb-3 pb-3 border-bottom">WRITE A REVIEW</h5>
                                        <form>
                                            <div class="row g-2">
                                                <div class="col-sm-6">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" name="name" class="form-control form-control-sm">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label">Email</label>
                                                    <input type="text" name="email" class="form-control form-control-sm">
                                                </div>
                                              
                                                <div class="col-sm-12">
                                                    <label class="form-label">Review Title</label>
                                                    <input type="text" name="review" class="form-control form-control-sm">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label class="form-label">Body of Review (1500)</label>
                                                    <textarea rows="5" class="form-control"></textarea>
                                                </div>
                                                <div class="col-sm-12 pt-2">
                                                    <button type="button" class="btn btn-primary">Submit Review</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Tabs -->
        <!-- You may also like -->
        <section class="section bg-gray-100">
            <div class="container">
                <div class="row justify-content-center mb-4 mb-lg-6">
                    <div class="col-lg-6 text-center">
                        <h3 class="h2 mb-2">You might also like these</h3>
                        <p class="fs-6 m-0">Read Today’s News.</p>
                    </div>
                </div>
                <div class="slick-carousel slick-nav-dark" data-slick='{
                    "slidesToShow": 4,
                    "slidesToScroll": 1,
                    "focusOnSelect": true,
                    "infinite": false,
                    "responsive": [
                        {
                            "breakpoint":1200,
                            "settings":{
                                "slidesToShow": 4
                            }
                        },
                        {
                            "breakpoint":992,
                            "settings":{
                                "slidesToShow": 3
                            }
                        },
                        {
                            "breakpoint":768,
                            "settings":{
                                "slidesToShow": 2
                            }
                        },
                        {
                            "breakpoint":576,
                            "settings":{
                                "slidesToShow": 1
                            }
                        }
                    ]
                }'>
                    <div class="p-2">
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
                                        <img class="img-fluid" src="assets/img/product-1.jpg" title="" alt="">
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
                                    <span class="text-primary">50.<small>50</small></span>
                                    <del class="fs-sm text-muted">70.<small>50</small></del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
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
                                    <a href="shop.php">Clothing</a>
                                </div>
                                
                                <h6 class="product-title">
                                    <a href="shop.php">Scarf</a>
                                </h6>
                                <div class="product-price">
                                    <span class="text-primary">50.<small>50</small></span>
                                    <del class="fs-sm text-muted">70.<small>50</small></del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
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
                                    <a href="shop.php">Clothing</a>
                                </div>
                                
                                <h6 class="product-title">
                                    <a href="shop.php">Scarf</a>
                                </h6>
                                <div class="product-price">
                                    <span class="text-primary">50.<small>50</small></span>
                                    <del class="fs-sm text-muted">70.<small>50</small></del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
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
                                    <a href="shop.php">Clothing</a>
                                </div>
                                
                                <h6 class="product-title">
                                    <a href="shop.php">Scarf</a>
                                </h6>
                                <div class="product-price">
                                    <span class="text-primary">50.<small>50</small></span>
                                    <del class="fs-sm text-muted">70.<small>50</small></del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
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
                                    <a href="shop.php">Clothing</a>
                                </div>
                                
                                <h6 class="product-title">
                                    <a href="shop.php">Scarf</a>
                                </h6>
                                <div class="product-price">
                                    <span class="text-primary">50.<small>50</small></span>
                                    <del class="fs-sm text-muted">70.<small>50</small></del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
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
                                    <a href="shop.php">Clothing</a>
                                </div>
                                
                                <h6 class="product-title">
                                    <a href="shop.php">Scarf</a>
                                </h6>
                                <div class="product-price">
                                    <span class="text-primary">50.<small>50</small></span>
                                    <del class="fs-sm text-muted">70.<small>50</small></del>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End You may also like -->
    </main>
    <!-- End Main -->
 <?php 
    include "designs/footer.php"
 ?>