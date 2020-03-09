<header>
    <div class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-5 col-xs-6">
                        <span class="phone hidden-xs hidden-sm"><i class="fa fa-phone fa-lg"></i> +123.456.789</span>
                        <div class="welcome-msg hidden-xs">Welcome to MyStore! </div>
                        <div class="language-currency-wrapper">
                            <div class="inner-cl">
                                <div class="block block-language form-language">
                                    <div class="lg-cur"> <span> <img src="{{ asset('bower_components/Asset-FW-Client/images/flag-default.jpg') }}" alt="French"> <span class="lg-fr">French</span> <i class="fa fa-angle-down"></i> </span>
                                    </div>
                                    <ul>
                                        <li>
                                            <a class="selected" href="#"> <img src="{{ asset('bower_components/Asset-FW-Client/images/flag-english.jpg') }}" alt="flag"> <span>English</span> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="{{ asset('bower_components/Asset-FW-Client/images/flag-default.jpg') }}" alt="flag"> <span>French</span> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="{{ asset('bower_components/Asset-FW-Client/images/flag-german.jpg') }}" alt="flag"> <span>German</span> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="{{ asset('bower_components/Asset-FW-Client/images/flag-brazil.jpg') }}" alt="flag"> <span>Brazil</span> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="{{ asset('bower_components/Asset-FW-Client/images/flag-chile.jpg') }}" alt="flag"> <span>Chile</span> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="{{ asset('bower_components/Asset-FW-Client/images/flag-spain.jpg') }}" alt="flag"> <span>Spain</span> </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="block block-currency">
                                    <div class="item-cur"> <span>USD </span> <i class="fa fa-angle-down"></i></div>
                                    <ul>
                                        <li> <a href="#"><span class="cur_icon">€</span> EUR</a> </li>
                                        <li> <a href="#"><span class="cur_icon">¥</span> JPY</a> </li>
                                        <li> <a class="selected" href="#"><span class="cur_icon">$</span> USD</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- top links -->
                    <div class="headerlinkmenu col-lg-6 col-md-6 col-sm-7 col-xs-6 text-right">
                        <div class="links">
                            <div class="jtv-user-info">
                                <div class="dropdown"> <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account </span> <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="account_page.html">Account</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li class="divider"></li>
                                        <li><a href="account_page.html">Log In</a></li>
                                        <li><a href="account_page.html">Sign Up</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="services hidden-xs"><a title="servicesg" href="#">Services</a></div>
                            <div class="myaccount hidden-xs"><a title="My Account" href="#">My Support</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-xs-12">
                    <!-- Header Logo -->
                    <div class="logo">
                        <a title="e-commerce" href="index.html"><img alt="e-commerce" src="{{ asset('bower_components/Asset-FW-Client/images/logo.png') }}"></a>
                    </div>
                    <!-- End Header Logo -->
                </div>
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6">
                    <!-- Search -->

                    <div class="top-search">
                        <div id="search">
                            <form>
                                <div class="input-group">
                                    <select class="cate-dropdown hidden-xs hidden-sm" name="category_id">
                                        <option>All Categories</option>
                                        <option>women</option>
                                        <option>&nbsp;&nbsp;&nbsp;Accessories </option>
                                        <option>&nbsp;&nbsp;&nbsp;Dresses</option>
                                        <option>&nbsp;&nbsp;&nbsp;Top</option>
                                        <option>&nbsp;&nbsp;&nbsp;Handbags </option>
                                        <option>&nbsp;&nbsp;&nbsp;Shoes </option>
                                        <option>&nbsp;&nbsp;&nbsp;Clothing </option>
                                        <option>Men</option>
                                        <option>Electronics</option>
                                        <option>&nbsp;&nbsp;&nbsp;Mobiles </option>
                                        <option>&nbsp;&nbsp;&nbsp;Music &amp; Audio </option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="Search" name="search">
                                    <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- End Search -->
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-12 top-cart">
                    <div class="link-wishlist">
                        <a href="{{ route('wishlist.index') }}"> <span class="wishlist-count"></span> <i class="fa fa-heart fa-lg"></i> </a>
                    </div>
                    <div class="top-cart-contain">
                        <div class="mini-cart">
                            <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle">
                                <a href="#">
                                    <div class="cart-icon"><i class="fa fa-shopping-cart"></i></div>
                                    <div class="shoppingcart-inner">
                                        <span class="cart-title">Shopping Cart</span>
                                        <span class="cart-total">
                                            <b id="qty-product">0</b> Item(s): <i>0</i> VND
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <div class="top-cart-content">
                                    <div class="block-subtitle hidden-xs">Recently added item(s)</div>
                                    <ul id="cart-sidebar" class="mini-products-list">
                                        {{-- <li class="item odd">
                                            <a href="#" title="Ipsums Dolors Untra" class="product-image"><img src="{{ asset('bower_components/Asset-FW-Client/images/products/img07.jpg') }}" alt="Lorem ipsum dolor" width="65"></a>
                                            <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                                                <p class="product-name"><a href="#">Lorem ipsum dolor sit amet Consectetur</a> </p>
                                                <strong>1</strong> x <span class="price">$20.00</span> </div>
                                        </li> --}}
                                    </ul>
                                    <div class="top-subtotal">Subtotal: <span class="price" id="total_price">0 VND</span></div>
                                    <div class="actions">
                                        <button onclick="location.href='{{ route('cart.checkout') }}'" class="btn-checkout" type="button"><i class="fa fa-check"></i><span>Checkout</span></button>
                                        <button onclick="location.href='{{ route('cart.index') }}'" class="view-cart" type="button"><i class="fa fa-shopping-cart"></i> <span>View Cart</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>