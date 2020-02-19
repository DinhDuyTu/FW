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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="title">Category Parent</label>
                            <select class="form-control" name="parent_id" id="">
                                <option value="">Category 1</option>
                                <option value="">Category 2</option>
                                <option value="">Category 3</option>
                                <option value="">Category 4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Category Name</label>
                            <input id="title" type="text" class="form-control" name="Name" placeholder="Enter a title ... ">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="message">Description</label>
                            <textarea class="form-control" id="message" name="description" rows="3" placeholder="Enter a message ..."></textarea>
                        </div>
                        <div class="row float-right-button">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success" id="showtoast">Create Category</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
@endsection
