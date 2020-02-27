@extends('admin.layouts.main')
@section('content')
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="panel">
            <header class="panel-heading">
                Toastr
            </header>
            <div class="panel-body">
                <form action="{{ route('admin.products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row toastr-row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="control-label" for="title">Category</label>
                                <select name="category_id" id="" class="form-control">
                                    @include('admin.partials.categories_options', ['level' => 0])
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">Name</label>
                                <input id="title" type="text" name="name" class="form-control" placeholder="Enter a name product ... " value="{{ $product->name }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">Product Code</label>
                                <input id="title" type="text" name="product_code" class="form-control" placeholder="Enter a product code ... " value="{{ $product->product_code }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="message">Image</label>
                                <input id="input-res-2" name="image[]" type="file" multiple>
                                <hr>
                                <div class="row" style="border: 1px solid silver; border-radius: 5px;">
                                    @foreach ($images as $image)
                                        <div class="col-md-3" style="padding: 20px;">
                                            <img height="200px" src="{{ $image->image }}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">Price</label>
                                <input id="title" type="text" name="price" class="form-control" placeholder="Enter a price ... " value="{{ $product->price }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">Price Sale</label>
                                <input id="title" type="text" name="price_sale" class="form-control" placeholder="Enter a name price sale ... " value="{{ $product->price_sale }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">Quantity</label>
                                <input id="title" type="text" name="quantity" class="form-control" placeholder="Enter a quantity ... " value="{{ $product->quantity }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">Highlight</label> <br>
                                <input type="checkbox" name="is_highlight" @if ($product->is_highlight == 1) checked @endif> Product Highlight
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="message">Detail</label>
                                <textarea class="form-control" name="detail" id="message" rows="3" placeholder="Enter a detail ...">{!! $product->detail !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="message">Description</label>
                                <textarea class="form-control" name="description" id="message" rows="3" placeholder="Enter a description ...">{!! $product->description !!}</textarea>
                            </div>
                            <div class="row float-right-button">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success" id="showtoast">Edit Product</button>
                                    <button type="button" class="btn btn-danger" id="cleartoasts">Cancel</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>
@endsection
