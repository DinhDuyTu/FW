@extends('client.layouts.main')
@section('content')
    @include('client.layouts.slider')
    <div class="main-container col2-left-layout">
        <div class="container">
            <div class="row">
                <div class="col-main col-md-9 col-sm-8 col-xs-12 col-sm-push-4 col-md-push-3">
                    <div class="home-tab">
                        <div class="tab-info">
                            <h3 class="new-product-title pull-left">Products category</h3>
                            <ul class="nav home-nav-tabs home-product-tabs">
                                <li class="active"><a href="#all" data-toggle="tab" aria-expanded="false">All</a></li>
                                @foreach ($categories as $category)
                                    @if ($category->id <= 3)
                                        <li> <a href="#{{ $category->name }}" data-toggle="tab" aria-expanded="false">{{ $category->name }}</a> </li>
                                    @endif
                                @endforeach
                            </ul>
                            <!-- /.nav-tabs -->
                        </div>
                        @include('client.products.products_category')
                    </div>
                    <div class="jtv-banner-block">
                        <div class="jtv-subbanner1">
                            <a href="#"><img class="img-respo" alt="jtv-subbanner1" src="{{ asset('bower_components/Asset-FW-Client/images/banner4.jpg') }}"></a>
                            <div class="text-block wow animated fadeInLeft animated">
                                <div class="text1"><a href="#">clothes sale</a></div>
                                <div class="text2"><a href="#">Elegant Women Style </a></div>
                                <div class="text3"><a href="#">25% off</a></div>
                            </div>
                        </div>
                        <div class="jtv-subbanner2">
                            <a href="#"><img class="img-respo" alt="jtv-subbanner2" src="{{ asset('bower_components/Asset-FW-Client/images/banner5.jpg') }}"></a>
                            <div class="text-block wow animated fadeInLeft animated">
                                <div class="text1"><a href="#">Smart Casuals</a></div>
                                <div class="text2"><a href="#">on brand-new models </a></div>
                                <div class="text3"><a href="#">Shop Now</a></div>
                            </div>
                        </div>
                    </div>
                    @include('client.products.products_sale')
                    <div class="jtv-promotion">
                        <div class="wrap">
                            <div class="wow animated fadeInRight animated">
                                <div class="box jtv-custom">
                                    <div class="box-content">
                                        <div class="promotion-center">
                                            <p class="text_medium">end of season sale</p>
                                            <div class="text_large">
                                                <div class="theme-color">up to</div>
                                                50% off</div>
                                            <p class="text_small">Fashion for all outerwear, shirt &amp; accessories</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('client.products.featured_products')
                </div>
                <aside class="sidebar col-md-3 col-sm-4 col-xs-12 col-sm-pull-8 col-md-pull-9">
                    @include('client.products.best_sale_product')
                    @include('client.products.hot_product')
                    <div class="banner4">
                        <a href="#"><img alt="banner" src="{{ asset('bower_components/Asset-FW-Client/images/top-banner1.jpg') }}"></a>
                    </div>
                    @include('client.products.special_product')
                    <div class="testimonials">
                        <div class="slider-items-products">
                            <div id="testimonials-slider" class="product-flexslider hidden-buttons home-testimonials">
                                <div class="slider-items slider-width-col4 ">
                                    <div class="holder">
                                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
                                        <div class="thumb"> <img src="{{ asset('bower_components/Asset-FW-Client/images/testimonials-img3.jpg') }}" alt="testimonials img"> </div>
                                        <div class="author"> <strong class="name">John Doe</strong> <strong class="designation">CEO, Company</strong></div>
                                    </div>
                                    <div class="holder">
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                        <div class="thumb"> <img src="{{ asset('bower_components/Asset-FW-Client/images/testimonials-img1.jpg') }}" alt="testimonials img"> </div>
                                        <div class="author"> <strong class="name">Vince Roy</strong> <strong class="designation">CEO, Newspaper</strong></div>
                                    </div>
                                    <div class="holder">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        <div class="thumb"> <img src="{{ asset('bower_components/Asset-FW-Client/images/testimonials-img2.jpg') }}" alt="testimonials img"> </div>
                                        <div class="author"> <strong class="name">John Doe</strong> <strong class="designation">CEO, ABC Softwear</strong></div>
                                    </div>
                                    <div class="holder">
                                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                        <div class="thumb"> <img src="{{ asset('bower_components/Asset-FW-Client/images/testimonials-img4.jpg') }}" alt="testimonials img"> </div>
                                        <div class="author"> <strong class="name">Vince Roy</strong> <strong class="designation">CEO, XYZ Softwear</strong></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End Testimonials Box -->
                    <div class="block popular-tags-area ">
                        <div class="sidebar-bar-title">
                            <h3>Popular Tags</h3>
                        </div>
                        <div class="tag">
                            <ul>
                                <li><a href="#">Boys</a></li>
                                <li><a href="#">Camera</a></li>
                                <li><a href="#">good</a></li>
                                <li><a href="#">Computers</a></li>
                                <li><a href="#">Phone</a></li>
                                <li><a href="#">clothes</a></li>
                                <li><a href="#">girl</a></li>
                                <li><a href="#">shoes</a></li>
                                <li><a href="#">women</a></li>
                                <li><a href="#">accessoties</a></li>
                                <li><a href="#">View All Tags</a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    @include('client.reviews.review')
    <div class="jtv-category-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="jtv-single-cat">
                        <div class="page-header">
                            <h2>MOST POPULAR</h2>
                        </div>
                        <div class="jtv-product">
                            <div class="product-img">
                                <a href="single_product.html"> <img src="{{ asset('bower_components/Asset-FW-Client/images/products/img10.jpg') }}" alt=""> <img class="secondary-img" src="{{ asset('bower_components/Asset-FW-Client/images/products/img11.jpg') }}" alt=""> </a>
                            </div>
                            <div class="jtv-product-content">
                                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span>
                                </div>
                                <div class="jtv-product-action">
                                    <div class="jtv-extra-link">
                                        <div class="button-cart">
                                            <button><i class="fa fa-shopping-cart"></i></button>
                                        </div>
                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="jtv-product">
                            <div class="product-img">
                                <a href="single_product.html"> <img src="{{ asset('bower_components/Asset-FW-Client/images/products/img12.jpg') }}" alt=""> <img class="secondary-img" src="{{ asset('bower_components/Asset-FW-Client/images/products/img13.jpg') }}" alt=""> </a>
                            </div>
                            <div class="jtv-product-content">
                                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span>
                                </div>
                                <div class="jtv-product-action">
                                    <div class="jtv-extra-link">
                                        <div class="button-cart">
                                            <button><i class="fa fa-shopping-cart"></i></button>
                                        </div>
                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jtv-product jtv-cat-margin">
                            <div class="product-img">
                                <a href="single_product.html"> <img src="{{ asset('bower_components/Asset-FW-Client/images/products/img14.jpg') }}" alt=""> <img class="secondary-img" src="{{ asset('bower_components/Asset-FW-Client/images/products/img15.jpg') }}" alt=""> </a>
                            </div>
                            <div class="jtv-product-content">
                                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                                <div class="price-box">
                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                </div>
                                <div class="jtv-product-action">
                                    <div class="jtv-extra-link">
                                        <div class="button-cart">
                                            <button><i class="fa fa-shopping-cart"></i></button>
                                        </div>
                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jtv-product jtv-cat-margin">
                            <div class="product-img">
                                <a href="single_product.html"> <img src="{{ asset('bower_components/Asset-FW-Client/images/products/img02.jpg') }}" alt=""> <img class="secondary-img" src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}" alt=""> </a>
                            </div>
                            <div class="jtv-product-content">
                                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                                <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span>
                                </div>
                                <div class="jtv-product-action">
                                    <div class="jtv-extra-link">
                                        <div class="button-cart">
                                            <button><i class="fa fa-shopping-cart"></i></button>
                                        </div>
                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="kid-banner">
                        <a href="#"> <img src="{{ asset('bower_components/Asset-FW-Client/images/banner6.jpg') }}" alt="banner"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
