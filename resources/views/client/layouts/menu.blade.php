<div class="menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 hidden-xs">
                <div class="main-menu">
                    <nav>
                        <ul>
                            <li class="{{ url()->current() == route('home') ? 'active' : '' }} custom-menu"><a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="{{ url()->current() == route('list_product') ? 'active' : '' }} megamenu"><a href="{{ route('list_product') }}">Products</a></li>
                            <li class="megamenu"><a href="{{ route('getProductByCategoryID', 1) }}">Men</a></li>
                            <li class="megamenu"><a href="{{ route('getProductByCategoryID', 2) }}">Wonmen</a></li>
                            <li class="megamenu"><a href="{{ route('getProductByCategoryID', 3) }}">Kids</a></li>
                            <li class="custom-menu"><a href="">Blog</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- Signup -->
                    @if (Auth::check())
                    @else
                        <p class="top-Signup"><a href="#" class="" role="button" data-toggle="modal" data-target="#login-modal"> Login</a></p> 
                        <p class="top-Signup"><a href="#" class="" role="button" data-toggle="modal" data-target="#register-modal">Register</a></p>
                    @endif
                    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header"> <img id="img_logo" src="{{ asset('bower_components/Asset-FW-Client/images/logo.png') }}" alt="logo">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> </button>
                                </div>
                                <div id="div-forms">
                                    <div class="main-login">
                                        <form class="form-signin" action="{{ route('login') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div id="div-login-msg"> <span id="text-login-msg">Username or email address </span> </div>
                                                <input id="login_username" type="email" name="email" class="form-control" placeholder="User ID" autofocus >
                                                <input id="login_password" type="password" name="password" class="form-control" placeholder="Password">
                                                <div class="checkbox">
                                                    <label><input type="checkbox"> Remember me </label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div>
                                                    <button type="submit" class="btn-login">Login</button>
                                                    <div class="row" style="margin-top: 10px;">
                                                        <div class="col-md-6">
                                                            <button style="background: #4266B1" type="button" class="btn-login"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</button>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button style="background: #D93025" type="button" class="btn-login"><i class="fa fa-google" aria-hidden="true"></i> Google</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="text-align: center"> <img id="img_logo" src="{{ asset('bower_components/Asset-FW-Client/images/logo.png') }}" alt="logo">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> </button>
                                </div>
                                <div id="div-forms">
                                    <div class="main-register">
                                        <div class="modal-body">
                                            <div id="div-login-msg"> <span id="text-login-msg">Register Account My Store</span> </div>
                                            <input id="login_name" style="margin-bottom: 10px;" type="text" name="name" class="form-control" placeholder="User Name" autofocus >
                                            <div class="alert-name"></div>
                                            <input id="login_username" type="email" name="email" class="form-control" placeholder="Email" >
                                            <div class="alert-email"></div>
                                            <input id="login_password" type="password" name="password" class="form-control" placeholder="Password">
                                            <div class="alert-password"></div>
                                            <input id="login_confirm_password" type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                                            <div class="alert-confirm-password"></div>
                                            <!-- <p style="color: red; margin-left: 10px "><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Password does not match!</p> -->
                                            <!-- <p style="color: #7CC576; margin-left: 10px "><i class="fa fa-check" aria-hidden="true"></i> Success!</p> -->
                                        </div>
                                        <div class="modal-footer">
                                            <div>
                                                <button type="button" class="btn-login btn-submit-register">Register</button>
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