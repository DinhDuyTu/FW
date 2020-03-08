<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/icon.jpg') }}">

    <title>Admin-Ecom</title>

    <link href="{{ asset('bower_components/Asset-FW-Admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/Asset-FW-Admin/css/bootstrap-reset.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/Asset-FW-Admin/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('bower_components/Asset-FW-Admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('bower_components/Asset-FW-Admin/css/owl.carousel.css') }}" type="text/css">
    <link href="{{ asset('bower_components/Asset-FW-Admin/css/slidebars.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/Asset-FW-Admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/Asset-FW-Admin/css/style-responsive.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('bower_components/Asset-FW-Admin/assets/data-tables/DT_bootstrap.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.min.css" media="all" type="text/css"> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <style>
        .kv-file-upload {
            display: none;
        }
    </style>
</head>

<body>

    <section id="container">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        @yield('content')
        @include('admin.layouts.right_sidebar')
        @include('admin.layouts.footer')
    </section>

    <script src="{{ asset('bower_components/Asset-FW-Admin/js/jquery.js') }}"></script>
    <script src="{{ asset('bower_components/Asset-FW-Admin/js/bootstrap.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ asset('bower_components/Asset-FW-Admin/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('bower_components/Asset-FW-Admin/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('bower_components/Asset-FW-Admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/Asset-FW-Admin/js/jquery.sparkline.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bower_components/Asset-FW-Admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
    <script src="{{ asset('bower_components/Asset-FW-Admin/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('bower_components/Asset-FW-Admin/js/jquery.customSelect.min.js') }}"></script>
    <script src="{{ asset('bower_components/Asset-FW-Admin/js/respond.min.js') }}"></script>
    <script src="{{ asset('bower_components/Asset-FW-Admin/js/slidebars.min.js') }}"></script>
    <script src="{{ asset('bower_components/Asset-FW-Admin/js/common-scripts.js') }}"></script>
    <script src="{{ asset('bower_components/Asset-FW-Admin/js/sparkline-chart.js') }}"></script>
    <script src="{{ asset('bower_components/Asset-FW-Admin/js/easy-pie-chart.js') }}"></script>
    <script src="{{ asset('bower_components/Asset-FW-Admin/js/count.js') }}"></script>
    <script src="{{ asset('bower_components/Asset-FW-Admin/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
    <script src="{{ asset('bower_components/Asset-FW-Admin/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ asset('bower_components/Asset-FW-Admin/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/Asset-FW-Admin/assets/data-tables/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/Asset-FW-Admin/assets/data-tables/DT_bootstrap.js') }}"></script>
    <script src="{{ asset('bower_components/Asset-FW-Admin/js/editable-table.js') }}"></script>
    <script src="assets/toastr-master/toastr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true,
                autoPlay: true

            });
        });
        $(function() {
            $('select.styled').customSelect();
        });
        
        jQuery(document).ready(function() {
              EditableTable.init();
          });
    </script>
    <script>
        $(document).ready(function() {
            $("#input-res-1").fileinput({
                showCaption: false,
                allowedFileExtensions: ["jpg", "gif", "png", "jpeg"],
                enableResumableUpload: true,
                maxFileCount: 4,
                theme: 'fas',
                showRemove: true,
                showUpload: false,
                initialPreview:false,
            });
        });
        $(document).ready(function() {
            $("#input-res-2").fileinput({
                showCaption: false,
                allowedFileExtensions: ["jpg", "gif", "png", "jpeg"],
                enableResumableUpload: true,
                maxFileCount: 4,
                theme: 'fas',
                showRemove: true,
                showUpload: false,
                initialPreview:false,
            });
            $("#input-res-2").change(function () {
                $(this).parents('.form-group').find('.row').remove();
            });
        });
        $(document).ready(function() {
            $("#input-res-3").fileinput({
                showCaption: false,
                allowedFileExtensions: ["jpg", "gif", "png", "jpeg"],
                enableResumableUpload: true,
                maxFileCount: 1,
                theme: 'fas',
                showRemove: true,
                showUpload: false,
                initialPreview:false,
            });
            $("#input-res-3").change(function () {
                $(this).parents('.form-group').find('.row').remove();
            });
        });
        </script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).ready(function () {
                $('#status').change(function () {
                    let status = $(this).val();
                    let order_id = $(this).attr('data-order_id');
                    $.ajax({
                        type: 'POST',
                        url: '/admin/orders/change_status',
                        data: {
                            'status': status,
                            'order_id': order_id
                        },
                        success: function (scs) {
                            Swal.fire(
                                'Success!',
                                'Add to cart successfully!',
                                'success'
                            )
                        },
                        error: function () {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!',
                            })
                        }
                    });
                    status--;
                    $('#'+status+'').attr('disabled', 'disabled');
                });
            });
        </script>
</body>

</html>