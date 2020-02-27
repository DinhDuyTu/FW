@extends('admin.layouts.main')
@section('content')
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="panel">
            <header class="panel-heading">
                Toastr
            </header>
            <div class="panel-body">
                <form action="{{ route('admin.users.update', $user->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row toastr-row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="title">Name</label>
                                <input id="title" type="text" name="name" class="form-control" placeholder="Enter a name user ... " value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">Email</label>
                                <input id="title" type="text" name="email" class="form-control" placeholder="Enter a email user ... " value="{{ $user->email }}">
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
                                <input id="title" type="text" name="phone" class="form-control" placeholder="Enter a name phone ... " value="{{ $user->phone }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">Address</label>
                                <input id="title" type="text" name="address" class="form-control" placeholder="Enter a address ... " value="{{ $user->address }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">Role</label>
                                <select name="role_id" id="" class="form-control">
                                    <option value="0" {{ $user->role_id == 0 ? "selected" : "" }}>Guest</option>
                                    <option value="1" {{ $user->role_id == 1 ? "selected" : "" }}>Manager</option>
                                    <option value="2" {{ $user->role_id == 2 ? "selected" : "" }}>Admin</option>
                                    <option value="3" {{ $user->role_id == 3 ? "selected" : "" }}>Supper Admin</option>
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
                                <div class="row" style="border-radius: 5px; margin: 0px;">
                                    <div class="col-md-3" style="padding: 20px;">
                                        <img style="border: 2px solid silver; padding: 20px; border-radius: 8px;" height="250px" src="{{ $user->avatar }}" alt="">
                                    </div>
                                </div>
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
