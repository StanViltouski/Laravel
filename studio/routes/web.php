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



Route::group(['middleware' =>['no_user']], function(){ //ограничения для гостей 
    Route::get('poisk', 'PoiskController@getIndex')->middleware('lang');
    Route::get('basket', 'BasketController@getAll')->middleware('lang');
    Route::get('basket/delete/{id}', 'basketController@getDelete')->middleware('lang');
    Route::get('basket/add/{id}', 'BasketController@getAdd')->middleware('lang');
    Route::get('basket/deleteAll', 'basketController@getDeleteAll')->middleware('lang');
    Route::post('order', 'Ordercontroller@postIndex')->middleware('lang');
});

Route::group(['middleware' =>['user']], function(){ //ограничения для пользователей
    
});

Route::group(['middleware' =>['admin']], function(){ //ограничения для админа
    
});

Route::group(['middleware' =>['lang']], function(){
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
	Route::post('request_call', 'ContactController@postIndex'); //модальное окно
    Route::post('/ajax', 'AjaxController@postIndex');
	Route::get('/', 'BaseController@getIndex');
    Route::get('categories', 'TovarController@getAll')->middleware('no_user');
    Route::get('news', 'NewsController@getId');
    Route::get('news/{id}/{name}', 'NewsController@getBody');
    Route::get('projects', 'PageController@getAll');
	Route::get('/{url}', 'PageController@getIndex');
});





