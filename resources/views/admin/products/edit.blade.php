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
                <div class="row toastr-row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="control-label" for="title">Category</label>
                            <select name="category_id" id="" class="form-control">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Name</label>
                            <input id="title" type="text" name="name" class="form-control" placeholder="Enter a name product ... ">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Product Code</label>
                            <input id="title" type="text" name="product_code" class="form-control" placeholder="Enter a product code ... ">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="message">Image</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <input style="display: none;" id="title" type="file" name="image" class="form-control">
                                    <img style="width: 150px;" src="{{ asset('bower_components/Asset-FW-Admin/img/photos/add_photo.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Price</label>
                            <input id="title" type="text" name="price" class="form-control" placeholder="Enter a price ... ">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Price Sale</label>
                            <input id="title" type="text" name="price_sale" class="form-control" placeholder="Enter a name price sale ... ">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Quantity</label>
                            <input id="title" type="text" name="quantity" class="form-control" placeholder="Enter a quantity ... ">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Highlight</label> <br>
                            <input type="checkbox" name="is_highlight" id=""> Product Highlight
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="message">Detail</label>
                            <textarea class="form-control" name="detail" id="message" rows="3" placeholder="Enter a detail ..."></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="message">Description</label>
                            <textarea class="form-control" name="description" id="message" rows="3" placeholder="Enter a description ..."></textarea>
                        </div>
                        <div class="row float-right-button">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-success" id="showtoast">Show Toast</button>
                                <button type="button" class="btn btn-danger" id="cleartoasts">Clear Toasts</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
@endsection
