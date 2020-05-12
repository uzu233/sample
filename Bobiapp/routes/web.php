<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

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

//ルート情報の記載
//リスト7-31
Route::get('hello', 'HelloController@index')->middleware('auth');
Route::post('hello', 'HelloController@post');
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');
Route::get('hello/show', 'HelloController@show');
//リスト6-4
Route::get('person', 'PersonController@index');
//リスト6-9
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');
//リスト6-21
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');
//リスト6-24
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');
//リスト6-27
Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');
//リスト6-34
Route::get('board', 'BoardController@index');

Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');
//リスト7-6
Route::resource('rest', 'RestappController');
//リスト7-11
Route::get('hello/rest', 'HelloController@rest');
//リスト7-15
Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session', 'HelloController@ses_put');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//リスト7-34
Route::get('hello/auth', 'HelloController@getAuth');
Route::post('hello/auth', 'HelloController@postAuth');
