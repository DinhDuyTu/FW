@extends('admin.layouts.main')
@section('content')
<section id="main-content">
    <section class="wrapper site-min-height">
        <section class="panel">
            <header class="panel-heading">
                Editable Table
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <div class="btn-group">
                            <a href="{{ route('admin.users.create') }}">
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
                                <th style="width: 110px;">Avatar</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Role</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <a href="{{ route('admin.users.edit', $user->id) }}">
                                            <img style="height: 100px;" src="{{ $user->avatar }}" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <ul>
                                            <li><a href="{{ route('admin.users.edit', $user->id) }}"><b>Name: {{ $user->name }}</b></a></li>
                                            <li><a href="{{ route('admin.users.edit', $user->id) }}"><b>Email: {{ $user->email }}</b></a></li>
                                        </ul>
                                    </td>
                                    <td class="center">{{ $user->phone }}</td>
                                    <td class="center">{{ $user->address }}</td>
                                    <td class="center">
                                        @if ($user->role_id == 0)
                                            Guest
                                        @elseif ($user->role_id == 1)
                                            Manager
                                        @elseif ($user->role_id == 2)
                                            Admin
                                        @elseif ($user->role_id == 3)
                                            Supper Admin
                                        @endif
                                    </td>
                                    <td><a class="edit" href="javascript:;">Edit</a></td>
                                    <td><a class="delete" href="javascript:;">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </section>
</section>
@endsection
