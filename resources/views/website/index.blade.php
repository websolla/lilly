@extends('website.layouts.master')
@section('content')
    <div class="container-fluid">
        <div data-bs-interval="3000" id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          
        <div class="carousel-inner">
            @foreach( $sliders as $slider )
            <div class="carousel-item slider-act">
            <img src="{{ Helper::getImg($slider->img) }}" alt="{{ $slider->title[Helper::language_now()] }}" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                    <h5 style="color:{{ $slider->color }}">{{ $slider->title[Helper::language_now()] }}</h5>
                    <p style="color:{{ $slider->color }}">{{ $slider->description[Helper::language_now()] }}</p>
                    <a style="color:{{ $slider->color }}" class="btn btn-outline-white" href="{{ $slider->link }}">{{ Helper::tr_web('more') }}</a>

                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </button>
        </div>
    </div>
       
        <!-- section -->
        <section class="py-3">
            <div class="container-fluid">
                <div class="row g-3">
                    @foreach( $categories as $category )
                    <div class="col-lg-3 col-6">
                        <div class="position-relative">
                            <img class="w-100 rounded" src="{{ Helper::getImg($category->img) }}" title="{{ $category->title[Helper::language_now()] }}" alt="{{ $category->title[Helper::language_now()] }}">
                            <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center top-0 left-0 over-lay">
                                <div class="w-100 text-center">
                                    <h6 class="text-uppercase fw-lighten text-white mb-3">NEW IN</h6>
                                    <h3 class="fw-lighten h3 text-white">{{ $category->title[Helper::language_now()] }}</h3>
                                    <div class="pt-3">
                                        <a class="btn btn-white btn-sm " href="shop.php">{{ Helper::tr_web('shopnow') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  
                </div>
            </div>
        </section>
        <!-- End section -->
      
        <!-- Product section -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center section-heading">
                    <div class="col-lg-6 text-center">
                        <h3 class="h2 mt-2">{{ Helper::tr_web('latest') }}</h3>
                    </div>
                </div>
               
                <div class="row g-3 g-lg-4">
                    @foreach( $products as $product)
                    <!-- Product Box -->
                    <div class="col-sm-6 col-6 col-md-3">
                        <div class="product-card-1">
                            <div class="product-card-image">
                                @if($product->oldprice != null)
                                    <div class="badge-ribbon">
                                        <span class="badge bg-danger">{{ Helper::tr_web('sale') }}</span>
                                    </div>
                                @endif
                                <div class="product-action">
                                    <a href="wishlist.php" class="btn btn-outline-primary">
                                        <i class="bi bi-heart"></i>
                                    </a>

                                    <a  href="{{ url('product/'.$product->id) }}" class="btn btn-outline-primary popup-ajax d-none d-sm-block">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                   
                                </div>
                                <div class="product-media">
                                    <a href=".phpproduct-details.php">
                                        <img class="img-fluid" src="{{ Helper::getImg($product->img) }}" title="{{ $product->title[Helper::language_now()] }}" alt="{{ $product->title[Helper::language_now()] }}">
                                    </a>
                                    <div class="product-cart-btn">
                                        <a href="shopping-cart.php" class="btn btn-primary btn-sm w-100">
                                            <i class="bi bi-cart"></i>
                                            {{ Helper::tr_web('addtocart') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-info">
                                <div class="product-meta small">
                                    <a href="shop.php">{{ $product->category->title[Helper::language_now()] }}</a>
                                </div>
                                
                                <h6 class="product-title">
                                    <a href="shop.php">{{ $product->title[Helper::language_now()] }}</a>
                                </h6>
                                <div class="product-price">
                                    <span class="text-primary">{{ $product->price }} L.E</span>
                                    <del class="fs-sm text-muted">{{ $product->oldprice }} L.E</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Box -->
                   @endforeach
                </div>
            </div>
        </section>
        <!-- End Product section -->
        <!-- call to action -->
        <section class="py-12 bg-cover bg-center bg-no-repeat" style="background-image: url({{ Helper::getImg( Helper::settings()->head ) }});">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                      <!--   <h6 class="text-white mb-4">Hurry up! Limited time offer</h6>
                        <h3 class="display-2 fw-lighten text-white">Nw Exclusive <br /> 2021 Collection</h3> -->
                        <div class="pt-4">
                            <a class="btn btn-outline-white" href="shop.php">{{ Helper::tr_web('more') }}</a>
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
                        <h3 class="h2 mb-2">{{ Helper::tr_web('latestBlog') }}</h3>
                        <p class="fs-6 m-0">{{ Helper::tr_web('blog') }}</p>
                    </div>
                </div>
                <div class="row">
                    @foreach( $blogs as $blog )
                    <div class="col-lg-4 col-6 col-md-4 my-3">
                        <div class="hover-scale text-center">
                            <div class="hover-scale-in position-relative">
                                <a href="shop.php">
                                    <img class="img-fluid" src="{{ Helper::getImg($blog->img) }}" title="{{ $blog->title[Helper::language_now()] }}" alt="{{ $blog->title[Helper::language_now()] }}">
                                </a>
                                <div class="position-absolute top-0 start-0 mt-3 ms-3 bg-white d-flex flex-column align-items-center px-3 py-2">
                                    <span class="h4 m-0">{{ $blog->created_at->format('d') }}</span>
                                    <small>{{ $blog->created_at->format('M') }}</small>
                                </div>
                            </div>
                            <div class="pt-3 px-3">
                                <h5>
                                    <a class="text-reset" href="shop.php">{{ $blog->title[Helper::language_now()] }}</a>
                                </h5>
                                <p>{!! \Illuminate\Support\Str::limit($blog->text[Helper::language_now()] , 100, $end='...') !!}</p>
                                <a class="btn btn-sm btn-outline-dark" href="javascript:(0);">{{ Helper::tr_web('read more') }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>
        <!-- End blog -->
      
    </main>
@endsection