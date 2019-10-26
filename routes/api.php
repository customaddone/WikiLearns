<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/homeSearch/{pass}", "WikiSearchController@homeSearch");

Route::get("/data/{pass}", "ArticlesController@dict");

Route::get("/datashow/{passId}", "ArticlesController@dictshow");

Route::get("/articlesShow/{pass}", "WikiSearchController@articlesShow");

Route::group(['middleware' => 'api'], function() {
  Route::post('add',  'ArticlesController@store');  //←追記
});
