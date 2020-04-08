const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js([
   'resources/js/jsclient.js',
   'resources/js/app.js',
   'resources/js/logout.js',
   'resources/js/addToCart.js',
   'resources/js/login.js',
   'resources/js/loading.js',
   'resources/js/quickview.js',
   'resources/js/seemore.js',
], 'public/js')
.sass('resources/sass/app.scss', 'public/css');
