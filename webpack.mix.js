let mix = require('laravel-mix');

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

mix.js(['public/source/js/plugins.js','public/source/js/functions.js','public/source/js/marquee.js','public/source/js/clipboard.min.js'], 'public/js/app.js')
   .styles([
            'public/source/css/bootstrap.css',
            'public/source/css/style.css',
            'public/source/css/color.css',
            'public/source/css/dark.css',
            'public/source/css/font-icons.css',
            'public/source/css/animate.css',
            'public/source/css/magnific-popup.css',
            'public/source/css/responsive.css'
          ], 'public/css/app.css')
   .sass('resources/assets/sass/app.scss','public/css/font-awesome.css')
