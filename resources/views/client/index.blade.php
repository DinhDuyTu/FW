@extends('client.layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="jtv-text-top-banner">
                    <a href="/#" title=""> <img class="img-responsive" src="{{ asset('bower_components/Asset-FW-Client/images/banner-img3.jpg') }}" alt=""> <span class="jtv-b-content middle-left"> <span class="title"><span class="skincolor">Incredible Audio</span>
                        <br>
                        <small>The Essence of Sound</small></span><span class="btn-buy"><span>Shop now</span></span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="jtv-text-top-banner">
                    <a href="/#" title=""> <img class="img-responsive" src="{{ asset('bower_components/Asset-FW-Client/images/banner-img4.jpg') }}" alt=""> <span class="jtv-b-content middle-left"> <span class="banner-label-wrapper"></span> <span class="title"><span class="title-color">iMac Refresh Arriving</span>
                        <br>
                        <small>A touch of genius</small></span><span class="btn-buy"><span>Buy now</span></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12 col-sm-12">
                    <!-- Product Tabs-->
                    <div class="category-product">
                        <div class="navbar nav-menu">
                            <div class="navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a data-toggle="tab" href="#tab-1">New Arrivals</a></li>
                                    <li><a data-toggle="tab" href="#tab-2">Best Seller</a></li>
                                    <li><a data-toggle="tab" href="#tab-3">Latest Products</a></li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->

                        </div>
                        <div class="tab-container">
                            <!-- tab product -->
                            <div class="tab-panel active" id="tab-1">
                                <div class="category-products">
                                    <ul class="products-grid">
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info">
                                                        <a class="product-image" title="Product Title Here" href="single_product.html"> <img class="img-responsive" alt="Product Title Here" src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}"> </a>
                                                        <div class="action"><a href="compare.html" title="Compare"><i class="fa fa-signal"></i></a><a href="quick_view.html" title="Quick view"><i class="fa fa-search"></i></a><a href="wishlist.html" title="Wishlist"><i class="fa fa-heart-o"></i></a><a href="shopping_cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="Product Title Here" href="single_product.html"> Product Title Here </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info">
                                                        <a class="product-image" title="Product Title Here" href="single_product.html"> <img class="img-responsive" alt="Product Title Here" src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}"> </a>
                                                        <div class="action"><a href="compare.html" title="Compare"><i class="fa fa-signal"></i></a><a href="quick_view.html" title="Quick view"><i class="fa fa-search"></i></a><a href="wishlist.html" title="Wishlist"><i class="fa fa-heart-o"></i></a><a href="shopping_cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="Product Title Here" href="single_product.html"> Product Title Here </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info">
                                                        <a class="product-image" title="Product Title Here" href="single_product.html"> <img class="img-responsive" alt="Product Title Here" src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}"> </a>
                                                        <div class="action"><a href="compare.html" title="Compare"><i class="fa fa-signal"></i></a><a href="quick_view.html" title="Quick view"><i class="fa fa-search"></i></a><a href="wishlist.html" title="Wishlist"><i class="fa fa-heart-o"></i></a><a href="shopping_cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="Product Title Here" href="single_product.html"> Product Title Here </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- tab product -->
                            <div class="tab-panel" id="tab-2">
                                <div class="category-products">
                                    <ul class="products-grid">
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info">
                                                        <a class="product-image" title="Product Title Here" href="single_product.html"> <img class="img-responsive" alt="Product Title Here" src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}"> </a>
                                                        <div class="action"><a href="compare.html" title="Compare"><i class="fa fa-signal"></i></a><a href="quick_view.html" title="Quick view"><i class="fa fa-search"></i></a><a href="wishlist.html" title="Wishlist"><i class="fa fa-heart-o"></i></a><a href="shopping_cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="Product Title Here" href="single_product.html"> Product Title Here </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info">
                                                        <a class="product-image" title="Product Title Here" href="single_product.html"> <img class="img-responsive" alt="Product Title Here" src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}"> </a>
                                                        <div class="action"><a href="compare.html" title="Compare"><i class="fa fa-signal"></i></a><a href="quick_view.html" title="Quick view"><i class="fa fa-search"></i></a><a href="wishlist.html" title="Wishlist"><i class="fa fa-heart-o"></i></a><a href="shopping_cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="Product Title Here" href="single_product.html"> Product Title Here </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info">
                                                        <a class="product-image" title="Product Title Here" href="single_product.html"> <img class="img-responsive" alt="Product Title Here" src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}"> </a>
                                                        <div class="action"><a href="compare.html" title="Compare"><i class="fa fa-signal"></i></a><a href="quick_view.html" title="Quick view"><i class="fa fa-search"></i></a><a href="wishlist.html" title="Wishlist"><i class="fa fa-heart-o"></i></a><a href="shopping_cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="Product Title Here" href="single_product.html"> Product Title Here </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-panel" id="tab-3">
                                <div class="category-products">
                                    <ul class="products-grid">
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info">
                                                        <a class="product-image" title="Product Title Here" href="single_product.html"> <img class="img-responsive" alt="Product Title Here" src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}"> </a>
                                                        <div class="action"><a href="compare.html" title="Compare"><i class="fa fa-signal"></i></a><a href="quick_view.html" title="Quick view"><i class="fa fa-search"></i></a><a href="wishlist.html" title="Wishlist"><i class="fa fa-heart-o"></i></a><a href="shopping_cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="Product Title Here" href="single_product.html"> Product Title Here </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info">
                                                        <a class="product-image" title="Product Title Here" href="single_product.html"> <img class="img-responsive" alt="Product Title Here" src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}"> </a>
                                                        <div class="action"><a href="compare.html" title="Compare"><i class="fa fa-signal"></i></a><a href="quick_view.html" title="Quick view"><i class="fa fa-search"></i></a><a href="wishlist.html" title="Wishlist"><i class="fa fa-heart-o"></i></a><a href="shopping_cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="Product Title Here" href="single_product.html"> Product Title Here </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info">
                                                        <a class="product-image" title="Product Title Here" href="single_product.html"> <img class="img-responsive" alt="Product Title Here" src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}"> </a>
                                                        <div class="new-label new-top-left">new</div>
                                                        <div class="action"><a href="compare.html" title="Compare"><i class="fa fa-signal"></i></a><a href="quick_view.html" title="Quick view"><i class="fa fa-search"></i></a><a href="wishlist.html" title="Wishlist"><i class="fa fa-heart-o"></i></a><a href="shopping_cart.html" title="Add to cart"><i class="fa fa-shopping-cart"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="Product Title Here" href="single_product.html"> Product Title Here </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                                                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 jtv-features-top">
                    <!-- our features -->
                    <div class="our-features-box ">
                        <div class="feature-box bg-green"> <i class="pe-7s-piggy"></i>
                            <div class="content">
                                <h3>Reasonable Pricing</h3>
                                <p>To establish a selling price for a product</p>
                            </div>
                        </div>
                        <div class="feature-box bg-pamaranch"> <i class="pe-7s-timer"></i>
                            <div class="content">
                                <h3>Limited Time Offers</h3>
                                <p>Hurry up! You Don't want to miss This!</p>
                            </div>
                        </div>
                        <div class="feature-box bg-red"> <i class="pe-7s-headphones"></i>
                            <div class="content">
                                <h3>24/7 Client Support</h3>
                                <p>In order to provide 24X7 customer support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jtv bottom banner section -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="jtv-text-top-banner">
                    <a href="/#" title=""> <img class="img-responsive" src="{{ asset('bower_components/Asset-FW-Client/images/banner-img6.jpg') }}" alt=""> <span class="jtv-b-content top-left"> <span class="banner-label-wrapper"> <span class="banner-label small pink-bg">25%<br>
            <em>off</em></span> </span>
                        </span> <span class="jtv-b-content bottom-left"> <span class="text">Only in our store</span> <span class="title"><span class="black-text">Special Offer</span>
                        <br>
                        <small>Exclusive Savings</small></span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="jtv-text-top-banner">
                    <a href="/#" title=""> <img class="img-responsive" src="{{ asset('bower_components/Asset-FW-Client/images/banner-img8.jpg') }}" alt=""> <span class="jtv-b-content top-center"> <span class="title"><span class="black-text">Smart Camera</span>
                        <br>
                        <small>Superior Image Quality</small></span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="jtv-text-top-banner">
                    <a href="/#" title=""> <img class="img-responsive" src="{{ asset('bower_components/Asset-FW-Client/images/banner-img7.jpg') }}" alt=""> <span class="jtv-b-content middle-center"> <span class="strong-title">45% OFF</span> </span> <span class="jtv-b-content bottom-center"> <span class="text-left"> <span class="media-body text-right"><span class="subtitle skincolor">Best<br>
            Headphones</span></span>
                        </span>
                        </span> <span class="jtv-b-price-box"> <span class="banner-text-wrapper"> <span class="jtv-b-price-text">From</span> <span class="jtv-b-price">$29</span> </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- bestsell Slider -->
    <section class="jtv-bestsell-section">
        <div class="container">
            <div class="slider-items-products">
                <div class="bestsell-block">
                    <div class="jtv-block-inner">
                        <div class="block-title">
                            <h2>Featured Product</h2>
                        </div>
                    </div>
                    <div class="category-products">
                        <ul class="products-grid">
                            <li class="item col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info">
                                            <a class="product-image" title="Product Title Here" href="single_product.html"> <img class="img-responsive" alt="Product Title Here" src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}"> </a>
                                            <div class="action">
                                                <a href="quick_view.html" title="Quick view">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <a href="wishlist.html" title="Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="shopping_cart.html" title="Add to cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </a> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a title="Product Title Here" href="single_product.html"> Product Title Here </a> </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info">
                                            <a class="product-image" title="Product Title Here" href="single_product.html"> <img class="img-responsive" alt="Product Title Here" src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}"> </a>
                                            <div class="action">
                                                <a href="quick_view.html" title="Quick view">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <a href="wishlist.html" title="Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="shopping_cart.html" title="Add to cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </a> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a title="Product Title Here" href="single_product.html"> Product Title Here </a> </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info">
                                            <a class="product-image" title="Product Title Here" href="single_product.html"> <img class="img-responsive" alt="Product Title Here" src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}"> </a>
                                            <div class="action">
                                                <a href="quick_view.html" title="Quick view">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <a href="wishlist.html" title="Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="shopping_cart.html" title="Add to cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </a> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a title="Product Title Here" href="single_product.html"> Product Title Here </a> </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info">
                                            <a class="product-image" title="Product Title Here" href="single_product.html"> <img class="img-responsive" alt="Product Title Here" src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}"> </a>
                                            <div class="action">
                                                <a href="quick_view.html" title="Quick view">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <a href="wishlist.html" title="Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="shopping_cart.html" title="Add to cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </a> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a title="Product Title Here" href="single_product.html"> Product Title Here </a> </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info">
                                            <a class="product-image" title="Product Title Here" href="single_product.html"> <img class="img-responsive" alt="Product Title Here" src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}"> </a>
                                            <div class="action">
                                                <a href="quick_view.html" title="Quick view">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <a href="wishlist.html" title="Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="shopping_cart.html" title="Add to cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </a> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a title="Product Title Here" href="single_product.html"> Product Title Here </a> </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info">
                                            <a class="product-image" title="Product Title Here" href="single_product.html"> <img class="img-responsive" alt="Product Title Here" src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}"> </a>
                                            <div class="action">
                                                <a href="quick_view.html" title="Quick view">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <a href="wishlist.html" title="Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="shopping_cart.html" title="Add to cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </a> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a title="Product Title Here" href="single_product.html"> Product Title Here </a> </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog-outer-container">
                    <div class="jtv-title">
                        <h2>Latest Blog</h2>
                    </div>
                    <div class="blog-inner">
                        <div class="col-sm-4 col-xs-12">
                            <div class="entry-thumb">
                                <a href="blog_single_post.html"> <img class="img-responsive" alt="Blog" src="{{ asset('bower_components/Asset-FW-Client/images/blog-img1.jpg') }}"> </a>
                            </div>
                            <div class="blog-preview_info">
                                <h3><a href="blog_single_post.html">Winter Morning Fabulous</a></h3>
                                <ul class="post-meta">
                                    <li><i class="fa fa-user"></i><a href="#">admin</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">12 comments</a></li>
                                    <li><i class="fa fa-calendar"></i>2017-02-25</li>
                                </ul>
                                <div class="blog-preview_desc">In adipiscing leo magna, a vehicula mi convallis ac. Vivamus volutpat, ante nec congue dictum.</div>
                                <a class="blog-preview_btn" href="blog_single_post.html">Read More <i class="fa fa-long-arrow-right"></i></a> </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="entry-thumb">
                                <a href="blog_single_post.html"> <img class="img-responsive" alt="Blog" src="{{ asset('bower_components/Asset-FW-Client/images/blog-img1.jpg') }}"> </a>
                            </div>
                            <div class="blog-preview_info">
                                <h3><a href="blog_single_post.html">Perfect for promoting</a></h3>
                                <ul class="post-meta">
                                    <li><i class="fa fa-user"></i><a href="#">admin</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">45 comments</a></li>
                                    <li><i class="fa fa-calendar"></i>2017-04-05</li>
                                </ul>
                                <div class="blog-preview_desc">Nam a dolor dictum, dapibus libero eu, malesuada nulla. Aliquam convallis vulputate augue.</div>
                                <a class="blog-preview_btn" href="blog_single_post.html">Read More <i class="fa fa-long-arrow-right"></i></a> </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="entry-thumb">
                                <a href="blog_single_post.html"> <img class="img-responsive" alt="Blog" src="{{ asset('bower_components/Asset-FW-Client/images/blog-img1.jpg') }}"> </a>
                            </div>
                            <div class="blog-preview_info">
                                <h3><a href="blog_single_post.html">Winter Morning Fabulous</a></h3>
                                <ul class="post-meta">
                                    <li><i class="fa fa-user"></i><a href="#">admin</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">12 comments</a></li>
                                    <li><i class="fa fa-calendar"></i>2017-02-25</li>
                                </ul>
                                <div class="blog-preview_desc">In adipiscing leo magna, a vehicula mi convallis ac. Vivamus volutpat, ante nec congue dictum.</div>
                                <a class="blog-preview_btn" href="blog_single_post.html">Read More <i class="fa fa-long-arrow-right"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
