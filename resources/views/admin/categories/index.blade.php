@extends('admin.layouts.main')
@section('content')
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <section class="panel">
                    <header class="panel-heading">
                        <h4>List Category</h4>
                    </header>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <div class="dd" id="nestable_list_3">
                                    <ol class="dd-list">
                                        @foreach ($categories as $category)
                                            <li class="dd-item dd3-item dd3-item-parent" data-id="{{ $category->id }}">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">
                                                    <a href="{{ route('admin.categories.edit', $category->id) }}">{{ $category->name }}</a>
                                                    <a class="icon_category btn-del-category-parent" data-id="{{ $category->id }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    <a class="icon_category" href="{{ route('admin.categories.edit', $category->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                </div>
                                                <ol class="dd-list">
                                                    @foreach ($categories_children as $children)
                                                        @if ($category->id == $children->parent_id)
                                                            <li class="dd-item dd3-item dd3-item-children" data-id="{{ $children->id }}">
                                                                <div class="dd-handle dd3-handle"></div>
                                                                <div class="dd3-content">
                                                                    <a href="{{ route('admin.categories.edit', $children->id) }}">{{ $children->name }}</a>
                                                                    <a class="icon_category btn-del-category" data-id="{{ $children->id }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                    <a class="icon_category" href="{{ route('admin.categories.edit', $children->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                                </div>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ol>
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </section>
</section>
@endsection
