
    <!-- Search START -->
    <div class="px-search-full collapse bg-dark p-3 z-index-999 position-fixed w-100 top-0" id="search-open">
        <div class="container position-relative">
            <div class="row vh-100 justify-content-center align-items-center">
                <div class="col-lg-8">
                    <h2 class="h1">
                        <span class="d-block text-white">Search</span>
                    </h2>
                    <form class="position-relative w-100">
                        <div class="mb-3 input-group">
                            <!-- Search input -->
                            <input class="form-control border-0 shadow-none" type="text" name="search" placeholder="What are you looking for?">
                            <!-- Search button -->
                            <button type="button" class="btn btn-primary shadow-none">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                    
                </div>
                <!-- Search button close START -->
                <a class="search-close" data-bs-toggle="collapse" href="javascript:void(0)" data-bs-target="#search-open" aria-expanded="true">
                    <i class="bi bi-x p-0 lh-1"></i>
                </a>
                <!-- Search button close END -->
            </div>
        </div>
    </div>
    <!-- Search END -->
    <!-- Login Popup START -->
    <div class="modal fade" id="topbarlogin">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title p-3">
                        <h5 class="m-0 text-white">Sign in to your account!</h5>
                        <p class="m-0 text-white">Nice to see you! Please log in with your account.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="w-100 p-3">
                        <!-- Form START -->
                        <form>
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*********">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">keep me signed in</label>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-dark">Login</button>
                                </div>
                                <div class="col-sm-8 text-sm-end">
                                    <span class="text-muted">Don't have an account? <a href="sign-up.php">Signup here</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Popup END -->
    <!-- Mini Cart -->
    <div class="modal px-modal-right fade" id="modalMiniCart" tabindex="-1" role="dialog" aria-hidden="true">
        <!-- Shopping Cart -->
        <div class="modal-dialog px-modal-vertical">
            <div class="modal-content">
                <!-- Header-->
                <div class="modal-header border-bottom">
                    <h6 class="m-0 fw-bold">
                        Your Cart (2)
                    </h6>
                    <!-- Close -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <!-- List group -->
                    <ul class="list-unstyled m-0 p-0">
                        <li class="py-3 border-bottom">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <!-- Image -->
                                    <a href="javascript:void(0);">
                                        <img class="img-fluid border" src="assets/img/prod/1.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="col-8">
                                    <!-- Title -->
                                    <p class="mb-2">
                                        <a class="text-dark fw-500" href="javascript:void(0);">Cotton floral print Dress</a>
                                        <span class="m-0 text-muted w-100 d-block">40.00</span>
                                    </p>
                                    <!--Footer -->
                                    <div class="d-flex align-items-center">
                                        <!-- Select -->
                                        <select class="form-select form-select-sm w-auto">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                        </select>
                                        <!-- Remove -->
                                        <a class="small text-dark ms-auto" href="#!">
                                            <i class="bi bi-x"></i> Remove
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="py-3 border-bottom">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <!-- Image -->
                                    <a href="javascript:void(0);">
                                        <img class="img-fluid border" src="assets/img/prod/2.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="col-8">
                                    <!-- Title -->
                                    <p class="mb-2">
                                        <a class="text-dark fw-500" href="javascript:void(0);">Cotton floral print Dress</a>
                                        <span class="m-0 text-muted w-100 d-block">40.00</span>
                                    </p>
                                    <!--Footer -->
                                    <div class="d-flex align-items-center">
                                        <!-- Select -->
                                        <select class="form-select form-select-sm w-auto">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                        </select>
                                        <!-- Remove -->
                                        <a class="small text-dark ms-auto" href="#!">
                                            <i class="bi bi-x"></i> Remove
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Footer -->
                <div class="mt-auto p-3 pt-0">
                    <div class="row g-0 py-2">
                        <div class="col-8">
                            <span class="text-dark">Subtotal</span>
                        </div>
                        <div class="col-4 text-end">
                            <span class="ml-auto">89.00</span>
                        </div>
                    </div>
                    <div class="row g-0 py-2">
                        <div class="col-8">
                            <span class="text-dark">Taxes:</span>
                        </div>
                        <div class="col-4 text-end">
                            <span class="ml-auto">89.00</span>
                        </div>
                    </div>
                    <div class="row g-0 pt-2 mt-2 border-top fw-bold text-dark">
                        <div class="col-8">
                            <span class="text-dark">Subtotal</span>
                        </div>
                        <div class="col-4 text-end">
                            <span class="ml-auto">89.00</span>
                        </div>
                    </div>
                    <div class="pt-4">
                        <a class="btn btn-block btn-dark w-100 mb-3" href="checkout.php">Continue to Checkout</a>
                        <a class="btn btn-block btn-outline-dark w-100" href="shopping-cart.php">View Cart</a>
                    </div>
                </div>
                <!-- Buttons -->
            </div>
        </div>
    </div>
    <!-- End Mini Cart -->
  
    <!-- Size chart popup-->
    <div class="modal-size-chart modal fade" id="px_size_chart_modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Size Chart</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table mb-0">
                        <thead>
                            <tr class="text-dark">
                                <th class="border-0 bg-light">US Sizes</th>
                                <th class="border-0 bg-light">Euro Sizes</th>
                                <th class="border-0 bg-light">UK Sizes</th>
                                <th class="border-0 bg-light">Inches</th>
                                <th class="border-0 bg-light">CM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="">6</td>
                                <td>39</td>
                                <td>5.5</td>
                                <td>9.25"</td>
                                <td>23.5</td>
                            </tr>
                            <tr>
                                <td class="">6.5</td>
                                <td>39</td>
                                <td>6</td>
                                <td>9.5"</td>
                                <td>24.1</td>
                            </tr>
                            <tr>
                                <td class="">7</td>
                                <td>40</td>
                                <td>6.5</td>
                                <td>9.625"</td>
                                <td>24.4</td>
                            </tr>
                            <tr>
                                <td class="">7.5</td>
                                <td>40-41</td>
                                <td>7</td>
                                <td>9.75"</td>
                                <td>24.8</td>
                            </tr>
                            <tr>
                                <td class="">8</td>
                                <td>41</td>
                                <td>7.5</td>
                                <td>9.9375"</td>
                                <td>25.4</td>
                            </tr>
                            <tr>
                                <td class="">8.5</td>
                                <td>41-42</td>
                                <td>8</td>
                                <td>10.125"</td>
                                <td>25.7</td>
                            </tr>
                            <tr>
                                <td class="">9</td>
                                <td>42</td>
                                <td>8.5</td>
                                <td>10.25"</td>
                                <td>26</td>
                            </tr>
                            <tr>
                                <td class="">9.5</td>
                                <td>42-43</td>
                                <td>9</td>
                                <td>10.4375"</td>
                                <td>26.7</td>
                            </tr>
                            <tr>
                                <td class="">10</td>
                                <td>43</td>
                                <td>9.5</td>
                                <td>10.5625"</td>
                                <td>27</td>
                            </tr>
                            <tr>
                                <td class="">10.5</td>
                                <td>43-44</td>
                                <td>10</td>
                                <td>10.75"</td>
                                <td>27.3</td>
                            </tr>
                            <tr>
                                <td class="">11</td>
                                <td>44</td>
                                <td>10.5</td>
                                <td>10.9375"</td>
                                <td>27.9</td>
                            </tr>
                            <tr>
                                <td class="">11.5</td>
                                <td>44-45</td>
                                <td>11</td>
                                <td>11.125"</td>
                                <td>28.3</td>
                            </tr>
                            <tr>
                                <td class="">12</td>
                                <td>45</td>
                                <td>11.5</td>
                                <td>11.25"</td>
                                <td>28.6</td>
                            </tr>
                            <tr>
                                <td class="">13</td>
                                <td>46</td>
                                <td>12.5</td>
                                <td>11.5625"</td>
                                <td>29.4</td>
                            </tr>
                            <tr>
                                <td class="">14</td>
                                <td>47</td>
                                <td>13.5</td>
                                <td>11.875"</td>
                                <td>30.2</td>
                            </tr>
                            <tr>
                                <td class="">15</td>
                                <td>48</td>
                                <td>14.5</td>
                                <td>12.1875"</td>
                                <td>31</td>
                            </tr>
                            <tr>
                                <td class="">16</td>
                                <td>49</td>
                                <td>15.5</td>
                                <td>12.5"</td>
                                <td>31.8</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Size chart popup-->
    <!-- shipping-->
    <div class="modal-shipping-view modal fade" id="px_shipping_modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Shipping Information</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <ul class="mb-3">
                        <li>Comodous in tempor ullamcorper miaculis</li>
                        <li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
                        <li>Divamus sit amet purus justo.</li>
                        <li>Proin molestie egestas orci ac suscipit risus posuere loremous</li>
                    </ul>
                    <h4 class="pt-4">Privacy Policy</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <ul class="mb-5">
                        <li>Comodous in tempor ullamcorper miaculis</li>
                        <li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
                        <li>Divamus sit amet purus justo.</li>
                        <li>Proin molestie egestas orci ac suscipit risus posuere loremous</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End shipping-->
    <!-- Ask About Product-->
    <div class="modal-askform-view modal fade" id="px_ask_modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ask about product</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Your Name</label>
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputEmail1">Subject</label>
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputEmail1">Your Message</label>
                                    <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Ask About Product-->
    <!-- Header -->
    <div class="header-height-bar"></div>
    <header class="header-main bg-white header-light fixed-top header-height">
        <!-- Top Header -->
        <div class="header-top header-border-bottom small bg-black">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Left -->
                    <div class="d-flex align-items-center justify-content-center d-none d-lg-block">
                        <ul class="nav white-link">
                           <!--  <li class="nav-item me-3 text-white-85">
                                <span>
                                    <i class="bi bi-clock me-2"></i>
                                   Visit time: Mon-Sat 9:30-20:00
                                </span>
                            </li> -->
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="navbar-link">
                                    <i class="bi bi-headset me-2"></i>
                                    Call us now: +012 123 456 789
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Right -->
                    <div class="d-flex align-items-center justify-content-center w-100 w-lg-auto">
                        <!-- Language -->
                        <div class="dropdown ms-0 ms-lg-3">
                            <a class="dropdown-toggle text-white" href="javascript:void(0);" role="button" id="dropdown_language" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                English
                            </a>
                            <div class="dropdown-menu mt-2 shadow" aria-labelledby="dropdown_language" style="margin: 0px;">
                               
                                <a class="dropdown-item" href="javascript:void(0);">العربية</a>

                            </div>
                        </div>
                        <!-- Top link -->
                        <ul class="nav ms-auto ms-lg-3">
                            <li class="nav-item">
                                <a href="contact-us.php" class="nav-link text-white">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link text-white" data-bs-toggle="modal" data-bs-target="#topbarlogin"><i class="bi bi-person-circle me-2"></i>Login</a>
                            </li>
                        </ul>
                        <!-- Top social -->
                        <div class="nav header-social justify-content-end d-none d-lg-block white-link">
                            <a class="h-social-link" href="{{ Helper::settings()->facebook }}"><i class="bi bi-facebook"></i></a>
                            <a class="h-social-link" href="{{ Helper::settings()->instagram }}"><i class="bi bi-instagram"></i></a>
                            <a class="h-social-link" href="{{ Helper::settings()->twitter }}"><i class="bi bi-twitter"></i></a>
                            <a class="h-social-link" href="{{ Helper::settings()->youtube }}"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Header -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('website/assets/img/logo/logo.png') }}"  width="245" title="lilly Fashion" alt="lilly scarf logo">
                </a>
                <!-- Logo -->
                <!-- Menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class=" nav-item">
                            <a href="{{ url('/') }}" class="nav-link">{{ Helper::tr_web('home') }}</a>
                        </li>
                       
                        <li class="dropdown dropdown-full nav-item">
                            <a href="javascript:void(0);" class="nav-link">Shop</a>
                            <label class="px-dropdown-toggle mob-menu"></label>
                            <div class="dropdown-menu dropdown-menu-lg py-lg-2">
                                <div class="container px-0">
                                    <div class="row g-0">
                                        @foreach(  Helper::Departs() as $depart )
                                            <div class="col-md-3 my-3">
                                                <h6 class="px-3">{{ $depart->title[Helper::language_now()] }}</h6>
                                                <ul class="list-unstyled">
                                                    @foreach($depart->category as $cat)
                                                        <li>
                                                            <a href="{{ url('products/'.$cat->id.'/'.str_replace(' ', '-',$cat->title[Helper::language_now()])) }}" class="dropdown-item">{{ $cat->title[Helper::language_now()] }} </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                      
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">More</a>
                            <label class="px-dropdown-toggle mob-menu"></label>
                            <ul class="dropdown-menu left list-unstyled">
                                <li><a class="dropdown-item" href="about.php">About</a></li>
                            </ul>
                        </li>
                    
                      <!--   <li class="dropdown dropdown-full nav-item">
                            <a href="javascript:void(0);" class="nav-link">Account</a>
                            <label class="px-dropdown-toggle mob-menu"></label>
                            <div class="dropdown-menu dropdown-menu-lg py-lg-2">
                                <div class="container px-0">
                                    <div class="row g-0">
                                        <div class="col-md-6 my-3">
                                            <h6 class="px-3">Account</h6>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="login.php" class="dropdown-item">Login </a>
                                                </li>
                                                <li>
                                                    <a href="sign-up.php" class="dropdown-item">Sign up</a>
                                                </li>
                                                <li>
                                                    <a href="reset-password.php" class="dropdown-item">Forgot Password</a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" class="dropdown-item">Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="shopping-cart.php" class="dropdown-item">Shopping Cart </a>
                                                </li>
                                                <li>
                                                    <a href="my-account.php" class="dropdown-item">My Account</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.php" class="dropdown-item">Checkout</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 my-3">
                                            <h6 class="px-3">My Account Option 2 </h6>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="account-address.php" class="dropdown-item">Account Address</a>
                                                </li>
                                                <li>
                                                    <a href="account-order.php" class="dropdown-item">Account Order</a>
                                                </li>
                                                <li>
                                                    <a href="account-payment.php" class="dropdown-item">Account Payment</a>
                                                </li>
                                                <li>
                                                    <a href="account-profile.php" class="dropdown-item">Account Profile</a>
                                                </li>
                                                <li>
                                                    <a href="account-tickets.php" class="dropdown-item">Account Tickets</a>
                                                </li>
                                                <li>
                                                    <a href="account-wishlist.php" class="dropdown-item">Account Wishlist</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">Blog</a>
                            <label class="px-dropdown-toggle mob-menu"></label>
                            <div class="dropdown-menu left shadow-lg">
                                <a class="dropdown-item" href="blog.php">Blog</a>
                                <a class="dropdown-item" href="blog-single.php">Blog Single</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Menu -->
                <div class="nav flex-nowrap align-items-center header-right">
                    <!-- Nav Search-->
                    <div class="nav-item">
                        <a class="nav-link collapsed" data-bs-toggle="collapse" href="javascript:void(0)" data-bs-target="#search-open" aria-expanded="false">
                            <i class="bi bi-search"> </i>
                        </a>
                    </div>
                    <!-- Acount -->
                    <div class="nav-item dropdown">
                        <a class="nav-link" href="javascript:void(0);" role="button" id="dropdown_myaccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-person-circle"> </i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end mt-2 shadow" aria-labelledby="dropdown_myaccount">
                            <a class="dropdown-item" href="login.php">Login</a>
                            <a class="dropdown-item" href="sign-up.php">Register</a>
                            <a class="dropdown-item" href="wishlist.php">Wishlist</a>
                            <a class="dropdown-item" href="my-account.php">My account</a>
                        </div>

                    </div>
                    <!-- Wishlist -->
                    <div class="nav-item d-none d-xl-block">
                        <a class="nav-link" href="wishlist.php">
                            <i class="bi bi-heart"> </i>
                        </a>
                    </div>
                    <!-- Cart -->
                    <div class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modalMiniCart" href="javascript:void(0)">
                            <span class="" data-cart-items="8">
                                <i class="bi bi-cart"> </i>
                            </span>
                        </a>
                    </div>
                    <!-- Mobile Toggle -->
                    <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- End Mobile Toggle -->
                </div>
            </div>
        </nav>
    </header>
    <!-- Header End -->
    <!-- Main -->
    <main>


        