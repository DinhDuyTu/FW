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
                        <div class="btn-group pull-right">
                            <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="#">Print</a></li>
                                <li><a href="#">Save as PDF</a></li>
                                <li><a href="#">Export to Excel</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="space15"></div>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample" style="font-size: 15px;">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Total Price</th>
                                <th>Note</th>
                                <th style="width: 150px;">Status</th>
                                <th  style="text-align: center"><i class="fa fa-trash-o" style="font-size: 18px;"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $key => $order)
                                <tr @if ($order->status == 0) style="background: #FFCC00;" @elseif ($order->status == 1) style="background: #00FFFF;" @else style="background: #90EE90;" @endif>
                                    <td><a href="{{ route('admin.orders.show', $order->id) }}">{{ $key + 1 }}</a></td>
                                    <td><a href="{{ route('admin.orders.show', $order->id) }}">{{ $order->name }}</a></td>
                                    <td><a href="{{ route('admin.orders.show', $order->id) }}">{{ $order->phone }}</a></td>
                                    <td class="center"><a href="{{ route('admin.orders.show', $order->id) }}">{{ $order->address }}</a></td>
                                    <td class="center"><a href="{{ route('admin.orders.show', $order->id) }}">{{ $order->email }}</a></td>
                                    <td class="center"><a href="{{ route('admin.orders.show', $order->id) }}">{{ number_format($order->total_price) }} VND</a></td>
                                    <td class="center"><a href="{{ route('admin.orders.show', $order->id) }}">{{ $order->note }}</a></td>
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
                                    <td style="text-align: center"><i class="fa fa-trash-o" style="font-size: 18px;"></i></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
</section>
@endsection
