<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Store</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/Asset-FW-Client/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/Asset-FW-Client/css/font-awesome.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/Asset-FW-Client/css/simple-line-icons.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/Asset-FW-Client/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/Asset-FW-Client/css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/Asset-FW-Client/css/owl.transitions.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/Asset-FW-Client/css/animate.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/Asset-FW-Client/css/flexslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/Asset-FW-Client/css/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/Asset-FW-Client/css/meanmenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/Asset-FW-Client/css/nivo-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/Asset-FW-Client/css/style.css') }}" media="all">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body class="cms-index-index cms-home-page preloading">
    <div class="load">
        <img src="{{ asset('images/loading/Spinner1.gif') }}" alt="">
    </div>
    <div id="page">
        @include('client.layouts.header')
        @include('client.layouts.menu')
        @include('client.layouts.menu_mobile')
        @yield('content')
        @include('client.layouts.footer')
        <a href="#" class="totop"> </a>
    </div>
    @include('client.products.quick_view')

    <script type="text/javascript" src="{{ asset('bower_components/Asset-FW-Client/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/Asset-FW-Client/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/Asset-FW-Client/js/jquery.meanmenu.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/Asset-FW-Client/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/Asset-FW-Client/js/jquery.bxslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/Asset-FW-Client/js/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/Asset-FW-Client/js/countdown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/Asset-FW-Client/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/Asset-FW-Client/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/Asset-FW-Client/js/jquery.nivo.slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/Asset-FW-Client/js/jquery.flexslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/Asset-FW-Client/js/cloud-zoom.js') }}"></script> 
    <script src="{{ asset('js/jsclient.js') }}"></script>
    <script type="text/javascript">
        var dthen1 = new Date("12/25/16 11:59:00 PM");
        start = "12/22/16 03:02:11 AM";
        start_date = Date.parse(start);
        var dnow1 = new Date(start_date);
        if (CountStepper > 0)
            ddiff = new Date((dnow1) - (dthen1));
        else
            ddiff = new Date((dthen1) - (dnow1));
        gsecs1 = Math.floor(ddiff.valueOf() / 1000);

        var iid1 = "countbox_1";
        CountBack_slider(gsecs1, "countbox_1", 1);
    </script>

    
</body>

</html>