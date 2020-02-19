<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

    <link href="{{ asset('bower_components/Asset-FW-Admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/Asset-FW-Admin/css/bootstrap-reset.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/Asset-FW-Admin/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('bower_components/Asset-FW-Admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('bower_components/Asset-FW-Admin/css/owl.carousel.css') }}" type="text/css">
    <link href="{{ asset('bower_components/Asset-FW-Admin/css/slidebars.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/Asset-FW-Admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/Asset-FW-Admin/css/style-responsive.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('bower_components/Asset-FW-Admin/assets/data-tables/DT_bootstrap.css') }}" />
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

</body>

</html>