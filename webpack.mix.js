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

mix.react('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .styles([
          'resources/css/index.css'
        ], 'public/css/all_styles.css')
    .styles([
           'resources/css/cover.css'
         ], 'public/css/cover.css')
   .styles([
          'resources/css/composer.css'
        ], 'public/css/composer.css')
    .styles([
          'node_modules/bootstrap/dist/css/bootstrap.min.css'
        ], 'public/css/bootstrap.css')
   .scripts([
              'resources/js/vendors/AC_RunActiveContent.js'
            ], 'public/js/all_scripts.js');
