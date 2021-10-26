   <!-- Quick View Modal-->
   <div id="ajax-content" class="example-popup">
       
       
            <div class="">
                <div class="row">
                    <!-- Product Gallery -->
                    <div class="col-lg-6 lightbox-gallery product-gallery">
                        <img src="{{ Helper::getImg($product->img) }}" class="img-fluid" title="" alt="{{ $product->title[Helper::language_now()]  }}" title="{{ $product->title[Helper::language_now()]  }}">
                    </div>
                    <!-- End Product Gallery -->
                    <!-- Product Details -->
                    <div class="col-lg-6">
                        <div class="product-detail pt-4">
                            <div class="products-brand pb-2">
                                <span>{{ $product->category->title[Helper::language_now()] }}</span>
                            </div>
                            <div class="products-title mb-2">
                                <h1 class="h4">{{ $product->title['en']  }}</h1>
                            </div>
                            <div class="rating-star text small pb-4">
                                <small>(4 Reviews )</small>
                            </div>
                            <div class="product-description">
                                <p>{{ $product->text[Helper::language_now()] }}</p>
                            </div>
                            <div class="product-attribute">
                                <label class="fs-6 text-dark pb-2 fw-500">{{ Helper::tr_web('sizes') }}</label>
                                <div class="nav-thumbs nav mb-3">
                                    @php $sizes = json_decode($product->size) @endphp 
                                        @foreach( $sizes as $size )
                                            <div class="form-check radio-text form-check-inline me-2">
                                                <input class="form-check-input" type="radio" name="size" id="{{ $size }}" checked="">
                                                <label class="radio-text-label" for="{{ $size }}">{{ $size }}</label>
                                            </div>
                                        @endforeach
                                </div>
                               
                            </div>
                            <div class="product-price fs-3 fw-500 mb-2">
                                <del class="text-muted fs-6">{{ $product->oldprice }}</del>
                                <span class="text-primary"> {{ $product->price }}</span>
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
                                        {{ Helper::tr_web('cart') }}
                                    </a>
                                   <a href="wishlist.php" class="btn btn-outline-primary me-3" >
                                    <i class="bi bi-heart"></i>
                                   </a>
                
                                    <a href="product-details.php" class="btn btn-outline-primary me-3">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Details -->
                </div>
            </div>
       
</div>
<!-- End Quick View Modal--> 


