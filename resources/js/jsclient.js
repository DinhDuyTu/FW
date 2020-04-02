
$(document).ready(function () {
    $('.reply').click(function () {
        $(this).parents('.display-comment').find('.hidden_cmt').removeClass('hidden_cmt');
    });
});

$(document).ready(function () {
    $('.addToWishlist').click(function () {
        let user_id = $(this).attr('data-user_id');
        let product_id = $(this).attr('data-product_id');
        $.ajax({
            type: 'POST',
            url: '/single_product/add_to_wishlist',
            data: {
                'user_id' : user_id,
                'product_id' : product_id
            },
            success: function (scs) {
                if (scs.status == "added") {
                    $('.addToWishlist').css("color", "#F02640");
                    $('.wishlist').css("color", "#F02640");
                    Swal.fire(
                        'Success!',
                        'Add to Wishlist successfully!',
                        'success'
                    )
                } else {
                    $('.addToWishlist').css("color", "");
                    $('.wishlist').css("color", "");
                    Swal.fire(
                        'Success!',
                        'Delete to Wishlist successfully!',
                        'success'
                    )
                }
                $('.wishlist-count').text(scs.wishlistOfUser);
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
    });

    $('.del_wishlist').click(function () {
        let user_id = $(this).attr('data-user_id');
        let product_id = $(this).attr('data-product_id');
        $.ajax({
            type: 'POST',
            url: '/wishlist/del_wishlist',
            data: {
                'user_id' : user_id,
                'product_id' : product_id
            },
            success: function () {
                Swal.fire(
                    'Success!',
                    'Delete to Wishlist successfully!',
                    'success'
                )
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: '<a href>Why do I have this issue?</a>'
                })
            }
        });
        $(this).parents('.tr-main-wishlist').remove();
    });
});

$(window).on('load', function () {
    $.ajax({
        type: 'GET',
        url: '/count_wishlist',
        success: function (scs) {
            $('.wishlist-count').text(scs.count);
        },
        error: function () {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href>Why do I have this issue?</a>'
            })
        }
    });
});

$(window).on('load', function () {
    $.ajax({
        type: 'GET',
        url: '/support_cart',
        success: function (scs) {
            let total_price = number_format(scs.total_price);
            $('#qty-product').text(scs.quantity);
            $('#sub_total_price').text(total_price);
        }
    });
});

$(document).ready(function () {
    $('.use_other_information').click(function (){
        $(this).parents('.modal-body').append('<div><div class="form-group"><label>Name</label><input class="form-control" type="text" name="name"></div><div class="form-group"><label>Email</label><input class="form-control" type="text" name="email"></div><div class="form-group"><label>Address</label><input class="form-control" type="text" name="address"></div><div class="form-group"><label>Phone</label><input class="form-control" type="text" name="phone"></div><div class="form-group"><label>Note</label><textarea style="width: 100%; height: 100px;" name="note" id="" cols="30" rows="30"></textarea></div></div>');
        $('.profile_guest').remove();
    });
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
