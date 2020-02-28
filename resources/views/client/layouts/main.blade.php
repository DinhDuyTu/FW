<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MyStore premium HTML5 &amp; CSS3 template</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
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
</head>

<body class="cms-index-index cms-home-page">
    <div id="page">
        @include('client.layouts.header')
        @include('client.layouts.menu')
        @include('client.layouts.menu_mobile')
        @yield('content')
        @include('client.layouts.footer')
        <a href="#" class="totop"> </a>
    </div>

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
    <script type="text/javascript">
        var dthen1 = new Date("12/25/16 11:59:00 PM");
        start = "08/04/15 03:02:11 AM";
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

    <script>
        $.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		
        $(document).ready(function () {
            $('.addToCart').click(function (e) {
                e.preventDefault();
                let id = $(this).attr('data-id');
                let quantity = $('#qty').val();
                $.ajax({
                    type: 'POST',
                    url: '/cart/add_to_cart',
                    data: {
                        'id': id,
                        'quantity': quantity
                    },
                    success: function (scs) {
                        console.log(scs.product_detail);
                        // alert('success');
                        // $('#miniCart').append('<li class="item odd"><a href="#" title="Ipsums Dolors Untra" class="product-image"><img src="{{ asset('bower_components/Asset-FW-Client/images/products/img07.jpg') }}" alt="Lorem ipsum dolor" width="65"></a><div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a><p class="product-name"><a href="#">Lorem ipsum dolor sit amet Consectetur</a> </p><strong>1</strong> x <span class="price">$20.00</span> </div></li>');
                        $('#qty-product').text(scs.quantity);
                        $('#cart-sidebar').append('<li class="item odd"><a href="#" title="Ipsums Dolors Untra" class="product-image"><img src="{{ asset('bower_components/Asset-FW-Client/images/products/img07.jpg') }}" alt="Lorem ipsum dolor" width="65"></a><div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a><p class="product-name"><a href="#">'+scs.product_name+'</a> </p><strong>'+scs.quantity+'</strong> x <span class="price">'+scs.product_price+'</span> </div></li>');
                    },
                    error: function () {
                        console.log($quantity)
                    }
                })
            });
        });

    </script>
</body>

</html>