@extends('client.layouts.main')
@section('content')
    <div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul>
                    <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
                    <li class=""> <a title="Go to Home Page" href="shop_grid.html">Watches</a><span>&raquo;</span></li>
                    <li><strong>Lorem Ipsum is simply</strong></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <div class="main-container col1-layout">
    <div class="container">
        <div class="row">
            <div class="col-main">
                <div class="product-view-area">
                    <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="large-image">
                            @foreach ($image_default as $img)
                            <a href="{{ $img->image }}" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="{{ $img->image }}" alt="products"> </a>
                            @endforeach
                        </div>
                        <div class="flexslider flexslider-thumb">
                            <ul class="previews-list slides">
                                @foreach ($image_product as $image)
                                    <li>
                                        <a href='{{ $image->image }}' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{ $image->image }}' "><img src="{{ $image->image }}" alt="Thumbnail 2" /></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
                        <div class="product-name">
                            <h1>{{ $product->name }} {{ $product->id }}</h1>
                        </div>
                        @if ($product->price_sale >= 0)
                            <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($product->price_sale) }} VND</span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">{{ number_format($product->price) }} VND</span> </p>
                            </div>
                        @else 
                            <div class="price-box">
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">{{ number_format($product->price) }}</span> </p>
                            </div>
                        @endif
                        <div class="ratings">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                            @if ($product->quantity > 0)
                                <p class="availability in-stock pull-right">Availability: <span>In Stock</span></p>
                            @else 
                                <p class="availability in-stock pull-right">Unavailability: <span style="background-color: red">In Stock</span></p>
                            @endif
                        </div>
                        <div class="short-description">
                            <h2>Quick Overview</h2>
                            {!! $product->detail !!}
                        </div>
                        <div class="product-color-size-area">
                            <div class="color-area">
                                <h2 class="saider-bar-title">Color</h2>
                                <div class="color">
                                    <ul>
                                        @foreach ($color_prd as $color)
                                            <li class="color_main">
                                                <a class="color_prd {{ $color->color }}"></a>
                                                <input style="display: none" type="checkbox" class="check_color" data-color="{{ $color->name }}">
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="size-area">
                                <h2 class="saider-bar-title">Size</h2>
                                <div class="size">
                                    <ul>
                                        @foreach ($size_prd as $size)
                                            <li class="size_main">
                                                <a class="size_prd">{{ $size->size }}</a>
                                                <input style="display: none" type="checkbox" name="size" class="rad_size" data-size="{{ $size->size }}">
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-variation">
                            <div class="cart-plus-minus">
                                <label for="qty">Quantity:</label>
                                <div class="numbers-row">
                                    <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                                    <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="quantity">
                                    <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                                </div>
                            </div>
                            <button type="button" class="button pro-add-to-cart addToCart" title="Add to Cart" type="button" data-id="{{ $product->id }}"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                        </div>
                        <div class="product-cart-option">
                            <ul>
                                @if (Auth::check())
                                    <li><a class="addToWishlist" @if ($wishlist == 1) style="color: #F02640" @endif data-user_id="{{ Auth::user()->id }}" data-product_id="{{ $product->id }}"><i class="fa fa-heart wishlist" @if ($wishlist == 1) style="color: #F02640" @endif></i><span>Add to Wishlist</span></a></li>
                                @else
                                    <li><a data-toggle="modal" data-target="#login-modal"><i class="fa fa-heart" ></i><span>Add to Wishlist</span></a></li>
                                @endif
                                <li><a><i class="fa fa-retweet"></i><span>Add to Compare</span></a></li>
                                <li><a><i class="fa fa-envelope"></i><span>Email to a Friend</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-overview-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="product-tab-inner">
                                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                    <li class="active"> <a href="#description" data-toggle="tab"> Description </a> </li>
                                    <li> <a href="#reviews" data-toggle="tab">Comments</a> </li>
                                    <li><a href="#product_tags" data-toggle="tab">Tags</a></li>
                                    <li> <a href="#custom_tabs" data-toggle="tab">Custom Tab</a> </li>
                                </ul>
                                <div id="productTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="description">
                                        <div class="std">
                                            <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt.</p>
                                            <p> Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis.</p>
                                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                                        </div>
                                    </div>
                                    <div id="reviews" class="tab-pane fade">
                                        <div class="col-sm-12 col-lg-12 col-md-12">
                                            <div class="reviews-content-right">
                                                <form method="post" action="{{ route('comments.store') }}">
                                                    @csrf
                                                    <div class="form-area">
                                                        <div class="form-element">
                                                            <label>Comment</label>
                                                            <textarea style="width: 90%; color: black" name="content" id="" cols="30" rows="10"></textarea>
                                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        </div>
                                                        <div class="buttons-set"  style="width: 90%">
                                                            @if (Auth::check())
                                                                <button class="button submit" title="Submit Review" type="submit"><span><i class="fa fa-comments" aria-hidden="true"></i> Comment</span></button>
                                                            @else
                                                            <button class="button submit" title="Submit Review" type="button" data-toggle="modal" data-target="#login-modal"><span><i class="fa fa-comments" aria-hidden="true"></i> Comment</span></button>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </form>
                                                @include('client.products.commentsDisplay', ['comments' => $product->comments, 'product_id' => $product->id])
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="product_tags">
                                        <div class="box-collateral box-tags">
                                            <div class="tags">
                                                <form id="addTagForm" action="#" method="get">
                                                    <div class="form-add-tags">
                                                        <div class="input-box">
                                                            <label for="productTagName">Add Your Tags:</label>
                                                            <input class="input-text" name="productTagName" id="productTagName" type="text">
                                                            <button type="button" title="Add Tags" class="button add-tags"><i class="fa fa-plus"></i> &nbsp;<span>Add Tags</span> </button>
                                                        </div>
                                                        <!--input-box-->
                                                    </div>
                                                </form>
                                            </div>
                                            <!--tags-->
                                            <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom_tabs">
                                        <div class="product-tabs-content-inner clearfix">
                                            <p><strong>Lorem Ipsum</strong><span>&nbsp;is
                            simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when 
                            an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the 
                            leap into electronic typesetting, remaining essentially unchanged. It 
                            was popularised in the 1960s with the release of Letraset sheets 
                            containing Lorem Ipsum passages, and more recently with desktop 
                            publishing software like Aldus PageMaker including versions of Lorem 
                            Ipsum.</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="related-product-area">
                <div class="page-header">
                    <h2>Related Products</h2>
                </div>
                <div class="related-products-pro">
                    <div class="slider-items-products">
                        <div id="related-product-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col4">
                                <div class="product-item">
                                    <div class="item-inner">
                                        <div class="product-thumbnail">
                                            <div class="icon-sale-label sale-left">Sale</div>
                                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('bower_components/Asset-FW-Client/images/products/img01.jpg') }}" alt=""></a>
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
                                <div class="product-item">
                                    <div class="item-inner">
                                        <div class="product-thumbnail">
                                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('bower_components/Asset-FW-Client/images/products/img02.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="pro-box-info">
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$175.88</span> </span>
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
                                <div class="product-item">
                                    <div class="item-inner">
                                        <div class="product-thumbnail">
                                            <div class="icon-new-label new-left">new</div>
                                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('bower_components/Asset-FW-Client/images/products/img03.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="pro-box-info">
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $299.00 </span> </p>
                                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $399.00 </span> </p>
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
                                <div class="product-item">
                                    <div class="item-inner">
                                        <div class="product-thumbnail">
                                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('bower_components/Asset-FW-Client/images/products/img04.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="pro-box-info">
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.99</span> </span>
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
                                <div class="product-item">
                                    <div class="item-inner">
                                        <div class="product-thumbnail">
                                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                            <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('bower_components/Asset-FW-Client/images/products/img05.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="pro-box-info">
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $188.80 </span> </p>
                                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $299.00 </span> </p>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <section class="upsell-product-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header">
                    <h2>UpSell Products</h2>
                </div>
                <div class="slider-items-products">
                    <div id="upsell-product-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4">
                            <div class="product-item">
                                <div class="item-inner">
                                    <div class="product-thumbnail">
                                        <div class="icon-sale-label sale-left">Sale</div>
                                        <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('bower_components/Asset-FW-Client/images/products/img06.jpg') }}" alt=""></a>
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
                            <div class="product-item">
                                <div class="item-inner">
                                    <div class="product-thumbnail">
                                        <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('bower_components/Asset-FW-Client/images/products/img07.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="pro-box-info">
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                                <div class="item-content">
                                                    <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                    <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price"> <span class="price">$175.88</span> </span>
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
                            <div class="product-item">
                                <div class="item-inner">
                                    <div class="product-thumbnail">
                                        <div class="icon-new-label new-left">new</div>
                                        <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('bower_components/Asset-FW-Client/images/products/img08.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="pro-box-info">
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                                <div class="item-content">
                                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $299.00 </span> </p>
                                                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $399.00 </span> </p>
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
                            <div class="product-item">
                                <div class="item-inner">
                                    <div class="product-thumbnail">
                                        <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('bower_components/Asset-FW-Client/images/products/img09.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="pro-box-info">
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                                <div class="item-content">
                                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                    <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price"> <span class="price">$125.99</span> </span>
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
                            <div class="product-item">
                                <div class="item-inner">
                                    <div class="product-thumbnail">
                                        <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="{{ asset('bower_components/Asset-FW-Client/images/products/img10.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="pro-box-info">
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                                <div class="item-content">
                                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $188.80 </span> </p>
                                                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $299.00 </span> </p>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
