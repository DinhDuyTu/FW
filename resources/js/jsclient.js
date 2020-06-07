
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

    $(document).on('click', '.icon-add-to-wishlist', function () {
        let prd_id = $(this).attr('data-prd-id');
        if (prd_id == null) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href>Why do I have this issue?</a>'
            })
        } else {
            $.ajax({
                type: 'POST',
                url: '/single_product/add_to_wishlist',
                data: {
                    'product_id' : prd_id
                },
                success: function (scs) {
                    if (scs.status == "added") {
                        $('a.icon-add-to-wishlist[data-prd-id="' + prd_id + '"]').addClass('add-to-wishlist-active')
                        Swal.fire(
                            'Success!',
                            'Add to Wishlist successfully!',
                            'success'
                        )
                    } else {
                        $('a.icon-add-to-wishlist[data-prd-id="' + prd_id + '"]').removeClass('add-to-wishlist-active')
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
        }
    })
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

$(document).ready(function () {
    $(document).on('click', '.filter-category', function () {
        $('.pagination-area').hide();
        let category_id = $(this).attr('for');
        let html = '';
        $.ajax({
            type: "GET",
            url: "/ajax/get_product_by_category",
            data: {
                'category_id': category_id
            },
            success: function (response) {
                $.each(response, function (index, value) { 
                    html += '<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12"><div class="product-item"><div class="item-inner"><div class="product-thumbnail"><div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div><a href="single_product.html" class="product-item-photo"> <img style="width: 196.500px; height: 294.203px;" class="product-image-photo" src="' + value.image + '" alt=""></a></div><div class="pro-box-info"><div class="item-info"><div class="info-inner"><div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">' + value.name + '</a> </div><div class="item-content"><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div><div class="item-price"><div class="price-box"><p class="special-price"> <span class="price-label">Special Price</span> <span class="price">' + value.price + ' VND</span> </p><p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">' + value.price_sale + ' VND</span> </p></div></div></div></div></div><div class="box-hover"><div class="product-item-actions"><div class="pro-actions"><button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button></div><div class="add-to-links" data-role="add-to-links"><a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a><a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a></div></div></div></div></div></div></li>';
                });
                $('.products-grid').html(html);
            }
        });
    })
})
