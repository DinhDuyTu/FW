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
                $('.special-price span:nth-child(2)').html(price_sale + " VND");
                $('.old-price span:nth-child(2)').html(price + " VND");
                $.each(scs.image_default, function (key, value) {
                    image = value.image
                });
                $('.large-image').html('<a href="' + image + '" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="' + image + '"> </a>');
                $('.short-description p').html(scs.detail);
                $.each(scs.color_prd, function (key, value) {
                    color += '<li class="color_main"><a class="color_prd ' + value.color + '"></a><input style="display: none" type="checkbox" class="check_color" data-color="' + value.name + '"></li>'
                });
                $('.color ul').html(color);
                $.each(scs.size_prd, function (key, value) {
                    size_prd += '<li class="size_main"><a class="size_prd">' + value.size + '</a><input style="display: none" type="checkbox" name="size" class="rad_size" data-size="' + value.size + '"></li>'
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

    function number_format(nStr) {
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
