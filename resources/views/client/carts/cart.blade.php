@extends('client.layouts.main')
@section('content')
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="cart">

                    <div class="page-content page-order">
                        <div class="page-title">
                            <h2>Shopping Cart</h2>
                        </div>

                        <div class="order-detail-content">
                            <div class="table-responsive">
                                <table class="table table-bordered cart_summary">
                                    <thead>
                                        <tr>
                                            <th class="cart_product">Product</th>
                                            <th>Description</th>
                                            <th>Unit price</th>
                                            <th>Qty</th>
                                            <th>Total</th>
                                            <th class="action"><i class="fa fa-trash-o"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($carts != false)
                                            @foreach ($carts as $cart)
                                                <tr class="product-cart">
                                                    <td class="cart_product">
                                                        <a href="#"><img src="{{ $cart['product_image'] }}" alt="Product"></a>
                                                    </td>
                                                    <td class="cart_description">
                                                        <p class="product-name"><a href="#">Name: {{ $cart['product_name'] }}</a></p>
                                                        <p class="product-name"><a href="#">Color: {{ $cart['color'] }}</a></p>
                                                        <p class="product-name"><a href="#">Size: {{ $cart['size'] }}</a></p>
                                                    <td class="price"><span>{{ number_format($cart['product_price']) }} VND</span></td>
                                                    <td class="qty">
                                                        <input class="input-quantity" class="form-control input-sm" type="text" value="{{ $cart['product_num'] }}" data-id="{{ $cart['product_id'] }}" data-color="{{ $cart['color'] }}" data-size="{{ $cart['size'] }}">
                                                    </td>
                                                    <td class="summed-price"><span>{{ number_format($cart['num_price']) }} VND</span></td>
                                                    <td class="action"><a><i class="icon-close deleteCart" data-id="{{ $cart['product_id'] }}" data-color="{{ $cart['color'] }}" data-size="{{ $cart['size'] }}"></i></a></td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6">Cart Empty!!!</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr class="first last">
                                            <td colspan="50" class="a-right last">
                                                <button type="button" title="Continue Shopping" class="button btn-continue" onclick="setLocation('#')"><span>Continue Shopping</span></button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>

                        <div class="cart-collaterals row">
                            <div class="col-sm-4">
                            </div>
                            <div class="col-sm-4">
                            </div>
                            <div class="totals col-sm-4">
                                <h3>Shopping Cart Total</h3>
                                <div class="inner">
                                    <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                                        <colgroup>
                                            <col>
                                                <col width="1">
                                        </colgroup>
                                        <tfoot>
                                            <tr>
                                                <td style="" class="a-left" colspan="1"><strong>Grand Total</strong></td>
                                                <td style="" class="a-right"><strong><span class="total_price">{{ number_format($total_price) }} VND</span></strong></td>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td style="" class="a-left" colspan="1"> Subtotal </td>
                                                <td style="" class="a-right"><span class="total_price">{{ number_format($total_price) }} VND</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <ul class="checkout">
                                        @if ($carts != false)
                                            <li>
                                                @if (Auth::check())
                                                    <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout" data-toggle="modal" data-target="#checkout-modal"><span>Proceed to Checkout</span></button>
                                                @else
                                                    <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout" data-toggle="modal" data-target="#login-modal"><span>Proceed to Checkout</span></button>
                                                @endif
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="modal fade" id="checkout-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header"> <img id="img_logo" src="{{ asset('bower_components/Asset-FW-Client/images/logo.png') }}" alt="logo">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> </button>
                                            </div>
                                            @if (Auth::check())
                                                <div id="div-forms">
                                                    <form class="form-signin" action="{{ route('cart.checkout') }}" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="profile_guest">
                                                                <p>Name : {{ Auth::user()->name }}</p>
                                                                <input name="name" type="hidden" value="{{ Auth::user()->name }}">
                                                                <p>Email : {{ Auth::user()->email }}</p>
                                                                <input name="email" type="hidden" value="{{ Auth::user()->email }}">
                                                                <p>Address : {{ Auth::user()->address }}</p>
                                                                <input name="address" type="hidden" value="{{ Auth::user()->address }}">
                                                                <p>Phone : {{ Auth::user()->phone }}</p>
                                                                <input name="phone" type="hidden" value="{{ Auth::user()->phone }}">
                                                                <label>Note</label>
                                                                <textarea style="width: 100%; height: 100px;" name="note" id="" cols="30" rows="30"></textarea>
                                                                <button type="button" class="btn-login use_other_information">Use other information</button>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div>
                                                                <button type="submit" class="btn-login">Checkout</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            @endif
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
