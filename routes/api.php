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


Route::group(['middleware' => 'api'], function() {
  // wiki記事検索用
  Route::get("/homeSearch/{pass}", "WikiSearchController@homeSearch");
  // 辞書機能使用用
  Route::get("/data/{pass}", "ArticlesController@dict");
  Route::get("/datashow/{passId}", "ArticlesController@dictshow");
  // 記事ページ移動用
  Route::get("/articlesShow/{pass}", "WikiSearchController@articlesShow");
  // 記事のインポート用
  Route::get('/get',  'ArticlesController@index')
  ->middleware('modify');
  Route::get('/find/{id?}',  'ArticlesController@find')
  ->middleware('modify');
  Route::post('/add',  'ArticlesController@store')
  ->middleware('modify');  //←追記
  Route::post('/edit',  'ArticlesController@edit')
  ->middleware('modify'); 
});
