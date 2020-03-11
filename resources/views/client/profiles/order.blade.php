@extends('client.layouts.main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
                        <li><strong>Jewellery </strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container col2-left-layout">
        <div class="container">
            <div class="row">
                <div class="col-main col-sm-9 col-xs-12 col-sm-push-3">
                    <div class="my-order">
                        <div class="toolbar">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item active">
                                    <a style="padding: 10px 30px;" class="nav-link active" data-toggle="tab" href="#home">All Order</a>
                                </li>
                                <li class="nav-item">
                                    <a style="padding: 10px 30px;" class="nav-link" data-toggle="tab" href="#menu1">Shipping</a>
                                </li>
                                <li class="nav-item">
                                    <a style="padding: 10px 30px;" class="nav-link" data-toggle="tab" href="#menu2">Processed</a>
                                </li>
                                <li class="nav-item">
                                    <a style="padding: 10px 30px;" class="nav-link" data-toggle="tab" href="#menu2">Cancel</a>
                                </li>
                            </ul>
                            <div class="tab-content" style="margin-top: 0;">
                                <div id="home" class="container tab-pane active">
                                    <table class="table table-striped">
                                        <tbody>
                                            @if (isset($all_order))
                                                @foreach ($all_order as $key => $all)
                                                    @foreach ($products as $product)
                                                        @if ($product->id == $all->product_id)
                                                            <tr>
                                                                <td style="width: 5%;">{{ $key + 1 }}</td>
                                                                @foreach ($images as $image)
                                                                    @if ($image->product_id == $product->id)
                                                                        <td style="width: 10%">
                                                                            <img style="width: 100px;" src="{{ $image->image }}" alt="">
                                                                        </td>
                                                                    @endif
                                                                @endforeach
                                                                <td style="width: 20%;">
                                                                    <strong>{{ $product->name }}</strong>
                                                                    <br>
                                                                    <strong>Size : </strong> {{ $all->size }}
                                                                    <br>
                                                                    <strong>Color : </strong> {{ $all->color }}
                                                                    
                                                                </td>
                                                                <td style="width: 10%">{{ number_format($all->price) }} VND</td>
                                                                <td width="5%">{{ $all->quantity }}</td>
                                                                <td style="width: 10%">{{ number_format($all->quantity * $all->price) }} VND</td>
                                                                <td><button class="alert alert-warning">Waitting</button></td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                <div id="menu1" class="container tab-pane fade">
                                    <table class="table table-striped">
                                        <tbody>
                                            @if (isset($order_waiting))
                                                @foreach ($order_waiting as $key => $waitting)
                                                    @foreach ($products as $product)
                                                        @if ($product->id == $waitting->product_id)
                                                            <tr>
                                                                <td style="width: 5%;">{{ $key + 1 }}</td>
                                                                @foreach ($images as $image)
                                                                    @if ($image->product_id == $product->id)
                                                                        <td style="width: 10%">
                                                                            <img style="width: 100px;" src="{{ $image->image }}" alt="">
                                                                        </td>
                                                                    @endif
                                                                @endforeach
                                                                <td style="width: 20%;">
                                                                    <strong>{{ $product->name }}</strong>
                                                                    <br>
                                                                    <strong>Size : </strong> {{ $waitting->size }}
                                                                    <br>
                                                                    <strong>Color : </strong> {{ $waitting->color }}
                                                                    
                                                                </td>
                                                                <td style="width: 10%">{{ number_format($waitting->price) }} VND</td>
                                                                <td width="5%">{{ $waitting->quantity }}</td>
                                                                <td style="width: 10%">{{ number_format($waitting->quantity * $waitting->price) }} VND</td>
                                                                <td><button class="alert alert-warning">Waitting</button></td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                <div id="menu2" class="container tab-pane fade">
                                    <table class="table table-striped">
                                        <tbody>
                                            @if (isset($order_processed))
                                                @foreach ($order_processed as $key => $processed)
                                                    @foreach ($products as $product)
                                                        @if ($product->id == $processed->product_id)
                                                            <tr>
                                                                <td style="width: 5%;">{{ $key + 1 }}</td>
                                                                @foreach ($images as $image)
                                                                    @if ($image->product_id == $product->id)
                                                                        <td style="width: 10%">
                                                                            <img style="width: 100px;" src="{{ $image->image }}" alt="">
                                                                        </td>
                                                                    @endif
                                                                @endforeach
                                                                <td style="width: 20%;">
                                                                    <strong>{{ $product->name }}</strong>
                                                                    <br>
                                                                    <strong>Size : </strong> {{ $processed->size }}
                                                                    <br>
                                                                    <strong>Color : </strong> {{ $processed->color }}
                                                                    
                                                                </td>
                                                                <td style="width: 10%">{{ number_format($processed->price) }} VND</td>
                                                                <td width="5%">{{ $processed->quantity }}</td>
                                                                <td style="width: 10%">{{ number_format($processed->quantity * $processed->price) }} VND</td>
                                                                <td><button class="alert alert-success">Processed</button></td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                    <div class="block shop-by-side">
                        <div class="sidebar-bar-title">
                            <div>
                                <img class="avatar_profile img-fluid" src="{{ asset('images/avatar/avatar5e634954043b5.jpeg') }}" alt="">
                            </div>
                            <hr>
                            <div class="text-center">
                                <b>Đinh Duy Tự</b>
                            </div>
                            <div class="text-center">
                                <a id="edit_profile">Edit Profile <i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="block-content" style="background: silver">
                            <div class="layered-Category">
                                <div class="layered-content">
                                    <ul class="check-box-list" style="font-size: 16px">
                                        <li>
                                            <label>
                                                <i style="margin-right: 20px;" class="fa fa-user" aria-hidden="true"></i> My Profile
                                            </label>
                                        </li>
                                        <hr>
                                        <li>
                                            <label>
                                                <i style="margin-right: 16px;" class="fa fa-shopping-basket" aria-hidden="true"></i> My Order
                                            </label>
                                        </li>
                                        <hr>
                                        <li>
                                            <label>
                                                <i style="margin-right: 17px;" class="fa fa-bell" aria-hidden="true"></i> Notification
                                            </label>
                                        </li>
                                        <hr>
                                        <li>
                                            <label>
                                                <i style="margin-right: 18px;" class="fa fa-history" aria-hidden="true"></i> History
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection
