const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.scripts([
    'resources/js/jquery-1.12.4.min.js',
    'resources/js/jquery.plugin-countdown.min.js',
    'resources/js/jquery-countdown.min.js',
    'resources/js/bootstrap.min.js',
    'resources/js/owl.carousel.min.js',
    'resources/js/magnific-popup.min.js',
    'resources/js/isotope.min.js',
    'resources/js/jquery.scrollbar.min.js',
    'resources/js/jquery-ui.min.js',
    'resources/js/mobile-menu.js',
    'resources/js/chosen.min.js',
    'resources/js/slick.js',
    'resources/js/jquery.elevateZoom.min.js',
    'resources/js/jquery.actual.min.js',
    'resources/js/fancybox/source/jquery.fancybox.js',
    'resources/js/lightbox.min.js',
    'resources/js/owl.thumbs.min.js',
    'resources/js/jquery.scrollbar.min.js',
    'resources/js/frontend-plugin.js'
], 'public/js/all.js');

mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/font-awesome.min.css',
    'resources/css/owl.carousel.min.css',
    'resources/css/animate.min.css',
    'resources/css/jquery-ui.css',
    'resources/css/slick.css',
    'resources/css/chosen.min.css',
    'resources/css/pe-icon-7-stroke.css',
    'resources/css/magnific-popup.min.css',
    'resources/css/lightbox.min.css',
    'resources/js/fancybox/source/jquery.fancybox.css',
    'resources/css/jquery.scrollbar.min.css',
    'resources/css/mobile-menu.css',
    'resources/css/flaticon.css',
    'resources/css/style.css',
], 'public/css/all.css');
