<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// まずUikitを使ってビューを作ろう
Route::get('/', function () {
    return view('home.index');
});

Route::match(["get", "options"],'/articles/wikishow/{pass?}', 'ArticlesController@wikishow');

Route::resource('/articles', 'ArticlesController');

Route::get('/seeMoreArticles', 'ArticlesController@seeMoreArticles');

Route::get('/articles/vocabula/{pass?}', 'ArticlesController@vocabula');

Auth::routes();

Route::get('/images', function () {
    return view('image.create');
});

Route::post('/images/create', 'ImagesController@create');
