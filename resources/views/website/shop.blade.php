@extends('website.layouts.master')
@section('content')

        <!-- Breadcrumb -->
        <div class="py-3 bg-gray-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-2">
                        <h1 class="m-0 h4 text-center text-lg-start">{{ Helper::tr_web('shoping') }}</h1>
                    </div>
                    <div class="col-lg-6 my-2">
                        <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                            <li class="breadcrumb-item"><a class="text-nowrap" href="{{ url('/') }}"><i class="bi bi-home"></i>{{ Helper::tr_web('home') }} </a></li> /
                            <li class=" text-nowrap active" aria-current="page">{{ $category->title[Helper::language_now()] ?? Helper::tr_web('allprod')}}</li>
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
                                <a class="h5" data-bs-toggle="collapse" href="#shop_categories" role="button" aria-expanded="true" aria-controls="shop_categories">{{ Helper::tr_web('category') }} <i class="bi bi-chevron-up"></i></a>
                            </div>
                            <div class="shop-category-list collapse show" id="shop_categories">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('lilly-products') }}" class="nav-link active">{{ Helper::tr_web('allprod') }}</a>
                                    </li>
                                    @foreach(  $departs as $depart )
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link "> {{ $depart->title[Helper::language_now()] }} <span>({{ $depart->category->count() }})</span></a>
                                        <a data-bs-toggle="collapse" href="#shop_cat_1" role="button" aria-expanded="false" aria-controls="shop_cat_1" class="s-icon"></a>
                                        <div class="collapse" id="shop_cat_1">
                                            <ul class="nav nav-pills flex-column nav-hierarchy">
                                                @foreach( $depart->category as $cat )
                                                    <li class="nav-item">
                                                        <a href="{{ url('products/'.$cat->id.'/'.str_replace(' ', '-',$cat->title[Helper::language_now()])) }}" class="nav-link ">{{ $cat->title[Helper::language_now()] }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    @endforeach
                                    @foreach( $collections as $collection )
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link "> {{ $collection->title[Helper::language_now()] }} <span>({{ $collection->category->count() }})</span></a>
                                        <a data-bs-toggle="collapse" href="#shop_cat_1" role="button" aria-expanded="false" aria-controls="shop_cat_1" class="s-icon"></a>
                                        <div class="collapse" id="shop_cat_1">
                                            <ul class="nav nav-pills flex-column nav-hierarchy">
                                                @foreach( $depart->category as $cat )
                                                    <li class="nav-item">
                                                        <a href="{{ url('products/'.$cat->id.'/'.str_replace(' ', '-',$cat->title[Helper::language_now()])) }}" class="nav-link ">{{ $cat->title[Helper::language_now()] }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    @endforeach
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
                            </div>
                            <div class="shop-mob-button">
                            </div>
                          
                        </div>
                        <div class="row g-3">   
                            @forelse( $products as $product )
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
                                            <a  href="{{ url('product/'.$product->id.'/'.str_replace(' ', '-',$product->title[Helper::language_now()])) }}" class="btn btn-outline-primary popup-ajax d-none d-sm-block">
                                                <i class="bi bi-eye-fill"></i>
                                            </a>
                                            
                                        </div>
                                           <div class="product-media">
                                            <a href="product-details.php">
                                                <img class="img-fluid" src="{{ Helper::getImg($product->img) }}" title="{{ $product->title[Helper::language_now()] }}" alt="{{ $product->title[Helper::language_now()] }}">
                                            </a>
                                            <div class="product-cart-btn">
                                                <a href="shopping-cart.php" class="btn btn-primary btn-sm w-100">
                                                    <i class="bi bi-cart"></i>
                                                   {{ Helper::tr_web('cart') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card-info">
                                        <div class="product-meta small">
                                            <a href="{{ url('products/'.$product->category->id.'/'.str_replace(' ', '-',$product->title[Helper::language_now()])) }}">{{ $product->category->title[Helper::language_now()] }}</a> 
                                        </div>
                                        
                                        <h6 class="product-title">
                                            <a href="{{ url('product-details/'.$product->id.'/'.str_replace(' ', '-',$product->title[Helper::language_now()])) }}">{{ $product->title[Helper::language_now()] }}</a>
                                        </h6>
                                        <div class="product-price">
                                            <span class="text-primary">{{ $product->price }}</span>
                                            <del class="fs-sm text-muted">{{ $product->oldprice }}</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Box -->
                            @empty
                            <h3>{{ helper::tr_web('checkout_sorry') }}</h3>
                            @endforelse
                          
                        </div>
                        <div class="shop-bottom-bar d-flex align-items-center mt-3">
                            @if($products->count() != null)
                            <div>Showing:  {{ $products->currentPage() }} - 9 of {{ $products->lastPage() }}</div>
                            @endif
                           
                            <div class="ms-auto">
                                <ul class="pagination">
                                   
                                    {{ $products->links("pagination::bootstrap-4") }}
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
@endsection