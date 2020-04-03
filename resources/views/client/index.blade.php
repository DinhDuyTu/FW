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
                                    <li> <a href="#{{ $category->name }}" data-toggle="tab" aria-expanded="false">{{ $category->name }}</a> </li>
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

                    <!-- Latest news start -->

                    <div id="latest-news" class="news">
                        <div class="page-header">
                            <h2>Latest news</h2>
                        </div>
                        <div class="slider-items-products">
                            <div id="latest-news-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col6">

                                    <!-- Item -->
                                    <div class="item">
                                        <div class="jtv-blog">
                                            <div class="blog-img">
                                                <a href="single_post.html"> <img class="primary-img" src="{{ asset('bower_components/Asset-FW-Client/images/blog-img1.jpg') }}" alt=""></a> <span class="moretag"></span> </div>
                                            <div class="blog-content-jtv">
                                                <h2><a href="single_post.html">Sed do eiusmod sit amet</a></h2>
                                                <span><i class="fa fa-calendar"></i>Jan, 20, 2016</span><span class="blog-likes"><i class="fa fa-thumbs-up"></i>149</span> <span class="blog-comments"><i class="fa fa-comment"></i>80</span>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                        <div class="jtv-blog">
                                            <div class="blog-img">
                                                <a href="single_post.html"><img class="primary-img" src="{{ asset('bower_components/Asset-FW-Client/images/blog-img2.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="blog-content-jtv">
                                                <h2><a href="single_post.html">Lorem ipsum dolor sit amet</a></h2>
                                                <span><i class="fa fa-calendar"></i>May, 20, 2016</span><span class="blog-likes"><i class="fa fa-thumbs-up"></i>55</span> <span class="blog-comments"><i class="fa fa-comment"></i>100</span>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="item">
                                        <div class="jtv-blog">
                                            <div class="blog-img">
                                                <a href="single_post.html"><img class="primary-img" src="{{ asset('bower_components/Asset-FW-Client/images/blog-img3.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="blog-content-jtv">
                                                <h2><a href="single_post.html">Integer scelerisque diam vitae</a></h2>
                                                <span><i class="fa fa-calendar"></i>Mar, 25, 2016</span><span class="blog-likes"><i class="fa fa-thumbs-up"></i>149</span> <span class="blog-comments"><i class="fa fa-comment"></i>80</span>
                                                <p>Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis. Maecenas eu.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="item">
                                        <div class="jtv-blog">
                                            <div class="blog-img">
                                                <a href="single_post.html"> <img class="primary-img" src="{{ asset('bower_components/Asset-FW-Client/images/blog-img1.jpg') }}" alt=""></a> <span class="moretag"></span> </div>
                                            <div class="blog-content-jtv">
                                                <h2><a href="single_post.html">Sed do eiusmod sit amet</a></h2>
                                                <span><i class="fa fa-calendar"></i>Sep, 13, 2016</span><span class="blog-likes"><i class="fa fa-thumbs-up"></i>49</span> <span class="blog-comments"><i class="fa fa-comment"></i>5</span>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="item">
                                        <div class="jtv-blog">
                                            <div class="blog-img">
                                                <a href="single_post.html"> <img class="primary-img" src="{{ asset('bower_components/Asset-FW-Client/images/blog-img3.jpg') }}" alt=""></a> <span class="moretag"></span> </div>
                                            <div class="blog-content-jtv">
                                                <h2><a href="single_post.html">Sed do eiusmod sit amet</a></h2>
                                                <span><i class="fa fa-calendar"></i>Jun, 29, 2016</span><span class="blog-likes"><i class="fa fa-thumbs-up"></i>39</span> <span class="blog-comments"><i class="fa fa-comment"></i>99</span>
                                                <p>Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy nibh euismod.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="sidebar col-md-3 col-sm-4 col-xs-12 col-sm-pull-8 col-md-pull-9">
                    <div class="best-sale-product">
                        <div class="sidebar-bar-title">
                            <h3>Best sale of week</h3>
                        </div>
                        <div class="block-content">
                            <div class="slider-items-products">
                                <div id="best-sale-slider" class="product-flexslider hidden-buttons">
                                    <div class="slider-items slider-width-col4">
                                        <div class="product-item">
                                            <div class="best-sale-item">
                                                <div class="products-block-left">
                                                    <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('bower_components/Asset-FW-Client/images/products/img15.jpg') }}" alt="Sample Product "></a>
                                                </div>
                                                <div class="products-block-right">
                                                    <p class="product-name"> <a href="single_product.html">Lorem ipsum dolor sit amet elit</a> </p>
                                                    <span class="price">$19.99</span>
                                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                </div>
                                            </div>
                                            <div class="best-sale-item">
                                                <div class="products-block-left">
                                                    <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('bower_components/Asset-FW-Client/images/products/img14.jpg') }}" alt="Sample Product "></a>
                                                </div>
                                                <div class="products-block-right">
                                                    <p class="product-name"> <a href="single_product.html">Consectetur utes anet adipisicing elit</a> </p>
                                                    <span class="price">$89.99</span>
                                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                </div>
                                            </div>
                                            <div class="best-sale-item">
                                                <div class="products-block-left">
                                                    <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('bower_components/Asset-FW-Client/images/products/img13.jpg') }}" alt="Sample Product "></a>
                                                </div>
                                                <div class="products-block-right">
                                                    <p class="product-name"> <a href="single_product.html">Consectetur utes anet adipisicing elit</a> </p>
                                                    <span class="price">$89.99</span>
                                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                </div>
                                            </div>
                                            <div class="best-sale-item">
                                                <div class="products-block-left">
                                                    <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('bower_components/Asset-FW-Client/images/products/img12.jpg') }}" alt="Sample Product "></a>
                                                </div>
                                                <div class="products-block-right">
                                                    <p class="product-name"> <a href="single_product.html">Consectetur utes anet adipisicing elit</a> </p>
                                                    <span class="price">$89.99</span>
                                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item">
                                            <div class="best-sale-item">
                                                <div class="products-block-left">
                                                    <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('bower_components/Asset-FW-Client/images/products/img10.jpg') }}" alt="Sample Product "></a>
                                                </div>
                                                <div class="products-block-right">
                                                    <p class="product-name"> <a href="single_product.html">Lorem ipsum dolor sit amet elit</a> </p>
                                                    <span class="price">$19.99</span>
                                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                </div>
                                            </div>
                                            <div class="best-sale-item">
                                                <div class="products-block-left">
                                                    <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('bower_components/Asset-FW-Client/images/products/img09.jpg') }}" alt="Sample Product "></a>
                                                </div>
                                                <div class="products-block-right">
                                                    <p class="product-name"> <a href="single_product.html">Consectetur utes anet adipisicing elit</a> </p>
                                                    <span class="price">$89.99</span>
                                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                </div>
                                            </div>
                                            <div class="best-sale-item">
                                                <div class="products-block-left">
                                                    <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('bower_components/Asset-FW-Client/images/products/img08.jpg') }}" alt="Sample Product "></a>
                                                </div>
                                                <div class="products-block-right">
                                                    <p class="product-name"> <a href="single_product.html">Consectetur utes anet adipisicing elit</a> </p>
                                                    <span class="price">$89.99</span>
                                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                </div>
                                            </div>
                                            <div class="best-sale-item">
                                                <div class="products-block-left">
                                                    <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('bower_components/Asset-FW-Client/images/products/img07.jpg') }}" alt="Sample Product "></a>
                                                </div>
                                                <div class="products-block-right">
                                                    <p class="product-name"> <a href="single_product.html">Consectetur utes anet adipisicing elit</a> </p>
                                                    <span class="price">$89.99</span>
                                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Hot deal -->
                    <div class="hot-products">
                        <div class="hot-deal"> <span class="title-text">Hot deal</span>
                            <ul class="products-grid">
                                <li class="item">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="icon-hot-label hot-right">Hot</div>
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}" alt=""></a>
                                                <div class="jtv-box-timer">
                                                    <div class="countbox_1 jtv-timer-grid"></div>
                                                </div>
                                            </div>
                                            <div class="pro-box-info">
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box-hover">
                                                    <div class="product-item-actions">
                                                        <div class="pro-actions">
                                                            <button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                                                        </div>
                                                        <div class="add-to-links" data-role="add-to-links">
                                                            <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a>
                                                            <a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a>
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
                    <!--Hot deal -->
                    <div class="banner4">
                        <a href="#"><img alt="banner" src="{{ asset('bower_components/Asset-FW-Client/images/top-banner1.jpg') }}"></a>
                    </div>
                    <div class="block special-product">
                        <div class="sidebar-bar-title">
                            <h3>Special Products</h3>
                        </div>
                        <div class="block-content">
                            <ul>
                                <li class="item">
                                    <div class="products-block-left">
                                        <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}" alt="Sample Product "></a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name"> <a href="single_product.html">Lorem ipsum dolor sit amet elit</a> </p>
                                        <span class="price">$19.99</span>
                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="products-block-left">
                                        <a href="single_product.html" title="Sample Product" class="product-image"><img src="{{ asset('bower_components/Asset-FW-Client/images/products/img02.jpg') }}" alt="Sample Product "></a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name"> <a href="single_product.html">Consectetur utes anet adipisicing elit</a> </p>
                                        <span class="price">$89.99</span>
                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Testimonials Box -->
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
                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
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
                                        <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
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
