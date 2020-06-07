@extends('client.layouts.main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
                        <li class=""> <a title="Go to Home Page" href="shop_grid.html">Women </a><span>&raquo;</span></li>
                        <li><strong>Clothing</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container col2-left-layout">
        <div class="container">
            <div class="category-description">
                <a href="#"><img src="{{ asset('bower_components/Asset-FW-Client/images/cat-img1.jpg') }}" alt="banner"></a>
            </div>
            <div class="row">
                <div class="col-main col-sm-9 col-xs-12 col-sm-push-3">
                    <div class="shop-inner">
                        <div class="product-grid-area">
                            <ul class="products-grid">
                                @foreach ($products as $product)
                                    @foreach ($image_default as $img)
                                        @if ($product->id == $img->product_id)
                                            <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="product-item">
                                                    <div class="item-inner">
                                                        <div class="product-thumbnail">
                                                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                            <a href="single_product.html" class="product-item-photo"> <img style="width: 196.500px; height: 294.203px;" class="product-image-photo" src="{{ $img->image }}" alt=""></a>
                                                        </div>
                                                        <div class="pro-box-info">
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">{{ $product->name }}</a> </div>
                                                                    <div class="item-content">
                                                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{ number_format($product->price_sale) }} VND</span> </p>
                                                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">{{ number_format($product->price) }} VND</span> </p>
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
                                        @endif
                                    @endforeach
                                @endforeach
                            </ul>
                        </div>
                        <div class="pagination-area ">
                            <ul>
                                <li><a style="width: 80px" class="active see-more">See more ...</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                    <div class="block shop-by-side">
                        <div class="sidebar-bar-title">
                            <h3>Shop By</h3>
                        </div>
                        <div class="block-content">
                            <p class="block-subtitle">Shopping Options</p>
                            <div class="layered-Category">
                                <h2 class="saider-bar-title">Categories</h2>
                                <div class="layered-content">
                                    <ul class="check-box-list">
                                        @foreach ($categories as $category)
                                            <li>
                                                <input type="radio" id="{{ $category->id }}" name="jtvc">
                                                <label class="filter-category" for="{{ $category->id }}"> <span class="button"></span> {{ $category->name }}<span class="count">({{ count($category->products) }})</span> </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="manufacturer-area">
                                <h2 class="saider-bar-title">History Product View</h2>
                                <div class="saide-bar-menu">
                                    <ul>
                                        {{-- @foreach ($list_products_history as $history)
                                            <li><a href=""><i class="fa fa-angle-right"></i> {{ dd($history->products) }}</a></li>
                                        @endforeach --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection
