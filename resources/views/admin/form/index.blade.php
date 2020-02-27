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
                            <a href="{{ route('admin.products.create') }}">
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
                                <th style="width: 110px;">Image</th>
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
                            <tr>
                                <td>1</td>
                                <td>
                                    <a href="">
                                        <img src="" alt="">
                                    </a>
                                </td>
                                <td>
                                    <ul>
                                        <li><a href=""><b>Name:</b></a></li>
                                        <li><a href=""><b>Product Code</b></a></li>
                                    </ul>
                                </td>
                                <td class="center"></td>
                                <td class="center"></td>
                                <td class="center"></td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
</section>
@endsection
