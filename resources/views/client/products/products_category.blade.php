<div id="productTabContent" class="tab-content">
    <div class="tab-pane active in" id="all">
        <div class="slider-items-products">
            <div id="all-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                    @foreach ($products as $prd)
                        <div class="product-item">
                            <div class="item-inner">
                                <div class="product-thumbnail">
                                    <div class="icon-sale-label sale-left">Sale</div>
                                <div class="btn-quickview" data-id="{{ $prd->id }}"> <a class="btn" data-toggle="modal" data-target="#quick-view-modal"><span>Quick View</span></a></div>
                                    @foreach ($images_defult as $image)
                                        @if ($image->product_id == $prd->id)
                                            <a href="{{ route('single_product', $prd->id) }}" class="product-item-photo"> <img class="product-image-photo" src="{{ $image->image }}" alt=""></a>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="pro-box-info">
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title="{{ $prd->name }}" href="single_product.html">{{ $prd->name }} </a> </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="item-price">
                                                    <div class="old-price"> <span class="regular-price"> <span class="price">{{ number_format($prd->price) }} VND</span> </span></div>
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">{{ number_format($prd->price_sale) }} VND</span> </span></div>
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @foreach ($categories as $category)
        <div class="tab-pane fade" id="{{ $category->name }}">
            <div class="slider-items-products">
                <div id="women-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4">
                        @foreach ($products as $product)
                            @if ($product->category_id == $category->id)
                                <div class="product-item">
                                    <div class="item-inner">
                                        <div class="product-thumbnail">
                                            <div class="icon-sale-label sale-left">Sale</div>
                                            <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                            @foreach ($images_defult as $image)
                                                @if ($image->product_id == $product->id)
                                                    <a href="{{ route('single_product', $product->id) }}" class="product-item-photo"> <img class="product-image-photo" src="{{ $image->image }}" alt=""></a>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="pro-box-info">
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Ipsums Dolors Untra" href="{{ route('single_product', $product->id) }}"> {{ $product->name }} {{ $product->id }}</a> </div>
                                                    <div class="item-content">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="item-price">
                                                            @if ($product->price_sale >= 0)
                                                                <div class="price-box">
                                                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> {{ number_format($product->price) }} VND</span> </p>
                                                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> {{ number_format($product->price_sale) }} VND</span> </p>
                                                                </div>
                                                            @else
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">{{ number_format($product->price) }} VND</span>
                                                                    </span>
                                                                </div>
                                                            @endif
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
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>