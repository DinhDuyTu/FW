$(document).ready(function () {
    var temp = 0;

    $('.see-more').click(function () {
        temp += 18;
        $.ajax({
            type: 'get',
            url: '/see-more-product',
            data: {
                'temp': temp
            },
            success: function (scs) {
                let products = '';
                let price = '';
                let price_sale = '';
                let image;
                $.each(scs.products, function (key, value) {
                    price = number_format(value.price);
                    price_sale = number_format(value.price_sale);
                    $.each(scs.image, function (key_image, value_image) {
                        if (value.id == value_image.product_id) {
                            image = value_image.image;
                        }
                    });
                    products += '<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12"><div class="product-item"><div class="item-inner"><div class="product-thumbnail"><div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div><a href="/single_product/' + value.id + '" class="product-item-photo"> <img style="width: 196.500px; height: 294.203px;" class="product-image-photo" src="'+image+'" alt=""></a></div><div class="pro-box-info"><div class="item-info"><div class="info-inner"><div class="item-title"> <a title="' + value.name + '" href="/single_product/' + value.id + '">' + value.name + ' </a> </div><div class="item-content"><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div><div class="item-price"><div class="price-box"><p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> ' + price_sale + ' VND </span> </p><p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> ' + price + ' </span> </p></div></div></div></div></div><div class="box-hover"><div class="product-item-actions"><div class="pro-actions"><button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button></div><div class="add-to-links" data-role="add-to-links"><a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a><a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a></div></div></div></div></div></div></li>'
                });
                $('.products-grid').append(products)
                if (scs.del == 1) {
                    $('.pagination-area').remove();
                }
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
