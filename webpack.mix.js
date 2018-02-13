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

mix.scripts([
    'node_modules/jquery/dist/jquery.js', // This file is necessary
    'node_modules/popper.js/dist/umd/popper.js', // This file is necessary
    //'node_modules/bootstrap/js/dist/alert.js',
    'node_modules/bootstrap/js/dist/button.js',
    //'node_modules/bootstrap/js/dist/carousel.js',
    'node_modules/bootstrap/js/dist/collapse.js',
    'node_modules/bootstrap/js/dist/dropdown.js',
    'node_modules/bootstrap/js/dist/modal.js',
    //'node_modules/bootstrap/js/dist/popover.js',
    //'node_modules/bootstrap/js/dist/scrollspy.js',
    //'node_modules/bootstrap/js/dist/tab.js',
    'node_modules/bootstrap/js/dist/tooltip.js',
    'node_modules/bootstrap/js/dist/util.js', // This file is necessary for all the other modules
    //'node_modules/bootstrap/dist/js/bootstrap.js', // this is the full version
    'node_modules/startbootstrap-sb-admin/js/sb-admin.js',
    //'node_modules/startbootstrap-sb-admin/js/sb-admin-charts.js',
    //'node_modules/startbootstrap-sb-admin/js/sb-admin-datatables.js',
    'node_modules/jquery.easing/jquery.easing.js',
    'resources/assets/js/scripts.js'
], 'public/js/scripts.js').version();

mix.sass('resources/assets/sass/styles.scss', 'public/css').version();

mix.browserSync({
    proxy: 'l56admin.local',
    notify: false
});
