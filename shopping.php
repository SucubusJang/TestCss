<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora Demo - freshDesignweb</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,100" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="ustora/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="ustora/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="ustora/css/owl.carousel.css">
    <link rel="stylesheet" href="ustora/css/style.css">
    <link rel="stylesheet" href="ustora/css/responsive.css">

</head>

<body>

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                            <li><a href="#"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="https://sites.google.com/a/fitm.kmutnb.ac.th/faculty-of-industrial-technology-and-management/_/rsrc/1375689189895/logo/FITM%20LOGO%20EN%20COLOR.png?height=117&width=200"></a></h1>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.htm">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 60px;">
        <div class="mainmenu-area" style="">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.htm">Home</a></li>
                            <li><a href="shop.htm">Shop page</a></li>
                            <li><a href="single-product.htm">Single product</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal">Cart</a></li>
                            <li><a href="checkout.htm">Checkout</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Others</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <?php
                    include_once("index.php");
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-area">
        <!-- Slider -->
        <div class="block-slider block-slider4">
            <div class="bx-wrapper" style="max-width: 100%;">
                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 309px;">
                    <ul class="" id="bxslider-home4" style="width: 615%; position: relative; transition-duration: 0.5s; transform: translate3d(-4970px, 0px, 0px);">
                        <li style="float: left; list-style: none; position: relative; width: 986px;" class="bx-clone"><img src="ustora/img/h4-slide4.png" alt="Slide">
                            <div class="caption-group">
                                <h2 class="caption title animated fadeInRight">
                                    Apple <span class="primary">Store <strong>Ipod</strong></span>
                                </h2>
                                <h4 class="caption subtitle animated fadeInRight">&amp; Phone</h4>
                                <a class="caption button-radius animated fadeInRight" href="#"><span class="icon"></span>Shop now</a>
                            </div>
                        </li>
                        <li style="float: left; list-style: none; position: relative; width: 986px;">
                            <img src="ustora/img/h4-slide.png" alt="Slide">
                            <div class="caption-group">
                                <h2 class="caption title" style="display: none;">
                                    iPhone <span class="primary">6 <strong>Plus</strong></span>
                                </h2>
                                <h4 class="caption subtitle" style="display: none;">Dual SIM</h4>
                                <a class="caption button-radius" href="#" style="display: none;"><span class="icon"></span>Shop now</a>
                            </div>
                        </li>
                        <li style="float: left; list-style: none; position: relative; width: 986px;"><img src="ustora/img/h4-slide2.png" alt="Slide">
                            <div class="caption-group">
                                <h2 class="caption title animated fadeInRight" style="display: block;">
                                    by one, get one <span class="primary">50% <strong>off</strong></span>
                                </h2>
                                <h4 class="caption subtitle animated fadeInRight" style="display: block;">school supplies &amp; backpacks.*</h4>
                                <a class="caption button-radius animated fadeInRight" href="#" style="display: inline-block;"><span class="icon"></span>Shop now</a>
                            </div>
                        </li>
                        <li style="float: left; list-style: none; position: relative; width: 986px;"><img src="ustora/img/h4-slide3.png" alt="Slide">
                            <div class="caption-group">
                                <h2 class="caption title animated fadeInRight" style="display: block;">
                                    Apple <span class="primary">Store <strong>Ipod</strong></span>
                                </h2>
                                <h4 class="caption subtitle animated fadeInRight" style="display: block;">Select Item</h4>
                                <a class="caption button-radius animated fadeInRight" href="#" style="display: inline-block;"><span class="icon"></span>Shop now</a>
                            </div>
                        </li>
                        <li style="float: left; list-style: none; position: relative; width: 986px;"><img src="ustora/img/h4-slide4.png" alt="Slide">
                            <div class="caption-group">
                                <h2 class="caption title animated fadeInRight" style="display: block;">
                                    Apple <span class="primary">Store <strong>Ipod</strong></span>
                                </h2>
                                <h4 class="caption subtitle animated fadeInRight" style="display: block;">&amp; Phone</h4>
                                <a class="caption button-radius animated fadeInRight" href="#" style="display: inline-block;"><span class="icon"></span>Shop now</a>
                            </div>
                        </li>
                        <li style="float: left; list-style: none; position: relative; width: 986px;" class="bx-clone">
                            <img src="ustora/img/h4-slide.png" alt="Slide">
                            <div class="caption-group">
                                <h2 class="caption title animated fadeInRight">
                                    iPhone <span class="primary">6 <strong>Plus</strong></span>
                                </h2>
                                <h4 class="caption subtitle animated fadeInRight">Dual SIM</h4>
                                <a class="caption button-radius animated fadeInRight" href="#"><span class="icon"></span>Shop now</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="bx-controls bx-has-pager bx-has-controls-direction">
                    <div class="bx-pager bx-default-pager">
                        <div class="bx-pager-item"><a href="" data-slide-index="0" class="bx-pager-link active">1</a></div>
                        <div class="bx-pager-item"><a href="" data-slide-index="1" class="bx-pager-link">2</a></div>
                        <div class="bx-pager-item"><a href="" data-slide-index="2" class="bx-pager-link">3</a></div>
                        <div class="bx-pager-item"><a href="" data-slide-index="3" class="bx-pager-link">4</a></div>
                    </div>
                    <div class="bx-controls-direction"><a class="bx-prev" href=""><i class="fa fa-angle-left"></i></a><a class="bx-next" href=""><i class="fa fa-angle-right"></i></a></div>
                </div>
            </div>
        </div>
        <!-- ./Slider -->
    </div> <!-- End slider area -->

    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel owl-carousel owl-theme owl-responsive-1000 owl-loaded">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-1160px, 0px, 0px); transition: all 0s ease 0s; width: 3712px;">
                                    <div class="owl-item cloned" style="width: 212px; margin-right: 20px;">
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="ustora/img/product-2.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                    <a href="single-product.htm" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                            </div>

                                            <h2>Nokia Lumia 1320</h2>
                                            <div class="product-carousel-price">
                                                <ins>$899.00</ins> <del>$999.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 212px; margin-right: 20px;">
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="ustora/img/product-3.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                    <a href="single-product.htm" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                            </div>

                                            <h2>LG Leon 2015</h2>

                                            <div class="product-carousel-price">
                                                <ins>$400.00</ins> <del>$425.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 212px; margin-right: 20px;">
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="ustora/img/product-4.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                    <a href="single-product.htm" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                            </div>

                                            <h2><a href="single-product.htm">Sony microsoft</a></h2>

                                            <div class="product-carousel-price">
                                                <ins>$200.00</ins> <del>$225.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 212px; margin-right: 20px;">
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="ustora/img/product-5.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                    <a href="single-product.htm" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                            </div>

                                            <h2>iPhone 6</h2>

                                            <div class="product-carousel-price">
                                                <ins>$1200.00</ins> <del>$1355.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 212px; margin-right: 20px;">
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="ustora/img/product-6.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                    <a href="single-product.htm" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                            </div>

                                            <h2><a href="single-product.htm">Samsung gallaxy note 4</a></h2>

                                            <div class="product-carousel-price">
                                                <ins>$400.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 212px; margin-right: 20px;">
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="ustora/img/product-1.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                    <a href="single-product.htm" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                            </div>

                                            <h2><a href="single-product.htm">Samsung Galaxy s5- 2015</a></h2>

                                            <div class="product-carousel-price">
                                                <ins>$700.00</ins> <del>$100.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 212px; margin-right: 20px;">
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="ustora/img/product-2.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                    <a href="single-product.htm" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                            </div>

                                            <h2>Nokia Lumia 1320</h2>
                                            <div class="product-carousel-price">
                                                <ins>$899.00</ins> <del>$999.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 212px; margin-right: 20px;">
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="ustora/img/product-3.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                    <a href="single-product.htm" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                            </div>

                                            <h2>LG Leon 2015</h2>

                                            <div class="product-carousel-price">
                                                <ins>$400.00</ins> <del>$425.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 212px; margin-right: 20px;">
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="ustora/img/product-4.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                    <a href="single-product.htm" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                            </div>

                                            <h2><a href="single-product.htm">Sony microsoft</a></h2>

                                            <div class="product-carousel-price">
                                                <ins>$200.00</ins> <del>$225.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 212px; margin-right: 20px;">
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="ustora/img/product-5.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                    <a href="single-product.htm" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                            </div>

                                            <h2>iPhone 6</h2>

                                            <div class="product-carousel-price">
                                                <ins>$1200.00</ins> <del>$1355.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 212px; margin-right: 20px;">
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="ustora/img/product-6.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                    <a href="single-product.htm" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                            </div>

                                            <h2><a href="single-product.htm">Samsung gallaxy note 4</a></h2>

                                            <div class="product-carousel-price">
                                                <ins>$400.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 212px; margin-right: 20px;">
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="ustora/img/product-1.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                    <a href="single-product.htm" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                            </div>

                                            <h2><a href="single-product.htm">Samsung Galaxy s5- 2015</a></h2>

                                            <div class="product-carousel-price">
                                                <ins>$700.00</ins> <del>$100.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 212px; margin-right: 20px;">
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="ustora/img/product-2.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                    <a href="single-product.htm" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                            </div>

                                            <h2>Nokia Lumia 1320</h2>
                                            <div class="product-carousel-price">
                                                <ins>$899.00</ins> <del>$999.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 212px; margin-right: 20px;">
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="ustora/img/product-3.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                    <a href="single-product.htm" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                            </div>

                                            <h2>LG Leon 2015</h2>

                                            <div class="product-carousel-price">
                                                <ins>$400.00</ins> <del>$425.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 212px; margin-right: 20px;">
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="ustora/img/product-4.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                    <a href="single-product.htm" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                            </div>

                                            <h2><a href="single-product.htm">Sony microsoft</a></h2>

                                            <div class="product-carousel-price">
                                                <ins>$200.00</ins> <del>$225.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 212px; margin-right: 20px;">
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="ustora/img/product-5.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                    <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                            </div>

                                            <h2>iPhone 6</h2>

                                            <div class="product-carousel-price">
                                                <ins>$1200.00</ins> <del>$1355.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-controls">
                                <div class="owl-nav">
                                    <div class="owl-prev" style="">prev</div>
                                    <div class="owl-next" style="">next</div>
                                </div>
                                <div class="owl-dots" style="">
                                    <div class="owl-dot active"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->

    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list owl-carousel owl-theme owl-responsive-1000 owl-loaded">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-1160px, 0px, 0px); transition: all 0s ease 0s; width: 4640px;">
                                    <div class="owl-item cloned" style="width: 270px; margin-right: 20px;"><img src="ustora/img/brand5.png" alt=""></div>
                                    <div class="owl-item cloned" style="width: 270px; margin-right: 20px;"><img src="ustora/img/brand6.png" alt=""></div>
                                    <div class="owl-item cloned" style="width: 270px; margin-right: 20px;"><img src="ustora/img/brand1.png" alt=""></div>
                                    <div class="owl-item cloned" style="width: 270px; margin-right: 20px;"><img src="ustora/img/brand2.png" alt=""></div>
                                    <div class="owl-item active" style="width: 270px; margin-right: 20px;"><img src="ustora/img/brand1.png" alt=""></div>
                                    <div class="owl-item active" style="width: 270px; margin-right: 20px;"><img src="ustora/img/brand2.png" alt=""></div>
                                    <div class="owl-item active" style="width: 270px; margin-right: 20px;"><img src="ustora/img/brand3.png" alt=""></div>
                                    <div class="owl-item active" style="width: 270px; margin-right: 20px;"><img src="ustora/img/brand4.png" alt=""></div>
                                    <div class="owl-item" style="width: 270px; margin-right: 20px;"><img src="ustora/img/brand5.png" alt=""></div>
                                    <div class="owl-item" style="width: 270px; margin-right: 20px;"><img src="ustora/img/brand6.png" alt=""></div>
                                    <div class="owl-item" style="width: 270px; margin-right: 20px;"><img src="ustora/img/brand1.png" alt=""></div>
                                    <div class="owl-item" style="width: 270px; margin-right: 20px;"><img src="ustora/img/brand2.png" alt=""></div>
                                    <div class="owl-item cloned" style="width: 270px; margin-right: 20px;"><img src="ustora/img/brand1.png" alt=""></div>
                                    <div class="owl-item cloned" style="width: 270px; margin-right: 20px;"><img src="ustora/img/brand2.png" alt=""></div>
                                    <div class="owl-item cloned" style="width: 270px; margin-right: 20px;"><img src="ustora/img/brand3.png" alt=""></div>
                                    <div class="owl-item cloned" style="width: 270px; margin-right: 20px;"><img src="ustora/img/brand4.png" alt=""></div>
                                </div>
                            </div>
                            <div class="owl-controls">
                                <div class="owl-nav">
                                    <div class="owl-prev" style="">prev</div>
                                    <div class="owl-next" style="">next</div>
                                </div>
                                <div class="owl-dots" style="">
                                    <div class="owl-dot active"><span></span></div>
                                    <div class="owl-dot"><span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->

    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.htm"><img src="ustora/img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.htm">Sony Smart TV - 2015</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.htm"><img src="ustora/img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.htm">Apple new mac book 2015</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.htm"><img src="ustora/img/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.htm">Apple new i phone 6</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.htm"><img src="ustora/img/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.htm">Sony playstation microsoft</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.htm"><img src="ustora/img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.htm">Sony Smart Air Condtion</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.htm"><img src="ustora/img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.htm">Samsung gallaxy note 4</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.htm"><img src="ustora/img/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.htm">Apple new i phone 6</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.htm"><img src="ustora/img/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.htm">Samsung gallaxy note 4</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.htm"><img src="ustora/img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.htm">Sony playstation microsoft</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->

    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>u<span>Stora</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Order history</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Vendor contact</a></li>
                            <li><a href="#">Front page</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="#">Mobile Phone</a></li>
                            <li><a href="#">Home accesseries</a></li>
                            <li><a href="#">LED TV</a></li>
                            <li><a href="#">Computer</a></li>
                            <li><a href="#">Gadets</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>?? 2015 uCommerce. All Rights Reserved. <a href="https://freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->

    <!-- Latest jQuery form server -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="ustora/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="ustora/js/owl.carousel.min.js"></script>
    <script src="ustora/js/jquery-3.6.0.min.js"></script>
    <script src="ustora/js/jquery.sticky.js"></script>
    <!-- jQuery easing -->
    <script src="ustora/js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="ustora/js/main.js"></script>

    <!-- Slider -->
    <script src="ustora/js/script.slider.js"></script>
    <script src="ustora/js/bxslider.min.js"></script>
    <!-- <script type="text/javascript" src="ustora/js/bxslider.min.js"></script> -->
    <!-- <script type="text/javascript" src="ustora/js/script.slider.js"></script> -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-10146041-25"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-10146041-25');
    </script>

</body>

</html>