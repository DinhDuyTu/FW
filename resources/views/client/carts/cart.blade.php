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
                                                        <input class="input-quantity" class="form-control input-sm" type="text" value="{{ $cart['product_num'] }}" data-id="{{ $cart['product_id'] }}">
                                                    </td>
                                                    <td class="summed-price"><span>{{ number_format($cart['num_price']) }} VND</span></td>
                                                    <td class="action"><a><i class="icon-close deleteCart" data-id="{{ $cart['product_id'] }}"></i></a></td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6">Giỏ Hàng Trống!!!</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr class="first last">
                                            <td colspan="50" class="a-right last">
                                                <button type="button" title="Continue Shopping" class="button btn-continue" onclick="setLocation('#')"><span>Continue Shopping</span></button>
                                                <button type="submit" name="update_cart_action" value="update_qty" title="Update Cart" class="button btn-update"><span>Update Cart</span></button>
                                                <button type="submit" name="update_cart_action" value="empty_cart" title="Clear Cart" class="button btn-empty" id="empty_cart_button"><span>Clear Cart</span></button>
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
                                        <li>
                                            <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout"><span>Proceed to Checkout</span></button>
                                        </li>
                                        <br>
                                        <li><a href="multiple_addresses.html" title="Checkout with Multiple Addresses">Checkout with Multiple Addresses</a> </li>
                                        <br>
                                    </ul>
                                </div>
                                <!--inner-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
