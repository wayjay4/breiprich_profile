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

mix.react('resources/react/App.js', 'public/js/react')
  .sass('resources/sass/app.scss', 'public/css')



  .styles([
        'node_modules/bootstrap/dist/css/bootstrap.min.css'
      ], 'public/css/bootstrap/bootstrap.css')
  .styles([
         'resources/css/bootstrap/cover.css'
       ], 'public/css/bootstrap/cover.css')
  .styles([
        'resources/css/bootstrap/dashboard.css'
      ], 'public/css/bootstrap/dashboard.css')
  .styles([
         'resources/css/bio/composer.css'
       ], 'public/css/bio/composer.css')



  .scripts([
        'resources/js/bootstrap/dashboard.js'
      ], 'public/js/bootstrap/dashboard.js')
  .scripts([
        'resources/js/bio/composer.js'
      ], 'public/js/bio/composer.js')
  .scripts([
        'resources/js/vendors/AC_RunActiveContent.js'
      ], 'public/js/vendors/AC_RunActiveContent.js');
