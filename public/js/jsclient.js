/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/addToCart.js":
/*!***********************************!*\
  !*** ./resources/js/addToCart.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

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
    var id = $(this).attr('data-id');
    var quantity = $('#qty').val();

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
        success: function success(scs) {
          var total_price = number_format(scs.total_price);
          $('#qty-product').text(scs.quantity);
          $('#sub_total_price').text(total_price);
          Swal.fire('Success!', 'Add to cart successfully!', 'success');
        },
        error: function error() {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!'
          });
        }
      });
    } else {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!'
      });
    }
  });
  $('.addToCartNoQty').click(function (e) {
    alert('adwdw');
  });
  $('.mini-cart').hover(function () {
    $.ajax({
      type: 'GET',
      url: '/cart/show_mini_cart',
      success: function success(response) {
        var html;
        var sub_total_price = 0;
        $.each(response.cart, function (key, value) {
          var product_price = number_format(value.product_price);
          sub_total_price = sub_total_price + value.product_num * value.product_price;
          html += '<li class="item odd"><a href="#" title="' + value.product_name + '" class="product-image"><img src="' + value.product_image + '" alt="' + value.product_name + '" width="65"></a><div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a><p class="product-name"><a href="#">' + value.product_name + '</a> </p><strong>' + value.product_num + '</strong> x <span class="price">' + product_price + ' VND</span> </div></li>';
        });
        $('#cart-sidebar').html(html);
        var total_price = number_format(sub_total_price);
        $('#total_price').html(total_price + " VND");
      },
      error: function error() {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Something went wrong!'
        });
      }
    });
  });
  $('.input-quantity').change(function () {
    var data = {
      id: $(this).attr('data-id'),
      quantity: $(this).val(),
      color: $(this).attr('data-color'),
      size: $(this).attr('data-size')
    };

    var _this = $(this);

    $.ajax({
      url: '/cart/update',
      data: data,
      method: "POST",
      success: function success(scs) {
        var summedPrice = number_format(scs.summedPrice);
        var total_price = number_format(scs.total_price);

        _this.parents('.product-cart').find('.summed-price').text("".concat(summedPrice, " VND"));

        $('.total_price').text("".concat(total_price, " VND"));
      },
      error: function error() {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Something went wrong!'
        });
      }
    });
  });
  $(document).on('click', '.deleteCart', function (e) {
    e.preventDefault();
    var product_id = $(this).attr('data-id');
    var size = $(this).attr('data-size');
    var color = $(this).attr('data-color');

    var _this = $(this);

    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then(function (result) {
      if (result.value) {
        $.ajax({
          type: 'POST',
          url: '/cart/delete',
          data: {
            'product_id': product_id,
            'size': size,
            'color': color
          },
          success: function success(scs) {
            var total_price = number_format(scs.total_price);
            Swal.fire('Deleted!', 'Your file has been deleted.', 'success');
            $('.total_price').text("".concat(total_price, " VND"));

            _this.parents('.product-cart').remove();
          },
          error: function error() {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Something went wrong!',
              footer: '<a href>Why do I have this issue?</a>'
            });
          }
        });
      }
    });
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

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */
// require('./bootstrap');
// window.Vue = require('vue');
// /**
//  * The following block of code may be used to automatically register your
//  * Vue components. It will recursively scan this directory for the Vue
//  * components and automatically register them with their "basename".
//  *
//  * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
//  */
// // const files = require.context('./', true, /\.vue$/i)
// // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */
// const app = new Vue({
//     el: '#app',
// });

/***/ }),

/***/ "./resources/js/jsclient.js":
/*!**********************************!*\
  !*** ./resources/js/jsclient.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $('.reply').click(function () {
    $(this).parents('.display-comment').find('.hidden_cmt').removeClass('hidden_cmt');
  });
});
$(document).ready(function () {
  $('.addToWishlist').click(function () {
    var user_id = $(this).attr('data-user_id');
    var product_id = $(this).attr('data-product_id');
    $.ajax({
      type: 'POST',
      url: '/single_product/add_to_wishlist',
      data: {
        'user_id': user_id,
        'product_id': product_id
      },
      success: function success(scs) {
        if (scs.status == "added") {
          $('.addToWishlist').css("color", "#F02640");
          $('.wishlist').css("color", "#F02640");
          Swal.fire('Success!', 'Add to Wishlist successfully!', 'success');
        } else {
          $('.addToWishlist').css("color", "");
          $('.wishlist').css("color", "");
          Swal.fire('Success!', 'Delete to Wishlist successfully!', 'success');
        }

        $('.wishlist-count').text(scs.wishlistOfUser);
      },
      error: function error() {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Something went wrong!',
          footer: '<a href>Why do I have this issue?</a>'
        });
      }
    });
  });
  $('.del_wishlist').click(function () {
    var user_id = $(this).attr('data-user_id');
    var product_id = $(this).attr('data-product_id');
    $.ajax({
      type: 'POST',
      url: '/wishlist/del_wishlist',
      data: {
        'user_id': user_id,
        'product_id': product_id
      },
      success: function success() {
        Swal.fire('Success!', 'Delete to Wishlist successfully!', 'success');
      },
      error: function error() {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Something went wrong!',
          footer: '<a href>Why do I have this issue?</a>'
        });
      }
    });
    $(this).parents('.tr-main-wishlist').remove();
  });
});
$(window).on('load', function () {
  $.ajax({
    type: 'GET',
    url: '/count_wishlist',
    success: function success(scs) {
      $('.wishlist-count').text(scs.count);
    },
    error: function error() {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
        footer: '<a href>Why do I have this issue?</a>'
      });
    }
  });
});
$(window).on('load', function () {
  $.ajax({
    type: 'GET',
    url: '/support_cart',
    success: function success(scs) {
      var total_price = number_format(scs.total_price);
      $('#qty-product').text(scs.quantity);
      $('#sub_total_price').text(total_price);
    }
  });
});
$(document).ready(function () {
  $('.use_other_information').click(function () {
    $(this).parents('.modal-body').append('<div><div class="form-group"><label>Name</label><input class="form-control" type="text" name="name"></div><div class="form-group"><label>Email</label><input class="form-control" type="text" name="email"></div><div class="form-group"><label>Address</label><input class="form-control" type="text" name="address"></div><div class="form-group"><label>Phone</label><input class="form-control" type="text" name="phone"></div><div class="form-group"><label>Note</label><textarea style="width: 100%; height: 100px;" name="note" id="" cols="30" rows="30"></textarea></div></div>');
    $('.profile_guest').remove();
  });
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

/***/ }),

/***/ "./resources/js/loading.js":
/*!*********************************!*\
  !*** ./resources/js/loading.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(window).on('load', function (event) {
  $('.load').delay(1000).fadeOut('fast');
});

/***/ }),

/***/ "./resources/js/login.js":
/*!*******************************!*\
  !*** ./resources/js/login.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $('#login_name').blur(function () {
    var name = $(this).val();
    name = name.trim();

    if (!name) {
      $('.alert-name').html('<p style="color: red; margin-left: 10px "><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Name is not null!</p>');
    } else {
      $('.alert-name').html('');
    }
  });
  $(document).on('blur', '#login_username', function () {
    var email = $(this).val();
    email = email.trim();

    if (!email) {
      $('.alert-email').html('<p style="color: red; margin-left: 10px "><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Email is not null!</p>');
    } else {
      $('.alert-email').html('');
    }
  });
  $(document).on('blur', '#login_password', function () {
    var password = $(this).val();
    password = password.trim();

    if (!password) {
      $('.alert-password').html('<p style="color: red; margin-left: 10px "><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Password is not null!</p>');
    } else {
      $('.alert-password').html('');
    }
  });
  $(document).on('blur', '#login_confirm_password', function () {
    var confirm_password = $(this).val();
    confirm_password = confirm_password.trim();

    if (!confirm_password) {
      $('.alert-confirm-password').html('<p style="color: red; margin-left: 10px "><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Confirm Password is not null!</p>');
    } else {
      $('.alert-confirm-password').html('');
    }
  });
  $(document).on('click', '.btn-submit-register', function () {
    var name = $(this).val();
    name = name.trim();

    if (!name) {
      $('.alert-name').html('<p style="color: red; margin-left: 10px "><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Name is not null!</p>');
    } else {
      $('.alert-name').html('');
    }
  });
});

/***/ }),

/***/ "./resources/js/logout.js":
/*!********************************!*\
  !*** ./resources/js/logout.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $("#logout").click(function (e) {
    e.preventDefault();
    $("#logout-form").submit();
  });
});

/***/ }),

/***/ "./resources/js/quickview.js":
/*!***********************************!*\
  !*** ./resources/js/quickview.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  var temp_size = 0;
  var temp_color = 0;
  var size;
  $('.btn-quickview').click(function () {
    var id = $(this).attr('data-id');
    temp_color = 0;
    temp_size = 0;
    $.ajax({
      url: '/product/quick-view',
      data: {
        'id': id
      },
      method: "GET",
      success: function success(scs) {
        var price = number_format(scs.price);
        var price_sale = number_format(scs.price_sale);
        var image;
        var color = '';
        var size_prd = '';
        $('.addToCart').attr('data-id', id);
        $('.product-name h1').html(scs.name);
        $('.special-price span:nth-child(2)').html(price_sale + " VND");
        $('.old-price span:nth-child(2)').html(price + " VND");
        $.each(scs.image_default, function (key, value) {
          image = value.image;
        });
        $('.large-image').html('<a href="' + image + '" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="' + image + '"> </a>');
        $('.short-description p').html(scs.detail);
        $.each(scs.color_prd, function (key, value) {
          color += '<li class="color_main"><a class="color_prd ' + value.color + '"></a><input style="display: none" type="checkbox" class="check_color" data-color="' + value.name + '"></li>';
        });
        $('.color ul').html(color);
        $.each(scs.size_prd, function (key, value) {
          size_prd += '<li class="size_main"><a class="size_prd">' + value.size + '</a><input style="display: none" type="checkbox" name="size" class="rad_size" data-size="' + value.size + '"></li>';
        });
        $('.size ul').html(size_prd);
      },
      error: function error() {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Something went wrong!'
        });
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
    var id = $(this).attr('data-id');
    var quantity = $('#qty').val();

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
        success: function success(scs) {
          var total_price = number_format(scs.total_price);
          $('#qty-product').text(scs.quantity);
          $('#sub_total_price').text(total_price);
          Swal.fire('Success!', 'Add to cart successfully!', 'success');
        },
        error: function error() {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!'
          });
        }
      });
    } else {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!'
      });
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

/***/ }),

/***/ "./resources/js/seemore.js":
/*!*********************************!*\
  !*** ./resources/js/seemore.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

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
      success: function success(scs) {
        var products = '';
        var price = '';
        var price_sale = '';
        var image;
        $.each(scs.products, function (key, value) {
          price = number_format(value.price);
          price_sale = number_format(value.price_sale);
          $.each(scs.image, function (key_image, value_image) {
            if (value.id == value_image.product_id) {
              image = value_image.image;
            }
          });
          products += '<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12"><div class="product-item"><div class="item-inner"><div class="product-thumbnail"><div class="btn-quickview"> <a href="quick_view.html"><span>Quick View</span></a></div><a href="/single_product/' + value.id + '" class="product-item-photo"> <img style="width: 196.500px; height: 294.203px;" class="product-image-photo" src="' + image + '" alt=""></a></div><div class="pro-box-info"><div class="item-info"><div class="info-inner"><div class="item-title"> <a title="' + value.name + '" href="/single_product/' + value.id + '">' + value.name + ' </a> </div><div class="item-content"><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div><div class="item-price"><div class="price-box"><p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> ' + price_sale + ' VND </span> </p><p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> ' + price + ' </span> </p></div></div></div></div></div><div class="box-hover"><div class="product-item-actions"><div class="pro-actions"><button class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button></div><div class="add-to-links" data-role="add-to-links"><a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"> <span>Wishlist</span> </a><a href="compare.html" class="action add-to-compare" title="Add to Compare"> <span>Compare</span> </a></div></div></div></div></div></div></li>';
        });
        $('.products-grid').append(products);

        if (scs.del == 1) {
          $('.pagination-area').remove();
        }
      },
      error: function error() {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Something went wrong!'
        });
      }
    });
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

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*****************************************************************************************************************************************************************************************************************************************************!*\
  !*** multi ./resources/js/jsclient.js ./resources/js/app.js ./resources/js/logout.js ./resources/js/addToCart.js ./resources/js/login.js ./resources/js/loading.js ./resources/js/quickview.js ./resources/js/seemore.js ./resources/sass/app.scss ***!
  \*****************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/duytu/Desktop/FW/resources/js/jsclient.js */"./resources/js/jsclient.js");
__webpack_require__(/*! /home/duytu/Desktop/FW/resources/js/app.js */"./resources/js/app.js");
__webpack_require__(/*! /home/duytu/Desktop/FW/resources/js/logout.js */"./resources/js/logout.js");
__webpack_require__(/*! /home/duytu/Desktop/FW/resources/js/addToCart.js */"./resources/js/addToCart.js");
__webpack_require__(/*! /home/duytu/Desktop/FW/resources/js/login.js */"./resources/js/login.js");
__webpack_require__(/*! /home/duytu/Desktop/FW/resources/js/loading.js */"./resources/js/loading.js");
__webpack_require__(/*! /home/duytu/Desktop/FW/resources/js/quickview.js */"./resources/js/quickview.js");
__webpack_require__(/*! /home/duytu/Desktop/FW/resources/js/seemore.js */"./resources/js/seemore.js");
module.exports = __webpack_require__(/*! /home/duytu/Desktop/FW/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });