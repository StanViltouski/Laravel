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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
    
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'WelcomeController@getIndex');
Route::get('portfolio', 'PortfolioController@getIndex');
Route::get('portfolio/{id}/{name}', 'PortfolioController@getPhoto');
Route::get('services', 'ServiceController@getIndex');
Route::get('studios', 'StudioController@getIndex');
Route::get('studios/{id}/{name}', 'StudioController@getPhoto');
Route::get('contacts', 'ContactController@getIndex');
Route::post('order', 'ContactController@postIndex');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
