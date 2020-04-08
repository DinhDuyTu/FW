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

<body class="cms-index-index cms-home-page">
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

    <script>
        $(document).ready(function () {
            var temp_size = 0;
            var temp_color = 0;
            var size;
            
            $('.btn-quickview').click(function () {
                let id = $(this).attr('data-id');
                temp_color = 0;
                temp_size = 0;
                $.ajax({
                    url: '/product/quick-view',
                    data: {
                        'id': id
                    },
                    method: "GET",
                    success: function (scs) {
                        let price = number_format(scs.price);
                        let price_sale = number_format(scs.price_sale);
                        let image;
                        let color = '';
                        let size_prd = '';

                        $('.addToCart').attr('data-id', id);
                        $('.product-name h1').html(scs.name);
                        $('.special-price span:nth-child(2)').html(price_sale+" VND");
                        $('.old-price span:nth-child(2)').html(price+" VND");
                        $.each(scs.image_default, function (key, value) {
                            image = value.image
                        });
                        $('.large-image').html('<a href="'+ image +'" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="'+ image +'"> </a>');
                        $('.short-description p').html(scs.detail);
                        $.each(scs.color_prd, function (key, value) {
                            color += '<li class="color_main"><a class="color_prd '+ value.color +'"></a><input style="display: none" type="checkbox" class="check_color" data-color="'+ value.name +'"></li>'
                        });
                        $('.color ul').html(color);
                        $.each(scs.size_prd, function (key, value) {
                            size_prd += '<li class="size_main"><a class="size_prd">'+ value.size +'</a><input style="display: none" type="checkbox" name="size" class="rad_size" data-size="'+ value.size +'"></li>'
                        });
                        $('.size ul').html(size_prd);
                    },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        })
                    }
                });
            });

            $(document).on('click', '.size_prd', function () {
                $(this).parents('.size_main').find('.rad_size').click();
            });
            
            $(document).on('click', '.rad_size', function () {
                if ($(this).prop('checked')) {
                    temp_size++;
                    size = $(this).attr('data-size');
                    $(this).parents('.size_main').find('.size_prd').addClass("size_checked");
                } else {
                    temp_size--;
                    $(this).parents('.size_main').find('.size_prd').removeClass("size_checked");
                }
            });

            $(document).on('click', '.color_prd', function () {
                $(this).parents('.color_main').find('.check_color').click();
            });

            $(document).on('click', '.check_color', function () {
                if ($(this).prop('checked')) {
                    temp_color++;
                    color = $(this).attr('data-color');
                    $(this).parents('.color_main').find('.color_prd').html('<i style="color: white;padding-left: 6px;padding-top: 6px;" class="fa fa-check" aria-hidden="true"></i>');
                } else {
                    temp_color--;
                    $(this).parents('.color_main').find('.color_prd').html("");
                }
            });

            $(document).on('click', '.addToCart', function (e) {
                e.preventDefault();
                let id = $(this).attr('data-id');
                let quantity = $('#qty').val();
                if (temp_size == 1 && temp_color == 1) {
                    $.ajax({
                        type: 'POST',
                        url: '/cart/add_to_cart',
                        data: {
                            'product_id': id,
                            'quantity': quantity,
                            'size': size,
                            'color': color
                        },
                        success: function (scs) {
                            let total_price = number_format(scs.total_price);
                            $('#qty-product').text(scs.quantity);
                            $('#sub_total_price').text(total_price);
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
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    })
                }
            });

            function number_format(nStr)
            {
                nStr += '';
                x = nStr.split('.');
                x1 = x[0];
                x2 = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + ',' + '$2');
                }
                return x1 + x2;
            }
        });
    </script>
</body>

</html>