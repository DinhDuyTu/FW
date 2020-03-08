@extends('admin.layouts.main')
@section('content')
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                Editable Table
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <div class="btn-group">
                            <ul style="font-size: 18px">
                                <li>Name: {{ $order->name }}</li>
                                <li>Email: {{ $order->email }}</li>
                                <li>Phone: {{ $order->phone }}</li>
                                <li>Address: {{ $order->address }}</li>
                                <li>Note: {{ $order->note }}</li>
                            </ul>
                        </div>
                        <hr>
                    </div>
                    <div class="space15"></div>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th style="width: 110px;">Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th style="width: 50px;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order_details as $key => $order_detail)
                                @foreach ($products as $product)
                                    @if ($product->id == $order_detail->product_id)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                @foreach ($images as $image)
                                                    @if ($image->product_id == $product->id)
                                                        <img style="width: 100px" src="{{ $image->image }}" alt="">
                                                    @endif    
                                                @endforeach
                                            </td>
                                            <td>
                                                <ul>
                                                    <li><b>Name: {{ $product->name }}</b></li>
                                                    <li><b>Product Code: {{ $product->product_code }}</b></li>
                                                    <li><b>Size Order: {{ $order_detail->size }}</b></li>
                                                    <li><b>Color Order: {{ $order_detail->color }}</b></li>
                                                </ul>
                                            </td>
                                            <td class="center">{{ number_format($order_detail->price) }} VND</td>
                                            <td class="center">{{ $order_detail->quantity }}</td>
                                            <td class="center">{{ number_format($order_detail->price * $order_detail->quantity) }} VND</td>
                                            <td class="center">
                                                <select class="form-control" name="status" id="status" data-order_id="{{ $order->id }}">
                                                    @if ($order->status == 0)
                                                        <option id="0" value="0" selected>Waiting</option>
                                                        <option id="1" value="1">Shipping</option>
                                                        <option id="2" value="2">Processed</option>
                                                    @elseif ($order->status == 1)
                                                        <option value="0" disabled>Waiting</option>
                                                        <option value="1">Shipping</option>
                                                        <option value="2">Processed</option>
                                                    @else
                                                        <option value="0" disabled>Waiting</option>
                                                        <option value="1" disabled>Shipping</option>
                                                        <option value="2">Processed</option>
                                                    @endif
                                                </select>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                    <div style="text-align: right;">
                        <strong style="margin-right: 30px; color: red; font-size: 20px;">Total Price: {{ number_format($order->total_price) }} VND</strong>
                    </div>
                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
</section>
@endsection
