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
                            <button id="editable-sample_new" class="btn green">
                                Add New <i class="fa fa-plus"></i>
                            </button>
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
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Price Sale</th>
                                <th>Quantity</th>
                                <th>Highlight</th>
                                <th>Detail</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $key => $product)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <a href="{{ route('admin.products.edit', $product->id) }}"><img style="width: 100px" src="{{ $product->image }}" alt=""></a>
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
                                    <td><a class="edit" href="javascript:;">Edit</a></td>
                                    <td><a class="delete" href="javascript:;">Delete</a></td>
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
