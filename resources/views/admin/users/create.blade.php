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
                <form action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row toastr-row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="title">Name</label>
                                <input id="title" type="text" name="name" class="form-control" placeholder="Enter a name user ... ">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">Email</label>
                                <input id="title" type="text" name="email" class="form-control" placeholder="Enter a email user ... ">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">Password</label>
                                <input id="title" type="text" name="password" class="form-control" placeholder="Enter a Password ... ">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">Confirm Password</label>
                                <input id="title" type="text" name="confirm_password" class="form-control" placeholder="Enter a Confirm Password ... ">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">Phone</label>
                                <input id="title" type="text" name="phone" class="form-control" placeholder="Enter a name phone ... ">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">Address</label>
                                <input id="title" type="text" name="address" class="form-control" placeholder="Enter a address ... ">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">Role</label>
                                <select name="role_id" id="" class="form-control">
                                    <option value="0">Guest</option>
                                    <option value="1">Manager</option>
                                    <option value="2">Admin</option>
                                    <option value="0">Supper Admin</option>
                                </select>
                            </div>
                            <div class="row float-right-button">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success" id="showtoast">Create User</button>
                                    <button type="button" class="btn btn-danger" id="cleartoasts">Cancel</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group" style="width: 260px;">
                                <label class="control-label" for="message">Image</label>
                                <input id="input-res-3" name="avatar" type="file">
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
