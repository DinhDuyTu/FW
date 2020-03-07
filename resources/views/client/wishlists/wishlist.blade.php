@extends('client.layouts.main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
                        <li><strong>Wishlist</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <div class="col-main col-sm-12 col-xs-12">
                    <div class="my-account">
                        <div class="page-title">
                            <h2>My Wishlist</h2>
                        </div>
                        <div class="wishlist-item table-responsive">
                            <table class="col-md-12">
                                <thead>
                                    <tr>
                                        <th class="th-delate">STT</th>
                                        <th class="th-product">Images</th>
                                        <th class="th-details">Product Name</th>
                                        <th class="th-price">Unit Price</th>
                                        <th class="th-price">Price Sale</th>
                                        <th class="th-total th-add-to-cart">Add to Cart </th>
                                        <th class="th-delate">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wishlists as $key => $wishlist)
                                        @foreach ($products as $product)
                                            @if ($wishlist->product_id == $product->id)
                                                <tr class="tr-main-wishlist">
                                                    <td class="th-delate">{{ $key + 1 }}</td>
                                                    <td class="th-product">
                                                        @foreach ($images as $image)
                                                            @if ($image->product_id == $product->id)
                                                                <a href="{{ route('single_product', $product->id) }}"><img src="{{ $image->image }}" alt="cart"></a>
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td class="th-details">
                                                        <h2><a href="{{ route('single_product', $product->id) }}">{{ $product->name }}</a></h2></td>
                                                    <td class="th-price">{{ number_format($product->price) }} VND</td>
                                                    <td class="th-price">{{ number_format($product->price_sale) }} VND</td>
                                                    <th class="td-add-to-cart"><a href="#"> Add to Cart</a></th>
                                                    <td class="th-delate">
                                                        <button type="button" class="btn btn-danger btn-sm del_wishlist" data-product_id="{{ $product->id }}" data-user_id="{{ Auth::user()->id }}">X</button>
                                                    </td>
                                                </tr>   
                                            @endif
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="checkout.html" class="all-cart">Add all to cart</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
