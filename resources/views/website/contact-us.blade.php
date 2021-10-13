<?php 
    include "designs/header.php";
    include "designs/navbar.php";
?>
        <!-- Breadcrumb -->
        <div class="py-3 bg-gray-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-2">
                        <h1 class="m-0 h4 text-center text-lg-start">Contact Us</h1>
                    </div>
                    <div class="col-lg-6 my-2">
                        <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                            <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="bi bi-home"></i>Home </a></li>
                            <li class=" text-nowrap active" aria-current="page"> Contact us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->
        <!-- Contact us -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 my-3 pe-lg-8 m-auto">
                        <h3 class="mb-2 h2">Get in Touch</h3>
                        <p class="fw-400">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <form class="row g-3 pt-3" method="get" action="https://www.websolla.com">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="type" placeholder="Name*">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email*">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" id="inputAddress" placeholder="Subject*">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" rows="4"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <div class="bg-gray-100 section">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="text-primary display-5 mb-3">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="">
                                    <p class="mb-0">010 971 72 104</p>
                                    <p>+2 26658 795</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="text-primary display-5 mb-3">
                                    <i class="bi bi-globe"></i>
                                </div>
                                <div class="">
                                    <p class="mb-0"><a class="text-reset" href="mailto:info@lilly-eg.com">info@lilly-eg.com</a></p>
                                    <p><a class="text-reset" href="mailto:info@lilly-eg.com">sales@lilly-eg.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="text-primary display-5 mb-3">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div class="">
                                    <p class="mb-0">15B 5th square,</p>
                                    <p> CAIRO 14305, Egypt </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact end -->
    </main>
    <!-- End Main -->
  <?php 
    include "designs/footer.php"
  ?>