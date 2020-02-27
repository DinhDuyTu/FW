@extends('client.layouts.main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
                        <li class=""> <a title="Go to Home Page" href="shop_grid.html">Computers</a><span>&raquo;</span></li>
                        <li><strong> Camera & Photo</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container col1-layout">
        <div class="container">
            <div class="row">
                <div class="col-main col-sm-12 col-xs-12">
                    <div class="shop-inner">
                        <div class="page-title">
                            <h2> Camera & Photo</h2>
                        </div>
                        <div class="toolbar column">
                            <div class="sorter">
                                <div class="short-by">
                                    <label>Sort By:</label>
                                    <select>
                                        <option selected="selected">Position</option>
                                        <option>Name</option>
                                        <option>Price</option>
                                        <option>Size</option>
                                    </select>
                                </div>
                                <div class="short-by page">
                                    <label>Show:</label>
                                    <select>
                                        <option selected="selected">16</option>
                                        <option>20</option>
                                        <option>25</option>
                                        <option>30</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="product-grid-area">
                            <ul class="products-grid">
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img11.jpg" alt=""></a>
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
                                </li>
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="icon-sale-label sale-left">Sale</div>
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img09.jpg" alt=""></a>
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
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="icon-sale-label sale-right">Sale</div>
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img08.jpg" alt=""></a>
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
                                </li>
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="icon-new-label new-right">new</div>
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img07.jpg" alt=""></a>
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
                                </li>
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img06.jpg" alt=""></a>
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
                                </li>
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img05.jpg" alt=""></a>
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
                                </li>
                                <!-- .a2 -->

                                <!-- b2 -->
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img01.jpg" alt=""></a>
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
                                </li>
                                <!-- .b2 -->

                                <!-- c2 -->
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img10.jpg" alt=""></a>
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
                                </li>
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img11.jpg" alt=""></a>
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
                                </li>
                                <!-- .a1 -->

                                <!-- b1 -->
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img12.jpg" alt=""></a>
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
                                </li>
                                <!-- .b1 -->

                                <!-- c1 -->
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img13.jpg" alt=""></a>
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
                                </li>
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img14.jpg" alt=""></a>
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
                                </li>
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img15.jpg" alt=""></a>
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
                                </li>
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img16.jpg" alt=""></a>
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
                                </li>
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img17.jpg" alt=""></a>
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
                                </li>
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img18.jpg" alt=""></a>
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
                                </li>
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img19.jpg" alt=""></a>
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
                                </li>
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div>
                                                <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img20.jpg" alt=""></a>
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
                                </li>
                            </ul>
                        </div>
                        <div class="pagination-area ">
                            <ul>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
