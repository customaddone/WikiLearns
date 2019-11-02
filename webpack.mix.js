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
　　.js('resources/js/HomePageWave.js', 'public/js')
    // 記事表示用 末尾のsを忘れないように
    .scripts('resources/js/articlesShow.js', 'public/js/articlesShow.js')
    .scripts('resources/js/showInportArticle.js', 'public/js/showInportArticle.js')
    .sass('resources/sass/app.scss', 'public/css');
