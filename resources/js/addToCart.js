$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function () {
    var temp_size = 0;
    var temp_color = 0;
    var size;
    $('.size_prd').click(function () {
        $(this).parents('.size_main').find('.rad_size').click();
    });
    
    $('.rad_size').change(function () {
        if ($(this).prop('checked')) {
            temp_size++;
            size = $(this).attr('data-size');
            $(this).parents('.size_main').find('.size_prd').addClass("size_checked");
        } else {
            temp_size--;
            $(this).parents('.size_main').find('.size_prd').removeClass("size_checked");
        }
    });

    $('.color_prd').click(function () {
        $(this).parents('.color_main').find('.check_color').click();
    });

    $('.check_color').change(function () {
        if ($(this).prop('checked')) {
            temp_color++;
            color = $(this).attr('data-color');
            $(this).parents('.color_main').find('.color_prd').html('<i style="color: white;padding-left: 6px;padding-top: 6px;" class="fa fa-check" aria-hidden="true"></i>');
        } else {
            temp_color--;
            $(this).parents('.color_main').find('.color_prd').html("");
        }
    });

    $('.addToCart').click(function (e) {
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
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
            })
        }
    });

    $('.mini-cart').hover(function () {
        $.ajax({
            type: 'GET',
            url: '/cart/show_mini_cart',
            success: function (response) {
                let html;
                let sub_total_price = 0;
                $.each(response.cart, function (key, value) {
                    let product_price = number_format(value.product_price);
                    sub_total_price = sub_total_price + (value.product_num * value.product_price);
                    html += '<li class="item odd"><a href="#" title="' + value.product_name + '" class="product-image"><img src="' + value.product_image +'" alt="' + value.product_name + '" width="65"></a><div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a><p class="product-name"><a href="#">' + value.product_name + '</a> </p><strong>' + value.product_num + '</strong> x <span class="price">' + product_price + ' VND</span> </div></li>';
                });
                $('#cart-sidebar').html(html);
                let total_price = number_format(sub_total_price);
                $('#total_price').html(total_price + " zxVND");
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
            quantity: $(this).val(),
            color: $(this).attr('data-color'),
            size: $(this).attr('data-size')
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