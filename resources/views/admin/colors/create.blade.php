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
                <form action="{{ route('admin.colors.store') }}" method="post">
                    @csrf
                    <div class="row toastr-row">
                        <div class="col-md-2"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="title">Name</label>
                                <input id="title" type="text" name="name" class="form-control" placeholder="Enter a name color ... ">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">Color</label>
                                <input id="title" type="text" name="color" class="form-control" placeholder="Enter a color ... ">
                            </div>
                            <div class="row float-right-button">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success" id="showtoast">Create Product</button>
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
