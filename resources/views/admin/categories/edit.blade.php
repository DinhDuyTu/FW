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
                <form action="{{ route('admin.categories.update', $category->id) }}" method="post">
                    @csrf
                    <div class="row toastr-row">
                        <div class="col-md-2"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="title">Category Parent</label>
                                <select class="form-control" name="parent_id" id="">
                                    <option value="0">Category 1</option>
                                    @include('admin.partials.categories_options', ['level' => 0])
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">Category Name</label>
                                <input id="title" type="text" class="form-control" name="name" placeholder="Enter a title ... " value="{{ $category->name }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="message">Description</label>
                                <textarea class="form-control" id="message" name="description" rows="3" placeholder="Enter a message ...">{{ $category->description }}</textarea>
                            </div>
                            <div class="row float-right-button">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success" id="showtoast">Create Category</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </form>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
@endsection
