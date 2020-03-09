@extends('client.layouts.main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
                        <li><strong>Jewellery </strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container col2-left-layout">
        <div class="container">
            <div class="row">
                <div class="col-main col-sm-9 col-xs-12 col-sm-push-3">
                    <div class="profile">
                        <div class="page-title">
                            <h2>My Profile </h2>
                            <p>Manage profile information for account security</p>
                            <hr>
                        </div>
                        <div class="toolbar">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <p><b>Name :</b></p>
                                    <p><b>Email :</b></p>
                                    <p><b>Phone :</b></p>
                                    <p><b>Address :</b></p>
                                    <p><b>Sex :</b></p>
                                    <p><b>Date Of Birth :</b></p>
                                </div>
                                <div class="col-md-9">
                                    <p>{{ $user->name }}</p>
                                    <p>{{ $user->email }}</p>
                                    <p>{{ $user->phone }}</p>
                                    <p>{{ $user->address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                    <div class="block shop-by-side">
                        <div class="sidebar-bar-title">
                            <div>
                                <img class="avatar_profile img-fluid" src="{{ $user->avatar }}" alt="">
                            </div>
                            <hr>
                            <div class="text-center">
                                <b>{{ $user->name }}</b>
                            </div>
                            <div class="text-center">
                                <a id="edit_profile">Edit Profile <i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="block-content" style="background: silver">
                            <div class="layered-Category">
                                <div class="layered-content">
                                    <ul class="check-box-list" style="font-size: 16px">
                                        <li>
                                            <label>
                                                <i style="margin-right: 20px;" class="fa fa-user" aria-hidden="true"></i> My Profile
                                            </label>
                                        </li>
                                        <hr>
                                        <li>
                                            <label>
                                                <i style="margin-right: 16px;" class="fa fa-shopping-basket" aria-hidden="true"></i> My Order
                                            </label>
                                        </li>
                                        <hr>
                                        <li>
                                            <label>
                                                <i style="margin-right: 17px;" class="fa fa-bell" aria-hidden="true"></i> Notification
                                            </label>
                                        </li>
                                        <hr>
                                        <li>
                                            <label>
                                                <i style="margin-right: 18px;" class="fa fa-history" aria-hidden="true"></i> History
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection
