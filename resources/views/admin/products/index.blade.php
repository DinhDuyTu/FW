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
                            <a href="{{ route('admin.products.create') }}">
                                <button class="btn green">
                                    Add New <i class="fa fa-plus"></i>
                                </button>
                            </a>
                        </div>
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
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th style="width: 110px;">Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Price Sale</th>
                                <th>Quantity</th>
                                <th>Highlight</th>
                                <th>Detail</th>
                                <th>Description</th>
                                <th><i class="fa fa-pencil" aria-hidden="true"></i></th>
                                <th><i class="fa fa-trash-o" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $key => $product)
                                <tr class="product-main">
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <a href="{{ route('admin.products.edit', $product->id) }}">
                                            @foreach ($images as $image)
                                                @if ($product->id == $image->product_id)
                                                    <img style="width: 100px" src="{{ $image->image }}" alt="">
                                                @endif
                                            @endforeach
                                        </a>
                                    </td>
                                    <td>
                                        <ul>
                                            <li><a href="{{ route('admin.products.edit', $product->id) }}"><b>Name:</b> {{ $product->name }}</a></li>
                                            <li><a href="{{ route('admin.products.edit', $product->id) }}"><b>Product Code</b> {{ $product->product_code }}</a></li>
                                        </ul>
                                    </td>
                                    <td class="center">{{ number_format($product->price) }} VND</td>
                                    <td class="center">{{ number_format($product->price_sale) }} VND</td>
                                    <td class="center">{{ $product->quantity }}</td>
                                    <td class="center"><input type="checkbox" @if ($product->is_highlight == 1) checked @endif></td>
                                    <td>{{ $product->detail }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td><a href="{{ route('admin.products.edit', $product->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                    <td>
                                        <form class="delete-product" action="{{ route('admin.products.destroy', $product->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn-delete-product"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </form>
                                    </td>
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
