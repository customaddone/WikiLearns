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

mix.js('resources/js/app.js', 'public/js')
    // ホームでの検索用 末尾のsを忘れないように
    .scripts('resources/js/searchWikiAPI.js', 'public/js/searchWikiAPI.js')
    .sass('resources/sass/app.scss', 'public/css');
