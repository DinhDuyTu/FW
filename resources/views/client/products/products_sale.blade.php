<div class="related-products-pro">
    <h3 class="products_title">Best selling</h3>
    <div class="slider-items-products">
        <div id="related-product-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4">
                @foreach ($products_sale as $prd_sale)
                    <div class="product-item">
                        <div class="item-inner">
                            <div class="product-thumbnail">
                                <div class="icon-sale-label sale-left">Sale</div>
                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                @foreach ($images_defult as $image)
                                    @if ($image->product_id == $prd_sale->id)
                                        <a href="{{ route('single_product', $prd_sale->id) }}" class="product-item-photo"> <img class="product-image-photo" src="{{ $image->image }}" alt=""></a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="pro-box-info">
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"> <a title="{{ $prd_sale->name }}" href="single_product.html">{{ $prd_sale->name }} </a> </div>
                                        <div class="item-content">
                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="item-price">
                                                <div class="old-price"> <span class="regular-price"> <span class="price">{{ number_format($prd_sale->price) }} VND</span> </span></div>
                                                <div class="price-box"> <span class="regular-price"> <span class="price">{{ number_format($prd_sale->price_sale) }} VND</span> </span></div>
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