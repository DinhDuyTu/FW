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
                        'product_id': id,
                        'quantity': quantity
                    },
                    success: function (scs) {
                        $('#qty-product').text(scs.quantity);
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
            });

            $('.mini-cart').hover(function () {
                $.ajax({
                    type: 'GET',
                    url: '/cart/show_mini_cart',
                    success: function (scs) {
                        let cart = scs.cart;
                        console.log(cart);
                        $(cart).each(function(res){
                            console.log(cart['product_id']);
                        });
                    },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        })
                    }
                })
            });

            $('.input-quantity').change(function () {
                let data = {
                    id: $(this).attr('data-id'),
                    quantity: $(this).val()
                };
                let _this = $(this);
                $.ajax({
                    url: '/cart/update',
                    data: data,
                    method: "POST",
                    success: function (scs) {
                        let summedPrice = number_format(scs.summedPrice);
                        let total_price = number_format(scs.total_price);
                        _this.parents('.product-cart').find('.summed-price').text(`${summedPrice} VND`);
                        $('.total_price').text(`${total_price} VND`);
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

            $(document).on('click', '.deleteCart', function (e) {
                e.preventDefault();
                let product_id = $(this).attr('data-id');
                let _this = $(this);
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            type: 'POST',
                            url: '/cart/delete',
                            data: {
                                'product_id': product_id
                            },
                            success: function (scs) {
                                let total_price = number_format(scs.total_price);
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                                $('.total_price').text(`${total_price} VND`);
                                _this.parents('.product-cart').remove();
                            },
                            error: function () {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Something went wrong!',
                                    footer: '<a href>Why do I have this issue?</a>'
                                })
                            }
                        })
                    }
                })
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