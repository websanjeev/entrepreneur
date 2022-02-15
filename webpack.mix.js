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

mix.setPublicPath( './assets' );
mix.setResourceRoot( '../' );

//mix.disableNotifications();

mix.js('assets/src/js/app.js', './assets/js/app.js')
   .sass('assets/src/scss/app.scss', './assets/css' )
   .copyDirectory( 'assets/src/images', './assets/images' );